@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Product</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin') }}">Dashboard</a></li>
              <li class="breadcrumb-item active"> Edit Product</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
      <section class="content">
          <!--edit products form-->
          
          
           @foreach($products as $pr)
      <div class="container-fluid">
<!--       <form method="post" action="{{ route('admin.products.update', $pr->id ) }}" enctype="multipart/form-data"> -->
        <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
                               {{ Form::open(array(
                                    'url' => "/admin/products/update/$pr->id",
                                    'method' => 'PUT')) }}
{{ csrf_token() }}


        <!--  @method('PATCH') -->
        <div class="row">
         
          <div class="form-group">
            <label class="col-md-3">Product Name</label>
            <div class="col=md=6">
              <input type="text" name="name" class="form-control" value="{{ $pr->name }}"></div>
            <div class="clearfix"></div>

             <div class="form-group">
            <label class="col-md-3">Description</label>
            <div class="col=md=6"> 
              <textarea name="description" class="form-control" >
                {{ $pr->description }}
              </textarea> 
            </div>
            <div class="clearfix"></div>
            
             <div class="form-group">
            <label class="col-md-3">Price</label>
            <div class="col=md=6">
              <input type="text" name="price" class="form-control" value="{{ $pr->price }}"></div>
            <div class="clearfix"></div>

            @if($pr->image!='')
              <div class="form-group">
                <label class="col-md-3">Image</label>
                <div class="col=md=6"> 
                  <input type="file" name="image">
                </div>
                <div class="clearfix">
                <div class="col=md=6">
                  <img src="{{ asset('storage/productImage/'.$pr->image) }}" width="150">
                </div>
                </div>
            </div>
           @endif
        </div>
        @endforeach
       
        <div class="form-group">
          <input type="submit" class="btn btn-info" value="Save">
        </div>
      </form>
      </div>  
    </section>
@endsection
