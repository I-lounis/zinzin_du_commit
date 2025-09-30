<?php

namespace App\Models;

class User 
{
    private int $id_user;
    private string $pseudo;
    private string $password;
    private string $email;
    private string $picture;
    private string $description;
    private string $creation_date;

    public function __construct(int $id_user, string $pseudo, string $password, string $email, string $picture, string $description, $creation_date)
    {
        $this->id_user = $id_user;
        $this->pseudo = $pseudo; 
        $this->password = $password;
        $this->email = $email;
        $this->picture = $picture;
        $this->description = $description;
        $this->creation_date = $creation_date;
    
    }

}