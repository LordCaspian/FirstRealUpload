<?php
$menu = array(
    "Home" => "indexx.php",
    "About" => "about.php",
    "Contact" => "contact.php",
);
?>
<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <title>Menyu</title>
</head>
<body>
<h1>Menyu</h1>
<?php
foreach ($menu as $menu_name => $menu_link) {
    echo '<a href="' . $menu_link . '">' . $menu_name . '</a> ';
}
?>
</body>
</html>