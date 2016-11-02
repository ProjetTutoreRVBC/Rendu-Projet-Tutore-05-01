<?php 
class User {
    private $idUser; 
    private $mailUser; 
		private $pseudoUser;
		private $passUser;
		private $avatarUser
		private $channels[];
		private $page[];

    public function __construct($mail, $pseudo, $pass, $avatar) {
			$db = Database::getInstance();
			$sql = "INSERT INTO user VALUES (:mail, :pseudo, :pass)";
			$stmt = $db->prepare($sql);
			$stmt->bindParam(':mail', $mail);
			$stmt->bindParam(':pseudo', $pseudo);
			$stmt->bindParam(':pass', $pass);
			return $stmt->execute();
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

		public function getChannels() {
			$db = Database::getInstance();
			$sql = "SELECT * FROM channel WHERE owner = :id";
			$stmt = $db->query($sql);
			$stmt->setFetchMode(PDO::FETCH_CLASS, "Channel");
			$stmt->bindParam(':id',$idUser);
			$stmt->execute(); 
			return $stmt->fetchAll();
		}

		public function getPage() {
			$db = Database::getInstance();
			$sql = "SELECT * FROM page WHERE owner = :id";
			$stmt = $db->query($sql);
			$stmt->setFetchMode(PDO::FETCH_CLASS, "Page");
			$stmt->bindParam(':id',$idUser);
			$stmt->execute();
			return $stmt->fetchAll();
		}

		public function setMail($mail) {
			$db = Database::getInstance();
			$sql = "UPDATE user SET mailUser = :mail WHERE idUser = :id";
			$stmt = $db->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->bindParam('::mail',$mail);
			$stmt->bindParam(':id',$idUser);
			$stmt->execute();
			$this->mailUser = $mail;
		}

		public function setPseudo($pseudo) {
			$db = Database::getInstance();
			$sql = "UPDATE user SET pseudoUser = :pseudo WHERE idUser = :id";
			$stmt = $db->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->bindParam(':pseudo',$pseudo);
			$stmt->bindParam(':id',$idUser);
			$stmt->execute();
			$this->pseudoUser = $pseudo;
		}

		public function setPass($old,$new) {
			$db = Database::getInstance();
			$sql = "SELECT pass FROM user WHERE idUser = :id";
			$stmt = $db->prepare($sql);
    		$stmt->bindParam(':id',$idUser);
    		$stmt->execute();
    		$res = $stmt->fetch();

			if ($res['pass'] == $old ) {
				if ($old != $new) {
					$sql = "UPDATE user SET pass = :passUser WHERE idUser = :id";
					$stmt = $db->prepare($sql);
					$stmt->setFetchMode(PDO::FETCH_ASSOC);
					$stmt->bindParam(':passUser',$new);
					$stmt->bindParam(':id',$idUser);
					$stmt->execute($new,$this->idUser);
				}
   	 		}
    	if ($res['mdpU'] != $mdp ) {
    	  	echo "<h2>Votre mot de passe est incorrecte veuillez réessayer</h2>";
    	}
			$this->passUser = $new; 
		}

		public function setAvatar($avatar) {
			$db = Database::getInstance();
			$sql = "UPDATE user SET avatar = :avatar WHERE idUser = :id";
			$stmt = $db->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->bindParam(':avatar',$avatar);
			$stmt->bindParam(':id',$idUser);
			$stmt->execute();
			$this->avatarUser = $avatar;
		}
}
?>