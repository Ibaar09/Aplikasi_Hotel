<body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Official Website Hotel Resik</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?=base_url('Home') ?>">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link active" href="<?= base_url('home/tentang')?>">Tentang</a></li>
                    </ul>
                    <a href="<?=base_url('Login')?>">
                        <button class="btn btn-outline-dark " type="submit">
                        <img src="<?=base_url('assets/')?>open-iconic/png/cart-6x.png" height="15" width="15">
                            Order
                        </button>
                    </a>
                    
                </div>
            </div>
        </nav>