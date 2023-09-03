@extends('admin.layouts.app')

@section('title', 'Business Packages')

@section('content')
<div class="col-12 col-lg-5">
    <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Create Business Package</h5>
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('admin.business.package.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="business_areas" class="form-label">Business Area</label>
                    <select id="business_areas" class="form-select" name="business_areas">
                        <option value=""> Select Business Area </option>
                        @foreach($business_areas as $business_area)
                        <option value="{{$business_area->id}}" @if (old('business_areas') == $business_area->id) selected @endif> {{$business_area->business_name}} </option>
                        @endforeach
                    </select>
                    @if ($errors->has('business_areas'))
                        <p class="text-danger">{{ $errors->first('business_areas') }}</p>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="packages" class="form-label">Package</label>
                    <select id="packages" class="form-select" name="packages">
                        <option value=""> Select Package </option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Create Connection</button>
            </form>
        </div>
    </div>
</div>
<div class="col-12 col-lg-7">
    <div class="card">
        <h5 class="card-header">Business Package of List</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Business Area</th>
                        <th>Package</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach($business_area_lists as $business_area_list)
                    <tr>
                        <td>{{$business_area_list->getBusinessArea->business_name}}</td>
                        <td>{{$business_area_list->getPackage->package_name}}</td>
                        <td>
                            <a href="{{route('admin.business.package.status', $business_area_list->id)}}" class="btn btn-{{$business_area_list->status == 0 ? 'success' : 'secondary'}}">{{$business_area_list->status == 0 ? 'Activate' : 'Disable'}}</a>  
                        </td>
                        <td>
                            <a href="{{route('admin.business.package.delete', $business_area_list->id)}}" class="btn btn-danger"><i class='bx bxs-trash'></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    $(function(){
        "use strict";
        $('#business_areas').change(function(){
            var id = $(this).val();
            $('#packages').html('');

            $.ajax({
                url:"business-package/change",
                type:'GET',
                dataType:'json',
                data:{businessarea_id:id, _token:'{{csrf_token()}}'},
                success:function(response){
                    //console.log(response[0]['id']);

                    if(response.length > 0) {
                        for (let i = 0; i < response.length; i++) {
                            $("#packages").append('<option value="' + response[i]['id'] + '">' + response[i]['package_name'] + '</option>');
                        }
                    } else {
                        $("#packages").append('<option value="">Package Not Found</option>');
                    }
                }
            });

        });
    })
</script>
@endsection