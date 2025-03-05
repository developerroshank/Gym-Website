<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!--=============== ALL LINKS/CDN ===============-->
  <?php $this->load->view('include/headlink') ?>

</head>
<body>

    <main>

        <!--=============== BLOG HERO SECTION ===============-->
        <section class="blog__page">
            
            <div class="blog__page__inner">
                <!--=============== BLOG HEADER SECTION ===============-->
                <?php $this->load->view('include/header') ?>

                <div class="container py-5">

                    <div class="page__heading py-5 mt-5 mb-5">
                        <h2>Our Blog</h2>
                    </div>

                </div>

            </div>

        </section>


        <!--=============== BLOG CARDS SECTION ===============-->
        <section class="blog__crads__section">

            <div class="container py-5">

                <!--=============== BLOG CARD SECTION ===============-->
                <div class="blog__cards mt-5 mb-5">
    
                    <div class="row row-cols-1 row-cols-md-3 g-4">

                        <div class="col">
                            <div class="blog__card">
                                <div class="blog__card__image">
                                    <a href="<?= base_url('blog-details') ?>">
                                        <img src="<?= base_url('assets/images/blog__4.jpg') ?>" class="card-img-top" alt="...">
                                    </a>
                                </div>
                            
                                <div class="blog__card__body">
                                    <h5 class="blog__card__date">August 2, 2024</h5>
                                    <h3 class="blog__card__title"><a href="<?= base_url('blog-details') ?>">Your Only Limit is You!</a></h3>
                                    <p class="blog__card__text">Lorem Ipsn gravida nibh vel velit auctor aliqunean sollicitudinlorem quis bibendum auci elit consequat ...</p>
                                    <div class="blog__card__btn">
                                        <a href="<?= base_url('blog-details') ?>">Read more <i class="fa-solid fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="blog__card">
                                <div class="blog__card__image">
                                    <a href="<?= base_url('blog-details') ?>">
                                        <img src="<?= base_url('assets/images/blog__5.jpg') ?>" class="card-img-top" alt="...">
                                    </a>
                                </div>
                            
                                <div class="blog__card__body">
                                    <h5 class="blog__card__date">August 2, 2024</h5>
                                    <h3 class="blog__card__title"><a href="<?= base_url('blog-details') ?>">Do It For You!</a></h3>
                                    <p class="blog__card__text">Lorem Ipsn gravida nibh vel velit auctor aliqunean sollicitudinlorem quis bibendum auci elit consequat ...</p>
                                    <div class="blog__card__btn">
                                        <a href="<?= base_url('blog-details') ?>">Read more <i class="fa-solid fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="blog__card">
                                <div class="blog__card__image">
                                    <a href="<?= base_url('blog-details') ?>">
                                        <img src="<?= base_url('assets/images/blog__6.jpg') ?>" class="card-img-top" alt="...">
                                    </a>
                                </div>
                            
                                <div class="blog__card__body">
                                    <h5 class="blog__card__date">August 2, 2024</h5>
                                    <h3 class="blog__card__title"><a href="<?= base_url('blog-details') ?>">Find The Reasons.</a></h3>
                                    <p class="blog__card__text">Lorem Ipsn gravida nibh vel velit auctor aliqunean sollicitudinlorem quis bibendum auci elit consequat ...</p>
                                    <div class="blog__card__btn">
                                        <a href="<?= base_url('blog-details') ?>">Read more <i class="fa-solid fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- BLog Quote Card -->
                        <div class="col">
                            <div class="blog__quote__card">
                            
                                <div class="blog__quote__body">
                                    <div class="blog__quote">
                                        <div class="quote__icon">
                                            <i class="fa-solid fa-quote-left"></i>
                                        </div>
                                        <h3 class="quote__text"><a href="#">Success isn't always about greatness, It's about consistency. Consistent hard work gains success. Greatness will come!</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="blog__card">
                                <div class="blog__card__image">
                                    <a href="<?= base_url('blog-details') ?>">
                                        <img src="<?= base_url('assets/images/blog__7.jpg') ?>" class="card-img-top" alt="...">
                                    </a>
                                </div>
                            
                                <div class="blog__card__body">
                                    <h5 class="blog__card__date">August 2, 2024</h5>
                                    <h3 class="blog__card__title"><a href="<?= base_url('blog-details') ?>">Having A Goals Is Not Enough.</a></h3>
                                    <p class="blog__card__text">Lorem Ipsn gravida nibh vel velit auctor aliqunean sollicitudinlorem quis bibendum auci elit consequat ...</p>
                                    <div class="blog__card__btn">
                                        <a href="<?= base_url('blog-details') ?>">Read more <i class="fa-solid fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="blog__card">
                                <div class="blog__card__image">
                                    <a href="<?= base_url('blog-details') ?>">
                                        <img src="<?= base_url('assets/images/blog__8.jpg') ?>" class="card-img-top" alt="...">
                                    </a>
                                </div>
                            
                                <div class="blog__card__body">
                                    <h5 class="blog__card__date">August 2, 2024</h5>
                                    <h3 class="blog__card__title"><a href="<?= base_url('blog-details') ?>">Believe in your dream.</a></h3>
                                    <p class="blog__card__text">Lorem Ipsn gravida nibh vel velit auctor aliqunean sollicitudinlorem quis bibendum auci elit consequat ...</p>
                                    <div class="blog__card__btn">
                                        <a href="<?= base_url('blog-details') ?>">Read more <i class="fa-solid fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
    
                </div>
                
            </div>

        </section>
        

    </main>



    <!--=============== SCROLL TOP SECTION ===============-->
    <div class="scroll__top__button">
        <a href="#" class="scroll__top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
    </div>

    <!--=============== ALL LINKS/CDN ===============-->
    <?php $this->load->view('include/footer') ?>
    <?php $this->load->view('include/footlink') ?>

</body>
</html>