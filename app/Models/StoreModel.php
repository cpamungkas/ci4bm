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

    public function getDataAll()
    {
        $query = "select * from tb_store";
        return $this->db->query($query)->getResultArray();
    }

    public function getDataTableStore()
    {
        $query = "select idStore, StoreName, KWHMeter1, idPLN1, KWHMeter2, idPLN2 from tb_store where status_deleted = 0";
        return $this->db->query($query)->getResultArray();
    }

    public function getKWHMeter1()
    {
        $query = "select idkwhmeter1, kwhmeter1 from tb_kwhmeter1 where status_deleted = 0";
        return $this->db->query($query)->getResultArray();
    }

    public function getKWHMeter2()
    {
        $query = "select idkwhmeter2, kwhmeter2 from tb_kwhmeter2 where status_deleted = 0";
        return $this->db->query($query)->getResultArray();
    }
}
