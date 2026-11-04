<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pago;
use App\Http\Resources\PagoResource;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\StorePagoRequest;
use App\Http\Requests\UpdatePagoRequest;

class PagoController extends Controller
{
    public function index()
    {
        return PagoResource::collection(Pago::all());
    }

    public function show(Pago $pago)
    {
        return new PagoResource($pago);
    }

    public function store(StorePagoRequest $request)
    {
        $pago = Pago::create($request->validated());

        return response()->json(new PagoResource($pago), Response::HTTP_CREATED);
    }

    public function update(UpdatePagoRequest $request, Pago $pago)
    {
        $pago->update($request->validated());

        return response()->json(new PagoResource($pago), Response::HTTP_OK);
    }

    public function destroy(Pago $pago)
    {
        $pago->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}