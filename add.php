<html>

<head>
    <title>Tambah Mahasiswa</title>
</head>

<body>
    <a href="index.php">Kembali ke Home</a>
    <br /><br />

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td><input type="text" name="program_studi"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if (isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $program_studi = $_POST['program_studi'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO mahasiswa(nama,nim,program_studi) VALUES('$nama','$nim','$program_studi')");

        // Show message when user added
        echo "Data Mahasiswa berhasil ditambahkan. <a href='index.php'>Lihat Data Mahasiswa</a>";
    }
    ?>
</body>

</html>