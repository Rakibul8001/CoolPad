<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin')}}">
    <div class="sidebar-brand-icon">
      {{-- <i class="fas fa-laugh-wink"></i> --}}
      <img src="{{asset('backend/img/logo1.png')}}" class="img-fluid" style="max-width:80px" alt="avatar.png">
    </div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="{{route('admin')}}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Banner -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
      aria-controls="collapseTwo">
      <i class="fas fa-image"></i>
      <span>Banners</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Banner Options:</h6>
        <a class="collapse-item" href="{{route('banner.index')}}">Banners</a>
        <a class="collapse-item" href="{{route('banner.create')}}">Add Banners</a>
      </div>
    </div>
  </li>
  <!-- Popup Image -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePopup" aria-expanded="true"
      aria-controls="collapseTwo">
      <i class="fas fa-image"></i>
      <span>Popup Image</span>
    </a>
    <div id="collapsePopup" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Popup Image:</h6>
        <a class="collapse-item" href="{{route('popup.index')}}">Popup Image</a>
        <a class="collapse-item" href="{{route('popup.create')}}">Add Popup Image</a>
      </div>
    </div>
  </li>
  <!-- Small Banner -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
      aria-controls="collapseThree">
      <i class="fas fa-image"></i>
      <span>Small Banners</span>
    </a>
    <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Small Banner Options:</h6>
        <a class="collapse-item" href="{{route('smallbanner.index')}}">Small Banners</a>
        <a class="collapse-item" href="{{route('smallbanner.create')}}">Add Small Banners</a>
      </div>
    </div>
  </li>
  <!-- Product Banner -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapse11" aria-expanded="true"
      aria-controls="collapseThree">
      <i class="fas fa-image"></i>
      <span>Product Banners</span>
    </a>
    <div id="collapse11" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Product Banner Options:</h6>
        <a class="collapse-item" href="{{route('productbanner.index')}}">Product Banners</a>
        <a class="collapse-item" href="{{route('productbanner.create')}}">Add Product Banners</a>
      </div>
    </div>
  </li>

  <!-- Video -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTen" aria-expanded="true"
      aria-controls="collapseFour">
      <i class="fas fa-image"></i>
      <span>Video</span>
    </a>
    <div id="collapseTen" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="{{route('video.index')}}">Video</a>
        <a class="collapse-item" href="{{route('video.create')}}">Add Video</a>
      </div>
    </div>
  </li>
  <!--End Video -->
  <!-- Location section -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEleven" aria-expanded="true"
      aria-controls="collapseFour">
      <i class="fas fa-image"></i>
      <span>Service Partner</span>
    </a>
    <div id="collapseEleven" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="{{route('location.index')}}">Location</a>
        <a class="collapse-item" href="{{route('location.create')}}">Add Location</a>
      </div>
    </div>
  </li>
  <!--End Video -->

  <!-- Testimonial -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true"
      aria-controls="collapseFour">
      <i class="fas fa-image"></i>
      <span>Testimonial</span>
    </a>
    <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="{{route('testimonial.index')}}">Testimonial</a>
        <a class="collapse-item" href="{{route('testimonial.create')}}">Add Testimonial</a>
      </div>
    </div>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider">
  <!-- Heading -->
  <div class="sidebar-heading">
    Shop
  </div>

  <!-- Categories -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#categoryCollapse" aria-expanded="true"
      aria-controls="categoryCollapse">
      <i class="fas fa-sitemap"></i>
      <span>Category</span>
    </a>
    <div id="categoryCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Category Options:</h6>
        <a class="collapse-item" href="{{route('category.index')}}">Category</a>
        <a class="collapse-item" href="{{route('category.create')}}">Add Category</a>
      </div>
    </div>
  </li>
  {{-- Products --}}
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#productCollapse" aria-expanded="true"
      aria-controls="productCollapse">
      <i class="fas fa-cubes"></i>
      <span>Products</span>
    </a>
    <div id="productCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Product Options:</h6>
        <a class="collapse-item" href="{{route('product.index')}}">Products</a>
        <a class="collapse-item" href="{{route('product.create')}}">Add Product</a>
      </div>
    </div>
  </li>
  {{-- Where to buy --}}
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#BuyCollapse" aria-expanded="true"
      aria-controls="productCollapse">
      <i class="fas fa-cubes"></i>
      <span>Where To Buy</span>
    </a>
    <div id="BuyCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Buying Options:</h6>
        <a class="collapse-item" href="{{route('where-to-buy.index')}}">Link List</a>
        <a class="collapse-item" href="{{route('where-to-buy.create')}}">Add Link</a>
      </div>
    </div>
  </li>

  {{-- Brands --}}
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#brandCollapse" aria-expanded="true"
      aria-controls="brandCollapse">
      <i class="fas fa-table"></i>
      <span>Brands</span>
    </a>
    <div id="brandCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Brand Options:</h6>
        <a class="collapse-item" href="{{route('brand.index')}}">Brands</a>
        <a class="collapse-item" href="{{route('brand.create')}}">Add Brand</a>
      </div>
    </div>
  </li>

  {{-- Shipping --}}
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#shippingCollapse" aria-expanded="true"
      aria-controls="shippingCollapse">
      <i class="fas fa-truck"></i>
      <span>Shipping</span>
    </a>
    <div id="shippingCollapse" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Shipping Options:</h6>
        <a class="collapse-item" href="{{route('shipping.index')}}">Shipping</a>
        <a class="collapse-item" href="{{route('shipping.create')}}">Add Shipping</a>
      </div>
    </div>
  </li>

  <!--Orders -->
  <li class="nav-item">
    <a class="nav-link" href="{{route('order.index')}}">
      <i class="fas fa-hammer fa-chart-area"></i>
      <span>Orders</span>
    </a>
  </li>

  <!-- Reviews -->
  <li class="nav-item">
    <a class="nav-link" href="{{route('review.index')}}">
      <i class="fas fa-comments"></i>
      <span>Reviews</span></a>
  </li>


  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading">
    News
  </div>

  <!-- Posts -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#postCollapse" aria-expanded="true"
      aria-controls="postCollapse">
      <i class="fas fa-fw fa-folder"></i>
      <span>News</span>
    </a>
    <div id="postCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">News Options:</h6>
        <a class="collapse-item" href="{{route('post.index')}}">News</a>
        <a class="collapse-item" href="{{route('post.create')}}">Add News</a>
      </div>
    </div>
  </li>

  <!-- Category -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#postCategoryCollapse"
      aria-expanded="true" aria-controls="postCategoryCollapse">
      <i class="fas fa-sitemap fa-folder"></i>
      <span>Category</span>
    </a>
    <div id="postCategoryCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Category Options:</h6>
        <a class="collapse-item" href="{{route('post-category.index')}}">Category</a>
        <a class="collapse-item" href="{{route('post-category.create')}}">Add Category</a>
      </div>
    </div>
  </li>

  <!-- Tags -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tagCollapse" aria-expanded="true"
      aria-controls="tagCollapse">
      <i class="fas fa-tags fa-folder"></i>
      <span>Tags</span>
    </a>
    <div id="tagCollapse" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Tag Options:</h6>
        <a class="collapse-item" href="{{route('post-tag.index')}}">Tag</a>
        <a class="collapse-item" href="{{route('post-tag.create')}}">Add Tag</a>
      </div>
    </div>
  </li>

  <!-- Comments -->
  <li class="nav-item">
    <a class="nav-link" href="{{route('comment.index')}}">
      <i class="fas fa-comments fa-chart-area"></i>
      <span>Comments</span>
    </a>
  </li>


  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">
  <!-- Heading -->
  <div class="sidebar-heading">
    General Settings
  </div>
  <li class="nav-item">
    <a class="nav-link" href="{{route('coupon.index')}}">
      <i class="fas fa-table"></i>
      <span>Coupon</span></a>
  </li>
  <!-- Users -->
  <li class="nav-item">
    <a class="nav-link" href="{{route('users.index')}}">
      <i class="fas fa-users"></i>
      <span>Users</span></a>
  </li>
  <!-- General settings -->
  <li class="nav-item">
    <a class="nav-link" href="{{route('settings')}}">
      <i class="fas fa-cog"></i>
      <span>Settings</span></a>
  </li>

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>