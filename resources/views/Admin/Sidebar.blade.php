<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img alt="image"  src="assets/img/mkwawa/Asset 18.png" height="50px"/>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">Admin</span>
                        <span class="text-muted text-xs block">Admin<b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="profile.html">Profile</a></li>
                        <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                        <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <!-- Hidden logout form -->
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>

                    </ul>
                </div>
                <div class="logo-element">
                    Leaf
                </div>
            </li>

            <li class="{{ Request::is('index*') ? 'active' : '' }}">
                <a href="{{route('Admin')}}"><i class="fa {{ Request::is('index*') ? 'fa-home' : 'fa-th-large' }}"></i>
                    <span class="nav-label">Dashboards</span>
                </a>
            </li>

            <li class="{{ Request::is('Admin-Category') ? 'active' : '' }}">
                <a href="{{ route('Admin-Category') }}">
                    <i class="fa {{ Request::is('Admin-Category') ? 'fa-folder-open' : 'fa-diamond' }}"></i>
                    <span class="nav-label">Category</span>
                </a>
            </li>

            <li class="{{ Request::is('Admin-Add-Post') || Request::is('posts.show') ? 'active' : '' }}">
                <a href="#">
                    <i class="fa {{ Request::is('Admin-Add-Post') || Request::is('posts.show') ? 'fa-file-text' : 'fa-bar-chart-o' }}"></i>
                    <span class="nav-label">Post</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse {{ Request::is('Admin-Add-Post') || Request::is('posts.show') ? 'in' : '' }}">
                    <li class="{{ Request::is('Admin-Add-Post') ? 'active' : '' }}">
                        <a href="{{ route('Admin-Add-Post') }}">Add Post</a>
                    </li>
                    <li class="{{ Request::is('posts.show') ? 'active' : '' }}">
                        <a href="{{ route('posts.show') }}">View Posts</a>
                    </li>
                </ul>
            </li>

            <li class="{{ Request::is('Admin-Add-Event') || Request::is('events.show') ? 'active' : '' }}">
                <a href="#">
                    <i class="fa {{ Request::is('Admin-Add-Event') || Request::is('events.show') ? 'fa-calendar' : 'fa-bar-chart-o' }}"></i>
                    <span class="nav-label">Event</span>
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level collapse {{ Request::is('Admin-Add-Event') || Request::is('events.show') ? 'in' : '' }}">
                    <li class="{{ Request::is('Admin-Add-Event') ? 'active' : '' }}">
                        <a href="{{ route('Admin-Add-Event') }}">Add Event</a>
                    </li>
                    <li class="{{ Request::is('events.show') ? 'active' : '' }}">
                        <a href="{{ route('events.show') }}">View Events</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</nav>
