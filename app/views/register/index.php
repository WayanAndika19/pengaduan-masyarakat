<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-7 mx-auto">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <!-- <div class="col-lg-5 d-none d-lg-block bg-register-image"></div> -->
                <div class="col-lg">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                        </div>
                        <form class="user" method="POST" action="<?= BASEURL_PUBLIC; ?>/register/register">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="Masukan Username" name="username" autocomplete="off">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="pass1">
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Repeat Password" name="pass2">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="Masukan Nama" name="nama" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="Masukan NIK" name="nik" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" placeholder="Masukan Nomor Telepon" name="telp" autocomplete="off">
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                                Register Account
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= BASEURL_PUBLIC; ?>">Already have an account? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>