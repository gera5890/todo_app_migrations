<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Steps extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'status'
    ];

    //Relacion inversa con task
    public function task(){
        return $this->belongsTo(Task::class);
    }
}
