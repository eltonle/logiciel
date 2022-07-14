@extends('layouts.master')

@section('title')
   Category Create
@endsection
@section('content')
 
<div class="card ">
    <div class="card-body">
        <a href="{{ route('categories.index') }}"class="btn btn-success">Back</a>
    </div>


    <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name"  class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="exampleInputEmail1" placeholder="Enter email">
            </div>
           
            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" value="{{ old('image') }} id="exampleInputFile">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea  name="description" class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }} id="description"> </textarea>
            </div>
        
        </div>

        <div class="card-body">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div> 

@endsection

