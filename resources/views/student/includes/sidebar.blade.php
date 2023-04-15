<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ url('student/dashboard') }}">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        <li class="nav-item nav-category">pages</li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon mdi mdi mdi-account-multiple"></i>
                <span class="menu-title">Group</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('student/group') }}"> Group </a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#Group" aria-expanded="false" aria-controls="Group">
                <i class="menu-icon mdi mdi-application"></i>
                <span class="menu-title">Assignment</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="Group">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"><a class="nav-link" href="{{ url('student/assignment') }}">Assignment</a></li>
                </ul>
            </div>
        </li>





    </ul>
</nav>
