<div class="modal fade" id="addSurveyModal" tabindex="-1" role="dialog" aria-labelledby="addSurveyModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addSurveyModalLabel">Thêm Phiếu Khảo Sát</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="max-height: 70vh; overflow-y: auto;">
                <form id="addSurveyForm">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ten_phieu">Tên Phiếu Khảo Sát</label>
                                <input type="text" class="form-control" id="ten_phieu" name="ten_phieu" required
                                    placeholder="Nhập tên phiếu khảo sát">
                            </div>
                            <div class="form-group">
                                <label for="mo_ta">Mô Tả</label>
                                <textarea class="form-control" id="mo_ta" name="mo_ta" rows="3" placeholder="Nhập mô tả"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="trang_thai">Trạng Thái</label>
                                <select class="form-control" id="trang_thai" name="trang_thai" required>
                                    <option value="Hoạt động">Hoạt động</option>
                                    <option value="Không hoạt động">Không hoạt động</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="ngay_bat_dau">Ngày Bắt Đầu</label>
                                <input type="datetime-local" class="form-control" id="ngay_bat_dau" name="ngay_bat_dau">
                            </div>
                            <div class="form-group">
                                <label for="ngay_ket_thuc">Ngày Kết Thúc</label>
                                <input type="datetime-local" class="form-control" id="ngay_ket_thuc"
                                    name="ngay_ket_thuc">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="saveSurvey">Lưu</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#saveSurvey').click(function() {
            let formData = $('#addSurveyForm').serialize();

            $.ajax({
                url: '{{ route('addSurvey') }}',
                type: 'POST',
                data: formData,
                success: function(response) {
                    if (response.success) {
                        // Không cần alert nữa vì sẽ dùng toastr sau khi reload
                        $('#addSurveyModal').modal('hide');
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
    });
</script>
