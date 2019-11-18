<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM books WHERE CONCAT(email, name, picpath, language) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM books";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "123456", "p3337");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<?php
$connect = mysqli_connect("localhost", "root", "123456");
mysqli_select_db($connect, "p3337");
$selectBooks = "select * from books";
$results = mysqli_query($connect, $selectBooks);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Shopping Page</title>
</head>

<body>
<?php
include("main_menu.php");
?>



            <form action="shopping.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>


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
while ($row = mysqli_fetch_assoc($search_result))
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
