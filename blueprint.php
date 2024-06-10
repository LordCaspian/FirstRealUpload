<?php
//$clm9 = 9;
//$row9 = 9;
?>

<html lang="az">
<body>
<table>
    <?php for ($clm = 1; $clm <= 9; $clm++) {
        ?>
        <tr>
            <?php for ($row = 1; $row <= 9; $row++) {
                ?>
                <td>
                    <?php echo $clm * $row ?>
                </td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>
</body>
</html>