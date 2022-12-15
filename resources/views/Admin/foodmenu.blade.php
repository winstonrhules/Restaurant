<x-app-layout>
  
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
   @include('Admin.admincss');
  <body>
     <div class="container-scroller">
     <form action="{{url("/addfood")}}" method="post" enctype="multipart/form-data">
        @csrf
        <table class="tbl_30">
        <tr>
            <td>Title</td>
            <td><input type="text" name="title" placeholder="title", required></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type="number" name="price" required></td>
        </tr>
        <tr>
            <td>Image</td>
            <td><input type="file" name="image" required></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><textarea type="text" name="description" cols="40" rows="5" required></textarea></td>
        </tr>
        <tr>
            
            <td colspan="2"><input type="submit" name="submit" value="Add Food" class="btn-primary"></td>
        </tr>
        </table>
    </form>
     </div>
     <div>
     <form>
     <table class="tbl_half">
        <tr>
            <th>Title</th>
            <th>Price</th>
            <th>Description</th>
            <th>Image</th>
        </tr>

        @foreach ($data as $data)
        <tr>
            <td>{{$data->title}}</td>
            <td>{{$data->price}}</td>
            <td>{{$data->description}}</td>
            <td><img width="100px" height="50px" src="/foodimage/{{$data->image}}"></td>
            <td><a href="{{url("/deletefoodmenu", $data->id)}}" class="btn-danger">Delete</a></td>
            <td><a href="{{url("/updatefoodmenu", $data->id)}}" class="btn-secondary">Update</a></td>
        </tr>
        @endforeach
     </table>
     </form>
    </div>
  
     @include('Admin.navbaradmin');
   
    
     @include('Admin.adminscript');
  </body>
</html>