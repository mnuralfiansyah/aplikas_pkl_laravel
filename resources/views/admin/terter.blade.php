@extends('admin.content.master')

@section('content')
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
	<button onclick="sweetalert()" class="btn btn-info"> COBA  </button>
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
	function sweetalert(){
		swal({
		  title: "Are you sure?",
		  text: "Are you sure that you want to leave this page?",
		  icon: "warning",
		  dangerMode: true,
		})
		.then(willDelete => {
		  if (willDelete) {
			swal("Deleted!", "Your imaginary file has been deleted!", "success");
		  }
		});	
	};
</script>

		

@endsection