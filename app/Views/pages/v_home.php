<?= $this->extend('templates/t_auth'); ?>

<?= $this->section('content'); ?>

<div style="background-image: url('/assets/images/school2.jpg');" class="bg-cover bg-center bg-no-repeat h-screen relative bg-fixed flex items-center justify-center">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <!-- Isi konten di dalam elemen div -->
    <div class="flex flex-col items-center justify-center h-full relative md:w-1/2 w-full">
        <div data-aos="fade-down" data-aos-duration="2000" class="flex flex-col">
            <img src="<?= base_url('assets/images/logo.png'); ?>" alt="Logo SMKAA" class="w-[150px] mb-3 mx-auto">
            <h1 class="text-white font-bold text-center md:text-5xl text-2xl relative z-10">WELCOME TO <br> SCHOOL REPORT</h1>
        </div>
        <div class="flex my-4">
            <hr class="border-t border-[#94C7F6] border-[5px] w-12">
            <hr class="border-t border-[#A50022] border-[5px] w-12">
        </div>
        <h1 class="text-center text-white font-bold md:text-4xl text-xl relative z-10"><span class="typing-text"></span></h1>
        <div class="flex flex-row gap-2">
            <?= $this->include('components/auth/c_login'); ?>
            <?= $this->include('components/auth/c_register'); ?>
        </div>
        <div class="my-4" data-aos="zoom-in" data-aos-duration="2000">
            <a href="/recovery" class="text-white font-semibold hover:text-[#94C7F6] transition-all">Forgot Password ?</a>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>