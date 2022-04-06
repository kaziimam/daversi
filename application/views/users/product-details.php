<?php $this->load->view('users/template/header')?>


    <main class="site-content">
      <!-- page title -->
      <section class="page-title-section d-flex justify-content-center align-items-center page-title-section--product-single">
        <div class="container">
          <h3 class="page-title text-center">Product Title</h3>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex justify-content-center p-0">
              <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url('home/product_list');?>">Shop</a></li>
              <li class="breadcrumb-item active" aria-current="page">Product Title</li>
            </ol>
          </nav>
        </div>
      </section>
      <!-- product-single section -->
      <div class="product-single-section section--padding">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-lg-10 col-xl-11 col-xxl-10">
              <div class="row">
                <div class="col-12 col-md-6 pb-3 pb-md-0">
                  <div class="prouduct-single__thumbnail-image-container border-custom-1 border-radius--custom">
                    <img src="https://dummyimage.com/800x1000/f4f9fd/1c1c1c" alt="dummy-product" class="w-100" />
                  </div>
                </div>
                <div class="col-12 col-md-6 pt-4 pt-md-0 ps-md-4 ps-xl-5">
                  <p class="text--para product-single__subheading mb-2">HOME MEDICAL SUPPLIES / PHARMACY</p>
                  <h3 class="product-single__title text--primary mb-3">Anti-septic Dry Hand Gel</h3>
                  <div class="mb-3">
                    <span class="product-single__brand">Brands: <a href="#" class="product-single__brand--link">Biozen</a></span>
                    <span class="product-single__review-container">
                      <span class="product-single__review-value me-2">5.00</span>
                      <span class="product-single__review-stars me-2">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </span>
                      <span class="product-single__review-submission">(2 reviews)</span>
                    </span>
                  </div>
                  <p class="text--para product-single__short-desc text--sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Mollitia, dicta.</p>
                  <div class="product-single__price-container d-flex align-items-center mb-3">
                    <h3 class="product-single__sell-price text--secondary">$20.00</h3>
                    <h5 class="product-single__regular-price text--para">$24.00</h5>
                  </div>
                  <div class="product-single__quantity-button-wrapper d-flex align-items-center mb-4">
                    <div class="form__field d-flex align-items-center">
                      <label for="quantity" class="text--primary me-3">Quantity</label>
                      <div class="product-single__quantity-button quantity-generating-input-container">
                        <input type="button" value="-" class="qtyminus" field="quantity" />
                        <input type="text" name="quantity" value="1" class="qty" />
                        <input type="button" value="+" class="qtyplus" field="quantity" />
                      </div>
                    </div>
                    <span class="product-single__in-stock-value-wrapper ms-4">
                      <span class="product-single__in-stock-icon text--secondary text--lg"><i class="bi bi-check-circle-fill"></i></span>
                      <span class="product-single__in-stock-value text--primary">6 in stock</span>
                    </span>
                  </div>
                  <div class="product-single__cta-wrapper mb-4 d-flex">
                    <a href="#" class="button button__primary d-inline-block product-single__cta--add-to-cart">Add to Cart</a>
                    <a href="#" class="product-single__cta--wishlist ms-3">
                      <i class="bi bi-heart-fill"></i>
                      <span class="tooltip-text">Add To Wishlist</span>
                    </a>
                  </div>
                  <div class="product-single__meta-info">
                    <p class="text--primary text--sm mb-2">SKU: <span class="product-single__sku-id text--secondary"> SF1133569600-1</span></p>
                    <p class="text--primary text--sm product-single__tags mb-3">
                      <span>Tags: </span>
                      <a href="#">covid19</a>
                      <a href="#">homecare</a>
                      <a href="#">pharmacy</a>
                    </p>
                    <ul class="product-single__social-sharing d-flex">
                      <li class="social-sharing__item">
                        <a href="#" class="social-sharing__item--link fb--link" target="_blank">
                          <span class="social-sharing__item-icon"><i class="bi bi-facebook"></i></span>
                          <span class="social-sharing__item-tooltip tooltip-text">Facebook</span>
                        </a>
                      </li>
                      <li class="social-sharing__item">
                        <a href="#" class="social-sharing__item--link insta--link" target="_blank">
                          <span class="social-sharing__item-icon"><i class="bi bi-instagram"></i></span>
                          <span class="social-sharing__item-tooltip tooltip-text">Instagram</span>
                        </a>
                      </li>
                      <li class="social-sharing__item">
                        <a href="#" class="social-sharing__item--link linkedin--link" target="_blank">
                          <span class="social-sharing__item-icon"><i class="bi bi-linkedin"></i></span>
                          <span class="social-sharing__item-tooltip tooltip-text">Linkedin</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-12 mt-5">
                  <h4 class="text--primary product-single__inner-section-heading">Description</h4>
                  <div class="product-single__description mb-5">
                    <p class="text--para">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat asperiores quod repellat nesciunt explicabo, unde cum, tenetur labore, vitae ex ad dolorum iure. Veritatis.</p>
                    <ul>
                      <li>Lorem ipsum dolor sit amet.</li>
                      <li>Lorem ipsum dolor sit amet.</li>
                      <li>Lorem ipsum dolor sit amet.</li>
                      <li>Lorem ipsum dolor sit amet.</li>
                    </ul>
                    <p class="text--para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, et.</p>
                  </div>
                  <h4 class="text--primary product-single__inner-section-heading">Additional information</h4>
                  <div class="product-single__addi-info mb-5">
                    <ul class="product-single__addi-info-list">
                      <li>
                        <span class="addi-info__title me-2 text--primary">Type Of Packing:</span>
                        <span class="addi-info__text">Bottle</span>
                      </li>
                      <li>
                        <span class="addi-info__title me-2 text--primary">Color:</span>
                        <span class="addi-info__text">Green, Pink, Powder Blue, Purple:</span>
                      </li>
                      <li>
                        <span class="addi-info__title me-2 text--primary">Quantity Per Case:</span>
                        <span class="addi-info__text">100ml</span>
                      </li>
                      <li>
                        <span class="addi-info__title me-2 text--primary">Ethyl Alcohol:</span>
                        <span class="addi-info__text">70%</span>
                      </li>
                      <li>
                        <span class="addi-info__title me-2 text--primary">Ethyl Alcohol:</span>
                        <span class="addi-info__text">Carton</span>
                      </li>
                    </ul>
                  </div>
                  <h4 class="text--primary product-single__inner-section-heading">Reviews</h4>
                  <div class="product-single__review-detailed-container">
                    <p class="text--para mb-4"><span class="text--secondary product-single__review-avg-val text--lg">5.00</span> average based on 2 ratings.</p>
                    <div class="product-single__review-item row">
                      <div class="review-item__profile-img-container">
                        <img src="https://dummyimage.com/200x200/000/fff" alt="" class="review-item__profile-img" />
                      </div>
                      <div class="review-item__content">
                        <div class="d-flex mb-2">
                          <div class="review-item__stars-container">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                          </div>
                          <div class="review-item__profile-title ms-3">John Doe</div>
                        </div>
                        <p class="text--sm text--para review-item__review-quote mb-2">Very good and fast delivery during the week. Thank you!</p>
                        <p class="text--xs text--secondary"><span class="review-item__review-date me-1">April 16, 2020</span>at<span class="review-item__review-time ms-1">3:08 am</span></p>
                      </div>
                    </div>
                    <div class="product-single__review-item row">
                      <div class="review-item__profile-img-container">
                        <img src="https://dummyimage.com/200x200/000/fff" alt="" class="review-item__profile-img" />
                      </div>
                      <div class="review-item__content">
                        <div class="d-flex mb-2">
                          <div class="review-item__stars-container">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                          </div>
                          <div class="review-item__profile-title ms-3">John Doe</div>
                        </div>
                        <p class="text--sm text--para review-item__review-quote mb-2">Very good and fast delivery during the week. Thank you!</p>
                        <p class="text--xs text--secondary"><span class="review-item__review-date me-1">April 16, 2020</span>at<span class="review-item__review-time ms-1">3:08 am</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

<?php $this->load->view('users/template/footer')?>