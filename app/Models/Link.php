<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Link extends Model
{
    use HasFactory;
    public $table="links";
    public $timestamps=false;

    public function user(){
    	return $this->belongsTo(User::class, 'user_id');
    }
}
