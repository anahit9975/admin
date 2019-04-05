 <!-- Content Header (Page header) -->
    <form method="post" action="{{url('/photo')}}" enctype="multipart/form-data">
@extends('layouts.admin')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Gallary</h1>
            @if(count($errors)>0)
                <div class="alert alert-danger">
                  Upload Validation Error<br><br>
                  <ul>
                    @foreach($errors->all() as $error)
                    <li> {{$error}}</li>
                    @endforeach
                  </ul>
                </div>
            @endif
            @if($message = Session::get('success'))
            <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">x</button>
              <strong>{{$message}}</strong>
            </div>
            
            @endif
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Gallary</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
      <section class="content">
         <!-- Content Header (Page header) -->
    <form method="post" action="{{url('/admin/photo')}}" enctype="multipart/form-data">

        {{ csrf_field() }}
        <div class="form-group">
            <table class="table">
                <tr>
                    <td width="40%" align="right"><label>Select File for Upload</label></td>
                    <td width="30"><input type="file" name="select_file" /></td>
                    <td width="30%" align="left"><input type="submit" name="upload" class="btn btn-primary" value="Upload"></td>
                </tr>

            </table>
        </div>
    </form>
      <div class="container-fluid">
       
      </div>  
    </section>
@endsection
