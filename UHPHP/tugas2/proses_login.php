<?php 
require "koneksi.php";
    if($_POST){
        // $nama=$_POST['nama'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        if(empty($email)){
            echo "<script>alert('Email tidak boleh kosong');location.href='login.php';</script>";
        } else if(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
        } 
        // else if(empty($nama)){
        //     echo "<script>alert('Nama tidak boleh kosong');location.href='login.php';</script>";
        // }
         else {
            include "koneksi.php";
            // $nama = mysqli_real_escape_string($conn,$nama);
            $email = mysqli_real_escape_string($conn,$email);
            $password = mysqli_real_escape_string($conn,$password);

            $qry_login=mysqli_query($conn,"SELECT * FROM user where email = '".$email."'");

            // $result = mysqli_query($conn, "SELECT * FROM user where email = '".$email."'" );

            if(mysqli_num_rows($qry_login)>0){
                $dt_login=mysqli_fetch_array($qry_login);
                session_start();
                $_SESSION['id_user']=$dt_login['id_user'];
                $_SESSION['nama']=$dt_login['nama'];
                $_SESSION['email']=$dt_login['email'];
                $_SESSION['password']=$dt_login['password'];
                $_SESSION['status_login']=true;
                header("location: home.php");
                // echo "<script>alert('Sukses Login');location.href='home.php';</script>";
            } else {
                echo "<script>alert('Email dan Password tidak benar');location.href='login.php';</script>";
            }
         
        }
    }
?> 

