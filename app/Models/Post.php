<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content','user_id'];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id' );
    }
   
    public function getUser()
    {
        $user = Auth::user();
        if ($user && $user->role_id == Role::_USER_NORMAL_) {
           return "<td><a class='btn btn-warning' href='".route('posts.edit',$this->id)."' class='text-warning'>edit</a></td>
           <td><a class='btn btn-danger' href='".route('posts.destroy',$this->id)."' class='text-danger'>Delete</a></td>
           ";
           
        }
        else{
            return "";
        }
    }
}
