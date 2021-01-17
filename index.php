<?php

    require_once "header.php";

?>
<section>
    <div class="container-fluid text-white text-center pt-5 pb-5 bg-dua">
        <div class="logo">
            <h3>YUKIKA</h3>
        </div>
        <p>Dengan <span class="logo">YUKIKA</span> kamu bisa mencari pekerjaan yang sesuai dengan keinginan kamu, tunggu apalagi ? <b>Yuk kita kerja !</b></p>
    </div>
</section>

<section>
    <div class="container mt-3 mb-3 text-dark">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 text-left">
                <h4>Menu</h4>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 text-right">
                <a href="#" class="text-info btn-a">Lihat Semua</a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-school" style="font-size: 40px"></i>
                        <hr>
                        <h5>Pelatihan</h5>
                    </div>
                    <div class="card-footer bg-info text-center">
                        <a href="pelatihan.php" class="btn btn-md btn-outline-light">Lihat Pelatihan</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-building" style="font-size: 40px"></i>
                        <hr>
                        <h5>Lowongan</h5>
                    </div>
                    <div class="card-footer bg-info text-center">
                        <a href="lowongan.php" class="btn btn-md btn-outline-light">Lihat Pelatihan</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body text-center">
                        <i class="fas fa-user" style="font-size: 40px"></i>
                        <hr>
                        <h5>Jasa</h5>
                    </div>
                    <div class="card-footer bg-info text-center">
                        <a href="about.php" class="btn btn-md btn-outline-light">Lihat Pelatihan</a>
                    </div>
                </div>
            </div>

        </div>
        
    </div>
</section>

<?php

require_once "footer.php";

?>
