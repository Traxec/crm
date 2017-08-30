<div class="navbar-default sidebar" role="navigation">
  <div class="sidebar-nav navbar-collapse">
    <ul class="nav" id="side-menu">
      <li class="sidebar-search">
        <div class="input-group custom-search-form">
          <input type="text" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button class="btn btn-default" type="button">
              <i class="fa fa-search"></i>
            </button>
          </span>
        </div>
        <!-- /input-group -->
      </li>
      <li>
        <a href="{{route('admin.index')}}"><i class="fa fa-home fa-fw"></i> 主页 </a>
      </li>
      <li>
        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li> <a href="flot.html">Flot Charts</a> </li>
          <li> <a href="morris.html">Morris.js Charts</a> </li>
        </ul>
        <!-- /.nav-second-level -->
      </li>
      <li>
        <a href="#"><i class="fa fa-sitemap fa-fw"></i> 三级分类样例 <span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
          <li> <a href="#">Second Level Item</a> </li>
          <li> <a href="#">Second Level Item</a> </li>
          <li> <a href="#">Third Level <span class="fa arrow"></span></a>
            <ul class="nav nav-third-level">
              <li> <a href="#">Third Level Item</a> </li>
              <li> <a href="#">Third Level Item</a> </li>
              <li> <a href="#">Third Level Item</a> </li>
              <li> <a href="#">Third Level Item</a> </li>
            </ul>
          </li>
        </ul>
        <!-- /.nav-second-level -->
      </li>
    </ul>
  </div>
  <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
