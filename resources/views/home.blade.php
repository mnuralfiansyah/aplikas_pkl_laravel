@extends('admin.content.master')

@section('content')
<body class="hold-transition skin-blue sidebar-mini">
	<div id="app">
		<div class="wrapper">
			<!-- header-->
			@include('admin.header')
			<!-- Left side column. contains the logo and sidebar -->
			@include('admin.sidebar')
			<!-- Content Wrapper. Contains page content -->
			@include('admin.content')
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