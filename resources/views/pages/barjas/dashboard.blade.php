@extends('layouts.barjas.master')
@section('title', 'Dashboard')
@section('breadcrumb-title', 'Selamat Datang!')
@section('breadcrumb-page', 'Dashboard')
@section('content')
<div class="row">
    <div class="col-xl-4">
        <div class="card bg-primary">
            <div class="card-body">
                <div class="text-center py-3">
                    <ul class="bg-bubbles ps-0">
                        <li><i class="bx bx-grid-alt font-size-24"></i></li>
                        <li><i class="bx bx-tachometer font-size-24"></i></li>
                        <li><i class="bx bx-store font-size-24"></i></li>
                        <li><i class="bx bx-cube font-size-24"></i></li>
                        <li><i class="bx bx-cylinder font-size-24"></i></li>
                        <li><i class="bx bx-command font-size-24"></i></li>
                        <li><i class="bx bx-hourglass font-size-24"></i></li>
                        <li><i class="bx bx-pie-chart-alt font-size-24"></i></li>
                        <li><i class="bx bx-coffee font-size-24"></i></li>
                        <li><i class="bx bx-polygon font-size-24"></i></li>
                    </ul>
                    <div class="main-wid position-relative">
                        <h3 class="text-white">E-Barjas</h3>
                        <h3 class="text-white mb-1"> Selamat Datang, Farid !</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="avatar">
                            <span class="avatar-title bg-primary-subtle rounded">
                                <i class="bx bx-file text-primary font-size-24"></i>
                            </span>
                        </div>
                        <p class="text-muted mt-2 mb-0">Surat Permintaan</p>
                        <h4 class="mt-0 mb-0">10</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="avatar">
                            <span class="avatar-title bg-primary-subtle rounded">
                                <i class="bx bx-comment text-primary font-size-24"></i>
                            </span>
                        </div>
                        <p class="text-muted mt-2 mb-0">Berita Acara</p>
                        <h4 class="mt-0 mb-0">10</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="avatar">
                            <span class="avatar-title bg-primary-subtle rounded">
                                <i class="bx bx-transfer text-primary font-size-24"></i>
                            </span>
                        </div>
                        <p class="text-muted mt-2 mb-0">Nota Dinas</p>
                        <h4 class="mt-0 mb-0">10</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="avatar">
                            <span class="avatar-title bg-primary-subtle rounded">
                                <i class="bx bx-check-shield text-primary font-size-24"></i>
                            </span>
                        </div>
                        <p class="text-muted mt-2 mb-0">SPJ</p>
                        <h4 class="mt-0 mb-0">10</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <div class="d-flex flex-wrap align-items-center">
                    <h5 class="card-title mb-0">Surat Permintaan</h5>
                    <div class="ms-auto">
                        <div class="dropdown">
                            <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="text-muted font-size-12">Sort By: </span> <span class="fw-medium"> Weekly<i
                                        class="mdi mdi-chevron-down ms-1"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                <a class="dropdown-item" href="#">Monthly</a>
                                <a class="dropdown-item" href="#">Yearly</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body pt-xl-1">
                <div class="table-responsive">
                    <table class="table table-striped table-centered align-middle table-nowrap mb-0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Product's Name</th>
                                <th>Variant</th>
                                <th>Type</th>
                                <th>Stock</th>
                                <th>Price</th>
                                <th>Sales</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td><a href="javascript: void(0);" class="text-body">Tooner Printer HP</a></td>
                                <td><i class="mdi mdi-circle font-size-10 me-1 align-middle text-secondary"></i>Gray</td>
                                <td>Electronic</td>
                                <td>1,564 Items</td>
                                <td>$1200</td>
                                <td>900</td>
                                <td style="width: 130px;">
                                    <div class="progress" style="height: 6px;">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar"
                                            style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection