<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSpeedRequest;
use App\Http\Requests\UpdateSpeedRequest;
use App\Http\Resources\Admin\SpeedResource;
use App\Speed;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SpeedsApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('speed_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SpeedResource(Speed::all());
    }

    public function store(StoreSpeedRequest $request)
    {
        $speed = Speed::create($request->all());

        return (new SpeedResource($speed))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Speed $speed)
    {
        abort_if(Gate::denies('speed_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new SpeedResource($speed);
    }

    public function update(UpdateSpeedRequest $request, Speed $speed)
    {
        $speed->update($request->all());

        return (new SpeedResource($speed))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Speed $speed)
    {
        abort_if(Gate::denies('speed_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $speed->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
