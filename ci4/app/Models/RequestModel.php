<?php

namespace App\Models;

use CodeIgniter\Model;

class RequestModel extends Model 
{
    protected $table = 'rterania_request';

    protected $allowedFields = ['firstname', 'email', 'payment', 'comment', 'style' ];
    
    public function getRequest($slug = false) 
    { 
        if ($slug === false) {
            return $this->findAll();

        }
        return $this->where(['slug' => $slug])->first();
    }

}