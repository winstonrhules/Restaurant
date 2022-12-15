<x-app-layout>
  
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
   @include('Admin.admincss');
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('Admin.navbaradmin');
        <!-- partial -->
        
    <!-- Plugin js for this page -->
   
    <!-- End custom js for this page -->
    @include('Admin.adminscript');
    </div>
  </body>
</html>