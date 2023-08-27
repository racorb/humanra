@extends('admin.layouts.app')

@section('title', 'Banks')

@section('content')
<div class="col-12 col-md-8 col-lg-4 mb-4">
    <div class="card">
        <div class="card-body">
            <div class="card-title d-flex align-items-start justify-content-between">
                <h4 class="mb-0">Kapital Bank</h4>
            </div>
            <span class="fw-semibold d-block mb-1">Cari hesab</span>
            <h3 class="card-title mb-2">$14,857</h3>
            <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.14%</small>
        </div>
    </div>
</div>

<div class="col-12">
    <a href="{{route('admin.bank.create')}}" class="btn btn-success text-capitalize mb-4"><span class="tf-icons bx bx-plus-circle"></span>&nbsp; Create Bank</a>

    @if($banks->count() > 0)
    <div class="card">
        <h5 class="card-header">General list of banks</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th>Bank of name</th>
                    <th>Information</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">                    
                        @foreach($banks as $bank)
                        <tr>
                            <td><strong>{{$bank->name}}</strong></td>
                            <td>
                                <a href="javascript:void(0);" class="btn btn-info" id="showData" data-url="{{route('admin.bank.detail', $bank->id)}}">
                                    More Details
                                </a>
                            </td>
                            <td>
                                <a href="{{route('admin.bank.status', $bank->id)}}" class="btn btn-{{$bank->status == 0 ? 'success' : 'secondary'}}">{{$bank->status == '0' ? 'Activate' : 'Disable'}}</a>                    
                            </td>
                            <td>
                                <a href="{{route('admin.bank.edit', $bank->id)}}" class="btn btn-primary"><i class='bx bx-edit'></i></a>
                                <a href="{{route('admin.bank.delete', $bank->id)}}" class="btn btn-danger"><i class='bx bxs-trash'></i></a>
                            </td>
                        </tr>  
                        @endforeach                        
                </tbody>
            </table>
        </div>
    </div>   
    @else 
        <div class="alert alert-info" role="alert">Bank not found</div>
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