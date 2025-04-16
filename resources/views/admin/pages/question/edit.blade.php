<!-- Modal Edit Question -->
<div class="modal fade" id="editQuestionModal" tabindex="-1" role="dialog" aria-labelledby="editQuestionModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editQuestionModalLabel">Chỉnh sửa câu hỏi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" style="max-height: 70vh; overflow-y: auto;">
                <form id="editQuestionForm">
                    <input type="hidden" name="question_id" value="1">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Chọn phiếu khảo sát</label>
                                <select class="form-control" name="survey_id" required>
                                    <option value="">-- Chọn phiếu khảo sát --</option>
                                    <option value="1" selected>Khảo sát về chất lượng dịch vụ</option>
                                    <option value="2">Khảo sát mức độ hài lòng</option>
                                    <option value="3">Khảo sát ý kiến khách hàng</option>
                                    <option value="4">Khảo sát nhu cầu thị trường</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Nội dung câu hỏi</label>
                                <textarea class="form-control" name="content" rows="3" required>Bạn đánh giá như thế nào về chất lượng dịch vụ của chúng tôi?</textarea>
                            </div>

                            <div class="form-group">
                                <label>Loại câu hỏi</label>
                                <select class="form-control" name="type" id="editQuestionType" required>
                                    <option value="">-- Chọn loại câu hỏi --</option>
                                    <option value="radio" selected>Radio Box</option>
                                    <option value="checkbox">Check Box</option>
                                    <option value="text">Text</option>
                                    <option value="select">Select Option</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div id="editAnswerOptions">
                                <div class="form-group">
                                    <label>Câu trả lời</label>
                                    <div id="editOptionsList">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">A</span>
                                            </div>
                                            <input type="text" class="form-control" name="answers[]" value="Rất tốt">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-danger remove-option">Xóa</button>
                                            </div>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">B</span>
                                            </div>
                                            <input type="text" class="form-control" name="answers[]" value="Tốt">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-danger remove-option">Xóa</button>
                                            </div>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">C</span>
                                            </div>
                                            <input type="text" class="form-control" name="answers[]"
                                                value="Bình thường">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-danger remove-option">Xóa</button>
                                            </div>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">D</span>
                                            </div>
                                            <input type="text" class="form-control" name="answers[]"
                                                value="Không tốt">
                                            <div class="input-group-append">
                                                <button type="button" class="btn btn-danger remove-option">Xóa</button>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-success mt-2" id="editAddOption">Thêm câu trả
                                        lời</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="updateQuestion">Cập nhật</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        let editOptionCount = 4;

        $('#editQuestionType').change(function() {
            const type = $(this).val();
            if (type === 'radio' || type === 'checkbox' || type === 'select') {
                $('#editAnswerOptions').show();
            } else {
                $('#editAnswerOptions').hide();
            }
        });

        $('#editAddOption').click(function() {
            const newOption = `
                      <div class="input-group mb-2">
                          <div class="input-group-prepend">
                              <span class="input-group-text">${String.fromCharCode(65 + editOptionCount)}</span>
                          </div>
                          <input type="text" class="form-control" name="answers[]">
                          <div class="input-group-append">
                              <button type="button" class="btn btn-danger remove-option">Xóa</button>
                          </div>
                      </div>
                  `;
            $('#editOptionsList').append(newOption);
            editOptionCount++;
        });

        $(document).on('click', '.remove-option', function() {
            $(this).closest('.input-group').remove();
            editOptionCount--;
            updateEditOptionLabels();
        });

        function updateEditOptionLabels() {
            $('#editOptionsList .input-group-text').each(function(index) {
                $(this).text(String.fromCharCode(65 + index));
            });
        }
    });
</script>
