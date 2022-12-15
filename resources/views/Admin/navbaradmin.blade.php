<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">    
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url("/users")}}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Users</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="{{url("/foodmenu")}}" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">FoodMenu</span>
          <i class="menu-arrow"></i>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url("/adminchef")}}">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
          <span class="menu-title">Chefs</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url("/adminreservation")}}">
          <span class="menu-icon">
            <i class="mdi mdi-table-large"></i>
          </span>
          <span class="menu-title">Reservation</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url("/order")}}">
          <span class="menu-icon">
            <i class="mdi mdi-table-large"></i>
          </span>
          <span class="menu-title">Order</span>
        </a>
      </li>
    </ul>
  </nav>