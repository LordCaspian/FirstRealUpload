<?php

$cols = 9;
$rows = 9;
?>

<!DOCTYPE html>
<html lang="az">
<head>
    <title>Vurma cədvəli</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 8px;
        }
    </style>
</head>
<body>
<h1>Vurma cədvəli</h1>
<table>
    <?php
    for ($c=1; $c<=$cols; $c++) {
        ?>
        <tr>
            <?php
            for ($r=1; $r<=$rows; $r++) {
                $style = (($c==1) || ($r==1)) ? 'style="font-weight: bold; background-color:lightgreen;"' : '';
                ?>
                <td <?php echo $style;?>><?php echo $c*$r; ?></td>
                <?php
            }
            ?>
        </tr>
        <?php
    }
    ?>
</table>

<h2>©Khosrov</h2>
</body>
</html>
