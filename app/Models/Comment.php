<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Guide;

class Comment extends Model
{
    use HasFactory;
    protected $fillable =['guide_id', 'comment_created', 'comment_contents'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function guide(){
        return $this->belongsTo(Guide::class);
    }

}
