@extends('admin.layouts.app')

@section('title', 'Package')

@section('content')
<div class="col-12">
    <a href="{{route('admin.package.create')}}" class="btn btn-success text-capitalize mb-4"><span class="tf-icons bx bx-plus-circle"></span>&nbsp; Create Package</a>

    @if($packages->count() > 0)
    <div class="card">
        <h5 class="card-header">General list of all packages</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th>Name of package</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">                    
                        @foreach($packages as $package)
                        <tr>
                            <td><strong>{{$package->package_name}}</strong></td>
                            <td>
                                <a href="{{route('admin.package.status', $package->id)}}" class="btn btn-{{$package->status == 1 ? 'success' : 'secondary'}}">{{$package->status == 1 ? 'Activate' : 'Disable'}}</a>                    
                            </td>
                            <td>
                                <a href="{{route('admin.package.edit', $package->id)}}" class="btn btn-primary"><i class='bx bx-edit'></i></a>
                                <a href="{{route('admin.package.delete', $package->id)}}" class="btn btn-danger"><i class='bx bxs-trash'></i></a>
                            </td>
                        </tr>  
                        @endforeach                        
                </tbody>
            </table>
        </div>
    </div>   
    @else 
        <div class="alert alert-info" role="alert">Package not found</div>
    @endif
</div>

<!-- Modal 1-->
<div class="modal fade" id="modalDetail" aria-labelledby="modalToggleLabel" tabindex="-1" style="display: none" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalToggleLabel">Kapital Bank</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" ></button>
        </div>
        <div class="modal-body">
            <table class="table">
            <tbody class="table-border-bottom-0">
                <tr>
                    <th>Bank of Name</th>
                    <td class="text-uppercase" id="bank-name"></td>
                </tr>
                <tr>
                    <th>IBAN</th>
                    <td id="bank-iban"></td>
                </tr>
                <tr>
                    <th>SWIFT</th>
                    <td id="bank-swift"></td>
                </tr>
            </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script type="text/javascript">
      
    $(document).ready(function () {
       
       /* When click show user */
        $('#showData').click(function () {
          var userURL = $(this).data('url');
          $.get(userURL, function (data) {
              $('#modalDetail').modal('show');
              $('#bank-name').text(data.name);
              $('#bank-iban').text(data.iban);
              $('#bank-swift').text(data.swift);
          })
       });
       
    });
  
</script>
@endsection