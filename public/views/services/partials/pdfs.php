<?php foreach ($pdfs as  $pdf): ?>

    <div id="<?= $pdf->id ?>" class="bgColor-1 w-1/2 lg:w-2/12 pointer
        py-2 ListView__item"
    data-aos="zoom-in" data-aos-duration="1000">

    <a href="/open-pdf/<?= $pdf->title ?>/<?= $pdf->id ?>" class="no-line">

            <div class="w-full lg:w-10/12  m-0-auto border b-solid b-color-sec-200">
                <img class="w-full h-full contain"
                src="<?=
                    images_path('pdfs/thumbnil/' . $pdf->thumbnil)
                ?>" alt="thumbnil">
            </div>

            <div class="w-11/12 m-0-auto ">
                <p class="fs-sm fw-bold color-2-700  py-2 truncate">
                    <?= $pdf->title ?>
                </p>
              <div class="fx fx-wrap fs-sm fw-bold color-2-700 pb-1">
                  <p class="fs-sm fw-600 color-2-700 pb-1">
                      <?php
                        //   count_page(
                        //       'public/assets/images/pdfs/docs/' . $pdf->document
                        //   )
                      ?> 
                      <!--pages-->
                  </p>
                  <p class="pl-4"><i class="fa fa-download"></i> Download</p>
              </div>
            </div>
        </a>

    </div>

<?php endforeach; ?>
