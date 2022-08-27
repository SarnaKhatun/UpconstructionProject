@extends('front.inner')
@section('title')
    Blog Details
@endsection
@section('body')

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{asset('/')}}front-assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Sample Inner Page</h2>
            <ol>
                <li><a href="{{route('/')}}">Home</a></li>
                <li><a href="{{route('blog.all')}}">Blog All</a></li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->
    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row g-5">

                <div class="col-lg-8">

                    <article class="blog-details">

                        <div class="post-img">
                            <img src="{{asset($blog->image)}}" alt="" class="img-fluid w-100" style="height: 450px;">
                        </div>

                        <h2 class="title">{{$blog->title}}</h2>

                        <div class="meta-top">
                            <ul>
                                @php
                                    $author = \App\Models\User::find($blog->author_id);
                                @endphp
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="">{{$author->name}}</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html">{{\Illuminate\Support\Carbon::parse($blog->created_at)->toDayDateTimeString()}}</a></li>
                            </ul>
                        </div><!-- End meta top -->

                        <div class="content">
                            <p>{{$blog->short_description}}</p>

                            <p>{!! $blog->long_description !!}</p>


                        </div><!-- End post content -->

                        <div class="meta-bottom">
                            <i class="bi bi-tags"></i>
                            <ul class="tags">
                                @foreach($blogCategories as $blogCategory)
                                <li><a href="{{route('blog.all')}}">{{$blogCategory->category_name}}</a></li>
                                @endforeach
                            </ul>
                        </div><!-- End meta bottom -->

                    </article><!-- End blog post -->


                </div>

                <div class="col-lg-4">

                    <div class="sidebar">

                        <div class="sidebar-item search-form">
                            <h3 class="sidebar-title">Search</h3>
                            <form action="" class="mt-3">
                                <input type="text">
                                <button type="submit"><i class="bi bi-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <div class="sidebar-item categories">
                            <h3 class="sidebar-title">Categories</h3>
                            <ul class="mt-3">
                                @foreach($blogCategories as $blogCategory)
                                    <li><a href="{{route('blog.all')}}">{{$blogCategory->category_name}}</a></li>
                                @endforeach
                            </ul>
                        </div><!-- End sidebar categories-->

                        <div class="sidebar-item tags">
                            <h3 class="sidebar-title">Tags</h3>
                            <ul class="mt-3">
                                @foreach($blogCategories as $blogCategory)
                                    <li><a href="{{route('blog.all')}}">{{$blogCategory->category_name}}</a></li>
                                @endforeach
                            </ul>
                        </div><!-- End sidebar tags-->

                    </div><!-- End Blog Sidebar -->

                </div>
            </div>

        </div>
    </section><!-- End Blog Details Section -->


@endsection
