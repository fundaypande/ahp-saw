<?php
class Alternatif{

	private $conn;
	private $table_name = "ahp_data_alternatif";

	public $id;
	public $nm;
	public $sa;
	public $hs;

	public $harga;
	public $jarak;
	public $suasana;
	public $fasilitas;
	public $varian;
	public $kebersihan;
	public $pelayanan;
	public $rasa;

	public function __construct($db){
		$this->conn = $db;
	}

	function readRank(){

		$query = "SELECT nama_alternatif, hasil_akhir FROM ahp_data_alternatif ORDER BY hasil_akhir DESC";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();

		return $stmt;
	}

	function updateRank($id, $ranking){
		$query = "UPDATE ahp_data_alternatif
				SET
					hasil_akhir = :ranking
				WHERE
					id_alternatif = :id";

			$stmt = $this->conn->prepare($query);
			$stmt->bindParam(':ranking', $ranking);
			$stmt->bindParam(':id', $id);

			// execute the query
			if($stmt->execute()){
				return true;
			}else{
				return false;
			}
	}


	function upload($id, $harga, $jarak, $suasana, $fasilitas, $varian, $kebersihan, $pelayanan, $rasa){

		$query = "UPDATE ahp_bobot_alternatif
				SET
				harga = :harga,
				jarak = :jarak,
				suasana = :suasana,
				fasilitas = :fasilitas,
				varian = :varian,
				kebersihan = :kebersihan,
				pelayanan = :pelayanan,
				rasa = :rasa
				WHERE
					id_alternatif = :id";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':harga', $harga);
		$stmt->bindParam(':jarak', $jarak);
		$stmt->bindParam(':suasana', $suasana);
		$stmt->bindParam(':fasilitas', $fasilitas);
		$stmt->bindParam(':varian', $varian);
		$stmt->bindParam(':kebersihan', $kebersihan);
		$stmt->bindParam(':pelayanan', $pelayanan);
		$stmt->bindParam(':rasa', $rasa);
		$stmt->bindParam(':id', $id);

		// execute the query
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}

	function insert(){

		$query = "insert into ".$this->table_name." values(NULL,?,?,?,?,?,?,?,?,?,'')";
		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->nm);
		$stmt->bindParam(2, $this->harga);
		$stmt->bindParam(3, $this->jarak);
		$stmt->bindParam(4, $this->suasana);
		$stmt->bindParam(5, $this->fasilitas);
		$stmt->bindParam(6, $this->varian);
		$stmt->bindParam(7, $this->kebersihan);
		$stmt->bindParam(8, $this->pelayanan);
		$stmt->bindParam(9, $this->rasa);


		$query = "insert into ahp_bobot_alternatif values(NULL,?,?,?,?,?,?,?,?,?,'')";
		$stmt2 = $this->conn->prepare($query);
		$stmt2->bindParam(1, $this->nm);
		$stmt2->bindParam(2, $this->harga);
		$stmt2->bindParam(3, $this->jarak);
		$stmt2->bindParam(4, $this->suasana);
		$stmt2->bindParam(5, $this->fasilitas);
		$stmt2->bindParam(6, $this->varian);
		$stmt2->bindParam(7, $this->kebersihan);
		$stmt2->bindParam(8, $this->pelayanan);
		$stmt2->bindParam(9, $this->rasa);

		$stmt2->execute();

		//die($this->nm." - ".$this->harga $this->jarak $this->suasana);

		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}

	function readAll(){

		$query = "SELECT * FROM ".$this->table_name." ORDER BY id_alternatif ASC";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();

		return $stmt;
	}

	function readAllBobot(){

		$query = "SELECT * FROM ahp_bobot_alternatif ORDER BY id_alternatif ASC";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();

		return $stmt;
	}

	function countAll(){

		$query = "SELECT * FROM ".$this->table_name." ORDER BY id_alternatif ASC";
		$stmt = $this->conn->prepare( $query );
		$stmt->execute();

		return $stmt->rowCount();
	}

	function readOne(){

		$query = "SELECT * FROM " . $this->table_name . " WHERE id_alternatif=? LIMIT 0,1";

		$stmt = $this->conn->prepare( $query );
		$stmt->bindParam(1, $this->id);
		$stmt->execute();

		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		$this->id = $row['id_alternatif'];
		$this->nm = $row['nama_alternatif'];
		$this->sa = $row['skor_alternatif'];
		$this->hs = $row['hasil_akhir'];

		$this->harga = $row['harga'];
		$this->jarak = $row['jarak'];
		$this->suasana = $row['suasana'];
		$this->fasilitas = $row['fasilitas'];
		$this->varian = $row['varian'];
		$this->kebersihan = $row['kebersihan'];
		$this->pelayanan = $row['pelayanan'];
		$this->rasa = $row['rasa'];
	}

	// update the product
	function update(){

		$query = "UPDATE
					" . $this->table_name . "
				SET
					nama_alternatif = :nm,
					harga = :harga,
					jarak = :jarak,
					suasana = :suasana,
					fasilitas = :fasilitas,
					varian = :varian,
					kebersihan = :kebersihan,
					pelayanan = :pelayanan,
					rasa = :rasa
				WHERE
					id_alternatif = :id";

		$stmt = $this->conn->prepare($query);

		$stmt->bindParam(':nm', $this->nm);
		$stmt->bindParam(':id', $this->id);

		$stmt->bindParam(':harga', $this->harga);
		$stmt->bindParam(':jarak', $this->jarak);
		$stmt->bindParam(':suasana', $this->suasana);
		$stmt->bindParam(':fasilitas', $this->fasilitas);
		$stmt->bindParam(':varian', $this->varian);
		$stmt->bindParam(':kebersihan', $this->kebersihan);
		$stmt->bindParam(':pelayanan', $this->pelayanan);
		$stmt->bindParam(':rasa', $this->rasa);

		// execute the query
		if($stmt->execute()){
			return true;
		}else{
			return false;
		}
	}

	// delete the product
	function delete(){

		$query = "DELETE FROM " . $this->table_name . " WHERE id_alternatif = ?";
		$query2 = "DELETE FROM ahp_bobot_alternatif WHERE id_alternatif = ?";

		$stmt = $this->conn->prepare($query);
		$stmt->bindParam(1, $this->id);

		$stmt2 = $this->conn->prepare($query2);
		$stmt2->bindParam(1, $this->id);
		$stmt2->execute();

		if($result = $stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
	function hapusell($ax){

		$query = "DELETE FROM " . $this->table_name . " WHERE id_alternatif in $ax";

		$stmt = $this->conn->prepare($query);

		if($result = $stmt->execute()){
			return true;
		}else{
			return false;
		}
	}
}
?>
