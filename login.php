<?php
    require_once "header.php";
?>
    

<section>
    <div class="mt-5 mb-5">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4"></div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="card">
                    <div class="card-body text-center">
                        <span class="fas fa-user text-info" style="font-size: 50px"></span>
                        <h5>LOGIN USER</h5>

                        <div class="form-group text-left">
                            <label for="Username">Username</label>
                            <input type="text" class="form-control" placeholder="Masukkan Username Anda ...">
                            <label for="Password">Password</label>
                            <input type="text" class="form-control" placeholder="Masukkan Password Anda ..."><br><br>
                            <button class="btn btn-block btn-primary">Login</button>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4"></div>
        </div>
    </div>
</section>

    
<?php
    require_once "footer.php";
?>