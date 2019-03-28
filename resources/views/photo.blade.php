
@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <form method="post" action="{{url('/photo')}}" enctype="multipart/form-data">
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
@endsection
