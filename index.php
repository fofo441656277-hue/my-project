<?php include 'db.php'; ?>
<!DOCTYPE html>
<html dir="rtl">
<head><title>موقعي</title></head>
<body>
<h1>قائمة الطلاب</h1>
<?php
$r = $conn->query("SELECT * FROM students");
while($row = $r->fetch_assoc()){
  echo "<p>{$row['name']} - {$row['age']}</p>";
}
?>
</body>
</html>