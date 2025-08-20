<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from caketheme.com/html/mojuri/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Aug 2025 10:02:52 GMT -->
<!-- CSS FIX -->
<style>
  .item-product-cat-content .item-image img {
    width: 200px;
    /* Same width */
    height: 200px;
    /* Same height */
    object-fit: cover;
    /* Crop to fit nicely */
    border-radius: 50%;
    /* Make round */
    margin: auto;
    /* Center image */
    display: block;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    /* Optional: add shadow */
  }

  .item-product-cat-content h2 {
    font-size: 16px;
    margin-top: 10px;
  }

  .products-thumb {
    width: 100%;
    height: 300px;
    /* set your desired fixed height */
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    /* crop overflow */
    background: #fff;
    /* optional, gives clean background */
    border-radius: 8px;
    /* optional, for rounded corners */
  }

  .products-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    /* makes sure all images scale uniformly */
    transition: transform 0.3s ease-in-out;
  }

  .products-thumb img.hover-image {
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
  }

  .products-thumb:hover img.hover-image {
    opacity: 1;
  }

  .products-thumb:hover img.post-image {
    opacity: 0;

  }
</style>
<?php include("header.php"); ?>

<div id="site-main" class="site-main">
  <div id="main-content" class="main-content">
    <div id="primary" class="content-area">
      <div id="content" class="site-content" role="main">
        <section class="section m-b-70">
          <!-- Block Sliders -->
          <div
            class="block block-sliders auto-height color-white nav-center">
            <div
              class="slick-sliders"
              data-autoplay="true"
              data-dots="true"
              data-nav="true"
              data-columns4="1"
              data-columns3="1"
              data-columns2="1"
              data-columns1="1"
              data-columns1440="1"
              data-columns="1">
              <div class="item slick-slide">
                <div class="item-content">
                  <div class="content-image">
                    <img
                      width="1920"
                      height="1080"
                      src="assets/img/bg13.jpeg"
                      alt="Image Slider"
                      style="width: 100%; height: 950px; object-fit: cover;opacity: 0.9;" />
                  </div>
                  <div class="item-info horizontal-start vertical-middle">
                    <div class="content">
                      <h2 class="title-slider">
                        Discover a <br />world of jewelry
                      </h2>
                      <a
                        class="button-slider button button-white button-outline thick-border"
                        href="shop-grid-left.php">Explore Bestseller</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item slick-slide">
                <div class="item-content">
                  <div class="content-image">
                    <img
                      width="1920"
                      height="1080"
                      src="assets/img/bg12.jpeg"
                      alt="Image Slider"
                      style="width: 100%; height: 950px; object-fit: cover;opacity: 0.9;" />/>
                  </div>
                  <div class="item-info horizontal-start vertical-middle">
                    <div class="content">
                      <h2 class="title-slider">
                        Discover the<br />
                        Best of the Best
                      </h2>
                      <a
                        class="button-slider button button-white button-outline thick-border"
                        href="shop-grid-left.php">Explore Bestseller</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="item slick-slide">
                <div class="item-content">
                  <div class="content-image">
                    <img
                      width="1920"
                      height="1080"
                      src="assets/img/bg4.jpg"
                      alt="Image Slider"
                      style="opacity: 0.7;" />
                  </div>
                  <div class="item-info horizontal-start vertical-middle">
                    <div class="content">
                      <h2 class="title-slider">
                        Oh,<br />
                        Hello Newness!
                      </h2>
                      <a
                        class="button-slider button button-white button-outline thick-border"
                        href="shop-grid-left.php">Explore Bestseller</a>
                    </div>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </section>

        <section class="py-5">
          <div class="container">
            <div class="row text-center justify-content-center">

              <!-- Banner 1 -->
              <div class="col-md-4 mb-4">
                <div class="card border border-0 shadow-sm">
                  <a href="shop-grid-left.php">
                    <img
                      src="assets/img/bracelet2.jpeg"
                      class="card-img-top img-fluid"
                      style="height: 550px; object-fit: cover"
                      alt="Best Seller" />
                  </a>
                  <div class="card-body">
                    <h5 class="card-title">Best Seller</h5>
                    <a href="shop-grid-left.php" class="btn btn-primary">Shop Now</a>
                  </div>
                </div>
              </div>

              <!-- Banner 2 -->
              <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm">
                  <a href="shop-grid-left.php">
                    <img
                      src="assets/img/ring2.jpeg"
                      class="card-img-top img-fluid"
                      style="height: 550px; object-fit: cover"
                      alt="New Arrivals" />
                  </a>
                  <div class="card-body">
                    <h5 class="card-title">New Arrivals</h5>
                    <a href="shop-grid-left.php" class="btn btn-primary">Shop Now</a>
                  </div>
                </div>
              </div>



              <!-- Banner 3 -->
              <div class="col-md-4 mb-4">
                <div class="card border-0 shadow-sm">
                  <a href="shop-grid-left.php">
                    <img
                      src="assets/img/a27d29a2-9fab-4d08-91ce-58952c3f76a3.jpeg"
                      class="card-img-top img-fluid"
                      style="height: 550px; object-fit: cover"
                      alt="Clearance Sale" />
                  </a>
                  <div class="card-body">
                    <h5 class="card-title">Clearance Sale</h5>
                    <a href="shop-grid-left.php" class="btn btn-primary">Shop Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <section class="section section-padding m-b-70 mt-3">
          <div class="section-container">
            <!-- Block Product Categories -->
            <div class="block block-product-cats slider round-border">
              <div class="block-widget-wrap">
                <div class="block-title text-center mb-4">
                  <h2>Top Categories</h2>
                </div>
                <div class="block-content">
                  <div class="product-cats-list slick-wrap">
                    <div
                      class="slick-sliders content-category"
                      data-dots="0"
                      data-slidestoscroll="true"
                      data-nav="1"
                      data-columns4="2"
                      data-columns3="3"
                      data-columns2="3"
                      data-columns1="5"
                      data-columns1440="5"
                      data-columns="5">

                      <!-- Category Item -->
                      <div class="item item-product-cat slick-slide">
                        <div class="item-product-cat-content text-center">
                          <a href="shop-grid-left.php">
                            <div class="item-image animation-horizontal">
                              <img
                                src="assets/img/bracelet2.jpeg"
                                alt="Bracelets" />
                            </div>
                          </a>
                          <div class="product-cat-content-info mt-2">
                            <h2 class="item-title">
                              <a href="shop-grid-left.php">Bracelets</a>
                            </h2>
                          </div>
                        </div>
                      </div>

                      <!-- Category Item -->
                      <div class="item item-product-cat slick-slide">
                        <div class="item-product-cat-content text-center">
                          <a href="shop-grid-left.php">
                            <div class="item-image animation-horizontal">
                              <img
                                src="assets/img/ring2.jpeg"
                                alt="rings" />
                            </div>
                          </a>
                          <div class="product-cat-content-info mt-2">
                            <h2 class="item-title">
                              <a href="shop-grid-left.php">Rings</a>
                            </h2>
                          </div>
                        </div>
                      </div>

                      <!-- Category Item -->
                      <div class="item item-product-cat slick-slide">
                        <div class="item-product-cat-content text-center">
                          <a href="shop-grid-left.php">
                            <div class="item-image animation-horizontal">
                              <img
                                src="assets/img/earing1.jpeg"
                                alt="Earrings" />
                            </div>
                          </a>
                          <div class="product-cat-content-info mt-2">
                            <h2 class="item-title">
                              <a href="shop-grid-left.php">Earrings</a>
                            </h2>
                          </div>
                        </div>
                      </div>

                      <!-- Category Item -->
                      <div class="item item-product-cat slick-slide">
                        <div class="item-product-cat-content text-center">
                          <a href="shop-grid-left.php">
                            <div class="item-image animation-horizontal">
                              <img
                                src="assets/img/chain1.jpeg"
                                alt="Necklaces" />
                            </div>
                          </a>
                          <div class="product-cat-content-info mt-2">
                            <h2 class="item-title">
                              <a href="shop-grid-left.php">Necklaces</a>
                            </h2>
                          </div>
                        </div>
                      </div>

                      <!-- Category Item -->
                      <div class="item item-product-cat slick-slide">
                        <div class="item-product-cat-content text-center">
                          <a href="shop-grid-left.php">
                            <div class="item-image animation-horizontal">
                              <img
                                src="assets/img/pandent1.jpeg"
                                alt="pandent" />
                            </div>
                          </a>
                          <div class="product-cat-content-info mt-2">
                            <h2 class="item-title">
                              <a href="shop-grid-left.php">Pandent</a>
                            </h2>
                          </div>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- <section class="section section-padding m-b-70">
          <div class="section-container large">
           
            <div class="block block-products slider">
              <div class="block-widget-wrap">
                <div class="block-title">
                  <h2>Trending Products</h2>
                </div>
                <div class="block-content">
                  <div class="content-product-list slick-wrap">
                    <div
                      class="slick-sliders products-list grid"
                      data-slidestoscroll="true"
                      data-dots="false"
                      data-nav="1"
                      data-columns4="1"
                      data-columns3="2"
                      data-columns2="2"
                      data-columns1="3"
                      data-columns1440="4"
                      data-columns="4">
                      <div class="item-product slick-slide">
                        <div class="items">
                          <div
                            class="products-entry clearfix product-wapper">
                            <div class="products-thumb">
                              <div class="product-thumb-hover">
                                <a href="shop-details.php">
                                  <img
                                    width="600"
                                    height="600"
                                    src="assets/img/bracelet1.jpeg"
                                    class="post-image"
                                    alt="" />
                                  <img
                                    width="600"
                                    height="600"
                                    src="assets/img/bracelet2.jpeg"
                                    class="hover-image back"
                                    alt="" />
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-product slick-slide">
                        <div class="items">
                          <div
                            class="products-entry clearfix product-wapper">
                            <div class="products-thumb">
                              <div class="product-thumb-hover">
                                <a href="shop-details.php">
                                  <img
                                    width="600"
                                    height="600"
                                    src="assets/img/ring2.jpeg"
                                    class="post-image"
                                    alt="" />
                                  <img
                                    width="600"
                                    height="600"
                                    src="assets/img/ring3.jpeg"
                                    class="hover-image back"
                                    alt="" />
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-product slick-slide">
                        <div class="items">
                          <div
                            class="products-entry clearfix product-wapper">
                            <div class="products-thumb">
                              <div class="product-thumb-hover">
                                <a href="shop-details.php">
                                  <img
                                    width="600"
                                    height="600"
                                    src="assets/img/pandent1.jpeg"
                                    class="post-image"
                                    alt="" />
                                  <img
                                    width="600"
                                    height="600"
                                    src="assets/img/pandent2.jpeg"
                                    class="hover-image back"
                                    alt="" />
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-product slick-slide">
                        <div class="items">
                          <div
                            class="products-entry clearfix product-wapper">
                            <div class="products-thumb">
                              <div class="product-thumb-hover">
                                <a href="shop-details.php">
                                  <img
                                    width="600"
                                    height="600"
                                    src="assets/img/pandent1.jpeg"
                                    class="post-image"
                                    alt="" />
                                  <img
                                    width="600"
                                    height="600"
                                    src="assets/img/pandent2.jpeg"
                                    class="hover-image back"
                                    alt="" />
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item-product slick-slide">
                        <div class="items">
                          <div
                            class="products-entry clearfix product-wapper">
                            <div class="products-thumb">
                              <div class="product-thumb-hover">
                                <a href="shop-details.php">
                                  <img
                                    width="600"
                                    height="600"
                                    src="assets/img/bracelet1.jpeg"
                                    class="post-image"
                                    alt="" />
                                  <img
                                    width="600"
                                    height="600"
                                    src="assets/img/bracelet2.jpeg"
                                    class="hover-image back"
                                    alt="" />
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->


      </div>
      <!-- #content -->
    </div>
    <!-- #primary -->
  </div>
  <!-- #main-content -->
</div>

<?php include 'footer.php'; ?>
</div>

<!-- Back Top button -->
<div class="back-top button-show">
  <i class="arrow_carrot-up"></i>
</div>

<!-- Page Loader -->
<div class="page-preloader">
  <div class="loader">
    <div></div>
    <div></div>
  </div>
</div>

<!-- Dependency Scripts -->
<script src="libs/popper/js/popper.min.js"></script>
<script src="libs/jquery/js/jquery.min.js"></script>
<script src="libs/bootstrap/js/bootstrap.min.js"></script>
<script src="libs/slick/js/slick.min.js"></script>
<script src="libs/mmenu/js/jquery.mmenu.all.min.js"></script>

<!-- Site Scripts -->
<script src="assets/js/app.js"></script>
</body>

<!-- Mirrored from caketheme.com/html/mojuri/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Aug 2025 10:03:15 GMT -->

</html>