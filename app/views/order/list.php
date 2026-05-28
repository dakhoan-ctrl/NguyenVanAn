<?php include 'app/views/shares/header.php'; ?>
<h1>Quản lý Đơn hàng</h1>
<table class="table table-bordered mt-3">
    <thead class="thead-light">
        <tr>
            <th>Mã ĐH</th>
            <th>Tên khách hàng</th>
            <th>Số điện thoại</th>
            <th>Ngày đặt</th>
            <th>Phương thức TT</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($orders as $order): ?>
        <tr>
            <td class="font-weight-bold text-primary">#<?php echo $order->id; ?></td>
            <td><?php echo htmlspecialchars($order->name, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php echo htmlspecialchars($order->phone, ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?php echo date('d/m/Y H:i', strtotime($order->created_at)); ?></td>
            <td><?php echo htmlspecialchars($order->payment_method, ENT_QUOTES, 'UTF-8'); ?></td>
            <td class="text-center">
                <a href="/NguyenVanAn/Order/show/<?php echo $order->id; ?>" class="btn btn-info btn-sm">Xem chi tiết</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php include 'app/views/shares/footer.php'; ?>