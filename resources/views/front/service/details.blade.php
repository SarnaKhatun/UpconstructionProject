@extends('front.inner')
@section('title')
    Service Details
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
    <!-- ======= Service Details Section ======= -->
    <section id="service-details" class="service-details">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-4">
                    <div class="services-list">
                        @foreach($serviceCategories as $serviceCategory)
                        <a href="{{route('service.all')}}" class="active">{{$serviceCategory->category_name}}</a>
                        @endforeach
                    </div>

                    <h4>{{$service->category->category_name}}</h4>
                    <p>{{$service->short_description}}</p>
                </div>

                <div class="col-lg-8">
                    <img src="{{asset($service->image)}}" alt="" class="img-fluid services-img">
                    <h3>{{$service->title}}</h3>
                    <p>{!! $service->long_description !!}</p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Aut eum totam accusantium voluptatem.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Assumenda et porro nisi nihil nesciunt voluptatibus.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea</span></li>
                    </ul>
                </div>

            </div>

        </div>
    </section><!-- End Service Details Section -->
@endsection
