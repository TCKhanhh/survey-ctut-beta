<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>403 - Truy cập bị từ chối | Hệ thống Khảo sát</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
            background: #f8f9fa;
            font-family: 'Nunito', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .error-template {
            padding: 20px 15px;
            text-align: center;
            width: 100%;
        }

        .error-actions {
            margin-top: 15px;
            margin-bottom: 15px;
        }

        .error-actions .btn {
            margin: 5px;
            white-space: nowrap;
        }

        .error-number {
            font-size: 120px;
            font-weight: 600;
            color: #dc3545;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .error-number {
                font-size: 100px;
            }
        }

        @media (max-width: 576px) {
            .error-number {
                font-size: 80px;
            }
        }

        .error-details {
            font-size: 18px;
            color: #6c757d;
            margin: 20px 0;
            padding: 0 15px;
        }

        .container {
            max-width: 100%;
            padding: 0 15px;
        }

        .modal-dialog {
            margin: 1rem;
            max-width: 100%;
        }

        @media (min-width: 576px) {
            .modal-dialog {
                max-width: 500px;
                margin: 1.75rem auto;
            }
        }

        .search-form .input-group {
            width: 100%;
        }

        .search-form .form-control {
            height: 46px;
        }

        .search-form .btn {
            padding: 10px 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                <div class="error-template">
                    <div class="error-number">403</div>
                    <h2 class="text-danger mb-3"><i class="fas fa-ban"></i> Truy cập bị từ chối</h2>
                    <div class="error-details">
                        Bạn không có quyền truy cập vào trang này.
                    </div>
                    <div class="error-actions">
                        <a href="{{ url('/') }}" class="btn btn-primary btn-lg">
                            <i class="fas fa-home"></i> Trang chủ
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tìm kiếm -->
    <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="searchModalLabel">Tìm kiếm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="search-form" action="#" method="GET">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control"
                                placeholder="Nhập từ khóa tìm kiếm...">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
