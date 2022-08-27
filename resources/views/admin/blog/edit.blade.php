@extends('admin.master')
@section('title')
    Edit Blog
@endsection
@section('body')
    <section class="py-5"></section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center text-capitalize">edit blog </h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('blogs.update', $blog->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Category Name</label>
                                    <div class="col-md-8">
                                        <select name="category_id" id="" class="form-control">
                                            <option value="" disabled><--select a option--></option>
                                            @foreach($blogCategories as $blogCategory)
                                                <option value="{{$blogCategory->id}}" {{$blogCategory->id == $blog->category_id ? 'selected' : ''}}>{{$blogCategory->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Role</label>
                                    <div class="col-md-8">
                                        <input type="text" name="role" class="form-control" value="{{$blog->role}}">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Title</label>
                                    <div class="col-md-8">
                                        <input type="text" name="title" class="form-control" value="{{$blog->title}}">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Short Description</label>
                                    <div class="col-md-8">
                                        <textarea name="short_description" id="" cols="30" rows="5" class="form-control">{{$blog->short_description}}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Long Description</label>
                                    <div class="col-md-8">
                                        <textarea name="long_description" id="" cols="30" rows="5" class="form-control">{{$blog->long_description}}</textarea>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Image</label>
                                    <div class="col-md-8">
                                        <input type="file" name="image" >
                                        @if(isset($blog->image))
                                            <img src="{{asset($blog->image)}}" alt="" style="height: 100px; width: 100px;">
                                        @endif
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4">Status</label>
                                    <div class="col-md-8">
                                        <label for=""><input type="radio" name="status" value="1" {{$blog->status == 1 ? "checked" : ""}}>Published</label>
                                        <label for=""><input type="radio" name="status" value="0" {{$blog->status == 0 ? "checked" : ""}}>Unpublished</label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <label for="" class="col-md-4"></label>
                                    <div class="col-md-8">
                                        <input type="submit" class="btn btn-success" value="Update Blog">
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
