@extends('front.master')
@section('title')
    Home
@endsection
@section('body')

    <!-- ======= Hero Section ======= -->


    <section id="hero" class="hero">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 data-aos="fade-down">Welcome to <span>UpConstruction</span></h2>
                        <p data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            @foreach($sliders as $slider)
            <div class="carousel-item active w-100" style="background-image: url({{asset($slider->image)}}); height: 650px;" ></div>
            @endforeach


            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= Get Started Section ======= -->
        <section id="get-started" class="get-started section-bg">
            <div class="container">

                <div class="row justify-content-between gy-4">

                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
                        <div class="content">
                            <h3>Minus hic non reiciendis ea possimus at quia.</h3>
                            <p>Rem id rerum. Debitis deserunt quidem delectus expedita ducimus dolor. Aut iusto ipsa. Eos ipsum nobis ipsa soluta itaque perspiciatis fuga ipsum perspiciatis. Eum amet fugiat totam nisi possimus ut delectus dicta.
                            <p>Aliquam velit deserunt autem. Inventore et saepe. Tenetur suscipit eligendi labore culpa eos. Deserunt porro magni qui necessitatibus dolorem at animi cupiditate.</p>
                        </div>
                    </div>

                    <div class="col-lg-5" data-aos="fade">
                        <form action="forms/quote.php" method="post" class="php-email-form">
                            <h3>Get a quote</h3>
                            <p>Vel nobis odio laboriosam et hic voluptatem. Inventore vitae totam. Rerum repellendus enim linead sero park flows.</p>
                            <div class="row gy-3">

                                <div class="col-md-12">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>

                                <div class="col-md-12 ">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your quote request has been sent successfully. Thank you!</div>

                                    <button type="submit">Get a quote</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Quote Form -->

                </div>

            </div>
        </section><!-- End Get Started Section -->

        <!-- ======= Constructions Section ======= -->
        <section id="constructions" class="constructions">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Constructions</h2>
                    <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p>
                </div>

                <div class="row gy-4">
                    @foreach($constructions as $construction)
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg w-100" style="background-image: url({{asset($construction->image)}}); height: 250px;"></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$construction->title}}</h4>
                                        <p>{{$construction->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->
                    @endforeach
                </div>

            </div>
        </section><!-- End Constructions Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Services</h2>
                    <p>Voluptatem quibusdam ut ullam perferendis repellat non ut consequuntur est eveniet deleniti fignissimos eos quam</p>
                </div>

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



        <!-- ======= Features Section ======= -->
        <section id="features" class="features section-bg">
            <div class="container" data-aos="fade-up">

                <ul class="nav nav-tabs row  g-2 d-flex">

                    <li class="nav-item col-3">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <h4>Modisit</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <h4>Praesenti</h4>
                        </a><!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <h4>Explica</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                            <h4>Nostrum</h4>
                        </a>
                    </li><!-- End tab nav item -->

                </ul>

                <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                                <h3>Voluptatem dignissimos provident</h3>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                                <img src="{{asset('/')}}front-assets/img/features-1.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Neque exercitationem debitis</h3>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                    <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{asset('/')}}front-assets/img/features-2.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-3">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Voluptatibus commodi accusamu</h3>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                    <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores dolores quos qui a. Ipsum neque dolor voluptate nisi sed.</li>
                                </ul>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{asset('/')}}front-assets/img/features-3.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-4">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Omnis fugiat ea explicabo sunt</h3>
                                <p class="fst-italic">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                                    magna aliqua.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                    <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                                    <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="{{asset('/')}}front-assets/img/features-4.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                </div>

            </div>
        </section><!-- End Features Section -->

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


        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-blog-posts" class="recent-blog-posts">
            <div class="container" data-aos="fade-up">



            <div class=" section-header">
                <h2>Recent Blog Posts</h2>
                <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p>
            </div>

            <div class="row gy-5">
                @foreach($blogs as $blog)
                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-item position-relative h-100">

                        <div class="post-img position-relative overflow-hidden">
                            <img src="{{asset($blog->image)}}" class="img-fluid w-100" alt="" style="height: 300px; ">
                            <span class="post-date">{{\Illuminate\Support\Carbon::parse($blog->created_at)->format('M d.')}}</span>
                        </div>

                        <div class="post-content d-flex flex-column">

                            <h3 class="post-title">{{$blog->category->category_name}}</h3>

                            <div class="meta d-flex align-items-center">
                                @php
                                    $author = \App\Models\User::find($blog->author_id);
                                @endphp
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-person"></i> <span class="ps-2">{{$author->name}}</span>
                                </div>
                                <span class="px-3 text-black-50">/</span>
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-folder2"></i> <span class="ps-2">{{$blog->role}}</span>
                                </div>
                            </div>

                            <hr>

                            <a href="{{route('blog.details', ['id' => $blog->id])}}" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                        </div>

                    </div>
                </div><!-- End post item -->
                @endforeach
            </div>

            </div>
        </section>
        <!-- End Recent Blog Posts Section -->

    </main><!-- End #main -->
@endsection
