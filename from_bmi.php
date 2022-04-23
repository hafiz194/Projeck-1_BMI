<?php
include "header.php";
include "sidebar.php";
?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kalkulator BMI</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Kalkulator BMI</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h5 class="card-header" style="background-color: #E0F2F1">Kalkulator BMI</h5>
                        <div class="card-body row">
                            <div class="col-6">
                                <form method="POST" action="hasil_bmi.php">
                                <div class="form-group row">
                                        <label for="gender" class="col-sm-5 col-form-label"><span><b>Gender :</b></span></label>
                                        <div class="col-sm-4">
                                        <select name="gender" class="form-control" id="gender">
                                            <option id="gender" value="Matkul">Gender</option>
                                            <option id="gender" value="L">Laki-laki</option>
                                            <option id="gender" value="P">Perempuan</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Berapa kode pasien anda?</label>
                                        <input type="text" name="kode" class="form-control"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Siapa nama anda?</label>
                                        <input type="text" name="nama" class="form-control"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Berapa tinggi Anda? (cm)</label>
                                        <input type="text" name="tinggi" class="form-control"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Berapa berat badan Anda? (kg)</label>
                                        <input type="text" name="berat" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tanggal Pemeriksaan</label>
                                        <input type="date" name="date" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <a href="hasil_bmi.php">
                                        <button name="proses" type="submit" class="btn btn-primary">Hitung</button>
                                    </a>
                                </form>
                            </div>
                            <div class="col-6">
                                <h2>Kalkulator BMI (IMT)</h2>
                                <p>Gunakan kalkulator ini untuk memeriksa Indeks Massa Tubuh (IMT) dan mengecek apakah
                                    berat badan Anda ideal atau tidak. Anda juga dapat menggunakannya untuk memeriksa
                                    indeks massa tubuh anak.</p>
                                <center>
                                    <img src="img/toolsIconBmi.svg" style="width: 220px; margin-top: 10px;" alt="">
                                </center>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
include "footer.php";
?>