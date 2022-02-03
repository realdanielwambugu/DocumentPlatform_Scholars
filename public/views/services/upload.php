<?php require_once view('header'); ?>

<body>

    <?php require_once view("services/nav"); ?>

    <main class="bgColor-1 w-full lg:w-10/12 h-auto m-0-auto mt-5 ff-pri">
        <form id="upload" action="upload" method="post"
         class="w-11/12 lg:w-7/12 shadow  m-0-auto pt-4 pb-8" >
            <div class="w-8/12 m-0-auto ">
                <h3 class="py-1">Upload Document</h3>
            </div>

            <div class="fw-600 w-11/12 lg:w-8/12 m-0-auto mb-2">
                <label for="title" class="block py-2 fs-sm">File Name/Title</label>
                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                focus:b-color-pri outline-0"
                type="text" name="title" placeholder="eg: BBIT 8345 Business Law">
            </div>

            <div class="fw-600 w-11/12 lg:w-8/12 m-0-auto mb-2">
                 <label for="type" class="block py-2 fs-sm">File Type</label>
                 <select class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                 focus:b-color-pri outline-0" type="text" name="type">
                 <option value="">Example: pdf, book</option>
                    <option value="past paper">Past Paper</option>
                    <option value="pdf">Pdf</option>
                 </select>
            </div>

            <div class="fw-600 w-11/12 lg:w-8/12 m-0-auto mb-2">
                 <label for="document" class="block py-2 fs-sm">Pdf or Past paper File/Document</label>
                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                focus:b-color-pri outline-0"
                type="file" name="document" >
            </div>

            <div class="fw-600 w-11/12 lg:w-8/12 m-0-auto mb-2">
                 <label for="thumbnil" class="block py-2 fs-sm">
                    Thumbnil/File Preview Photo/ File Screenshot
                 </label>
                <input class="w-full py-2 px-2 rounded b-color-sec-300 border-2
                focus:b-color-pri outline-0"
                type="file" name="thumbnil" >
            </div>

            <p id="upload_response" class="w-full txt-h-c"></p>

            <div class="w-7/12 m-0-auto">
                <button id="upload_btn" class="w-full bgColor-pri rounded py-3 color-1
                mt-5 border-0 fw-bold hover:bgColor-pri-700 outline-0 pointer"
                type="button" name="button" onclick="(new Ajax).form('upload')
                                                        .loader('upload_btn')
                                                        .flush('upload_response')
                                                        .send();">
                <i class="fas fa-upload"></i> Upload
                </button>
            </div>

        </form>
    </main>

</body>

<?php require_once view('footer'); ?>
