<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class Car extends Model
{
    use HasFactory,Notifiable;
    public function driver(){
        return $this->BelongsToMany(Driver::class,'cars_drivers','car_id','deiver_id');
    }
    
    // public function setImageAttribute($image){
    //     $pictures = str_replace('public/','',$image);
    //     $this->attributes['image'] = $pictures;
    //     // $this->attributes['images'] = json_encode($pictures);
    // }
    // public function getImageAttribute($image){
    //     $pictures = asset('storage').'/'.$image;
    //     return $pictures;
    // }
    public function getImage()
    {
        return asset('storage/carimg/'.$this->image);
    }
    public function getUser()
    {
        $user = Auth::user();
        if ($user && $user->role_id == Role::_ADMIN_) {
            return "<td><a class='btn btn-warning' href='".route('car.edit',$this->id)."' class='text-warning'>edit</a></td>
            <td><a class='btn btn-danger' href='".route('car.destroy',$this->id)."' class='text-danger'>Delete</a></td>
            ";
        }
        else{
            return "";
        }
    }
}
