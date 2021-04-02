<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;

    protected $table = 'website';

    protected $fillable = [
    	'name',
    	'title',
    	'description',
    	'keywords',
    	'author'
    ];

    public function scopeGetSiteFirst($query)
    {
        return $query->first();
    }

    public function getSite()
    {
        return $this->getSiteFirst();
    }

    public function updateSite($data)
    {
        try {
            $this->update($data);
        }
        catch (\Illuminate\Database\QueryException $ex) {
            dd($ex->getMessage());
        }
    }
}
