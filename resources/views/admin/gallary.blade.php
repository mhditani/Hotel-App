<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>
   @include('admin.header')
    

   @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

<h1 style="font-weight: bolder; font-size: 40px; color:white;">Gallary</h1>
<center>

<div class="row">
@foreach($gallary as $gallary)
<div class="col-md-4">
<img style="height: 200px!important; width: 300px!important;" src="/gallary/{{$gallary->image}}">
<a class="btn btn-danger" href="{{url('delete_gallary',$gallary->id)}}">Delete Image</a>
</div>
@endforeach
</div>



<form action="{{url('upload_gallary')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div style="padding: 30px;">
        <label style="color: white; font-weight: bold;">Upload Image</label>
        <input type="file" name="image">
 
        <input class="btn btn-success"  type="submit" value="Add Image">
    </div>
</form>
</center>


        </div>
          </div>     
          </div>     






      
       @include('admin.footer')
</html>