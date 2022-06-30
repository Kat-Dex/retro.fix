<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Guide extends Model
{
    use HasFactory;
    protected $fillable =['guide_title', 'guide_tags', 'guide_description','guide_image','guide_contents'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function setFilenamesAttribute($value){
        $this->attributes['guide_image']=json_encode($value);
    }
}
