<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Book Information</title>
</head>

<body>

<?php
include("main_menu.php");
?>

<h1 align="center">
Edit the Book Information
</h1>

<?php
$connect = mysqli_connect("localhost", "root", "123456");
mysqli_select_db($connect, "p3337");
$selectBooks = "select * from books where bookId='" .
$_GET["bookId"] . "'";
$results = mysqli_query($connect, $selectBooks);
$row = mysqli_fetch_assoc($results);


$_SESSION["picpath"] = $row["picpath"];
$_SESSION["bookId"] = $row["bookId"];
?>

<form action="mybooks_edit_update.php" enctype="multipart/form-data" method="post">
<table align="center">
<tr>
<td>
Email
</td>
<td>
<input type="text" name="email" value="<?php print $_SESSION["email"]; ?>">
</td>
</tr>
<tr>
<td>
Book Name
</td>
<td>
<input type="text" name="name" value="<?php print $row["name"]; ?>">
</td>
</tr>
<tr>
<td>
Book Description
</td>
<td>
<input type="text" name="description" value="<?php print $row["description"]; ?>">
</td>
</tr>
<tr>
<td>
Language
</td>
<td>
<input type="text" name="language" value="<?php print $row["language"]; ?>">
</td>
</tr>

<tr>
<td>
<input type="submit" value="submit">
</td>
</tr>
</table>
</form>
</body>
</html>