<!-- AI Support Button -->
{{-- <button id="ai-support" class="btn btn-primary ai-support-btn" role="button" aria-label="AI Support">
    <i class="fas fa-robot"></i>
</button>

<style>
    .ai-support-btn {
        position: fixed;
        bottom: 75px;
        right: 30px;
        width: 40px;
        height: 40px;
        padding: 0;
        border-radius: 4px;
        background-color: #007bff;
        border-color: #007bff;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        transition: all 0.3s ease;
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .ai-support-btn:hover {
        background-color: #0056b3;
        border-color: #0056b3;
        transform: translateY(-3px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
    }

    .ai-support-btn i {
        font-size: 20px;
        line-height: 50px;
    }
</style>

<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('#ai-support').fadeIn();
            } else {
                $('#ai-support').fadeOut();
            }
        });

        $('#ai-support').click(function() {
            Swal.fire({
                title: 'Hỗ trợ trả lời nhanh',
                text: 'AI sẽ giúp bạn trả lời các câu hỏi khảo sát một cách nhanh chóng và chính xác',
                icon: 'info',
                showCancelButton: true,
                confirmButtonText: 'Bắt đầu trả lời',
                cancelButtonText: 'Đóng'
            }).then((result) => {
                if (result.isConfirmed) {
                    startAIAssistant();
                }
            });
        });

        function startAIAssistant() {
            alert(
                'Chức năng hỗ trợ trả lời nhanh bằng AI đang trong quá trình phát triển. Vui lòng quay lại sau.'
            );
        }
    });
</script> --}}



<!-- Back to top button -->
<a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
    <i class="fas fa-arrow-up"></i>
</a>

<style>
    .back-to-top {
        position: fixed;
        bottom: 70px;
        right: 30px;
        display: none;
        width: 40px;
        height: 40px;
        padding: 0;
        border-radius: 4px;
        background-color: #007bff;
        border-color: #007bff;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        transition: all 0.3s ease;
    }

    .back-to-top:hover {
        background-color: #0056b3;
        border-color: #0056b3;
        transform: translateY(-3px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
    }

    .back-to-top i {
        line-height: 40px;
        font-size: 20px;
    }
</style>

<script>
    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });

        $('#back-to-top').click(function() {
            $('html, body').animate({
                scrollTop: 0
            }, 800);
            return false;
        });
    });
</script>
