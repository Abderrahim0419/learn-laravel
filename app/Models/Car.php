<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

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
    public function SetNomAttribute($value){
        $this->attributes['nom'] = $value;
        $this->attributes['slug'] = $this->mySlug($value);
    }
    private function mySlug($value = " "){
        $is_exist = true;
        $counter = 0;
        while ($is_exist) {
            
            if($counter == 0){
                $car = Self::where('slug',Str::slug($value))->first();
                if(!$car){
                    $route_new =Str::slug($value);
                    $is_exist =false;
                }
            }
            else{
                $car = Self::where('slug',$value.'-'.$counter)->first();
                if(!$car){
                    $route_new = Str::slug($value).'-'.$counter++;
                    $is_exist =false;
                }
            } 
            $counter++;
        }
        return $route_new;
    }
}
