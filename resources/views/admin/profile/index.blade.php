@extends('admin.layout.main')
@section('title', 'Profile')
@section('nav-title','Profile')
@section('content')
<div class="row">
	<div class="col-md-12">
		<h4 style="padding: 18px;">Personal Info</h4>

		<!-- FORM  PERSONAL INFO-->
		
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
						<input type="email" class="form-control p-form" value="Fahmi" readonly>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">First Name</label>
						<input type="password" class="form-control p-form" value="" readonly>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Nick Name</label>
						<input type="email" class="form-control p-form" value="" readonly>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Biographical Info</label>
						<textarea class="form-control p-form" value="" readonly></textarea>
					</div>
				</div>

				<div class="col-md-4">
					<div class="form-group">
						<label for="exampleInputEmail1">Display Name As</label>
						<input type="email" class="form-control p-form " value="" readonly>
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Last Name</label>
						<input type="password" class="form-control p-form" value="" readonly>
					</div>
					<div class="form-group">
						<label for="exampleInputEmail1">Email</label>
						<input type="email" class="form-control p-form" value="" readonly>
					</div>				
					<a href="{{url('/edit')}}" class="btn btn-primary edit_profile">Edit</a>

				</div>

			</div>
	</div>

	<div class="col-md-12">
		<h4 style="padding: 18px;">Account Management</h4>

	</div>

	<img src="{{url('/assets/back/dist/img/footer-bg.png')}}" width="100%" class="footer-bg d-none d-sm-block">

</div>

@endsection