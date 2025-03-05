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

        <!--=============== CONTACT HEAD SECTION ===============-->
        <section class="contact__page">

            <div class="contact__page__inner">

                <?php $this->load->view('include/header') ?>

                <div class="container py-5">

                    <div class="page__heading py-5 mt-5 mb-5">
                        <h2>Contact us</h2>
                    </div>

                </div>

            </div>

        </section>


        <!--=============== CONTACT SECTION ===============-->

        <section class="contact">

            <div class="container py-5">

                <div class="contact__wrapper mt-5 mb-5">

                    <div class="row row-cols-1 row-cols-md-2">

                        <!--=============== CONTACT LEFT SECTION ===============-->
                        <div class="col-md-6">
                            <div class="conatct__map">

                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2923.2877739712285!2d77.09120057457214!3d28.615591184851443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1dda6b24b983%3A0x5151023fd48441c1!2sMireya%20Interiors%20Pvt.%20Ltd.!5e1!3m2!1sen!2sin!4v1722945034278!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                            </div>

                            <div class="contact__info mt-4">

                                <ul class="list-unstyled">

                                    <li>
                                        <h5 class="contact__info__title">Address</h5>
                                        <p class="contact__info__text">
                                            Weesperbuurt en Plantage,<br>
                                            Amsterdam, Netherlands
                                        </p>
                                    </li>

                                    <div class="row row-cols-1 row-cols-md-2 g-2">

                                        <div class="col-md-6">
                                            <li>
                                                <h5 class="contact__info__title">Phone</h5>
                                                <p class="contact__info__text"><a href="tel:">+91 988983837</a></p>
                                            </li>
                                        </div>

                                        <div class="col-md-6">
                                            <li>
                                                <h5 class="contact__info__title">EMail</h5>
                                                <p class="contact__info__text"><a href="mailto:">info@mireya.com</a></p>
                                            </li>
                                        </div>

                                    </div>
                                </ul>

                                <p class="contact__text">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis Theme natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                                </p>

                            </div>

                        </div>

                        <!--=============== CONTACT RIGHT SECTION ===============-->
                        <div class="col-md-6">

                            <div class="contact__form">

                                <div class="mb-4">
                                    <input type="text" class="form-control shadow-none" id="exampleFormControlInput1" placeholder="First Name">
                                </div>

                                <div class="mb-4">
                                    <input type="text" class="form-control shadow-none" id="exampleFormControlInput1" placeholder="Last Name">
                                </div>

                                <div class="mb-4">
                                    <input type="number" class="form-control shadow-none" id="exampleFormControlInput1" placeholder="Phone">
                                </div>

                                <div class="mb-4">
                                    <input type="email" class="form-control shadow-none" id="exampleFormControlInput1" placeholder="Email">
                                </div>

                                <div class="mb-4">
                                    <textarea class="form-control shadow-none" id="exampleFormControlTextarea1" rows="5" placeholder="Comment"></textarea>
                                </div>

                                <div class="contact__btn mt-5">
                                    <a href="#">Send</a>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>


        <!--=============== CONTACT SOCIAL SECTION ===============-->
        <section class="contact__social__section">

            <div class="contact__social py-5">

                <div class="contact__social__heading">
                    <h3>Connect with us</h3>
                </div>

                <div class="contact__social__inner mt-5 mb-5">

                    <ul class="list-unstyled d-flex justify-content-center align-items-center flex-wrap gap-3">
                        <li>
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </li>
                        
                        <li>
                            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                        </li>
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