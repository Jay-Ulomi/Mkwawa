<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="{{route('/')}}" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
       <img src="assets/img/mkwawa/Asset 18.png" alt="">
        <span>.</span>
      </a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{route('/')}}#hero" class="active">Home</a></li>
          <li class="dropdown has-dropdown"><a href="#about"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
              <li><a href="{{route('Mkwawa-History')}}">Mkwawa History</a></li>
              <li><a href="{{route('Tanzania-Tobacco-History')}}">Tobacco History in Tanzania</a></li>

            </ul>
          </li>
          <li class="dropdown has-dropdown"><a href="#services"><span>Products and services</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
              <li><a href="{{route('Leaf')}}">Leaf Growing</a></li>
              <li><a href="{{route('Process')}}">Leaf Processing</a></li>
              <li><a href="{{route('Export')}}">Export</a></li>
            </ul>
          </li>
          <li><a href="{{route('Blog')}}">Post</a></li>
          <li class="dropdown has-dropdown"><a href="#"><span>Compliance</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
              <li><a href="{{route('Terms-Conditions')}}">Terms and Conditions</a></li>
              <li><a href="{{route('Human-Right-Policy')}}">Human Rights Policy</a></li>
              <li class="dropdown has-dropdown"><a href="#"><span>Labor practices</span> <i class="bi bi-chevron-down"></i></a>
                <ul class="dd-box-shadow">
                  <li><a href="{{route('Child-Labor-Policy')}}">Child Labor</a></li>
                  <li><a href="{{route('Anti-Disc')}}">Anti Discrimination</a></li>
                  <li><a href="{{route('Women-Right')}}">Women Rights</a></li>
                </ul>
              </li>
              <li><a href="{{route('Health-Safety')}}">Health and Safety</a></li>

            </ul>
          </li>
          <li class="dropdown has-dropdown"><a href="#"><span>Environment</span> <i class="bi bi-chevron-down"></i></a>
            <ul class="dd-box-shadow">
              <li><a href="{{route('Water-Conservation')}}">Water conservation</a></li>
              <li><a href="{{route('Sustainability-Program')}}">Sustainability programe</a></li>

            </ul>
          </li>
          <li><a href="{{route('Social-Responsibility')}}">Social Responsibility</a></li>
          <li><a href="{{route('/')}}#contact">Contact</a></li>
        </ul>

        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- End Nav Menu -->



    </div>
  </header>
