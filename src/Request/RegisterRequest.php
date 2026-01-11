<?php
namespace Src\Request;

class RegisterRequest {
    public string $firstname;
    public string $lastname;
    public string $email;
    public string $password;
    public string $role;
    public function __construct(array $data) {
        $this->firstname = $data['firstname'];  
        $this->lastname = $data['lastname'];
        $this->email = $data['email'];
        $this->password = $data['password'];
        $this->role = $data['role'];
    }
}