
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
            <i data-feather="home"></i>
			<span>Strona główna</span>
          </a>
        </li>


        <li class="header nav-small-cap">System</li>
        <li>
          <a href="{{ route('all.brand') }}">
            <i data-feather="aperture"></i>
			      <span>Producenci</span>
          </a>
        </li>
        <li class="treeview">
          <a href="{{ route('view-products') }}">
            <i data-feather="shopping-bag"></i>
			      <span>Produkty</span>
          </a>
            <ul class="treeview-menu">
                <li>
                    <a href="{{ route('add.product') }}">
                        <i data-feather="plus-square"></i>
                        <span>Dodaj produkt</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('view-products') }}">
                        <i data-feather="shopping-bag"></i>
                        <span>Przeglądaj produkty</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
          <a href="{{ route('view-orders') }}">
            <i data-feather="credit-card"></i>
			      <span>Zamówienia</span>
          </a>
        </li>

        <li>
          <a href="{{ route('all-users') }}">
            <i data-feather="users"></i>
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


  </aside>
