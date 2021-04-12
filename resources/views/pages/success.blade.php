@extends('layouts.success')
@section('title','Success')

@section('content')
  <!-- main Content -->
  <main>
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
            <img src="{{url('frontend/image/ic_mail.png')}}" alt="">
            <h1>Yay! Success</h1>
            <p>
                we've sente you email for trip Instructions <br>
                please read it as well
            </p>

            <a href="{{url('/')}}" class="btn btn-home-page mt-3 px-5">Home Page</a>
        </div>
    </div>
</main>

@endsection

