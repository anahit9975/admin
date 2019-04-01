@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Products</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
      <section class="content">
        
      <div class="container-fluid">
        <p>
          <a href="{{ route('admin.products.create') }}" class="btn btn-primary"> Add new Product</a>
        </p>
        <table class="table table-bordered table-striped">
        <tr>
          <th>ID</th>
          <th>NAME</th>
          <th>DESCRIPTION</th>
          <th>ACTION</th>
        </tr>  
        @foreach($products as $p)
        @if($p->status=='active')
        <tr>
          <td>{{ $p->id }}</td>
          <td>{{ $p->name }}</td>
          <td>{{ $p->description }}</td>
          <td><a href="{{ route('admin.products.edit', $p->id) }}" class="btn btn-info">EDIT</a>
            <a href="javascript:void(0)"
            onclick="document.getElementById('del').submit();" class="btn btn-danger">Delete</a>
            
            <form id="del" action="{{ route('admin.products.destroy', $p->id) }}"
              method="post">
                @method('DELETE')
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
            </form>
          </td>
        </tr>
        @endif
        @endforeach
        </table>
      </div>  
    </section>
@endsection