<?php
namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
*
**/
class User implements UserInterface
{   
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(type="string", length=60, unique=true)
     */
    protected $email;
    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $name;
    /**
     * @ORM\Column(type="string", length=25)
     */
    protected $role;
    /**
     * @Assert\NotBlank()
     * @Assert\Length(max=4096)
     */
    protected $plainPassword;
    /**
     * The below length depends on the "algorithm" you use for encoding
     * the password, but this works well with bcrypt.
     *
     * @ORM\Column(type="string", length=64)
     */
    protected $password;
    /**
     * @ORM\Column(type="datetime")
     */
    protected $birth;
  
    public function eraseCredentials()
    {
        return null;
    }
  
    public function getBirth()
    {
        return $this->birth;
    }
    public function setBirth($birth)
    {
        $this->birth = $birth;
    }    
  
    public function getRole()
    {
        return $this->role;
    }
    public function setRole($role = null)
    {
        $this->role = $role;
    }
    public function getRoles()
    {
        return [$this->getRole()];
    }
    public function getId()
    {
        return $this->id;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getUsername()
    {
        return $this->email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
    }
    public function getSalt()
    {
        return null;
    }
}