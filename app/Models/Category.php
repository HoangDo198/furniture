<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'parent_id',
        'status',
        'order',
        'created_at',
        'updated_at'
    ];

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getParent() {
        return $this->belongsTo($this, 'parent_id', 'id');
    }
}
