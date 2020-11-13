{{-- Navbar --}}

{{-- <nav class="navbar">
  <a href="{{ url('/home') }}">
    <img src="image/Avicenna.png">
  </a>

  <ul>
    <li><a href="" class="">Info Kesehatan  <i class="fas fa-caret-down"></i></a></li>
    <li><a href="" class="">Info Penyakit   <i class="fas fa-caret-down"></i></a></li>
    <li><a href="" class="">Info Obat   <i class="fas fa-caret-down"></i></a></li>
    <li><a href="#" class="data-model" data-toggle="modal" data-target="#loginModal"><i class="fa fa-sign-in-alt text-body"></i>   <span>Masuk</span></a></li>
  </ul>

  <div class="menu-toggle">
    <input type="checkbox" />
    <span></span>
    <span></span>
    <span></span>
  </div>

</nav>

<script src="{{ asset('js/script.js') }}"></script> --}}


{{-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid"> 
      <a class="navbar-brand" href="{{ url('/home') }}">
        <img class="image" src="image/Avicenna.png">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown {{ Request::is('/', 'kesehatan') ? 'active' : '' }}">
            <a class="nav-link text-body" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Info Kesehatan
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{ url('/') }}">Informasi Hidup Sehat</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ url('/kesehatan') }}">Nutrisi & Makanan</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Info Kesehatan Terbaru</a>
            </div>
          </li>
          
          <li class="nav-item dropdown drop2">
            <a class="nav-link text-body" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Info Penyakit
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Gejala</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Cara Mengatasi</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Obat</a>
            </div>
          </li>

          <li class="nav-item dropdown drop3">
            <a class="nav-link text-body" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Info Obat
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="#">Detail Obat</a>
            </div>
          </li>
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Masuk <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#" data-toggle="modal" data-target="#loginModal">Admin</a></li>
            </ul>
          </li>
        </ul>
    </div>
   </div>
  </nav> --}}
  {{-- end Navbar --}}

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
      <a class="navbar-brand" href="{{ url('/') }}">
        <img class="image" src="image/images3.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown {{ Request::is('/', 'kesehatan') ? 'active' : '' }}">
              <a class="nav-link text-body dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Info Kesehatan
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item {{ Request::is('infohidupsehat') ? 'active' : '' }}" href="{{ url('/infohidupsehat') }}">Informasi Hidup Sehat</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item {{ Request::is('nutrisi_makanan') ? 'active' : '' }}" href="{{ url('/nutrisi_makanan') }}">Nutrisi & Makanan</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item {{ Request::is('infokesehatanterbaru') ? 'active' : '' }}" href="{{ url('/infokesehatanterbaru') }}">Info Kesehatan Terbaru</a>
              </div>
            </li>
            <li class="nav-item dropdown drop2">
              <a class="nav-link text-body dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Info Penyakit
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item {{ Request::is('gejalapenyakit') ? 'active' : '' }}" href="{{ url('/gejalapenyakit') }}">Gejala Penyakit</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item {{ Request::is('caramengatasi') ? 'active' : '' }}" href="{{ url('/caramengatasi') }}">Cara Mengatasi</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item {{ Request::is('infoobat') ? 'active' : '' }}" href="{{ url('/infoobat') }}">Obat</a>
              </div>
            </li>
            <li class="nav-item dropdown drop3">
              <a class="nav-link text-body dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Info Obat
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item {{ Request::is('detailobat') ? 'active' : '' }}" href="{{ url('/detailobat') }}">Detail Obat</a>
              </div>
            </li>
            <li class="nav-item">
              <a href="#" class="btn" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Masuk
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a href="#" type="submit" class="dropdown-item" data-toggle="modal" data-target="#loginModal">Admin</a>
              </div>
            </li>
          </ul>
      </div>
   </div>
  </nav>

