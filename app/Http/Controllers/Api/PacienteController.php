<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Paciente;
use App\Http\Resources\PacienteResource;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\StorePacienteRequest;
use App\Http\Requests\UpdatePacienteRequest;

class PacienteController extends Controller
{
    public function index()
    {
        return PacienteResource::collection(Paciente::all());
    }

    public function show(Paciente $paciente)
    {
        return new PacienteResource($paciente);
    }

    public function store(StorePacienteRequest $request)
    {
        $paciente = Paciente::create($request->validated());

        return response()->json(
            new PacienteResource($paciente),
            Response::HTTP_CREATED
        );
    }

    public function update(UpdatePacienteRequest $request, Paciente $paciente)
    {
        $paciente->update($request->validated());

        return response()->json(
            new PacienteResource($paciente),
            Response::HTTP_OK
        );
    }

    public function destroy(Paciente $paciente)
    {
        $paciente->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}