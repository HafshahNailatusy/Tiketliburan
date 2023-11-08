<?php
if($_POST){
    $id_user=$_POST['id_user'];
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    
    if(empty($nama)){
        echo "<script>alert('Nama tidak boleh kosong');location.href='ubah_user.php';</script>";

    } elseif(empty($email)){
        echo "<script>alert('Email tidak boleh kosong');location.href='ubah_user.php';</script>";
    } else {
        include "koneksi.php";
        if(empty($password)){
            $update=mysqli_query($conn,"update user set nama='".$nama."', email='".$email."', password='".$password."' where id_user = '".$id_user."' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update user');location.href='tampil_user.php';</script>";
            } else {
                echo "<script>alert('Gagal update user');location.href='ubah_user.php?id_user=".$id_user."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update user set nama='".$nama."', email='".$email."', password='".md5($password)."' where id_user = '".$id_user."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update user');location.href='tampil_user.php';</script>";
            } else {
                echo "<script>alert('Gagal update user');location.href='ubah_user.php?id_user=".$id_user."';</script>";
            }
        }
        
    } 
}
?>
