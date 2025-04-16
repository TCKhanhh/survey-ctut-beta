<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SurveyController extends Controller
{
    public function viewListSurvey(Request $request)
    {
        $itemsPerPage = 6;
        $currentPage = $request->query('page', 1);

        $totalSurveys = DB::table('phieu_khao_sat')->count();

        $totalPages = ceil($totalSurveys / $itemsPerPage);
        $offset = ($currentPage - 1) * $itemsPerPage;

        $surveys = DB::table('phieu_khao_sat')
            ->select('id', 'ten_phieu', 'mo_ta', 'trang_thai', 'ngay_tao')
            ->orderBy('ngay_tao', 'desc')
            ->offset($offset)
            ->limit($itemsPerPage)
            ->get();

        return view('admin.pages.survey.list', [
            'surveys' => $surveys,
            'currentPage' => $currentPage,
            'totalPages' => $totalPages,
            'itemsPerPage' => $itemsPerPage,
        ]);
    }


    public function addSurvey(Request $request)
    {
        // Xác thực dữ liệu
        $request->validate([
            'ten_phieu' => 'required|string|max:255',
            'mo_ta' => 'nullable|string',
            'trang_thai' => 'required|in:Hoạt động,Không hoạt động',
            'ngay_bat_dau' => 'nullable|date',
            'ngay_ket_thuc' => 'nullable|date|after_or_equal:ngay_bat_dau',
        ]);

        try {
            // Thêm dữ liệu vào bảng phieu_khao_sat
            $id = DB::table('phieu_khao_sat')->insertGetId([
                'ten_phieu' => $request->ten_phieu,
                'mo_ta' => $request->mo_ta,
                'trang_thai' => $request->trang_thai,
                'ngay_bat_dau' => $request->ngay_bat_dau,
                'ngay_ket_thuc' => $request->ngay_ket_thuc,
                'ngay_tao' => now(),
            ]);

            // Lưu thông báo thành công vào session
            session()->flash('success', 'Thêm phiếu khảo sát thành công!');

            return response()->json([
                'success' => true,
                'message' => 'Thêm phiếu khảo sát thành công!',
                'id' => $id,
            ]);
        } catch (\Exception $e) {
            // Lưu thông báo lỗi vào session (tùy chọn)
            session()->flash('error', 'Lỗi khi thêm phiếu khảo sát: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Lỗi khi thêm phiếu khảo sát: ' . $e->getMessage(),
            ], 500);
        }
    }


    public function edit($id)
    {
        $survey = DB::table('phieu_khao_sat')->where('id', $id)->first();
        if ($survey) {
            return response()->json(['success' => true, 'survey' => $survey]);
        }
        return response()->json(['success' => false, 'message' => 'Không tìm thấy phiếu khảo sát']);
    }


    // public function update(Request $request, $id)
    // {
    //     $data = $request->only(['ten_phieu', 'mo_ta', 'trang_thai', 'ngay_bat_dau', 'ngay_ket_thuc']);
    //     $updated = DB::table('phieu_khao_sat')->where('id', $id)->update($data);

    //     return response()->json(['success' => $updated]);
    // }

    public function update(Request $request, $id)
    {
        // Xác thực dữ liệu
        $request->validate([
            'ten_phieu' => 'required|string|max:255',
            'mo_ta' => 'nullable|string',
            'trang_thai' => 'required|in:Hoạt động,Không hoạt động',
            'ngay_bat_dau' => 'nullable|date',
            'ngay_ket_thuc' => 'nullable|date|after_or_equal:ngay_bat_dau',
        ]);

        try {
            // Cập nhật dữ liệu
            $updated = DB::table('phieu_khao_sat')
                ->where('id', $id)
                ->update($request->only(['ten_phieu', 'mo_ta', 'trang_thai', 'ngay_bat_dau', 'ngay_ket_thuc']));

            // Trả về kết quả
            session()->flash('success', 'Cập nhật phiếu khảo sát thành công!');

            return response()->json([
                'success' => true,
                'message' => 'Cập nhật phiếu khảo sát thành công!',
                'id' => $id,
            ]);
        } catch (\Exception $e) {
            // Lưu thông báo lỗi vào session (tùy chọn)
            session()->flash('error', 'Lỗi khi cập nhật phiếu khảo sát: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Lỗi khi cập nhật phiếu khảo sát: ' . $e->getMessage(),
            ], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $deleted = DB::table('phieu_khao_sat')->where('id', $id)->delete();
            return response()->json([
                'success' => $deleted,
                'message' => $deleted ? 'Xóa thành công!' : 'Không tìm thấy khảo sát.',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Lỗi khi xóa: ' . $e->getMessage(),
            ], 500);
        }
    }
}
