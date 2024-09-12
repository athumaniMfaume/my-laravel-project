@extends('layouts.app')
@section('title','create product')

@section('main')
    <div class="container">
        <div class="row justify-content-center">

              <div class="col-sm-8">
                <div class="card mt-3 p-3">
                    <form method="POST" action="/products/store" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{old('name')}}" class="form-control mb-2">
                            @if($errors->has('name'))
                               <span class="text-danger">{{$errors->first('name')}}</span>

                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description"  id=""  rows="4" class="form-control mb-2">{{old('description')}}</textarea>
                            @if($errors->has('description'))
                               <span class="text-danger">{{$errors->first('description')}}</span>

                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" value="{{old('image')}}" class="form-control mb-2">
                            @if($errors->has('image'))
                               <span class="text-danger">{{$errors->first('image')}}</span>

                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>

                </div>

              </div>

        </div>
    </div>

@endsection
