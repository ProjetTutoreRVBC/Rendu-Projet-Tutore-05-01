<?php 
class Page {
    private $idPage;
	private $user;  
	private $descriptionPage;
		
    public function __construct($user, $description) {
		$this->user = $user;
		$this->description = $description;
		$db = Database::getInstance();
		$sql = "INSERT INTO page VALUES (:user, :description);"
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':user', $user);
		$stmt->bindParam(':description', $description);
		return $stmt->execute();
	}

    public static function getFromId( $id ) {
		$db = Database::getInstance();
		$sql = "SELECT * FROM page WHERE idPage = :id";
		$stmt = $db->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, "Page");
		$stmt->bindParam(':id',$id)
		$stmt->execute();
		return $stmt->fetch();
    }

    public function getOwnerName() {
        return $this->user;
    }

	public function getPosts() {
		$db = Database::getInstance();
		$sql = "SELECT * FROM post WHERE idPage = :id";
		$stmt = $db->query($sql);
		$stmt->setFetchMode(PDO::FETCH_CLASS, "Post");
		$stmt->bindParam(':id',$idPage);
		$stmt->execute(); 
		return $stmt->fetchAll();
	}

	public function getDescription() {
		return $this->descriptionPage;
	}

	public function setDescription($descr) {
			$db = Database::getInstance();
			$sql = "UPDATE page SET descriptionPage = :descr WHERE idPage = :id";
			$stmt = $db->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->bindParam(':descr',$descr);
			$stmt->bindParam(':id',$idPage);
			$stmt->execute();
			$this->descriptionPage = $descr;
		}
}
