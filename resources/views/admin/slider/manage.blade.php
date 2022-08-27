@extends('admin.master')
@section('title')
    Manage Slider
@endsection
@section('body')
    <section class="py-5"></section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="text-center text-capitalize">manage slider</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table-bordered">
                                <thead>
                                <tr>
                                    <th>Sl. No:</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sliders as $slider)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$slider->description}}</td>
                                        <td>
                                            <img src="{{asset($slider->image)}}" alt="" style="height: 100px; width: 100px;">
                                        </td>
                                        <td>
                                            <a href="{{route('edit-slider', ['id' => $slider->id])}}" class="btn btn-secondary">edit</a>
                                            <a href="{{route('delete-slider', ['id' => $slider->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure want to delete this??????')">delete</a>
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
