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
                            <td>
                                <a href="#" data-toggle="modal" data-target="#exampleModal{{$department->id}}">
                                <i class="fas fa-trash">
                                    </i></a>
                                    <div class="modal fade" id="exampleModal{{$department->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <form action="{{route('departments.destroy',[$department->id])}}" method="POST">@csrf {{@method_field('DELETE')}} 
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                
                                              Are you sure you want to perform this action?
                                            </div>
                                            <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                              <button type="submit" class="btn btn-danger">Delete</button>
                                            </div>
                                          </div>
                                        </form>
                                        </div>
                                      </div>
                                </td>
                            
                            
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
