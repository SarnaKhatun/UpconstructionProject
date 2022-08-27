@extends('admin.master')
@section('title')
    Manage Service Category
@endsection
@section('body')
    <section class="py-5"></section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center text-capitalize">manage category</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-bordered">
                                <thead>
                                <tr>
                                    <th>Sl. No:</th>
                                    <th>Category Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($serviceCategories as $service)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$service->category_name}}</td>
                                        <td>{{$service->status == 1 ? 'Published' : 'Unpublished'}}</td>
                                        <td>
                                            <a href="{{route('serviceCategories.edit', $service->id)}}" class="btn btn-secondary">edit</a>
                                            <form action="{{route('serviceCategories.destroy', $service->id)}}" onsubmit="return confirm('Are you sure want to delete this???')" method="post">
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
