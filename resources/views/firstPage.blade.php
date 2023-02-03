@extends('layouts.MainLayout')

@section('header')
<div class="collapse navbar-collapse" id="navbarmain">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a class="nav-link" href="{{url('firstPage')}}">หน้าหลัก</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('community/index')}}">ชุมชน</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('habitat/index')}}">บ้าน</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('listhabitat/index')}}">สมาชิกภายในบ้าน</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('summary/index')}}">สรุปผล</a></li>
    </ul>
</div>
@endsection

@section('content')
<section class="banner3">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-xl-7">
				<div class="block">

				</div>
			</div>
		</div>
	</div>
</section>
@endsection
