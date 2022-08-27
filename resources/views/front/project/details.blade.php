@extends('front.inner')
@section('title')
    Project Details
@endsection
@section('body')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('/')}}front-assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Sample Inner Page</h2>
            <ol>
                <li><a href="{{route('/')}}">Home</a></li>
                <li><a href="{{route('project.all')}}">Project All</a></li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->
    <!-- ======= Projet Details Section ======= -->
    <section id="project-details" class="project-details">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="position-relative h-100">
                <div class="slides-1 portfolio-details-slider swiper">
                    <div class="swiper-wrapper align-items-center">
                        <div class="swiper-slide">
                            <img src="{{asset($project->image)}}" alt="" style="height: 400px; width: 400px;">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

            </div>

            <div class="row justify-content-between gy-4 mt-4">

                <div class="col-lg-8">
                    <div class="portfolio-description">
                        <h2>{{$project->title}}</h2>
                        <p>{{$project->short_description}}</p>
                        <p>{!! $project->long_description !!}</p>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            @php
                            $author = \App\Models\User::find($project->author_id);
                            @endphp
                            <li><strong>Category</strong> <span>{{$project->category->category_name}}</span></li>
                            <li><strong>Client</strong> <span>{{$author->name}}</span></li>
                            <li><strong>Project date</strong> <span>{{\Illuminate\Support\Carbon::parse($project->created_at)->format('d M, Y')}}</span></li>
                            <li><strong>Project URL</strong> <a href="#">www.example.com</a></li>
                            <li><a href="#" class="btn-visit align-self-start">Visit Website</a></li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Projet Details Section -->

@endsection
