<?php
  include("atas.php");
?>

<section class="border-bottom">
<div class="card-body">
<body>
  <form method="post" action="proses_member.php" name="myForm" onsubmit="return validateForm()" class="showcase" >
    
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
                  <label for="text" class="form-label">Jenis Kelamin</label>
                  <span style="color: #FF0000;">
                  </span>
                  <select class="form-select"  name="jenis_kelamin" aria-label="Default select example">
                    <option selected>Jenis Kelamin</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan2">Perempuan</option>
                  </select>
                </div>

                <div class="col-12">
                  <label for="text" class="form-label">Info Laundry</label>
                  <select class="form-select"  name="info_laundry" aria-label="Default select example">
                    <option selected>Info Laundry</option>
                    <option value="1">Media Sosial</option>
                    <option value="2">Orang ke Orang</option>
                  </select>
                </div>
  
                <div class="col-12">
                  <label for="number" class="form-label">No Telpon/HP 1 (Disarankan Support WA)</label>
                  <input type="number"  name="no_hp1" class="form-control" id="exampleFormControlInput1" placeholder="No Telpon/HP 1">
                </div>
  
                <div class="col-12">
                  <label for="number" class="form-label">No Telpon/HP 2"</label>
                  <input type="number"  name="no_hp2" class="form-control" id="exampleFormControlInput1" placeholder="No Telpon/HP 2">
                </div>
  
                <div class="col-12">
                  <label for="text" class="form-label">Alamat</label>
                  <textarea  name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Alamat"></textarea>
                </div>
                
                <div class="col-12">
                  <label for="email" class="form-label">Tanggal Lahir</label>
                  <input type="date" name="tanggal_lahir" class="form-control" id="exampleFormControlInput1" placeholder="Tanggal Lahir">
                </div>
  
                <div class="col-12">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Password">
                </div>



              <div class="col-12">
                <hr>
                <button class="w-100 btn btn-primary btn-lg" name="submit" type="submit">Simpan</button>
              </div>

              </div>
              </div>
            </div>  
          </div>
        </form>
      </div>
    </main>   
  </div>
</body>
          
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
        var x = document.forms["myForm"]["jenis_kelamin"].value;
        if (x == "" || x == null) {
          alert("Jenis Kelamin Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["info_laundry"].value;
        if (x == "" || x == null) {
          alert("Info Laundry Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["no_hp1"].value;
        if (x == "" || x == null) {
          alert("No Telpon/HP1 Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["no_hp2"].value;
        if (x == "" || x == null) {
          alert("No Telpon/HP2 Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["alamat"].value;
        if (x == "" || x == null) {
          alert("Alamat Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["tanggal_lahir"].value;
        if (x == "" || x == null) {
          alert("Tanggal Lahir Harus diisi terlebih dahulu !");
          return false;
        }
        var x = document.forms["myForm"]["password"].value;
        if (x == "" || x == null) {
          alert("Password Harus diisi terlebih dahulu !");
          return false;
        }
      }
    </script>

      
      <?php
        include("bawah.php");
      ?>
