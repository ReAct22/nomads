@extends('layouts.app')
@section('title','Detail Travel')

@section('content')
 <!-- main Content -->
 <main>
    <section class="section section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">Paket Travel</li>
                            <li class="breadcrumb-item active">Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details">
                        <h1>Nusa Penida</h1>
                        <p>
                            Republic of Indonesia Raya
                        </p>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="{{url('')}}/frontend/image/nate-johnston-QO1TfIj9c2I-unsplash.jpg" width="670"
                                    class="xzoom" id="xzoom-default"
                                    xoriginal="{{url('')}}/frontend/image/nate-johnston-QO1TfIj9c2I-unsplash.jpg" alt="">
                            </div>
                            <div class="xzoom-thumbs">
                                <a href="{{url('')}}/frontend/image/nate-johnston-QO1TfIj9c2I-unsplash.jpg">
                                    <img src="{{url('')}}/frontend/image/nate-johnston-QO1TfIj9c2I-unsplash.jpg"
                                        class="xzoom-gallery" width="128"
                                        xpreview="{{url('')}}/frontend/image/nate-johnston-QO1TfIj9c2I-unsplash.jpg" alt="">
                                </a>
                                <a href="{{url('')}}/frontend/image/nate-johnston-QO1TfIj9c2I-unsplash.jpg">
                                    <img src="{{url('')}}/frontend/image/nate-johnston-QO1TfIj9c2I-unsplash.jpg"
                                        class="xzoom-gallery" width="128"
                                        xpreview="{{url('')}}/frontend/image/nate-johnston-QO1TfIj9c2I-unsplash.jpg" alt="">
                                </a>
                                <a href="{{url('')}}/frontend/image/nate-johnston-QO1TfIj9c2I-unsplash.jpg">
                                    <img src="{{url('')}}/frontend/image/nate-johnston-QO1TfIj9c2I-unsplash.jpg"
                                        class="xzoom-gallery" width="128"
                                        xpreview="{{url('')}}/frontend/image/nate-johnston-QO1TfIj9c2I-unsplash.jpg" alt="">
                                </a>
                                <a href="{{url('')}}/frontend/image/nate-johnston-QO1TfIj9c2I-unsplash.jpg">
                                    <img src="{{url('')}}/frontend/image/nate-johnston-QO1TfIj9c2I-unsplash.jpg"
                                        class="xzoom-gallery" width="128"
                                        xpreview="{{url('')}}/frontend/image/nate-johnston-QO1TfIj9c2I-unsplash.jpg" alt="">
                                </a>
                                <a href="{{url('')}}/frontend/image/nate-johnston-QO1TfIj9c2I-unsplash.jpg">
                                    <img src="{{url('')}}/frontend/image/nate-johnston-QO1TfIj9c2I-unsplash.jpg"
                                        class="xzoom-gallery" width="128"
                                        xpreview="{{url('')}}/frontend/image/nate-johnston-QO1TfIj9c2I-unsplash.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <h2>
                            Tentang Wisata
                        </h2>
                        <p>
                            Nusa Penida adalah sebuah pulau bagian dari negara Republik
                            Indonesia yang terletak di sebelah tenggara Bali yang dipisahkan
                            oleh Selat Badung. Di dekat pulau ini terdapat
                            juga pulau-pulau kecil lainnya yaitu Nusa Ceningan dan Nusa Lembongan
                        </p>
                        <p>
                            Nusa Penida adalah sebuah pulau bagian dari
                            negara Republik Indonesia yang terletak di
                            sebelah tenggara Bali yang dipisahkan
                        </p>
                        <div class="features row">
                            <div class="col-md-4">
                                <div class="description">
                                    <img src="{{url('')}}/frontend/image/ic_event.png" class="features-img" width="10px" alt="">
                                    <div class="description">
                                        <h3>Featured Event</h3>
                                        <p>Tari Kecak</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <div class="description">
                                    <img src="{{url('')}}/frontend/image/ic_bahasa.png" class="features-img" width="10px"
                                        alt="">
                                    <div class="description">
                                        <h3>Language</h3>
                                        <p>Bahasa Indonesia</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <div class="description">
                                    <img src="{{url('')}}/frontend/image/ic_foods.png" class="features-img" width="10px" alt="">
                                    <div class="description">
                                        <h3>Foods</h3>
                                        <p>Local Foods</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Member are going</h2>
                        <div class="members my-2">
                            <img src="{{url('')}}/frontend/image/Group 13.png" class="member-img mr-1" alt="">
                            <img src="{{url('')}}/frontend/image/Group 11.png" class="member-img mr-1" alt="">
                            <img src="{{url('')}}/frontend/image/Group 12.png" class="member-img mr-1" alt="">
                            <img src="{{url('')}}/frontend/image/Group 14.png" class="member-img mr-1" alt="">
                            <img src="{{url('')}}/frontend/image/Group 16.png" class="member-img mr-1" alt="">
                        </div>
                        <hr>
                        <h2>Trip Information</h2>
                        <table class="trip-information">
                            <tr>
                                <th width="50%">Date of Departure</th>
                                <td width="50%" class="text-right">22 Aug 2021</td>
                            </tr>
                            <tr>
                                <th width="50%">Duration</th>
                                <td width="50%" class="text-right">4D 3N/td>
                            </tr>
                            <tr>
                                <th width="50%">Type</th>
                                <td width="50%" class="text-right">Open Tripe</td>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <td width="50%" class="text-right">$80,00 / person</td>
                            </tr>
                        </table>
                    </div>
                    <div class="join-container">
                        <a href="/checkout" class="btn btn-block btn-join-now mt-3 py-2">Join Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{url('frontend/libraries/xzoom/xzoom.css')}}">
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js') }}"></script>
<script>
    $(document).ready(function () {
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWith: 500,
            title: false,
            tint: '#333',
            xoffset: 15
        });
    });
</script>
@endpush
