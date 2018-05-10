<?php
include_once 'header.php';
include_once 'includes/alternatif.inc.php';
$pro = new Alternatif($db);
$stmt = $pro->readAll();
$stmt2 = $pro->readAll();
$stmt3 = $pro->readAll();
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
			  <li class="active"><span class="fa fa-balance-scale"></span> Analisa Alternatif</li>
	  		  <li><a href="#" data-toggle="modal" data-target="#myModalalt"><span class="fa fa-table"></span> Tabel Analisa Alternatif</a></li>
			</ol>



			<!-- START BODY -->
			<?php
			$minHarga = 1000;
			$minJarak = 1000;
			$maxSuasana = 0;
			$maxFasilitas = 0;
			$maxVarian = 0;
			$maxKebersihan = 0;
			$maxPelayanan = 0;
			$maxRasa = 0;
			$no=1;
			$i = 0;
			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
				if ($row['harga'] < $minHarga) {
          $minHarga = $row['harga'];
      	}
				if ($row['jarak'] < $minJarak) {
          $minJarak = $row['jarak'];
      	}
				if ($row['suasana'] > $maxSuasana) {
          $maxSuasana = $row['suasana'];
      	}
				if ($row['fasilitas'] > $maxFasilitas) {
          $maxFasilitas = $row['fasilitas'];
      	}
				if ($row['varian'] > $maxVarian) {
          $maxVarian = $row['varian'];
      	}
				if ($row['kebersihan'] > $maxKebersihan) {
          $maxKebersihan = $row['kebersihan'];
      	}
				if ($row['pelayanan'] > $maxPelayanan) {
          $maxPelayanan = $row['pelayanan'];
      	}
				if ($row['rasa'] > $maxRasa) {
          $maxRasa = $row['rasa'];
      	}
			}

			while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
				$alt[0][$i] = $minHarga/$row2['harga'];
				$alt[1][$i] = $minJarak/$row2['jarak'];
				$alt[2][$i] = $row2['suasana']/$maxSuasana;
				$alt[3][$i] = $row2['fasilitas']/$maxFasilitas;
				$alt[4][$i] = $row2['varian']/$maxVarian;
				$alt[5][$i] = $row2['kebersihan']/$maxKebersihan;
				$alt[6][$i] = $row2['pelayanan']/$maxPelayanan;
				$alt[7][$i] = $row2['rasa']/$maxRasa;
				$i++;
			}


			//Upload BOBOT KE DB
			$x = 1;
			$n = 0;
			while ($row5 = $stmt3->fetch(PDO::FETCH_ASSOC)){
				$a1 = $alt[0][$n];
				$b1 = $alt[1][$n];
				$c1 = $alt[2][$n];
				$d1 = $alt[3][$n];
				$e1 = $alt[4][$n];
				$f1 = $alt[5][$n];
				$g1 = $alt[6][$n];
				$h1 = $alt[7][$n];
				$id = $row5['id_alternatif'];

				$pro -> upload($id, $a1, $b1, $c1, $d1, $e1, $f1, $g1, $h1);
				$n++;
				$x++;

			}



			$kriteria = 8;
			$i = 0;
			$j = 0;
			$s = 0;
			$o = 0;
			$p = 0;
			$arrKriteria = ['Harga', 'Jarak (KM)', 'Suasana', 'Fasilitas', 'Varian', 'Kebersihan', 'Pelayanan', 'Rasa'];
			print('<h2>Tabel Normalisasi Alternative</h2>');
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
			for($baris=$i;$baris<count($alt[0]);$baris++) {
			    print('<tr>');
			    for($kolom=$j;$kolom<$kriteria;$kolom++) {
			        print("<td>{$alt[$kolom][$baris]}</td>");
			    }
			    print('</tr>');
			}
			print("<th colspan='6'>Jumlah</th>");
			print("<th>{$totalJumlah}</th>");
			print("<th>{$totalEigen}</th>");
			print('</table>');

			?>

			<!-- END BODY -->




			</div>
		</div>
		<?php
include_once 'footer.php';
?>
