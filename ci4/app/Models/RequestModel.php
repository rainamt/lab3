<?php

namespace App\Models;

use CodeIgniter\Model;

class VisitorsModel extends Model
{
    protected $table = 'jbmolina_visitors';
    protected $allowedFields = ['title', 'slug', 'body'];

 public function getVisitors($slug = false)
    {
        if ($slug === false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }
}