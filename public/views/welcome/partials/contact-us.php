
 <div data-aos="fade-up" data-aos-duration="1000">
     <h2 class="pt-4 w-full txt-h-c color-1 fs-xl ls-wide lh-relaxed">
         Interact With Us For Better Service Delivery.
     </h2>

      <div class="w-full h-auto ff-pri py-6 fw-700 txt-h-c" >
          <p class="color-1 ">
              Call/WhatsApp:
              <span class="fw-bold"> +254721233204 or +254701564753</span>
          </p>

          <form id="contact_form" class="w-11/12 lg:w-1/2 m-0-auto py-4"
          action="contact-us" method="post">

          <h4 class="color-1 mb-4">Send An Email</h4>

            <?php if (!auth()->check()): ?>

                <p class="pb-4 color-1">
                    PLease
                        <a href="/signin" class="no-line color-sec">
                            login
                        </a>
                    to send an email </p>

            <?php endif; ?>

          <!-- <input class="w-full py-2 mb-5  rounded b-color-sec-300 border-2
          focus:b-color-pri outline-0 px-2" type="text" name=""
          placeholder="Full Name">

          <input class="w-full py-2 mb-5  rounded b-color-sec-300 border-2
          focus:b-color-pri outline-0 px-2" type="text" name=""
          placeholder="Email"> -->

          <input class="w-full py-2 mb-5  rounded b-color-sec-300 border-2
          focus:b-color-pri outline-0 px-2" type="text" name="subject"
          placeholder="Subject">

          <textarea class="w-full  rounded b-color-sec-300 border-2
          focus:b-color-pri outline-0 py-2 px-2 ff-pri" name="message" rows="8"
          placeholder="Message..."></textarea>

          <p id="response" class="w-full txt-h-c pt-2"></p>

         <div class="w-full py-4">
             <button id="contact_btn" class="bgColor-sec color-1 fs-xs  py-2
              w-24  border-0 rounded fw-bold ff-pri pointer outline-0
             shadow hover:bgColor-sec-700"
             type="button" name="button"
             onclick="
             (new Ajax).form('contact_form')
                       .loader('contact_btn')
                       .flush('response')
                       .send();">
                 Send Now
             </button>
         </div>
        </form>

      </div>

 </div>
