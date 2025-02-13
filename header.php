<nav class="navbar navbar-expand sticky-top" style="background-color:rgb(11, 112, 138);" data-bs-theme="dark">
        <div class="container-lg">
            <a class="navbar-brand" href="."><i class="bi bi-cup-hot"></i> Coffee Shop IT</a>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php echo $hasil['username']; ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end mt-2" style="background-color:rgb(230, 236, 236);" data-bs-theme="light">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person-square"></i> Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear"></i> Setting</a></li>
                            <li><a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-left"></i> Logout</a></li>
                        </ul>
                    </li>
                 </ul>
            </div>
        </div>
    </nav>