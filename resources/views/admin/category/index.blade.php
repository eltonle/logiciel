@extends('layouts.master')

@section('title')
   Category
@endsection
@section('content')
 <div class="card">
    <div class=" mt-2">
        <div class="d-flex justify-content-between items-center">
            <h5 class="text-lg">Categories Details</h5>
            <a href="{{ route('categories.create') }}" class="btn btn-primary"> <i class="nav-icon fas fa-plus"></i> Add category</a>
        </div>
        {{-- <h3 class="card-title">DataTable with minimal features &amp; hover style</h3> --}}
    </div>

    <div class="card-body">
        <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
                <div class="col-sm-12 col-md-6"></div>
                <div class="col-sm-12 col-md-6"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example2" class="table table-bordered dataTable dtr-inline"
                        aria-describedby="example2_info">
                        <thead>
                            <tr>
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="Rendering engine: activate to sort column descending">Name
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                    aria-label="Browser: activate to sort column ascending">Image
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                    aria-label="Browser: activate to sort column ascending">Description
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                                    aria-label="Browser: activate to sort column ascending">Action
                                </th>
                                       
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category )
                            <tr class="odd">
                                <td>{{ $category->name }}</td>
                                <td><img src="{{ Storage::url($category->image) }}" width="50" height="50" alt=""></td>
                                <td>{{ $category->description }}</td>
                                <td class=""> 
                                    <div class="d-flex">
                                        <a href="{{ route('categories.edit',$category->id) }}" class="btn btn-success mr-2"> edit</a>
                                    
                                        <form method="POST" action="{{ route('categories.destroy',$category->id) }}"
                                            onsubmit="return confirm('Are you sure?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger inline-block"> delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>  
                            @endforeach 
                        </tbody>
                        <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1"> Names</th>
                                <th rowspan="1" colspan="1">Images</th>
                                <th rowspan="1" colspan="1">description</th>
                                <th rowspan="1" colspan="1">Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-5">
                    <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of
                        57 entries</div>
                </div>
                <div class="col-sm-12 col-md-7">
                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                        <ul class="pagination">
                            <li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#"
                                    aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                            </li>
                            <li class="paginate_button page-item active"><a href="#" aria-controls="example2"
                                    data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2"
                                    tabindex="0" class="page-link">2</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3"
                                    tabindex="0" class="page-link">3</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4"
                                    tabindex="0" class="page-link">4</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5"
                                    tabindex="0" class="page-link">5</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6"
                                    tabindex="0" class="page-link">6</a></li>
                            <li class="paginate_button page-item next" id="example2_next"><a href="#"
                                    aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
{{-- <div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Quick Example</h3>
    </div>


    <form>
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div> --}}

@endsection

