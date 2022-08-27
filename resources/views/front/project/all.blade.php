@extends('front.inner')
@section('title')
    Project All
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

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Our Projects</h2>
                <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto accusamus fugit aut qui distinctio</p>
            </div>

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">

                <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                    @foreach($projectCategories as $projectCategory)
                        <li data-filter="*" class="">{{$projectCategory->category_name}}</li>
                    @endforeach
                </ul><!-- End Projects Filters -->

                <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach($projects as $project)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                <img src="{{asset($project->image)}}" class="img-fluid" alt="" style="height: 300px; width: 300px;">
                                <div class="portfolio-info">
                                    <h4>{{$project->category->category_name}}</h4>
                                    <p>{{$project->short_description}}</p>
                                    <a href="{{asset($project->image)}}" title="{{$project->title}}" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="{{route('project.details', ['id' => $project->id])}}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Projects Item -->
                    @endforeach

                </div><!-- End Projects Container -->

            </div>

        </div>
    </section><!-- End Our Projects Section -->
@endsection
