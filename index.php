<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa ORDER BY id DESC");
?>

<html>

<head>
    <title>Data Mahasiswa</title>
</head>

<body>
    <a href="add.php">Tambah Mahasiswa</a><br /><br />

    <table width='80%' border=1>

        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>PROGRAM STUDI</th>
            <th>Update</th>
        </tr>
        <?php
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['nama'] . "</td>";
            echo "<td>" . $user_data['nim'] . "</td>";
            echo "<td>" . $user_data['program_studi'] . "</td>";
            echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Hapus</a></td></tr>";
        }
        ?>
    </table>
</body>

</html>