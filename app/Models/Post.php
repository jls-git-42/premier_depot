<?php

namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Model;

class Post extends Model{

    /**
     * The Post Model is not Timestamp
     *
     * @var boolean
     */
    public $timestamps = false; //ne pas tenir comte des champs par defaut updated_at et created_at dans le modele

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'contenu'
    ];
}