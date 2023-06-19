<?php include('include/header.php') ?>

<!-- product__page__section code starts here  -->

    <div class="product__detail__area">
        <div class="container mt-5 mb-5">	
            <div class="card">	
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="d-flex flex-column justify-content-center">	
                            <div class="main_image">	
                                <img class="img-fluid" src="asset/images/product__page/product__detail__img.png" id="main_product_image" width="350">	
                            </div>
                        </div>	
                        <div class="thumbnail_images">	
                            <ul id="thumbnail">	
                                <li><img onclick="changeImage(this)" class="img-fluid" src="https://i.imgur.com/TAzli1U.jpg" width="70"></li>
                                <li><img onclick="changeImage(this)" class="img-fluid" src="asset/images/product__page/product__detail__img.png" width="70"></li>	
                                <li><img onclick="changeImage(this)" class="img-fluid" src="https://i.imgur.com/L7hFD8X.jpg" width="70"></li>	
                                <li><img onclick="changeImage(this)" class="img-fluid" src="asset/images/product__page/product__detail__img.png" width="70"></li>	
                            </ul>	
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="product__title__area">
                                <a href="#"><button class="frame2_button">Eco Friendly</button></a>
                                <div class="product__title mt-3">
                                    <h2>Mailer Boxes</h2>
                                    <ul class="p-0">
                                        <li><img src="asset/images/product__page/check__success.png" alt=""> Custom Sizes</li>
                                        <li><img src="asset/images/product__page/check__success.png" alt=""> Personalized</li>
                                        <li><img src="asset/images/product__page/check__success.png" alt=""> Custom Style</li>
                                        <li><img src="asset/images/product__page/check__success.png" alt=""> Free Design Support</li>
                                        <li><img src="asset/images/product__page/check__success.png" alt=""> Free Shipping</li>
                                        <li><img src="asset/images/product__page/check__success.png" alt=""> Discounted Prices</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <!-- our__forms Code starts here-->

                                <div class="our__forms">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="tab-content p-0" id="myTabContent">
                                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                    <h2 class="text-white">Get a Quick Quote</h2>
                                                    <p class="text-white">Unlock the potential of your products with our unrivaled packaging solutions tailored to your industry and specific product needs. </p>
                                                    <form>
                                                        <div class="form-group row">
                                                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                                                <label for="name">Your Name</label>
                                                                <input type="text" name="name" class="form-control mt-1" placeholder="Type name here"> 
                                                            </div>
                                                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                                                <label for="name">Your Email</label>
                                                                <input type="text" name="email" class="form-control mt-1" placeholder="Type here"> 
                                                            </div>
                                                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                                                <label for="name">Your phone Number</label>
                                                                <input type="text" name="phone" class="form-control mt-1" placeholder="Type here"> 
                                                            </div>
                                                        </div>
                                                        <div class="form-group row mt-3">
                                                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 row">
                                                                <div class="our__forms__size" style="width:70%">
                                                                    <label for="name">Size</label>
                                                                    <input type="text" name="name" class="form-control mt-1" placeholder="L*W*H"> 
                                                                </div>
                                                                <div class="our__forms__unit" style="width:30%">
                                                                    <label for="scale">Scale</label>
                                                                    <select class="form-select" aria-label="Default select example">
                                                                        <option selected>in</option>
                                                                        <option value="1">mm</option>
                                                                        <option value="2">cm</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                                                <label for="name">Quantity</label>
                                                                <input type="text" name="quantity" class="form-control mt-1" placeholder="Type here"> 
                                                            </div>
                                                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                                                <label for="name">Product Type</label>
                                                                <input type="text" name="phone" class="form-control mt-1" placeholder="Type here"> 
                                                            </div>
                                                        </div> 
                                                        <div class="form-group row mt-3">
                                                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 row">
                                                                <div class="our__forms__size text-center">
                                                                <label for="name ">Upload image (optional)</label>
                                                                    <div class="drop-zone mt-1">
                                                                        <span class="drop-zone__prompt"><img src="asset/images/our__forms/our__form__file.png" alt=""><p class="mt-3 text-white">Drop file here or click to upload</p></span>
                                                                        <input type="file" name="myFile" class="drop-zone__input">
                                                                    </div>
                                                                    <script src="./src/main.js"></script>
                                                                </div>
                                                            </div>
                                                            <div class="col-xs-12 col-sm-6 col-md-=8 col-lg-8">
                                                                <label for="name">Description</label>
                                                                <textarea type="text" name="description" class="form-control mt-1" placeholder="Type here"> </textarea>
                                                            </div>
                                                        </div> 
                                                        <div class="row btn__layout1__positioning">
                                                            <button class="btn__layout1">
                                                                <a href="#">
                                                                    <span>GET ME THE QUOTE</span> 
                                                                    <img src="asset/images/our__forms/our__forms__vector.png" alt="">
                                                                </a>   
                                                            </button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                <h2>Get a Free Sample kit</h2>
                                                    <p>Unlock the potential of your products with our unrivaled packaging solutions tailored to your industry and specific product needs.  </p>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                                            <form class="our__form__sample__kit__area">
                                                                <div class="form-group row">
                                                                        <label for="name">Your Name</label>
                                                                        <input type="text" name="name" class="form-control mt-1" placeholder="Type name here"> 
                                                                </div>
                                                                <div class="form-group row">
                                                                        <label for="name">Company Name</label>
                                                                        <input type="text" name="name" class="form-control mt-1" placeholder="Type here"> 
                                                                </div>
                                                                <div class="form-group row">
                                                                        <label for="name">Email</label>
                                                                        <input type="text" name="name" class="form-control mt-1" placeholder="Type here"> 
                                                                </div>
                                                                <div class="form-group row">
                                                                        <label for="name">Address</label>
                                                                        <input type="text" name="name" class="form-control mt-1" placeholder="Type here"> 
                                                                </div>
                                                                <div class="row btn__layout1__positioning">
                                                                    <button class="btn__layout1">
                                                                        <a href="#">
                                                                            <span>GET ME THE QUOTE</span> 
                                                                            <img src="asset/images/our__forms/our__form__sample__kit__vector.png" alt="">
                                                                        </a>   
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                                                            <div class="our__form__sample__kit__image">
                                                                <img src="asset/images/our__forms/our__form__sample__kit__bg.png" class="img-fluid" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <!-- our__forms Code ends here-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- product__page__section code ends here  -->


