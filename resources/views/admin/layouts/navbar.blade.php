<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{route('admin.dashboard')}}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('front.homepage')}}">
                <i class="icon-globe menu-icon"></i>
                <span class="menu-title">Visit Website</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#card-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="ti-credit-card menu-icon"></i>
                <span class="menu-title">Card</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="card-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">Create Card</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#">Edit Card</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('admin.card.selection')}}">Card Selection</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">UI Elements</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="#">Buttons</a></li>
                    <li class="nav-item"> <a class="nav-link" href="@">Dropdowns</a></li>
                </ul>
            </div>
        </li>
    </ul>
</nav>
