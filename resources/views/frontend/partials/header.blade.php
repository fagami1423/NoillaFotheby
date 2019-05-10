<header>
       
        <div id="top-header">
            <div class="container">
               
                <ul class="header-links pull-right">
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                    <li><a href="#"><i class="fa fa-user-o"></i> Profile</a></li>
                    <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    @endif
                    
                </ul>
            </div>
        </div>
        <!-- /TOP HEADER -->

        <!-- MAIN HEADER -->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-4">
                        <div class="header-logo">
                            <a href="/" class="logo">
                                <img src="/images/logo.jpg" alt="">
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- SEARCH BAR -->
                    <div class="col-md-5">
                        <div class="header-search">
                        <form action="{{route('search.items')}}" method="GET">
                        {{ csrf_field() }}

                                <select name="cat_id" class="input-select">
                                    <option value="">All Categories</option>
                                    <option value="1">Drawings</option>
                                    <option value="2">Paintings</option>
                                    <option value="3">Photographs</option>
                                    <option value="4">Sculptures</option>
                                    <option value="5">Carvings</option>
                                </select>
                                <input type="text" name="name" class="input" placeholder="Search here">
                                <input type="submit" Value="Search" class="search-btn">
                            </form>
                        </div>
                    </div>
                    
                
                <!-- row -->
            </div>
            
            <!-- container -->
        </div>

        
            </div>
        <!-- /MAIN HEADER -->
    </header>