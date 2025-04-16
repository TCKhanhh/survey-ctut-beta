$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#saveSurvey').click(function () {
        let formData = $('#addSurveyForm').serialize();

        $.ajax({
            url: baseUrl + '/admin/survey/add',
            type: 'POST',
            data: formData,
            success: function (response) {
                if (response.success) {
                    $('#addSurveyModal').modal('hide');
                    location.reload();
                } else {
                    alert('Có lỗi xảy ra: ' + response.message);
                }
            },
            error: function (xhr) {
                alert('Lỗi: ' + xhr.responseText);
            }
        });
    });
});