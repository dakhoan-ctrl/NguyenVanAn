<?php include 'app/views/shares/header.php'; ?>
<div class="container mt-4">
    <h1>Chi tiết sản phẩm</h1>
    <div class="row mt-4">
        <div class="col-md-5 text-center">
            <?php if ($product->image): ?>
                <img src="/NguyenVanAn/<?php echo $product->image; ?>" alt="<?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?>" class="img-fluid border p-2" style="max-height: 400px;">
            <?php else: ?>
                <div class="alert alert-secondary text-center p-5">Chưa có hình ảnh</div>
            <?php endif; ?>
        </div>
        <div class="col-md-7">
            <h2><?php echo htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8'); ?></h2>
            <h3 class="text-danger font-weight-bold my-3"><?php echo number_format($product->price, 0, ',', '.'); ?> VND</h3>
            <p><strong>Danh mục:</strong> <?php echo htmlspecialchars($product->category_name ?? 'Chưa xác định', ENT_QUOTES, 'UTF-8'); ?></p>
            <p><strong>Mô tả sản phẩm:</strong></p>
            <p class="text-justify"><?php echo nl2br(htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8')); ?></p>
            
            <div class="mt-4">
                <a href="/NguyenVanAn/Product/addToCart/<?php echo $product->id; ?>" class="btn btn-primary btn-lg">Thêm vào giỏ hàng</a>
                <a href="/NguyenVanAn/Product/index" class="btn btn-secondary btn-lg ml-2">Quay lại mua sắm</a>
            </div>
        </div>
    </div>
</div>
<?php include 'app/views/shares/footer.php'; ?>