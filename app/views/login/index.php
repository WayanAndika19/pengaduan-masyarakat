<?php
// require_once 'function/function.php';
// error_reporting(0);


// if (isset($_POST['submit'])) {
//     $username = $_POST["username"];
//     $password = $_POST["password"];

//     $petugas = mysqli_query($conn, "SELECT * FROM petugas WHERE username='$username' and password='$password'");
//     $arr_petugas = mysqli_fetch_assoc($petugas);
//     if ($arr_petugas['level'] == 'petugas') {
//         header("Location:index.php");
//     } else if ($arr_petugas['level'] == 'admin') {
//         header("Location:index.php");
//     } else if ($arr_petugas == 0) {
//         echo "<script>alert('salah')</script>";
//     }
//     // var_dump($arr_petugas['level']);
//     // exit;
// }

?>


<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5 col-7 mx-auto">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Halaman Login</h1>
                                </div>
                                <form class="user" action="<?= BASEURL_PUBLIC; ?>/login/login" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="username" placeholder="Masukan Username..." name="username">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" placeholder="Masukan Password..." name="password">
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block" name="submit">
                                        Login
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= BASEURL_PUBLIC; ?>/register">Register</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>