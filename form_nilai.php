<?php
  if(isset($_GET['submit'])){
    if(count($_GET) > 0) {
      $total = (0.25*$_GET['uts'])+(0.5*$_GET['uas'])+(0.25*$_GET['tugas']);
      $hasil = $total;
      if($hasil >= 85){
        $grade = 'A';
        $ip = '4';
      } else if($hasil >= 70){
        $grade = 'B';
        $ip = '3';
      } else if($hasil >= 55) {
        $grade = 'C';
        $ip = '2';
      } else if($hasil >= 40) {
        $grade = 'D';
        $ip = '1';
      } else {
        $grade = 'E';
        $ip = '0';
      }
    } else {
      header('form_nilai.php');
    }
  } else {
    header('form_nilai.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Praktikum Form PHP</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css' />
  <style>
  /*	Reset & General
---------------------------------------------------------------------- */
* { margin: 0px; padding: 0px; }
body {
	background: #ecf1f5;
	font:14px "Open Sans", sans-serif; 
	text-align:center;
}

.tile{
	width: 100%;
	background:#fff;
	border-radius:5px;
	box-shadow:0px 2px 3px -1px rgba(151, 171, 187, 0.7);
	float:left;
  	transform-style: preserve-3d;
  	margin: 10px 5px;

}

.header{
	border-bottom:1px solid #ebeff2;
	padding:19px 0;
	text-align:center;
	color:#59687f;
	font-size:600;
	font-size:19px;	
	position:relative;
}

.banner-img {
	padding: 5px 5px 0;
}

.banner-img img {
	width: 100%;
	border-radius: 5px;
}

.dates{
	border:1px solid #ebeff2;
	border-radius:5px;
	padding:20px 0px;
	margin:10px 20px;
	font-size:16px;
	color:#5aadef;
	font-weight:600;	
	overflow:auto;
}
.dates div{
	float:left;
	width:50%;
	text-align:center;
	position:relative;
}
.dates strong,
.stats strong{
	display:block;
	color:#adb8c2;
	font-size:11px;
	font-weight:700;
}
.dates span{
	width:1px;
	height:40px;
	position:absolute;
	right:0;
	top:0;	
	background:#ebeff2;
}
.stats{
	border-top:1px solid #ebeff2;
	background:#f7f8fa;
	overflow:auto;
	padding:15px 0;
	font-size:16px;
	color:#59687f;
	font-weight:600;
	border-radius: 0 0 5px 5px;
}
.stats div{
	border-right:1px solid #ebeff2;
	width: 33.33333%;
	float:left;
	text-align:center
}

.stats div:nth-of-type(3){border:none;}

div.footer {
	text-align: right;
	position: relative;
	margin: 20px 5px;
}

div.footer .Cbtn{
  cursor: pointer;
  border: 0;
	padding: 10px 25px;
	background-color: #DADADA;
	color: #666;
	margin: 10px 2px;
	text-transform: uppercase;
	font-weight: bold;
	text-decoration: none;
	border-radius: 3px;
}

div.footer .Cbtn-primary{
	background-color: #5AADF2;
	color: #FFF;
}

div.footer .Cbtn-primary:hover{
	background-color: #7dbef5;
}

div.footer .Cbtn-danger{
	background-color: #fc5a5a;
	color: #FFF;
}

div.footer .Cbtn-danger:hover{
	background-color: #fd7676;
}
  </style>
</head>
<body>
<div class="container-fluid">
  <div class="row">
      <div class="col-md-5 mx-auto">
          <div class="tile">
          <form action="" method="GET">
              <div class="wrapper">
                  <div class="header">Tugas Form - Praktikum 1</div>
                  <div class="banner-img text-left px-3">
                    <div class="form-row mb-3">
                      <div class="col">
                        <label for="nama">Nama :</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan Nama">
                      </div>
                      <div class="col">
                        <label for="nim">NIM :</label>
                        <input type="text" name="nim" id="nim" class="form-control" placeholder="Masukan NIM">
                      </div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col">
                        <label for="matkul">Matkul :</label>
                        <select name="matkul" id="matkul" class="custom-select">
                          <option value="Pemrograman Web">Pemrograman Web</option>
                          <option value="Jaringan Komputer">Jaringan Komputer</option>
                          <option value="Basis Data">Basis Data</option>
                        </select>
                      </div>
                      <div class="col">
                        <label for="sks">SKS :</label>
                        <input type="text" name="sks" id="sks" class="form-control" placeholder="Masukan SKS">
                      </div>
                    </div>
                    <div class="form-row mb-3">
                      <div class="col">
                        <label for="uts">Nilai UTS :</label>
                        <input type="text" name="uts" id="uts" class="form-control" placeholder="Masukan Nilai UTS">
                      </div>
                      <div class="col">
                        <div class="form-group">
                          <label for="uas">Nilai UAS :</label>
                          <input type="text" name="uas" id="uas" class="form-control" placeholder="Masukan Nilai UAS">
                        </div>
                      </div>
                      <div class="col">
                        <label for="tugas">Nilai Tugas :</label>
                        <input type="text" name="tugas" id="tugas" class="form-control" placeholder="Masukan Nilai Tugas">
                      </div>
                    </div>
                  </div>
                  <div class="stats">
                      <div>
                          <strong>NAMA</strong><?= isset($_GET['nama']) ? $_GET['nama'] : 'Kosong' ?>
                      </div>

                      <div>
                          <strong>NIM</strong><?= isset($_GET['nim']) ? $_GET['nim'] : 'Kosong' ?>
                      </div>

                      <div>
                          <strong>Matkul</strong><?= isset($_GET['matkul']) ? $_GET['matkul'] : 'Kosong' ?>
                      </div>

                  </div>

                  <div class="stats">

                      <div>
                          <strong>SKS</strong><?= isset($_GET['sks']) ? $_GET['sks'] : 'Kosong' ?>
                      </div>

                      <div>
                          <strong>Nilai UTS</strong><?= isset($_GET['uts']) ? $_GET['uts'] : 'Kosong' ?>
                      </div>

                      <div>
                          <strong>Nilai UAS</strong><?= isset($_GET['uas']) ? $_GET['uas'] : 'Kosong' ?>
                      </div>

                  </div>

                  <div class="stats">

                      <div>
                        <strong>Nilai Tugas</strong><?= isset($_GET['tugas']) ? $_GET['tugas'] : 'Kosong' ?>
                      </div>
                      <div>
                        <strong>Bobot</strong><?= isset($hasil) ? $hasil : 'Kosong' ?>
                      </div>
                      <div>
                        <?= isset($ip) ? 'IP: '.$ip.'<br>Grade: '.$grade : 'Kosong' ?>
                      </div>
                  </div>

                  <div class="footer">
                    <button type="reset" class="Cbtn Cbtn-danger">Reset</button>
                    <button type="submit" name="submit" class="Cbtn Cbtn-primary">Infut Data</button>
                  </div>
              </div>
          </div> 
          </form>
      </div>
  </div>
</div>
</body>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>