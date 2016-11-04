<?php 
class User {
    private $mailUser; 
	private $pseudoUser;
	private $passUser;
	private $avatarUser;
	private $page;
	private $channel = array();

    public function __construct($mail, $pseudo, $pass, $avatar) {
			$this->mailUser = $mail;
			$this->pseudoUser = $pseudo;
			$this->passUser = $pass;
			$this->avatar = $avatar;
		}

		public static function getFromPseudo( $pseudo ) {
			$db = Database::getInstance();
			$sql = "SELECT * FROM user WHERE pseudoUser =:pseudo";
			$stmt = $db->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_CLASS, "User");
			$stmt->bindParam(':pseudo',$pseudo)
			$stmt->execute();
			return $stmt->fetch();
		}

		public function register($mail, $pseudo, $pass, $avatar) {
			$db = Database::getInstance();
			$sql = "INSERT INTO user VALUES (:mail, :pseudo, :pass)";
			$stmt = $db->prepare($sql);
			$stmt->bindParam(':mail', $mail);
			$stmt->bindParam(':pseudo', $pseudo);
			$stmt->bindParam(':pass', $pass);
			return $stmt->execute();
		}

		public function signIn($mail, $pass) {
			$db = Database::getInstance();
			$sql = "SELECT * FROM user WHERE mail = :mail";
			$stmt = $db->prepare($sql);
    		$stmt->bindParam(':mail',$mail);
    		$stmt->execute();
    		$res = $stmt->fetch();

    		if ($res['pass'] == $passUser ) {
					session_start();
    		  $_SESSION['pseudo'] = $res['pseudo'];
    		}

    		if ($res['pass'] != $passUser ) {
    		  echo "<h2>Votre mot de passe est incorrecte veuillez réessayer</h2>";
    		}
		}

		public function getMail() {
			return $this->mailUser;
		}

		public function getPseudo() {
			return $this->pseudoUser;
		}

		public function getPass() {
			return $this->passUser;
		}

		public function getAvatar() {
			return $this->avatarUser;
		}

		public function getChannels() {		//TROUVER COMMENT PEUPLER LE TABLEAU
			$db = Database::getInstance();
			$sql = "SELECT * FROM channel WHERE pseudo = :pseudo";
			$stmt = $db->query($sql);
			$stmt->setFetchMode(PDO::FETCH_CLASS, "Channel");
			$stmt->bindParam(':pseudo',$pseudoUser);
			$stmt->execute(); 
			return $stmt->fetchAll();
		}

		public function getPage() {
			$db = Database::getInstance();
			$sql = "SELECT * FROM page WHERE owner = :pseudo";
			$stmt = $db->query($sql);
			$stmt->setFetchMode(PDO::FETCH_CLASS, "Page");
			$stmt->bindParam(':pseudo',$pseudoUser);
			$stmt->execute();
			return $stmt->fetchAll();
		}

		public function setMail($mail) {
			$db = Database::getInstance();
			$sql = "UPDATE user SET mailUser = :mail WHERE pseudoUser = :pseudo";
			$stmt = $db->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->bindParam('::mail',$mail);
			$stmt->bindParam(':pseudo',$pseudoUser);
			$stmt->execute();
			$this->mailUser = $mail;
		}

		public function setPseudo($pseudo) {
			$db = Database::getInstance();
			$sql = "UPDATE user SET pseudoUser = :pseudo WHERE pseudoUser = :pseudo";
			$stmt = $db->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->bindParam(':pseudo',$pseudo);
			$stmt->bindParam(':pseudo',$pseudoUser);
			$stmt->execute();
			$this->pseudoUser = $pseudo;
		}

		public function setPass($old,$new) {
			$db = Database::getInstance();
			$sql = "SELECT pass FROM user WHERE pseudoUser = :pseudo";
			$stmt = $db->prepare($sql);
    		$stmt->bindParam(':pseudo',$pseudoUser);
    		$stmt->execute();
    		$res = $stmt->fetch();

			if ($res['pass'] == $old ) {
				if ($old != $new) {
					$sql = "UPDATE user SET pass = :passUser WHERE pseudoUser = :pseudo";
					$stmt = $db->prepare($sql);
					$stmt->setFetchMode(PDO::FETCH_ASSOC);
					$stmt->bindParam(':passUser',$new);
					$stmt->bindParam(':pseudo',$pseudoUser);
					$stmt->execute($new,$this->pseudoUser);
				}
   	 		}
    	if ($res['mdpU'] != $mdp ) {
    	  	echo "<h2>Votre mot de passe est incorrecte veuillez réessayer</h2>";
    	}
			$this->passUser = $new; 
		}

		public function setAvatar($avatar) {
			$db = Database::getInstance();
			$sql = "UPDATE user SET avatar = :avatar WHERE pseudoUser = :pseudo";
			$stmt = $db->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->bindParam(':avatar',$avatar);
			$stmt->bindParam(':pseudo',$pseudoUser);
			$stmt->execute();
			$this->avatarUser = $avatar;
		}
}
?>