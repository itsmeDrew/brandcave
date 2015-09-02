<div class='blurred-container'>
<div id="navbar-full">
    <div id="navbar">
    <!--
        navbar-default can be changed with navbar-ct-blue navbar-ct-azzure navbar-ct-red navbar-ct-green navbar-ct-orange
        -->
        <nav class="navbar navbar-ct-blue navbar-transparent navbar-fixed-top" role="navigation">

          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo get_permalink(4); ?>"><img class="unveil" src="<?php bloginfo(template_url); ?>/img/logo.png"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

              <ul class="nav navbar-nav navbar-right">
                <!-- <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Capabilities <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="capabilities/inbound-marketing.html">Inbound Marketing</a></li>
                        <li><a href="capabilities/video-production.html">Video Production</a></li>
                        <li><a href="capabilities/web-development.html">Web Development</a></li>
                        <li><a href="capabilities/branding-solutions">Branding Solutions</a></li>
                      </ul>
                </li> -->
                  <?php wp_list_pages('sort_column=menu_order&depth=2&title_li='); ?>
                  <li><p>1 (800) 561-8790</p></li>
               </ul>

            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
        <div class="motto">
        <h3>We Love To</h3>
        <h1>Create Digital Experiences</h1>
        <p>Our clients love us because we integrate video, design, web development and content creation into comprehensive marketing strategies.</p>
        <h4><a a href="//fast.wistia.net/embed/iframe/g8uzytxr8v?popover=true" class="wistia-popover[height=506,playerColor=299abe,width=900]">watch video</a></h4>
     </div>
            <div class="down-button">
                <a href="#one"><img class="unveil" src="<?php bloginfo(template_url); ?>/img/Down-Arrow.png"></a>
            </div>
        </div>
        </div>
        </div>
    </div><!--  end navbar -->
</div> <!-- end menu-dropdown -->