<div class="modal fade" id="editSurveyModal" tabindex="-1" role="dialog" aria-labelledby="editSurveyModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editSurveyModalLabel">Chỉnh Sửa Phiếu Khảo Sát</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="max-height: 70vh; overflow-y: auto;">
                <form id="editSurveyForm">
                    @csrf
                    <input type="hidden" id="edit_id" name="id">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="edit_ten_phieu">Tên Phiếu Khảo Sát</label>
                                <input type="text" class="form-control" id="edit_ten_phieu" name="ten_phieu"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="edit_mo_ta">Mô Tả</label>
                                <textarea class="form-control" id="edit_mo_ta" name="mo_ta" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="edit_trang_thai">Trạng Thái</label>
                                <select class="form-control" id="edit_trang_thai" name="trang_thai" required>
                                    <option value="Hoạt động">Hoạt động</option>
                                    <option value="Không hoạt động">Không hoạt động</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="edit_ngay_bat_dau">Ngày Bắt Đầu</label>
                                <input type="datetime-local" class="form-control" id="edit_ngay_bat_dau"
                                    name="ngay_bat_dau">
                            </div>
                            <div class="form-group">
                                <label for="edit_ngay_ket_thuc">Ngày Kết Thúc</label>
                                <input type="datetime-local" class="form-control" id="edit_ngay_ket_thuc"
                                    name="ngay_ket_thuc">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="updateSurvey">Cập Nhật</button>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        // Set CSRF Token for AJAX
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            // Bắt sự kiện click nút Sửa
            $('.btn-edit').click(function() {
                let surveyId = $(this).data('id');

                // Gửi AJAX để lấy dữ liệu khảo sát
                $.ajax({
                    url: '/surveys/' + surveyId + '/edit',
                    type: 'GET',
                    success: function(response) {
                        if (response.success) {
                            let survey = response.survey;
                            $('#edit_id').val(survey.id);
                            $('#edit_ten_phieu').val(survey.ten_phieu);
                            $('#edit_mo_ta').val(survey.mo_ta);
                            $('#edit_trang_thai').val(survey.trang_thai);
                            $('#edit_ngay_bat_dau').val(survey.ngay_bat_dau);
                            $('#edit_ngay_ket_thuc').val(survey.ngay_ket_thuc);

                            // Hiển thị modal sau khi load dữ liệu thành công
                            $('#editSurveyModal').modal('show');
                        } else {
                            toastr.error(response.message);
                        }
                    },
                    error: function() {
                        toastr.error('Lỗi khi tải dữ liệu khảo sát');
                    }
                });
            });
        });


        $('#updateSurvey').click(function() {
            let id = $('#edit_id').val();
            let formData = $('#editSurveyForm').serialize();

            $.ajax({
                url: `/surveys/${id}`,
                type: 'POST',
                data: formData,
                success: function(response) {
                    if (response.success) {
                        // Ẩn modal, reload và hiển thị thông báo thành công
                        $('#editSurveyModal').modal('hide');
                        location.reload();
                    } else {
                        alert('Có lỗi xảy ra: ' + response.message);
                    }
                },
                error: function(xhr) {
                    alert('Lỗi: ' + xhr.responseText);
                }
            });
        });


        // Update Survey
        // $('#updateSurvey').click(function() {
        //     const id = $('#edit_id').val();
        //     const formData = $('#editSurveyForm').serialize();
        //     $.post(`/surveys/${id}`, formData, function(response) {
        //         if (response.success) {
        //             // toastr.success('Cập nhật thành công!');
        //             $('#editSurveyModal').modal('hide');
        //             location.reload();
        //         } else {
        //             toastr.error('Cập nhật thất bại!');
        //         }
        //     }).fail(function() {
        //         toastr.error('Có lỗi xảy ra, vui lòng thử lại!');
        //     });
        // });
    });
</script>