<!-- our__journey section Code starts here-->

<section class="our__journey__section">
    <div class="container">
        <div class="row">
            <h1>Simplified Custom Packaging Journey</h1>
            <p>Unlock the potential of your products with our unrivaled packaging solutions tailored to your industry and specific product needs. </p>
            <div class="our__journey__item__area row">
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="our__journey__item">
                        <img src="asset/images/our__journey/our__journey__vector.png" alt="">
                    </div>
                    <p class="text-center">Discuss Your Requirements</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="our__journey__item">
                        <img src="asset/images/our__journey/our__journey__vector.png" alt="">
                    </div>
                    <p class="text-center">Discuss Your Requirements</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="our__journey__item">
                        <img src="asset/images/our__journey/our__journey__vector.png" alt="">
                    </div>
                    <p class="text-center">Discuss Your Requirements</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="our__journey__item">
                        <img src="asset/images/our__journey/our__journey__vector.png" alt="">
                    </div>
                    <p class="text-center">Discuss Your Requirements</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- our__journey section Code ends here-->

<!-- nav tabs code starts here -->

<section class="category__descriotion__section">
    <div class="container">
        <div class="row">
        <nav>
            <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#specification" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Specification</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#capabilities" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Special Capabilities</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#lamination" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Coating & Lamination</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#finishes" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Special Finishes</button>
            </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active mt-3" id="specification" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="category__descriotion__area">
                    <h3>Latest Printing Techniques</h3>
                    <p>We understand that the attractiveness of CBD gummies packaging comes from its color. The color of a box is directly related to its printing. Therefore, we make sure to use the best printing techniques available. Our printing techniques make your CBD boxes look vibrant and attractive. This allows our customers to increase the demand and sales of their CBD gummies. After all, customers make assumptions about the quality of a product by looking at its packaging. </p>
                    <ul>
                        <li>CMYK</li>
                        <li>PMS</li>
                        <li>Heat Stamping</li>
                        <li>Embossing</li>
                        <li>Debossing</li>
                    </ul>
                    <h3>The Durability of CBD Gummies Packaging</h3>
                    <p>CBD gummies need to be packaged in sturdy and durable boxes. If the boxes are not durable, the gummies can fall out of them, or the boxes can break. This can result in a huge loss for your company. Also, if the boxes break once they have reached your customer – a bad image of your product can be created. Hence, you should trust CBH with your gummy boxes. Our boxes are made up of material that is strong and eco-friendly. Hence, our boxes are sturdy and strong. This is why they will not break or fall apart during rough shipping, etc. These boxes will ensure that your CBD gummies remain safe and intact until and after they reach their destination.</p>
                </div>
            </div>
            <div class="tab-pane fade" id="capabilities" role="tabpanel" aria-labelledby="nav-profile-tab">Special Capabilities description</div>
            <div class="tab-pane fade" id="lamination" role="tabpanel" aria-labelledby="nav-home-tab">Coating & Lamination</div>
            <div class="tab-pane fade" id="finishes" role="tabpanel" aria-labelledby="nav-contact-tab">Special Finishes</div>
            </div>
        </div>
    </div>
