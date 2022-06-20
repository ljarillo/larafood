<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = ['name', 'description'];

    public function search($filter = null)
    {
        $results = $this->where('name', $filter)
            ->orWhere('description', 'LIKE', "%{$filter}%")
            ->paginate();

        return $results;
    }

    /**
     * Get Profiles
     */
    public function profiles()
    {
        return $this->belongsToMany(Profile::class);
    }
}