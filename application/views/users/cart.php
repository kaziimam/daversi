<?php $this->load->view('users/template/header')?>


    <main class="site-content">
      <!-- page title -->
      <section class="page-title-section d-flex justify-content-center align-items-center">
        <div class="container">
          <h3 class="page-title text-center">Cart</h3>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb d-flex justify-content-center p-0">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
          </nav>
        </div>
      </section>
      <section class="section--padding">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-12 col-lg-8 col-xxl-9">
              <div class="table-responsive">
                <table class="table cart-data-table">
                  <thead>
                    <tr class="bg--light">
                      <th scope="col">Product</th>
                      <th scope="col">Price</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Subtotal</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="cart-data-table__row">
                      <td>
                        <a href="#" class="d-flex align-items-center cart-data-table__product">
                          <span class="cart-data-table__product-image me-3">
                            <img src="<?php echo base_url('/assets/images/products/p-1.jpg')?>" alt="product1" />
                          </span>
                          <span class="cart-data-table__product-title">Product 1</span>
                        </a>
                      </td>
                      <td>$120.00</td>
                      <td>
                        <div class="quantity-generating-input-container">
                          <input type="button" value="-" class="qtyminus" field="quantity1" />
                          <input type="text" name="quantity1" value="1" class="qty" />
                          <input type="button" value="+" class="qtyplus" field="quantity1" />
                        </div>
                      </td>
                      <td>$120.00</td>
                      <td>
                        <a href="javascript:void(0)" class="cart-data-table__button--remove-row"><i class="bi bi-x-lg"></i></a>
                      </td>
                    </tr>
                    <tr class="cart-data-table__row">
                      <td>
                        <a href="#" class="d-flex align-items-center cart-data-table__product">
                          <span class="cart-data-table__product-image me-3">
                            <img src="<?php echo base_url('/assets/images/products/p-1.jpg')?>" alt="product1" />
                          </span>
                          <span class="cart-data-table__product-title">Product 1</span>
                        </a>
                      </td>
                      <td>$120.00</td>
                      <td>
                        <div class="quantity-generating-input-container">
                          <input type="button" value="-" class="qtyminus" field="quantity2" />
                          <input type="text" name="quantity2" value="1" class="qty" />
                          <input type="button" value="+" class="qtyplus" field="quantity2" />
                        </div>
                      </td>
                      <td>$120.00</td>
                      <td>
                        <a href="javascript:void(0)" class="cart-data-table__button--remove-row"><i class="bi bi-x-lg"></i></a>
                      </td>
                    </tr>
                    <tr class="cart-data-table__row">
                      <td>
                        <a href="#" class="d-flex align-items-center cart-data-table__product">
                          <span class="cart-data-table__product-image me-3">
                            <img src="<?php echo base_url('/assets/images/products/p-1.jpg')?>" alt="product1" />
                          </span>
                          <span class="cart-data-table__product-title">Product 1</span>
                        </a>
                      </td>
                      <td>$120.00</td>
                      <td>
                        <div class="quantity-generating-input-container">
                          <input type="button" value="-" class="qtyminus" field="quantity3" />
                          <input type="text" name="quantity3" value="1" class="qty" />
                          <input type="button" value="+" class="qtyplus" field="quantity3" />
                        </div>
                      </td>
                      <td>$120.00</td>
                      <td>
                        <a href="javascript:void(0)" class="cart-data-table__button--remove-row"><i class="bi bi-x-lg"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <p class="empty-cart-text text-center d-none error-text mt-3">No item has been added to the cart.</p>
              <div class="d-flex justify-content-between align-items-center mt-4">
                <a href="<?php echo base_url('home/product_list')?>" class="button button__primary">Continue Shopping</a>
                <a href="javascript:void(0)" class="cart-data-table__button--clear-total-items ms-3 text-uppercase">
                  <span><i class="bi bi-x-lg"></i></span>
                  <span>Clear</span>
                </a>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 col-xxl-3 mt-5 mt-lg-0">
              <div class="cart-total-wrapper bg--light border-custom-1 border-radius--custom p-4">
                <div class="cart__subtotal-container d-flex justify-content-between align-items-center mb-3">
                  <p class="text--sm text--primary m-0">Subtotal</p>
                  <h5 class="text--secondary text--lg m-0">20.00</h5>
                </div>
                <div class="cart__subtotal-container cart__subtotal-container--shipping d-flex justify-content-between align-items-center mb-3">
                  <p class="text--sm text--primary m-0">Subtotal</p>
                  <h5 class="text--secondary text--lg m-0"><span class="shipping-charge__prefix text--sm text--primary me-1">Flat rate</span><span class="shipping-charge__value">$5.00</span></h5>
                </div>
                <div class="cart__total-container d-flex justify-content-between align-items-center mb-3">
                  <p class="text--lg text--primary m-0">Total</p>
                  <h5 class="text--secondary m-0">$25.00</h5>
                </div>
                <div class="d-md-flex justify-content-end d-lg-block">
                  <a href="<?php echo base_url('home/checkout')?>" class="button button__primary d-block d-md-inline-block d-lg-block text-center">Checkout</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

<?php $this->load->view('users/template/footer')?>