<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model 
{
    protected $table = 'rterania_request';

    protected $allowedFields = ['firstname', 'email', 'payment', 'comment', 'style'];
    
    public function getGuest($slug = false) 
    {

        if ($slug === false) {
            return $this->findAll();
        }
        return $this->findAll(['slug' => $slug])->first();
    }
}