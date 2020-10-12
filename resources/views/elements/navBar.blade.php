<nav class="navbar  navbar-expand-lg navbar-light mt-1 pr-5  topNav bgcolors" id="topNav" >
  <a href="#" class="navbar-brand">
  <img src="{{asset('images/cnam.png')}}" height="40" alt="CoolBrand">
</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav ">
        <li class="nav-item active bgcol  ">
          <a class="nav-link " href="javascript:void(0)" style="color:white">Principale<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle bgcol"  href="javascript:void(0)" style="color:white" id="navbarDropdown1" role="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Tri par moi</a>
          <div class="dropdown-menu text-center" aria-labelledby="navbarDropdown1" >
            <a class="dropdown-item " href="{{url('month/1')}}"  >Janvier</a>
            <a class="dropdown-item " href="{{url('month/2')}}">Février</a>
            <a class="dropdown-item " href="{{url('month/3')}}"  >Mars</a>
            <a class="dropdown-item " href="{{url('month/4')}}">Avril</a>
            <a class="dropdown-item " href="{{url('month/5')}}"  >Mai</a>
            <a class="dropdown-item " href="{{url('month/6')}}">Juin</a>
            <a class="dropdown-item " href="{{url('month/7')}}"  >Juillet</a>
            <a class="dropdown-item " href="{{url('month/8')}}">Aout</a>
            <a class="dropdown-item " href="{{url('month/9')}}"  >Septembre</a>
            <a class="dropdown-item " href="{{url('month/10')}}">Octobre</a>
            <a class="dropdown-item " href="{{url('month/11')}}"  >Novembre</a>
            <a class="dropdown-item " href="{{url('month/12')}}">Décembre</a>
              <div class="dropdown-divider"></div>
            <input type="month" id="monthspecific">
             <input type="button" class="mt-1 btn btn-light" id="submitbutton" value="ok">
            </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" style="color:white" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             tri par statut
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item " href="{{url('histoire/1')}}"  id="login">Connecté</a>
            <a class="dropdown-item " href="{{url('histoire/0')}}" id="logout"> Non connecté</a>
            <div class="dropdown-divider"></div>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" style="color:white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             tri par année
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <div class="text-center mt-1"><input type="text" id="yearspecific" class="text-center"></div>
            <div class="text-center mt-1"><button type="button" class="btn btn-light"  id="submitbuttonyear" >ok</button></div>
            <div class="dropdown-divider"></div>
          </div>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">غير متاح</a>
        </li> --}}
      </ul>
    <a href="{{url('reclamations')}}" class="ml-auto"><button class="butonHover" >reclamations</button></a>
      {{-- <form class="form-inline my-2 my-lg-0 ml-auto" action='kkkk'>
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success mr-1 my-2 my-sm-0" type="submit">بحث</button>
      </form> --}}
    </div>
  </nav>