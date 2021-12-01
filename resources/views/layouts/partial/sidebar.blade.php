<div id="app">
    <div id="sidebar" class='active'>
        <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <img src="{{asset('assets/images/logo.svg')}}" alt="" srcset="">
    </div>
    <div class="sidebar-menu">
        <ul class="menu">                
            <li class='sidebar-title'>Main Menu</li>
            <li class="sidebar-item {{ Request::url() == route('dashboard') ? 'active' : '' }}">
                <a href="/" class='sidebar-link '>
                    <i data-feather="home" width="20"></i> 
                    <span>Dashboard</span>
                </a>                    
            </li>
            <li class="sidebar-item {{ Request::url() == route('penduduk.index') ? 'active' : '' }}">
                <a href="/penduduk" class='sidebar-link'>
                    <i data-feather="home" width="20"></i> 
                    <span>Penduduk</span>
                </a>                    
            </li>                      
         
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>