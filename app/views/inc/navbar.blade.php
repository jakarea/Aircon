<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top navbar " role="navigation" style="background-color:#465056;">
    <!-- Sidebar toggle button-->
    
    
    <!-- bootstreap menu -->
    <div>
  
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    <ul class="nav navbar-nav">      
          <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Item Information <b class="caret"></b></a>
                <ul class="dropdown-menu">
                      <li><a href="{{action('inv_item_group.index')}}">Item Group</a></li>
                      <li><a href="{{action('inv_item_brand.index')}}">Item Category</a></li>
                      <li><a href="{{action('menus.index')}}">Menu</a></li>                                                       
                      <li><a href="{{action('invitems.index')}}">Item Information</a></li>
                </ul>
          </li>          
          <?php
          
           $url = url()."/auth/logout"; 
           ?>
         <li><a href="{{$url}}">Log Out</a></li>

    </ul>
    
  </div>
</div>
</nav>