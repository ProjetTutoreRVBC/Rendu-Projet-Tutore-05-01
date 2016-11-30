<?php
class Comment
{
    private $idComment;
    private $post;
    private $nostreamer;
    private $channel;
    private $video;
    private $titleComment;
    private $dateComment;
    private $messageComment;
    private $rateComment;
    public function __construct($idPost, $idNostreamer, $idChannel, $idVideo, $titleComment, $messageComment)
    {
      $this->idPost = $idPost;
		  $this->idNostreamer = $idNostreamer;
		  $this->idChannel = $idChannel;
      $this->idVideo = $idVideo;
      $this->titleComment = $titleComment;
      $this->messageComment = $messageComment;
    }
  
    public function getFromId($idPost, $idChannel, $idVideo)
    {
      
    }
  
    public function getTitleComment()
    {
      return $this->titleComment;
    }
  
    public function getMessageComment()
    {
      return $this->messageComment;
    }
  
    public function setTitleComment()
    {
      $db = Database::getInstance($titleComment); //Why titleComment wasn't there before ?
			$sql = "UPDATE Comment SET titleComment = :title WHERE idComment = :id";
			$stmt = $db->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->bindParam(':title',$titleComment);
			$stmt->bindParam(':id',$idComment);
			$stmt->execute();
      $this->titleComment = $titleComment;
			  
    }
  
    public function setMessageComment($messageComment)
    {
      $db = Database::getInstance();
			$sql = "UPDATE Comment SET messageComment = :message WHERE idComment = :id";
			$stmt = $db->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->bindParam(':message',$messageComment);
			$stmt->bindParam(':id',$idComment);
			$stmt->execute();
			$this->messageComment = $messageComment;
    }
}
