<?php
$conn = mysqli_connect ("localhost", "root", "", "prodi");

if(isset($_POST["submit"])){
    $nim = $_POST["NIM"];
    $namamhs = $_POST ["Namamhs"];
    $alamatmhs = $_POST ["Alamatmhs"];
    $kontakmhs = $_POST ["Kontakmhs"];
    
    $insert = "INSERT INTO mahasiswa VALUES ('$nim', '$namamhs', '$alamatmhs', '$kontakmhs')";
    
    mysqli_query($conn, $insert);
    
    if(mysqli_affected_rows($conn) > 0 ){
        echo "<script> alert ('Data Berhasil Ditambahkan')</script>";
        header("refresh:0;index.php");
    }else{
        echo "<script> alert ('Data Tidak Berhasil Ditambahkan)</script>";
        header("refresh:0;index.php");
    }
}    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tambah Data Mahasiswa</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">

    </head>
    
    <body>
        <div class="box">
            <h1 class="header">TAMBAH DATA MAHASISWA</h1>
            
            <form action="" method="POST" id="form">
                <div>
                    <input type="text" name="NIM" id="NIM" placeholder="NIM">
                    <label for="ErrorNIM" id="ErrorNIM" class="errortext"></label>
                </div>
                
                <div>    
                    <input type="text" name="Namamhs" id="Namamhs" placeholder="Nama" >
                    <label for="ErrorNama" id="ErrorNama" class="errortext"></label>
                </div>
                
                <div>
                    <input type="text" name="Alamatmhs" id="Alamatmhs" placeholder="Alamat" >
                    <label for="ErrorAlamat" id="ErrorAlamat" class="errortext"></label>
                </div>
                
                <div>
                    <input type="text" name="Kontakmhs" id="Kontakmhs" placeholder="No Telepon" >
                    <label for="ErrorTelp" id="ErrorTelp" class="errortext"></label>
                </div>
                
                <button type="submit" name="submit">Submit</button>

                </form>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="../js/JScript.js"></script>          
</html>
