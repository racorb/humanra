@extends('portal.layouts.app')

@section('title', 'İnsan Resursları')

@section('content')
<div class="row">
    <div class="col-xl-3 col-lg-6">
        <div class="card l-bg-green">
            <div class="card-statistic-3">
            <div class="card-icon card-icon-large"><i class="fa fa-user"></i></div>
            <div class="card-content">
                <h4 class="card-title">All Users</h4>
                <span>524</span>
                <div class="progress mt-1 mb-1" data-height="8">
                <div class="progress-bar l-bg-purple" role="progressbar" data-width="25%" aria-valuenow="25"
                    aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <p class="mb-0 text-sm">
                <span class="mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
                <span class="text-nowrap">Since last month</span>
                </p>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="row">

</div>
@endsection

@section('js')
<!-- Page Specific JS File -->
<script src="{{asset('/')}}assets/js/page/widget-data.js"></script>
@endsection