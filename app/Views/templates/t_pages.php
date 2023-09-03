<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/logo.png'); ?>" type="image/x-icon">

    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
    <link href="https://cdn.datatables.net/colreorder/1.7.0/css/colReorder.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.2/css/uikit.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.5/css/dataTables.uikit.min.css" rel="stylesheet">

    <!-- TailwindCSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/app.css'); ?>">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css'); ?>">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="<?= base_url('assets/sweetalert2/dist/sweetalert2.min.css'); ?>">

    <!-- AOS Animate -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title><?= $title; ?></title>
</head>

<body class="selection:bg-[#94C7F6] selection:text-[#A50022] bg-gray-200">

    <?= $this->include('components/utils/c_navbar'); ?>

    <?= $this->include('components/utils/c_sidebar'); ?>

    <?= $this->renderSection('content'); ?>

    <!-- TailwindCSS -->
    <script src="<?= base_url('assets/js/app.js'); ?>"></script>

    <!-- Flowbite -->
    <script src="<?= base_url('assets/flowbite/dist/flowbite.min.js'); ?>"></script>

    <!-- Tw-Elements -->
    <script src="<?= base_url('assets/tw-elements/dist/js/tw-elements.umd.min.js'); ?>"></script>

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <!-- Sweet Alert -->
    <script src="<?= base_url('assets/sweetalert2/dist/sweetalert2.all.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/button.js'); ?>"></script>

    <!-- Message Error Or Success -->
    <?= $this->include('components/utils/c_message'); ?>

    <!-- Data Tables -->
    <script src="https://cdn.datatables.net/1.11.2/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/colreorder/1.7.0/js/dataTables.colReorder.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.2/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.2/js/uikit-icons.min.js"></script>

    <script>
        new DataTable('#tableReportsSession', {
            colReorder: true,
            responsive: true,
            rowReorder: {
                selector: 'td:nth-child(2)'
            }
        });
    </script>

    <!-- AOS Animate -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>