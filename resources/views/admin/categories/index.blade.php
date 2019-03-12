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
          <td><a href="#" class="btn btn-info"></a>EDIT <a href="#" class="btn btn=danger"></a>Delete</td>
        </tr>
        @endforeach
        </table>
      </div>  
    </section>
@endsection