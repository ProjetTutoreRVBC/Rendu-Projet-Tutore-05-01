<?php
class Video
{
    private $idVideo;
    private $nameVideo;
    private $channel;
    private $dateVideo;
    private $viewsVideo;
    private $descriptionVideo;
    private $rateVideo;
    public function __construct($nameVideo, $channel, $descriptionVideo)
    {
      $this->nameVideo = $nameVideo;
      $this->channel = $channel;
      $this->descriptionVideo = $descriptionVideo;
    }
  
    public function getName()
    {
      return $this->nameVideo;
    }
    public function getChannel()
    {
      return $this->channel;
    }
  
    public function getDate()
    {
      return $this->dateVideo;
    }
  
    public function getViews()
    {
      return $this->viewsVideo;
    }
  
    public function getDescription()
    {
      return $this->descriptionVideo;
    }
  
    public function getRate()
    {
      return $this->rateVideo;
    }
  
    public function setName($name)
    {
      $db = Database::getInstance();
			$sql = "UPDATE Video SET nameVideo = :name WHERE idVideo = :id";
			$stmt = $db->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->bindParam(':name',$name);
			$stmt->bindParam(':id',$idVideo);
			$stmt->execute();
			$this->nameVideo = $nameVideo;
    }
  
    public function addView()
    {
      
    }
  
    public function addRate()
    {
      
    }
  
    public function setDescription($description)
    {
      $db = Database::getInstance();
			$sql = "UPDATE Video SET descriptionVideo = :descr WHERE idVideo = :id";
			$stmt = $db->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->bindParam(':descr',$description);
			$stmt->bindParam(':id',$idVideo);
			$stmt->execute();
			$this->descriptionVideo = $descriptionVideo;
    }
}
