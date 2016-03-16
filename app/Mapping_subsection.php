<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapping_subsection extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function details()
    {
        return $this->hasMany('App\Detail');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mapping_section()
    {
        return $this->belongsTo('App\Mapping_section');
    }
}