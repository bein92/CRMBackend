<?php namespace API;

use Illuminate\Database\Eloquent\Model;

class Hodling extends Model {

    protected $table = 'holdings';

    protected $fillable = ['name', 'region_id'];

    public function region()
    {
        return $this->belongsTo('\API\Region');
    }
    public function companies()
    {
        return $this->hasMany('\API\Company');
    }

}
