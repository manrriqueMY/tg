<header>
  <div class="container-fluid">
    <div class="row fd-fluid">
      <div class="col-md-3 col-sm-3 col-xs-3">
        <div class="logo slide"> <a href="/es/"> <img src="https://www.tgweb.spyrohost.com/img/logo.png" alt="Turismo en Grupo"> </a> </div>
      </div>
      <div class="col-md-9 col-sm-9 col-xs-9">
        <nav class="navbar pull-right">
          <div class="collapse navbar-collapse hidden-xs hidden-sm">
            <ul class="nav navbar-nav">
              <li class="active"><a class="pop-up" href="es/mapa"><i class="fas fa-map-marker-alt"></i> Mapa</a></li>
              <li class="active"><a href="es/user/login" class="open-login pop-up"><i class="fas fa-user"></i> Iniciar
                  sesión</a></li>
              <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                  role="button" aria-haspopup="true" aria-expanded="false">Ayuda <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="es/contact-us">Contáctanos</a></li>
                  <li><a href="es/visit-us">Visitanos</a></li>
                  <li><a href="es/feedback">Feedback</a></li>
                </ul>
              </li>
              <li class="dropdown"> <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"
                  role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-globe"></i> Idioma (Español)
                  <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li class=""><a href="en/">Inglés</a></li>
                  <li class="active"><a href="es/">Español</a></li>
                  <!--<li class="" ><a href="pt/">Portugués</a></li>-->
                </ul>
              </li>
              <li><a href="javascript:void(0)" class="p-right-0"><i class="fas fa-money-bill-alt"></i> Moneda
                  (Dolar)</a></li>
            </ul>
          </div>
          <div class="nav-mobil visible-xs visible-sm">
            <div class="menu-opcional">
              <ul>
                <li style="position: relative;"><i class="fas fa-search"></i></li>
                <li>
                  <a href="javascript:void(0)" id="menu-toggle-wrapper">
                    <div id="menu-toggle"></div>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>        
        <div class="row hidden-xs hidden-sm">
          <div class="col-md-12 carrito">
            <div class="col-xs-12 col-sm-8 col-md-6 content-search carrito">
              <div class="input-group input-group-lg hidden-xs style-search {{Request::is('/') ? 'd-flex':''}}">
                @if(!Request::is('/'))
                  <div class="input-group-btn">
                    <button type="button" class="btn btn-default b-left"><i class="fas fa-map-marker-alt"></i></button> 
                  </div>
                  <div class="search-section">
                    <input class="form-control input-lg i-left search-destino" name="destino" type="text" placeholder="¿A donde quieres ir?" autocomplete="off">
                    <ul class="filter-search ft-destino hidden"></ul>
                  </div>
                @endif
                  <div class="input-group-btn">
                @if(!Request::is('/')) 
                    <button type="button" class="btn btn-default s-text send-search">Buscar</button>
                @endif                
                    <a href="https://www.tgweb.spyrohost.com/es/cart/" class="btn btn-default btn-lg btn-carrito margin-left-15">
                      <i class="fas fa-shopping-cart"></i> Ver carrito <span id="cart_total_productos">0</span>
                    </a> 
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="box box-bottom hidden-sm hidden-xs hidden"></div>
</header>