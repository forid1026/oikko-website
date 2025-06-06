<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    public function author(){
       return $this->belongsTo(User::class, 'created_by');
    }
}
