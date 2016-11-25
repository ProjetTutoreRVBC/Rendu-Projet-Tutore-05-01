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
    }
    public function getFromId($idPost, $idChannel, $idVideo)
    {
    }
    public function getTitleComment()
    {
    }
    public function getMessageComment()
    {
    }
    public function setTitleComment()
    {
    }
    public function setMessageComment($messageComment)
    {
    }
}
