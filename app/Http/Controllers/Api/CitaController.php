<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cita;
use App\Http\Resources\CitaResource;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\StoreCitaRequest;
use App\Http\Requests\UpdateCitaRequest;

class CitaController extends Controller
{
    public function index()
    {
        return CitaResource::collection(Cita::all());
    }

    public function show(Cita $cita)
    {
        return new CitaResource($cita);
    }

    public function store(StoreCitaRequest $request)
    {
        $cita = Cita::create($request->validated());

        return response()->json(new CitaResource($cita), Response::HTTP_CREATED);
    }

    public function update(UpdateCitaRequest $request, Cita $cita)
    {
        $cita->update($request->validated());

        return response()->json(new CitaResource($cita), Response::HTTP_OK);
    }

    public function destroy(Cita $cita)
    {
        $cita->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}