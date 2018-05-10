<?php
include_once 'header.php';
if($_POST){

	include_once 'includes/alternatif.inc.php';
	$eks = new Alternatif($db);

	$eks->id = $_POST['kd'];
	$eks->nm = $_POST['nm'];

	$eks->harga = $_POST['harga'];
	$eks->jarak = $_POST['jarak'];
	$eks->suasana = $_POST['suasana'];
	$eks->fasilitas = $_POST['fasilitas'];
	$eks->varian = $_POST['varian'];
	$eks->kebersihan = $_POST['kebersihan'];
	$eks->pelayanan = $_POST['pelayanan'];
	$eks->rasa = $_POST['rasa'];

	if($eks->insert()){
?>
<script type="text/javascript">
window.onload=function(){
	showStickySuccessToast();
};
</script>
<?php
	}

	else{
?>
<script type="text/javascript">
window.onload=function(){
	showStickyErrorToast();
};
</script>
<?php
	}
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
			  <li><a href="data-alternatif.php"><span class="fa fa-book"></span> Data Alternatif</a></li>
			  <li class="active"><span class="fa fa-clone"></span> Tambah Data</li>
			</ol>
		  	<p style="margin-bottom:10px;">
		  		<strong style="font-size:18pt;"><span class="fa fa-clone"></span> Tambah Alternatif</strong>
		  	</p>
		  	<div class="panel panel-default">
		<div class="panel-body">

			    <form method="post">
				  <div class="form-group">
				    <label for="kt">Nama Alternatif</label>
				    <input type="text" class="form-control" id="nm" name="nm" required>
				  </div>


					<div class="form-group">
				    <label for="kt">Harga</label>
				    <input type="text" class="form-control" id="harga" name="harga" required>
				  </div>
					<div class="form-group">
				    <label for="kt">Jarak</label>
				    <input type="text" class="form-control" id="jarak" name="jarak" required>
				  </div>
					<div class="form-group">
				    <label for="kt">Suasana</label>
				    <input type="text" class="form-control" id="suasana" name="suasana" required>
				  </div>
					<div class="form-group">
				    <label for="kt">Fasilitas</label>
				    <input type="text" class="form-control" id="fasilitas" name="fasilitas" required>
				  </div>
					<div class="form-group">
				    <label for="kt">Varian</label>
				    <input type="text" class="form-control" id="varian" name="varian" required>
				  </div>
					<div class="form-group">
				    <label for="kt">Kebersihan</label>
				    <input type="text" class="form-control" id="kebersihan" name="kebersihan" required>
				  </div>
					<div class="form-group">
				    <label for="kt">Pelayanan</label>
				    <input type="text" class="form-control" id="pelayanan" name="pelayanan" required>
				  </div>
					<div class="form-group">
				    <label for="kt">Rasa</label>
				    <input type="text" class="form-control" id="rasa" name="rasa" required>
				  </div>



				  <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
				  <button type="button" onclick="location.href='data-alternatif.php'" class="btn btn-success"><span class="fa fa-history"></span> Kembali</button>
				</form>

		  </div></div></div>
		</div>
		<?php
include_once 'footer.php';
?>
