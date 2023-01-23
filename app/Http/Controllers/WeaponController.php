<?php

namespace App\Http\Controllers;
use Inertia\Inertia;

use App\Models\Weapon;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;

class WeaponController extends VoyagerBaseController
{
    public function get()
    {
        $weapons = Weapon::get();

        return Inertia::render('Weapon', ['weapons' => $weapons]);

    }
}
