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

<section class="contact-us">
  <div class="container mt-5 mb-5 text-dark">
    <div class="row">
    
      <div class="col-lg-12">
        <div class="down-contact">
          <div class="row">
            <div class="col-lg-8">
              <div class="sidebar-item contact-form">
                <div class="sidebar-heading">
                  <h3>Kirim Pesan ke Kami</h3>
                </div>
                <div class="content">
                  <form id="contact" action="" method="post">
                    <div class="row">
                      <div class="col-md-6 col-sm-12 form-group">
                        <fieldset>
                          <input name="name" class="form-control" type="text" id="name" placeholder="Nama Anda...." required="">
                        </fieldset>
                      </div>
                      <div class="col-md-6 col-sm-12 form-group">
                        <fieldset>
                          <input class="form-control" name="email" type="text" id="email" placeholder="Masukkan Email...." required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-12 form-group">
                        <fieldset>
                          <textarea class="form-control" name="message" rows="6" id="message" placeholder="Masukkan Pesan...." required=""></textarea>
                        </fieldset>
                      </div>
                      <div class="col-lg-12 form-group">
                        <fieldset>
                          <button type="submit" id="form-submit" class="btn btn-md btn-primary">Kirim</button>
                        </fieldset>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</section>

    
<?php
    require_once "footer.php";
?>