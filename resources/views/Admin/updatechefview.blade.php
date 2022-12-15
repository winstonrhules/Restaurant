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
        <form action="{{url("/updatechef", $data->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <table class="tbl_30">
                <tr>
                    <td><label>Name</label></td>
                    <td><input type="text" name="name" value="{{$data->name}}" required></td>
                <tr>  
                    <tr>
                        <td><label>Title</label></td>
                        <td><input type="text" name="title" value="{{$data->title}}" required></td>
                    <tr>  
                        <tr>
                            <td><label> Old Image</label></td>
                            <td><img width="100px" height="50px" src="/chefimage/{{$data->image}}"></td>
                        <tr> 
                            <tr>
                                <td><label>Image</label></td>
                                <td><input type="file" name="image" required></td>
                            <tr>  
                            <tr>
                                <td colspan="2"><br><input type="submit" name="submit" value="Update Chef" class="btn-primary"></td>
                            <tr>  
            </table>
        </form>

     @include('Admin.navbaradmin');
    
   
  
    @include('Admin.adminscript');
    </div>
  </body>
</html>