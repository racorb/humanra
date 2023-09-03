@extends('admin.layouts.app')

@section('title', 'Business Area')

@section('content')
<div class="col-12">
    <a href="{{route('admin.business.area.create')}}" class="btn btn-success text-capitalize mb-4"><span class="tf-icons bx bx-plus-circle"></span>&nbsp; Create Business Area</a>

    @if($business->count() > 0)
    <div class="card">
        <h5 class="card-header">General list of Business Areas</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                <tr>
                    <th>Name of Business</th>
                    <th>Packages</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="table-border-bottom-0">                    
                        @foreach($business as $businessItem)
                        @php $item = DB::table('business_packages')->where('business_id', $businessItem->id)->where('status', 0)->get() @endphp
                        <tr>
                            <td><strong>{{$businessItem->business_name}}</strong></td>
                            <td>
                                <div style="flex-wrap:wrap; display:flex">
                                @if($item->count() > 0)
                                    @for($i=0; $i < $item->count(); $i++)
                                    @php $package = DB::table('packages')->where('id', $item[$i]->package_id)->first() @endphp
                                        <span class="badge bg-primary mb-1 me-1">{{$package->package_name}}</span>
                                    @endfor 
                                @else
                                    <span class="badge bg-info mb-1">Connection Not Found</span>
                                @endif
                                </div>
                            </td>
                            <td>
                                <a href="{{route('admin.business.area.status', $businessItem->id)}}" class="btn btn-{{$businessItem->status == 1 ? 'success' : 'secondary'}}">{{$businessItem->status == 1 ? 'Activate' : 'Disable'}}</a>                    
                            </td>
                            <td>
                                <a href="{{route('admin.business.area.edit', $businessItem->id)}}" class="btn btn-primary"><i class='bx bx-edit'></i></a>
                                <a href="{{route('admin.business.area.delete', $businessItem->id)}}" class="btn btn-danger"><i class='bx bxs-trash'></i></a>
                            </td>
                        </tr>  
                        @endforeach                        
                </tbody>
            </table>
        </div>
    </div>   
    @else 
        <div class="alert alert-info" role="alert">Business area not found</div>
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