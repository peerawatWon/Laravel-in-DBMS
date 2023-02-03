@extends('layouts/MainLayout')

@section('header')
<div class="collapse navbar-collapse" id="navbarmain">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item"><a class="nav-link" href="{{url('firstPage')}}">หน้าหลัก</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('community/index')}}">ชุมชน</a></li>
        <li class="nav-item active"><a class="nav-link" href="{{url('habitat/index')}}">บ้าน</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('listhabitat/index')}}">สมาชิกภายในบ้าน</a></li>
        <li class="nav-item"><a class="nav-link" href="{{url('summary/index')}}">สรุปผล</a></li>
    </ul>
</div>
@endsection

@section('content')
<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <h1 class="text-color-3 mt-1">ข้อมูลของบ้าน->({{ $habitat->habitatId }}) </h1>
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
                <h2 class="text-color mt-3">ข้อมูลของบ้าน </h2>
            </div>
        </div>

        <div class="col-lg-8">
             <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
              <h2 class="mb-2 title-color">กรอกข้อมูล</h2>
                 <form  class="appoinment-form" method="GET" action="{{ url('habitat/update') }}" enctype="multipart/form-data">
                      <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-lg-4 col-form-label" for="val-username">ที่อยู่</label>
                                <input name="address" id="address" type="text" class="form-control" value="{{ $habitat->address }}" required>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 col-form-label" for="val-username">ใกล้แม่น้ำ</label>
                                <select class="form-control" id="nearTheCoast" name="nearTheCoast">
                                  <option value=1 {{ $habitat->nearTheCoast == 1 ? 'selected' : '' }}>ใกล้แม่น้ำ</option>
                                  <option value=0 {{ $habitat->nearTheCoast == 0 ? 'selected' : '' }}>ไม่ใกล้แม่น้ำ</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-4 col-form-label" for="val-username">ชุมชน</label>
                                <select class="form-control" id="communityId" name="communityId">
                                    @foreach ($communitys as $community)
                                    <option value="{{ $community->communityId }}"  {{ $community->communityId == $habitat->communityId ? 'selected' : '' }}>{{ $community->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <input name="habitatId" id="habitatId" type="hidden" class="form-control" value="{{ $habitat->habitatId }}" >
                            <a class="btn btn-main btn-round-full" href="{{ url('habitat/index') }}"><i class="icofont-simple-left ml-2"></i>กลับ</a>
                        <button type="submit" class="btn btn-main btn-round-full">แก้ไขบ้าน<i class="icofont-simple-right ml-2"></i></button>
                        </div>
                  </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
