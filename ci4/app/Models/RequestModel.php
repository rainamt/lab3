<?php

namespace App\Models;

use CodeIgniter\Model;

class RequestModel extends Model 
{
    protected $table = 'rterania_request';

    protected $allowedFields = ['firstname', 'name', 'email', 'payment', 'comment', 'style'];
    
    public function getRequest() 
    {
        return $this->findAll();
    }
}