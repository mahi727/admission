<style>
    .main-header {
        text-align: center;
        position: relative;
        background: linear-gradient(to bottom, #3399ff 4%, #c0ffea 97%);
        color: white;
    }

    h1{
        text-shadow: 2px 2px rgba(64, 64, 64, 0.81);
    }
</style>

<header class="main-header" id="main__header">
    <div class="container-fluid" style="text-align: center">

        <div>
            <div class="logo col-sm-2" style="position: relative; margin-top: 12px">
                <a href="{{ route('home') }}"><img id="iitlogo-header" src="{{ asset('dist/img/iitlogo.png')}}" alt="IIT Logo"></a>
            </div>
            <div class="col-sm-8" style="text-align: center; margin-top: 10px;">
                <h1><b>PGDIT Admission System</b></h1>
            </div>
        </div>

        <div class="container-fluid">
            @if (!Auth::check())
                <div class="hide_div_admin col-sm-3 pull-right">
                    <nav class="nav navbar-nav pull-right" >
                        <a href="{{ route('admin.login') }}" class="btn btn-light" title="apply" style="color:white; text-shadow: 2px 2px rgba(119, 119, 119, 0.81)">Admin Login</a>
                    </nav>
                </div>
            @else
                <div class="hide_div col-sm-3 pull-right ">
                    <nav class="navbar">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('change_password') }}">Change Password</a></li>
                        <li><a href="{{ route('logout') }}" class="btn btn-light" title="logout">Logout</a></li>
                    </ul>
                    </nav>
                </div>
            @endif
        </div>

    </div>

</header>
