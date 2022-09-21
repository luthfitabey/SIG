@php($role = auth()->user()->role)
<aside class="main-sidebar">
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">MENU NAVIGASI</li>
      @if($role == 'Akademik')
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Kelas</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('kelas') }}"><i class="fa fa-circle-o"></i>Data Kelas</a></li>
          <li><a href="{{ url('/kelas/create/') }}"><i class="fa fa-circle-o"></i> Tambah Kelas</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Ruang</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('ruang') }}"><i class="fa fa-circle-o"></i>Data Ruang</a></li>
          <li><a href="{{ url('/ruang/create') }}"><i class="fa fa-circle-o"></i> Tambah Ruang</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Mata Kuliah</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/matkul') }}"><i class="fa fa-circle-o"></i>Data Mata Kuliah</a></li>
          <li><a href="{{ url('/matkul/create') }}"><i class="fa fa-circle-o"></i> Tambah Mata Kuliah</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Mahasiswa</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/mahasiswa') }}"><i class="fa fa-circle-o"></i>Data Mahasiswa</a></li>
          <li><a href="{{ url('/mahasiswa/create') }}"><i class="fa fa-circle-o"></i> Tambah Mahasiswa</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Kelas Mahasiswa</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/mhskelas') }}"><i class="fa fa-circle-o"></i>Data Kelas Mahasiswa</a></li>
          <li><a href="{{ url('/mhskelas/create') }}"><i class="fa fa-circle-o"></i> Tambah Kelas Mahasiswa</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Sks</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('sks') }}"><i class="fa fa-circle-o"></i>Data Sks</a></li>
          <li><a href="{{ url('/sks/create/') }}"><i class="fa fa-circle-o"></i> Tambah Sks</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Gedung</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('gedung') }}"><i class="fa fa-circle-o"></i>Data Gedung</a></li>
          <li><a href="{{ url('/gedung/create/') }}"><i class="fa fa-circle-o"></i> Tambah Gedung</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Tahun Ajaran</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('thn') }}"><i class="fa fa-circle-o"></i>Data Tahun Ajaran</a></li>
          <li><a href="{{ url('/thn/create/') }}"><i class="fa fa-circle-o"></i> Tambah Tahun Ajaran</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Sesi</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('sesi') }}"><i class="fa fa-circle-o"></i>Data Sesi</a></li>
          <li><a href="{{ url('/sesi/create/') }}"><i class="fa fa-circle-o"></i> Tambah Sesi</a></li>
        </ul>
      </li>
      @endif
      @if($role == 'Dosen')
      <li class="activate">
        <a href="{{url('kelas')}}">
          <i class="fa fa-circle-o"></i><span>Kelas</span>
        </a>
      </li>
      <li class="activate">
        <a href="{{url('/ruang')}}">
          <i class="fa fa-circle-o"></i><span>Ruang</span>
        </a>
      </li>
      <li class="activate">
        <a href="{{url('/matkul')}}">
          <i class="fa fa-circle-o"></i><span>Mata Kuliah</span>
        </a>
      </li>
      <li class="activate">
        <a href="{{url('/mahasiswa')}}">
          <i class="fa fa-circle-o"></i><span>Mahasiswa</span>
        </a>
      </li>
      <li class="activate">
        <a href="{{url('/mhskelas')}}">
          <i class="fa fa-circle-o"></i><span>Kelas Mahasiswa</span>
        </a>
      </li>
      <li class="activate">
        <a href="{{url('/sks')}}">
          <i class="fa fa-circle-o"></i><span>Sks</span>
        </a>
      </li>
      <li class="activate">
        <a href="{{url('/gedung')}}">
          <i class="fa fa-circle-o"></i><span>Gedung</span>
        </a>
      </li>
      <li class="activate">
        <a href="{{url('/thn')}}">
          <i class="fa fa-circle-o"></i><span>Tahun Ajaran</span>
        </a>
      </li>
      <li class="activate">
        <a href="{{url('/sesi')}}">
          <i class="fa fa-circle-o"></i><span>Sesi</span>
        </a>
      </li>
      @endif
      @if($role == 'Admin')
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Pegawai</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/pegawai') }}"><i class="fa fa-circle-o"></i>Data Pegawai</a></li>
          <li><a href="{{ url('/pegawai/create') }}"><i class="fa fa-circle-o"></i> Tambah Pegawai</a></li>
        </ul>
      </li>
      @endif
  </section>
  <!-- /.sidebar -->
</aside>
