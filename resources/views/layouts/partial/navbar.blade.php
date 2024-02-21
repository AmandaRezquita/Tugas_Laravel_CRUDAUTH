<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <h4>DataSiswa.com </h4>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
      <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="{{ url('home') }}">Home</a>
      </li> 
        <li class="nav-item">
        <a class="nav-link {{ Request::is('student') ? 'active' : '' }}" href="{{ url('student') }}">Student</a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ Request::is('kelas') ? 'active' : '' }}" href="{{ url('kelas') }}">Kelas</a>
        </li>
        <li class="nav-item">
        <a class="nav-link {{ Request::is('extra') ? 'active' : '' }}" href="{{ url('extra') }}">Extra</a>
        </li>   
        <li class="nav-item" >
        <a class="nav-link {{ Request::is('about') ? 'active' : '' }}" href="{{ url('about') }}">About</a>
        </li> 
        </ul>
        <ul class="navbar-nav ms-auto" style="margin-right: 70px;">
        <li class="nav-item dropdown">
    @if(auth()->check())
        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
            Hi, {{ auth()->user()->name }}
        </a>
        <ul class="dropdown-menu">
            <li>
                <a class="dropdown-item" href="#" onclick="confirmLogout()">Logout</a>
                <a class="dropdown-item" href="/dashboard">Dashboard</a>

            </li>
        </ul>
    @else
        <a class="nav-link" href="/login">Login</a>
    @endif
</li>
    </li>
</ul>
          </li>
          </ul>
          </ul>
    </div>
  </div>
</nav>   

<script>
    function confirmLogout() {
        if (confirm("Are you sure you want to logout?")) {
            window.location.href = "/logout";
        }
    }
</script>

