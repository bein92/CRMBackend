<?php

namespace API;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';
    protected $fillable = ['name', 'color','addres','description', 'district_id', 'holding_id'];
    public function district()
    {
        return $this->belongsTo('\API\Region');
    }
    public function holding()
    {
        return $this->belongsTo('\API\Holding');
    }
    public function emloyees()
    {
        return $this->hasMany('\API\Emploee');
    }
    public function calls()
    {
        return $this->hasMany('\API\Call');
    }
}
