<?php
include 'db_connection.php';
// باقي كود الصفحة

$servername = "localhost"; // قد يكون "localhost" أو حسب ما يوفره مزود الخدمة
$username = "your_db_username";  // أدخل اسم مستخدم قاعدة البيانات هنا
$password = "your_db_password";  // أدخل كلمة المرور لقاعدة البيانات هنا
$dbname = "your_db_name";        // أدخل اسم قاعدة البيانات هنا

// إنشاء الاتصال
$conn = new mysqli($servername, $username, $password, $dbname);

// تحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}
echo "تم الاتصال بقاعدة البيانات بنجاح!";
?>


