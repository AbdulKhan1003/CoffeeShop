<?php include("session.php") ?>
<div class="header-text-dark header-nav layout-vertical">
    <div class="header-nav-wrap">
                <div class="header-nav-left">
            <div class="header-nav-item desktop-toggle">
                <div class="header-nav-item-select cursor-pointer">
                    <i class="nav-icon feather icon-menu icon-arrow-right"></i>
                </div>
            </div>
            <div class="header-nav-item mobile-toggle">
                <div class="header-nav-item-select cursor-pointer">
                    <i class="nav-icon feather icon-menu icon-arrow-right"></i>
                </div>
            </div>
        </div>
        <div class="header-nav-right">
            <div class="header-nav-item">
                <div class="dropdown header-nav-item-select nav-profile">
                    <div class="toggle-wrapper" id="nav-profile-dropdown" data-bs-toggle="dropdown">
                        <div class="avatar avatar-circle avatar-image"
                            style="width: 35px; height: 35px; line-height: 35px;">
                            <img src="assets/images/avatars/goku.jpg" alt="">
                        </div>
                        <span class="fw-bold mx-1">Hi,
                            <?php echo $_SESSION['fname'];
                            ?>
                        </span>
                        <i class="feather icon-chevron-down"></i>
                    </div>
                    <div class="dropdown-menu dropdown-menu-end">
                        <div class="nav-profile-header">
                            <div class="d-flex align-items-center">
                                <div class="avatar avatar-circle avatar-image">
                                    <img src="assets/images/avatars/goku.jpg" alt="">
                                </div>
                                <div class="d-flex flex-column ms-1">
                                    <span class="fw-bold text-dark"><?php echo $_SESSION['fname']; ?>
                                    </span>
                                    <span class="font-size-sm"><?php echo $_SESSION['email']; ?></span>
                                </div>
                            </div>
                        </div>
                        <a" class="dropdown-item">
                            <div class="d-flex align-items-center">
                                <i class="font-size-lg me-2 feather icon-power"></i>
                                <span><a href="includes/logout-page.php">Sign Out</a></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>