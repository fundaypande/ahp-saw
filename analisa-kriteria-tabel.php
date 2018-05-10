<?php
include_once 'header.php';
include_once 'includes/bobot.inc.php';
include_once 'includes/kriteria.inc.php';
$pro = new Bobot($db);
$up = new Kriteria($db);

$stmt2 = $pro->readAll2();
$stmt3 = $pro->readAll2();
$count = $pro->countAll();

	//rubah nilai $kolom
	//ketika selesai iterasi pertama, nilai $kolom dinaikkan 1

	//multiply() untuk mengalikan matriks
	function multiply($a, $b){
		$r=count($a)+1;
		$c=count($b)+1;
		$p=count($b)+1;
		for ($i=1; $i < $r; $i++){
		    for($j=1; $j < $c; $j++){
		        $result[$i][$j] = 0;
		        for($k=1; $k < $p; $k++){
		            $result[$i][$j] += $a[$i][$k] * $b[$k][$j];
		        }
		    }
		}
		return $result;
	}

	//jumlahMul() untuk menjumlahkan baris matriks
	function jumlahMul($a){
		$r=count($a)+1;
		$s = $r-2;

		for ($baris=1;$baris<$r;$baris++){
			for ($kolom=1;$kolom<$r;$kolom++){
				$matJumlah[$s] = $matJumlah[$s] + $a[$kolom][$baris];
			}
			$s--;
		}
		return $matJumlah;
	}

	//sumArray() untuk menjumlahkan seluruh isi MATRIKS
	function sumArray($a){
		$r=count($a);
		for ($kolom=0;$kolom<$r;$kolom++){
			$matJumlah = $matJumlah + $a[$kolom];
		}
		return $matJumlah;
	}

	//eigenMat() untuk mencari nilai eigen MATRIKS
	function eigenMat($a, $jumlah){
		$r=count($a);
		for ($kolom=0;$kolom<$r;$kolom++){
			$hasil[$kolom] = $a[$kolom]/$jumlah;
		}
		return $hasil;
	}


	//selisihEigen() untuk mencari selisih eigen 2 matriks
	function selisihEigen($a, $b){
		$r=count($a);
		$i = 0;
		for ($kolom=0;$kolom<$r;$kolom++){
			$c[$kolom] = $a[$kolom]-$b[$kolom];
			if($c[$kolom] < (1/100000)){
				$i = $i + 1;
			} else {
				return true;
			}
		}
		if($i === 8) return false;

	}

	//roundArray() pembulatan nilai ARRAY
	function roundArray($a){
		$r=count($a);
		for ($kolom=0;$kolom<$r;$kolom++){
			$c[$kolom] = round($a[$kolom], 2);;
		}
		return $c;
	}


	// BAGIAN MENGISI ARRAY MATRIKS
	//===========================
	$kriteria = 8 + 1;
	$i = 1;
	$j = 2;
	//mengisi array matrik dengan inputan user
	for ($baris=$i;$baris<$kriteria;$baris++){
		for ($kolom=$j;$kolom<$kriteria;$kolom++){
			$matKriteria[$kolom][$baris] = $_POST[$baris.$kolom];
		}
		$j = $j+1;
	}

	//mengisi array pertengahan dengan nilai 1
	for ($baris=$i;$baris<$kriteria;$baris++){
		$matKriteria[$baris][$baris] = 1;
	}

	$kriteria = 8 + 1;
	$i = 1;
	$j = 2;
	//menginvers matrik segitia
	for ($baris=$i;$baris<$kriteria;$baris++){
		for ($kolom=$j;$kolom<$kriteria;$kolom++){
			$matKriteria[$baris][$kolom] = 1/$matKriteria[$kolom][$baris];
		}
		$j = $j+1;
	}

	$iterasi = 2;
	$matrik1 = multiply($matKriteria, $matKriteria);


	$jumlah = jumlahMul($matrik1);
	$totalJumlah = sumArray($jumlah);
	$eigenA = eigenMat($jumlah, $totalJumlah);
	$totalEigen = sumArray($eigenA);


	$matrik2 = multiply($matrik1, $matrik1);
	$jumlah2 = jumlahMul($matrik2);
	$totalJumlah2 = sumArray($jumlah2);
	$eigenB = eigenMat($jumlah2, $totalJumlah2);
	$matrik = $matrik2;
	$jumlahMul = $jumlah2;
	$totalJumlahMul = $totalJumlah2;
	$totalEigenMul = sumArray($eigenB);

	while(selisihEigen($eigenA, $eigenB))
	{
		$iterasi++;
		$eigenA = $eigenB;
		$matrikMul = multiply($matrik, $matrik);
		$matrik = $matrikMul;
		$jumlahMul = jumlahMul($matrik);
		$totalJumlahMul = sumArray($jumlahMul);
		$eigenB = eigenMat($jumlahMul, $totalJumlahMul);
		$totalEigenMul = sumArray($eigenB);
	}

	//$eigenB = roundArray($eigenB);
	// print_r($iterasi);
	// print_r($totalJumlah);
	// print_r($totalEigen);

	//upload Eigen A ke DB
	$x = 1;
	for ($kolom=0;$kolom<8;$kolom++){
		$up -> upload($x, $eigenB[$kolom]);
		$x++;
	}


	//MENGHITUNG KONSISTENSI INDEX
	//DAN KONSISTENSI RATIO
	$ii = 1;
	$jj = 1;

	for ($baris=$ii;$baris<$kriteria;$baris++){
		for ($kolom=$jj;$kolom<$kriteria;$kolom++){
			$alphaMaxMatrik[$baris] = $alphaMaxMatrik[$baris] + $matKriteria[$baris][$kolom];
		}
	}
	$dd = 1;
	$xx = 8;
	for ($kolom=$dd;$kolom<$kriteria;$kolom++){
		$alphaMax = $alphaMax + ($alphaMaxMatrik[$kolom] * $eigenA[$xx]);
		$xx--;
	}
	$ci = ($alphaMax-8)/8;
	$cr = $ci/1.14;
	if($cr < 0.1){
		$notif = "Data Konsisten";
	} else {
		$notif = "Data Tidak Konsisten";
		echo '<script language="javascript">';
		echo 'alert("Data Tidak Konsisten")';
		echo '</script>';
	}

