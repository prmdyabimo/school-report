<button data-aos="zoom-in" data-aos-duration="2000" data-te-toggle="modal" data-te-target="#register" data-te-ripple-init data-te-ripple-color="light" type="button" class="border-2 border-[#FFF] mt-4 inline-block w-full rounded px-6 py-2 text-md tracking-wide font-bold uppercase leading-normal text-[#A50022] shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-0 active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]" type="submit" data-te-ripple-init data-te-ripple-color="light" style="background-color: #94C7F6;">
    REGISTER
</button>

<div data-te-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="register" tabindex="-1" aria-labelledby="exampleModalCenterTitle" aria-modal="true" role="dialog">
    <div data-te-modal-dialog-ref class="pointer-events-none relative flex min-h-[calc(100%-1rem)] w-auto translate-y-[-50px] items-center opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:min-h-[calc(100%-3.5rem)] min-[576px]:max-w-[500px]">
        <div class="pointer-events-auto relative flex w-full md:mx-0 mx-4 flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none">
            <div class="flex flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-300 border-opacity-100 p-4">
                <!--Modal title-->
                <h5 class="text-xl font-medium leading-normal text-neutral-800" id="exampleModalScrollableLabel">
                    Register Akun
                </h5>
                <!--Close button-->
                <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!--Form Register-->
            <form id="form_register" method="POST" action="/register">
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
                    </div>
                    <div class="flex gap-2 mb-3">
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
                            <input type="text" class="phone peer m-0 block h-[58px] w-full rounded border border-solid border-neutral-500 bg-transparent bg-clip-padding px-3 py-4 text-base font-normal leading-tight text-neutral-800 transition duration-200 ease-linear placeholder:text-transparent focus:border-primary focus:pb-[0.625rem] focus:pt-[1.625rem] focus:text-neutral-800 focus:outline-none peer-focus:text-primary [&:not(:placeholder-shown)]:pb-[0.625rem] [&:not(:placeholder-shown)]:pt-[1.625rem]" id="phone" name="phone" placeholder="Masukkan phone" value="<?= old('phone'); ?>" />
                            <?php if (validation_show_error('phone')) : ?>
                                <div class="bg-red-100 mb-2 border border-red-400 text-red-700 py-2 px-3 rounded relative" role="alert">
                                    <span class="text-sm block sm:inline"><?= validation_show_error('phone') ?></span>
                                </div>
                            <?php endif; ?>
                            <label for="phone" class="pointer-events-none absolute left-0 top-0 origin-[0_0] border border-solid border-transparent px-3 py-4 text-neutral-500 transition-[opacity,_transform] duration-200 ease-linear peer-focus:-translate-y-2 peer-focus:translate-x-[0.15rem] peer-focus:scale-[0.85] peer-focus:text-primary peer-[:not(:placeholder-shown)]:-translate-y-2 peer-[:not(:placeholder-shown)]:translate-x-[0.15rem] peer-[:not(:placeholder-shown)]:scale-[0.85] motion-reduce:transition-none">Phone</label>
                        </div>
                    </div>
                    <div class="relative">
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