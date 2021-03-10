<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Form Nilai</title>
</head>
<body>
    <div class="bg-primary p-5">
    <h1 class="text-center text-white">Form Penilaian Mahasiswa</h1>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="form_nilai.php" method="get" class="mt-3">
            
            <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" value="" class="form-control">
                </div>
                
            <div class="form-group">
                    <label for="">NIM</label>
                    <input type="text" name="nim" value="" class="form-control">
                </div>
                <label for="">Mata Kuliah</label>
                <select class="form-select form-control" name="matkul" class="form-control">
                    <option selected >Pilih Mata Kuliah :</option>
                    <option value="Basis Data" >Basis Data</option>
                    <option value="Bahasa Inggris" >Bahasa Inggris</option>
                    <option value="Jaringan Komputer" >Jaringan Komputer</option>
                    <option value="Keterampilan Komunikasi" >Keterampilan Komunikasi</option>
                    <option value="PKN" >PKN</option>
                    <option value="Statiska" >Statiska</option>
                    <option value="UI/UX" >UI/UX</option>
                    <option value="Web Programming" >Web Programming</option>      
                </select>
                <div class="form-group">
                    <label for="">Nilai UTS</label>
                    <input type="text" name="nilai_uts" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Nilai UAS</label>
                    <input type="text" name="nilai_uas" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Praktikum</label>
                    <input type="text" name="praktikum" value="" class="form-control">
                </div>
                <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-sm btn-block">
            </form>
                <?php
                $nama = $_GET['nama'];
                $nim = $_GET['nim'];
                $matkul = $_GET['matkul'];
                $nilai_uts = $_GET['nilai_uts'];
                $nilai_uas = $_GET['nilai_uas'];
                $praktikum = $_GET['praktikum'];
                $submit = $_GET['simpan'];
                $total_nilai = array($nilai_uts, $nilai_uas, $praktikum);
                $_nilaihuruf = array_sum($total_nilai);

                
                if($_nilaihuruf >= 85)
                {
                    $_huruf = "A";
                }
                    elseif ($_nilaihuruf >= 70){
                        $_huruf = "B";
                    }
                    elseif ($_nilaihuruf >= 60){
                        $_huruf = "C";
                    }
                    elseif ($_nilaihuruf >= 40){
                        $_huruf = "D";
                    }
                    elseif ($_nilaihuruf >= 10){
                        $_huruf = "E";
                    }
                else {
                    $_huruf = "";
                }
                $_simpan = $_GET['simpan'];
                
                ?>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nama : <?= $nama?> </li>
                    <li class="list-group-item">NIM : <?= $nim?> </li>
                    <li class="list-group-item">Mata Kuliah : <?= $matkul?> </li>
                    <li class="list-group-item">Nilai UTS : <?= $nilai_uts?> </li>
                    <li class="list-group-item">Nilai UAS : <?= $nilai_uas?> </li>
                    <li class="list-group-item">Praktikum : <?= $praktikum?> </li>
                    <li class="list-group-item">Total Nilai :  <?= $_nilaihuruf?></li>
                    <li class="list-group-item">Nilai Bentuk Huruf : <?= $_huruf?></li>
                    
                    
                </ul>
                </div>
            </div>
            
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-primary text-white">
                    Value
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">A : 85 - 100</li>
                    <li class="list-group-item">B : 70 -84</li>
                    <li class="list-group-item">C: 60-79</li>
                    <li class="list-group-item">D : 40 - 59 </li>
                    <li class="list-group-item">E : Less than 40 </li>
                    
                    
                </ul>
                </div>
        </div>
        
    </div>
</body>
</html>