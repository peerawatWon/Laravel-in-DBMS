@extends('layouts.MainLayout')

@section('header')
<div class="collapse navbar-collapse" id="navbarmain">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="{{url('firstPage')}}">หน้าหลัก</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('community/index')}}">ชุมชน</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('habitat/index')}}">บ้าน</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('listhabitat/index')}}">สมาชิกภายในบ้าน</a></li>
        <li class="nav-item active"><a class="nav-link" href="{{url('summary/index')}}">สรุปผล</a></li>
    </ul>
</div>
@endsection

@section('content')
    <!-- Slider Start -->
<section class="banner3">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-xl-7">
				<div class="block">
                    <div class="btn-container ">
						<h1>สรุปผลจำนวนคนที่อยู่ในภายในตำบล</h1>
					</div>
                    <br>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="features">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="feature-block d-lg-flex">
                    @foreach ($summary as $s)
					<div class="feature-item mb-5 mb-lg-0">
						<h4 class="mb-3">ตำบล : {{ $s->name }}</h4>
                        <p class="mb-3">จำนวน : {{ $s->countPerson }} คน</p>
                    </div>
                    <br>
                    @endforeach
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
