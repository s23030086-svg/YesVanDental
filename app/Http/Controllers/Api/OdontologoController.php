<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Odontologo;
use App\Http\Resources\OdontologoResource;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\StoreOdontologoRequest;
use App\Http\Requests\UpdateOdontologoRequest;

class OdontologoController extends Controller
{
    public function index()
    {
        return OdontologoResource::collection(Odontologo::all());
    }

    public function show(Odontologo $odontologo)
    {
        return new OdontologoResource($odontologo);
    }

    public function store(StoreOdontologoRequest $request)
    {
        $odontologo = Odontologo::create($request->validated());

        return response()->json(
            new OdontologoResource($odontologo),
            Response::HTTP_CREATED
        );
    }

    public function update(UpdateOdontologoRequest $request, Odontologo $odontologo)
    {
        $odontologo->update($request->validated());

        return response()->json(
            new OdontologoResource($odontologo),
            Response::HTTP_OK
        );
    }

    public function destroy(Odontologo $odontologo)
    {
        $odontologo->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}