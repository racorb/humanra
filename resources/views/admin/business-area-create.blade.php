@extends('admin.layouts.app')

@section('title', 'Create Business Area')

@section('breadcrumb')
<a href="{{route('admin.business.area.index')}}"><span class="text-muted fw-light">Business Area /</span></a>
@endsection

@section('content')
<div class="col-12 col-xl-6">
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Create Business Area</h5>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('admin.business.area.store') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="business_name">Name of Business Area</label>
                    <input type="text" class="form-control" id="business_name" name="business_name" value="{{ old('business_name') }}">
                    @if ($errors->has('business_name'))
                        <p class="text-danger">{{ $errors->first('business_name') }}</p>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Create Business Area</button>
            </form>
        </div>
    </div>
</div>
@endsection