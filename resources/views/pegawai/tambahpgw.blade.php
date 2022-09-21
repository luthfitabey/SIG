@extends('template.main')
@section('content')
    <div class="box-header with-border">
      <h3 class="box-title">{{$title}}</h3>
      <br>
    </div>
    @if(session()->has('message'))
      <div class="alert alert-danger">
        {{ session()->get('message')}}
      </div>
    @endif
    <div class="col-md-6">
    <form class="form-horizontal" action="{{ route('pgw.new') }}" method="POST" enctype="multipart/form-data">
      <div class="box-body">
      {{ csrf_field() }}
      <div class="form-group" style="padding-bottom: 10px;">
        <label class="col-sm-2 control-label">NIP</label>
          <div class="col-sm-10">
            <input type="text" class="form-control{{ $errors->has('nip') ? ' is-invalid' : '' }}" name="nip" value="{{ old('nip') }}" placeholder="NIP" style="width: 150px;" min="0">
            @if ($errors->has('nip'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('nip') }}</strong>
                </span>
            @endif
          </div>
      </div>
        <div class="form-group" style="padding-bottom: 10px;">
          <label class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-10">
              <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Nama" style="width: 250px;">
              @if ($errors->has('name'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('name') }}</strong>
                  </span>
              @endif
            </div>
        </div>
        <div class="form-group" style="padding-bottom: 10px;">
          <label class="col-sm-2 control-label">Username</label>
            <div class="col-sm-10">
              <input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('ruang') }}" placeholder="Email" style="width: 250px;">
              @if ($errors->has('username'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('username') }}</strong>
                  </span>
              @endif
            </div>
        </div>
        <div class="form-group" style="padding-bottom: 10px;">
          <label class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
              <input type="text" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" value="{{ old('ruang') }}" placeholder="Password" style="width: 250px;">
              @if ($errors->has('password'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                  </span>
              @endif
            </div>
        </div>
        <div class="form-group" style="padding-bottom: 10px;">
          <label class="col-sm-2 control-label">No Telepon</label>
            <div class="col-sm-10">
              <input type="number" class="form-control{{ $errors->has('no_telp') ? ' is-invalid' : '' }}" name="no_telp" value="{{ old('ruang') }}" placeholder="No Telepon" style="width: 150px;" min="0">
              @if ($errors->has('no_telp'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('no_telp') }}</strong>
                  </span>
              @endif
            </div>
        </div>
        <div class="form-group" style="padding-bottom: 10px;">
          <label class="col-sm-2 control-label">Role</label>
            <div class="col-sm-10">
              <select name="role" class="form-control" style="width: 175px;">
                <option value="" disabled selected>- - - - Pilih Role - - - -</option>
                <option>Dosen</option>
                <option>Akademik</option>
                <option>Admin</option>
              </select>
              @if ($errors->has('role'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('role') }}</strong>
                  </span>
              @endif
            </div>
        </div>
      </div>
      <div  class="form-group" style="padding-left: 10px;">
        <button type="reset" class="btn btn-danger">Reset</button>
        <span></span>
        <input class="btn btn-primary" type="submit" name="aksi" value="Tambah">
      </div>
      </form>
    </div>

  </br>
    @if ($errors->has('import'))
        <span class="invalid-feedback" role="alert" style="color: red">
            <strong>{{ $errors->first('import') }}</strong>
        </span>
    @endif
    <div class="exportexcel">
      <form  action="{{ url('import_pgw') }}" class="form-horizontal pull-left" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}

      <input type="file"  name="import" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"/>

      </br><button class="btn btn-primary pull-left">Import File</button>
    </br></br>
    <a href="{{ asset('download/FormatDataPgw1.xlsx')}}" class="btn btn-success"><i class="fa fa-fw fa-download" style="width: 250px;"> Download Format Data Pegawai</i></a>
    </br><span style="font-weight: bold;">*Role harus diawali dengan huruf kapital</span>
      </form>
    </div>
@endsection
