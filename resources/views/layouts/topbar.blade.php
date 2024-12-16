<nav class="app-header navbar navbar-expand bg-body"> <!--begin::Container-->
    <div class="container-fluid"> <!--begin::Start Navbar Links-->
        <ul class="navbar-nav">
            <li class="nav-item"> <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button"> <i class="bi bi-list"></i> </a> </li>

            <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Sample</a> </li>
            <li class="nav-item d-none d-md-block"> <a href="#" class="nav-link">Sample</a> </li>
        </ul> <!--end::Start Navbar Links--> <!--begin::End Navbar Links-->
        <ul class="navbar-nav ms-auto"> <!--begin::Navbar Search-->
            <form action="#" method="post" id="logout-form-2" class="m-0 p-0">
                @csrf
                <li class="nav-item">
                    <button type="submit" class="nav-link text-danger">Log out</button>
                </li>
            </form>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-settings" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="bi bi-person-circle"></i>
                </a>
            </li>

        </ul> <!--end::End Navbar Links-->
    </div> <!--end::Container-->
</nav> <!--end::Header--> <!--begin::Sidebar-->
