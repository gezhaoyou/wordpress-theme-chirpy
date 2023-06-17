<?php
/*
Template Name: 404
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <?php get_header(); ?>
  
  <body data-topbar-visible="true">

    <!-- 左侧sidebar -->
    <?php get_template_part('templates/module', 'sidebar') ?>
    <!-- 顶部面包屑和搜索 -->
    <?php get_template_part('templates/module', 'topbar') ?>

    <div id="main-wrapper" class="d-flex justify-content-center">
      <div id="main" class="container pl-xl-4 pr-xl-4">
        <div class="row">
          <!-- core -->
          <div id="core-wrapper" class="col-12 col-lg-11 col-xl-9 pr-xl-4">
            <div class="post pl-1 pr-1 pl-md-2 pr-md-2">
              <div class="post-content">
                <div class="page_not_found">
                  <img src= "http://io.fifo.site/fifo-page-empty.svg"  width="250" height="250">
                  <h1>404: Page Not Found!</h1>
                <p>抱歉, 我们放错了URL或它指向的内容不存在！</p>
                <p><a href="/">返回首页</a> 尝试发现更多！或者在 <a href="/archives">归档页面</a> 查找想要的内容！</p>
                </div>
              </div>
            </div>
          </div> <!-- #core-wrapper -->
          <?php get_template_part('templates/widget','panel'); ?>
        </div><!-- #row -->
      </div>
    </div> <!-- #main-wrapper -->

    <!-- The Footer -->
    <?php get_footer(); ?>

    <?php get_template_part('templates/backtop','bar'); ?>
    <?php get_template_part('templates/soda','notification'); ?>
    <?php get_template_part('templates/js','selector'); ?>
  </body>
</html>