<?php $this->load->view('users/template/header')?>



    <main class="site-content">
    <!-- page title -->
    <section class="page-title-section d-flex justify-content-center align-items-center">
      <div class="container">
        <h3 class="page-title text-center">Products</h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb d-flex justify-content-center p-0">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Products</li>
          </ol>
        </nav>
      </div>
    </section>

    <!-- Shop Product Grid -->
    <section class="section--padding products-listing-section">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-4 col-xxl-3 pe-lg-5">
            <div class="products-listing__sidebar d-none d-lg-block">
              <div class="bg--light border-custom-1 border-radius--custom p-4 mb-4">
                <h6 class="text--heading mb-3">Filter by price</h6>
                <div class="row slider-labels justify-content-between mb-3">
                       <span id="slider-range-value1" class="slider-range-value d-inline-block w-auto"></span>
                       <span id="slider-range-value2" class="slider-range-value d-inline-block w-auto"></span>
                 </div>
                 <div class="col-sm-12 p-0">
                    <div id="slider-range"></div>
                    <div class="mt-3 text-end">
                      <button class="prouct-listing-filter__button--apply button button__primary px-3 py-2 d-inline-block">Filter</button>
                    </div>
                 </div>
              </div>
              <div class="bg--light border-custom-1 border-radius--custom p-4 mb-4">
                <h6 class="text--heading mb-3">Categories</h6>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" value="emergency_medical_supplies" id="emergency_medical_supplies" />
                  <label class="form-check-label" for="flexCheckChecked">Emergency Medical Supplies & Equipment</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" value="surgical_equipment" id="surgical_equipment" />
                  <label class="form-check-label" for="flexCheckChecked">Surgical Supplies & Equipment</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" value="orthopedic_products" id="orthopedic_products" />
                  <label class="form-check-label" for="flexCheckChecked">Orthopedic Products</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" value="rehab_equipment" id="rehab_equipment" />
                  <label class="form-check-label" for="flexCheckChecked">Rehabilitation Equipment & Supplies</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" value="patient_care" id="patient_care" />
                  <label class="form-check-label" for="flexCheckChecked">Patient Care</label>
                </div>
                <a href="#" class="d-inline-block text--sm font-medius text-underline mt-2 product-listing__link--view-more-brands">View More</a>
              </div>
              <div class="bg--light border-custom-1 border-radius--custom p-4 mb-4">
                <h6 class="text--heading mb-3">Popular Dealer</h6>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" value="allergy_clinic" id="allergy_clinic" />
                  <label class="form-check-label" for="flexCheckChecked">Allergy Clinic</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" value="biozen" id="biozen" />
                  <label class="form-check-label" for="flexCheckChecked">BioZen</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" value="med_care" id="med_care" />
                  <label class="form-check-label" for="flexCheckChecked">Med Care</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" value="primacy" id="primacy" />
                  <label class="form-check-label" for="flexCheckChecked">Primacy</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" value="search_lab" id="search_lab" />
                  <label class="form-check-label" for="flexCheckChecked">Search Lab</label>
                </div>
                <a href="#" class="d-inline-block text--sm font-medius text-underline mt-2 product-listing__link--view-more-brands">View More</a>
              </div>
              <div class="bg--light border-custom-1 border-radius--custom p-4 mb-4">
                <h6 class="text--heading mb-3">Filter by discount</h6>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" value="10%Off" id="off_10_percent" />
                  <label class="form-check-label" for="flexCheckChecked">10% Off</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" value="20%Off" id="off_20_percent" />
                  <label class="form-check-label" for="flexCheckChecked">20% Off</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" value="30%Off" id="off_30_percent" />
                  <label class="form-check-label" for="flexCheckChecked">30% Off</label>
                </div>
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" value="40%Off" id="off_40_percent" />
                  <label class="form-check-label" for="flexCheckChecked">40% Off</label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-12 col-lg-8 col-xxl-9">
            <div class="mb-5 d-flex flex-wrap flex-lg-nowrap justify-content-between align-items-center">
              <p class="text--sm text--para mb-4 mb-lg-0 w-100 text-center text-lg-start">Showing <span class="text--secondary product-listing__show-product-count">12</span> products out of <span class="text--primary product-listing__show-product-total-count">200</span></p>
              <button class="product-listing-filter__button--toggler button button__primary px-3 py-2 d-inline-block d-lg-none"type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopProductListingFilter" aria-controls="offcanvasTop">
                <span><i class="bi bi-funnel"></i></span>
                <span>Filter</span>
              </button>
              <div class="offcanvas offcanvas-top product-listing-filter__offcanvas" tabindex="-1" id="offcanvasTopProductListingFilter" aria-labelledby="offcanvasTopLabel">
                <div class="offcanvas-body p-0">
                  <div class="d-flex align-items-start">
                    <div class="nav flex-column nav-pills me-3 bg--light" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                      <button class="nav-link active" id="v-pills-pricefilter-tab" data-bs-toggle="pill" data-bs-target="#v-pills-pricefilter" type="button" role="tab" aria-controls="v-pills-pricefilter" aria-selected="true">Filter By Price</button>
                      <button class="nav-link" id="v-pills-categoriesfilter-tab" data-bs-toggle="pill" data-bs-target="#v-pills-categoriesfilter" type="button" role="tab" aria-controls="v-pills-categoriesfilter" aria-selected="true">Categories</button>
                      <button class="nav-link" id="v-pills-dealerfilter-tab" data-bs-toggle="pill" data-bs-target="#v-pills-dealerfilter" type="button" role="tab" aria-controls="v-pills-dealerfilter" aria-selected="false">Popular Dealer</button>
                      <button class="nav-link" id="v-pills-discountfilter-tab" data-bs-toggle="pill" data-bs-target="#v-pills-discountfilter" type="button" role="tab" aria-controls="v-pills-discountfilter" aria-selected="false">Filter By Discount</button>
                   
                    </div>
                    <div class="tab-content p-3" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-pricefilter" role="tabpanel" aria-labelledby="v-pills-pricefilter-tab">
                        <div>
                          <div class="row slider-labels justify-content-between mb-3">
                                 <span id="slider-range-value1-sm" class="slider-range-value d-inline-block w-auto"></span>
                                 <span id="slider-range-value2-sm" class="slider-range-value d-inline-block w-auto"></span>
                           </div>
                           <div class="col-sm-12 p-0">
                              <div id="slider-range-sm"></div>
                           </div>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="v-pills-categoriesfilter" role="tabpanel" aria-labelledby="v-pills-categoriesfilter-tab">
                        <div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="emergency_medical_supplies" id="emergency_medical_supplies" />
                            <label class="form-check-label" for="flexCheckChecked">Emergency Medical Supplies & Equipment</label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="surgical_equipment" id="surgical_equipment" />
                            <label class="form-check-label" for="flexCheckChecked">Surgical Supplies & Equipment</label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="orthopedic_products" id="orthopedic_products" />
                            <label class="form-check-label" for="flexCheckChecked">Orthopedic Products</label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="rehab_equipment" id="rehab_equipment" />
                            <label class="form-check-label" for="flexCheckChecked">Rehabilitation Equipment & Supplies</label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="patient_care" id="patient_care" />
                            <label class="form-check-label" for="flexCheckChecked">Patient Care</label>
                          </div>
                          <a href="#" class="d-inline-block text--sm font-medius text-underline mt-2 product-listing__link--view-more-brands">View More</a>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="v-pills-dealerfilter" role="tabpanel" aria-labelledby="v-pills-dealerfilter-tab">
                        <div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="allergy-clinic" id="allergy_clinic" />
                            <label class="form-check-label" for="flexCheckChecked">Allergy Clinic</label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="biozen" id="biozen" />
                            <label class="form-check-label" for="flexCheckChecked">BioZen</label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="med-care" id="med_care" />
                            <label class="form-check-label" for="flexCheckChecked">Med Care</label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="primacy" id="primacy" />
                            <label class="form-check-label" for="flexCheckChecked">Primacy</label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="search-lab" id="search_lab" />
                            <label class="form-check-label" for="flexCheckChecked">Search Lab</label>
                          </div>
                          <a href="#" class="d-inline-block text--sm font-medius text-underline mt-2 product-listing__link--view-more-brands">View More</a>
                        </div>
                      </div>
                      <div class="tab-pane fade" id="v-pills-discountfilter" role="tabpanel" aria-labelledby="v-pills-discountfilter-tab">
                        <div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="10%Off" id="off_10_percent" />
                            <label class="form-check-label" for="flexCheckChecked">10% Off</label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="20%Off" id="off_20_percent" />
                            <label class="form-check-label" for="flexCheckChecked">20% Off</label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="30%Off" id="off_30_percent" />
                            <label class="form-check-label" for="flexCheckChecked">30% Off</label>
                          </div>
                          <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" value="40%Off" id="off_40_percent" />
                            <label class="form-check-label" for="flexCheckChecked">40% Off</label>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex justify-content-end w-100 offcanvas__footer py-3 px-3 bg--light">
                      <button class="button button__primary py-2 px-3 product-listing-filter__button--close-offcanvas" data-bs-dismiss="offcanvas">Close</button>
                      <button class="button button__secondary py-2 px-3 ms-2 product-listing-filter__button--apply">Apply</button>
                    </div>
                  </div>
                </div>
              </div>
              <select id="productListingSorting" placeholder-text="Sort by" class="products-listing--sorting">
                <option value="default" class="select-dropdown__list-item" selected>Default</option>
                <option value="popularity" class="select-dropdown__list-item">Popularity</option>
                <option value="latest" class="select-dropdown__list-item">Latest</option>
                <option value="lowToHigh" class="select-dropdown__list-item">Price: Low to High</option>
                <option value="highToLow" class="select-dropdown__list-item">Price: High to Low</option>
              </select>
            </div>

            <div class="product-listing row" id="productsListingRow"></div>

            <div class="d-flex justify-content-end mt-3">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                          <span aria-hidden="true">&laquo;</span>
                        </a>
                      </li>
                      <li class="page-item active" aria-current="page""><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
                    </ul>
                </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    </main>


<?php $this->load->view('users/template/footer')?>