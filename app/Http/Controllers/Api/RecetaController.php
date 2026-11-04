<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Receta;
use App\Http\Resources\RecetaResource;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\StoreRecetaRequest;
use App\Http\Requests\UpdateRecetaRequest;

class RecetaController extends Controller
{
    public function index()
    {
        return RecetaResource::collection(Receta::all());
    }

    public function show(Receta $receta)
    {
        return new RecetaResource($receta);
    }

    public function store(StoreRecetaRequest $request)
    {
        $receta = Receta::create($request->validated());

        return response()->json(new RecetaResource($receta), Response::HTTP_CREATED);
    }

    public function update(UpdateRecetaRequest $request, Receta $receta)
    {
        $receta->update($request->validated());

        return response()->json(new RecetaResource($receta), Response::HTTP_OK);
    }

    public function destroy(Receta $receta)
    {
        $receta->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}