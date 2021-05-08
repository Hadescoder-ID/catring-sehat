<?php

namespace App\Models;

use CodeIgniter\Model;

class pelangganModel extends Model
{
    protected $table      = 'tbl_pelanggan';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['nama_lengkap', 'email', 'password', 'alamat', 'nomor_telephone'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    // //protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;
}
