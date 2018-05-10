<?php
include_once 'header.php';
include_once 'includes/kriteria.inc.php';
$pro1 = new Kriteria($db);
$count1 = $pro1->countAll();
include_once 'includes/nilai.inc.php';
$pro2 = new Nilai($db);
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
			  <li class="active"><span class="fa fa-bomb"></span>Analisa Kriteria</li>
	  		  <li><a href="analisa-kriteria-tabel.php"><span class="fa fa-table"></span> Tabel Analisa Kriteria</a></li>
			</ol>
		  	<p style="margin-bottom:10px;">
		  		<strong style="font-size:18pt;"><span class="fa fa-bomb"></span> Analisa Kriteria</strong>
		  	</p>
		  	<div class="panel panel-default">
		<div class="panel-body">

			    <form method="post" action="analisa-kriteria-tabel.php">
				<div class="row">
					  <div class="col-xs-12 col-md-3">
						<div class="form-group">
							<label>Kriteria Pertama</label>
						</div>
					  </div>
					  <div class="col-xs-12 col-md-6">
						<div class="form-group">
							<label>Pernilaian</label>
						</div>
					  </div>
					  <div class="col-xs-12 col-md-3">
						<div class="form-group">
							<label>Kriteria Kedua</label>
						</div>
					  </div>
					</div>

					<?php
						//rubah nilai $kolom
						//ketika selesai iterasi pertama, nilai $kolom dinaikkan 1
						$kriteria = 8 + 1;
						$i = 1;
						$j = 2;
						for ($baris=$i;$baris<$kriteria;$baris++){
							for ($kolom=$j;$kolom<$kriteria;$kolom++){
					?>

					<!-- First ROW -->
					<div class="row">
						<div class="col-xs-12 col-md-3">
						<div class="form-group">
							<?php
								$stmt2 = $pro1->readSatu($kolom);
								while($row1 = $stmt2->fetch(PDO::FETCH_ASSOC)){
							?>
							<input type="text" class="form-control" value="<?php echo $row1['nama_kriteria'] ?>" readonly />
							<input type="hidden" name="C11" value="<?php echo $row1['id_kriteria'] ?>" />
							<?php
								}
							?>
						</div>
						</div>
						<div class="col-xs-12 col-md-6">
						<div class="form-group">
							<select class="form-control" name="<?php echo $baris.$kolom ?>">
								<?php
								$stmt1 = $pro2->readAll();
								while ($row2 = $stmt1->fetch(PDO::FETCH_ASSOC)){
								?>
								<option value="<?php echo $row2['jum_nilai'] ?>"><?php echo $row2['jum_nilai'] ?> - <?php echo $row2['ket_nilai'] ?></option>
								<?php
								}
								?>
							</select>
						</div>
						</div>
						<div class="col-xs-12 col-md-3">
						<div class="form-group">
							<?php
								$stmt3 = $pro1->readSatu($baris);
								while($row3 = $stmt3->fetch(PDO::FETCH_ASSOC)){
							?>
							<input type="text" class="form-control" value="<?php echo $row3['nama_kriteria'] ?>" readonly />
							<input type="hidden" name="C21" value="<?php echo $row3['id_kriteria'] ?>" />
							<?php
								}
							?>
						</div>
						</div>
					</div>
					<!-- END First ROW -->

					<?php
							}
							$j = $j+1;
						}
					?>





					<button type="submit" name="subankr" class="btn btn-primary"> Selanjutnya <span class="fa fa-arrow-right"></span></button>
				</form>

		  </div></div></div>
		</div>
		<?php
include_once 'footer.php';
?>
