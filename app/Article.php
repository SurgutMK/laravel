<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App;

class Article extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function isAuthor(User $user){
        if($this->trashed())
            return null;
        else
            /*
             * чтобы не загружать всех юзеров можно сделать таким образом*/
            return $this->users()->where('user_id', $user->id)->exists();
    }
}
