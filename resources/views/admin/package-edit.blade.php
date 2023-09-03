@extends('admin.layouts.app')

@section('title', 'Edit Package')

@section('breadcrumb')
<a href="{{route('admin.package.index')}}"><span class="text-muted fw-light">Package /</span></a>
@endsection

@section('content')
<div class="col-12 col-xl-6">
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Edit Package</h5>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('admin.package.update', $package->id) }}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label" for="package_name">Name of Package</label>
                    <input type="text" class="form-control" id="package_name" name="package_name" value="{{ $package->package_name }}">
                    @if ($errors->has('package_name'))
                        <p class="text-danger">{{ $errors->first('package_name') }}</p>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Update Package</button>
            </form>
        </div>
    </div>
</div>
@endsection