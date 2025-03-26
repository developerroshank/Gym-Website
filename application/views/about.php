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

        <section class="about__page">

            <div class="about__page__inner">

                <?php $this->load->view('include/header') ?>

                <div class="container py-5">

                    <div class="page__heading py-5 mt-5 mb-5">
                        <h2>About us</h2>
                    </div>

                </div>

            </div>

        </section>




        <!--=============== FEAD SECTION ===============-->

        <section class="fead__section">

            <div class="container-fluid home__fead">

                <div class="container">

                    <div class="home__fead__inner py-5">

                        <!--=============== FEAD CARDS SECTION ===============-->
                        <div class="home__fead__cards py-5 mb-5">


                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-2">

                                <div class="col-lg-3">
                                    <div class="home__fead__card card h-100">
                                        <div class="card__img">
                                            <a href="#">
                                                <img src="<?= base_url('assets/images/icon__1.png') ?>" alt="...">
                                            </a>
                                        </div>

                                        <div class="card__body">
                                            <h5 class="card__title"><a href="#">Excellent Equipment</a></h5>
                                            <p class="card__text">Our facility contains state-of-the-art selections of machines, free weights, and everything you need to help elevate the experience of your training! We won't have you training with anything short of the best equipment to support your journey towards being fitter and stronger.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="home__fead__card card h-100">
                                        <div class="card__img">
                                            <a href="#">
                                                <img src="<?= base_url('assets/images/icon__2.png') ?>" alt="...">
                                            </a>
                                        </div>

                                        <div class="card__body">
                                            <h5 class="card__title"><a href="#">Healthy Nutrition Plan</a></h5>
                                            <p class="card__text">Our registered dietitians will personalize, for you, a multi-day meal plan that will help you reach your personal goals for fitness quickly, while keeping your nutrition scientifically balanced for your healthiest lifestyle. Fuel your workouts the right way!</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="home__fead__card card h-100">
                                        <div class="card__img">
                                            <a href="#">
                                                <img src="<?= base_url('assets/images/icon__3.png') ?>" alt="...">
                                            </a>
                                        </div>

                                        <div class="card__body">
                                            <h5 class="card__title"><a href="#">Shower Service</a></h5>
                                            <p class="card__text">We also provide premium shower and locker room services for you to get the sweat on, and freshen up after your workout. Our showers are cleaner than what you may find to be "clean" in your daily life - modern, clean and convenient to your active lifestyle.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="home__fead__card card h-100">
                                        <div class="card__img">
                                            <a href="#">
                                                <img src="<?= base_url('assets/images/icon__4.png') ?>" alt="...">
                                            </a>
                                        </div>

                                        <div class="card__body">
                                            <h5 class="card__title"><a href="#">Unique to You</a></h5>
                                            <p class="card__text">We recognize individuals have unique fitness goals which means, we offer individualized training regimens that are targeted to effectively help you realize your desired personal results.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>


                </div>

            </div>

        </section>




        <!--=============== FEAD SECTION ===============-->

        <section class="about__blog">

            <div class="container about__blog__inner py-5">

                <!--=============== ABOUT FEAD HEAD SECTION ===============-->
                <div class="section__head mt-5 mb-5 text-center">

                    <h2>Take Charge Of Your Life</h2>

                    <div class="text-center">
                        <h5>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec.</h5>
                    </div>

                </div>


                <!--=============== ABOUT CARD SECTION ===============-->
                <div class="about__cards py-5">

                    <div class="row row-cols-1 row-cols-md-3 g-4">

                        <div class="col">
                            <div class="about__card h-100">
                                <div class="about__card__image">
                                    <a href="#">
                                        <img src="<?= base_url('assets/images/blog__1.jpg') ?>" class="card-img-top" alt="...">
                                    </a>
                                </div>

                                <div class="about__card__body">
                                    <h5 class="about__card__date">August 2, 2024</h5>
                                    <h3 class="about__card__title"><a href="#">One-Hour Workout!</a></h3>
                                    <p class="about__card__text">Lorem Ipsn gravida nibh vel velit auctor aliqunean sollicitudinlorem quis bibendum auci elit consequat ipsutis sem ...</p>
                                    <div class="about__card__btn">
                                        <a href="#">Read more <i class="fa-solid fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="about__card h-100">
                                <div class="about__card__image">
                                    <a href="#">
                                        <img src="<?= base_url('assets/images/blog__2.jpg') ?>" class="card-img-top" alt="...">
                                    </a>
                                </div>

                                <div class="about__card__body">
                                    <h5 class="about__card__date">August 2, 2024</h5>
                                    <h3 class="about__card__title"><a href="#">One-Hour Workout!</a></h3>
                                    <p class="about__card__text">Lorem Ipsn gravida nibh vel velit auctor aliqunean sollicitudinlorem quis bibendum auci elit consequat ipsutis sem ...</p>
                                    <div class="about__card__btn">
                                        <a href="#">Read more <i class="fa-solid fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="about__card h-100">
                                <div class="about__card__image">
                                    <a href="#">
                                        <img src="<?= base_url('assets/images/blog__3.jpg') ?>" class="card-img-top" alt="...">
                                    </a>
                                </div>

                                <div class="about__card__body">
                                    <h5 class="about__card__date">August 2, 2024</h5>
                                    <h3 class="about__card__title"><a href="#">One-Hour Workout!</a></h3>
                                    <p class="about__card__text">Lorem Ipsn gravida nibh vel velit auctor aliqunean sollicitudinlorem quis bibendum auci elit consequat ipsutis sem ...</p>
                                    <div class="about__card__btn">
                                        <a href="#">Read more <i class="fa-solid fa-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>


        </section>





        <!--=============== SPONSOR SECTION ===============-->

        <section class="sponsored__section">

            <div class="sponsered__inner py-5">

                <div class="sponsered__images">

                    <ul class="list-unstyled d-flex">
                        <li class="list__img"><img src="<?= base_url('assets/images/fitness.png') ?>" alt="image"></li>
                        <li class="list__img"><img src="<?= base_url('assets/images/grosssport.png') ?>" alt="image"></li>
                        <li class="list__img"><img src="<?= base_url('assets/images/flex.png') ?>" alt="image"></li>
                        <li class="list__img"><img src="<?= base_url('assets/images/running.png') ?>" alt="image"></li>
                        <li class="list__img"><img src="<?= base_url('assets/images/tribe.png') ?>" alt="image"></li>
                    </ul>

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
