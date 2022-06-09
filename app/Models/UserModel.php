<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = "tb_user";
    protected $allowedFields = [
        'id',
        'username',
        'password',
        'name',
        'email',
        'image',
        'is_active',
        'role_id',
        'date_created',
        'date_updated',
        'date_deleted',
        'status_deleted'
    ];

    public function getLastID()
    {
        return $this->db->table($this->table)->get()->getLastRow()->id;
    }
}
