@extends('admin.content.master')

@section('content')
<body class="hold-transition skin-blue sidebar-mini">
	<div id="app">
		<div class="wrapper">
<!-- header-->
@include('admin.header')
<!-- Left side column. contains the logo and sidebar -->
@include('admin.sidebar')
<!-- Content--------------------------------------------------------------------------------->
<div class="content-wrapper">
<br><br>
<!--------------->
	<section class="content">
	  <div class="row">
        <div class="col-xs-offset-1 col-xs-1 text-center">
			<img  src="{{asset('images/logopolnes.png')}}">
        </div>
        <div class="col-xs-7 text-center">
			<span id="h1_polnes"><h1>POLITEKNIK NEGERI SAMARINDA</h1></span>
        </div>
		<div class="col-xs-1 text-center">
			<img  src="{{asset('images/logoti2.png')}}">
        </div>
        <!-- /.col -->
      </div>
	  
	  <br><br>
	  
	  
	<div class="box">
            <div class="box-header">
              <div class="row">
				<div class="col-xs-4">
					<button type="button" class="btn btn-green" data-toggle="modal" data-target="#tambah_mahasiwa_modal">
							<a href="#"><i class="fa fa-plus"></i>Tambah Dosen</a>
					</button>
				</div>
			  </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<div class="table-responsive">
				  <table id="example1" class="table table-bordered table-striped">
					<thead>
					<tr>
					  <th nowrap>NO</th>
					  <th nowrap>NIP</th>
					  <th nowrap>NAMA</th>
					  <th nowrap>EMAIL</th>
					  <th nowrap>NO HP</th>
					  <th nowrap>ALAMAT</th>
					  <th nowrap>Action</th>
					</tr>
					</thead>
					<tbody>
					<tr>
					  <td nowrap>1</td>
					  <td nowrap>15615020</td>
					  <td nowrap>Muhammad Nur Alfiansyah</td>
					  <td nowrap>mnuralfiansyah@polnes.ac.id</td>
					  <td nowrap>+62 8123 56789</td>
					  <td nowrap>Kutai Kartanegara</td>
					  <td nowrap>
						 <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit_mahasiwa_modal">
						   <a href="#"><i class="fa  fa-edit"></i>Edit</a>
						 </button> | 
						 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus_mahasiwa_modal">
						   <a href="#"><i class="fa   fa-times"></i>Hapus</a>
						 </button>
					  </td>
					</tr>
					</tbody>
				  </table>
				</div>  
            </div>
            <!-- /.box-body -->
          </div>
		  
	</section>
	
	
