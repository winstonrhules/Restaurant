<x-app-layout>
  
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
   @include('Admin.admincss');
  <body>
     <div class="container-scroller">
     <form>
        <table class="tbl_full">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            @foreach ($data as $data)
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                @if($data->usertype=="0")
                <td><a href="{{url("/deleteusers", $data->id)}}"class="btn-danger">Delete</a></td>
                @else
                <td><a>Not Allowed</a></td>
                @endif
            </tr>
            @endforeach
           
        </table>
     </form>
     </div>
     @include('Admin.navbaradmin');
     

     @include('Admin.adminscript');
  </body>
</html>