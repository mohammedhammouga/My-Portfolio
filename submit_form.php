<?php
// إعداد الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root";  
$password = "";  
$dbname = "medportfolio";  

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// جمع البيانات من النموذج
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// إدخال البيانات في قاعدة البيانات
$sql = "INSERT INTO messages (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

if ($conn->query($sql) === TRUE) {
    // إعادة رسالة نجاح
    echo "تم إرسال الرسالة بنجاح!";
} else {
    echo "حدث خطأ: " . $conn->error;
}

// غلق الاتصال
$conn->close();
?>
