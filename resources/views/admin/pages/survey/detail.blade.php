  <div class="modal fade" id="viewSurveyModal" tabindex="-1" role="dialog" aria-labelledby="viewSurveyModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-resizable modal-dialog-scrollable" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="viewSurveyModalLabel">Chi Tiết Khảo Sát</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="row">
                      <div class="col-12 col-md-6 mb-3 mb-md-0">

                          <div class="card h-100">
                              <div class="card-header bg-success text-white py-2">
                                  <h6 class="mb-0">Thêm câu hỏi mới</h6>
                              </div>
                              <div class="card-body" style="max-height: 70vh; overflow-y: auto;">
                                  <form id="addQuestionForm">
                                      <div class="form-group">
                                          <label>Nội dung câu hỏi</label>
                                          <textarea class="form-control" name="content" rows="3" required></textarea>
                                      </div>
                                      <div class="form-group">
                                          <label>Loại câu hỏi</label>
                                          <select class="form-control" name="type" id="questionType" required>
                                              <option value="">-- Chọn loại câu hỏi --</option>
                                              <option value="radio">Radio Box</option>
                                              <option value="checkbox">Check Box</option>
                                              <option value="text">Text</option>
                                              <option value="select">Select Option</option>
                                          </select>
                                      </div>
                                      <div id="answerOptions">
                                          <div class="form-group">
                                              <label>Câu trả lời</label>
                                              <div id="optionsList">
                                                  <div class="input-group mb-2">
                                                      <div class="input-group-prepend">
                                                          <span class="input-group-text">A</span>
                                                      </div>
                                                      <input type="text" class="form-control" name="answers[]">
                                                      <div class="input-group-append">
                                                          <button type="button"
                                                              class="btn btn-danger remove-option">Xóa</button>
                                                      </div>
                                                  </div>
                                              </div>
                                              <button type="button" class="btn btn-success mt-2" id="addOption">Thêm
                                                  câu trả lời</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                          </div>

                      </div>
                      <div class="col-12 col-md-6">

                          <div class="card h-100">
                              <div class="card-header bg-primary text-white py-2">
                                  <h6 class="mb-0">Danh sách câu hỏi</h6>
                              </div>
                              <div class="card-body p-0" style="max-height: 70vh; overflow-y: auto;">
                                  <div class="list-group list-group-flush" id="questionsList">
                                      <div class="list-group-item py-2 bg-light">
                                          <div class="form-group mb-2">
                                              <label class="font-weight-bold text-primary h6 mb-2">Tiêu đề Khảo
                                                  Sát</label>
                                              <p class="form-control-static mb-0 text-break" id="survey-title"
                                                  style="font-size: 1.1rem; color: #2c3e50;">
                                                  Khảo sát
                                                  về mức độ
                                                  hài lòng của khách hàng</p>
                                          </div>
                                      </div>
                                      <div class="list-group-item py-2" style="background-color: #f8f9fa;">
                                          <div class="form-group mb-2">
                                              <label class="font-weight-bold text-secondary small">Mô tả Khảo
                                                  Sát</label>
                                              <p class="form-control-static mb-0 text-break text-muted small"
                                                  id="survey-description" style="font-style: italic;">
                                                  Khảo sát này
                                                  nhằm đánh giá mức độ hài lòng của khách hàng về sản phẩm và dịch vụ
                                                  của chúng tôi</p>
                                          </div>
                                      </div>
                                      <div class="list-group-item py-2">
                                          <div class="d-flex align-items-center bg-light rounded">
                                              <div class="form-group mb-0 flex-grow-1">
                                                  <label class="font-weight-bold text-primary small">Câu hỏi 1</label>
                                                  <p class="form-control-static mb-0 text-break small question-text"
                                                      style="word-wrap: break-word; white-space: normal; overflow-wrap: break-word;">
                                                      Bạn
                                                      đánh
                                                      giá thế nào về chất lượng
                                                      sản
                                                      phẩm?1111111111111111111111111111111111111111111111111111111111111111111
                                                  </p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="list-group-item py-2">
                                          <div class="d-flex align-items-center bg-light rounded">
                                              <div class="form-group mb-0 flex-grow-1">
                                                  <label class="font-weight-bold text-primary small">Câu hỏi 1</label>
                                                  <p class="form-control-static mb-0 text-break small question-text"
                                                      style="word-wrap: break-word; white-space: normal; overflow-wrap: break-word;">
                                                      Bạn
                                                      đánh
                                                      giá thế nào về chất lượng
                                                      sản
                                                      phẩm?1111111111111111111111111111111111111111111111111111111111111111111
                                                  </p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="list-group-item py-2">
                                          <div class="d-flex align-items-center bg-light rounded">
                                              <div class="form-group mb-0 flex-grow-1">
                                                  <label class="font-weight-bold text-primary small">Câu hỏi 1</label>
                                                  <p class="form-control-static mb-0 text-break small question-text"
                                                      style="word-wrap: break-word; white-space: normal; overflow-wrap: break-word;">
                                                      Bạn
                                                      đánh
                                                      giá thế nào về chất lượng
                                                      sản
                                                      phẩm?1111111111111111111111111111111111111111111111111111111111111111111
                                                  </p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="list-group-item py-2">
                                          <div class="d-flex align-items-center bg-light rounded">
                                              <div class="form-group mb-0 flex-grow-1">
                                                  <label class="font-weight-bold text-primary small">Câu hỏi 1</label>
                                                  <p class="form-control-static mb-0 text-break small question-text"
                                                      style="word-wrap: break-word; white-space: normal; overflow-wrap: break-word;">
                                                      Bạn
                                                      đánh
                                                      giá thế nào về chất lượng
                                                      sản
                                                      phẩm?1111111111111111111111111111111111111111111111111111111111111111111
                                                  </p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="list-group-item py-2">
                                          <div class="d-flex align-items-center bg-light rounded">
                                              <div class="form-group mb-0 flex-grow-1">
                                                  <label class="font-weight-bold text-primary small">Câu hỏi 1</label>
                                                  <p class="form-control-static mb-0 text-break small question-text"
                                                      style="word-wrap: break-word; white-space: normal; overflow-wrap: break-word;">
                                                      Bạn
                                                      đánh
                                                      giá thế nào về chất lượng
                                                      sản
                                                      phẩm?1111111111111111111111111111111111111111111111111111111111111111111
                                                  </p>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-success" id="saveQuestion">
                      <i class="fas fa-save mr-1"></i> Lưu câu hỏi
                  </button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">
                      <i class="fas fa-times mr-1"></i> Đóng
                  </button>
              </div>
          </div>
      </div>
  </div>

  <script>
      $(document).ready(function() {
          let optionCount = 1;

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

  <style>
      @media (min-width: 992px) {
          .modal-dialog-resizable {
              max-width: 80vw;
              margin: 1.75rem auto;
          }
      }

      @media (max-width: 991.98px) {
          .modal-dialog-resizable {
              max-width: 95vw;
              margin: 1rem auto;
          }
      }

      .modal-content {
          border-radius: 0.5rem;
      }

      .card {
          border-radius: 0.25rem;
          box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
      }

      .form-control-static {
          max-width: 100%;
          overflow-wrap: break-word;
          word-wrap: break-word;
          hyphens: auto;
      }

      #answerOptions {
          display: none;
      }

      .list-group-item {
          border-left: none;
          border-right: none;
      }

      .list-group-item:first-child {
          border-top: none;
      }

      .list-group-item:last-child {
          border-bottom: none;
      }

      .question-text {
          word-wrap: break-word;
          white-space: normal !important;
          overflow-wrap: break-word;
          max-width: 100%;
      }
  </style>
