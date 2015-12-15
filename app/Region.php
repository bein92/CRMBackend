<?php namespace API;

use Illuminate\Database\Eloquent\Model;

class Region extends Model {

	protected $table = 'regions';
	protected $fillable = ['name'];
    public $timestamps = false;
  public function districts()
    {
        return $this->hasMany('\API\District');
    }
    public function holdings()
    {
        return $this->hasMany('\API\Holding');
    }

}
