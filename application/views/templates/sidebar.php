<!-- Sidebar -->
<ul class="navbar-nav bg-secondary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->

    <img src="<?= base_url(); ?>assets/home/assets/img/logo.png" alt="" class="img-fluid">


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- QUERY MENU DODIS .. join tabel menu dan user_access_menu -->
    <!-- pada ON id adalah primary dan menu_id adalah forint_key -->
    <?php
    $role_id = $this->session->userdata('role_id');
    $queryMenu =
        "SELECT 
            `user_menu`.`id`,
            `menu`
        FROM `user_menu`
        JOIN `user_access_menu`
        ON `user_menu`.`id` = `user_access_menu`.`menu_id` 
        WHERE `user_access_menu`.`role_id` = $role_id
        ORDER BY `user_access_menu`.`menu_id` ASC
    ";
    $menu = $this->db->query($queryMenu)->result_array();
    ?>

    <!-- LOOPING MENU -->
    <?php foreach ($menu as $m) : ?>
        <div class="sidebar-heading">
            <?= $m['menu']; ?>
        </div>

        <!-- SIAPKAN SUB MENU SESUAI MENU join sub menu dengan menunya  (* adalah keseluruhan-->
        <!-- pada ON manu_id adalah foreign_key dan id adalah primary key -->
        <!-- perhatikan from dan join untuk mengisi on -->
        <?php
        $menuId =  $m['id'];
        $querySubMenu =
            "SELECT *
            FROM `user_sub_menu`
            JOIN `user_menu`
            ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
            WHERE `user_sub_menu`.`menu_id` = $menuId
            AND `user_sub_menu`. `is_active` = 1
        ";
        $subMenu = $this->db->query($querySubMenu)->result_array();
        ?>

        <?php foreach ($subMenu as $sm) : ?>

            <?php if ($judul == $sm['title']) : ?>
                <li class="nav-item active">
                <?php else : ?>
                <li class="nav-item">
                <?php endif; ?>
                <a class="nav-link pb-0" href="<?= base_url($sm['url']); ?>">
                    <i class="<?= $sm['icon']; ?>"></i>
                    <span><?= $sm['title']; ?></span></a>
                </li>


            <?php endforeach; ?>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block mt-3">

        <?php endforeach; ?>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                <i class="fas fa-fw fa-door-open"></i>
                <span>Logout</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

</ul>
<!-- End of Sidebar -->