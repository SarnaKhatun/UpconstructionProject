@extends('admin.master')
@section('title')
    Manage Blog
@endsection
@section('body')
    <section class="py-5"></section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center text-capitalize">manage blog</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-bordered">
                                <thead>
                                <tr>
                                    <th>Sl. No:</th>
                                    <th>Category Name</th>
                                    <th>Author Id</th>
                                    <th>Role</th>
                                    <th>Title</th>
                                    <th>Short Description</th>
                                    <th>Long Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($blogs as $blog)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$blog->category->category_name}}</td>
                                        <td>{{$blog->author_id}}</td>
                                        <td>{{$blog->role}}</td>
                                        <td>{{$blog->title}}</td>
                                        <td>{{$blog->short_description}}</td>
                                        <td>{{$blog->long_description}}</td>
                                        <td>
                                            <img src="{{asset($blog->image)}}" alt="" style="height: 100px; width: 100px;">
                                        </td>
                                        <td>{{$blog->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                        <td>
                                            <a href="{{route('blogs.edit', $blog->id)}}" class="btn btn-secondary">edit</a>
                                            <form action="{{route('blogs.destroy', $blog->id)}}" onsubmit="return confirm('Are you sure want to delete this???')" method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" class="btn btn-danger" value="delete">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
