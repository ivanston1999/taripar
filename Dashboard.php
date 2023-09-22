<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ProMan - Personal Portfolio HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.dashboard.css" rel="stylesheet">
    <style>
        /* Header Styles */
        .custom-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f5f5f5;
            /* Ganti dengan warna latar yang diinginkan */
            padding: 10px 20px;
        }

        .logo-container {
            display: flex;
            align-items: center;
        }


        /* Perbesar ukuran logo Taripar */
        .logo-taripar {
            width: 100px;
            /* Ukuran lebar logo Taripar yang lebih besar */
            height: auto;
            /* Tinggi disesuaikan secara otomatis */
        }

        .dashboard-text {
            font-family: Arial, sans-serif;
            /* Jenis font Arial */
            font-size: 24px;
            /* Ukuran font */

        }

        /* CSS untuk Informasi Box */
        .info-box {
            background-color: #f5f5f5;
            /* Warna latar belakang abu-abu putih */
            padding: 10px;
            border-radius: 5px;
            /* Untuk sudut yang lebih lembut */
            margin-top: 20px;
            /* Jarak atas dari header */
            width: 300px;
            /* Lebar kotak informasi */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Efek bayangan */
            font-family: Arial, sans-serif;
            /* Jenis font Arial */
        }

        .info-box p {
            margin: 5px 0;
        }

        /* CSS untuk Gambar */
        .info-image {
            margin-top: 20px;
            /* Jarak atas dari info box */
            width: 100%;
            /* Lebar gambar sesuai dengan lebar header */
            max-width: 100%;
            /* Lebar gambar tidak melebihi lebar parent (info-box) */
            display: block;
            /* Membuat gambar menjadi elemen block agar berada di bawah info box */
            border: 1px solid #ddd;
            /* Contoh: menambahkan border */
            border-radius: 5px;
            /* Sudut yang lebih lembut */
        }

        /* Style for the modal */
        .myModal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 1000;
        }

        /* Style for the content within the modal */
        .modal-content iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* Style for the overlay */
.overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7); /* Warna latar belakang gelap dengan opacity */
    z-index: 999; /* Mengatur z-index di atas modal */
}

/* Style for the content within the modal */
.modal-content {
    width: 60%;
    height: 70%;
    transform: translate(-50%, -50%);
    top: 50%;
    left: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: auto; /* Ini akan menambahkan gulir jika kontennya lebih besar dari modal */
    position: relative; /* Menyertakan posisi relatif untuk mengontrol posisi tombol close */
}

/* Style for the close button */
.close {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 24px;
    color: #000000;
    cursor: pointer;
}



    </style>

