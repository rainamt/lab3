<?php

namespace App\Models;

use CodeIgniter\Model;

class GuestModel extends Model
{
    protected $table = 'rterania_request';

    protected $allowedFields = ['firstname', 'email', 'payment', 'comment', 'style'];

	
	 public function getGuest()
    {     
        return $this->findAll();
    }
}