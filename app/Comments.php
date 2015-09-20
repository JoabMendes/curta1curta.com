<?php namespace App;
 
use Illuminate\Database\Eloquent\Model;
 
class Comments extends Model {
 
  //comments table in database
  protected $guarded = [];
  
  // returns post of any comment
  public function post(){
    return $this->belongsTo('App\Posts','on_post');
  }
 
}