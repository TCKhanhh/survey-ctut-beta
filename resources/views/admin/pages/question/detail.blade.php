<!-- Modal -->
<div class="modal fade" id="detailQuestionModal" tabindex="-1" role="dialog" aria-labelledby="detailQuestionModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailQuestionModalLabel">Chi tiết câu hỏi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body" style="max-height: 70vh; overflow-y: auto;">
                <form id="detailQuestionForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phiếu khảo sát</label>
                                <input type="text" class="form-control" name="survey_id"
                                    value="Khảo sát mức độ hài lòng của khách hàng" readonly>
                            </div>

                            <div class="form-group">
                                <label>Nội dung câu hỏi</label>
                                <textarea class="form-control" name="content" rows="3" readonly>Bạn đánh giá thế nào về chất lượng dịch vụ của chúng tôi?</textarea>
                            </div>

                            <div class="form-group">
                                <label>Loại câu hỏi</label>
                                <input type="text" class="form-control" name="type"
                                    value="Trắc nghiệm một lựa chọn" readonly>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div id="answerOptionsDetail">
                                <div class="form-group">
                                    <label>Câu trả lời</label>
                                    <div id="optionsListDetail">
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">A</span>
                                            </div>
                                            <input type="text" class="form-control" value="Rất hài lòng" readonly>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">B</span>
                                            </div>
                                            <input type="text" class="form-control" value="Hài lòng" readonly>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">C</span>
                                            </div>
                                            <input type="text" class="form-control" value="Bình thường" readonly>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">D</span>
                                            </div>
                                            <input type="text" class="form-control" value="Không hài lòng" readonly>
                                        </div>
                                        <div class="input-group mb-2">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">E</span>
                                            </div>
                                            <input type="text" class="form-control" value="Rất không hài lòng"
                                                readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
