<x-app-layout>
  
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
   @include('Admin.admincss');
  <body>
    <div class="container-scroller">
        <form action="{{url("/addchef")}}" method="post" enctype="multipart/form-data">
            @csrf
            <table class="tbl_30">
                <tr>
                    <td><label>Name</label></td>
                    <td><input type="text" name="name" placeholder="Enter name" required></td>
                <tr>  
                    <tr>
                        <td><label>Title</label></td>
                        <td><input type="text" name="title" placeholder="Enter title" required></td>
                    <tr>  
                        <tr>
                            <td><label>Image</label></td>
                            <td><input type="file" name="image" required></td>
                        <tr>  
                            <tr>
                                <td colspan="2"><br><input type="submit" name="submit" value="Add Chef" class="btn-primary"></td>
                            <tr>  
            </table>
        </form>
           <table class="tbl_chef">
            <tr>
                <th>Name</th>
                <th>Title</th>
                <th>Image</th>
            </tr>
            @foreach ($data as $data)
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->title}}</td>
                <td><img width="100px" height="50px" src="/chefimage/{{$data->image}}"></td>
                <td>
                <a href="{{url("/deletechef", $data->id)}}" class="btn-danger">Delete Chef</a>
                <a href="{{url("/updatechefview", $data->id)}}" class="btn-secondary">Update Chef</a>
            </td>
            </tr>
            @endforeach
           </table>
    </div>
     @include('Admin.navbaradmin');
     
    @include('Admin.adminscript');
    
  </body>
</html>