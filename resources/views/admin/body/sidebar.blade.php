
<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="index.html">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="../images/logo-dark.png" alt="">
						  <h3><b>Smartphones</b></h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li >
          <a href="{{ url('admin/dashboard')}}">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
		  	  
		 
        <li class="header nav-small-cap">System</li>
        <li>
          <a href="{{ route('all.brand') }}">
            <i data-feather="credit-card"></i>
			      <span>Marki</span>
          </a>
        </li> 
        <li>
          <a href="/admin/products">
            <i data-feather="credit-card"></i>
			      <span>Produkty</span>
          </a>
        </li> 
        <li>
          <a href="index.html">
            <i data-feather="credit-card"></i>
			      <span>Zamówienia</span>
          </a>
        </li> 	
        
        <li>
          <a href="index.html">
            <i data-feather="credit-card"></i>
            <span>Użytkownicy</span>
          </a>
        </li> 	  		  
		<li>
          <a href="{{ route('admin.logout') }}">
            <i data-feather="lock"></i>
		      	<span>Wyloguj się</span>
          </a>
        </li> 
        
      </ul>
    </section>
	
	<div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div>
  </aside>