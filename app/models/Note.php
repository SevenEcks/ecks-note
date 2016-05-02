<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Note extends Model {
    protected $fillable = ['subject', 'body'];
    
    public function object() {
        return $this->belongsTo('App\Models\Object');
    }
}