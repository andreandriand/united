<nav class="navbar navbar-expand-lg bg-carnelian navbar-dark">
    <div class="container">
        <a class="navbar-brand fw-bolder" href="/"><img src="img/emyu.png" alt="Logo Emyu" width="50"> Manchester
            United</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="{{ $title === 'Beranda | Manchester United' ? 'nav-link active' : 'nav-link' }}"
                        href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="{{ $title === 'Sejarah | Manchester United' ? 'nav-link active' : 'nav-link' }}"
                        href="/sejarah">Sejarah</a>
                </li>
                <li class="nav-item">
                    <a class="{{ $title === 'Berita | Manchester United' ? 'nav-link active' : 'nav-link' }}"
                        href="/berita">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="{{ $title === 'Jadwal | Manchester United' ? 'nav-link active' : 'nav-link' }}"
                        href="/jadwal">Jadwal</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Squad
                    </a>
                    <ul class="dropdown-menu bg-imperial-red">
                        <li><a class="dropdown-item" href="#">Tim Utama Pria</a></li>
                        <li><a class="dropdown-item" href="#">Tim Utama Wanita</a></li>
                        <li><a class="dropdown-item" href="#">U-21</a></li>
                        <li><a class="dropdown-item" href="#">U-18</a></li>
                        <li><a class="dropdown-item" href="#">Legenda</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