?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-2">
		  	<?php
			include_once 'sidebar.php';
			?>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-10">
	<ol class="breadcrumb">
	  <li><a href="index.php"><span class="fa fa-home"></span> Beranda</a></li>
	  <li><a href="analisa-alternatif.php"><span class="fa fa-balance-scale"></span> Analisa Alternatif</a></li>
	  <li class="active"><span class="fa fa-table"></span> Tabel Analisa Alternatif</li>
	</ol>

	<!-- Body Start -->
	<?php

		$kriteria = 8 + 1;
		$i = 1;
		$j = 1;
		$s = 0;
		$arrKriteria = ['Harga', 'Jarak (KM)', 'Suasana', 'Fasilitas', 'Varian', 'Kebersihan', 'Pelayanan', 'Rasa'];
		print('<h2>Tabel Kriteria </h2>');
		print('<table width="100%" class="table table-striped table-bordered">');
	?>

	<thead>
      <tr>
				<th>Kriteria</th>
				<?php
			    for($kolom=0;$kolom<$kriteria-1;$kolom++) {
			        print("<th>{$arrKriteria[$kolom]}</th>");
			    }
				?>
      </tr>
    </thead>
	<?php
		for($baris=$i;$baris<$kriteria;$baris++) {
		    print('<tr>');
				?>
				<th> <?php echo $arrKriteria[$s]; $s++; ?> </th>
				<?php
		    for($kolom=$j;$kolom<$kriteria;$kolom++) {
		        print("<td>{$matKriteria[$kolom][$baris]}</td>");
		    }
		    print('</tr>');
		}
		print('</table>');


		// TABEL HASIL PERKALIAN MATRIKS
		$kriteria = 8 + 1;
		$i = 1;
		$j = 1;
		$s = 0;
		$o = 7;
		$p = 7;
		print('<h2>Tabel Hasil Kuadrat Kriteria Matrik 1</h2>');
		print('<table width="100%" class="table table-striped table-bordered">');
	?>

	<thead>
      <tr>
				<th>Kriteria</th>
				<?php
			    for($kolom=0;$kolom<$kriteria-1;$kolom++) {
			        print("<th>{$arrKriteria[$kolom]}</th>");
			    }
				?>
				<th>Jumlah</th>
				<th>Eigen</th>
      </tr>
    </thead>
	<?php
		for($baris=$i;$baris<$kriteria;$baris++) {
		    print('<tr>');
				?>
				<th> <?php echo $arrKriteria[$s]; $s++; ?> </th>
				<?php
		    for($kolom=$j;$kolom<$kriteria;$kolom++) {
		        print("<td>{$matrik1[$kolom][$baris]}</td>");
		    }
				?>
				<th> <?php echo $jumlah[$o]; $o--; ?> </th>
				<th> <?php echo $eigenA[$p]; $p--; ?> </th>
				<?php
		    print('</tr>');
		}
		print("<th colspan='9'>Jumlah</th>");
		print("<th>{$totalJumlah}</th>");
		print("<th>{$totalEigen}</th>");
		print('</table>');
		echo "Total Iterasi : 1";
		echo "<br />";
		echo "CR : ".$cr. "  (". $notif.") ";


		// TABEL HASIL PERKALIAN MATRIKS
		$kriteria = 8 + 1;
		$i = 1;
		$j = 1;
		$s = 0;
		$o = 7;
		$p = 7;
		print('<h2>Tabel Hasil Kuadrat Kriteria </h2>');
		print('<table width="100%" class="table table-striped table-bordered">');
	?>

	<thead>
      <tr>
				<th>Kriteria</th>
				<?php
			    for($kolom=0;$kolom<$kriteria-1;$kolom++) {
			        print("<th>{$arrKriteria[$kolom]}</th>");
			    }
				?>
				<th>Jumlah</th>
				<th>Eigen</th>
      </tr>
    </thead>
	<?php
		for($baris=$i;$baris<$kriteria;$baris++) {
		    print('<tr>');
				?>
				<th> <?php echo $arrKriteria[$s]; $s++; ?> </th>
				<?php
		    for($kolom=$j;$kolom<$kriteria;$kolom++) {
		        print("<td>{$matrik[$kolom][$baris]}</td>");
		    }
				?>
				<th> <?php echo (string) $jumlahMul[$o]; $o--; ?> </th>
				<th> <?php echo (string) $eigenB[$p]; $p--; ?> </th>
				<?php
		    print('</tr>');
		}
		print("<th colspan='9'>Jumlah</th>");
		print("<th>{$totalJumlahMul}</th>");
		print("<th>{$totalEigenMul}</th>");
		print('</table>');
		echo "Total Iterasi : ".$iterasi;
	?>

	<!-- Body End -->

	</div>
</div>
<?php
include_once 'footer.php';
?>
