<?php include 'app/views/shares/header.php'; ?>
<h1>Thêm danh mục mới</h1>

<form method="POST" action="/NguyenVanAn/Category/save">
    <div class="form-group">
        <label for="name">Tên danh mục: </label>
        <input type="text" id="name" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="description">Mô tả danh mục: </label>
        <textarea id="description" name="description" class="form-control" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Lưu danh mục</button>
</form>

<a href="/NguyenVanAn/Product/add" class="btn btn-secondary mt-2">Quay lại trang thêm sản phẩm</a>
<?php include 'app/views/shares/footer.php'; ?>