</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <!-- Spinner Start -->
    
    <!-- Spinner End -->

    <!-- Header -->
    <div class="custom-header">
        <div class="logo-container">
            <img src="img/del.png" alt="Del Logo" class="logo" style="width: 60px; height: auto;">
            <img src="img/taripar.png" alt="Taripar Logo" class="logo-taripar" style="width: 150px; height: auto;">
        </div>
        <div class="dashboard-text">Dashboard</div>
    </div>
    <!-- Header End -->

    <!-- Informasi Box -->
    <div class="info-box">
        <p><strong>Lokasi:</strong> Desa Hutajulu</p>
        <p><strong>Luas:</strong> 10 Ha; <strong>mdpl:</strong> 1400 m</p>
        <p><strong>Koordinat:</strong> 2,14362, 98,657265</p>
    </div>
    <!-- Informasi Box End -->

    <!-- Gambar -->
    <img src="img/peta.png" alt="Gambar Anda" class="info-image">

    <!-- Expertise Start -->
    <div class="container-xxl py-6 pb-5" id="skill"
        style="display: flex; justify-content: center; align-items: center; min-height: 100vh;">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">

                    <div class="nav nav-pills rounded border border-2 border-primary mb-5">
                        <button class="nav-link w-33 py-3 fs-5 active" data-bs-toggle="pill" href="#tab-1"
                            style="width: 33.33%;">Experience</button>
                        <button class="nav-link w-33 py-3 fs-5" data-bs-toggle="pill" href="#tab-2"
                            style="width: 33.33%;">Education</button>
                        <button class="nav-link w-33 py-3 fs-5" data-bs-toggle="pill" href="#tab-3"
                            style="width: 33.33%;">Trading</button>
                    </div>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-6">
                                    <h5>UI Designer</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2000 - 2045</p>
                                    <h6 class="mb-0">Apex Software Inc</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Product Designer</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2000 - 2045</p>
                                    <h6 class="mb-0">Apex Software Inc</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Web Designer</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2000 - 2045</p>
                                    <h6 class="mb-0">Apex Software Inc</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Apps Designer</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2000 - 2045</p>
                                    <h6 class="mb-0">Apex Software Inc</h6>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row gy-5 gx-4">
                                <div class="col-sm-6">
                                    <h5>UI Design Course</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2000 - 2045</p>
                                    <h6 class="mb-0">Cambridge University</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>IOS Development</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2000 - 2045</p>
                                    <h6 class="mb-0">Cambridge University</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Web Design</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2000 - 2045</p>
                                    <h6 class="mb-0">Cambridge University</h6>
                                </div>
                                <div class="col-sm-6">
                                    <h5>Apps Design</h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">2000 - 2045</p>
                                    <h6 class="mb-0">Cambridge University</h6>
                                </div>
                            </div>
                            <div id="tab-3" class="tab-pane fade show p-0 active">
                                <div class="row gy-5 gx-4">
                                    <div class="col-sm-6">
                                        <h5>Designer</h5>
                                        <hr class="text-primary my-2">
                                        <p class="text-primary mb-1">2000 - 2045</p>
                                        <h6 class="mb-0">Apex Sware Inc</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <h5>Product </h5>
                                        <hr class="text-primary my-2">
                                        <p class="text-primary mb-1">2000 - 2045</p>
                                        <h6 class="mb-0">ASoftware Inc</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <h5>Web</h5>
                                        <hr class="text-primary my-2">
                                        <p class="text-primary mb-1">2000 - 2045</p>
                                        <h6 class="mb-0">Apex SoftInc</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <h5>Apps</h5>
                                        <hr class="text-primary my-2">
                                        <p class="text-primary mb-1">2000 - 2045</p>
                                        <h6 class="mb-0">Apex Software</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Expertise End -->


    <!-- Service Start -->


    <div class="container-xxl py-6 pb-5" id="skill"
    style="display: flex;  ; min-height: 100vh;">
        <div class="row g-6">

            

                <div class="nav nav-pills rounded border border-2 border-primary mb-5">
                    <button class="nav-link w-33 py-3 fs-5 active" data-bs-toggle="pill" href="#tab-1"
                        style="width: 33.33%;">Experience</button>
                    <button class="nav-link w-33 py-3 fs-5" data-bs-toggle="pill" href="#tab-2"
                        style="width: 33.33%;">Education</button>
                    <button class="nav-link w-33 py-3 fs-5" data-bs-toggle="pill" href="#tab-3"
                        style="width: 33.33%;">Trading</button>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row gy-5 gx-4">
                       
                        <div class="container">
    <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="col-lg-6">
            <h1 class="display-5 mb-0" style="font-family: Arial;">Sensor Information</h1>
            <h3 class="parameter" style="font-family: Arial;">Nitrogen</h3>
        </div>
    </div>

    <div class="row">
        <!-- Kolom Pertama -->
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="">
                <button class="btn open-modal" data-target="chartNitrogen/charts1.php">
                    <iframe id="chartFrame" src="chartNitrogen/charts1.php" frameborder="0" width="850" height="500"></iframe>
                </button>
                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <iframe id="modal-iframe" src=""></iframe>
                    </div>
                </div>
                <div>
                    <h4 class="text-center">Sensor 1</h4>
                </div>
            </div>
        </div>

        <!-- Kolom Kedua -->
        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item position-relative">
                <button class="btn open-modal" data-target="chartNitrogen/charts1.php">
                    <iframe id="chartFrame2" src="chartNitrogen/charts1.php" frameborder="0" width="850" height="500"></iframe>
                </button>
                <div id="myModal2" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <iframe id="modal-iframe2" src=""></iframe>
                    </div>
                </div>
                <div>
                    <h4 class="text-center">Sensor 2</h4>
                </div>
            </div>
        </div>

        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item position-relative">
                <button class="btn open-modal" data-target="chartNitrogen/charts1.php">
                    <iframe id="chartFrame2" src="chartNitrogen/charts1.php" frameborder="0" width="850" height="500"></iframe>
                </button>
                <div id="myModal2" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <iframe id="modal-iframe2" src=""></iframe>
                    </div>
                </div>
                <div>
                    <h4 class="text-center">Sensor 3</h4>
                </div>
            </div>
        </div>

        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item position-relative">
                <button class="btn open-modal" data-target="chartNitrogen/charts1.php">
                    <iframe id="chartFrame2" src="chartNitrogen/charts1.php" frameborder="0" width="850" height="500"></iframe>
                </button>
                <div id="myModal2" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <iframe id="modal-iframe2" src=""></iframe>
                    </div>
                </div>
                <div>
                    <h4 class="text-center">Sensor 4</h4>
                </div>
            </div>
        </div>

        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item position-relative">
                <button class="btn open-modal" data-target="chartNitrogen/charts1.php">
                    <iframe id="chartFrame2" src="chartNitrogen/charts1.php" frameborder="0" width="850" height="500"></iframe>
                </button>
                <div id="myModal2" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <iframe id="modal-iframe2" src=""></iframe>
                    </div>
                </div>
                <div>
                    <h4 class="text-center">Sensor 5</h4>
                </div>
            </div>
        </div>

        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item position-relative">
                <button class="btn open-modal" data-target="chartNitrogen/charts1.php">
                    <iframe id="chartFrame2" src="chartNitrogen/charts1.php" frameborder="0" width="850" height="500"></iframe>
                </button>
                <div id="myModal2" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <iframe id="modal-iframe2" src=""></iframe>
                    </div>
                </div>
                <div>
                    <h4 class="text-center">Sensor 6</h4>
                </div>
            </div>
        </div>

        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item position-relative">
                <button class="btn open-modal" data-target="chartNitrogen/charts1.php">
                    <iframe id="chartFrame2" src="chartNitrogen/charts1.php" frameborder="0" width="850" height="500"></iframe>
                </button>
                <div id="myModal2" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <iframe id="modal-iframe2" src=""></iframe>
                    </div>
                </div>
                <div>
                    <h4 class="text-center">Sensor 7/h4>
                </div>
            </div>
        </div>



       
    </div>
