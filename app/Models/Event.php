<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['organizer_id','title','description','start_date','end_date','required_volunteers'];
    protected $dates= ['start_date','end_date'];
    use HasFactory;

    public function organizer(){
        return $this->belongsTo(User::class);
    }

    public function participants(){
        return $this->belongsToMany(User::class,'event_user','event_id','user_id');
    }
}
