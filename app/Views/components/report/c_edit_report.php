<div class="relative overflow-x-auto shadow-md sm:rounded-lg my-4 py-4 px-4 bg-white">
    <div class="flex md:flex-row flex-col gap-4">
        <!-- LEFT -->
        <div class="flex flex-row md:flex-col items-center gap-4 p-4 shadow rounded-md lg:w-1/2 w-full h-full">
            <div class="flex flex-col items-center justify-center">
                <img class="w-36 h-36 rounded-md" src="<?= base_url('uploads/report/' . $report['image']); ?>" alt="<?= $data_user['name']; ?>">
                <button data-te-toggle="modal" data-te-target="#changeImage" data-te-ripple-init type="button" class="border-2 border-[#FFF] inline-block rounded px-6 py-2 my-2 tracking-wide text-sm font-bold uppercase leading-normal text-[#A50022] shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]" data-te-ripple-init data-te-ripple-color="light" style="background-color: #94C7F6;">
                    Change Image
                </button>
            </div>
        </div>
        <!-- RIGHT -->
        <form action="/edit-report/<?= $report['id']; ?>" method="post" class="form_edit flex flex-col gap-4 p-4 shadow rounded-md w-full">
            <?= csrf_field(); ?>
            <div class="flex md:flex-row flex-col w-full gap-4">
                <div class="relative w-full">
                    <input type="text" class="username peer m-0 block h-[58px] w-full rounded border border-solid <?= (validation_show_error('location')) ? "border-red-500 text-red-500" : "border-neutral-300 text-neutral-700"; ?> bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-800 transition duration-200 ease-linear placeholder:text-transparent focus:border-primary focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-800 focus:outline-none peer-focus:text-primary [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]" name="location" placeholder="Masukkan location" value="<?= $report['location']; ?>" />
                    <?php if (validation_show_error('location')) : ?>
                        <div class="bg-red-100 mb-2 border border-red-400 text-red-700 py-2 px-3 rounded relative" role="alert">
                            <span class="text-sm block sm:inline"><?= validation_show_error('location') ?></span>
                        </div>
                    <?php endif; ?>
                    <label for="location" class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-primary peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none">Location</label>
                </div>
            </div>
            <div class="flex md:flex-row flex-col w-full gap-4">
                <div class="relative w-full">
                    <input type="text" class="phone peer m-0 block h-[58px] w-full rounded border border-solid <?= (validation_show_error('detail')) ? "border-red-500 text-red-500" : "border-neutral-300 text-neutral-700"; ?> bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-800 transition duration-200 ease-linear placeholder:text-transparent focus:border-primary focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-800 focus:outline-none peer-focus:text-primary [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]" name="detail" placeholder="Masukkan detail" value="<?= $report['detail']; ?>" />
                    <?php if (validation_show_error('detail')) : ?>
                        <div class="bg-red-100 mb-2 border border-red-400 text-red-700 py-2 px-3 rounded relative" role="alert">
                            <span class="text-sm block sm:inline"><?= validation_show_error('detail') ?></span>
                        </div>
                    <?php endif; ?>
                    <label for="detail" class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-primary peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none">Detail</label>
                </div>
                <div class="relative w-full">
                    <input type="text" class="phone peer m-0 block h-[58px] w-full rounded border border-solid <?= (validation_show_error('topic')) ? "border-red-500 text-red-500" : "border-neutral-300 text-neutral-700"; ?> bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-800 transition duration-200 ease-linear placeholder:text-transparent focus:border-primary focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-800 focus:outline-none peer-focus:text-primary [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]" name="topic" placeholder="Masukkan topic" value="<?= $report['topic']; ?>" />
                    <?php if (validation_show_error('topic')) : ?>
                        <div class="bg-red-100 mb-2 border border-red-400 text-red-700 py-2 px-3 rounded relative" role="alert">
                            <span class="text-sm block sm:inline"><?= validation_show_error('topic') ?></span>
                        </div>
                    <?php endif; ?>
                    <label for="topic" class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-primary peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none">Topic</label>
                </div>
            </div>
            <div class="relative w-full">
                <div id="category" class="relative w-full md:mb-0 mb-2">
                    <select name="category" data-te-select-init data-te-select-filter="true">
                        <option selected value="<?= $report['category']; ?>"><?= $report['category']; ?></option>
                        <?php foreach ($categorys as $value) : ?>
                            <option value="<?= $value['name']; ?>"><?= $value['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <?php if (validation_show_error('category')) : ?>
                        <div class="bg-red-100 mb-2 border border-red-400 text-red-500 py-2 px-3 rounded relative" role="alert">
                            <span class="text-sm block sm:inline"><?= validation_show_error('category') ?></span>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="flex flex-shrink-0 flex-wrap items-center justify-end">
                <button data-te-toggle="modal" data-te-target="#exampleModalCenter" data-te-ripple-init type="button" class="btn_edit md:w-auto w-full border-2 border-[#FFF] inline-block rounded py-2 px-4 tracking-wide font-bold uppercase leading-normal text-[#A50022] shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]" data-te-ripple-init data-te-ripple-color="light" style="background-color: #94C7F6;">
                    Save
                </button>
            </div>
        </form>
    </div>
    <a class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out" href="/report">Back</a>
</div>


<div data-te-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="changeImage" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
    <div data-te-modal-dialog-ref class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
        <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-">
            <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4">
                <!--Modal title-->
                <h5 class="text-xl font-medium leading-normal text-neutral-800" id="exampleModalScrollableLabel">
                    Change Image
                </h5>
                <!--Close button-->
                <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <form class="form_edit" method="POST" action="/edit-image-report/<?= $report['id']; ?>" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="text" name="old_image" id="old_image" value="<?= $report['image']; ?>" hidden>

                <!--Modal body-->
                <div class="relative p-4">
                    <div class="relative w-full">
                        <img class="mx-auto" src="<?= base_url('uploads/report/' . $report['image']); ?>" alt="<?= $report['name']; ?>">
                    </div>
                    <div class="relative w-full md:mb-0 my-2">
                        <label for="file" class="mb-2 inline-block text-neutral-700">Image</label>
                        <input class="bg-neutral-100 py-1.5 relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-neutral-300 bg-clip-padding font-normal leading-[2.15] text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none" name="image" id="image" type="file" />
                        <?php if (validation_show_error('image')) : ?>
                            <div class="bg-red-100 mb-2 border border-red-400 text-red-700 py-2 px-3 rounded relative" role="alert">
                                <span class="text-sm block sm:inline"><?= validation_show_error('image') ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <!--Modal footer-->
                <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 bg-gray-100">
                    <button data-te-toggle="modal" data-te-target="#exampleModalCenter" data-te-ripple-init type="button" class="btn_edit border-2 border-[#FFF] inline-block rounded py-2 px-4 tracking-wide font-bold uppercase leading-normal text-[#A50022] shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]" data-te-ripple-init data-te-ripple-color="light" style="background-color: #94C7F6;">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>