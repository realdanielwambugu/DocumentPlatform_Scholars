<?php require_once view('header'); ?>

<body>

    <?php require_once view("services/nav"); ?>

    <main class="bgColor-1 w-11/12 lg:w-10/12 h-56 m-0-auto mt-2 ff-pri">
        <div class="w-full lg:w-11/12 m-0-auto lg:fx fx-j-a fx-i-c py-4">

            <h4 class="pb-2 lg:pb-0"><?= $paper->title ?></h4>

                <a href="/public/assets/images/papers/docs/<?= $paper->document?>"
                    data-action-type='download' download='<?= $paper->title ?>'>
                    <button class="bgColor-pri color-1 fs-sm  py-2
                     w-40 border-0 rounded fw-bold ff-pri pointer outline-0
                    shadow hover:bgColor-pri-700"
                    type="button" name="button">
                        <i class="fal fa-download"></i> Download
                    </button>
                </a>

        </div>
        <div class="w-full lg:w-11/12 m-0-auto" id="adobe-dc-view" style="height:600px">
        </div>

        <script type="text/javascript">

            document.addEventListener("adobe_dc_view_sdk.ready", function()
            {
                var adobeDCView = new AdobeDC.View({clientId: "9d373c37a47a49bf93724fb168a3840b", divId: "adobe-dc-view"});
                adobeDCView.previewFile({
                    content:{location: {url: "/public/assets/images/papers/docs/<?= $paper->document ?>"}},
                    metaData:{fileName: "<?= $paper->title ?>"}
                }, {});
            });

        </script>

    </main>

</body>

<?php require_once view('footer'); ?>
