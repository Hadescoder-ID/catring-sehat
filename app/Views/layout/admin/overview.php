<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->include('layout/admin/_partials/header'); ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
         <div class="preloader flex-column justify-content-center align-items-center">
            
        </div>

        <?= $this->include('layout/admin/_partials/navbar'); ?>
        <?= $this->include('layout/admin/_partials/sidebar'); ?>

        <div class="content-wrapper">
            <?= $this->include('layout/admin/_partials/breadcrumb'); ?>
            <section class="content">
                <div class="container-fluid">
                    <?= $this->renderSection('content'); ?>
                </div>
            </section>
        </div>

        <?= $this->include('layout/admin/_partials/footer'); ?>

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

    <?= $this->include('layout/admin/_partials/script'); ?>
</body>

</html>