<?php namespace API;

use Illuminate\Database\Eloquent\Model;

class District extends Model {

    protected $table = 'districts';

    protected $fillable = ['name', 'region_id'];

    public $timestamps = false;

    public function region()
    {
        return $this->belongsTo('\API\Region');
    }
    public function companies()
    {
        return $this->hasMany('\API\Company');
    }
}
