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
                    <th>Phone</th>
                    <th>Guest</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Message</th>
                </tr>
                @foreach ($data as $data)
                <tr>
                    
                    <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>{{$data->guest}}</td>
                    <td>{{$data->date}}</td>
                    <td>{{$data->time}}</td>
                    <td>{{$data->message}}</td>
                  
                </tr>
                @endforeach
            </table>
         </form>
     </div>
     @include('Admin.navbaradmin');
    
    @include('Admin.adminscript');
    </div>
  </body>
</html>