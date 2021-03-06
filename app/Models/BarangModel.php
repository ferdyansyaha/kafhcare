<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    protected $DBGroup              = 'default';
    protected $table                = 'barang';
    protected $primaryKey           = 'barang_id';
    protected $useAutoIncrement     = true;
    protected $insertID             = 0;
    protected $returnType           = 'array';
    protected $useSoftDeletes       = false;
    protected $protectFields        = true;
    protected $allowedFields        = ["barang_title", "barang_description", "barang_harga", "barang_stok", "barang_img"];
}
