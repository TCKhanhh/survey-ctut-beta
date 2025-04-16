<!-- Modal Delete Survey -->
<div class="modal fade" id="deleteSurveyModal" tabindex="-1" role="dialog" aria-labelledby="deleteSurveyModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteSurveyModalLabel">Xác Nhận Xóa Khảo Sát</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-0">Bạn có chắc chắn muốn xóa khảo sát <span class="font-weight-bold mt-2 mb-0"
                        id="delete-survey-title"></span> này không?
                </p>
                {{-- <p class="font-weight-bold mt-2 mb-0" id="delete-survey-title"></p> --}}

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                <button type="button" class="btn btn-danger" id="btn-confirm-delete">Xóa</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        let deleteSurveyId = null;

        // Mở modal và lấy ID + Tên phiếu
        $('.btn-delete').click(function() {
            deleteSurveyId = $(this).data('id');
            const surveyTitle = $(this).data('ten_phieu');
            $('#delete-survey-title').text(surveyTitle);
            $('#deleteSurveyModal').modal('show');
        });

        // Xác nhận xóa
        $('#btn-confirm-delete').click(function() {
            if (deleteSurveyId) {
                $.ajax({
                    url: `/surveys/${deleteSurveyId}`,
                    type: 'DELETE',
                    success: function(response) {
                        $('#deleteSurveyModal').modal('hide');
                        response.success ? toastr.success(response.message) : toastr.error(
                            response.message);
                        setTimeout(() => location.reload(), 1000);
                    },
                    error: function(xhr) {
                        $('#deleteSurveyModal').modal('hide');
                        toastr.error('Lỗi khi xóa: ' + xhr.responseText);
                    }
                });
            }
        });
    });
</script>
