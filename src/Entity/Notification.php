<?php

class Notification{
    private string $message ;
    private bool $is_read ;
    private  $created_at ;

    public function __construct(string $message, bool $is_read){
        $this->message = $message;
        $this->is_read = $is_read;
    }
    public function getmassege(): string{
        return $this->message ;
    }
    public function setmassage($message){
      $this->message = $message;
    }
    public function isRead(): bool{ 
        return $this->is_read;
    }
    public function setRead(bool $is_read){   
      $this->is_read = $is_read;
    }
    public function getCreatedAt(): string{
        return $this->created_at ;
    }
    public function send(){
        
    }
}