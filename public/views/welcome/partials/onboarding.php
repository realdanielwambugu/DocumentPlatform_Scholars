<div id="home" class="w-full lg:w-9/12 bgColor-pri ff-pri
m-0-auto lg:fx" data-aos="fade-down" data-aos-duration="1000">
    <div class="w-11/12 lg:w-1/2 pt-5 lg:pt-16 color-1 m-0-auto ls-wide">
       <h1>We help every student to always be confident and prepared. </h1>
       <p class="py-4 fs-lg fw-400 lh-relaxed">
        Our platform provides access to study documents for all your classes such
        Past Papers, Course PDFs. Other services include Final year project ideas,
        proposal writing and project development .
       </p>

       <div class="w-8/12 lg:pt-6 lg:fx fx-j-btw">

            <?php if (auth()->check()): ?>

                <a href="/contact-us" class="no-line">
                    <button class="bgColor-sec color-1 fs-sm  py-3
                     w-40 border-0 rounded fw-bold ff-pri pointer outline-0
                    shadow hover:bgColor-sec-700"
                    type="button" name="button">
                    Contact Us
                    </button>
                </a>

                <a href="/logout" class="no-line">
                    <button class="bgColor-3 color-1 fs-sm  py-3
                     w-40 border-0 rounded fw-bold ff-pri pointer outline-0
                    shadow hover:bgColor-1-700 mt-4 lg:mt-0"
                    type="button" name="button">
                    Sign Out
                    </button>
                </a>

            <?php else: ?>

                <a href="signup" class="no-line">
                    <button class="bgColor-sec color-1 fs-sm  py-3
                     w-40 border-0 rounded fw-bold ff-pri pointer outline-0
                    shadow hover:bgColor-sec-700"
                    type="button" name="button">
                    Start Now
                    </button>
                </a>

                <a href="signin" class="no-line">
                    <button class="bgColor-1 color-sec fs-sm  py-3
                     w-40 border-0 rounded fw-bold ff-pri pointer outline-0
                    shadow hover:bgColor-1-700 mt-4 lg:mt-0"
                    type="button" name="button">
                    Sign In
                    </button>
                </a>

            <?php endif; ?>

       </div>
    </div>

    <div class="w-11/12 lg:w-1/2 m-0-auto py-4 lg:pt-0 mt-5">
        <img class="w-full h-full cover"
            src="<?= images_path('svg3.svg'); ?>"
        alt="home image">
    </div>
</div>
