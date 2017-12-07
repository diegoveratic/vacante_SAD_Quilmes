<?php
include HTML_DIR . 'overall/header.php';?>
<body style="background-color: #f2f2f2">
<?php
include HTML_DIR . 'overall/navbar.php';
include HTML_DIR . '/public/login.html';
?>
<div class="container">
	<div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                 <hr>

                <h2>BIENVENIDOS AL SITIO WEB DE LA SECRETARIA DE ASUNTOS DOCENTES DE QUILMES</h2>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="http://secretariaquilmes.com.ar/blog/wp-content/uploads/2017/09/cropped-pieBA.png" alt="" width="700em">

                <hr>

                <!-- Post Content -->
                <p class="lead">Descripcion de area inscripciones</p>
                <p>Planta baja 4224 0382 Lunes a Viernes de 9 a 16 hs inscripciones</p>

                <hr>

               
               

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <div class="col-md-4">

                <!-- Blog Search Well -->
                <div class="well bgcolor-skyblue">
                    <h4>Search</h4>
                    <div class="input-group">
                        <input class="form-control" type="text">
                        <span class="input-group-btn">
                            <button class="btn " type="button">
                                <span class="glyphicon glyphicon-search	Try it
"></span>
                        </button>
                        </span>
                    </div>
                    <!-- /.input-group -->
                </div>

                <!-- Blog Categories Well -->
                <div class="well">
                    <h4>Quick Links</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                    </div>
               <?php include HTML_DIR.'/overall/aside.php';?>

        </div>
</div>
</body>