<!------MODAL TAMBAH MAHASISWA--------->
		<div class="modal fade" id="tambah_mahasiwa_modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Dosen Jurusan Teknologi Informasi</h4>
              </div>
              <div class="modal-body">
				
				 <form role="form">
				  <div class="box-body">
					<div class="form-group">
					  <label for="nim">NIM</label>
					  <input name="nim" type="text" class="form-control" id="nim" placeholder="Masukkan NIM">
					</div>
					<div class="form-group">
					  <label for="nama">Nama</label>
					  <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukkan Nama">
					</div>
					<div class="form-group">
					  <label for="email">Email</label>
					  <input name="email" type="text" class="form-control" id="email" placeholder="Masukkan Email">
					</div>
					<div class="form-group">
					  <label for="nohp">No HP</label>
					  <input name="nohp" type="text" class="form-control" id="nohp" placeholder="Masukkan No Hp">
					</div><div class="form-group">
					  <label for="alamat">Alamat</label>
					  <input name="alamat" type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat">
					</div>
					<div class="form-group">
					  <label for="kelas">Kelas</label>
					  <select name="kelas" class="form-control" id="kelas">
						<option value="">----KELAS----</option>
						<option value="Reguler">Reguler</option>
						<option value="Non-Reguler">Non-Reguler</option>
					  </select>
					</div>
					<div class="form-group">
					  <label for="prodi">Program Study</label>
					  <select name="prodi" class="form-control" id="prodi">
						<option value="">----Program Study----</option>
					  </select>
					</div>
					<div class="form-group">
					  <label for="nama_ayah">Nama Ayah</label>
					  <input name="nama_ayah" type="text" class="form-control" id="nama_ayah" placeholder="Masukkan Nama Ayah">
					</div>
					<div class="form-group">
					  <label for="nama_ibu">Nama Ibu</label>
					  <input name="nama_ibu" type="text" class="form-control" id="nama_ibu" placeholder="Masukkan Nama Ibu">
					</div>
					<div class="form-group">
					  <label for="alamat_ortu">Alamat Orang Tua</label>
					  <input name="alamat_ortu" type="text" class="form-control" id="alamat_ortu" placeholder="Masukkan Alamat Orang Tua">
					</div>
					<div class="form-group">
					  <label for="nohp_ortu">No HP Orang Tua</label>
					  <input name="nohp_ortu" type="text" class="form-control" id="nohp_ortu" placeholder="Masukkan No HP Orang Tua">
					</div>
					<input type="hidden" name="jurusan" value="Teknologi Informasi">
					{{ csrf_field() }}
					
				  </div>
				  <!-- /.box-body -->
				</form>
				
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Tambah</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
<!----/MODAL TAMBAH MAHASISWA-------------------->
<!----MODAL EDIT MAHASISWA-------------------->
<div class="modal fade" id="edit_mahasiwa_modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">EDIT DATA DOSEN</h4>
              </div>
              <div class="modal-body">
                <form role="form">
				  <div class="box-body">
					<div class="form-group">
					  <label for="nim_edit">NIM</label>
					  <input name="nim" type="text" class="form-control" id="nim_edit" placeholder="Masukkan NIM">
					</div>
					<div class="form-group">
					  <label for="nama_edit">Nama</label>
					  <input name="nama" type="text" class="form-control" id="nama_edit" placeholder="Masukkan Nama">
					</div>
					<div class="form-group">
					  <label for="email_edit">Email</label>
					  <input name="email" type="text" class="form-control" id="email_edit" placeholder="Masukkan Email">
					</div>
					<div class="form-group">
					  <label for="nohp_edit">No HP</label>
					  <input name="nohp" type="text" class="form-control" id="nohp_edit" placeholder="Masukkan No Hp">
					</div><div class="form-group">
					  <label for="alamat_edit">Alamat</label>
					  <input name="alamat" type="text" class="form-control" id="alamat_edit" placeholder="Masukkan Alamat">
					</div>
					<div class="form-group">
					  <label for="kelas_edit">Kelas</label>
					  <select name="kelas" class="form-control" id="kelas_edit">
						<option value="">----KELAS----</option>
						<option value="Reguler">Reguler</option>
						<option value="Non-Reguler">Non-Reguler</option>
					  </select>
					</div>
					<div class="form-group">
					  <label for="prodi_edit">Program Study</label>
					  <select name="prodi" class="form-control" id="prodi_edit">
						<option value="">----Program Study----</option>
					  </select>
					</div>
					<div class="form-group">
					  <label for="nama_ayah_edit">Nama Ayah</label>
					  <input name="nama_ayah" type="text" class="form-control" id="nama_ayah_edit" placeholder="Masukkan Nama Ayah">
					</div>
					<div class="form-group">
					  <label for="nama_ibu_edit">Nama Ibu</label>
					  <input name="nama_ibu" type="text" class="form-control" id="nama_ibu_edit" placeholder="Masukkan Nama Ibu">
					</div>
					<div class="form-group">
					  <label for="alamat_ortu_edit">Alamat Orang Tua</label>
					  <input name="alamat_ortu" type="text" class="form-control" id="alamat_ortu_edit" placeholder="Masukkan Alamat Orang Tua">
					</div>
					<div class="form-group">
					  <label for="nohp_ortu_edit">No HP Orang Tua</label>
					  <input name="nohp_ortu" type="text" class="form-control" id="nohp_ortu_edit" placeholder="Masukkan No HP Orang Tua">
					</div>
					<input type="hidden" name="jurusan" value="Teknologi Informasi">
					{{ csrf_field() }}
					
				  </div>
				  <!-- /.box-body -->
				</form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">BATAL</button>
                <button type="button" class="btn btn-primary">SIMPAN</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
<!----/MODAL EDIT MAHASISWA-------------------->
<!----MODAL HAPUS MAHASISWA-------------------->
		<div class="modal fade" id="hapus_mahasiwa_modal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">HAPUS DATA DOSEN</h4>
              </div>
              <div class="modal-body">
                APAKAH ANDA YAKIN INGIN MENGHAPUS ALFIANSYAH
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">BATAL</button>
                <button type="button" class="btn btn-primary">HAPUS</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
<!----/MODAL HAPUS MAHASISWA-------------------->


  </div>						
<!---END Content----------------------------------------------------------------------------->
<!--Footer-->
@include('admin.footer')
<!-- Control Sidebar -->
@include('admin.controlsidebar')
		</div>
	</div>
<div class="control-sidebar-bg"></div>
<script>
   $(function () {
    //$('#example1').DataTable()
    $('#example1').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
@endsection

		