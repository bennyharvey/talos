<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;
use Inertia\Response;

class BaseStationController extends Controller
{
    /**
     * BS info page
     *
     * @param  int  $id
     * @return Response
     */
    public function show(int $id): Response
    {
        return Inertia::render('Base/Info', [
            'baseStation' => $id,
        ]);
    }

    /**
     * BS list page
     *
     * @return Response
     */
    public function list(): Response
    {
        return Inertia::render('Base/List');
    }
}
