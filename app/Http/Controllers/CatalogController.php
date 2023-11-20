<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatalogController extends Controller
{
    /**
     * Mostrar información de un proyecto.
     * @param  int  $id
     * @return Response
     */

    public function getEdit($id)
    {
        /*if ($id > 0 && $id <= 10) return view('catalog.edit', ['id' => $id]);
        elseif ($id > 10) return view('catalog.edit', ['id' => 10]);*/

        $id = $id > 10 ? 10 : $id;
        return view('catalog.edit', ['id' => $id]);
    }
    public function getShow($id)
    {
        /*if ($id > 0 && $id <= 10) return view('catalog.edit', ['id' => $id]);
        elseif ($id > 10) return view('catalog.edit', ['id' => 10]);*/

        $id = $id > 10 ? 10 : $id;
        return view('catalog.show', ['id' => $id]);
    }
}
