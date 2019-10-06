@extends('layouts.master')

@section('content')
<section class="content-header">
  <h1>
    Edit Data Warga

  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="#">Examples</a></li>
    <li class="active">Blank page</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <div class="col-md-8">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">


          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
            title="Collapse">
            <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
            </div>
          </div>
          <div class="box-body">
           <form action="/data_warga/{{$data_warga->id}}/update" method="POST" >
             @csrf
             <div class="form-group">
              <label for="exampleFormControlInput1">Nama</label>
              <input name="nama" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_warga->nama}}" >
            </div>

            <div class="form-group">
              <label for="exampleFormControlInput1">No.KK</label>
              <input name="no_kk" type="number" class="form-control" id="exampleFormControlInput1"
              value="{{$data_warga->no_kk}}" >
            </div>

            <div class="form-group">
              <label for="exampleFormControlSelect1">Jenis Kelamin</label>
              <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1" 
              >
              <option value="Laki" @if($data_warga->jenis_kelamin == 'Laki') selected @endif>Laki</option>
              <option value="Perempuan" @if($data_warga->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
            </select>
          </div>


          <div class="form-group">
            <label for="exampleFormControlTextarea1">Alamat</label>
            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" >{{$data_warga->alamat}} </textarea>
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Kelahiran</label>
            <input name="tempat_tgl_lahir" type="text" class="form-control" id="exampleFormControlInput1" value="{{$data_warga->tempat_tgl_lahir}}">
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Tanggal</label>
            <input name="tanggal" type="date" class="form-control" id="exampleFormControlInput1" 
            value="{{$data_warga->tanggal}}">
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Status</label>
            <select name="status" class="form-control" id="exampleFormControlSelect1"
            value="{{$data_warga->status}}">
            <option value="Belum Menikah">Belum menikah</option>
            <option value="Menikah">Menikah</option>
            <option value="Janda">Janda</option>
            <option value="Duda">Duda</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Tahun Pendaftaran</label>
          <select name="Tahun" class="form-control" id="exampleFormControlSelect1"
          value="{{$data_warga->Tahun}}">
          <option value="2016">2016</option>
          <option value="2017">2017</option>
          <option value="2018">2018</option>
        </select>
      </div>


      <button type="submit" class="btn btn-warning">Update</button>

    </form>

  </div>
  <!-- /.box-body -->
</div>
</div>
</div>
<!-- /.box -->

</section>
<!-- /.content -->
@stop