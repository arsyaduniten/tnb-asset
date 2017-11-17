<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Grimzy\LaravelMysqlSpatial\Eloquent\SpatialTrait;

class Assets extends Model
{
    //
    use SpatialTrait;

    protected $fillable = [
        'name',
    ];

    protected $spatialFields = [
        'location',
    ];

    public function user()
    {
    	$this->belongsTo('App\User');
    }
}
