<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý hệ thống</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
        <a class="navbar-brand font-weight-bold" href="/NguyenVanAn/">CỬA HÀNG</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link" href="/NguyenVanAn/Product/index">Sản phẩm</a></li>
                <li class="nav-item"><a class="nav-link" href="/NguyenVanAn/Category/list">Danh mục</a></li>
                <li class="nav-item"><a class="nav-link" href="/NguyenVanAn/Order/index">Quản lý Đơn hàng</a></li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-info btn-sm text-info font-weight-bold px-3" href="/NguyenVanAn/Product/cart">
                        Giỏ hàng
                        <?php 
                            $cartCount = 0;
                            if(isset($_SESSION['cart'])) {
                                foreach($_SESSION['cart'] as $item) { $cartCount += $item['quantity']; }
                            }
                        ?>
                        <span class="badge badge-info ml-1"><?php echo $cartCount; ?></span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4 mb-5">