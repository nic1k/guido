<header>
  <nav class="navbar border-bottom  d-none d-md-block py-0">
    <div class="container">
      <ul class="nav d-flex">
        <li class="nav-item">
          <a class="nav-link my-1 py-0 px-2 ps-0 " href="#"> Blog </a>
        </li>
        <li class="nav-item">
          <a class="nav-link border-start my-1 py-0 px-2" href="#"> Regulamin </a>
        </li>
        <li class="nav-item">
          <a class="nav-link border-start my-1 py-0 px-2" href="#"> Kolejny link </a>
        </li>
      </ul>
      <ul class="nav d-flex">
        <li class="nav-item">
          <a class="nav-link my-1 py-0 px-2" href="#"><svg width="20" height="20" fill="currentColor"><use xlink:href="#facebook"></use></svg></a>
        </li>
        <li class="nav-item">
          <a class="nav-link my-1 py-0 px-2" href="#"><svg width="20" height="20" fill="currentColor"><use xlink:href="#facebook"></use></svg></a>
        </li>
        <li class="nav-item">
          <a class="nav-link my-1 py-0 px-2 pe-0" href="#"><svg width="20" height="20" fill="currentColor"><use xlink:href="#facebook"></use></svg></a>
        </li>
      </ul>
    </div>
  </nav>
  <nav class="navbar navbar-expand-md bg-body-tertiary">
    <div class="container">

      <a class="navbar-brand" href="#">
        @svg('images.logo',  '', ['aria-label' => 'Logo'])
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarSubmenu" aria-controls="offcanvasNavbarSubmenu">
                Dropdown
              </a>
            </li>
          </ul>
          <ul class="nav d-none d-md-flex mt-3">
            <li class="nav-item">
              <a class="nav-link my-1 py-0 px-2" href="#"><svg width="20" height="20" fill="currentColor"><use xlink:href="#facebook"></use></svg></a>
            </li>
            <li class="nav-item">
              <a class="nav-link my-1 py-0 px-2" href="#"><svg width="20" height="20" fill="currentColor"><use xlink:href="#facebook"></use></svg></a>
            </li>
            <li class="nav-item">
              <a class="nav-link my-1 py-0 px-2 pe-0" href="#"><svg width="20" height="20" fill="currentColor"><use xlink:href="#facebook"></use></svg></a>
            </li>
          </ul>
          <ul class="nav d-flex d-md-none">
            <li class="nav-item">
              <a class="nav-link my-1 py-0 px-2 ps-0 " href="#"> Blog </a>
            </li>
            <li class="nav-item">
              <a class="nav-link border-start my-1 py-0 px-2" href="#"> Regulamin </a>
            </li>
            <li class="nav-item">
              <a class="nav-link border-start my-1 py-0 px-2" href="#"> Kolejny link </a>
            </li>
          </ul>
          <ul class="nav d-flex d-md-none">
            <li class="nav-item">
              <a class="nav-link my-1 py-0 px-2" href="#"><svg width="20" height="20" fill="currentColor"><use xlink:href="#facebook"></use></svg></a>
            </li>
            <li class="nav-item">
              <a class="nav-link my-1 py-0 px-2" href="#"><svg width="20" height="20" fill="currentColor"><use xlink:href="#facebook"></use></svg></a>
            </li>
            <li class="nav-item">
              <a class="nav-link my-1 py-0 px-2 pe-0" href="#"><svg width="20" height="20" fill="currentColor"><use xlink:href="#facebook"></use></svg></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbarSubmenu" aria-labelledby="offcanvasNavbarSubmenuLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasLabel">Offcanvas</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      Content for the offcanvas goes here. You can place just about any Bootstrap component or custom elements here.
    </div>
  </div>

  <div class="header-mobile  d-md-none">
    <nav class="mobile-nav">
      <a href="#" class="bloc-icon">
        <svg width="20" height="20" fill="currentColor"><use xlink:href="#facebook"></use></svg>
      </a>
      <a href="#" class="bloc-icon">
        <svg width="20" height="20" fill="currentColor"><use xlink:href="#facebook"></use></svg>
      </a>
      <a href="#" class="bloc-icon">
        <svg width="20" height="20" fill="currentColor"><use xlink:href="#facebook"></use></svg>
      </a>
      <a href="#" class="bloc-icon">
        <svg width="20" height="20" fill="currentColor"><use xlink:href="#facebook"></use></svg>
      </a>
    </nav>
  </div>

</header>

