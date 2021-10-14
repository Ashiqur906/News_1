<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link ml-3">
      <img src="{{asset('assets/admin/dist/img/avatar5.png')}}"
           alt="shapla media"
           class="brand-image img-circle elevation-3 ml-5"
           style="opacity: .9"><br>
      <span style="margin-left:rem " class="brand-text font-weight-light">{{Auth::user()->name}}</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="{{route('frontend.home')}}" class="nav-link">
              <i class="fas fa-globe"></i>
              <p>
                Website
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>    
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('home')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
            
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-tachometer-alt"></i>
              <p>
                Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('category.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Category List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('category.add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Category</p>
                </a>
              </li>
            
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-tachometer-alt"></i>
              <p>
                Tag
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('tag.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tag List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('tag.add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Tag</p>
                </a>
              </li>      
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-tachometer-alt"></i>
              <p>
                Genre
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                {{-- <a href="{{route('genre.index')}}" class="nav-link"> --}}
                  <i class="far fa-circle nav-icon"></i>
                  <p>Genre List</p>
                </a>
              </li>
              <li class="nav-item">
                {{-- <a href="{{route('genre.add')}}" class="nav-link"> --}}
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Genre</p>
                </a>
              </li>     
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-tachometer-alt"></i>
              <p>
                Slider
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('banner.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Slider List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('banner.add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Slider</p>
                </a>
              </li>    
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-photo-video"></i>
              <p>
                Media 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('media.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Media List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('media.add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Media</p>
                </a>
              </li>      
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-id-badge"></i>
              <p>
                Profile 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('people.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('people.add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Profile</p>
                </a>
              </li>      
              <!-- <li class="nav-item">
                <a href="{{route('people.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Team List</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="{{route('team.add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Team Profile</p>
                </a>
              </li>      
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-tachometer-alt"></i>
              <p>
                Role 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('role.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Role List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('role.add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Role</p>
                </a>
              </li>    
            </ul>
          </li>        
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-images"></i>
              <p>
                Gallery Image
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('mediaimage.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Image List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('mediaimage.add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Image For Specific Media</p>
                </a>
              </li>
            
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="far fa-address-card"></i>
              <p>
                About
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('about.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('about.add')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>    
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="far fa-newspaper"></i>
              <p>
                Press Releases
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>    
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>      
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>