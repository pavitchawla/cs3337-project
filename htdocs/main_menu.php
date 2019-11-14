<link href="main.css" type="text/css" rel="stylesheet" />

<?php
session_start();
$email = $_SESSION['email'];
$password = $_SESSION['password'];
?>
<ul class="ul_css">
<li class="li_css">
<a class="li_css_a" href="shopping.php"> Shopping </a>
</li>
<li class="li_css">
<a class="li_css_a" href="selling.php"> Selling </a>
</li>
<li class="li_css">
<a class="li_css_a" href="mybooks.php"> My Books </a>
</li>
<li class="li_css">
<a class="li_css_a" href="profile"> Profile </a>
</li>
<li class="li_css">
<a class="li_css_a" href="email">
<?php
print $_SESSION['email'];
?>
</a>
</li>
</ul>