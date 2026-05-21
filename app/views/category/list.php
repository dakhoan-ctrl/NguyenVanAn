<?php include 'app/views/shares/header.php'; ?>
<h1>Danh sách danh mục</h1>
<a href="/NguyenVanAn/Category/add" class="btn btn-success mb-2">Thêm danh mục mới</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Tên danh mục</th>
            <th>Mô tả</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($categories as $category): ?>
        <tr>
            <td><?php echo htmlspecialchars($category->name, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php echo htmlspecialchars($category->description, ENT_QUOTES, 'UTF-8'); ?></td>
            <td>
                <a href="/NguyenVanAn/Category/edit/<?php echo $category->id; ?>" class="btn btn-warning btn-sm">Sửa</a>
                <a href="/NguyenVanAn/Category/delete/<?php echo $category->id; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa danh mục này?');">Xóa</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php include 'app/views/shares/footer.php'; ?>