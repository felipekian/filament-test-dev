<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'cpf',
        'firstname',
        'lastname',
        'birthday',
        'years_old',
        'user_id',
    ] ;

    public function user(){
        return $this->belongsTo(User::class);
    }
}
