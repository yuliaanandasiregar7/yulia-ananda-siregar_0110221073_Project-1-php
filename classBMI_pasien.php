<?php
include_once 'header.php';
include_once 'sidebar.php';
?>

<div class="content-wrapper">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>FORM PASIEN</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style.css"> 
  <title>Halaman Data BMI Pasien </title>
</head>
<body>
  
<div class="container">
    <h2 class="text-center mb-5">FORM PASIEN</h2>
<form action="classBMI_pasien.php" method="POST">
  <div class="form-group row">
    <label for="nama lengkap" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama lengkap" name="nama__lengkap" placeholder="Nama Lengkap" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="Berat" class="col-4 col-form-label">Berat</label> 
    <div class="col-8">
      <input id="Berat" name="berat__" placeholder="Berat" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi" class="col-4 col-form-label">Tinggi</label> 
    <div class="col-8">
      <input id="tinggi" name="tinggi__" placeholder="Tinggi" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="umur" class="col-4 col-form-label">Umur</label> 
    <div class="col-8">
      <input id="umur" name="umur__" placeholder="Umur" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis__kelamin" id="radio_0" type="radio" class="custom-control-input" value="laki - laki"> 
        <label for="radio_0" class="custom-control-label">Laki - laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jenis__kelamin" id="radio_1" type="radio" class="custom-control-input" value="perempuan"> 
        <label for="radio_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="simpan" type="simpan" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
</div>
<hr>
<?php require_once "class_BMI.php"; ?>

<div class="container">
  <h2 class="text-center mb-5">DATA BMI PASIEN</h2>
  <table class="table table-secondary table-bordered">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>Jenis Kelamin</th>
        <th>Umur</th>
        <th>Berat</th>
        <th>Tinggi</th>
        <th>BMI</th>
        <th>Hasil</th>
      </tr>
</thead>
</tbody>
<?php
      $nomor = 1;
      foreach($ar_pasien as $pasien){

        echo '<tr><td>'. $nomor . '</td>';
        echo '<td>'.$pasien['nama'] . '</td>';
        echo '<td>'.$pasien['kelamin'] . '</td>';
        echo '<td>'.$pasien['umur'] . '</td>';
        echo '<td>'.$pasien['berat'] . '</td>';
        echo '<td>'.$pasien['tinggi'] . '</td>';
        $BMI = $pasien['berat'] / (($pasien['tinggi'] / 100) ** 2);
        echo '<td>'. number_format($BMI, 1) . '</td>';
        $status = new bmiPasien();
        echo $status->statusBMI($BMI);
        echo'</tr>';
        $nomor++;
    }
?>
</tbody>
  </table>
  </div>
  </body>
  </html>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>


  </div>

<?php
include_once 'footer.php';
?>

