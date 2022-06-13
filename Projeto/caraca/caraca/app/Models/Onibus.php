<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class onibus extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = "onibus";
    protected $guarded = ['id'];

    public function assentos(){
        return $this->hasMany(Assento::class,'id_onibus','id_viagem','num_assento');
    }
    public function viagens(){
        return $this->hasmany(Viagem::class);
    }
}
