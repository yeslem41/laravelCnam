<nav class="navbar  navbar-expand-lg navbar-light bgcolors  mt-1 pr-5 topNav" id="topNav">
    <a href="#" class="navbar-brand">
    <img src="{{asset('images/cnam.png')}}" height="40" alt="CoolBrand">
  </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ">
          <li class="nav-item active">
            <a class="nav-link" href="javascript:void(0)" style="color:white">Reclamation<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle"  href="javascript:void(0)" id="navbarDropdown1" style="color:white" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Rembourser</a>
            <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown1" >
                <a class="dropdown-item " href="{{url('reclamations/rembourser/1')}}" >repondu</a>
                  <a class="dropdown-item " href="{{url('reclamations/rembourser/0')}}" id="logout" >Non repondu</a>
                
              </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"  style="color:white" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Affiliation
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item " href="{{url('reclamations/affiliation/1')}}" >repondu</a>
                  <a class="dropdown-item " href="{{url('reclamations/affiliation/0')}}" id="logout">non repondu</a>
              <div class="dropdown-divider"></div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" style="color:white" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               toutes
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item " href="{{url('reclamations/affiliation')}}" >Affiliations</a>
                  <a class="dropdown-item " href="{{url('reclamations/remboursement')}}" id="logout">Remboursement</a>
                  <a class="dropdown-item " href="{{url('reclamations')}}" >toutes</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" style="color:white" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               etat
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item " href="{{url('reclamations/etat/1')}}" >repondu</a>
                  <a class="dropdown-item " href="{{url('reclamations/etat/0')}}" id="logout">Non repondu</a>
                  
            </div></li>
            <div class="form-inline my-2 my-lg-0 " action=''>
              <input class="form-control mr-sm-2" id="NNI" type="search" placeholder="NNI" aria-label="NNI">
              <button class="butonHover mr-1 my-2 my-sm-0" id="submitNNI" type="submit">chercher</button>
            </div>
        </ul>
      <a href="{{url('histoire')}}" class="ml-auto"><button class="butonHover ">Histoire</button></a>
      </div>
    </nav>