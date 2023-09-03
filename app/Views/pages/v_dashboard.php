<?= $this->extend('templates/t_pages'); ?>

<?= $this->section('content'); ?>

<div class="relative h-[200px] sm:ml-64 bg-[#94C7F6]">
    <?= $this->include('components/utils/c_title'); ?>
    <div class="absolute w-full px-4 top-[65%]">
        <?= $this->include('components/dashboard/c_card'); ?>
        <?= $this->include('components/dashboard/c_reports_session'); ?>
    </div>
</div>


<?= $this->endSection(); ?>