</div>

               
                    </div>
                    </div>
    
    <!-- Service End -->
                      
                    <div id="tab-2" class="tab-pane fade show p-0">
                        <div class="row gy-5 gx-4">
                            <!-- Isi Tab Education -->
                        </div>
                    </div>
                    <div id="tab-3" class="tab-pane fade show p-0">
                        <div class="row gy-5 gx-4">
                            <!-- Isi Tab Trading -->
                        </div>
                    </div>
                
           
        
    </div>

<!-- Expertise End -->


    <!-- Team Start -->
    <div class="container-xxl py-6 pb-5" id="team">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0" style="font-family: Arial;">Photo</h1>
                </div>

            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <img class="img-fluid rounded" src="img/peta.png" alt="">
                        <div class="team-text bg-white rounded-end p-4">
                            <div>
                                <h5>Drone MUltispectral</h5>
                                <span>27 Juni 2023</span>
                            </div>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/peta.png"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <img class="img-fluid rounded" src="img/peta.png" alt="">
                        <div class="team-text bg-white rounded-end p-4">
                            <div>
                                <h5>Drone MUltispectral</h5>
                                <span>20 Juli 2023</span>
                            </div>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/peta.png"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <img class="img-fluid rounded" src="img/peta.png" alt="">
                        <div class="team-text bg-white rounded-end p-4">
                            <div>
                                <h5>Drone MUltispectral</h5>
                                <span>31 Juli 2023</span>
                            </div>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/peta.png"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->

    <!-- Team Start -->
    <div class="container-xxl py-6 pb-5" id="team">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0" style="font-family: Arial;">Drone</h1>
                </div>

            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <img class="img-fluid rounded" src="img/peta.png" alt="">
                        <div class="team-text bg-white rounded-end p-4">
                            <div>
                                <h5>Drone MUltispectral</h5>
                                <span>27 Juni 2023</span>
                            </div>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/peta.png"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <img class="img-fluid rounded" src="img/peta.png" alt="">
                        <div class="team-text bg-white rounded-end p-4">
                            <div>
                                <h5>Drone MUltispectral</h5>
                                <span>20 Juli 2023</span>
                            </div>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/peta.png"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <img class="img-fluid rounded" src="img/peta.png" alt="">
                        <div class="team-text bg-white rounded-end p-4">
                            <div>
                                <h5>Drone MUltispectral</h5>
                                <span>31 Juli 2023</span>
                            </div>
                            <a class="btn btn-lg-square btn-outline-secondary border-2 mx-1" href="img/peta.png"
                                data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->




    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>



    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.dashboard.js"></script>


    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var openModalButtons = document.querySelectorAll('.open-modal');
        var modal = document.getElementById('myModal');
        var modalIframe = document.getElementById('modal-iframe');
        var closeModalButton = modal.querySelector('.close');

        openModalButtons.forEach(function (button) {
            button.addEventListener('click', function () {
                var target = this.getAttribute('data-target');
                modalIframe.src = target;
                modal.style.display = 'block';
            });
        });

        closeModalButton.addEventListener('click', function () {
            modal.style.display = 'none';
            modalIframe.src = ''; // Clear the iframe source
        });

        // Juga, Anda bisa menutup modal ketika pengguna mengklik di luar modal
        window.addEventListener('click', function (event) {
            if (event.target == modal) {
                modal.style.display = 'none';
                modalIframe.src = ''; // Clear the iframe source
                overlay.style.display = 'none';
            }
        });
    });

    document.addEventListener('DOMContentLoaded', function () {
    var openModalButtons = document.querySelectorAll('.open-modal');
    var modal = document.getElementById('myModal');
    var overlay = document.getElementById('overlay'); // Tambahkan ini
    var modalIframe = document.getElementById('modal-iframe');
    var closeModalButton = modal.querySelector('.close');

    openModalButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            var target = this.getAttribute('data-target');
            modalIframe.src = target;
            modal.style.display = 'block';
            overlay.style.display = 'block'; // Tampilkan overlay saat modal muncul
        });
    });

    closeModalButton.addEventListener('click', function () {
        modal.style.display = 'none';
        modalIframe.src = '';
        overlay.style.display = 'none'; // Sembunyikan overlay saat menutup modal
    });

    overlay.addEventListener('click', function (){
        modal.style.display = 'none';
        modalIframe.src = '';
        overlay.style.display = 'none'; 
    });
    // Juga, Anda bisa menutup modal dan overlay ketika pengguna mengklik di luar modal
    // window.addEventListener('click', function (event) {
    //     if (event.target == overlay) {
    //         modal.style.display = 'none';
    //         modalIframe.src = '';
    //         overlay.style.display = 'none';
            
    //     }
    // });

});





</script>
</body>

</html>
