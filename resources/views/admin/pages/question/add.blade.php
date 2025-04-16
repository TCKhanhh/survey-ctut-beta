<div class="modal fade" id="addQuestionModal" tabindex="-1" role="dialog" aria-labelledby="addQuestionModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addQuestionModalLabel">Thêm câu hỏi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" style="max-height: 70vh; overflow-y: auto;">
                <form id="addQuestionForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Chọn phiếu khảo sát</label>
                                <select class="form-control" name="survey_id" required>
                                    <option value="">-- Chọn phiếu khảo sát --</option>
                                    <option value="1">Khảo sát về chất lượng dịch vụ</option>
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
                                <select class="form-control" name="type" id="questionType" required>
                                    <option value="">-- Chọn loại câu hỏi --</option>
                                    <option value="radio" selected>Radio Box</option>
                                    <option value="checkbox">Check Box</option>
                                    <option value="text">Text</option>
                                    <option value="select">Select Option</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div id="answerOptions">
                                <div class="form-group">
                                    <label>Câu trả lời</label>
                                    <div id="optionsList">
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
                                    <button type="button" class="btn btn-success mt-2" id="addOption">Thêm câu trả
                                        lời</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button type="button" class="btn btn-primary" id="saveQuestion">Lưu</button>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        let optionCount = 4;

        $('#questionType').change(function() {
            const type = $(this).val();
            if (type === 'radio' || type === 'checkbox' || type === 'select') {
                $('#answerOptions').show();
            } else {
                $('#answerOptions').hide();
            }
        });

        $('#addOption').click(function() {
            const newOption = `
                      <div class="input-group mb-2">
                          <div class="input-group-prepend">
                              <span class="input-group-text">${String.fromCharCode(65 + optionCount)}</span>
                          </div>
                          <input type="text" class="form-control" name="answers[]">
                          <div class="input-group-append">
                              <button type="button" class="btn btn-danger remove-option">Xóa</button>
                          </div>
                      </div>
                  `;
            $('#optionsList').append(newOption);
            optionCount++;
        });

        $(document).on('click', '.remove-option', function() {
            $(this).closest('.input-group').remove();
            optionCount--;
            updateOptionLabels();
        });

        function updateOptionLabels() {
            $('#optionsList .input-group-text').each(function(index) {
                $(this).text(String.fromCharCode(65 + index));
            });
        }
    });
</script>
