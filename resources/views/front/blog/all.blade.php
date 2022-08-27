@extends('front.inner')
@section('title')
    Blog All
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
@endsection
