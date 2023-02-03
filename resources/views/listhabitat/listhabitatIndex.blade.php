@extends('layouts.MainLayout')

@section('header')
<div class="collapse navbar-collapse" id="navbarmain">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="{{url('firstPage')}}">หน้าหลัก</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('community/index')}}">ชุมชน</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('habitat/index')}}">บ้าน</a></li>
        <li class="nav-item active"><a class="nav-link" href="{{url('listhabitat/index')}}">สมาชิกภายในบ้าน</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('summary/index')}}">สรุปผล</a></li>
    </ul>
</div>
@endsection

@section('content')
    <!-- Slider Start -->
<section class="banner1">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-xl-7">
				<div class="block">
                    <div class="btn-container ">
						<h1>สมาชิกภายในบ้าน</h1>
					</div>
                    <br>
                    <form  class="appoinment-form" method="GET" action="{{ url('listhabitat/search') }}" enctype="multipart/form-data">
                        <input type="text" name="key">
                        <button type="submit" class="btn btn-main btn-round-full">ค้นหา<i class="icofont-simple-right ml-2"></i></button>
                    </form>
                    <br>
					<div class="btn-container ">
						<a href="create" class="btn btn-main-2 btn-icon btn-round-full">CREATE <i class="icofont-simple-right ml-2  "></i></a>
					</div>
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
                    @foreach ($listHabitats as $listHabitat)
					<div class="feature-item mb-5 mb-lg-0">
						<div class="feature-icon mb-4">
							<img src="{{ asset('images/2.png')}}" width="70" height="70" alt="home">
						</div>
						<h4 class="mb-3">ชื่อ : {{ $listHabitat->fname }} {{ $listHabitat->lname }}</h4>
                        <p class="mb-3">เพศ : {{ $listHabitat->gender }} </p>
                        @foreach ($habitats as $habitat )
                            @if ($habitat->habitatId == $listHabitat->habitatId)
                                <p class="mb-4">ที่อยู่ : {{ $habitat->address }} </p>
                            @endif
                        @endforeach
						<a href={{ url('listhabitat/edit/'.$listHabitat->listhabitatId )}} class="btn btn-main btn-round-full">EDIT</a>
                        &nbsp;
                        <a href={{ url('listhabitat/delete/'.$listHabitat->listhabitatId )}} class="btn btn-main btn-round-full" onclick="return confirm('Are you sure to delete?')">DELETE</a>
					</div>
                    @endforeach
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
