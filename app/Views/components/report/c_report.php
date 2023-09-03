<div class="relative overflow-x-auto shadow-md sm:rounded-lg my-4 py-4 px-4 bg-white">
    <div class="flex md:flex-row flex-col justify-between mb-4">
        <div class="flex justify-start">
            <h1 class="md:text-2xl text-xl text-[#A50022] font-bold">REPORTS</h1>
        </div>
        <div class="flex md:justify-end justify-start md:mt-0 mt-2">
            <button data-te-toggle="modal" data-te-target="#saveReport" data-te-ripple-init type="button" class="border-2 border-[#FFF] inline-block rounded px-6 py-2 tracking-wide text-sm font-bold uppercase leading-normal text-[#A50022] shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]" data-te-ripple-init data-te-ripple-color="light" style="background-color: #94C7F6;">
                Create Report
            </button>
        </div>
    </div>
    <table id="tableReportsSession" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th class="w-auto"><span class="font-bold">No</span></th>
                <th class="w-auto"><span class="font-bold">Name</span></th>
                <th class="w-auto"><span class="font-bold">Location</span></th>
                <th class="w-auto"><span class="font-bold">Category</span></th>
                <th class="w-auto"><span class="font-bold">Status</span></th>
                <th class="w-auto"><span class="font-bold">Action</span></th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($reports as $value) : ?>
                <tr>
                    <td class="text-capitalize"><?= $no++; ?></td>
                    <td class="text-capitalize"><?= $value['name']; ?></td>
                    <td class="text-capitalize"><?= $value['location']; ?></td>
                    <td class="text-capitalize"><?= $value['category']; ?></td>
                    <td class="text-capitalize"><?= $value['status']; ?></td>
                    <td class="text-capitalize">
                        <a href="/report-detail/<?= $value['id']; ?>">
                            <button data-te-ripple-init class="bg-green-500 hover:bg-green-600 p-1.5 rounded">
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607zM10.5 7.5v6m3-3h-6"></path>
                                </svg>
                            </button>
                        </a>
                        <a href="/report-show/<?= $value['id']; ?>">
                            <button data-te-ripple-init class="bg-yellow-500 hover:bg-yellow-600 p-1.5 rounded">
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"></path>
                                </svg>
                            </button>
                        </a>
                        <a id="btn_delete" href="/report-delete/<?= $value['id']; ?>">
                            <button class="bg-red-500 hover:bg-red-600 p-1.5 rounded">
                                <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="flex-shrink-0 w-5 h-5 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                                </svg>
                            </button>
                        </a>

                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div data-te-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="saveReport" tabindex="-1" aria-labelledby="exampleModalXlLabel" aria-modal="true" role="dialog">
    <div data-te-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px] min-[992px]:max-w-[800px] min-[1200px]:max-w-[1140px]">
        <div class="pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none">
            <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4">
                <!--Modal title-->
                <h5 class="text-xl font-medium leading-normal text-neutral-800" id="exampleModalXlLabel">
                    Create Report
                </h5>
                <!--Close button-->
                <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <form id="form_save" method="POST" action="/create-report" enctype="multipart/form-data">
                <?= csrf_field(); ?>

                <!--Modal body-->
                <div class="relative p-4">
                    <div class="flex md:flex-row flex-col gap-2 md:mb-4 mb-2">
                        <div class="relative w-full md:mb-0 mb-2">
                            <input type="text" class="peer m-0 block h-[58px] w-full rounded border border-solid <?= (validation_show_error('topic')) ? "border-red-500 text-red-500" : "border-neutral-300 text-neutral-700"; ?> bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight transition duration-200 ease-linear placeholder:text-transparent focus:border-primary focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-primary [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]" id="topic" name="topic" placeholder="Masukkan deskripsi" value="<?= old('topic'); ?>" />
                            <?php if (validation_show_error('topic')) : ?>
                                <div class="bg-red-100 mb-2 border border-red-400 text-red-500 py-2 px-3 rounded relative" role="alert">
                                    <span class="text-sm block sm:inline"><?= validation_show_error('topic') ?></span>
                                </div>
                            <?php endif; ?>
                            <label for="topic" class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-primary peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none">Topic</label>
                        </div>
                        <div class="relative w-full md:mb-0 mb-2">
                            <input type="text" class="peer m-0 block h-[58px] w-full rounded border border-solid <?= (validation_show_error('location')) ? "border-red-500 text-red-500" : "border-neutral-300 text-neutral-700"; ?> bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight transition duration-200 ease-linear placeholder:text-transparent focus:border-primary focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-primary [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]" id="location" name="location" placeholder="Masukkan judul" value="<?= old('location'); ?>" />
                            <?php if (validation_show_error('location')) : ?>
                                <div class="bg-red-100 mb-2 border border-red-400 text-red-500 py-2 px-3 rounded relative" role="alert">
                                    <span class="text-sm block sm:inline"><?= validation_show_error('location') ?></span>
                                </div>
                            <?php endif; ?>
                            <label for="location" class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-primary peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none">Location</label>
                        </div>
                    </div>
                    <div class="flex md:flex-row flex-col gap-2 md:mb-4 mb-2">
                        <div class="relative w-full md:mb-0 mb-2">
                            <input type="text" class="peer m-0 block h-[58px] w-full rounded border border-solid <?= (validation_show_error('detail')) ? "border-red-500 text-red-500" : "border-neutral-300 text-neutral-700"; ?> bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight transition duration-200 ease-linear placeholder:text-transparent focus:border-primary focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-700 focus:outline-none peer-focus:text-primary [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]" id="detail" name="detail" placeholder="Masukkan deskripsi" value="<?= old('detail'); ?>" />
                            <?php if (validation_show_error('detail')) : ?>
                                <div class="bg-red-100 mb-2 border border-red-400 text-red-500 py-2 px-3 rounded relative" role="alert">
                                    <span class="text-sm block sm:inline"><?= validation_show_error('detail') ?></span>
                                </div>
                            <?php endif; ?>
                            <label for="detail" class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-primary peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none">Detail</label>
                        </div>
                    </div>
                    <div id="category" class="relative w-full md:mb-0 mb-2">
                        <select name="category" data-te-select-init data-te-select-filter="true">
                            <option selected>== SELECT CATEGORY ==</option>
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
                    <div class="my-2">
                        <label for="formFileLg" class="inline-block text-neutral-700 dark:text-neutral-200">Image</label>
                        <input class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-neutral-300 bg-clip-padding font-normal leading-[2.15] text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none" id="formFileLg" type="file" name="image" />
                        <?php if (validation_show_error('image')) : ?>
                            <div class="bg-red-100 mb-2 border border-red-400 text-red-500 py-2 px-3 rounded relative" role="alert">
                                <span class="text-sm block sm:inline"><?= validation_show_error('image') ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4 bg-gray-100">
                    <button id="btn_save" data-te-toggle="modal" data-te-target="#exampleModalCenter" data-te-ripple-init type="button" class="border-2 border-[#FFF] inline-block rounded py-2 px-4 tracking-wide font-bold uppercase leading-normal text-[#A50022] shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]" data-te-ripple-init data-te-ripple-color="light" style="background-color: #94C7F6;">
                        Create
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>