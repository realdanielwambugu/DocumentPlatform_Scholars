<?php require_once view('header'); ?>

<body>
    <main class="bgColor-pri">

        <?php require_once view('welcome/nav'); ?>

        <?php if ($route != '/' ) : ?>

          <div class="lg:h-screen">

              <?php require_once view("welcome/partials/{$route}"); ?>

          </div>

        <?php else: ?>

            <?php require_once view('welcome/partials/onboarding'); ?>

            <?php require_once view('welcome/partials/services'); ?>

            <?php require_once view('welcome/partials/contact-us'); ?>

        <?php endif; ?>

        <?php require_once view('welcome/partials/footer'); ?>

    </main>

</body>

<?php require_once view('footer'); ?>
