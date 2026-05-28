<?php include 'app/views/shares/header.php'; ?>
<h1>Thông tin thanh toán</h1>
<div class="row">
    <div class="col-md-8">
        <div class="card mt-3">
            <div class="card-body">
                <form method="POST" action="/NguyenVanAn/Product/processCheckout">
                    <div class="form-group">
                        <label for="name">Họ tên người nhận: </label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Số điện thoại: </label>
                        <input type="text" id="phone" name="phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Địa chỉ giao hàng: </label>
                        <textarea id="address" name="address" class="form-control" rows="3" required></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="payment_method">Phương thức thanh toán:</label>
                        <select id="payment_method" name="payment_method" class="form-control" required>
                            <option value="COD">Thanh toán khi nhận hàng (COD)</option>
                            <option value="Momo">Thanh toán qua ví MoMo</option>
                            <option value="BankTransfer">Chuyển khoản Ngân hàng</option>
                        </select>
                    </div>

                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary btn-lg w-100">Xác nhận Đặt Hàng</button>
                    </div>
                </form>
            </div>
        </div>
        <a href="/NguyenVanAn/Product/cart" class="btn btn-secondary mt-3">Quay lại giỏ hàng</a>
    </div>
</div>
<?php include 'app/views/shares/footer.php'; ?>