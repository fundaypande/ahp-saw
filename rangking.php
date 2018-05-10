<?php
include_once 'header.php';
include_once 'includes/alternatif.inc.php';
$pro1 = new Alternatif($db);
$readRank = $pro1 -> readRank();
$stmt1 = $pro1->readAllBobot();
$countAlternatif = $pro1->readAll();
$stmt1y = $pro1->readAll();
include_once 'includes/kriteria.inc.php';
$pro2 = new Kriteria($db);
$stmt2 = $pro2->readAll();
$stmt2y = $pro2->readAll();
include_once 'includes/rangking.inc.php';
$pro = new Rangking($db);
$stmt = $pro->readKhusus();
$stmty = $pro->readKhusus();
$count = $pro->countAll();
$stmtx1 = $pro->readBob();
$stmtx2 = $pro->readBob();
$stmtx1y = $pro->readBob();
$stmtx2y = $pro->readBob();

//multiply() untuk mengalikan matriks
function multiply($a, $b){
	$r=count($a);
	$c=count($b[0]);
	$p=count($b);

	for ($i=0; $i < $r; $i++){
			for($j=0; $j < $c; $j++){
					$result[$i][$j] = 0;
					for($k=0; $k < $p; $k++){
							$result[$i][$j] += $a[$i][$k] * $b[$k][$j];
					}
			}
	}
	return $result;
}


?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-2">
		<?php
			include_once 'sidebar.php';
		?>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-10">
	<br/>

	    	<div class="row">
				<div class="col-md-6 text-left">
					<h4>Data Rangking</h4>
				</div>
				<div class="col-md-6 text-right">
		            <button type="button" onclick="location.href='index.php'" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Kembali</button>
				</div>
			</div>

	    	<br/>
			<table width="100%" class="table table-striped table-bordered">
		        <thead>
		            <tr>
		                <th rowspan="2" style="vertical-align: middle" class="text-center">Alternatif</th>
		                <th colspan="<?php echo $stmt2->rowCount(); ?>" class="text-center">Kriteria</th>
		            </tr>
		            <tr>
		            <?php
								$arrKriteria = ['Harga', 'Jarak (KM)', 'Suasana', 'Fasilitas', 'Varian', 'Kebersihan', 'Pelayanan', 'Rasa'];
					while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
					?>
		                <th><?php echo $row2['nama_kriteria'] ?></th>
		            <?php
					}
					?>
		            </tr>
		        </thead>

		        <tbody>
		<?php
		$i = 0;
		while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)){

			echo "<tr>";
			print("<th>{$row1['nama_alternatif']}</th>");
			print("<td>{$row1['harga']}</td>");
			print("<td>{$row1['jarak']}</td>");
			print("<td>{$row1['suasana']}</td>");
			print("<td>{$row1['fasilitas']}</td>");
			print("<td>{$row1['varian']}</td>");
			print("<td>{$row1['kebersihan']}</td>");
			print("<td>{$row1['pelayanan']}</td>");
			print("<td>{$row1['rasa']}</td>");
			echo "</tr>";

			$bobotAlternatif[0][$i] = $row1['harga'];
			$bobotAlternatif[1][$i] = $row1['jarak'];
			$bobotAlternatif[2][$i] = $row1['suasana'];
			$bobotAlternatif[3][$i] = $row1['fasilitas'];
			$bobotAlternatif[4][$i] = $row1['varian'];
			$bobotAlternatif[5][$i] = $row1['kebersihan'];
			$bobotAlternatif[6][$i] = $row1['pelayanan'];
			$bobotAlternatif[7][$i] = $row1['rasa'];
			$i++;

		}
		//print_r($bobotAlternatif);
		?>
				<tr>
					<th>Bobot</th>
					<?php
					$y = 0;
					while ($rowx1 = $stmtx1->fetch(PDO::FETCH_ASSOC)){
							print("<td>{$rowx1['bobot_kriteria']}</td>");
							$bobotKriteria[0][$y] = $rowx1['bobot_kriteria'];
							$y++;
					}
					$hasil = multiply($bobotKriteria, $bobotAlternatif);
						$i = 0;
						while ($row10 = $countAlternatif->fetch(PDO::FETCH_ASSOC)){
							$pro1 -> updateRank($row10['id_alternatif'], $hasil[0][$i]);
							$i++;
						}
					//print_r($bobotKriteria);
					?>
				</tr>

		        </tbody>

		    </table>
				<h2>Hasil Rangking</h2>
				<table width="100%" class="table table-striped table-bordered">
			        <thead>
			            <tr>
			                <th rowspan="2" style="vertical-align: middle" class="text-center">Nama</th>
			                <th colspan="<?php echo $stmt2->rowCount(); ?>" class="text-center">Prioritas</th>
			            </tr>
							</thead>
							<tbody>
								<?php
									while ($row6 = $readRank->fetch(PDO::FETCH_ASSOC)){
										print("<tr>");
										print("<td> {$row6['nama_alternatif']} </td>");
										print("<td> {$row6['hasil_akhir']} </td>");
										print("</tr>");
									}
								 ?>
							</tbody>
				</table>


	</div>
</div>
<?php
include_once 'footer.php';
//print_r($hasil);
?>
