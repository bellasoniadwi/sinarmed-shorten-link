<!--  Header Start -->
<header class="app-header">
    <nav class="navbar navbar-expand-lg navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item d-block d-xl-none">
          <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
            <i class="ti ti-menu-2"></i>
          </a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link nav-icon-hover" href="javascript:void(0)">
            <i class="ti ti-bell-ringing"></i>
            <div class="notification bg-primary rounded-circle"></div>
          </a>
        </li> --}}
      </ul>
      <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
          {{-- <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank" class="btn btn-primary">Download Free</a> --}}
          <li class="nav-item dropdown">
            <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
              aria-expanded="false">
              <img src="{{ asset('styleAdmin/images/profile/sinarmed-1.png')}}" alt="" width="35" height="35" class="rounded-circle">
            </a>
            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
              <div class="message-body">
                {{-- <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                  <i class="ti ti-user fs-6"></i>
                  <p class="mb-0 fs-3">My Profile</p>
                </a>
                <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                  <i class="ti ti-mail fs-6"></i>
                  <p class="mb-0 fs-3">My Account</p>
                </a>
                <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                  <i class="ti ti-list-check fs-6"></i>
                  <p class="mb-0 fs-3">My Task</p>
                </a> --}}
                {{-- <a href="javascript:void(0)" class="btn btn-outline-danger mx-3 mt-2 d-block logoutButton" id="logoutButton">Logout</a> --}}
                <a href="{{route('logout')}}" class="btn btn-outline-danger mx-3 mt-2 d-block logoutButton" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                <form action="{{route('logout')}}" id="logout-form" method="POST" class="d-none">
                  @csrf
              </form>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!--  Header End -->

@section('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
      const logoutButton = document.getElementById('logoutButton');
  
      if (logoutButton) {
        logoutButton.addEventListener('click', function() {
          fetch(`{{ route('logout') }}`, {
            method: 'POST',
            headers: {
              'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
          })
          .then(function(response) {
            if (response.ok) {
              window.location.href = '/';
            } else {
              console.error('Gagal logout');
            }
          })
          .catch(function(error) {
            console.error('Terjadi kesalahan:', error);
          });
        });
      }
    });
  </script>  
@endsection