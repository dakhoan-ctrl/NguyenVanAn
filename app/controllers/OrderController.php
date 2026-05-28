<?php
require_once('app/config/database.php');
require_once('app/models/OrderModel.php');

class OrderController {
    private $orderModel;
    private $db;

    public function __construct() {
        $this->db = (new Database())->getConnection();
        $this->orderModel = new OrderModel($this->db);
    }

    public function index() {
        $orders = $this->orderModel->getOrders();
        include 'app/views/order/list.php';
    }

    public function show($id) {
        $order = $this->orderModel->getOrderById($id);
        if ($order) {
            $orderDetails = $this->orderModel->getOrderDetails($id);
            include 'app/views/order/show.php';
        } else {
            echo "Không tìm thấy đơn hàng.";
        }
    }
}
?>