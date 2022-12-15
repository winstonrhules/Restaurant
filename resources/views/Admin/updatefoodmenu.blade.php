<x-app-layout>
  
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
    <head>
    <base href="/public">
   @include('Admin.admincss');
    </head>
  <body>
    <div class="container-scroller">
        <form action="{{url("/updatedfoodmenu", $data->id)}}" method="post" enctype="multipart/form-data">
           @csrf
           <table class="tbl_30">
           <tr>
               <td>Title</td>
               <td><input type="text" name="title" placeholder="title", value="{{$data->title}}" required></td>
           </tr>
           <tr>
               <td>Price</td>
               <td><input type="number" name="price" value="{{$data->price}}"required></td>
           </tr>
           <tr>
               <td> old Image</td>
               <td><img width="100px", height="10px" src="/foodimage/{{$data->image}}"></td>
           </tr>
           <tr>
            <td> New Image</td>
            <td><input type="file" name="image" required></td>
        </tr>
           <tr>
               <td>Description</td>
               <td><textarea type="text" name="description" cols="40" rows="5" required>{{$data->description}}</textarea></td>
           </tr>
           <tr>
               
               <td colspan="2"><input type="submit" name="submit" value="Update Food" class="btn-secondary"></td>
           </tr>
           </table>
       </form>
        </div>
     @include('Admin.navbaradmin');
     

     @include('Admin.adminscript');
  </body>
</html>