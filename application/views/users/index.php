<?php $this->load->view('users/template/header')?>

    <main class="site-content">
      <!-- Hero Section -->
      <section class="hero-section position-relative">
        <!-- Slider main container -->
        <div class="swiper swiper-hero">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide" style="background-image: url(<?php echo base_url('/assets/images/banner-slider.png')?>)"></div>
            <div class="swiper-slide" style="background-image: url(<?php echo base_url('/assets/images/banner-2.jpg')?>)"></div>
            <div class="swiper-slide" style="background-image: url(<?php echo base_url('/assets/images/banner-3.jpg')?>)"></div>
          </div>
          <!-- If we need pagination 
        <div class="swiper-pagination"></div>-->

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
        <div class="hero-section__content">
          <div class="container">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-6 justify-content-center text-center justify-content-lg-start text-lg-start">
                <p class="text--secondary bg--white px-4 py-2 d-inline-block content__subheading">UP TO 50% OFF TODAY</p>
                <h2 class="text--heading content__heading">Flat 5% extra on medicines & Enjoy FREE DELIVERY</h2>
                <p class="text--heading">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non assumenda labore velit!</p>
                <p><a href="<?php echo base_url('home/product_list');?>" class="button button__primary d-inline-block">Shop Now</a></p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Promo Section -->
      <section class="promo-section pt-5 pt-lg-0">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-4 promo-block-container">
              <div class="promo-block promo-block--1 border-radius--custom overflow-hidden position-relative">
                <div class="row justify-content-end">
                  <div class="promo-block__bg"></div>
                  <div class="col-9 col-md-7 col-lg-9 col-xl-7 promo-block__content">
                    <p class="text--xs promo-block__subheading mb-2">HOME MEDICAL SUPPLIES</p>
                    <h4 class="text--heading promo-block__heading mb-2">Portable Mesh Atomizer</h4>
                    <p class="text--heading text--xs mb-2">Starts from</p>
                    <h6><span class="promo-block__regular-price">$56.00</span><span class="promo-block__sale-price text--heading">$47.00</span></h6>
                    <a href="<?php echo base_url('home/product_list');?>" class="d-inline-block button">Shop Now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 promo-block-container">
              <div class="promo-block promo-block--2 border-radius--custom overflow-hidden position-relative">
                <div class="row justify-content-end">
                  <div class="promo-block__bg"></div>
                  <div class="col-9 col-md-7 col-lg-9 col-xl-7 promo-block__content">
                    <p class="text--xs promo-block__subheading mb-2">HOME MEDICAL SUPPLIES</p>
                    <h4 class="text--heading promo-block__heading mb-2">Portable Mesh Atomizer</h4>
                    <p class="text--heading text--xs mb-2">Starts from</p>
                    <h6><span class="promo-block__regular-price">$56.00</span><span class="promo-block__sale-price text--heading">$47.00</span></h6>
                    <a href="<?php echo base_url('home/product_list');?>" class="d-inline-block button">Shop Now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 promo-block-container">
              <div class="promo-block promo-block--3 border-radius--custom overflow-hidden position-relative">
                <div class="row justify-content-end">
                  <div class="promo-block__bg"></div>
                  <div class="col-9 col-md-7 col-lg-9 col-xl-7 promo-block__content">
                    <p class="text--xs promo-block__subheading mb-2">HOME MEDICAL SUPPLIES</p>
                    <h4 class="text--heading promo-block__heading mb-2">Portable Mesh Atomizer</h4>
                    <p class="text--heading text--xs mb-2">Starts from</p>
                    <h6><span class="promo-block__regular-price">$56.00</span><span class="promo-block__sale-price text--heading">$47.00</span></h6>
                    <a href="<?php echo base_url('home/product_list');?>" class="d-inline-block button">Shop Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- New Arrivals Product Section -->
      <section class="new-arrival-section section--padding">
        <div class="container">
          <div class="section__header d-flex align-items-center justify-content-between mb-4">
            <div class="d-flex align-items-center">
              <h3 class="text--heading section__heading me-2 mb-0">New Arrivals</h3>
              <span class="section-heading__side-divider"></span>
            </div>
            <a href="#" class="button button__primary">View All</a>
          </div>
          <div class="row" id="newArrivalProducts">
            <!-- <div class="col-6 col-md-4 col-lg-4 col-xl-3 mb-3">
                    <div class="product-card">
                        <div class="product-card__header">
                            <img src="./assets/images/dummy-product.jpg" alt="" class="product-card__thumbnail">
                            <div class="product-card__cta-container d-flex justify-content-center">
                                <a href="#" class="product-card__cta-button product-card__cta-button--wishlist">
                                    <i class="bi bi-heart-fill"></i>
                                </a>
                                <a href="#" class="product-card__cta-button product-card__cta-button--cart">
                                    <span class="cta-button__icon"><i class="bi bi-basket-fill"></i></span>
                                </a>
                                <a href="#" class="product-card__cta-button product-card__cta-button--info">
                                    <i class="bi bi-arrows-angle-expand"></i>
                                </a>
                            </div>
                            <span class="product-card__discount-value">30% Off</span>
                        </div>
                        <div class="product-card__content">
                            <div class="product-card__title">Product Title 1</div>
                            <div class="product-card__price">
                                <span class="price-regular"></span>
                                <span class="price-sale">$70.00</span>
                            </div>
                        </div>
                    </div>
                </div> -->
          </div>
        </div>
      </section>
      <!-- Second Ad Section -->
      <section class="promo-section promo-section--v2 section--padding--top-only">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-6 col-xl-8 promo-block-container">
              <div class="promo-block promo-block--4 border-radius--custom overflow-hidden position-relative">
                <div class="row justify-content-start">
                  <div class="promo-block__bg"></div>
                  <div class="col-9 col-md-7 col-lg-9 col-xl-7 promo-block__content">
                    <p class="text--xs promo-block__subheading mb-2 text--heading">HOME MEDICAL SUPPLIES</p>
                    <h4 class="text--heading promo-block__heading mb-2">Portable Mesh Atomizer</h4>
                    <p class="text--heading text--xs mb-2">Starts from</p>
                    <h6><span class="promo-block__regular-price">$56.00</span><span class="promo-block__sale-price text--heading">$47.00</span></h6>
                    <a href="<?php echo base_url('home/product_list');?>" class="d-inline-block button button__primary">Shop Now</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-6 col-xl-4 promo-block-container">
              <div class="promo-block promo-block--5 border-radius--custom overflow-hidden position-relative">
                <div class="row justify-content-start">
                  <div class="promo-block__bg"></div>
                  <div class="col-9 col-md-7 col-lg-9 promo-block__content">
                    <p class="text--xs promo-block__subheading mb-2 text--heading">HOME MEDICAL SUPPLIES</p>
                    <h4 class="text--heading promo-block__heading mb-2">Portable Mesh Atomizer</h4>
                    <p class="text--heading text--xs mb-2">Starts from</p>
                    <h6><span class="promo-block__regular-price">$56.00</span><span class="promo-block__sale-price text--heading">$47.00</span></h6>
                    <a href="<?php echo base_url('home/product_list');?>" class="d-inline-block button button__primary">Shop Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Shop By Categories Section -->
      <section class="categories-section section--padding">
        <div class="container">
          <div class="section__header d-flex align-items-center justify-content-between mb-4">
            <div class="d-flex align-items-center">
              <h3 class="text--heading section__heading me-2 mb-0">Shop By Categories</h3>
              <span class="section-heading__side-divider"></span>
            </div>
            <!-- <a href="#" class="button button__primary">View All</a> -->
          </div>
          <div class="swiper swiper-categories">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">
                <a href="#" class="category-block bg--light d-block p-3 p-md-4 border-radius--custom border-custom-1">
                  <div class="category-block__image">
                    <img src="<?php echo base_url('/assets/images/categorie-1.png');?>" alt="categorie-1" />
                  </div>
                  <div class="category-block__content">
                    <p class="text--heading m-0">Hospital Equipment</p>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#" class="category-block bg--light d-block p-3 p-md-4 border-radius--custom border-custom-1">
                  <div class="category-block__image">
                    <img src=" <?php echo base_url('/assets/images/categorie-2.png');?>" alt="" />
                  </div>
                  <div class="category-block__content">
                    <p class="text--heading m-0">Hospital Equipment</p>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#" class="category-block bg--light d-block p-3 p-md-4 border-radius--custom border-custom-1">
                  <div class="category-block__image">
                    <img src="./assets/images/categorie-3.png" alt="" />
                  </div>
                  <div class="category-block__content">
                    <p class="text--heading m-0">Hospital Equipment</p>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#" class="category-block bg--light d-block p-3 p-md-4 border-radius--custom border-custom-1">
                  <div class="category-block__image">
                    <img src="./assets/images/categorie-5.png" alt="" />
                  </div>
                  <div class="category-block__content">
                    <p class="text--heading m-0">Hospital Equipment</p>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#" class="category-block bg--light d-block p-3 p-md-4 border-radius--custom border-custom-1">
                  <div class="category-block__image">
                    <img src="./assets/images/categorie-6.png" alt="" />
                  </div>
                  <div class="category-block__content">
                    <p class="text--heading m-0">Hospital Equipment</p>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#" class="category-block bg--light d-block p-3 p-md-4 border-radius--custom border-custom-1">
                  <div class="category-block__image">
                    <img src="./assets/images/categorie-1.png" alt="" />
                  </div>
                  <div class="category-block__content">
                    <p class="text--heading m-0">Hospital Equipment</p>
                  </div>
                </a>
              </div>
              <div class="swiper-slide">
                <a href="#" class="category-block bg--light d-block p-3 p-md-4 border-radius--custom border-custom-1">
                  <div class="category-block__image">
                    <img src="./assets/images/categorie-2.png" alt="" />
                  </div>
                  <div class="category-block__content">
                    <p class="text--heading m-0">Hospital Equipment</p>
                  </div>
                </a>
              </div>
            </div>
            <!-- If we need pagination 
          <div class="swiper-pagination"></div>-->

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>
        </div>
      </section>
      <!-- Site CTA Section -->
      <section class="section--padding site-cta-section bg--dark">
        <div class="container">
          <div class="row align-items-center text-center text-lg-start">
            <div class="col-12 col-md-6 col-lg-6">
              <h3 class="text--light mb-4 mb-lg-0">Duis aute irure dolor in reprehenderit in voluptate velit esse</h3>
            </div>
            <div class="col-12 col-md-6 col-lg-6 text-lg-end">
              <a href="#" class="button button__secondary d-inline-block">Shop Now</a>
            </div>
          </div>
        </div>
      </section>
      <!-- Best Sellers Section -->
      <section class="new-arrival-section section--padding">
        <div class="container">
          <div class="section__header d-flex align-items-center justify-content-between mb-4">
            <div class="d-flex align-items-center">
              <h3 class="text--heading section__heading me-2 mb-0">Best Selling</h3>
              <span class="section-heading__side-divider"></span>
            </div>

            <a href="#" class="button button__primary">View All</a>
          </div>
          <div class="row" id="bestSellingProducts"></div>
        </div>
      </section>
      <!-- Testimonial Seciton -->
    </main>
<?php $this->load->view('users/template/footer')?>