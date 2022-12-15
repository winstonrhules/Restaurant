<x-app-layout>
  
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  

@include('Admin.admincss');
  <body>
    <div class="container-scroller">
            <form class="formy" method="get" action="{{url("/search")}}">
                @csrf
                <input type="text" name="search">
                <input type="submit" value="search" class="btn btn-success">
                <table class="tbl_full">
                    <tr>
                        <th>FoodName</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Total Price</th>
                    </tr>
                    @foreach ($data as $data)
                    <tr>
                        
                        <td>{{$data->foodname}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->quantity}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->contact}}</td>
                        <td>{{$data->address}}</td>
                        <td>${{$data->price * $data->quantity}}.00</td>
                      
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