<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Pia extends Model
{
    public function save(array $options = [])
    {
        // If no nominator has been assigned, assign the current user's id as the nominator
        if (!$this->agent && Auth::user()) {
            $this->agent = Auth::user()->name;
        }

        parent::save();
    }
}
