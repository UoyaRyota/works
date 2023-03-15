<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinical extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'age','sex', 'tel_num' , 'email', 'postal_num',  'address' , 'parking_lot','needs', 'medical_history_f', 'medical_history_s', 'medical_history_t' , 'rom', 'work' , 'adl_basic' , 'adl_eating','adl_grooming' , 'adl_toilet' , 'adl_clothes' , 'adl_bathing' , 'others', 'user_id'];

    public function kartes()
    {
        return $this->hasMany('App\Models\Karte');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
