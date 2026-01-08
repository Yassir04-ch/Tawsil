<?php

namespace Src\Entity;

 abstract class User{
    protected string $firstname;
    protected string $lastname;
    protected string $email;
    protected string $password;
    protected string $role;
    protected bool $active ;
    protected string $created_at;
    public function __construct(string $firstname,string $lastname,string $email,string $password,string $role, bool $active){
        $this->firstname = $firstname;    
        $this->lastname = $lastname;    
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
        $this->active = $active;
    }
    public function getFirstname(){
     return   $this->firstname;
}
     public function setFirstame(string $firstname){
        $this->firstname = $firstname;
     } 
     public function getLastname(){
     return   $this->lastname;
}
     public function setlastame(string $lastname){
        $this->lastname = $lastname;
     }
     public function getEmail(){ 
        return $this->email;
     }
    public function setEmail(string $email){
         $this->email = $email; 
        }

     abstract public function getRole();

    public function setRole(string $role){ 
        $this->role = $role; 
    }

    public function getCreatedAt(): string { 
        return $this->created_at; 
    }
    public function login(){
    }
    
    public function logout(){
    }


    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getActive()
    {
        return $this->active;
    }

    public function setActive($active)
    {
        $this->active = $active;
    }
}