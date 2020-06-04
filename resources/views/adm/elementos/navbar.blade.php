<nav class="navbar navbar-expand-lg w-100 bg-nav justify-content-end">
  <div class=" navbar" id="header_navbar" >
    <ul class="navbar-nav mr-auto ">
      <li class="nav-item">
	  	  <a class="nav-link tc-navbar" href="#">BIENVENIDO, {{ ucfirst(Auth::user()->name) }}</a>
      </li>
    </ul>
  </div>
</nav>