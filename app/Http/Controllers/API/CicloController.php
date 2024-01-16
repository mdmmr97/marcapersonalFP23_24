<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\CicloResource;
use App\Models\Ciclo;
use Illuminate\Http\Request;

class CicloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CicloResource::collection(Ciclo::paginate());

        /*Solucion 1
        $response = CicloResource::collection(Ciclo::paginate())->response();
        $content = json_decode($response->content(), true);
        $response->setContent(json_encode($content['data']));
        $response->header('X-Total-Count', Ciclo::count());
        return $response;

        Solucion 2
        Crear Middleware -> Mejor solucion
        */
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ciclo = json_decode($request->getContent(), true);

        $ciclo = Ciclo::create($ciclo['data']['attributes']);

        return new CicloResource($ciclo);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ciclo $ciclo)
    {
        return new CicloResource($ciclo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ciclo $ciclo)
    {
        $cicloData = json_decode($request->getContent(), true);
        $ciclo->update($cicloData['data']['attributes']);

        return new CicloResource($ciclo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ciclo $ciclo)
    {
        $ciclo->delete();
    }
}
