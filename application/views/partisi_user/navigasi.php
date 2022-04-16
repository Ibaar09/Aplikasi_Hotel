<body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="<?= base_url('user/index')?>">Official Website Hotel Resik</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active"  aria-current="page" href="<?= base_url('user/index')?>">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link active"  aria-current="page" href="<?= base_url('user/tentang')?>">Tentang</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-link active dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Daftar Kategori Kamar</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?= base_url('kamar_jenis/tampil_standard')?>">Standard Room</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('kamar_jenis/tampil_superior')?>">Superior Room</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('kamar_jenis/tampil_deluxe')?>">Deluxe Room</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('kamar_jenis/tampil_junior')?>">Junior Suite Room</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('kamar_jenis/tampil_suite')?>">Suite Room</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('kamar_jenis/tampil_presidential')?>">Presidential Suite</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('kamar_jenis/tampil_single')?>">Single Room</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('kamar_jenis/tampil_twin')?>">Twin Room</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('kamar_jenis/tampil_double')?>">Double Room</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('kamar_jenis/tampil_family')?>">Family Room / Triple Room</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('kamar_jenis/tampil_connecting')?>">Connecting Room</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('kamar_jenis/tampil_murphy')?>">Murphy Room</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('kamar_jenis/tampil_accessible')?>">Accessible Room / Disabled Room</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('kamar_jenis/tampil_smoking')?>">Smoking / Non Smoking Room</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('kamar_jenis/tampil_cabana')?>">Cabana Room</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                        <li class="nav-item dropdown ">
                            <a class="nav-link nav-link active dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><?=$_SESSION["username"] ?><i class="fas fa-user fa-fw"></i></a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?=base_url('User/profile')?>">Profil</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="<?=base_url('Login/logout')?>">Keluar</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>