@extends('front.inner')
@section('title')
    Service All
@endsection
@section('body')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('/')}}front-assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Sample Inner Page</h2>
            <ol>
                <li><a href="{{route('/')}}">Home</a></li>
                <li><a href="{{route('service.all')}}">Service All</a></li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row gy-4">
                @foreach($services as $service)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item  position-relative">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{asset($service->image)}}" alt="" style="height: 250px; width: 250px;">
                                <h3>{{$service->category->category_name}}</h3>
                                <p>{{$service->short_description}}</p>
                                <a href="{{route('service.details', ['id' => $service->id])}}" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div><!-- End Service Item -->
                @endforeach
            </div>

        </div>
    </section><!-- End Services Section -->
@endsection