</section>

<!-- nav tabs code ends here -->



<!-- Our Range code starts here-->
<section class="our__range__section">
    <div class="container">
       <div class="row">
            <h1>Our Most Popular Products</h1>
            <div class="owl-carousel owl-theme" id="portfolio__range">
                <div class="item">
                    <div class="our__range__item">
                        <img src="asset/images/our__range_product.png" class="img-fluid" alt="image">
                    </div>
                    <h4>Cardboard Boxes</h4>
                </div>
                <div class="item">
                    <div class="our__range__item">
                        <img src="asset/images/our__range_product.png" class="img-fluid" alt="image">
                    </div>
                    <h4>Cardboard Boxes</h4>
                </div>
                <div class="item">
                    <div class="our__range__item">
                        <span class="product__tag eco-friendly">Eco Friendly</span>
                        <img src="asset/images/our__range_product.png" class="img-fluid" alt="image">
                    </div>
                    <h4>Cardboard Boxes</h4>
                </div>
                <div class="item">
                    <div class="our__range__item">
                        <img src="asset/images/our__range_product.png" class="img-fluid" alt="image">
                    </div>
                    <h4>Cardboard Boxes</h4>
                </div>
            </div>
       </div>
    </div>
</section>
<!-- Our Range Code ends here-->


<section class="sample__kit__section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="sample__kit__heading p-5">
                    <h3>Would you like to avail free sample kit?</h3>
                    <p>We at custom boxes only, realize the importance of press samples to demonstrate our packaging capabilities. therefore free sample kits are offered to our customers which include random box samples of our past done work.</p>
                    <a class="sample_kit__btn" href="#">    
                        <button class="frame2_button p-3"><span>I need FREE SAMPLE KIT</span> <img src="asset/images/product__page/button__vector.png" class="img-fluid" alt=""></button>
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="sample__kit__img p-5">
                    <img src="asset/images/product__page/sample__kit__image.png" class="img-fluid" alt="">
                </div>
            </div>
            
        </div>
    </div>
</section>



