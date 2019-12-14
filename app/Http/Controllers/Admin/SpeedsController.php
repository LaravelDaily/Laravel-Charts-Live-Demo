<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySpeedRequest;
use App\Http\Requests\StoreSpeedRequest;
use App\Http\Requests\UpdateSpeedRequest;
use App\Speed;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SpeedsController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('speed_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $speeds = Speed::all();

        return view('admin.speeds.index', compact('speeds'));
    }

    public function create()
    {
        abort_if(Gate::denies('speed_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.speeds.create');
    }

    public function store(StoreSpeedRequest $request)
    {
        $speed = Speed::create($request->all());

        return redirect()->route('admin.speeds.index');
    }

    public function edit(Speed $speed)
    {
        abort_if(Gate::denies('speed_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.speeds.edit', compact('speed'));
    }

    public function update(UpdateSpeedRequest $request, Speed $speed)
    {
        $speed->update($request->all());

        return redirect()->route('admin.speeds.index');
    }

    public function show(Speed $speed)
    {
        abort_if(Gate::denies('speed_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.speeds.show', compact('speed'));
    }

    public function destroy(Speed $speed)
    {
        abort_if(Gate::denies('speed_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $speed->delete();

        return back();
    }

    public function massDestroy(MassDestroySpeedRequest $request)
    {
        Speed::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
