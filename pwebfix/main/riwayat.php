<?php
session_start();
require_once "funtionmin.php";
// $result= mysqli_query($connection,"SELECT * FROM city JOIN hospital USING(city_id) JOIN daftars_ USING (rs_id) WHERE daftar_id = '".$_SESSION["id"]."' ");
$result= mysqli_query($connection,"SELECT * FROM city JOIN hospital USING(city_id) JOIN daftars_ USING (rs_id) WHERE daftar_id = '1' ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 1%;
        }
        table{
        font-family: arial, sans-serif;
        width: 65%;
        }
    </style>
</head>
<body>
<?php foreach ($result as $row){ ?>
    <table>
        <tr>
            <td>Nama Lengkap</td>
            <td><?php echo $row["nama"]; ?></td>
        </tr>
        <tr>
            <td>NIK</td>
            <td><?php echo $row["nik"]; ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><?php echo $row["tanggal_lahir"]; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $row["gender"]; ?></td>
        </tr>
        <tr>
            <td>alamat</td>
            <td><?php echo $row["alamat"]; ?></td>
        </tr>
        <tr>
            <td>Kota</td>
            <td><?php echo $row["nama_city"]; ?></td>
        </tr>
        <tr>
            <td>Rumah Sakit</td>
            <td><?php echo $row["nama_rs"]; ?></td>
        </tr>
    </table>
    <a href="profile_update.php?id=<?= $row["user_id"]; ?>"><button type="submit name="login>Edit Profil</button></a>
    <a href="logout.php"><button type="submit" name="login">Logout</button></a>
    <?php };?>
</body>
</html>