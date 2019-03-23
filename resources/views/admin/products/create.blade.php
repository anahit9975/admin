@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin') }}">Dashboard</a></li>
              <li class="breadcrumb-item active"> Add Product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
      <section class="content">
        
      <div class="container-fluid">
      <form method="post" action="{{ route('admin.products.store') }}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
          <!-- -->
          <div class="form-group">
            <label class="col-md-3">Product Name</label>
            <div class="col=md=6"><input type="text" name="product_name"></div>
            <div class="clearfix"></div>

             <div class="form-group">
            <label class="col-md-3">Descriptiion</label>
            <div class="col=md=6"><input type="text" name="description"></div>
            <div class="clearfix"></div>

             <div class="form-group">
            <label class="col-md-3">Price</label>
            <div class="col=md=6"><input type="text" name="price"></div>
            <div class="clearfix"></div>
          </div>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-info" value="Save">
        </div>
      </form>
      </div>  
    </section>
@endsection