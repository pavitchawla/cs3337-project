<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Remove Book from Database</title>
</head>

<body>
<?php
$connect = mysqli_connect("localhost", "root", "123456");
mysqli_select_db($connect, "p3337");
?>

<?php
$deleteBook = "delete from books where bookId='" .
$_GET["bookId"] . "'";
$result = mysqli_query($connect, $deleteBook);

header("Location: mybooks.php");
?>
</body>
</html>