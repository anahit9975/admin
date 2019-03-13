@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Categories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Categories</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
      <section class="content">
        
      <div class="container-fluid">
        <p>
          <a href="{{ route('admin.categories.create') }}" class="btn btn-primary"> Add new Category</a>
        </p>
        <table class="table table-bordered table-striped">
        <tr>
          <th>ID</th>
          <th>CATEGORY_NAME</th>
          <th>ACTION</th>
        </tr>  
        @foreach($categories as $c)
        <tr>
          <td>{{ $c->id }}</td>
          <td>{{ $c->category_name }}</td>
          <td><a href="{{ route('admin.categories.edit', $c->id) }}" class="btn btn-info">EDIT</a> <a href="#" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
        </table>
      </div>  
    </section>
@endsection