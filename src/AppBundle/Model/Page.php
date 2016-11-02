<?php 
class User {
    private $idPage; 
    private $ownerPage; 
	private $descriptionPage;
	private $post[];
		
    public function __construct($owner, $description) {
		$db = Database::getInstance();
		$sql = "INSERT INTO page VALUES (:owner, :description);"
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':owner', $owner);
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

    public function getOwner() {
        $db = Database::getInstance();
		$sql = "SELECT owner FROM page WHERE idPage = :id"
		$stmt = $db->prepare($sql);
		$stmt->bindParam(':id', $idP);
		$stmt->bindParam(':description', $description);
		return $stmt->execute();
    }
}
