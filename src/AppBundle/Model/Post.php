<?php 
class Post {
    private $idPost; 
    private $pagePost;
	private $titlePost;
    private $datePost;
    private $messagePost;
    private $imagePost;
    private $comments = array();

    public function __construct($page, $title, $message, $image) {
		$this->mailUser = $mail;
		$this->pseudoUser = $pseudo;
		$this->passUser = $pass;
		$this->avatar = $avatar;
	}

    