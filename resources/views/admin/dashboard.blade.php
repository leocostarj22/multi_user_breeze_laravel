@extends('layouts.admin')

@section('content')
<h1 class="mt-4">Dashboard</h1>
<ol class="mb-4 breadcrumb">
    <li class="breadcrumb-item active">Dashboard</li>
</ol>
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="mb-4 text-white card bg-primary">
            <div class="card-body">Primary Card</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="text-white small stretched-link" href="#">View Details</a>
                <div class="text-white small"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="mb-4 text-white card bg-warning">
            <div class="card-body">Warning Card</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="text-white small stretched-link" href="#">View Details</a>
                <div class="text-white small"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="mb-4 text-white card bg-success">
            <div class="card-body">Success Card</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="text-white small stretched-link" href="#">View Details</a>
                <div class="text-white small"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="mb-4 text-white card bg-danger">
            <div class="card-body">Danger Card</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="text-white small stretched-link" href="#">View Details</a>
                <div class="text-white small"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
</div>
@endsection

