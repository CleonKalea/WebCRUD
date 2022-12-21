<?php
//koneksi ke database
$conn = mysqli_connect ("localhost", "root", "", "prodi");

//ambil data dari tabel mahasiswa
$hasil = mysqli_query($conn, "SELECT * FROM mahasiswa");

//cek ambil data di tabel mahasiswa
if(!$hasil){
    echo mysqli_error();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DATA MAHASISWA</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <div> 
            <h1 class="header">DATA MAHASISWA</h1>
            <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kontak</th>
                    <th>Aksi</th>
                </tr>
                
                <?php
                    while ($row = mysqli_fetch_array($hasil)) :
                ?>
                
                <tr>
                    <form method="POST" action="delete.php">
                    <td><?= $row["NIM"]?></td>
                    <td><?= $row["Namamhs"]?></td>
                    <td><?= $row["Alamatmhs"]?></td>
                    <td><?= $row["Kontakmhs"]?></td>
                    <td>
                        <button type="button" onclick='location.href=`php/edit.php?NIM=<?php echo $row ["NIM"]; ?>`'>EDIT</button>
                        <button type="button" onclick='location.href=`php/delete.php?NIM=<?php echo $row ["NIM"]; ?>`'>DELETE</button>
                    </form>
                    </td>
                </tr>

                <?php endwhile; ?>
            </table>
            <button type="button" onclick="location.href='php/tambah.php'" style="font-size: 22px; display: flex">TAMBAH DATA MAHASISWA BARU</button>
        </div>
    </body>
</html>