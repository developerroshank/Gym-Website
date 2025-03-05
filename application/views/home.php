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
    
    <section class="hero">
      
      <div class="container-fluid home__hero">
        <!--=============== HEADER SECTION ===============-->
        <?php $this->load->view('include/header') ?>
        
        <div class="container py-5">

          <div class="hero__left">

            <div class="hero__content">
              <h1>Strong</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, tempora voluptatum?</p>
            </div>

          </div>


          <div class="hero__bottom__text">
            <h2>2k24</h2>
          </div>

          <div class="hero__bottom__right text-end">
            <h5>What We have <br> to offer</h5>
          </div>

        </div>



      </div>

    </section>



    <!--=============== FEAD SECTION ===============-->

    <section class="fead__section">

      <div class="container-fluid home__fead">

        <div class="container">
  
          <div class="home__fead__inner py-5">

            <!--=============== FEAD HEAD SECTION ===============-->
            <div class="section__head mt-5 mb-5 text-center">

              <h2>Push your limits forward</h2>

              <div class="text-center">
                <h5>We aren't gonna be just a "gym" to you, because we are your accomplice for strength. Our expert trainers can partner with you to get you past the limits you have set, you will benefit from having the latest monitoring equipment, personalized nutritional guides, and a training facility designed with specialized equipment to realize your goals, while the only limit to what you can do is the one you define!</h5>
              </div>

            </div>

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






    <!--=============== GYM QUOTE SECTION ===============-->

    <section class="gym__quote__section">

      <div class="container-fluid gym__quote">

        <div class="gym__quote__inner">

          <div class="row row-cols-1">
  
            <!--=============== LEFT SECTION ===============-->
            <div class="col-md-6">
  
              <div class="gym__quote__content py-5 mt-5">

                <div class="quote__heading">
                  <h2>01</h2>
                  <h5>Designed to Deliver <br>
                  the Results You Want </h5>
                </div>

                <div class="quote__text">
                  <p>
                    With individualized training programs, professional expertise, and the desire for the highest quality results, brought each time you workout to the level you want, your training experience can speak for itself as you progress, whether focused on strength, endurance, or toning, we have the strategies designed for the maximum result!
                  </p>

                </div>

                <div class="mt-5 quote__btn">
                  <a href="#">Read More</a>
                </div>

              </div>
  
            </div>


            <!--=============== RIGHT SECTION ===============-->
            <div class="col-md-6">
              <div class="gym__qoute__img">
                <img src="<?= base_url('assets/images/gym__girl.jpg') ?>" alt="">
              </div>
            </div>
  
          </div>

        </div>

      </div>

    </section>







    <!--=============== PROTEIN SECTION ===============-->

    <section class="protein__section">

      <div class="protein__inner py-5">

        <!--=============== PROTEIN HEAD SECTION ===============-->
        <div class="section__head mt-5 mb-5 text-center">

          <h2>Protein Products</h2>

          <div class="container text-center">
            <h5>Our selection of 100 % whey protein assortments will enhance your action, next up, whether bulking, cutting, or sustaining, we have your protein needs covered next!</h5>
          </div>

        </div>




        <!--=============== PROTEIN CARDS SECTION ===============-->
        <div class="protein__cards py-5 mb-5">

          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-2">
            
            <div class="col-lg-3">
              <div class="protein__card card h-100">
                <div class="card__img">
                  <a href="#">
                    <img src="<?= base_url('assets/images/protein__1.png') ?>" alt="...">
                  </a>
                </div>

                <div class="card__body text-center">
                  <h5 class="card__title"><a href="#">Protein 100% Green</a></h5>
                  <h6 class="card__subtitle">$85</h6>
                </div>

                <div class="protein__text">
                  <p>For lean muscle gain (99% protein)</p>
                </div>
                
              </div>
            </div>
            

            <div class="col-lg-3">
              <div class="protein__card card h-100">
                <div class="card__img">
                  <a href="#">
                    <img src="<?= base_url('assets/images/protein__2.png') ?>" alt="...">
                  </a>
                </div>

                <div class="card__body text-center">
                  <h5 class="card__title"><a href="#">Protein 100% Purple</a></h5>
                  <h6 class="card__subtitle">$85</h6>
                </div>
                <div class="protein__text">
                  <p>Great for rehydration of muscle (98% protein)</p>
                </div>
              </div>
            </div>
            

            <div class="col-lg-3">
              <div class="protein__card card h-100">
                <div class="card__img">
                  <a href="#">
                    <img src="<?= base_url('assets/images/protein__3.png') ?>" alt="...">
                  </a>
                </div>

                <div class="card__body text-center">
                  <h5 class="card__title"><a href="#">Protein 100% Cyan</a></h5>
                  <h6 class="card__subtitle">$85</h6>
                </div>
                <div class="protein__text">
                  <p>For improved strength and endurance aid (96% protein)</p>
                </div>
              </div>
            </div>
            

            <div class="col-lg-3">
              <div class="protein__card card h-100">
                <div class="card__img">
                  <a href="#">
                    <img src="<?= base_url('assets/images/protein__4.png') ?>" alt="...">
                  </a>
                </div>

                <div class="card__body text-center">
                  <h5 class="card__title"><a href="#">Protein 100% Red</a></h5>
                  <h6 class="card__subtitle">$85</h6>
                </div>
                <div class="protein__text">
                  <p>For maximum intensity training (95% protein)</p>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>

    </section>



    


    <!--=============== PRICING PLANS SECTION ===============-->

    <section class="pricing__section">

      <div class="pricing py-5">
  
        <div class="container pricing__inner">
  
          <!--=============== PROTEIN HEAD SECTION ===============-->
          <div class="pricing__head mt-5 mb-5">
  
            <div class="pricing__heading">
              <h2>04</h2>
              <h5>Choose your <br>
              pricing plan</h5>
            </div>

          </div>


          <!--=============== PROTEIN CARDS SECTION ===============-->
          <div class="pricing__cards py-5">

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-5">
              

              <div class="col-lg-4">

                <div class="pricing__card card text-center h-100 py-5">

                  <div class="card__head mt-3">
                    <h2><sup>$</sup><span>33</span></h2>
                    <p>Single class</p>
                  </div>

                  <div class="card__body mt-5">

                    <h3>Class Drop-in</h3>

                    <ul class="list-unstyled mt-3">
                      <li class="card__text border-bottom border-dark px-4">Try one of our classes without a commitment to a membership.</li>
                      <li class="card__text border-bottom border-dark px-4">Perfect if you’re just in for a single drop-in or want to “test us out”.</li>
                      <li class="card__text border-bottom border-dark px-4">Quisque rutrum</li>
                    </ul>

                  </div>

                  <div class="card__btn py-4">

                    <a href="#">Read More</a>

                  </div>

                </div>

              </div>
              

              <div class="col-lg-4">

                <div class="pricing__card card text-center h-100 py-5">

                  <div class="card__head mt-3">
                    <h2><sup>$</sup>49</h2>
                    <p>Per month</p>
                  </div>

                  <div class="card__body mt-5">

                    <h3>12 Month Unlimited</h3>

                    <ul class="list-unstyled mt-3">
                      <li class="card__text border-bottom border-dark px-4">For serious practitioners who want unlimited access to everything you see,</li>
                      <li class="card__text border-bottom border-dark px-4">for one entire year! A great option for saving and committing.</li>
                      <li class="card__text border-bottom border-dark px-4">Quisque rutrum</li>
                    </ul>

                  </div>

                  <div class="card__btn py-4">

                    <a href="#">Read More</a>

                  </div>

                </div>

              </div>
              

              <div class="col-lg-4">

                <div class="pricing__card card text-center h-100 py-5">

                  <div class="card__head mt-3">
                    <h2><sup>$</sup>99</h2>
                    <p>Single class</p>
                  </div>

                  <div class="card__body mt-5">

                    <h3>6 Month Unlimited</h3>

                    <ul class="list-unstyled mt-3">
                      <li class="card__text border-bottom border-dark px-4">Unlimited access for 6-months to take your training to the next level.</li>
                      <li class="card__text border-bottom border-dark px-4">A great option for the person who is serious about their fitness goals.</li>
                      <li class="card__text border-bottom border-dark px-4">Quisque rutrum</li>
                    </ul>

                  </div>

                  <div class="card__btn py-4">

                    <a href="#">Read More</a>

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



  <!-- 
        

    Choose Your Pricing Plan


    - $33 | Class Drop-In: Try one of our classes without a commitment to a membership. Perfect if you’re just in for a single drop-in or want to “test us out”.

    - $49 | 12-Month Unlimited: For serious practitioners who want unlimited access to everything you see, for one entire year! A great option for saving and committing. 

    - $99 | 6-Month Unlimited: Unlimited access for 6-months to take your training to the next level. A great option for the person who is serious about their fitness goals. 



    Footer Section:

    Stay Connected and Informed

    - Fitness Tribe: Join our community, and never miss a beat in your fitness journey.
      
    - Latest News: Stay updated on upcoming fitness classes, health tips, and gym promotions.

    - Contact:

    Reach out to us for inquiries or membership details.  
    Phone: 
    Email: 
    Hours: Mon-Sat: 6 AM - 10 PM  
    Location: 

  -->


    


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