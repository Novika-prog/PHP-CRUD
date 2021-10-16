<?php
    include("config.php");
    if(isset($_POST['simpan'])){

    $nis = $_POST['nis'];
    $nama = $_POST['name'];
    $jurusan = $_POST['jurusan'];

    $sql = "UPDATE datasiswa SET nama='$nama', jurusan='$jurusan' WHERE nis=$nis";
    $query = mysqli_query($db, $sql);


    if( $query ) {
        header('Location: list.php');
    }else {
        die("Gagal menyimpan perubahan...");
    }

}else{
    die("Akses dilarang...");
}

?>