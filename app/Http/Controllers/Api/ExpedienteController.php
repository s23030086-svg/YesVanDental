<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expediente;
use App\Http\Resources\ExpedienteResource;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\StoreExpedienteRequest;
use App\Http\Requests\UpdateExpedienteRequest;

class ExpedienteController extends Controller
{
    public function index()
    {
        return ExpedienteResource::collection(Expediente::all());
    }

    public function show(Expediente $expediente)
    {
        return new ExpedienteResource($expediente);
    }

    public function store(StoreExpedienteRequest $request)
    {
        $expediente = Expediente::create($request->validated());

        return response()->json(new ExpedienteResource($expediente), Response::HTTP_CREATED);
    }

    public function update(UpdateExpedienteRequest $request, Expediente $expediente)
    {
        $expediente->update($request->validated());

        return response()->json(new ExpedienteResource($expediente), Response::HTTP_OK);
    }

    public function destroy(Expediente $expediente)
    {
        $expediente->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}