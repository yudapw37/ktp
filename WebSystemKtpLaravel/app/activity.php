<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class activity extends Model
{
    protected $table = "activity";
    protected $primaryKey = "id";
    protected $fillable = [
        'code_user', 'activity'
    ];
}
