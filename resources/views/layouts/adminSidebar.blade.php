<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{Auth::user()->photo ? Auth::user()->photo->photo : "http://placehold.it/400X400"}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{title_case(Auth::user()->name)}}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="active"><a href="/"><i class="fa fa-dashboard"></i> <span>Visit Website</span></a></li>

            <li class="header">Operations</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="/admin"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>


            <li>
                <a href="{{route('users.index')}}"><i class="fa fa-users"></i>Users</a>
            </li>

            <li>
                    <a href="{{route('products.index')}}"><i class="fa fa-th-list"></i>Products</a>
            </li>

            <li>
                <a href="{{route('categories.index')}}"><i class="fa fa-th-list"></i>Categories</a>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>