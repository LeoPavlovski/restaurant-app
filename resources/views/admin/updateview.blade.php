<x-app-layout>
 
</x-app-layout>



<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    <!-- Required meta tags -->
      @include("admin.admincss")
   
  </head>
  <body>

   <div class="container-scroller">
  
  @include("admin.navbar")
 <div style="position:relative;top:60px;right-150px">
    <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">

    @csrf
        <div>
            <label>Title</label>
            <input style="color:blue" type="text" name="title" value="{{$data->title}}" required>
</div>

  <div>
            <label>Price</label>
            <input style="color:blue"type="num" name="price" value="{{$data->price}}" required>
</div>


  <div>
            <label>Description</label>
            <input style="color:blue"type="text" name="description" value="{{$data->description}}" required>
</div>

 <div>
            <label>old Image</label>
            <img height="200" width="200" src="/foodimage/{{$data->image}}" alt="">
</div>

  <div>
            <label>New Image</label>
            <input  type="file" name="image" required>
</div>


  <div>
            
            <input  type="submit" style="background-color:green;padding:20px;margin-top:20px" value="Save">
</div>
</form>
</div>
        <!-- main-panel ends -->

        @include("admin.adminscript")
 
  </body>
</html>