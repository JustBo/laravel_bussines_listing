<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
  protected $fillable = [
    'user_id',
    'name',
    'website',
    'address',
    'email',
    'phone',
    'bio'
  ];

  public function user(){
    return $this->belongsTo('App\User');
  }
}
