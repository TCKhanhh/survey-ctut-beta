// $(document).ready(function () {
//     // Bắt sự kiện click trên các liên kết trong sidebar
//     $(document).on('click', 'a.ajax-link', function (e) {
//         e.preventDefault(); // Ngăn chặn load trang

//         var url = $(this).attr('href'); // Lấy URL từ thẻ a

//         $.ajax({
//             url: url,
//             type: 'GET',


//             beforeSend: function () {
//                 $('#main-content').html(`
//                     <div id="loading-overlay" class="d-flex align-items-center justify-content-center vh-100">
//                         <div class="text-center">
//                             <div class="spinner-border text-info" role="status" style="width: 1.38rem; height: 1.38rem;"></div>
//                             <p class="mt-3 text-muted">Đang tải...</p>
//                         </div>
//                     </div>
//                 `);
//             },


//             success: function (response) {
//                 $('#main-content').html($(response).find('#main-content').html());
//                 history.pushState(null, '', url); // Cập nhật URL mà không tải lại trang
//             },
//             error: function () {
//                 alert('Có lỗi xảy ra, vui lòng thử lại!');
//             }
//         });
//     });

//     // Xử lý nút "Back" trên trình duyệt
//     window.onpopstate = function () {
//         location.reload();
//     };
// });


$(document).ready(function () {
    // Bắt sự kiện click trên các liên kết trong sidebar
    $(document).on('click', 'a.ajax-link', function (e) {
        e.preventDefault();

        // Remove active class from all sidebar links
        $('a.ajax-link').removeClass('active');

        // Add active class to clicked link
        $(this).addClass('active');

        var url = $(this).attr('href');

        $.ajax({
            url: url,
            type: 'GET',
            beforeSend: function () {
                $('#main-content').html(`
                    <div id="loading-overlay" class="d-flex align-items-center justify-content-center vh-100">
                        <div class="text-center">
                            <div class="spinner-border text-info" role="status" style="width: 1.38rem; height: 1.38rem;"></div>
                            <p class="mt-3 text-muted">Đang tải...</p>
                        </div>
                    </div>
                `);
            },
            success: function (response) {
                $('#main-content').html($(response).find('#main-content').html());
                history.pushState(null, '', url);
            },
            error: function () {
                alert('Có lỗi xảy ra, vui lòng thử lại!');
            }
        });
    });

    // Xử lý nút "Back" trên trình duyệt
    window.onpopstate = function () {
        location.reload();
    };

    // Set active class based on current URL when page loads
    var currentPath = window.location.pathname;
    $('a.ajax-link').each(function () {
        if ($(this).attr('href') === currentPath) {
            $(this).addClass('active');
        }
    });
});
