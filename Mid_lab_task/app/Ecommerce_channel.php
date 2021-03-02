<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ecommerce_channel extends Model
{
    protected $table = 'ecommerce_channel';
    public $timestamps = false;
    protected $primaryKey = 'product_id';
}
