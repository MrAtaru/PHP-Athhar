<!-- form.php -->
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>BIODATA</title>
</head>

<body>
  
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <!-- /Navbar -->

    <!-- Content -->
    <br>
    <div class="container col-md-8">
        <div class="card">
            <div class="card-header">
                <center>
                    <h3>Biodata</h3>
                </center>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">

                      <!-- input nama -->
                        <label for="exampleFormControlInput1">Nama</label>
                        <input type="text" class="form-control" name="nama" id="exampleFormControlInput1" placeholder="Masukkan Nama Anda">
                      <!-- /input nama -->

                        <br>  

                      <!-- input tempat lahir -->
                        <label for="exampleFormControlInput1">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" id="exampleFormControlInput1" placeholder="Masukkan Tempat Lahir Anda">
                      <!--/input tempat lahir -->

                        <br>

                      <!-- input tanggal lahir -->
                        <label for="exampleFormControlInput1">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" id="exampleFormControlInput1" placeholder="Masukkan Tanggal Lahir Anda">
                      <!-- /input tanggal lahir -->

                        <br>

                      <!-- input jenis kelamin -->
                        <label for="exampleFormControlInput1">Jenis kelamin</label>
                      <br>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline1" name="jk" class="custom-control-input" value="Laki-laki">
                        <label class="custom-control-label" for="customRadioInline1">Laki-laki</label>
                      </div>
                      <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadioInline2" name="jk" class="custom-control-input" value="Perempuan">
                        <label class="custom-control-label" for="customRadioInline2">Perempuan</label>
                      </div>
                      <!-- /input jenis kelamin -->

                      <br>

                      <!-- input alamat -->
                      <br>
                        <label for="exampleFormControlInput1">Alamat</label>
                      <br>
                        <textarea name="alamat" id="" cols="127" rows="3"></textarea>
                      <!-- /input alamat -->

                      <br>
                      <br>

                      <!-- input agama -->
                        <label for="exampleFormControlInput1">Agama</label>
                      <div class="input-group mb-3">
                        <select class="custom-select" id="inputGroupSelect01" name="agama">
                          <option selected disabled>Pilihlah...</option>
                          <option value="Islam">Islam</option>
                          <option value="Kristen Katolik">Kristen Katolik</option>
                          <option value="Kristen Protestan">Kristen Protestan</option>
                          <option value="Budha">Budha</option>
                          <option value="Hindu">Hindu</option>
                          <option value="Konghucu">Konghucu</option>
                        </select>
                      </div>
                      <!-- /input agama -->

                      <br>

                      <!-- input pendidikan terakhir -->
                      <label for="exampleFormControlInput1">Pendidikan terakhir</label>
                      <div class="input-group mb-3">
                        <select class="custom-select" id="inputGroupSelect01" name="pend_terakhir">
                          <option selected disabled>Pilihlah...</option>
                          <option value="TK">TK</option>
                          <option value="SD">SD</option>
                          <option value="SMP">SMP</option>
                          <option value="SMA">SMA</option>
                          <option value="SMK">SMK</option>
                          <option value="S1">S1</option>
                          <option value="S2">S2</option>
                          <option value="S3">S3</option>
                        </select>
                      </div>
                      <!-- /input pendidikan terakhir -->

                      <br>

                      <!-- input status -->
                      <label for="exampleFormControlInput1">Status</label>
                      <div class="input-group mb-3">
                        <select class="custom-select" id="inputGroupSelect01" name="status">
                          <option selected disabled>Pilihlah...</option>
                          <option value="Sudah menikah">Sudah menikah</option>
                          <option value="Belum menikah">Belum menikah</option>
                          <option value="Duda">Duda</option>
                          <option value="Janda">Janda</option>
                          <option value="Pelajar">Pelajar</option>
                        </select>
                      </div>
                      <!-- /input status -->

                      <br>

                      <!-- input kata-kata bijak -->
                        <label for="exampleFormControlInput1">Kata-kata bijak</label>
                      <br>
                        <textarea name="kb" id="" cols="127" rows="3"></textarea>
                      <!-- /input kata-kata bijak -->
                      
                    <br>
                    <br>

                    <!-- submit button -->
                        <input type="submit" class="btn btn-primary" name="simpan" value="SIMPAN">
                    <!-- /submit button -->


                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    <!-- /Content -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
</body>

</html>

<?php

if(isset($_POST['simpan'])){

    $nama = $_POST["nama"];
    $tempat = $_POST["tempat_lahir"];
    $tanggal = $_POST["tanggal_lahir"];
    $jenis = $_POST["jk"];
    $alamat = $_POST["alamat"];
    $agama = $_POST["agama"];
    $pend = $_POST["pend_terakhir"];
    $status = $_POST["status"];
    $kata_bijak = $_POST["kb"];


    class Biodata{

        public function data($nama2,$tempat2,$tanggal2,$jenis2,$alamat2,$agama2,$pend2,$status2,$kata_b2){

          echo "<center>";

          // pembuka container
          echo "<div class='container col-md-8'>";
          // pembuka container

          // pembuka card
          echo "<div class='card'>";
          // pembuka card

          // card header
          echo "<div class='card-header'>";
          echo "<center>";
          echo "<h3>Biodata Anda</h3>";
          echo "</center>";
          echo "</div>";
          // card header

          // pembuka card body
          echo "<div class=card-body>";
          // pembuka card body

          // table
          echo "<table class='table table-hover table-borderless'>";
          echo "<tr>";
          echo "<td>Nama </td>";
          echo "<td> : </td>";
          echo "<td>".$nama2."</td>";
          echo "</tr>";
          echo "<tr>";
          echo "<td>Tempat Lahir </td>";
          echo "<td> : </td>";
          echo "<td>".$tempat2."</td>";
          echo "</tr>";
          echo "<tr>";
          echo "<td>Tanggal Lahir </td>";
          echo "<td> : </td>";
          echo "<td>".$tanggal2."</td>";
          echo "</tr>";
          echo "<tr>";
          echo "<td>Jenis Kelamin</td>";
          echo "<td> : </td>";
          echo "<td>".$jenis2."</td>";
          echo "</tr>";
          echo "<tr>";
          echo "<td>Alamat</td>";
          echo "<td> : </td>";
          echo "<td>".$alamat2."</td>";
          echo "</tr>";
          echo "<tr>";
          echo "<td>Agama</td>";
          echo "<td> : </td>";
          echo "<td>".$agama2."</td>";
          echo "</tr>";
          echo "<tr>";
          echo "<td>Pendidikan Terakhir</td>";
          echo "<td> : </td>";
          echo "<td>".$pend2."</td>";
          echo "</tr>";
          echo "<tr>";
          echo "<td>Status</td>";
          echo "<td> : </td>";
          echo "<td>".$status2."</td>";
          echo "</tr>";
          echo "<tr>";
          echo "<td>Kata-kata Bijak</td>";
          echo "<td> : </td>";
          echo "<td>".$kata_b2."</td>";
          echo "</tr>";
          echo "</table>";
          // table

          // penutup card body
          echo "</div>";
          // penutup card body

          // penutup card
          echo "</div>";
          // penutup card

          // penutup container
          echo "</div>";
          // penutup container

          echo "</center>";
          echo "<br>";
          echo "<br>";
          echo "<br>";
          echo "<br>";

        } 
    }
    $cetak = new Biodata;
    
    $cetak->data($nama,$tempat,$tanggal,$jenis,$alamat,$agama,$pend,$status,$kata_bijak);

}

?>