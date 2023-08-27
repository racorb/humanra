@extends('admin.layouts.app')

@section('title', 'Create Bank')

@section('breadcrumb')
<a href="{{route('admin.bank.index')}}"><span class="text-muted fw-light">Banks /</span></a>
@endsection

@section('content')
<div class="col-12 col-xl-6">
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Create Bank</h5>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('admin.bank.store') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="companyname">Name of Bank</label>
                    <input type="text" class="form-control" id="companyname" name="companyname" value="{{ old('companyname') }}">
                    @if ($errors->has('companyname'))
                        <p class="text-danger">{{ $errors->first('companyname') }}</p>
                    @endif
                </div>
                <div class="mb-3">
                    <label class="form-label" for="companyiban">IBAN</label>
                    <input type="text" class="form-control" id="companyiban"  name="companyiban" value="{{ old('companyiban') }}">
                    @if ($errors->has('companyiban'))
                        <p class="text-danger">{{ $errors->first('companyiban') }}</p>
                    @endif
                </div>
                <div class="mb-3">
                    <label class="form-label" for="companyswift">Swift</label>
                    <input type="text" class="form-control" id="companyswift"  name="companyswift" value="{{ old('companyswift') }}">
                    @if ($errors->has('companyswift'))
                        <p class="text-danger">{{ $errors->first('companyswift') }}</p>
                    @endif
                </div>
                <div class="mb-3">
                    <label class="form-label" for="companyaccount">Account</label>
                    <input type="text" class="form-control" id="companyaccount"  name="companyaccount" value="{{ old('companyaccount') }}">
                    @if ($errors->has('companyaccount'))
                        <p class="text-danger">{{ $errors->first('companyaccount') }}</p>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Create bank</button>
            </form>
        </div>
    </div>
</div>
@endsection