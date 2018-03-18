<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use JsonSerializable;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements JsonSerializable
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    public function getID(){ return $this->id; }

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $username;
    public function getUsername(){ return $this->username; }
    public function setUsername($username) { $this->username = $username; }

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $password;
    public function getPassword(){ return $this->password; }
    public function setPassword($password) { $this->password = $password; }

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $email;
    public function getEmail(){ return $this->email; }
    public function setEmail($email) { $this->email = $email; }

    function __construct($user, $pass, $email){
        $this->username = $user;
        $this->password = $pass;
        $this->email = $email;
    }

    function jsonSerialize(){
        return get_object_vars($this);
    }
}
