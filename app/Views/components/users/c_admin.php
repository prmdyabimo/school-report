<div class="relative overflow-x-auto shadow-md sm:rounded-lg my-4 py-4 px-4 bg-white">
    <div class="flex md:flex-row flex-col justify-between mb-4">
        <div class="flex justify-start">
            <h1 class="md:text-2xl text-xl text-[#A50022] font-bold">ADMIN</h1>
        </div>
        <div class="flex md:justify-end justify-start md:mt-0 mt-2">
            <button data-te-toggle="modal" data-te-target="#saveReport" data-te-ripple-init type="button" class="border-2 border-[#FFF] inline-block rounded px-6 py-2 tracking-wide text-sm font-bold uppercase leading-normal text-[#A50022] shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]" data-te-ripple-init data-te-ripple-color="light" style="background-color: #94C7F6;">
                Create Admin
            </button>
        </div>
    </div>
    <table id="tableReportsSession" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th class="w-auto"><span class="font-bold">No</span></th>
                <th class="w-auto"><span class="font-bold">Name</span></th>
                <th class="w-auto"><span class="font-bold">Email</span></th>
                <th class="w-auto"><span class="font-bold">Action</span></th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($users as $value) : ?>
                <tr>
                    <td class="text-capitalize"><?= $no++; ?></td>
                    <td class="text-capitalize"><?= $value['name']; ?></td>
                    <td class="text-capitalize"><?= $value['email']; ?></td>
                    <td class="text-capitalize">
                        <a id="btn_delete" href="/delete-user/<?= $value['id']; ?>">
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
                    Create Users
                </h5>
                <!--Close button-->
                <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <form id="form_register" method="POST" action="/add-admin">
                <?= csrf_field(); ?>

                <!--Form Input-->
                <div class="relative p-4">
                    <div class="flex gap-2 mb-3">
                        <div class="relative w-full">
                            <input type="text" class="name peer m-0 block h-[58px] w-full rounded border border-solid border-neutral-500 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-800 transition duration-200 ease-linear placeholder:text-transparent focus:border-primary focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-800 focus:outline-none peer-focus:text-primary [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]" name="name" placeholder="Masukkan nama lengkap" id="name" value="<?= old('name'); ?>" />
                            <?php if (validation_show_error('name')) : ?>
                                <div class="bg-red-100 mb-2 border border-red-400 text-red-700 py-2 px-3 rounded relative" role="alert">
                                    <span class="text-sm block sm:inline"><?= validation_show_error('name') ?></span>
                                </div>
                            <?php endif; ?>
                            <label for="name" class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-primary peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none">Name</label>
                        </div>
                        <div class="relative w-full">
                            <input type="email" class="email peer m-0 block h-[58px] w-full rounded border border-solid border-neutral-500 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-800 transition duration-200 ease-linear placeholder:text-transparent focus:border-primary focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-800 focus:outline-none peer-focus:text-primary [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]" name="email" placeholder="Masukkan email" id="email" value="<?= old('email'); ?>" />
                            <?php if (validation_show_error('email')) : ?>
                                <div class="bg-red-100 mb-2 border border-red-400 text-red-700 py-2 px-3 rounded relative" role="alert">
                                    <span class="text-sm block sm:inline"><?= validation_show_error('email') ?></span>
                                </div>
                            <?php endif; ?>
                            <label for="email" class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-primary peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none">Email</label>
                        </div>
                    </div>
                    <div class="flex gap-2 mb-3">
                        <div class="relative w-full">
                            <input type="password" name="password" id="password" class="password peer m-0 block h-[58px] w-full rounded border border-solid border-neutral-500 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-800 transition duration-200 ease-linear placeholder:text-transparent focus:border-primary focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-800 focus:shadow-te-primary focus:outline-none peer-focus:text-primary [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]" placeholder="Masukkan password" value="<?= old('password'); ?>" />
                            <?php if (validation_show_error('password')) : ?>
                                <div class="bg-red-100 mb-2 border border-red-400 text-red-700 py-2 px-3 rounded relative" role="alert">
                                    <span class="text-sm block sm:inline"><?= validation_show_error('password') ?></span>
                                </div>
                            <?php endif; ?>
                            <label for="password" class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-primary peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none">Password</label>
                            <button type="button" class="eyeIconButton absolute top-4 right-3 text-gray-700 focus:outline-none"">
                                <span class=" fas fa-eye eyeIcon"></span>
                            </button>
                        </div>
                    </div>
                </div>

                <!--Form Button-->
                <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-300 border-opacity-100 p-4">
                    <button id="btn_register" class="border-2 border-[#FFF] inline-block w-full rounded px-6 py-2 text-md tracking-wide font-bold uppercase leading-normal text-[#A50022] shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]" type="button" data-te-ripple-init data-te-ripple-color="light" style="background-color: #94C7F6;">
                        REGISTER
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>