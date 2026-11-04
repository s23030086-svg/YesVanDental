<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tratamiento;
use App\Http\Resources\TratamientoResource;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\StoreTratamientoRequest;
use App\Http\Requests\UpdateTratamientoRequest;

class TratamientoController extends Controller
{
    public function index()
    {
        return TratamientoResource::collection(Tratamiento::all());
    }

    public function show(Tratamiento $tratamiento)
    {
        return new TratamientoResource($tratamiento);
    }

    public function store(StoreTratamientoRequest $request)
    {
        $tratamiento = Tratamiento::create($request->validated());

        return response()->json(
            new TratamientoResource($tratamiento),
            Response::HTTP_CREATED
        );
    }

    public function update(UpdateTratamientoRequest $request, Tratamiento $tratamiento)
    {
        $tratamiento->update($request->validated());

        return response()->json(
            new TratamientoResource($tratamiento),
            Response::HTTP_OK
        );
    }

    public function destroy(Tratamiento $tratamiento)
    {
        $tratamiento->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}