<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;
use Inertia\Response;

class BaseStationController extends Controller
{
    /**
     * BS page
     *
     * @param  int  $id
     * @return Response
     */
    public function show(mixed $id): Response
    {
        return Inertia::render('Base/Info', [
            'baseStation' => $id,
            'nextPage' => URL::route('bs',  ['id' => (int)$id + 1]),
        ]);
    }
}
