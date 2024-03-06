<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <a href="form.html">Back to Form</a>
<?php
    $name = "";
    $email = "";
    if(isset($_POST['name']))
        $name = $_POST['name'];
    if(isset($_POST['email']))
        $email = $_POST['email'];
    echo "<br/>Name: " . $name . " - Email: " . $email;
    
    //save to file
    $output = $name . "#" . $email . "\n";
    $file = fopen("/Applications/XAMPP/xamppfiles/htdocs/TranTheVinh_2011063110/formdata.txt", "a");

    // Kiểm tra xem có mở tệp tin thành công không
    if($file) {
        // Ghi dữ liệu vào tệp tin
        fwrite($file, $output);

        // Đóng tệp tin
        fclose($file);

        echo "Dữ liệu đã được ghi vào tệp tin!";
    } else {
        echo "Không thể mở hoặc tạo tệp tin để ghi!";
    }
    ?>
</body>
</html>