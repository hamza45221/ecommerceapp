@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table table-striped table-secondary">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($category as $categories)
                        <tr>
                            <th scope="row">{{$categories->id}}</th>
                            <td>{{$categories->name}}</td>
                            <td>{{$categories->desc}}</td>
                            <td>
                                <a href="{{route('delete.category',$categories->id)}}" class="border-3 text-bg-danger px-3 py-2">Delete</a>
                                <a href="{{route('edit.Category',$categories->id )}}" class="border-3 text-bg-success px-3 py-2">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
