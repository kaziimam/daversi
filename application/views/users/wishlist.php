<?php $this->load->view('users/template/header')?>


    <main class="site-content">
      <!-- page title -->
      <section class="page-title-section d-flex justify-content-center align-items-center">
        <div class="container">
          <h3 class="page-title text-center">Wishlist</h3>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex justify-content-center p-0">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
            </ol>
          </nav>
        </div>
      </section>
      <!-- wishlist table -->
      <section class="section--padding">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-12 col-xl-11 col-xxl-10">
                <p class="text-center text--error d-none empty-wishlist-text">No item has been added.</p>
              <div class="table-responsive">
                <table class="table wishlist-table">
                  <tbody>
                    <tr class="wishlist-table__row">
                      <td>
                        <div class="text-center">
                          <a href="javascript:void(0)" class="wishlist-product__button--remove"><i class="bi bi-x-lg"></i></a>
                        </div>
                      </td>
                      <td>
                        <div>
                          <a href="/product-single.html" class="wishlist-product--link"><img src="<?php echo base_url('/assets/images/products/p-1.jpg')?>" alt="product" width="48" /></a>
                        </div>
                      </td>
                      <td>
                        <div class="wishlist-product-container text-center">
                          <p class="wishlist-product__title text--heading mb-2"><a href="/product-single.html">Cara Portable Air Compressor</a></p>
                          <p class="wishlist-product__price-container text-center mb-2">
                            <span class="price-sale text--lg font-weight-bold text--secondary">$20.00</span>
                            <span class="price-regular ms-1 text--para mb-0">$25.00</span>
                          </p>
                          <p class="text--xs text--para wishlist-product__added-date">September 12, 2020</p>
                        </div>
                      </td>
                      <td>
                        <div class="text-center">
                          <p class="text--xs wishlist-product__availablity-status text--light px-2 py-1 d-inline-block border-radius--custom mb-2 wishlist-product__availablity-status--in-stock">In stock</p>
                          <div><a href="javascript:void(0)" class="button button__primary wishlist-product__button--add-to-cart d-inline-block">Add To Cart</a></div>
                        </div>
                      </td>
                    </tr>
                    <tr class="wishlist-table__row">
                      <td>
                        <div class="text-center">
                          <a href="javascript:void(0)" class="wishlist-product__button--remove"><i class="bi bi-x-lg"></i></a>
                        </div>
                      </td>
                      <td>
                        <div>
                          <a href="/product-single.html" class="wishlist-product--link"><img src="<?php echo base_url('/assets/images/products/p-1.jpg')?>" alt="product" width="48" /></a>
                        </div>
                      </td>
                      <td>
                        <div class="wishlist-product-container text-center">
                          <p class="wishlist-product__title text--heading mb-2"><a href="/product-single.html">Cara Portable Air Compressor</a></p>
                          <p class="wishlist-product__price-container text-center mb-2">
                            <span class="price-sale text--lg font-weight-bold text--secondary">$20.00</span>
                            <span class="price-regular ms-1 text--para mb-0">$25.00</span>
                          </p>
                          <p class="text--xs text--para wishlist-product__added-date">September 12, 2020</p>
                        </div>
                      </td>
                      <td>
                        <div class="text-center">
                          <p class="text--xs wishlist-product__availablity-status text--light px-2 py-1 d-inline-block border-radius--custom mb-2 wishlist-product__availablity-status--out-of-stock">Out of stock</p>
                          <div><a href="javascript:void(0)" class="button button__primary wishlist-product__button--add-to-cart d-inline-block">Add To Cart</a></div>
                        </div>
                      </td>
                    </tr>
                    <tr class="wishlist-table__row">
                      <td>
                        <div class="text-center">
                          <a href="javascript:void(0)" class="wishlist-product__button--remove"><i class="bi bi-x-lg"></i></a>
                        </div>
                      </td>
                      <td>
                        <div>
                          <a href="/product-single.html" class="wishlist-product--link"><img src="<?php echo base_url('/assets/images/products/p-1.jpg')?>" alt="product" width="48" /></a>
                        </div>
                      </td>
                      <td>
                        <div class="wishlist-product-container text-center">
                          <p class="wishlist-product__title text--heading mb-2"><a href="/product-single.html">Cara Portable Air Compressor</a></p>
                          <p class="wishlist-product__price-container text-center mb-2">
                            <span class="price-sale text--lg font-weight-bold text--secondary">$20.00</span>
                            <span class="price-regular ms-1 text--para mb-0">$25.00</span>
                          </p>
                          <p class="text--xs text--para wishlist-product__added-date">September 12, 2020</p>
                        </div>
                      </td>
                      <td>
                        <div class="text-center">
                          <p class="text--xs wishlist-product__availablity-status text--light px-2 py-1 d-inline-block border-radius--custom mb-2 wishlist-product__availablity-status--in-stock">In stock</p>
                          <div><a href="javascript:void(0)" class="button button__primary wishlist-product__button--add-to-cart d-inline-block">Add To Cart</a></div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="d-flex justify-content-between align-items-center mt-4 wishlist-section__cta-wrapper">
                  <a href="/shop.html" class="button button__primary d-inline-block">Continue Shopping</a>
                  <a href="javascript:void(0)" class="wishlist-table__button--clear-total-items text-uppercase">
                      <span class="me-1"><i class="bi bi-x-lg"></i></span>
                      <span>Clear</span>
                  </a>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php $this->load->view('users/template/footer')?>