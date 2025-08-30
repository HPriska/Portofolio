<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
</head>
<body>
    <nav class="navbar bg-primary navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
        <div class="container">
            <a href="#home" class="navbar-brand">Portofolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#tentang" class="nav-link">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a href="#projek" class="nav-link">Projek</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="home" class="jumbotron mt-5 pb-5 pt-5 text-center" style="background-color: #b9b8ff"> 
        <img src="img/foto.jpg" class="rounded mb-2 mx-auto d-block"  alt="Cinque Terre"  width="200" height="300">
        <h3>Hana Priska Sihite</h3>
        <h5>Teknik Informatika</h5>        
        <p>
            <a href="https://www.linkedin.com/in/hana-priska-sihite/" target="_blank" class="fa fa-linkedin btn btn-outline-light text-dark" style="font-size:24px"></a> 
            <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=hanaps9820@gmail.com&su=Portofolio&body=Body%20Text" target="_blank" class="fa fa-envelope btn btn-outline-light text-dark" style="font-size:24px"></a>
            <a href="https://www.instagram.com/anryizz/" target="_blank" class="fa fa-instagram btn btn-outline-light text-dark" style="font-size:24px"></a>
            <a href="https://m.facebook.com/profile.php?id=100082062563659" target="_blank" class="fa fa-facebook btn btn-outline-light text-dark" style="font-size:24px"></a>
            <a href="https://wa.me/+6281320494219" target="_blank" class="fa fa-whatsapp btn btn-outline-light text-dark" style="font-size:24px"></a> 
        </p>
    </div> 
 
            <div id="tentang" class="container pt-5 "><br>
                <div class="container">
                    <div class="row"> 
                        <div class="col-md-6">
                            <h2>Tentang</h2>
                            <p>Lulusan Teknik Informatika Universitas Komputer Indonesia tahun 2020 dengan IPK 3.22. Saya memiliki pengalaman membuat Fitur pada Website dan menginput data-data. Saya memiliki dedikasi, disiplin, detail dalam bekerja dan komunikasi interpersonal yang baik.</p>
                            <br>
                        </div>
                        <div class="col-md-6">
                            <h3>Kemampuan</h3>
                            <p>
                                <ul>
                                    <li>PHP dan MySQL</li>
                                    <li>Javascript</li>
                                    <li>Laravel</li> 
                                    <li>Bootstrap</li> 
                                    <li>Adobe Photoshop</li>
                                    <li>Ms.Office (Word, Excel,Powerpoint)</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="projek" class="container pb-5"><br>
                <h3>Projek</h3>
                <p>Berikut beberapa projek yang pernah saya buat berupa Website dan foto :</p>
                
                <div class="container mt-3">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a href="#pshop" class="nav-link active" data-bs-toggle="tab">Photoshop</a>
                        </li>
                        <li class="nav-item">
                            <a href="#web" class="nav-link" data-bs-toggle="tab">Website</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div id="pshop" class="container tab-pane active" style="background-color: #e2edff"><br>
                            <div class="row justify-content-center">
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        <img src="img/projects/pshop/1.png" class="rounded mb-2"  alt="Cinque Terre">
                                    </div> 
                                </div> 
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        <img src="img/projects/pshop/2.png" class="rounded mb-2"  alt="Cinque Terre">
                                    </div> 
                                </div> 
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        <img src="img/projects/pshop/3.jpg" class="rounded mb-2"  alt="Cinque Terre">
                                    </div> 
                                </div> 
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        <img src="img/projects/pshop/4.jpg" class="rounded mb-2"  alt="Cinque Terre">
                                    </div> 
                                </div>  
                            </div>  
                            <div class="row justify-content-center">
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        <img src="img/projects/pshop/5.jpg" class="rounded mb-2"  alt="Cinque Terre">
                                    </div> 
                                </div> 
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        <img src="img/projects/pshop/6.jpg" class="rounded mb-2"  alt="Cinque Terre">
                                    </div> 
                                </div>  
                            </div>
                        </div>
                        <div id="web" class="container tab-pane fade" width="255" height="255" style="background-color: #e2edff"><br>
                            <div class="row justify-content-center">
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        <img src="img/projects/web/Lanl.jpg" class="rounded mb-2"  alt="Cinque Terre">
                                        <div class="card-body">
                                            <p class="card-text">Website untuk belajar dasar berbahasa asing.</p>
                                        </div> 
                                    </div> 
                                </div>  
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        <img src="img/projects/web/smp_pgri1_pdl.jpg" class="rounded mb-2"  alt="Cinque Terre">
                                        <div class="card-body">
                                            <p class="card-text">Website Sistem Informasi Manajemen Akademik.</p>
                                        </div> 
                                    </div> 
                                </div>  
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        <img src="img/projects/web/tgf_store.jpg" class="rounded mb-2"  alt="Cinque Terre">
                                        <div class="card-body">
                                            <p class="card-text">Website Manajemen Toko TGF_store.</p>
                                        </div> 
                                    </div> 
                                </div> 
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        <img src="img/projects/web/tgfashion_store.jpg" class="rounded mb-2"  alt="Cinque Terre">
                                        <div class="card-body">
                                            <p class="card-text">Website Company Profile TGFashion Store.</p>
                                        </div> 
                                    </div> 
                                </div>  
                            </div>  
                        </div>
                    </div>
                </div>
            </div> 
</body>
</html>