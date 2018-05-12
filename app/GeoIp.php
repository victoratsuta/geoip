<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GeoIp extends Model
{
    protected $table = 'geoip';

    protected $primaryKey = 'ip';

    const CACHE_LIFETIME = 30;
}
