@extends('admin.master')
@section('title')
    Manage Construction
@endsection
@section('body')
    <section class="py-5"></section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center text-capitalize">manage construction</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-bordered">
                                <thead>
                                <tr>
                                    <th>Sl. No:</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($constructions as $construction)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$construction->title}}</td>
                                        <td>{{$construction->short_description}}</td>
                                        <td>
                                            <img src="{{asset($construction->image)}}" alt="" style="height: 100px; width: 100px;">
                                        </td>
                                        <td>
                                            <a href="{{route('constructions.edit', $construction->id)}}" class="btn btn-secondary">edit</a>
                                            <form action="{{route('constructions.destroy', $construction->id)}}" onsubmit="return confirm('Are you sure want to delete this???')" method="post">
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
