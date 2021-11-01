<!--Xử lý để lấy ra prefix và route để active sidebar 29/10/2021-->
@php
  $prefix = Request::route()->getPrefix();
  $route = Route::current()->getName();
  // dd($prefix);
  // dd($route);
@endphp
<!--End Xử lý để lấy ra prefix và route-->

<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href="{{ url('admin/dashboard') }}">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{ asset('backend/images/logo-dark.png') }}" alt="">
						  <h3>Trang <b>Quản trị</b></h3>
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
        <li class="{{ $route == 'dashboard'? 'active':'' }}">
          <a href="{{ url('admin/dashboard') }}">
            <i data-feather="pie-chart"></i>
			      <span>Bảng điều khiển</span>
          </a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i data-feather="grid"></i> <span>Category</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="{{ $route == 'all.category'? 'active':'' }}"><a href="{{ route('all.category') }}"><i class="ti-more"></i>All Category</a></li>
          </ul>
        </li>
       
        <li class="treeview">
          <a href="#">
            <i data-feather="book-open"></i>
            <span>Post </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
        </li>
      </ul>
    </section>
	
  </aside>