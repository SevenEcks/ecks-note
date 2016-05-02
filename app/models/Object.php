<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Object extends Model {
    protected $fillable = ['name', 'description'];
    
    public function notes() {
        return $this->hasMany('App\Models\Note');
    }
    
    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}