<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>My Books</title>
</head>

<body>
<?php
include("main_menu.php");
?>

<?php
$connect = mysqli_connect("localhost", "root", "123456");
mysqli_select_db($connect, "p3337");
$selectBooks = "select * from books where email='" . $email . "'";
$results = mysqli_query($connect, $selectBooks);
?>
<br />
<br />
<br />
<table align="center" border="2" width="700">
<tr>
<th>
Seller Email
</th>
<th>
Book Name
</th>
<th>
Post Date
</th>
<th>
Language
</th>
<th>
Book Picture
</th>
<th>
Edit
</th>
<th>
Delete
</th>

</tr>
<?php
while ($row = mysqli_fetch_assoc($results))
{
print "<tr>";
print "<td>";
print($row["email"]);
print "</td>";
print "<td>";
print($row["name"]);
print "</td>";
print "<td>";
print($row["postdate"]);
print "</td>";
print "<td>";
print($row["language"]);
print "</td>";

print "<td>";
print "<a target='_blank' href='" . $row["picpath"] . "'>";
print "<img src='" . $row["picpath"] . "' width=40/>";
print "</a>";
print "</td>";

print "<td>";
print "<a href='mybooks_edit.php?bookId=" . $row["bookId"] . "'>";
print "<img src='edit.png' width=40/>";
print "</a>";
print "</td>";

print "<td>";
print "<a href='mybooks_delete.php?bookId=" . $row["bookId"] . "'>";
print "<img src='delete.png' width=40/>";
print "</a>";
print "</td>";

print "</tr>";
}
?>
</table>
</body>
</html>