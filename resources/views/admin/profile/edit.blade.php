@extends('admin.layout.main')
@section('title', 'Profile')
@section('nav-title','Profile')
@section('content')

<div class="row">
	<div class="col-md-12">
		<h4 style="padding: 18px;">Personal Info</h4>

		<!-- FORM  PERSONAL INFO-->
		<form action="" method="POST" enctype="multipart/form-data">
			<div class="row">
				<!-- DIV PICTURE -->
				<div class="col-md-3">
					<div class="p-picture">
						<p>Profile Picture</p>
						<img src="{{url('assets/back/dist/img/profile/user2-160x160.jpg')}}">
					</div>
				</div>
				<!-- END DIV PICTURE -->

				<div class="col-md-4">
					<div class="form-group">
						<label for="exampleInputEmail1">Username</label>
						<input type="email" class="form-control " value="Fahmi"  readonly>
						<small id="emailHelp" class="form-text text-muted">*Username Tidak Dapat Diganti</small>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">First Name</label>
						<input type="password" class="form-control" name=""  value="" autofocus>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Nick Name</label>
						<input type="email" class="form-control" name="" value="" >
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Biographical Info</label>
						<textarea class="form-control " name="" value="" ></textarea>
					</div>
				</div>

				<div class="col-md-4">
					<div class="form-group">
						<label for="exampleInputEmail1">Display Name As</label>
						<input type="email" class="form-control  " name="" value="" >
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Last Name</label>
						<input type="password" class="form-control " name="" value="" >
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email</label>
						<input type="email" class="form-control " name="" value="" >
					</div>		
					<div class="btn-edit">		
						<a href="#" data-id="1" class="btn btn-primary edit_profile2btl confirm" id="back">Batal</a>
						<a href="" class="btn btn-primary edit_profile2">Simpan</a>
					</div>
				</div>

			</div>
		</form>
	</div>

	<div class="col-md-12">
		<h4 style="padding: 18px;">Account Management</h4>

	</div>

</div>

<img src="{{url('/assets/back/dist/img/footer-bg.png')}}" width="100%" class="footer-bg d-none d-sm-block">


<script type="text/javascript">
	$(".confirm").on('click',function(e){
		id = e.target.dataset.id;
		swal({
			title : 'Apakah Anda Yakin ?',
			text : 'Perubahan Yang Telah Dibuat Tidak Akan Tersimpan!',
			icon : 'warning',
			buttons : true,
			dangerMode : true,
		})
		.then((willDelete)=>{
			if(willDelete){
				window.location.href = "{{url('/profile')}}";
			}else{
				
			}
		});
	});
</script>


@endsection
