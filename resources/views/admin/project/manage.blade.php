@extends('admin.master')
@section('title')
    Manage Project
@endsection
@section('body')
    <section class="py-5"></section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center text-capitalize">manage project</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-bordered">
                                <thead>
                                <tr>
                                    <th>Sl. No:</th>
                                    <th>Category Name</th>
                                    <th>Author Id</th>
                                    <th>Title</th>
                                    <th>Short Description</th>
                                    <th>Long Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($projects as $project)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$project->category->category_name}}</td>
                                        <td>{{$project->author_id}}</td>
                                        <td>{{$project->title}}</td>
                                        <td>{{$project->short_description}}</td>
                                        <td>{{$project->long_description}}</td>
                                        <td>
                                            <img src="{{asset($project->image)}}" alt="" style="height: 100px; width: 100px;">
                                        </td>
                                        <td>{{$project->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                        <td>
                                            <a href="{{route('projects.edit', $project->id)}}" class="btn btn-secondary">edit</a>
                                            <form action="{{route('projects.destroy', $project->id)}}" onsubmit="return confirm('Are you sure want to delete this???')" method="post">
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
