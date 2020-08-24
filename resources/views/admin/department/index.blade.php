@extends('admin.layout.master')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">All Departments</li>
                </ol>
              </nav>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>SN</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                    
                    <tbody>
                        @if (count($departments)>0)
                        @foreach ($departments as $key => $department)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$department->name}}</td>
                            <td>{{$department->description}}</td>
                            <td><a href="{{route('departments.edit',[$department->id])}}"><i class="fas fa-edit"></i></a></td>
                            <td><i class="fas fa-trash"></i></td>
                            
                            
                        </tr>
                        @endforeach
                       
                        @else
                        <td>No departments found</td>
                        @endif
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
