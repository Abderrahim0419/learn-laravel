<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;
    public function car(){
        return $this->BelongsToMany(Car::class,'cars_drivers','deiver_id','car_id');
    }
}
