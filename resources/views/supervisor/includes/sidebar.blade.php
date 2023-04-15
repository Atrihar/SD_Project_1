<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="{{ url('supervisor/dashboard') }}">
        <i class="mdi mdi-grid-large menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <li class="nav-item nav-category">pages</li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <i class="menu-icon mdi mdi-account-circle-outline"></i>
        <span class="menu-title">Users</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ url('supervisor/student') }}"> Students </a></li>
        </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#Group" aria-expanded="false" aria-controls="Group">
        <i class="menu-icon mdi mdi-account-multiple"></i>
        <span class="menu-title">Groups</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="Group">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="{{ url('supervisor/completed') }}">Completed</a></li>
        </ul>
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"><a class="nav-link" href="{{ url('supervisor/running') }}">Running</a></li>
        </ul>
      </div>
    </li>
    
 



  </ul>
</nav>