<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- icon -->
    <link rel="icon" type="image/png" href="<?= base_url('assets/images/logo.png'); ?>" />

    <!-- tailwind css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css'); ?>">

    <!-- custom css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css'); ?>">

    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title><?= $title; ?></title>

</head>

<body class="selection:bg-[#94C7F6] selection:text-[#A50022]">

    <?= $this->renderSection('content'); ?>

    <!-- TailwindCSS -->
    <script src="<?= base_url('assets/js/app.js'); ?>"></script>

    <!-- Flowbite -->
    <script src="<?= base_url('assets/flowbite/dist/flowbite.min.js'); ?>"></script>

    <!-- Tw-Elements -->
    <script src="<?= base_url('assets/tw-elements/dist/js/tw-elements.umd.min.js'); ?>"></script>

    <!-- TypedJs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="<?= base_url('assets/js/typed.js'); ?>"></script>

    <!-- Show Hide Password -->
    <script src="<?= base_url('assets/js/password.js'); ?>"></script>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- Sweet Alert -->
    <script src="<?= base_url('assets/sweetalert2/dist/sweetalert2.all.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/button.js'); ?>"></script>

    <!-- Message Error Or Success -->
    <?= $this->include('components/utils/c_message'); ?>

    <!-- AOS Animate -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


</body>

</html>