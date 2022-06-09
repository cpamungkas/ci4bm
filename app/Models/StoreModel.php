<?php

namespace App\Models;

use CodeIgniter\Model;

class StoreModel extends Model
{
    protected $table = "tb_store";
    protected $allowedFields = [
        'idStore',
        'StoreName',
        'StoreCode',
        'KWHMeter1',
        'KWHMeter2',
        'idPLN1',
        'idPLN2',
        'date_created',
        'date_updated',
        'status_deleted'
    ];

    public function getLastID()
    {
        return $this->db->table($this->table)->get()->getLastRow()->idStore;
    }
}
