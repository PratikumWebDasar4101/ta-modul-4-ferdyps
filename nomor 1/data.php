<?php
    session_start();
    $array = $_SESSION['array'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>
    <center>
    <table border="1">
        <tr>
            <th>Genre</th>
            <th>Wisata</th>
            <th>Foto</th>
        </tr>
        <?php
            for ($i = 0; $i < count($array); $i++) {
        ?>
            <tr>
                <td>
                    <?php
                        for ($j = 0; $j < count($array[$i]['Genre']); $j++) {
                            echo $array[$i]['Genre'][$j]."<br>";
                        }
                    ?>
                </td>
                <td>
                    <?php
                        for ($j = 0; $j < count($array[$i]['Wisata']); $j++) {
                            echo $array[$i]['Wisata'][$j]."<br>";
                        }
                    ?>
                </td>
                <td><center><img src="<?php echo $array[$i]['Gambar'];?>" width="25%"></center></td>
            </tr>
        <?php
            }
        ?>
    </table>
    <a href="proseslogin.php?logout=keluar">LOGOUT</a>
    </center>
</body>
</html>