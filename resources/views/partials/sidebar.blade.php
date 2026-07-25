<nav class="sidebar">
    <div class="sidebar-brand">
        <i class="fas fa-book-reader"></i> Perpustakaan
    </div>
    <hr class="text-white-50 mx-3">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt mr-2"></i> Dashboard
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('kategoris.*') ? 'active' : '' }}" href="{{ route('kategoris.index') }}">
                <i class="fas fa-fw fa-tags mr-2"></i> Kategori
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('bukus.*') ? 'active' : '' }}" href="{{ route('bukus.index') }}">
                <i class="fas fa-fw fa-book mr-2"></i> Buku
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('peminjamans.*') ? 'active' : '' }}" href="{{ route('peminjamans.index') }}">
                <i class="fas fa-fw fa-exchange-alt mr-2"></i> Peminjaman
            </a>
        </li>
    </ul>
</nav>
