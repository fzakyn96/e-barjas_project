@extends('layouts.barjas.master')
@section('title', 'Dashboard')
@section('breadcrumb-title', 'Surat Permintaan!')
@section('breadcrumb-page', 'Surat Permintaan')
@section('css')
<link href="{{ asset('assets/vendor/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet"/>
{{-- <style>
    table.dataTable td {
        font-size: 1em !important;
    }
</style> --}}
@endsection
@section('content')
<div class="row">
    <div class="col-lg-12">
        <button class="btn btn-success mb-2 float-end"><i class="bx bx-plus"></i> Tambah</button>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <table id="table-surat-permintaan" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>No Surat</th>
                            <th>Tangal</th>
                            <th>Vendor</th>
                            <th>Pejabat Pengadaan</th>
                            <th>Penginput</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011-04-25</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011-07-25</td>
                            <td>$170,750</td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>66</td>
                            <td>2009-01-12</td>
                            <td>$86,000</td>
                        </tr>
                        <tr>
                            <td>Cedric Kelly</td>
                            <td>Senior Javascript Developer</td>
                            <td>Edinburgh</td>
                            <td>22</td>
                            <td>2012-03-29</td>
                            <td>$433,060</td>
                        </tr>
                        <tr>
                            <td>Airi Satou</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>33</td>
                            <td>2008-11-28</td>
                            <td>$162,700</td>
                        </tr>
                    </tbody>
                    {{-- <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </tfoot> --}}
                </table>
            </div>
        </div>
    </div>
</div>
@push('script')
<script src="{{ asset('assets/vendor/datatable/js/jquery-3.5.1.js') }}"></script>
<script src="{{ asset('assets/vendor/datatable/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('#table-surat-permintaan').DataTable({
            responsive: true,
            scrollX: true,
            scrollY: true
        });
    });
</script>
@endpush
@endsection