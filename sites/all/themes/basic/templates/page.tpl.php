<div id="page" class="<?php print $classes; ?>"<?php print $attributes; ?>>

  <!-- ______________________ HEADER _______________________ -->

  </header> <!-- /header -->

  <?php if ($main_menu): ?>
    <ul id="gn-menu" class="gn-menu-main">
      <?php print theme('links', array('links' => $main_menu, 'attributes' => array('id' => 'gn-menu', 'class' => array('gn-menu-main', 'clearfix', 'main-menu')))); ?>
    </ul>
  <?php endif; ?>

  <nav class="gn-menu-wrapper" >
    <div class="gn-scroller">
      <ul class="gn-menu">
        <li class="gn-search-item">
          <input placeholder="Search" type="search" class="gn-search">
          <a class="gn-icon gn-icon-search">
            <span>Search</span>
          </a>
        </li>
        <li>
          <a class="gn-icon gn-icon-download">Downloads</a>
          <ul class="gn-submenu">
            <li>
              <a class="gn-icon gn-icon-illustrator">Vector Illustrations</a>
            </li>
            <li>
              <a class="gn-icon gn-icon-photoshop">Photoshop files</a>
            </li>
          </ul>
        </li>
        <li>
          <a class="gn-icon gn-icon-cog">Settings</a>
        </li>
        <li>
          <a class="gn-icon gn-icon-help">Help</a>
        </li>
        <li>
          <a class="gn-icon gn-icon-archive">Archives</a>
          <ul class="gn-submenu">
            <li>
              <a class="gn-icon gn-icon-article">Articles</a>
            </li>
            <li>
              <a class="gn-icon gn-icon-pictures">Images</a>
            </li>
            <li>
              <a class="gn-icon gn-icon-videos">Videos</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>

  <!-- ______________________ MAIN _______________________ -->

  <div id="main" class="clearfix">

    <section id="content">

      <?php if ($messages || $tabs): ?>
        <div id="content-header">
          <?php print $messages; ?>
          <?php print render($page['help']); ?>

          <?php if ($tabs): ?>
            <div class="tabs"><?php print render($tabs); ?></div>
          <?php endif; ?>

        </div> <!-- /#content-header -->
      <?php endif; ?>

      <div id="content-area">
        <?php print render($page['content']) ?>
        menu-side-menu
      </div>

  </section> <!-- /content-inner /content -->

  </div> <!-- /main -->

  <!-- ______________________ FOOTER _______________________ -->

  <?php if ($page['footer']): ?>
    <footer id="footer">
      <?php print render($page['footer']); ?>
    </footer> <!-- /footer -->
  <?php endif; ?>    
</div> <!-- /page -->
