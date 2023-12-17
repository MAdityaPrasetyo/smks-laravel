  <nav class="navbar navbar-expand-lg">
      <div class="container-fluid">
          <a class="navbar-brand" href="#">
              <img src="/img/smk-smart.png" width="80" height="80" />
              <p class="logo">SMKS SMART</p>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link {{ $active === 'home' ? 'active' : '' }}" href="/">Beranda</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Tentang</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link {{ $active === 'portofolio' ? 'active' : '' }}" href="/portofoliosiswa">Portofolio Siswa</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Berita</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Kontak</a>
                  </li>
              </ul>
              {{-- <button class="button" id="daftarButton">Daftar Sekarang</button> --}}
              <ul class="navbar-nav ms-auto">
                  @auth
                      <li class="tampilan nav-item dropdown">
                          <a class="nav-link text-putih dropdown-toggle" href="#" role="button"
                              data-bs-toggle="dropdown" aria-expanded="false">
                              Welcome back, {{ auth()->user()->name }}
                          </a>
                          <ul class="dropdown-menu">
                              @if (auth()->user()->isAdmin())
                                  <li><a class="dropdown-item" href="/dashboard"><i
                                              class="bi bi-layout-text-window-reverse"></i>
                                          My Dashboard</a></li>
                                  <hr class="dropdown-divider">
                              @endif
                              <li>
                                  <form action="/logout" method="post">
                                      @csrf
                                      <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>
                                          Logout</button>
                                  </form>
                              </li>
                          </ul>
                      </li>
                  @else
                      <li class="tampilan nav-item">
                          <a class="nav-link text-putih {{ $active === 'login' ? 'active' : '' }}" href="/login">
                              <i class="bi bi-box-arrow-right"></i> Login
                          </a>
                      </li>
                  @endauth
              </ul>

          </div>
      </div>
  </nav>
