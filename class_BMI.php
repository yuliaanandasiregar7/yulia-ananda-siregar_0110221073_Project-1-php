<?php 
class bmiPasien
{
    public $nama,
    $berat,
    $tinggi,
    $umur,
    $jeniskelamin;

    public function hasilBMI()
    {
    return "<b>Nama : $this->nama <br><br>
    Berat Badan : $this->berat <br><br>
    Tinggi Badan : $this->tinggi <br><br>
    Umur: $this->umur <br><br>
    Jenis Kelamin : $this->jeniskelamin </b>";
    }
public function statusBMI($BMI)
{
    if ($BMI < 18.5){
        return "<td>kekurangan berat badan</td>";
    }   else if ($BMI >=18.5 && $BMI <=24.9){
        return "<td>normal (ideal)</td>";
    }   else if ($BMI >=25.0 && $BMI <=29.9){
        return "<td>kelebihan berat badan</td>";
    }   else{
        return "<td>kegemukan (obesitas)</td>";
    }  
  }
}
if (isset($_POST["nama__lengkap"])) {
    $bmi = new bmiPasien;
    $bmi->nama = $_POST["nama__lengkap"];
    $bmi->berat = $_POST["berat__"];
    $bmi->tinggi = $_POST["tinggi__"];
    $bmi->umur = $_POST["umur__"];
    $bmi->jeniskelamin= $_POST["jenis__kelamin"];
}
$pasien1 = ['nama' => 'Ahmad arif', 'kelamin' => 'laki-laki', 'umur' => 20, 'berat' => 47.2, 'tinggi' =>150];
$pasien2 = ['nama'=> 'Rina sulastri', 'kelamin' => 'perempuan', 'umur' => 18, 'berat' => 42.2, 'tinggi' =>160];
$pasien3 = ['nama' => 'Luthfi makarim', 'kelamin' => 'laki-laki', 'umur' => 21, 'berat' => 70.2, 'tinggi' =>157];
$pasien4 = ['nama' => $bmi->nama, 'kelamin' => $bmi->jeniskelamin, 'umur' => $bmi->umur, 'berat' => $bmi->berat, 'tinggi' => $bmi->tinggi];

$ar_pasien = [$pasien1, $pasien2, $pasien3, $pasien4];
?>

