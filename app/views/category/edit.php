<?php include 'app/views/shares/header.php'; ?>
<h1>Sửa danh mục</h1>

<form method="POST" action="/NguyenVanAn/Category/update">
    <input type="hidden" name="id" value="<?php echo $category->id; ?>">
    <div class="form-group">
        <label for="name">Tên danh mục: </label>
        <input type="text" id="name" name="name" class="form-control" value="<?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?>" required>
    </div>
    <div class="form-group">
        <label for="description">Mô tả danh mục: </label>
        <textarea id="description" name="description" class="form-control" required><?php echo htmlspecialchars($category->description, ENT_QUOTES, 'UTF-8'); ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
</form>

<a href="/NguyenVanAn/Category/list" class="btn btn-secondary mt-2">Quay lại danh sách danh mục</a>
<?php include 'app/views/shares/footer.php'; ?>