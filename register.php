<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-gradient-danger">

    <div class="container">
        <div class="row-justify-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 text-center">
                                <div class="p-5">
                                    <img src="assets/img/pancasila.png" width="100" height="100">
                                    <h4><b>
                                            Sistem Informasi Keuangan</b></h4>
                                </div>

                            </div>
                            <div class="col-lg-6 text-center">
                                <div class="p-5">
                                    <h4>Selamat Datang !</h4>
                                    <form action="register_user.php" method="post">
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control form-control-user" placeholder="Masukkan Email Anda" autocomplete="off" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user" placeholder="Masukkan Username Anda" autocomplete="off" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" placeholder="Masukkan Password Anda" autocomplete="off" required>
                                        </div>
                                        <div class="form-group-btn">
                                        <button class="btn btn-primary">Register</button>
                                        </div>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a href="login.php" class="small">
                                        Already Have Account? Login</a>
                                    </div>
                                    <div class="text-center">
                                        <a href="" class="small">Forgot Password?</a>
                                    </div>

                                    <div class="text-center">
                                        <a href="" class="small">Ayam Goreng</a>
                                    </div>
                                    
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>