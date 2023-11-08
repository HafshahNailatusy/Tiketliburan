<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <div class="row" style="margin-top:50px;">
    <div class="col-md"></div>
    <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px">
        <form action="proses_tambah_user.php" method="post">
            <h3 align="center">REGISTER</h3>
            Nama :
            <input type="text" name="nama" value="" class="form-control">
            Email : 
            <input type="text" name="email" value="" class="form-control">
            Password : 
            <input type="password" name="password" value="" class="form-control">
            <center><input href="proses_tambah_user.php" type="submit" value="Tambah User" class="btn btn-success" value= "REGISTER"></center>
            <p margin="5px 0" align ="center" class="login-register-text">Sudah punya akun? <a href="login.php">Masuk</a></p>
        </form>
    </div>
    <div class="col-md"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
    crossorigin="anonymous"></script>
</body>
</html>
