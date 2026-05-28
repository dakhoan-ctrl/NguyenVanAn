<?php include 'app/views/shares/header.php'; ?>
<div class="d-flex justify-content-between align-items-center">
    <h1>Chi tiết đơn hàng <span class="text-primary">#<?php echo $order->id; ?></span></h1>
    <a href="/NguyenVanAn/Order/index" class="btn btn-secondary">Quay lại danh sách</a>
</div>

<div class="row mt-4">
    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-info text-white font-weight-bold">
                Thông tin người nhận
            </div>
            <div class="card-body">
                <p><strong>Họ tên:</strong> <?php echo htmlspecialchars($order->name, ENT_QUOTES, 'UTF-8'); ?></p>
                <p><strong>Số điện thoại:</strong> <?php echo htmlspecialchars($order->phone, ENT_QUOTES, 'UTF-8'); ?></p>
                <p><strong>Địa chỉ:</strong> <?php echo htmlspecialchars($order->address, ENT_QUOTES, 'UTF-8'); ?></p>
                <p><strong>Phương thức TT:</strong> <?php echo htmlspecialchars($order->payment_method, ENT_QUOTES, 'UTF-8'); ?></p>
                <p><strong>Thời gian đặt:</strong> <?php echo date('d/m/Y H:i:s', strtotime($order->created_at)); ?></p>
            </div>
        </div>
    </div>
</div>

<h3 class="mt-5 mb-3">Sản phẩm đã mua</h3>
<table class="table table-bordered">
    <thead class="thead-light">
        <tr>
            <th>Hình ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $totalOrderPrice = 0;
        foreach ($orderDetails as $detail): 
            $subTotal = $detail->price * $detail->quantity;
            $totalOrderPrice += $subTotal;
        ?>
        <tr>
            <td class="align-middle text-center">
                <?php if ($detail->image): ?>
                    <img src="/NguyenVanAn/<?php echo $detail->image; ?>" alt="Product" style="max-width: 60px;">
                <?php endif; ?>
            </td>
            <td class="align-middle"><?php echo htmlspecialchars($detail->product_name, ENT_QUOTES, 'UTF-8'); ?></td>
            <td class="align-middle"><?php echo number_format($detail->price, 0, ',', '.'); ?> VND</td>
            <td class="align-middle text-center"><?php echo $detail->quantity; ?></td>
            <td class="align-middle text-danger font-weight-bold"><?php echo number_format($subTotal, 0, ',', '.'); ?> VND</td>
        </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="4" class="text-right font-weight-bold align-middle text-uppercase">Tổng giá trị đơn hàng:</td>
            <td class="font-weight-bold text-danger" style="font-size: 1.2rem;"><?php echo number_format($totalOrderPrice, 0, ',', '.'); ?> VND</td>
        </tr>
    </tbody>
</table>
<?php include 'app/views/shares/header.php'; ?>