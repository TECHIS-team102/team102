<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
<<<<<<< HEAD
    use HasFactory;
    
}


=======
    protected $fillable = [
        'name',
        'user_id',
        'status',
        'type',
        'detail'
    ];
}
>>>>>>> ceb82d4084fa0fc602a7b01f78ca18ad198b3742
