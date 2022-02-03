<?php require_once view('header'); ?>

<body>

    <?php require_once view("services/nav"); ?>

    <main class="bgColor-1 w-11/12 lg:w-10/12 h-56 m-0-auto mt-5 ff-pri">
        <div class="w-full pt-1 lg:pt-4 pb-2 lg:pb-5 lg:fx fx-j-a">
            <div class="w-full lg:w-9/12 ">
                <input id="keyword" class="bgColor-sec-100 w-full py-2 lg:py-4
                px-2 rounded border b-color-sec-100 focus:bgColor-1 outline-0"
                type="text" name="keyword" placeholder="Search pdfs ..."
                onkeyup="(new Ajax).route('search-pdf')
                                   .data({keyword:keyword.value})
                                   .loader('doc_list')
                                   .container('doc_list')
                                   .send();">
            </div>

            <div class="pt-3 lg:pt-0">
                <a href="/upload" class="no-line">
                    <button class="bgColor-sec color-1 fs-sm py-2 lg:py-3
                    px-4 lg:px-5 border-0 rounded fw-bold ff-pri pointer outline-0
                    shadow hover:bgColor-sec-700"
                    type="button" name="button">
                     <i class="fas fa-upload"></i> Upload
                    </button>
                </a>
            </div>

        </div>


        <input type="hidden" id="doc_type" value="pdf">

        <div id="doc_list" class="fx fx-wrap fx-a-i fx-j-c">

            <?php require_once view("services/partials/pdfs"); ?>

        </div>
        
        <div id="loader_custom"  class="fx fx-a-i fx-j-c pt-4 pb-10 color-pri">
           <i class="fa fa-circle-o-notch fa-spin fa-lg" aria-hidden="true"></i>
        </div>
         
    </main>

<script type="text/javascript">
$(window).data('ajaxready', true);
</script>
</body>

<?php require_once view('footer'); ?>
