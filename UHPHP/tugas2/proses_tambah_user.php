<?php
if($_POST){
    // $id_user=$_POST['id_user'];
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $password= $_POST['password'];
    if(empty($nama)){
        echo "<script>alert('Nama tidak boleh kosong');location.href='tambah_user.php';</script>";

    } elseif(empty($email)){
        echo "<script>alert('Email tidak boleh kosong');location.href='tambah_user.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('Password tidak boleh kosong');location.href='tambah_user.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into user (nama, email, password) value ('".$nama."','".$email."','".md5($password)."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan user');location.href='tambah_user.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan user');location.href='tambah_user.php';</script>";
        }
    }
}
?>
