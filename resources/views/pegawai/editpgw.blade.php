@extends('template.main')
@section('content')
    <div class="box-header with-border">
      <h3 class="box-title">{{$title}}</h3>
      <br>
    </div>
    <div class="col-md-6">
      <form class="form-horizontal" action="{{ route('pegawai.update', $id) }}" method="post" enctype="multipart/form-data">
          <input type="hidden" name="_method" value="put">
          <div class="box-body">
          {{ csrf_field() }}
          <div class="form-group" style="padding-bottom: 10px;">
            <label class="col-sm-2 control-label">NIP</label>
              <div class="col-sm-10">
                <input type="number" class="form-control{{ $errors->has('nip') ? ' is-invalid' : '' }}" name="nip" style="width: 150px;" min="0" value="{{$pgw->nip}}">
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
                  <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" placeholder="Nama" style="width: 250px;" value="{{$pgw->nama}}">
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
                  <input type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" placeholder="NIU / Email" style="width: 250px;" value="{{$pegawai->first()->username}}" >
                  @if ($errors->has('username'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('username') }}</strong>
                      </span>
                  @endif
                </div>
            </div>
            <div class="form-group" style="padding-bottom: 10px;">
              <label class="col-sm-2 control-label">No Telepon</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control{{ $errors->has('no_telp') ? ' is-invalid' : '' }}" name="no_telp" placeholder="No Telepon" style="width: 150px;" min="0" value="{{$pgw->no_telp}}">
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
                    <option>{{ $pgw->role }}</option>
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
            <div class="form-group" style="padding-bottom: 10px;">
              <label class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="password" placeholder="Password" style="width: 250px;">
                </div>
            </div>
          </div>
          <div  class="form-group" style="padding-left: 10px;">
            <button type="reset" class="btn btn-danger">Reset</button>
            <span></span>
            <input class="btn btn-primary" type="submit" name="aksi" value="Save Change">
          </div>
      </form>
      <a href="{{ url('/pegawai') }}"><i class="fa fa-fw fa-arrow-circle-left"></i> Back</a>
    </div>
@endsection
