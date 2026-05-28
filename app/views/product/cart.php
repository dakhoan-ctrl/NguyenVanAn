<?php include 'app/views/shares/header.php'; ?>
<h1>Giỏ hàng của bạn</h1>
<?php if (!empty($cart)): ?>
<form method="POST" action="/NguyenVanAn/Product/updateCart">
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th>Hình ảnh</th>
                <th>Tên sản phẩm</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Hành động</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $totalPrice = 0;
            foreach ($cart as $id => $item): 
                $subTotal = $item['price'] * $item['quantity'];
                $totalPrice += $subTotal;
            ?>
            <tr>
                <td>
                    <?php if ($item['image']): ?>
                        <img src="/NguyenVanAn/<?php echo $item['image']; ?>" alt="Product Image" style="max-width: 80px;">
                    <?php endif; ?>
                </td>
                <td class="align-middle"><?php echo htmlspecialchars($item['name'], ENT_QUOTES, 'UTF-8'); ?></td>
                <td class="align-middle"><?php echo number_format($item['price'], 0, ',', '.'); ?> VND</td>
                <td class="align-middle" style="width: 150px;">
                    <input type="number" name="quantities[<?php echo $id; ?>]" value="<?php echo $item['quantity']; ?>" min="1" class="form-control text-center">
                </td>
                <td class="align-middle fw-bold text-danger"><?php echo number_format($subTotal, 0, ',', '.'); ?> VND</td>
                <td class="align-middle text-center">
                    <a href="/NguyenVanAn/Product/removeFromCart/<?php echo $id; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này khỏi giỏ hàng?');">Xóa</a>
                </td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="5" class="text-right font-weight-bold">Tổng cộng:</td>
                <td class="font-weight-bold text-danger"><?php echo number_format($totalPrice, 0, ',', '.'); ?> VND</td>
            </tr>
        </tbody>
    </table>
    
    <div class="d-flex justify-content-between mt-3">
        <a href="/NguyenVanAn/Product" class="btn btn-secondary">Tiếp tục mua sắm</a>
        <div>
            <button type="submit" class="btn btn-info mr-2">Cập nhật giỏ hàng</button>
            <a href="/NguyenVanAn/Product/checkout" class="btn btn-success">Tiến hành Thanh Toán</a>
        </div>
    </div>
</form>
<?php else: ?>
    <div class="alert alert-warning mt-3">Giỏ hàng của bạn đang trống.</div>
    <a href="/NguyenVanAn/Product/index" class="btn btn-primary mt-2">Quay lại mua sắm</a>
<?php endif; ?>
<?php include 'app/views/shares/footer.php'; ?>