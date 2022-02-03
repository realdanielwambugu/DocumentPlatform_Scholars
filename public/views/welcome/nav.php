<div class="h-16">
    <div  class="w-full fixed bgColor-pri t-0 shadow z-10">
        <header class="lg:w-9/12 h-16 lg:fx fx-j-a fx-i-c color-1
        ff-pri m-0-auto">

          <div class="fx fx-j-btw fx-i-c h-full">

              <div class="pl-4 fs-lg lg:fs-xl" >
                  <i class="fal fa-graduation-cap"> </i>
                  <?= app_name(); ?>
              </div>

              <div id="switch_nav" class="lg:hide">
                  <i class="pr-4 fal fa-bars"></i>
              </div>

          </div>

            <nav id="nav" class="xs:hide bgColor-pri lg:w-10/12 lg:h-full">
                <ul  class="fw-600 lg:fw-bold lg:fx fx-j-a fx-i-c lg:h-full
                lg:fs-lg pb-5 lg:pb-0 ls-wide list-none">
                    <li class="pointer py-2 lg:py-0">
                        <a href="/"
                        class="no-line <?= $route == '/' ? 'color-sec' : 'color-1' ?>">
                            Home
                        </a>
                    </li>

                    <li class="pointer py-2 lg:py-0">
                        <a href="/services"
                        class="no-line <?= $route == '/services' ? 'color-sec' : 'color-1' ?>">
                            Our Services
                        </a>
                    </li>

                    <li class="pointer py-2 lg:py-0">
                        <a href="/contact-us"
                        class="no-line <?= $route == '/contact-us' ? 'color-sec' : 'color-1' ?>" >
                          Contact Us
                        </a>
                    </li>

                    <?php if (auth()->check()): ?>

                        <li class="pointer py-2 lg:py-0">
                            <a href="/"
                            class="no-line color-1">
                               My Account
                            </a>
                        </li>

                        <li class="pointer py-2 lg:py-0">
                            <a href="/logout"
                            class="no-line color-1">
                               Sign Out
                            </a>
                        </li>

                    <?php else: ?>

                        <li class="pointer py-2 lg:py-0">
                            <a href="/signup"
                            class="no-line color-1">
                               Signup
                            </a>
                        </li>

                        <li class="pointer py-2 lg:py-0">
                            <a href="/signin"
                            class="no-line color-1" >
                                Login
                            </a>
                        </li>

                    <?php endif; ?>

                </ul>
            </nav>
        </header>
    </div>
</div>
