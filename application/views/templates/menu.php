<div class="navbar-inner">
        <div class="container">
                
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <i class="icon-reorder shaded"></i></a><a class="brand" href="<?= site_url('home') ?>">Home </a>
            <div class="nav-collapse collapse navbar-inverse-collapse">
                <ul class="nav nav-icons">
                </ul>
                <form class="navbar-search pull-left input-append" action="#">
                    <input type="text" class="span3">
                    <button class="btn" type="button">
                        <i class="icon-search"></i>
                    </button>
                </form>
            
            </div>
            <!-- /.nav-collapse -->

        </div>

    </div>
    <!-- /navbar-inner -->

    </div>
<!-- /navbar -->
<div class="wrapper">
    <div class="container">
        <div class="row">
            <div class="span3">
                <div class="sidebar">
                    <ul class="widget widget-menu unstyled">
                        <li><a href="#"><i class="menu-icon icon-tasks"></i>Year
                                <select id='select_year' class="select_year">
                                    <?php for ($i = $params['start_year']; $i <= $params['end_year']; $i++) {
                                        $selected = ($i == $year) ? "selected='selected'" : ''; ?>
                                        <option <?= $selected ?>> <?= $i ?> </option>
                                    <?php }
                                    ?>
                                </select> </a></li>
                        <li class="active"><a href="<?= site_url('employee') ?>"><i class="menu-icon icon-eye-open"></i>Employee
                            </a></li>
                        <li><a href="<?= site_url('employee/add_new') ?>"><i class="menu-icon icon-plus"></i>New Employee </a>
                        </li>
                        <li><a href="<?= site_url('contract') ?>"><i class="menu-icon icon-inbox"></i>Contracts </a></li>

                    </ul>
                    <!--/.widget-nav-->
                </div>
            </div>