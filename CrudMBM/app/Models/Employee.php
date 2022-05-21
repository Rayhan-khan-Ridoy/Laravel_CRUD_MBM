<?php

namespace App\Models;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Employee extends Model
{
  
    use HasFactory;
    public $timestamps = false;
    
    public function company(){
    
        return $this->belongsTo(Company::class,'cname_id');
    }
}
