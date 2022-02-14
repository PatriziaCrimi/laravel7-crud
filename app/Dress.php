<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
  // Questo serve per mappare la tabella giusta
  protected $table = 'dresses';

  protected $fillable = ['name', 'color', 'size', 'description', 'price', 'season'];
}
