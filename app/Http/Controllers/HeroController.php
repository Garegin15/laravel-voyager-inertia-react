<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Hero;
use Illuminate\Http\Request;
use TCG\Voyager\Http\Controllers\VoyagerBaseController;
use TCG\Voyager\Http\Controllers\VoyagerBreadController;

class HeroController extends VoyagerBaseController
{

    public function get()
    {
        $heroes = Hero::with('weapons')->get();

        return Inertia::render('Hero', ['heroes' => $heroes]);

    }
}
