<?php
$conn = mysqli_connect ("localhost", "root", "", "prodi");
$nim = $_GET["NIM"];

if(isset($_POST["submit"])){
    $nim = $_GET["NIM"];
    $namamhs = $_POST ["Namamhs"];
    $alamatmhs = $_POST ["Alamatmhs"];
    $kontakmhs = $_POST ["Kontakmhs"];
    
    mysqli_query($conn, "update mahasiswa set Namamhs='$namamhs', Alamatmhs='$alamatmhs', Kontakmhs='$kontakmhs' where NIM = '$nim'");
    
    if(mysqli_affected_rows($conn) > 0 ){
        echo "<script> alert ('Data Berhasil Diubah')</script>";
        header("refresh:0;index.php");
    }else{
        echo "<script> alert ('Data Tidak Berhasil Diubah')</script>";
        header("refresh:0;index.php");
    }
}    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Data Mahasiswa</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">

    </head>
    
    <body>
        <div class="box">
            <h1 class="header">EDIT DATA MAHASISWA</h1>
            
            <form action="" method="POST" id="form">
                <div>
                    <input type="text" name="NIM" id="NIM" value=<?php echo $nim ?> disabled>
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
