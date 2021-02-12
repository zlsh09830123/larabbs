@extends('layouts.app')

@section('title', $user->name . ' 的個人中心')

@section('content')
  <div class="row">
    <div class="col-lg-3 col-md-3 hidden-sm hidden-xs user-info">
      <div class="card">
        <img src="https://cdn.learnku.com/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/600/h/600" alt="{{ $user->name }}" class="card-img-top">
        <div class="card-body">
          <h5><strong>個人簡介</strong></h5>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore, quae.</p>
          <hr>
          <h5><strong>註冊於</strong></h5>
          <p>January 01 1901</p>
        </div>
      </div>
    </div>
    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
      <div class="card">
        <div class="card-body">
          <h1 class="mb-0" style="font-size:22px;">{{ $user->name }} <small>{{ $user->email }}</small></h1>
        </div>
      </div>
      <hr>
      {{-- 用戶發布的內容 --}}
      <div class="card">
        <div class="card-body">
          暫無內容 ~_~
        </div>
      </div>
    </div>
  </div>
@endsection
