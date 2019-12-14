@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.speed.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.speeds.update", [$speed->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="speed">{{ trans('cruds.speed.fields.speed') }}</label>
                <input class="form-control {{ $errors->has('speed') ? 'is-invalid' : '' }}" type="number" name="speed" id="speed" value="{{ old('speed', $speed->speed) }}" step="1" required>
                @if($errors->has('speed'))
                    <div class="invalid-feedback">
                        {{ $errors->first('speed') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.speed.fields.speed_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection