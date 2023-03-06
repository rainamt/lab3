<?php

namespace App\Models;

use CodeIgniter\Model;

class RequestModel extends Model 
{
    protected $table = 'rterania_request';

    protected $allowedFields = ['fname', 'email', 'website', 'comment', 'style' ];
    
    public function getRequest() 
    {
        return $this->findAll();
    }