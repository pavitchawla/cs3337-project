<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Shopping Page</title>
</head>

<body>
<?php
$connect = mysqli_connect("localhost", "root", "123456");
mysqli_select_db($connect, "p3337");
$selectUsers = "select * from books";
$results = mysqli_query($connect, $selectBooks);
?>
<table align="center" border="2" width="600">
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
print "<img src='" . $row["picpath"] . "' width=40/>";
print "</td>";

print "</tr>";
}
?>
</table>
</body>
</html>