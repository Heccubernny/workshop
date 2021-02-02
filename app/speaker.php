<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class speaker extends Model
{
    //table name
    protected $table = 'speakers';
    

    //primary key
    public $primaryKey = 'id';
    
}


class program extends Model
{
    //table name
    protected $table = 'programs';

    //primary key
    public $primaryKey = 'id';
    
}

