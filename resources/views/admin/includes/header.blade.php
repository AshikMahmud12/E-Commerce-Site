<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.html">eCommerce Site</a>
</div>
<!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-right">
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-messages">
            <li>
                <a href="#">
                   
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                  
       
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                  
             
            </li>
            <li class="divider"></li>
            <li>
                <a class="text-center" href="#">
                    
                </a>
            </li>
        </ul>
        <!-- /.dropdown-messages -->
    </li>
    <!-- /.dropdown -->
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-tasks">
            <li>
                <a href="#">
                   
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                   
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a class="text-center" href="#">
                    
                </a>
            </li>
        </ul>
        <!-- /.dropdown-tasks -->
    </li>
    <!-- /.dropdown -->
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-alerts">
            <li>
                <a href="#">
                    
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                   
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                  
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a class="text-center" href="#">
                    
                </a>
            </li>
        </ul>
        <!-- /.dropdown-alerts -->
    </li>
    <!-- /.dropdown -->
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i> {{ Auth::user()->name }} <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
            </li>
            <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
            </li>
            <li class="divider"></li>
            <li><a href="#" onclick="document.getElementById('logoutForm').submit();"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                    {{ csrf_field() }}
                </form>

            </li>
        </ul>
        <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
</ul>