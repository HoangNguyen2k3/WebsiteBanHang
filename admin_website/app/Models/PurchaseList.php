<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PurchaseList extends Model
{
    use HasFactory;
    protected $table = 'purchase_lists';
    protected $fillable = [
        'name', // Thêm các thuộc tính cần fillable vào đây
        'price',
        'quantity',
        'image',
        'SDT',
        'Address',
        'id_user',
        'Status'
    ];
}
