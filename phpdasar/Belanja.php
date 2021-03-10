<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Online Shop</title>
</head>
<body>
    <div class="bg-success p-5">
    <h1 class="text-center text-white">Online Shop</h1>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-6">
            <form action="Belanja.php" method="post" class="mt-3">
            
            <div class="form-group">
                    <label for="">Nama Pembeli</label>
                    <input type="text" name="customer" value="" class="form-control">
                </div>
                <div class="form-group">
                <label for="">Produk</label><br>
                  <div class="form-check form-check-inline">
                  
                    <input class="form-check-input" type="radio" name="produk" id="inlineRadio1" value="TV">
                    <label class="form-check-label" for="inlineRadio1">TV</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="produk" id="inlineRadio2" value="Kulkas">
                    <label class="form-check-label" for="inlineRadio2">Kulkas</label>
                    </div>
                    <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="produk" id="inlineRadio3" value="Mesin cuci">
                    <label class="form-check-label" for="inlineRadio3">Mesin Cuci</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Jumlah Produk</label>
                    <input type="text" name="jumlah_produk" value="" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="">Tanggal Pemesanan</label>
                    <input type="date" name="tanggal" value="" class="form-control">
                </div>

                <label for="">Courier Type</label>
                <select class="form-select form-control" name='courier_type' class="form-control">
                    <option selected>Choose Courier Type :</option>
                    <option value="Tiki">Tiki</option>
                    <option value="Sicepat">Si Cepat</option>
                    <option value="Pos Indonesia">Pos</option>
                    <option value="Grab">Grab</option>
                    <option value="Gojek">Gojek</option>
                </select>
                <div class="form-group">
                    <label for="">Alamat Pengiriman</label>
                    <textarea class="form-control" name="alamat" id="" cols="30" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Biaya Pengiriman</label>
                    <input type="text" name="biaya" value="" class="form-control">
                </div>

                
                <div class="form-group">
                    <label for="">Biaya Jaminan</label>
                    <input type="text" name="asuransi" value="" class="form-control">
                </div>
                <input type="submit" value="Simpan" name="" class="btn btn-success btn-sm btn-block">

            </form>

        <?php
        
            $customer = $_POST['customer'];
            $produk = $_POST['produk'];
            $total_item = $_POST['jumlah_produk'];
            $tanggal_pengiriman = $_POST['tanggal'];
            $tipe_kurir = $_POST['courier_type'];
            $alamat_pengiriman = $_POST['alamat'];
            $biaya_pengiriman = $_POST['biaya'];
            $assurance = $_POST['asuransi'];
        
            if( $produk == "TV" ){
               
                $hasil = 3000000 * $total_item + $assurance;     

            }
            
            else if($produk == "Kulkas" ){
                $hasil = 6000000 * $total_item +  $assurance;

            }
            else {
                $hasil = 4000000 * $total_item + $assurance;
            
            }
        ?>    
    </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    Result
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nama Pelanggan : <?=$customer?></li>
                    <li class="list-group-item">Produk : <?=$produk?></li>
                    <li class="list-group-item">Jumlah Produk : <?=$total_item?></li>
                    <li class="list-group-item">Tanggal Pemesanan : <?=$tanggal_pengiriman?> </li>
                    <li class="list-group-item">Courier Type : <?=$tipe_kurir?></li>
                    <li class="list-group-item">Alamat Pengiriman : <?=$alamat_pengiriman?></li>
                    <li class="list-group-item">Biaya Pengiriman : <?=$biaya_pengiriman?></li>
                    <li class="list-group-item">Biaya Jaminan : <?=$assurance?></li>
                    <li class="list-group-item">Total Cost : <?=$hasil?></li>
                   
                </ul>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-header bg-success text-white">
                    List Barang
                    </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">TV : Rp.3000.000</li>
                    <li class="list-group-item">Kulkas : Rp.6000.000</li>
                    <li class="list-group-item">Mesin Cuci : Rp.4000.000</li>
                </ul>
                </div>
            </div>
            
        </div>
        
    </div>
</body>
</html>