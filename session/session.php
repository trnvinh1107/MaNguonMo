<?php
session_start();

// Kiểm tra xem biến session 'startTime' có tồn tại hay không
if(isset($_SESSION['startTime'])) {
    $startTime = $_SESSION['startTime'];
    $endTime = time();

    // Nếu chênh lệch thời gian là nhỏ hơn hoặc bằng 10 giây
    if ($endTime - $startTime <= 10) {
        // Tăng giá trị session 'count'
        $_SESSION['count'] = isset($_SESSION['count']) ? $_SESSION['count'] + 1 : 1;
    } else {
        // Reset giá trị session 'count'
        $_SESSION['count'] = 1;
    }
} else {
    // Nếu session 'startTime' không tồn tại, tạo nó và đặt giá trị của 'count' là 1
    $_SESSION['startTime'] = time();
    $_SESSION['count'] = 1;
}

// Hiển thị giá trị của 'count'
echo "Count: " . $_SESSION['count'];
?>
