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
								<a href="#"><i class="fa fa-plus"></i>Tambah Mahasiswa</a>
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
					  <th nowrap>NIM</th>
					  <th nowrap>NAMA</th>
					  <th nowrap>EMAIL</th>
					  <th nowrap>NO HP</th>
					  <th nowrap>ALAMAT</th>
					  <th nowrap>KELAS</th>
					  <th nowrap>PRODI</th>
					  <th nowrap>JURUSAN</th>
					  <th nowrap>NAMA AYAH</th>
					  <th nowrap>NAMA IBU</th>
					  <th nowrap>NO HP ORANG TUA</th>
					  <th nowrap>ALAMAT ORANG TUA</th>
					  <th nowrap>Action</th>
					</tr>
					</thead>
					<tbody>
					@php $a=0; @endphp
					@foreach($mahasiswa as $mahasiswas =>$hasil)
					@php $a++; @endphp
						<tr>
						  <td nowrap>{{$a}}</td>
						  <td nowrap>{{$hasil->nim}}</td>
						  <td nowrap>{{$hasil->nama}}</td>
						  <td nowrap>{{$hasil->email}}</td>
						  <td nowrap>{{$hasil->nohp}}</td>
						  <td nowrap>{{$hasil->alamat}}</td>
						  <td nowrap>{{$hasil->kelas}}</td>
						  <td nowrap>{{$hasil->prodi_id}}</td>
						  <td nowrap>{{$hasil->jurusan}}</td>
						  <td nowrap>{{$hasil->nama_ayah}}</td>
						  <td nowrap>{{$hasil->nama_ibu}}</td>
						  <td nowrap>{{$hasil->nohp_ortu}}</td>
						  <td nowrap>{{$hasil->alamat_ortu}}</td>
						  <td nowrap>
							 <button type="button" class="btn btn-info edit_mahasiwa_modal" data-toggle="modal" data-lengkap="{{$hasil->nim}} ;{{$hasil->nama}} ;{{$hasil->email}} ;{{$hasil->nohp}} ;{{$hasil->alamat}} ;{{$hasil->kelas}} ;{{$hasil->prodi_id}} ;{{$hasil->jurusan}} ;{{$hasil->nama_ayah}} ;{{$hasil->nama_ibu}} ;{{$hasil->nohp_ortu}} ;{{$hasil->alamat_ortu}} ;" data-target="#edit_mahasiwa_modal">
							   <a href="#"><i class="fa  fa-edit"></i>Edit</a>
							 </button> |
							 <button type="button" class="btn btn-danger hapus_mahasiwa_modal" data-toggle="modal" data-target="#hapus_mahasiwa_modal" data-lengkap="{{$hasil->nim}} ;{{$hasil->nama}} ;">
							   <a href="#"><i class="fa   fa-times"></i>Hapus</a>
							 </button>
						  </td>
						</tr>
					@endforeach
				</tbody> ;
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
                <h4 class="modal-title">Tambah Mahasiswa Jurusan Teknologi Informasi</h4>
              </div>
              <div class="modal-body">

				 <form id="form_tambah" action="{{route('datamahasiswa.store')}}" method="POST" >
				  <div class="box-body">
						<div class="form-group">
						  <label for="nim">Tahun Masuk</label>
						  <input name="angkatan" type="text" class="form-control" id="angkatan" placeholder="Tahun Masuk" required>
						</div>
						<div class="form-group">
						  <label for="jenis_kelamin">Jenis Kelamin</label>
						  <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
							<option value="">----Jenis Kelamin----</option>
							<option value="L">Laki-Laki</option>
							<option value="P">Perempuan</option>
						  </select>
						</div>
					<div class="form-group">
					  <label for="nim">NIM</label>
					  <input name="nim" type="text" class="form-control" id="nim" placeholder="Masukkan NIM" required>
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
					  <select name="prodi_id" class="form-control" id="prodi">
							<option value="">----Program Study----</option>
							<option value="1">TEKNIK INFORMATIKA</option>
							<option value="2">TEKNIK KOMPUTER</option>
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

					<input type="hidden" name="jenis_input" value="1">
					{{ csrf_field() }}

				  </div>
				  <!-- /.box-body -->

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
				</form>
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
                <h4 class="modal-title">EDIT DATA MAHASISWA</h4>
              </div>
              <div class="modal-body">
					<form id="form_edit" action="{{route('datamahasiswa.store')}}" method="post" role="form">
				  <div class="box-body">
					<div class="form-group">
					  <label for="nim_edit">NIM</label>
					  <input name="nim" type="text" class="form-control" id="nim_edit" >
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
					  <select name="prodi_id" class="form-control" id="prodi_edit">
						<option value="">----Program Study----</option>
						<option value="1">TEKNIK INFORMATIKA</option>
						<option value="2">TEKNIK KOMPUTER</option>
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
					<input type="hidden" name="jenis_input" value="2">
					{{ csrf_field() }}

				  </div>
				  <!-- /.box-body -->
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">BATAL</button>
                <button type="submit" class="btn btn-primary">SIMPAN</button>
							</form>
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
                <h4 class="modal-title">HAPUS DATA MAHASISWA</h4>
              </div>
              <div class="modal-body">
                APAKAH ANDA YAKIN INGIN <span id="nama_dihapus"></span>
              </div>
              <div class="modal-footer">
				<form id="form_hapus" action="{{route('datamahasiswa.store')}}" method="POST">
					<input type="hidden" name="nim" id="nim_hapus">
					<input type="hidden" name="jenis_input" value="3">
					{{ csrf_field() }}
					<button type="button" class="btn btn-default pull-left" data-dismiss="modal">BATAL</button>
					<button type="submit" class="btn btn-primary">HAPUS</button>
				</form>
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
  });


  $("#form_tambah").submit(function(e){
	  swal("Berhasil Ditambahkan","","success");
  });

  $("#form_hapus").submit(function(e){
	  swal("Berhasil Di Hapus","","success");
  });

	$("#form_edit").submit(function(e){
	  swal("Berhasil Di edit","","success");
  });


	$("button.edit_mahasiwa_modal").on('click',function(){

		var data_edit= $(this).attr('data-lengkap');

		var re = /\s*;\s*/;
		var data_list = data_edit.split(re);

		//inputkan data ke dalam MODAL
		$('#nim_edit').val(data_list[0]);
		$('#nama_edit').val(data_list[1]);
		$('#email_edit').val(data_list[2]);
		$('#nohp_edit').val(data_list[3]);
		$('#alamat_edit').val(data_list[4]);
		$('#kelas_edit').val(data_list[5]);
		$('#prodi_edit').val(data_list[6]);
		$('#jurusan_edit').val(data_list[7]);
		$('#nama_ayah_edit').val(data_list[8]);
		$('#nama_ibu_edit').val(data_list[9]);
		$('#nohp_ortu_edit').val(data_list[11]);
		$('#alamat_ortu_edit').val(data_list[10]);

	});

	$("button.hapus_mahasiwa_modal").on('click',function(){

		var data_edit= $(this).attr('data-lengkap');

		var re = /\s*;\s*/;
		var data_list = data_edit.split(re);

		//inputkan data ke dalam MODAL
		$('#nim_hapus').val(data_list[0]);
		$('span#nama_dihapus').text(data_list[1]);


	});
</script>
@endsection
