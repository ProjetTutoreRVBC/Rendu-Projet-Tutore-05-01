<?php
class Page
{
    private $idPage;
    private $nostreamer;
    private $descriptionPage;
    public function __construct($idPage, $idNostreamer, $descriptionPage) //WATCH OUT WATCH OUT WATCH OUT
    {
      $this->nostreamer = $nostreamer;
		  $this->description = $description;
		  $db = Database::getInstance();
		  $sql = "INSERT INTO page VALUES (:idNostreamer, :description);"
		  $stmt = $db->prepare($sql);
		  $stmt->bindParam(':idNostreamer', $idNostreamer);
		  $stmt->bindParam(':description', $description);
		  return $stmt->execute();
    }
  
    public function getFromId($idNostreamer)
    {
      
    }
    public function getOwnerName()
    {
      return $this->nostreamer;
    }
  
    public function getPosts()
    {
      $db = Database::getInstance();
		  $sql = "SELECT * FROM post WHERE idPage = :id";
		  $stmt = $db->query($sql);
		  $stmt->setFetchMode(PDO::FETCH_CLASS, "Post");
		  $stmt->bindParam(':id',$idPage);
		  $stmt->execute(); 
		  return $stmt->fetchAll();
    }
  
    public function getDescription()
    {
      return $this->description;
    }
  
    public function setDescription($descriptionPage)
    {
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
