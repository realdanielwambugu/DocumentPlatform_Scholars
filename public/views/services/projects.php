<?php require_once view('header'); ?>

<body>
    <main class="bgColor-pri">

        <?php require_once view('services/nav'); ?>

            <div id="home" class="w-full lg:w-9/12 bgColor-pri ff-pri
            m-0-auto lg:fx" data-aos="fade-down" data-aos-duration="1000">
                <div class="w-11/12 lg:w-1/2 pt-5 lg:pt-16 color-1 m-0-auto ls-wide">
                   <h1> Final Year Project/Website Development </h1>
                   <p class="py-4 fs-lg fw-400 lh-relaxed">
                        A team of awesome developers who are driven by perfectionism and
                        the urge to create something you like. Our main goal is to help you
                        as student succeed in your final year project.
                        We work very closely with our clients even long after completion
                        of a project – we are always at hand for further support WITH NO
                        additional cost.
                   </p>

                   <div class="w-8/12 lg:pt-6 lg:fx fx-j-btw">

                       <a href="/contact-us" class="no-line">
                           <button class="bgColor-sec color-1 fs-sm  py-3
                            w-40 border-0 rounded fw-bold ff-pri pointer outline-0
                           shadow hover:bgColor-1-700 mt-4 lg:mt-0"
                           type="button" name="button">
                              Contact Us
                           </button>
                       </a>

                   </div>
                </div>

                <div class="w-11/12 lg:w-1/2 m-0-auto py-4 lg:pt-0 mt-5">
                    <img class="w-full h-full cover"
                        src="<?= images_path('svg6.svg'); ?>"
                    alt="home image">
                </div>
            </div>

            <h2 class="ff-pri py-4 w-full txt-h-c color-1">
                How We Work?
            </h2>

            <div class="bgColor-pri w-full h-auto ff-pri lg:fx fx-j-c py-6 fw-700">

                <div class="bgColor-1 lg:w-1/4 w-11/12 mt-2 lg:mt-0 h-auto pt-4 px-4 ml-4
                rounded shadow color-2-700"
                data-aos="flip-left" data-aos-duration="1000">
                    <div class="bgColor-2-100 w-16 h-16 fx fx-j-c fx-i-c rounded-full
                    color-pri fw-bold mb-4">
                        <i class="fa fa-users fs-xl"></i>
                    </div>
                    <h2 class="ls-wide color-2">Step 1: Start</h2>
                    <p class="pt-2 fs-lg lh-relaxed">
                        We ask for your project requirements/proposal
                        which is used to design and develop your project by
                        our developers. Set the project deadline.
                    </p>
                </div>

                <div class="bgColor-1 lg:w-1/4 w-11/12 mt-2 lg:mt-0 h-auto py-4 px-4 ml-4
                rounded shadow color-2-700"
                data-aos="flip-left" data-aos-duration="1000">
                    <div class="bgColor-2-100 w-16 h-16 fx fx-j-c fx-i-c rounded-full
                    color-pri fw-bold mb-4">
                        <i class="fa fa-users fs-xl"></i>
                    </div>
                    <h2 class="ls-wide color-2">Step 2: Progress</h2>
                    <p class="pt-2 fs-lg lh-relaxed">
                        Follow the project development progress through your <?= app_name() ?>
                        account by logging in with your email and password. Photos of
                        the project progress are uploaded everyday.
                    </p>
                </div>

                <div class="bgColor-1 lg:w-1/4 w-11/12 mt-2 lg:mt-0 h-auto py-4 px-4 ml-4
                rounded shadow color-2-700"
                data-aos="flip-left" data-aos-duration="1000">
                    <div class="bgColor-2-100 w-16 h-16 fx fx-j-c fx-i-c rounded-full
                    color-pri fw-bold mb-4">
                        <i class="fa fa-users fs-xl"></i>
                    </div>
                    <h2 class="ls-wide color-2">Step 3: Completion</h2>
                    <p class="pt-2 fs-lg lh-relaxed">
                        You are given the chance to test the finished system demo.
                        After completing your payment. We guide you on how to use
                        the system and on how to make minor changes.
                    </p>
                </div>

            </div>

            <?php require_once view('services/footer'); ?>

    </main>

</body>

<?php require_once view('footer'); ?>
