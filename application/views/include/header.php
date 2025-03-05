<header>

    <nav class="navbar navbar-expand-lg">
    
        <div class="container">

            <a class="navbar-brand" href="<?= base_url('') ?>">
                <img src="<?= base_url('assets/images/logo-light.png') ?>" alt="">
            </a>
            
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->

                <div class="navbar__btn" onclick="myFunction(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link me-3" href="<?= base_url() ?>">Home</a>
                    </li>
            
                    <li class="nav-item">
                        <a class="nav-link me-3" href="<?= base_url('about-us') ?>">About</a>
                    </li>
            
                    <li class="nav-item">
                        <a class="nav-link me-3" href="<?= base_url('our-blog') ?>">Blog</a>
                    </li>
            
                    <li class="nav-item">
                        <a class="nav-link me-3" href="<?= base_url('our-services') ?>">Service</a>
                    </li>
            
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('contact-us') ?>">Contact</a>
                    </li>
            
                </ul>
            </div>

        </div>

    </nav>

</header>
