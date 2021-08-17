<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VisitorModel extends Model
{
    //
    protected $table = 'visitor';
    protected $guarded = ['id'];
}
