<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>General</h3>
    <ul class="nav side-menu">
      <li><a href="{{route('index')}}"><i class="fa fa-home"></i> 主页 </a> </li>
      <li><a><i class="fa fa-book"></i> 账户信息 <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('users.edit',1)}}">修改信息</a></li>
          <li><a href="{{route('users.password_edit',1)}}">修改密码</a></li>
        </ul>
      </li>

      <li><a><i class="fa fa-male"></i> 个人资料 <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="{{route('persons.person_edit',1)}}">个人身份认证</a></li>
          <li><a href="{{route('persons.address_edit',1)}}">地址信息认证</a></li>
          <li><a href="{{route('persons.bank_edit',1)}}">银行信息认证</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <div class="menu_section">
    <h3>Live On</h3>
    <ul class="nav side-menu">
      <li><a><i class="fa fa-sitemap"></i> 三级分类样例 <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="#level1_1">Level One</a>
            <li><a>Level One<span class="fa fa-chevron-down"></span></a>
              <ul class="nav child_menu">
                <li class="sub_menu"><a href="level2.html">Level Two</a>
                </li>
                <li><a href="#level2_1">Level Two</a>
                </li>
                <li><a href="#level2_2">Level Two</a>
                </li>
              </ul>
            </li>
            <li><a href="#level1_2">Level One</a>
            </li>
          </li>
        </ul>
      </li>
    </ul>
  </div>

  </div>
  <!-- /sidebar menu -->
