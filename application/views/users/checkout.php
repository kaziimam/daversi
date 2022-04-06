<?php $this->load->view('users/template/header')?>


    <main class="site-content">
      <!-- page title -->
      <section class="page-title-section d-flex justify-content-center align-items-center">
        <div class="container">
          <h3 class="page-title text-center">Checkout</h3>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex justify-content-center p-0">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Checkout</li>
            </ol>
          </nav>
        </div>
      </section>

      <section class="section--padding">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 mb-5 mb-lg-0 pe-lg-5">
              <div class="checkout-steps mx-4 mx-sm-0">
                <div class="checkout-step__header d-flex justify-content-between position-relative" data-stepcompleted="1">
                  <div class="checkout-step active">
                    <span class="text--xs checkout-step__heading-prefix">Login</span>
                    <span class="checkout-step__step-count">1</span>
                  </div>
                  <div class="checkout-step">
                    <span class="text--xs checkout-step__heading-prefix">Add Address</span>
                    <span class="checkout-step__step-count">2</span>
                  </div>
                  <div class="checkout-step">
                    <span class="text--xs checkout-step__heading-prefix">Payment</span>
                    <span class="checkout-step__step-count">3</span>
                  </div>
                </div>
                <div class="checkout-step__content mt-4">
                  <div class="address-container">
                    <ul class="address-saved-list row">
                      <li class="address-saved-list__item col-12 col-sm-6 col-xl-4 selected">
                        <div class="p-4 bg--light border-radius--custom border-custom-1">
                          <p class="text--xs text--primary m-0 p-2">1/30 Lorem Street, Kolkata-5050, Near Lorem Shop</p>
                          <a href="javascript:void(0)" class="address-saved-list__item--select-btn"><i class="bi bi-check-circle-fill"></i></a>
                        </div>
                      </li>
                      <li class="address-saved-list__item col-12 col-sm-6 col-xl-4">
                        <div class="p-4 bg--light border-radius--custom border-custom-1">
                          <p class="text--xs text--primary m-0 p-2">1/30 Lorem Street, Kolkata-5050, Near Lorem Shop</p>
                          <a href="javascript:void(0)" class="address-saved-list__item--select-btn"><i class="bi bi-check-circle-fill"></i></a>
                        </div>
                      </li>
                      <div class="col-12 col-sm-6 col-xl-4 mt-3 mt-sm-0 text-center text-sm-start">
                        <a class="button button__primary d-inline-block w-auto address-container__button--add-adress" data-bs-toggle="offcanvas" href="#addAddressOffCanvas" role="button" aria-controls="offcanvasExample"
                          >Add Address<span class="ms-1"><i class="bi bi-plus"></i></span
                        ></a>
                      </div>
                    </ul>
                    <div class="text-end mt-5">
                      <a href="javascript:void(0)" class="address-container__button--proceed-to-payment d-inline-block">Proceed To Payment<i class="bi bi-arrow-right ms-2"></i></a>
                    </div>
                  </div>
                  <div class="payment-methods-container mt-5">
                    <div class="d-flex flex-wrap justify-content-center justify-content-sm-between align-items-center">
                      <a href="javascript:void(0)" class="button button__primary payment-method__button--online-payment">Pay Now</a>
                      <a href="javascript:void(0)" class="text--secondary payment-method__button--cod ms-2 mt-3 ms-sm-0 mt-sm-0"
                        >Proceed With Cash On Devlivery<span class="ms-2"><i class="bi bi-arrow-right"></i></span
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 p-sm-0 px-lg-3">
              <div class="cart-total-wrapper order-summary bg--light border-custom-1 border-radius--custom p-4">
                <h5 class="text--primary order-summary__heading">Order Summary</h5>
                <ul class="order-summary__product-preview-container">
                  <li class="product-preview row">
                    <div class="col-2 p-0">
                      <a href="#" class="product-preview--link d-inline-block border-custom-1">
                        <img src="./assets/images/products/p-1.jpg" alt="product1" width="40" />
                      </a>
                    </div>
                    <div class="col-7 p-0">
                      <p class="text--primary text--sm">
                        <span class="product-preview__title">Product Title 1</span>
                        <span class="product-preview__added-count-value text--para">x 2</span>
                      </p>
                    </div>
                    <div class="col-3 text-end p-0">
                      <h6 class="text--secondary m-0">$20.00</h6>
                    </div>
                  </li>
                  <li class="product-preview row">
                    <div class="col-2 p-0">
                      <a href="#" class="product-preview--link d-inline-block border-custom-1">
                        <img src="./assets/images/products/p-1.jpg" alt="product1" width="40" />
                      </a>
                    </div>
                    <div class="col-7 p-0">
                      <p class="text--primary text--sm">
                        <span class="product-preview__title">Product Title 1</span>
                        <span class="product-preview__added-count-value text--para">x 2</span>
                      </p>
                    </div>
                    <div class="col-3 text-end p-0">
                      <h6 class="text--secondary m-0">$20.00</h6>
                    </div>
                  </li>
                  <li class="product-preview row">
                    <div class="col-2 p-0">
                      <a href="#" class="product-preview--link d-inline-block border-custom-1">
                        <img src="./assets/images/products/p-1.jpg" alt="product1" width="40" />
                      </a>
                    </div>
                    <div class="col-7 p-0">
                      <p class="text--primary text--sm">
                        <span class="product-preview__title">Product Title 1</span>
                        <span class="product-preview__added-count-value text--para">x 2</span>
                      </p>
                    </div>
                    <div class="col-3 text-end p-0">
                      <h6 class="text--secondary m-0">$20.00</h6>
                    </div>
                  </li>
                </ul>
                <div class="cart__subtotal-container d-flex justify-content-between align-items-center mb-3">
                  <p class="text--sm text--primary m-0">Subtotal</p>
                  <h5 class="text--secondary text--lg m-0">20.00</h5>
                </div>
                <div class="cart__subtotal-container d-flex justify-content-between align-items-center mb-3">
                  <p class="text--sm text--primary m-0">GST</p>
                  <h5 class="text--secondary text--lg m-0">10.00</h5>
                </div>
                <div class="cart__subtotal-container cart__subtotal-container--shipping d-flex justify-content-between align-items-center mb-3">
                  <p class="text--sm text--primary m-0">Shipping Charge</p>
                  <h5 class="text--secondary text--lg m-0"><span class="shipping-charge__prefix text--sm text--primary me-1">Flat rate</span><span class="shipping-charge__value">$5.00</span></h5>
                </div>
                <div class="coupan-code-input-container position-relative mb-3">
                  <input type="text" name="coupancode" id="applyCoupanCode" placeholder="Apply coupan code here..." />
                  <img src="/assets/images/coupan-icon.svg" alt="coupan-icon" width="24" />
                </div>
                <div class="cart__total-container d-flex justify-content-between align-items-center mb-3">
                  <p class="text--lg text--primary m-0">Total</p>
                  <h5 class="text--secondary m-0">$35.00</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php $this->load->view('users/template/footer')?>