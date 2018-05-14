@extends ('home')

@section('content')

<h3>Daftar Mahaiswa Yang Sudah Mendaftar</h3>

<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Daftar
</button>

<table class="table table-responsive"> 
<thead>
  <tr>
    <th>Nim</th>
    <th>Nama</th>
    <th>Jenis Kelamin</th>
    <th>Alamat</th>
    <th>Jurusan</th>
    <th>Foto</th>
    <th>Ubah</th>
  </tr>
</thead>
<tbody>


@foreach($mahasiswas as $mod)
<tr>
  <td>{{$mod->nim}}</td>
  <td>{{$mod->nama}}</td>
  <td>{{$mod->jenis_kelamin}}</td>
  <td>{{$mod->alamat}}</td>	
  <td>{{$mod->jurusan}}</td>
  <td><img src="{{asset('storage/upload/')}}/{{$mod->foto}}" style="width:50px;height: 50px;" ></td>
  
  <td>
    <button class="btn btn-info" data-toggle="modal"  data-mynim="{{$mod->nim}}" data-mynama="{{$mod->nama}}" data-myalamat="{{$mod->alamat}}" data-mykelas="{{$mod->jurusan}}" data-target="#edit"  > Ubah </button>
  

  <button class="btn btn-danger" data-toggle="modal"  data-mynim="{{$mod->nim}}" data-mynama="{{$mod->nama}}" data-myalamat="{{$mod->alamat}}" data-mykelas="{{$mod->jurusan}}" data-target="#delete" >Hapus</button></td>
</tr>
@endforeach

</tbody>
</table>

<!-- Button trigger modal -->

<!-- Tambah -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Daftar</h4>
      </div>
      <form action="{{route('mahasiswa.store')}}" method="post" enctype="multipart/form-data"> 

  {{csrf_field()}} 
       <div class="modal-body">
       
      	<div class="form-group">
          <label for="nim">Nim</label>
          <input type="text" class="form-control" name="nim" id="nim"> </div>
      
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" class="form-control" name="nama" id="nama"> </div>

         <div class="form-group">
          <label for="nama">Jenis Kelamin</label>
          <div class="radio">
            <label>
              <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laku-laki">
              Laki-laki
            </label>
            <label style="padding-left: 50px;">
              <input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Permpuan">
              Permpuan
            </label>
          </div>
          </div>
          
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="text" class="form-control" name="alamat" id="alamat"> </div>
          
        <div class="form-group">
          <label for="kelas">Jurusan</label>
          <input type="text" class="form-control" name="jurusan" id="jurusan"> </div>

        <div class ="form-group">
          <label for="foto">foto</label>
          <input type="file" class="form-control" id="foto" name="foto"> </div>
          <input type="hidden" class="form-control" name="foto_token" id="foto" value="{{csrf_token()}}">
        </div>

      
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
    </div>
  </div>
</div>


@endsection