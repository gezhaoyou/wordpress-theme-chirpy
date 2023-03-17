<!-- The Top Bar -->
<div id="topbar-wrapper">
    <div id="topbar"
         class="container d-flex align-items-center justify-content-between h-100 pl-3 pr-3 pl-md-4 pr-md-4">
    <span id="breadcrumb">
        <!-- 面包屑导航 -->
        <?php if(is_single()) {
            echo "<span><a href='";
            echo get_bloginfo('url');
            echo "'>首页</a></span>";

            echo "<span>";
            the_title();
            echo " </span>";          
        } else {
            echo "<span>首页</span>";  
        }?>   
    </span><!-- endof #breadcrumb -->

        <i id="sidebar-trigger" class="fas fa-bars fa-fw"></i>

        <div id="topbar-title">
            文章
        </div>

        <i id="search-trigger" class="fas fa-search fa-fw"></i>
        <span id="search-wrapper" class="align-items-center">
      <i class="fas fa-search fa-fw"></i>
      <input class="form-control" id="search-input" type="search"
             aria-label="search" autocomplete="off" placeholder="搜索...">
    </span>
        <span id="search-cancel">取消</span>
    </div>

</div>
