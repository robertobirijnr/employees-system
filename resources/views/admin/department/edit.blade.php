@extends('admin.layout.master')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
            @endif
            <form action="{{route('departments.update',[$departments->id])}}" method="POST"> @csrf @method('PATCH')
            <div class="card">
                <div class="card-header">Update Department</div>

                <div class="card-body">
                  <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{$departments->name}}">
                      @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                  </div>
                  <div class="form-group">
                    <label for="name">Description</label>
                    <textarea name="description" class="form-control @error('description') is-invalid @enderror">{{$departments->description}}</textarea>
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                   <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
