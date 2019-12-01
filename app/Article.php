<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App;

class Article extends Model
{
    use SoftDeletes;

    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function isAutor(User $user){
        if(App\Article::onlyTrashed()->get()->contains($this))
            return null;
        else
            return $this->users()->pluck('user_id')->contains($user);
    }

    protected $dates = ['deleted_at'];
}
