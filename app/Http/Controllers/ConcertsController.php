<?php
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Concert;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ConcertsController extends Controller
{
    /**
     * @param $id
     * @return Application|Factory|View
     */
    public function show($id): View|Factory|Application
    {
        $concert = Concert::published()->findOrFail($id);

        return view('concerts.list.show', ['concert' => $concert]);
    }
}
