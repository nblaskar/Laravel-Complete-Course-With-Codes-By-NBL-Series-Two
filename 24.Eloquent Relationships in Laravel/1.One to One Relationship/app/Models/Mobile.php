<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mobile extends Model
{
    use HasFactory;
      // To set the Inverse One to One Relation From Mobile To Customer Table
      public function customer() //Function name should be targeted model name
      {
          // Inverse Relation From Mobile To Customer Table
          return $this->belongsTo(Customer::class);
      }
}
