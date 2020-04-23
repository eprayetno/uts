<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Jawaban no 4t</title>
</head>
<body>
<table border="1" cellpadding="10" cellspacing="0">
    <?php
    for ($b=1;$b<=10;$b++) {
        if ($b%2==1) {
            $warna="green";
        } else {
            $warna="";
        }
        echo "<tr bgcolor=$warna>";
        for ($k=1;$k<=5;$k++) {
            echo "<td>$b,$k</td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>