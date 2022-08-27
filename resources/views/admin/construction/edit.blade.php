@extends('admin.master')
@section('title')
    Edit Construction
@endsection
@section('body')
    <section class="py-5"></section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center text-capitalize">edit construction </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('constructions.update', $construction->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Title</label>
                                    <div class="col-md-8">
                                        <input type="text" name="title" class="form-control" value="{{$construction->title}}">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Description</label>
                                    <div class="col-md-8">
                                        <textarea name="description" id="" cols="30" rows="5" class="form-control">{{$construction->short_description}}</textarea>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" >
                                        @if(isset($construction->image))
                                            <img src="{{asset($construction->image)}}" alt="" style="height: 100px; width: 100px;">
                                        @endif
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Update Construction">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
