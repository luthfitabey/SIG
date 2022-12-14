@extends('adminlte::page')

@section('title', 'Spaces')

@section('content_header')
    <h1 class="m-0 text-dark">Kawasan Tata Ruang</h1>
@stop

@section('style-css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

<!-- {{-- Untuk view index space  ini hampir sama dengan view index centrepoint dimana kita memuat cdn datatable
css dan js yang membedakannya ada pada ajax server side di bagian push('javascript') yaitu pada route 
--}} -->
@section('content')
    <!-- <div class="container"> -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">{{ __('List Kawasan Kota Mojokerto') }}</div>
                    <div class="card-body">
                        <a href="{{ route('space.create') }}" class="btn btn-info btn-sm float-end mb-2">Tambah Data</a>
                        
                        @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <table class="table" id="dataSpaces">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Kawasan</th>
                                    <th>Alamat</th>
                                    <th>Opsi</th>
                                </tr>
                            <tbody></tbody>
                            </thead>
                        </table>
                        <form action="" method="POST" id="deleteForm">
                            @csrf
                            @method("DELETE")
                            <input type="submit" value="Hapus" style="display: none">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- </div> -->
@endsection

@push('js')
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script>
        $(function() {
            $('#dataSpaces').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                lengthChange: false,
                autoWidth: false,
                
                // Route untuk menampilkan data space
                ajax: '{{ route('data-space') }}',
                columns: [{
                        data: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'name'
                    },
                    {
                        data: 'address'
                    },
                    {
                        data: 'action'
                    }
                ]
            })
        })
    </script>
@endpush