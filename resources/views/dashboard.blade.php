@extends('master')

@section('content')
<div class="row">
    <!-- Customer  -->
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                    <h5 class="text-muted">Total Konsumen</h5>
                    <h2 class="mb-1">{{ $count_customer }}</h2>
                </div>
                <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                    <i class="fas fa-users fa-fw fa-sm text-dark"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- end customer  -->
    <!-- Room  -->
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                    <h5 class="text-muted">Total Kamar</h5>
                    <h2 class="mb-1">{{ $count_room }}</h2>
                </div>
                <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                    <i class="fas fa-fw fa-bed fa-fw fa-sm text-primary"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- end room  -->
    <!-- service  -->
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                    <h5 class="text-muted">Total Layanan</h5>
                    <h2 class="mb-1">{{ $count_service }}</h2>
                </div>
                <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                    <i class="fas fa-hand-holding fa-fw fa-sm text-secondary"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- end service  -->
    <!-- transaction  -->
    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                    <h5 class="text-muted">Total Transaksi</h5>
                    <h2 class="mb-1">{{ $count_transaction }}</h2>
                </div>
                <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                    <i class="fas fa-dollar-sign fa-fw fa-sm text-warning"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- end transaction  -->

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="section-block" id="masonary">
            <h2 class="section-title" style="text-align: center">Fasilitas Hotel Al-Hasan</h2>
        </div>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card-columns">
            <div class="card">
                <img class="card-img-top rounded" src="../assets/images/Kamar.png" alt="Card image cap">
            </div>
            <div class="card">
                <img class="card-img-top rounded" src="../assets/images/SPA.png" alt="Card image cap">
            </div>
            <div class="card">
                <img class="card-img-top rounded" src="../assets/images/SwimingPool.png" alt="Card image cap">
            </div>
        </div>
    </div>
</div>
@endsection()