<?php
  include("atas.php");
?>



<section>
      <div class="card-body">

              <form method="post" action="proses_daftar_investor.php" name="myForm" onsubmit="return validateForm()" class="showcase" >
              
              <div class="container">
                <main>
                  <div class="py-5 text-center">
                    <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                    <h2>Checkout form</h2>
                    <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
                  </div>
              
                  <div class="row g-3">
                  
                    <div class="col-md-7 col-lg-8">
                      <h4 class="mb-3">Billing address</h4>
                      <form class="needs-validation" novalidate>
                        <div class="row g-3">

                          <div class="col-12">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                          </div>

                          <div class="col-12">
                            <label for="text" class="form-label">Nama Lengkap</label>
                            <input type="text"  name="nama_lengkap" class="form-control" id="exampleFormControlInput1" placeholder="Nama Lengkap">
                          </div>

                          <div class="col-12">
                              <label for="number" class="form-label">No KTP</label>
                              <input type="number"  name="no_ktp" class="form-control" id="exampleFormControlInput1" placeholder="No KTP">
                            </div>

                          <div class="col-12">
                              <label for="text" class="form-label">Jenis Kelamin</label>
                              <select class="form-control"  name="jenis_kelamin" aria-label="Default select example">
                                  <option selected>Jenis Kelamin</option>
                                  <option value="Laki-laki">Laki-laki</option>
                                  <option value="Perempuan">Perempuan</option>
                              </select>
                          </div>

                          <div class="col-12">
                              <label for="number" class="form-label">No Telpon/HP (Support WA)</label>
                              <input type="number"  name="no_hp" class="form-control" id="exampleFormControlInput1" placeholder="No Telpon/HP (Support WA)">
                          </div>

                          <div class="col-12">
                              <label for="date" class="form-label">Tanggal Lahir</label>
                              <input type="date"  name="tanggal_lahir" class="form-control" id="exampleFormControlInput1" placeholder="Tanggal Lahir">
                          </div>

                          <div class="col-12">
                              <label for="text" class="form-label">Kewarga Negaraan</label>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="kewarga_negaraan" value="Warga-Negara-Indonesia">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                      Warga Negara Indonesia
                                  </label>
                              </div>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="kewarga_negaraan" value="Warga-Negara-Asing">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                      Warga Negara Asing
                                  </label>
                              </div>
                          </div>

                          <div class="col-12">
                              <label for="text" class="form-label">Agama</label>
                              <select class="form-control"  name="agama" aria-label="Default select example">
                                  <option selected>Agama</option>
                                  <option value="Islam">Islam</option>
                                  <option value="Kristen">Kristen</option>
                                  <option value="Hindu">Hindu</option>
                                  <option value="Buddha">Buddha</option>
                              </select>
                          </div>

                          <div class="col-12">
                              <label for="text" class="form-label">Status Perkawinan</label>
                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="status_perkawinan" value="Belum-Menikah">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                      Belum Menikah
                                  </label>
                              </div>

                              <div class="form-check">
                                  <input class="form-check-input" type="radio" name="status_perkawinan" value="Menikah">
                                  <label class="form-check-label" for="flexRadioDefault1">
                                      Menikah
                                  </label>
                              </div>
                          </div>

                          <div class="col-12">
                              <label for="text" class="form-label">Alamat Lengkap</label>
                              <textarea  name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat Lengkap"></textarea>
                          </div>

                          <div class="col-12">
                              <label for="text" class="form-label">Pekerjaan</label>
                              <input type="text"  name="pekerjaan" class="form-control" id="exampleFormControlInput1" placeholder="Pekerjaan">
                          </div>

                          <div class="col-12">
                              <label for="text" class="form-label">Rencana Investasi</label>
                              <select class="form-control"  name="rencana_investasi" aria-label="Default select example">
                                  <option selected>Rencana Investasi</option>
                                  <option value="Per-orangan">Per-orangan</option>
                                  <option value="Kelompok">Kelompok</option>
                              </select>
                          </div>

                          <div class="col-12">
                              <label for="text" class="form-label">Sumber Dana</label>
                              <select class="form-control"  name="sumber_dana" aria-label="Default select example">
                                  <option selected>Sumber Dana</option>
                                  <option value="Pribadi">Pribadi</option>
                                  <option value="Pinjaman">Pinjaman</option>
                              </select>
                          </div>

                          <div class="col-12">
                              <label for="text" class="form-label">Paket Investasi</label>
                              <select class="form-control"  name="paket_investasi" aria-label="Default select example">
                                  <option selected>Paket Investasi</option>
                                  <option value="Paket Warior">Paket Warior</option>
                                  <option value="Paket Epic">Paket Epic</option>
                              </select>
                          </div>
                        <div class="col-12">
                          <hr>
                          <button class="w-100 btn btn-primary btn-lg" name="submit" type="submit">Simpan</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
          </form>   
        </div>
      </body>
    <div class="card-body">
  </div>
<div class="card-body">
</div>
</section>


<script>
      function validateForm() {
        var x = document.forms["myForm"]["email"].value;
        if (x == "" || x == null) {
          alert("Email Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["nama_lengkap"].value;
        if (x == "" || x == null) {
          alert("Nama Lengkap Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["no_ktp"].value;
        if (x == "" || x == null) {
          alert("No KTP Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["jenis_kelamin"].value;
        if (x == "" || x == null) {
          alert("Jenis Kelamin Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["no_hp"].value;
        if (x == "" || x == null) {
          alert("No Telpon/HP Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["tanggal_lahir"].value;
        if (x == "" || x == null) {
          alert("Tanggal Lahir Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["kewarga_negaraan"].value;
        if (x == "" || x == null) {
          alert("Kewarga Negaraan Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["agama"].value;
        if (x == "" || x == null) {
          alert("Agama Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["status_perkawinan"].value;
        if (x == "" || x == null) {
          alert("Status Perkawinan Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["alamat"].value;
        if (x == "" || x == null) {
          alert("Alamat Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["pekerjaan"].value;
        if (x == "" || x == null) {
          alert("Pekerjaan Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["rencana_investasi"].value;
        if (x == "" || x == null) {
          alert("Rencana Investasi Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["sumber_dana"].value;
        if (x == "" || x == null) {
          alert("Sumber Dana Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["paket_investasi"].value;
        if (x == "" || x == null) {
          alert("paket_investasi Harus diisi terlebih dahulu !");
          return false;
        }
      }
    </script>

        <?php
        include("testimoni.php");
        ?>
      
      <?php
        include("bawah.php");
      ?>