<!-- our Review section Code starts here-->
<section class="our__review">
    <div class="container">
        <div class="row">
            <h2>See Our Reviews</h2>
            <div class="row">
                <div class="col-6">
                    <p>Unlock the potential of your products with our unrivaled packaging solutions tailored to your industry and specifi.</p>
                </div>
                <div class="col-6 text-end">
                    <a href="#">
                        <button class="btn__layout1"><span>View All Reviews</span></button>
                    </a>
                </div>
            </div>
        </div>
        <div class="owl-carousel owl-theme" id="review__slider">
            <div class="item">
                <div class="our__review__items">
                    <div class="d-flex our__review__star">
                        <img src="asset/images/our__review/star.png" class="img-fluid" alt="">
                        <img src="asset/images/our__review/star.png" class="img-fluid" alt="">
                        <img src="asset/images/our__review/star.png" class="img-fluid" alt="">
                        <img src="asset/images/our__review/star.png" class="img-fluid" alt="">
                        <img src="asset/images/our__review/star.png" class="img-fluid" alt="">
                    </div>
                    <p>“Our members are so impressed. It's intuitive. It's clean. It's distraction free. If you're building a community.</p>
                    <div class="row our__review__people">
                        <div class="d-flex">
                            <div class="our__review__image">
                                <img src="asset/images/our__review/people1.png" class="img-fluid" alt="">
                            </div>
                            <div class="our__review__text">
                                <h4>Sabo Masties</h4>
                                <span>Founder @ Rolex</span>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="our__review__items our__review__bg">
                    <div class="d-flex our__review__star">
                        <img src="asset/images/our__review/star.png" class="img-fluid" alt="">
                        <img src="asset/images/our__review/star.png" class="img-fluid" alt="">
                        <img src="asset/images/our__review/star.png" class="img-fluid" alt="">
                        <img src="asset/images/our__review/star.png" class="img-fluid" alt="">
                        <img src="asset/images/our__review/star.png" class="img-fluid" alt="">
                    </div>
                    <p>“Our members are so impressed. It's intuitive. It's clean. It's distraction free. If you're building a community.</p>
                    <div class="row our__review__people">
                        <div class="d-flex">
                            <div class="our__review__image">
                                <img src="asset/images/our__review/people1.png" class="img-fluid" alt="">
                            </div>
                            <div class="our__review__text">
                                <h4>Sabo Masties</h4>
                                <span>Founder @ Rolex</span>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="our__review__items">
                    <div class="d-flex our__review__star">
                        <img src="asset/images/our__review/star.png" class="img-fluid" alt="">
                        <img src="asset/images/our__review/star.png" class="img-fluid" alt="">
                        <img src="asset/images/our__review/star.png" class="img-fluid" alt="">
                        <img src="asset/images/our__review/star.png" class="img-fluid" alt="">
                        <img src="asset/images/our__review/star.png" class="img-fluid" alt="">
                    </div>
                    <p>“Our members are so impressed. It's intuitive. It's clean. It's distraction free. If you're building a community.</p>
                    <div class="row our__review__people">
                        <div class="d-flex">
                            <div class="our__review__image">
                                <img src="asset/images/our__review/people1.png" class="img-fluid" alt="">
                            </div>
                            <div class="our__review__text">
                                <h4>Sabo Masties</h4>
                                <span>Founder @ Rolex</span>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="our__review__items our__review__bg">
                    <div class="d-flex our__review__star">
                        <img src="asset/images/our__review/star.png" class="img-fluid" alt="">
                        <img src="asset/images/our__review/star.png" class="img-fluid" alt="">
                        <img src="asset/images/our__review/star.png" class="img-fluid" alt="">
                        <img src="asset/images/our__review/star.png" class="img-fluid" alt="">
                        <img src="asset/images/our__review/star.png" class="img-fluid" alt="">
                    </div>
                    <p>“Our members are so impressed. It's intuitive. It's clean. It's distraction free. If you're building a community.</p>
                    <div class="row our__review__people">
                        <div class="d-flex">
                            <div class="our__review__image">
                                <img src="asset/images/our__review/people1.png" class="img-fluid" alt="">
                            </div>
                            <div class="our__review__text">
                                <h4>Sabo Masties</h4>
                                <span>Founder @ Rolex</span>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- our Review section Code ends here-->


<!-- contact us  code starts here  -->

<?php include('components/contact-us.php')?>

<!-- contact us  code ends here  -->

<?php include('include/footer.php') ?>