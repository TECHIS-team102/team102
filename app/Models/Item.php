<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    



    protected $fillable = [
        'name',
        'user_id',
        'status',
        'type',
        'detail'
    ];

    const TYPE_NAME = [
        '1' => '清掃用具',
        '2' => '衛生用品',
        '3' => '文房具',
        '4' => '寝具類',
        '5' => '料理器具',
    ];
}
