<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <!-- Core -->
            <div class="sb-sidenav-menu-heading">Principal</div>
            <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard')}}">
                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>

            <!-- Catálogo -->
            <div class="sb-sidenav-menu-heading">Catálogo</div>
            <a class="nav-link {{ request()->routeIs('admin.products.*') ? 'active' : '' }}" href="{{ route('admin.products.index') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                Produtos
            </a>
            <a class="nav-link {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}" href="{{ route('admin.categories.index') }}">
                <div class="sb-nav-link-icon"><i class="fas fa-tags"></i></div>
                Categorias
            </a>

            <!-- Gestão -->
            <div class="sb-sidenav-menu-heading">Gestão</div>
            <a class="nav-link" href="#">
                <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                Pedidos
            </a>
            <a class="nav-link" href="#">
                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                Usuários
            </a>

            <!-- Configurações -->
            <div class="sb-sidenav-menu-heading">Configurações</div>
            <a class="nav-link" href="#">
                <div class="sb-nav-link-icon"><i class="fas fa-cog"></i></div>
                Configurações
            </a>
        </div>
    </div>
    <div class="sb-sidenav-footer">
        <div class="small">Logado como:</div>
        {{ Auth::user()->name ?? 'Usuário' }}
    </div>
</nav>