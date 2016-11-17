<?php
namespace AppBundle\Entity;

class User
{
    protected $id;
    protected $email;
    protected $name;
    protected $role;
    protected $plainPassword;
    protected $password;
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