@extends('template.main')
@section('content')
    <div class="box-header with-border">
      <h3 class="box-title">{{$title}}</h3>
      <br>
    </div>
      @if(session()->has('message'))
        <div class="alert alert-success">
          {{ session()->get('message')}}
        </div>
      @endif
    <div class="exportexcel" style="padding-top: 20px; padding-left: 10px;">
      <a class="btn btn-primary" href="{{ url('pgw_export') }}"><i class="fa fa-file-excel-o"></i> Export to Excel</a>
    </div>
    <div class="box-body" style="padding-top: 30px;">
      <table id="search" class="table table-responsive martop-sm">
            <thead>
                <th>NIP</th>
                <th>Nama</th>
                <th>No Telp</th>
                <th>Role</th>
                <th style="text-align:center;">Action</th>
            </thead>
            <tbody>
                @foreach ($pgw as $p)
                    <tr>
                        <td>{{ $p->nip }}</a></td>
                        <td>{{ $p->nama }}</a></td>
                        <td>{{ $p->no_telp }}</a></td>
                        <td>{{ $p->role }}</a></td>
                        <td style="text-align:center;">
                            <a class="btn btn-success" href="{{action('PegawaiController@edit',$p['id'])}}" button type="submit">Edit </a>
                            <form style="display: inline-block;" action="{{ url('/pegawai',['id' => $p->id])}}" method="post">
                              <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this data?')">Delete</button>
                                {!! method_field('delete') !!}
                                {!! csrf_field() !!}
                            </form>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
      </div>
@endsection
