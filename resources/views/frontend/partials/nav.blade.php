<nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV -->
                <ul class="main-nav nav navbar-nav">
                    <li><a href="/">Home</a></li>
                    <li><a href="/events">Events</a></li>
                    <li><a href="/items">Items</a></li>
                    @if(!Auth::guest() && auth()->user()->client_status == 'seller')
                        <li><a href="/auction/index">Dashboard</a></li>
                    @else
                        <li><a href="/"></a></li>
                    @endif
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>

   
