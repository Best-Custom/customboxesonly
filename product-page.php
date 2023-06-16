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

<?php include('include/footer.php') ?>