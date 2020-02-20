<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Commercial extends Model
{
    public function save(array $options = [])
    {
        // If no nominator has been assigned, assign the current user's id as the nominator
        if (!$this->agent && Auth::user()) {
            $this->agent = Auth::user()->name;
        }

        parent::save();}

public function scopeCurrentUser($query)
{
    return $query->where('author_id', Auth::user()->id);
}

}
