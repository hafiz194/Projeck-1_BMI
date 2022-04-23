<?php
require_once "header.php";
require_once "sidebar.php";
require_once "class_bmi.php";
require_once "class_pasien.php";
require_once "class_bmipasien.php";

$psn1 = new pasien('P001', 'Irman', 'bogor', '2022-01-12', 'ibab252@gmail.com', 'L');
$psn1->gender = 'L';
$psn2 = new pasien('P002', 'Rina', 'bogor', '2022-03-21', 'ibab673@gmail.com', 'P');
$psn2->gender = 'P';
$psn3 = new pasien('P003', 'Ifah', 'bogor', '2022-02-171', 'ibab6272@gmail.com', 'P' );
$psn3->gender = 'P';

$bmi1 = new BMI(50.6, 172);
$bmi2 = new BMI(49.8, 165);
$bmi3 = new BMI(45.8, 149);

$bmipas1 = new BMIPasien($bmi1, $psn1, '2022-01-12');
$bmipas2 = new BMIPasien($bmi2, $psn2, '2022-03-21');
$bmipas3 = new BMIPasien($bmi3, $psn3, '2022-02-17');

if (isset($_POST['proses'])) {

    $proses = $_POST['proses'];
    $tinggi = $_POST['tinggi'];
    $berat = $_POST['berat'];
    $gender = $_POST['gender'];
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $tgl = $_POST['date'];

    $bmi4 = new BMI($berat, $tinggi);
    $psn4 = new pasien($kode, $nama, $tmp_lahir, $tgl_lahir, $email, $gender );
    $ke1 = $psn1->gender = $gender;

    $status = $bmi4->nilaiBMI();
    $bmipas4 = new BMIPasien($bmi4, $psn4, $tgl);
    $arr = [$bmipas1,$bmipas2,$bmipas3,$bmipas4];

}


?>





 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Data Pasien BMI</h1>
                </div>
                <!-- /.col -->
                <div class="col-xl-6 col-sm-10 col-12">
                  <div class="form-group row">
                    <div class="col-sm-3">
                      <div class="form-check mt-2">
                      </div>
                    </div>
                    <div class="col-sm-3">
                      <div class="form-check mt-2">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-8 icon-header-colom">
                 <a href="content.php"><i class="bi bi-calendar-plus icon-header"></i></a> 
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
          </div>
  
          <!-- /.content-header -->
          <!-- Main content -->
          <div class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col">
                  <!-- /.card -->
                  <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal Periksa</th>
                        <th scope="col">umur</th>
                        <th scope="col">Nama Pasien</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Berat (Kg)</th>
                        <th scope="col">Tinggi (Cm)</th>
                        <th scope="col">Nilai BMI</th>
                        <th scope="col">Status BMI</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i= 1; ?>
                    <?php foreach($arr as $obj)  :?>
                      <tr>
                      <td><?=$i?></td>
                        <td><?=$obj->tanggal?></td>
                        <td><?=$obj->pasien->kode?></td>
                        <td><?=$obj->pasien->nama?></td>
                        <td><?=$obj->pasien->gender?></td>
                        <td><?=$obj->bmi->berat?></td>
                        <td><?=$obj->bmi->tinggi?></td>
                        <td><?=$obj->bmi->nilaiBMI()?></td>
                        <td><?=$obj->bmi->statusBMI()?></td>
                      </tr>
                      <?php $i++ ?>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
  
                  <!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
  
                <!-- /.col-md-6 -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
          </div>
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <?php require_once "footer.php" ?>




















<!-- 
                <tr>
                    <th>No</th>
                    <th>Tanggal Periksa</th>
                    <th>Kode Pasien</th>
                    <th>Nama Pasien</th>
                    <th>Gender</th>
                    <th>Berat (kg)</th>
                    <th>Tinggi (cm)</th>
                    <th>Nilai BMI</th>
                    <th>Status BMI</th>
                </tr>
            </thead>
                <tbody>
                    <?php
                    $nomor-1;
                    foreach($arr as $obj){
                    ?>
                    <tr>
                        <td><?=$nomor?></td>
                        <td><?=$obj->tanggal?></td>
                        <td><?=$obj->pasien->kode?></td>
                        <td><?=$obj->pasien->nama?></td>
                        <td><?=$obj->pasien->gender?></td>
                        <td><?=$obj->bmi->berat?></td>
                        <td><?=$obj->bmi->tinggi?></td>
                        <td><?=$obj->bmi->nilaiBMI()?></td>
                        <td><?=$obj->bmi->statusBMI()?></td>
                    </tr>
                    <?php
                        $nomor++;
                    } 
                    ?>
                </tbody>
            </tabel>
        </div>
    </div>





</h2> -->