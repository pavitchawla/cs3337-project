<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Shopping Page</title>
</head>

<body>
<?php
include("main_menu.php");
?>

<?php
$connect = mysqli_connect("localhost", "root", "123456");
mysqli_select_db($connect, "p3337");
$selectBooks = "select * from books";
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
Book Picture
</th>
<th>
Language
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
print "<a target='_blank' href='" . $row["picpath"] . "'>";
print "<img src='" . $row["picpath"] . "' width=40/>";
print "</a>";
print "</td>";

print "<td>";
print($row["language"]);
print "</td>";

print "</tr>";
}
?>
</table>
</body>
</html>