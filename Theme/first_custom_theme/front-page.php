<?php get_header() ?>

    <!-- main start -->  
    <!-- main banner start -->
    <div class="main-banner">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-sm-12">
              <div class="main-text-area">
                  <?php
                    if ( have_posts() ) : 
                      while ( have_posts() ) : the_post();
                          the_content();
                      endwhile;
                    else :
                        _e( 'Sorry, no posts matched your criteria.', 'firstcustomtheme' );
                    endif;             
                  ?>
                  <br><br><br>
                <button class="btn btn-danger">FIND OUT MORE</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    <!-- main banner end -->
</div>
    <div class="main">
      <!-- feature start -->
      <section id="feature">
        <div class="feature-height"></div>
        <div class="container">
          <div class="row featre-size">
            <div class="col-lg-4 col-md-4 col-sm-6 col-sx-12">
              <div class="card">
                <img class="card-img-top image1" src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/01.png" alt="">
                <div class="card-body">
                  <h5 class="card-title">Easily Customised</h5>
                  <p class="card-text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-sx-12">
              <div class="card">
                <img class="card-img-top image2" src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/02.png" alt="">
                <div class="card-body">
                  <h5 class="card-title">Responsive REady</h5>
                  <p class="card-text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-sx-12">
              <div class="card">
                <img class="card-img-top image3" src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/03.png" alt="">
                <div class="card-body">
                  <h5 class="card-title">Modern Design</h5>
                  <p class="card-text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row featre-size-2">
            <div class="col-lg-4 col-md-4 col-sm-6 col-sx-12">
              <div class="card">
                <img class="card-img-top image4" src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/04.png" alt="">
                <div class="card-body">
                  <h5 class="card-title">Clean Code</h5>
                  <p class="card-text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-sx-12">
              <div class="card">
                <img class="card-img-top image5" src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/05.png" alt="">
                <div class="card-body">
                  <h5 class="card-title">Ready to Ship</h5>
                  <p class="card-text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-sx-12">
              <div class="card">
                <img class="card-img-top image6" src="<?php echo get_template_directory_uri(); ?>/assets/images/feature/06.png" alt="">
                <div class="card-body">
                  <h5 class="card-title">Download for Free</h5>
                  <p class="card-text">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Donec ullamcorper nulla</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- feature start -->

      <!-- clients start -->
      <section id="clients">
        <div class="container-fluid p-0">
          <div class="row g-0">
            <div class="col-lg-6 col-md-6 col-sm-12 col-sx-12 left-side">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/left_image.png" alt="" class="image-fluid">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-sx-12 right-side">
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                  <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></li>
                  <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></li>
                  <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></li>
                  <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></li>
                  <li type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></li>
                </ol>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <h1>“Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec sed odio dui. Aenean eu leo quam...”</h1>
                    <p>Susan Sims, Interaction Designer at XYZ</p>
                  </div>
                  <div class="carousel-item">
                    <h1>“Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec sed odio dui. Aenean eu leo quam...”</h1>
                    <p>Susan Sims, Interaction Designer at XYZ</p>
                  </div>
                  <div class="carousel-item">
                    <h1>“Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec sed odio dui. Aenean eu leo quam...”</h1>
                    <p>Susan Sims, Interaction Designer at XYZ</p>
                  </div>
                  <div class="carousel-item">
                    <h1>“Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec sed odio dui. Aenean eu leo quam...”</h1>
                    <p>Susan Sims, Interaction Designer at XYZ</p>
                  </div>
                  <div class="carousel-item">
                    <h1>“Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec sed odio dui. Aenean eu leo quam...”</h1>
                    <p>Susan Sims, Interaction Designer at XYZ</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- clients end -->

            <!-- team start -->
            <section id="team">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6 col-sx-12">
                <div class="card">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/01.png" alt="...">
                  <div class="card-body">
                    <h1 class="card-title">Ruth Woods</h1>
                    <h4 class="card-text text-danger">Founder, CEO</h4>
                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, 
                      ut fermentum massa justo sit amet risus. Maecenas sed diam eget risus varius blandit 
                      sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                    <a>
                      <i class="fab fa-facebook-f facebook"></i>
                      <i class="fab fa-twitter"></i>
                      <i class="fab fa-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-sx-12">
                <div class="card">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/02.png" alt="...">
                  <div class="card-body">
                    <h1 class="card-title">Timothy Reed</h1>
                    <h4 class="card-text text-danger">Co-Founder, Developer</h4>
                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, 
                      ut fermentum massa justo sit amet risus. Maecenas sed diam eget risus varius blandit 
                      sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                    <a>
                      <i class="fab fa-facebook-f facebook"></i>
                      <i class="fab fa-twitter"></i>
                      <i class="fab fa-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-sx-12">
                <div class="card">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/03.png" alt="...">
                  <div class="card-body">
                    <h1 class="card-title">Victoria Valdez</h1>
                    <h4 class="card-text text-danger">UI Designer</h4>
                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, 
                      ut fermentum massa justo sit amet risus. Maecenas sed diam eget risus varius blandit 
                      sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                    <a>
                      <i class="fab fa-facebook-f facebook"></i>
                      <i class="fab fa-twitter"></i>
                      <i class="fab fa-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-sx-12">
                <div class="card">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/04.png" alt="...">
                  <div class="card-body">
                    <h1 class="card-title">Beverly Little</h1>
                    <h4 class="card-text text-danger">Data Scientist</h4>
                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, 
                      ut fermentum massa justo sit amet risus. Maecenas sed diam eget risus varius blandit 
                      sit amet non magna. Nullam quis risus eget urna mollis ornare vel eu leo.</p>
                    <a>
                      <i class="fab fa-facebook-f facebook"></i>
                      <i class="fab fa-twitter"></i>
                      <i class="fab fa-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      <!-- team end -->

      <!-- download start -->
      <section id="download">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12- col-sm-12 col-sx-12">
              <h1>Are You Ready to Start? Download Now For Free!</h1>
              <p>Fusce dapibus, tellus ac cursus commodo</p>
              <button class="btn btn-danger">DOWNLOAD HERE</button>
            </div>
          </div>
        </div>
      </section>
      <!-- download start -->
    </div>
    <!-- main end -->

<?php get_footer() ?>