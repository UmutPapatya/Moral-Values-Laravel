<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topics extends Model
{
    function getCategory(){
        return $this->hasOne('App\Models\Category','category_id','tcategory_id');
    }
}
