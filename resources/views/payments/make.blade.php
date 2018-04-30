@extends('layouts.app')

@section('content')

    <!-- ================ Start Page Title ======================= -->
    <section class="title-transparent page-title" style="background:url({{ asset('assets/img/aboutone.jpg')  }}});">
        <div class="container">
            <div class="title-content">
                <h1>Make Payment</h1>
            </div>
        </div>
    </section>
    <div class="clearfix"></div>
    <!-- ================ End Page Title ======================= -->
    <section>
        <div class="container">
            <div class="col-md-12 col-sm-12">
                {!! $iframe !!}
            </div>
        </div>
    </section>

@endsection