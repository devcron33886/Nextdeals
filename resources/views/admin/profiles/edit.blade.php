@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.profile.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.profiles.update", [$profile->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <div class="form-check {{ $errors->has('is_verified') ? 'is-invalid' : '' }}">
                    <input type="hidden" name="is_verified" value="0">
                    <input class="form-check-input" type="checkbox" name="is_verified" id="is_verified" value="1" {{ $profile->is_verified || old('is_verified', 0) === 1 ? 'checked' : '' }}>
                    <label class="form-check-label" for="is_verified">{{ trans('cruds.profile.fields.is_verified') }}</label>
                </div>
                @if($errors->has('is_verified'))
                    <div class="invalid-feedback">
                        {{ $errors->first('is_verified') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.profile.fields.is_verified_helper') }}</span>
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