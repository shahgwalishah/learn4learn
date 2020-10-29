<style>
    .navbar.navbar-transparent {
    background: rgb(255 193 8 / 98%) !important;
}
</style>

<nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
    <div class="container-fluid">
        <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
                <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <a class="navbar-brand" href="<?php echo e(route('homee')); ?>">
                <img style="height: 60px; width: 60px; border-radius: 40px" src="<?php echo e(asset('asset/images/logo1.png')); ?>"
                    alt="Logo">
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
            aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
        </button>
        <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">

                <li class="dropdown nav-item">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <div class="photo">
                            <img src="<?php echo e(asset('black')); ?>/img/anime3.png" alt="<?php echo e(__('Profile Photo')); ?>">
                        </div>
                        <b class="caret d-none d-lg-block d-xl-block"></b>
                        <p class="d-lg-none"><?php echo e(__('Log out')); ?></p>
                    </a>
                    <ul class="dropdown-menu dropdown-navbar">
                        <li class="nav-link">
                            <a href="<?php echo e(route('profile.edit')); ?>" class="nav-item dropdown-item"><?php echo e(__('Profile')); ?></a>
                        </li>

                        <li class="dropdown-divider"></li>
                        <li class="nav-link">
                            <a href="<?php echo e(route('logout')); ?>" class="nav-item dropdown-item"
                                onclick="event.preventDefault();  document.getElementById('logout-form').submit();"><?php echo e(__('Log out')); ?></a>
                        </li>
                    </ul>
                </li>
                <li class="separator d-lg-none"></li>
            </ul>
        </div>
    </div>
</nav>
<div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="<?php echo e(__('SEARCH')); ?>">
                <button type="button" class="close" data-dismiss="modal" aria-label="<?php echo e(__('Close')); ?>">
                    <i class="tim-icons icon-simple-remove"></i>
                </button>
            </div>
        </div>
    </div>
</div><?php /**PATH /home/mahad/Desktop/rixtexh/learn4learn/resources/views/layouts/navbars/navs/auth.blade.php ENDPATH**/ ?>