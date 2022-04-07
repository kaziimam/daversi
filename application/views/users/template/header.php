<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo base_url('/assets/vendors/bootstrap-5.0.2-dist/css/bootstrap.min.css');?>">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,400;1,500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php echo base_url('/assets/vendors/price-range-slider/price-range-slider.css');?>"/>
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/style.css');?>" />
    <title>Daversi Medical | Home</title>
  </head>
  <body class="<?php echo $this->uri->segment(2)?>">
    <!-- Site Header -->
    <header class="site-header bg--white">
      <div class="site-header__top bg--primary">
        <div class="container d-flex justify-content-end justify-content-lg-between py-2 py-lg-3">
          <p class="text--sm text--light m-0 d-none d-lg-inline-block">Orders may be processed with slight delay.</p>
          <ul class="quick-links-menu d-flex justify-content-end">
            <li class="quick-links-menu__item">
              <a href="#" class="quick-links-menu__item--link d-none d-md-inline-block">Today's Deal</a>
            </li>
            <li class="quick-links-menu__item">
              <a href="#" class="quick-links-menu__item--link d-none d-md-inline-block">Top Offers</a>
            </li>
            
            <li class="quick-links-menu__item">
              <a href="<?php echo base_url('home/register')?>" class="quick-links-menu__item--link">Login/Register</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="site-header__bottom">
        <div class="container py-3 d-flex justify-content-between align-items-center">
          <div class="d-flex align-items-center">
            <a href="<?php echo base_url();?>" class="site-header__logo--link d-inline-block me-lg-4">
              <img src="<?php echo base_url('/assets/images/Daversi-Medical-Logo.png');?>" alt="Logo" class="site-header__logo" />
            </a>
            <ul class="site-header-nav-menu d-none d-lg-flex">
              <li class="site-header-nav-menu__item">
                <a href="<?php echo base_url();?>" class="site-header-nav-menu__item--link active">Home</a>
              </li>
              <li class="site-header-nav-menu__item">
                <a href="<?php echo base_url('home/about_us');?>" class="site-header-nav-menu__item--link">About Us</a>
              </li>
              <li class="site-header-nav-menu__item">
                <a href="<?php echo base_url('home/product_list');?>" class="site-header-nav-menu__item--link">Shop</a>
              </li>
              <li class="site-header-nav-menu__item">
                <a href="<?php echo base_url('home/faq');?>" class="site-header-nav-menu__item--link">FAQs</a>
              </li>
              <li class="site-header-nav-menu__item">
                <a href="<?php echo base_url('home/contact_us');?>" class="site-header-nav-menu__item--link">Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="d-flex align-items-center">
            <div class="site-header__cta-container d-flex align-items-center">
              <a href="#" class="cta-button cta-button--search" id="siteHeaderSearchButton">
                <span class="cta-button__icon"><i class="bi bi-search"></i></span>
              </a>
              <a href="<?php echo base_url('home/cart')?>" class="cta-button cta-button--cart">
                <span class="cta-button__icon"><i class="bi bi-basket-fill"></i></span>
                <span class="cta-button__count-val">2</span>
              </a>
              <a href="<?php echo base_url('home/wishlist')?>" class="cta-button cta-button--wishlist">
                <span class="cta-button__icon"><i class="bi bi-heart-fill"></i></span>
                <span class="cta-button__count-val">2</span>
              </a>
              <a href="#" class="site-header__contact-button d-none d-md-flex align-items-center d-lg-none d-xl-flex">
                <img src="<?php echo base_url('/assets/images/contact-header-icon.png');?>" alt="contact button icon" class="contact-button__icon" />
                <div class="contact-button__content ms-1">
                  <h6 class="text--primary m-0">415-205-5550</h6>
                  <p class="text--para text--xs m-0">24/7 Emergency Phone</p>
                </div>
              </a>
            </div>
            <button class="site-header__button--nav-toggler d-lg-none ms-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavigation" aria-controls="offcanvasExample">
              <i class="bi bi-list"></i>
            </button>
          </div>
        </div>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavigation" aria-labelledby="offcanvasExampleLabel">
          <div class="offcanvas-header justify-content-end">
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="site-header-nav-menu">
              <li class="site-header-nav-menu__item">
                <a href="<?php echo base_url();?>" class="site-header-nav-menu__item--link active">Home</a>
              </li>
              <li class="site-header-nav-menu__item">
                <a href="<?php echo base_url('home/about_us');?>" class="site-header-nav-menu__item--link">About Us</a>
              </li>
              <li class="site-header-nav-menu__item">
                <a href="<?php echo base_url('home/product_list');?>" class="site-header-nav-menu__item--link">Shop</a>
              </li>
              <li class="site-header-nav-menu__item">
                <a href="<?php echo base_url('home/faq');?>" class="site-header-nav-menu__item--link">FAQs</a>
              </li>
              <li class="site-header-nav-menu__item">
                <a href="<?php echo base_url('home/contact_us');?>" class="site-header-nav-menu__item--link">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- search form -->
      <div class="search-form-container" id="searchFormContainer">
        <div class="form search-form" id="searchForm">
          <div class="d-flex align-items-center">
            <div class="form__field m-0">
              <input type="text" class="search-form__input" placeholder="Search product here..." required />
              <button type="submit">
                <i class="bi bi-search"></i>
              </button>
            </div>
            <button class="search-form-container__button--close ms-3" id="searchFormContainerClose">
              <i class="bi bi-x-lg"></i>
            </button>
          </div>
        </div>
      </div>
    </header>