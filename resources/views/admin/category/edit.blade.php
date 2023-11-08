@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h3 align="center"><b>Update Category</b></h3>
                    <div class="card-header"></div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success">{{session('success')}}</div>
                        @endif
                        <form method="post" action="{{route('category.store',$categoriegit->id)}}">
                            @csrf
                            <div class="row mb-3" >
                                <div class="col-md-12 input-group ">
                                    <input type="text" value="{{$categorie->name}}" class="form-control @error('name') is-invalid @enderror " name="name" placeholder="Enter category name"></textarea>
                                    @error('name')
                                    <div class="invalid-feedback d-block">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12 input-group">
                                    <textarea name="desc" value="{{$categorie->desc}}" class="form-control @error('desc') is-invalid @enderror " placeholder="category - description"></textarea>
                                    @error('desc')
                                    <div class="invalid-feedback d-block">{{$message}}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12 input-group">
                                    <button type="submit" class="form-control btn btn-primary" >update Category</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
