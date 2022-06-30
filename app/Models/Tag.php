<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Guide;

class Tag extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $fillable =['tag_name'];
    public function guide(){
        return $this->belongsTo(Guide::class);
    }
}
