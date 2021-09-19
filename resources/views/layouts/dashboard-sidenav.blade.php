<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                    <a class="nav-link" href="http://localhost/PHP_Dashboard/Admins/index.php">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Admin" aria-expanded="false" aria-controls="Admin">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Admins
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="Admin" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="http://localhost/PHP_Dashboard/Admins/user/index.php">Display Admins</a>
                        <a class="nav-link" href="http://localhost/PHP_Dashboard/Admins/user/create.php">Create Admin</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Role" aria-expanded="false" aria-controls="Role">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Roles
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="Role" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="http://localhost/PHP_Dashboard/Admins/roles/index.php">Display Roles</a>
                        <a class="nav-link" href="http://localhost/PHP_Dashboard/Admins/roles/create.php">Create Roles</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Category" aria-expanded="false" aria-controls="Category">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Category
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="Category" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="http://localhost/PHP_Dashboard/Admins/category/index.php">Display Category</a>
                        <a class="nav-link" href="http://localhost/PHP_Dashboard/Admins/category/create.php">Create Category</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Product" aria-expanded="false" aria-controls="Product">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Product
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="Product" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="http://localhost/PHP_Dashboard/Admins/Product/index.php">Display Product</a>
                        <a class="nav-link" href="http://localhost/PHP_Dashboard/Admins/Product/create.php">Create Product</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div>
