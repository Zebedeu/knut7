<?php

namespace App\Models;

use Ballybran\Database\Model;

class TesteModel extends Model 
    {
        protected $table = 'book';
    
        public $timestamps = true;
    
        /**
         * The attributes that are mass assignable.
         *
         * @var array
         */
        protected $fillable = [
            'author', 'title',
        ];
    
     
    }
    