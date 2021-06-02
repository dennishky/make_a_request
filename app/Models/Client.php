<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function clientmodels(){
        //..uma instância de Course possui muitas Class (turmas)
        return $this->hasMany(Request::class);
        }
}
