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
	<div class="row">  
	    <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Mahasiswa</span>
              <span class="info-box-number">2,000</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
		<div class="col-md-6 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-blue"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Dosen</span>
              <span class="info-box-number">200</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
	</div>	
	</section>
	
	
<!--------------->
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
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
@endsection

		