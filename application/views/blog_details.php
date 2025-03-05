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

        <!--=============== BLOG DETAILS ===============-->
        <section class="blog__details__page">
            
            <div class="blog__details__page__inner">

                <!--=============== BLOG DETAILS HEADER SECTION ===============-->
                <?php $this->load->view('include/header') ?>

                <div class="container py-5">

                    <div class="page__heading mt-5 mb-5">
                        <h2>Prowess</h2>
                    </div>

                </div>

            </div>

        </section>



        <!--=============== BLOG DETAILS CONTENT ===============-->
        <section class="blog__details__section">

            <div class="container py-5">

                <div class="blog__details py-5 mt-5 mb-5">

                    <div class="row row-cols-1 row-cols-md-2 g-4">

                        <!--=============== BLOG DETAILS LEFT CONTENT ===============-->
                        <div class="col-md-9">

                            <div class="blog__details__left">

                                <div class="blog__details__image">
                                    <img src="<?= base_url('assets/images/blog__8.jpg') ?>" alt="">
                                </div>


                                <div class="blog__details__meta mt-5">

                                    <ul class="list-unstyled meta__list">

                                        <li class="meta__img d-flex align-items-center">
                                            <img src="<?= base_url('assets/images/autor__img.png') ?>" width="40" height="40" alt="">
                                            <span class="ms-2">By 
                                                <a href="#" class="ms-1">Admin</a>
                                            </span>
                                        </li>

                                        <li class="ms-3">
                                            <i class="bi bi-calendar4-week"></i>
                                            <span class="ms-1">
                                                <a href="#">March 2, 2018</a>
                                            </span>
                                        </li>

                                        <li class="ms-3">
                                            <i class="bi bi-chat-left-text"></i>
                                            <span class="ms-1">0</span>
                                        </li>

                                    </ul>
                                </div>


                                <div class="blog__details__content">

                                    <h3 class="blog__details__title">Believe in your dream.</h3>

                                    <p class="blog__details__text">
                                        Lorem Ipsn gravida nibh vel velit auctor aliqunean sollicitudinlorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbiaccumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbiac cumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.
                                    </p>

                                    <div class="blockquote py-3">
                                        
                                        <blockquote>
                                            <p>
                                                Cum sociis Theme natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam dictum felis eu pede mollis pretium.
                                            </p>
                                        </blockquote>

                                    </div>

                                    
                                    <p class="blog__details__text">
                                        Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitu din, lorem auci elit consequat ipsutissem niuis sed odio sit amet a sit amet.
                                    </p>

                                    
                                    <p class="blog__details__text">
                                        Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Sed fringilla mauris sit amet nibh.
                                    </p>


                                    <div class="blog__middle__images py-4">

                                        <div class="row row-cols-1 row-cols-md-3 g-4">

                                            <div class="col-md-4">
                                                <div class="blog__middle__img"><img src="<?= base_url('assets/images/post__1.jpg') ?>" alt=""></div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="blog__middle__img"><img src="<?= base_url('assets/images/post__2.jpg') ?>" alt=""></div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="blog__middle__img"><img src="<?= base_url('assets/images/post__3.jpg') ?>" alt=""></div>
                                            </div>

                                        </div>
                                        
                                    </div>


                                    <div class="blog__details__bottom">

                                        <h5 class="bottom__title">Eating Habit For Best Performance</h5>

                                        <p class="blog__details__text">
                                            Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbiaccumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbiac cumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.
                                        </p>

                                    </div>


                                </div>

                            </div>

                        </div>


                        <!--=============== BLOG DETAILS RIGHT CONTENT ===============-->
                        <div class="col-md-3">

                            <div class="blog__details__right">

                                <div class="blog__details__about">

                                    <h5 class="blog__right__title border-bottom border-secondary">About</h5>

                                    <p class="blog__details__text">
                                        Cum sociis Theme natoque penati bus et magnis dis parturient montes, nascetur ridiculus mus.
                                    </p>

                                </div>


                                <div class="blog__details__archive">

                                    <h5 class="blog__right__title border-bottom border-secondary">Archive</h5>

                                    <ul class="list-unstyled">
                                        <li><a href="#">July 2024</a></li>
                                        <li><a href="#">June 2024</a></li>
                                        <li><a href="#">May 2024</a></li>
                                        <li><a href="#">April 2024</a></li>
                                        <li><a href="#">March 2024</a></li>
                                        <li><a href="#">February 2024</a></li>
                                        <li><a href="#">January 2024</a></li>
                                        <li><a href="#">December 2023</a></li>
                                        <li><a href="#">November 2023</a></li>
                                        <li><a href="#">October 2023</a></li>
                                        <li><a href="#">September 2023</a></li>
                                        <li><a href="#">August 2023</a></li>
                                    </ul>

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