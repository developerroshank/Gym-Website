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

        <section class="service__page">

            <div class="service__page__inner">

                <?php $this->load->view('include/header') ?>

                <div class="container py-5">

                    <div class="page__heading py-5 mt-5 mb-5">
                        <h2>Our Services</h2>
                    </div>

                </div>

            </div>

        </section>




        <section class="services">

            <div class="container-fluid services__types">

                <div class="row row-cols-1 row-cols-md-3 g-0">

                    <div class="col">

                        <div class="services__type">

                            <div class="service__card">
                                
                                <div class="service__card__inner">
                                    
                                    <div class="service__card__img">
                                        <img src="<?= base_url('assets/images/service__1.jpg') ?>" alt="">
                                    </div>

                                    <div class="service__card__content">

                                        <img src="<?= base_url('assets/images/service__icon__1.png') ?>" alt="">
                                        <h3>Group Fitness</h3>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="col">

                        <div class="services__type">

                            <div class="service__card">
                                
                                <div class="service__card__inner">
                                    
                                    <div class="service__card__img">
                                        <img src="<?= base_url('assets/images/service__2.jpg') ?>" alt="">
                                    </div>

                                    <div class="service__card__content">

                                        <img src="<?= base_url('assets/images/service__icon__2.png') ?>" alt="">
                                        <h3>Group Fitness</h3>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="col">

                        <div class="services__type">

                            <div class="service__card">
                                
                                <div class="service__card__inner">
                                    
                                    <div class="service__card__img">
                                        <img src="<?= base_url('assets/images/service__3.jpg') ?>" alt="">
                                    </div>

                                    <div class="service__card__content">

                                        <img src="<?= base_url('assets/images/service__icon__3.png') ?>" alt="">
                                        <h3>Group Fitness</h3>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        

        <section class="service__bottom">

            <div class="container service__bottom__inner py-5">

                <!--=============== ABOUT FEAD HEAD SECTION ===============-->
                <div class="section__head mt-5 mb-5 text-center">

                    <h2>Take Charge Of Your Life</h2>

                    <div class="text-center">
                        <h5>Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec.</h5>
                    </div>

                </div>



                <div class="service__bottom__crads">

                    <div class="row row-cols-1 row-cols-md-4 g-3">

                        <div class="col">
                            <a href="#">
                                <div class="service__bottom__card card text-center">
    
                                    <div class="service__image__box">

                                        <div class="service__imge__box__inner">
                                            <div class="service__bottom__img">
                                                <img src="<?= base_url('assets/images/process__1.png') ?>" class="card-img-top" alt="...">
                                            </div>
    
                                            <div class="service__image__text">
                                                <h5>1</h5>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="card__body mt-4">
                                        <h5 class="card__title">movement</h5>
                                        <p class="card__text">Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
                                    </div>
    
                                </div>
                            </a>
                        </div>

                        <div class="col">
                            <a href="#">
                                <div class="service__bottom__card card text-center">
    
                                    <div class="service__image__box">

                                        <div class="service__imge__box__inner">
                                            <div class="service__bottom__img">
                                                <img src="<?= base_url('assets/images/process__2.png') ?>" class="card-img-top" alt="...">
                                            </div>
    
                                            <div class="service__image__text">
                                                <h5>2</h5>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="card__body mt-4">
                                        <h5 class="card__title">time</h5>
                                        <p class="card__text">Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
                                    </div>
    
                                </div>
                            </a>
                        </div>

                        <div class="col">
                            <a href="#">
                                <div class="service__bottom__card card text-center">
    
                                    <div class="service__image__box">

                                        <div class="service__imge__box__inner">
                                            <div class="service__bottom__img service__bottom__img__third">
                                                <img src="<?= base_url('assets/images/process__1.png') ?>" class="card-img-top" alt="...">
                                            </div>
    
                                            <div class="service__image__text">
                                                <h5>3</h5>
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="card__body mt-4">
                                        <h5 class="card__title">practice</h5>
                                        <p class="card__text">Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
                                    </div>
    
                                </div>
                            </a>
                        </div>

                        <div class="col">
                            <a href="#">
                                <div class="service__bottom__card card text-center">
    
                                    <div class="service__image__box">

                                        <div class="service__imge__box__inner">
                                            <div class="service__bottom__img">
                                                <img src="<?= base_url('assets/images/process__4.png') ?>" class="card-img-top" alt="...">
                                            </div>
    
                                            <div class="service__image__text">
                                                <h5>4</h5>
                                            </div>
                                        </div>

                                    </div>
    
                                    <div class="card__body mt-4">
                                        <h5 class="card__title">weight loss</h5>
                                        <p class="card__text">Lorem, ipsum dolor sit amet consectetur adipisicing elit</p>
                                    </div>
    
                                </div>
                            </a>
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