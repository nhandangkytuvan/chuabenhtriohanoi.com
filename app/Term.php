<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    protected $table = 'terms';
    public $fillable = ['id','user_id','term_id','name','avatar','alias','status','description','content','orther'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function child()
    {
        return $this->hasMany('App\Term');
    }
    public function parent()
    {
        return $this->belongsTo('App\Term');
    }
    public function post()
    {
        return $this->hasMany('App\Post');
    }
    public function media()
    {
        return $this->hasMany('App\Media');
    }
}
