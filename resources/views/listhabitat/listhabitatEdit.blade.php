@extends('layouts/MainLayout')

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
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <h1 class="text-color-3 mt-1">ข้อมูลของสมาชิกในบ้าน->({{ $listhabitat->fname }} {{ $listhabitat->lname }}) </h1>
      </div>
    </div>
  </section>
<section class="appoinment section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
            <div class="mt-3">
              <div class="feature-icon mb-3">
                <i class="icofont-support text-lg"></i>
              </div>
                <h2 class="text-color mt-3">ข้อมูลของสมาชิกในบ้าน </h2>
            </div>
        </div>

        <div class="col-lg-8">
             <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
              <h2 class="mb-2 title-color">กรอกข้อมูล</h2>
                 <form  class="appoinment-form" method="GET" action="{{ url('listhabitat/update') }}" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-lg-4 col-form-label" for="val-username">ชื่อ</label>
                                <input name="fname" id="fname" type="text" class="form-control" value="{{ $listhabitat->fname }}" required>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 col-form-label" for="val-username">นามสกุล</label>
                                <input name="lname" id="lname" type="text" class="form-control" value="{{ $listhabitat->lname }}" required>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 col-form-label" for="val-username">เพศ</label>
                                <select class="form-control" id="gender" name="gender">
                                    <option value="ชาย" {{ $listhabitat->gender == "ชาย" ? 'selected' : '' }}>ชาย</option>
                                    <option value="หญิง" {{ $listhabitat->gender == "หญิง" ? 'selected' : '' }}>หญิง</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 col-form-label" for="val-username">บ้าน</label>
                                <select class="form-control" id="habitatId" name="habitatId">
                                    @foreach ($habitats as $habitat)
                                    <option value="{{ $habitat->habitatId }}" {{ $habitat->habitatId == $listhabitat->habitatId ? 'selected' : '' }}>{{ $habitat->address }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input name="listhabitatId" id="listhabitatId" type="hidden" class="form-control" value={{ $listhabitat->listhabitatId }}>
                            <a class="btn btn-main btn-round-full" href="{{ url('listhabitat/index') }}"><i class="icofont-simple-left ml-2"></i>กลับ</a>
                            <button type="submit" class="btn btn-main btn-round-full">เพิ่มสมาชิกในบ้าน<i class="icofont-simple-right ml-2"></i></button>
                        </div>
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
