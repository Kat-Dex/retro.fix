<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Guide;

class Article extends Model
{
    use HasFactory;
    protected $fillable =['article_title', 'article_tags', 'article_description','article_image','article_contents'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function guide(){
        return $this->belongsTo(Guide::class);
    }
    public function setFilenamesAttribute($value){
        $this->attributes['article_image']=json_encode($value);
    }
}
