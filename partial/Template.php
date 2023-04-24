<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>MainPage</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/PHP/css/nav.css">
    <link rel="stylesheet" href="/PHP/css/template.css">
</head>

<body class="p-0 m-0 border-0 bd-example">
    <?php include '_navbar.php'; ?>

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio sections-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Templates</h2>
                <p>In here we providing the so many templates to use it and make portfolio and show case your Linkdin and any social networking site. Here Some Example to use and make your portfolio as your choice.</p>
            </div>

            <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 portfolio-container">

                    <div class="col-xl-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <a href="..\images\app-1.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="..\images\app-1.png" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="..\Template_1\admin" title="More Details">Template 1</a></h4>
                                <p>First Template is basic in provide your all details and images.</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-product">
                        <div class="portfolio-wrap">
                            <a href="..\images\product-1.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="..\images\product-1.png" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="..\Template_2\admin" title="More Details">Template 2</a></h4>
                                <p>Second Template is the advanced of first template in some dynamic features are provided to good looking.</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                    <div class="col-xl-4 col-md-6 portfolio-item filter-branding">
                        <div class="portfolio-wrap">
                            <a href="..\images\branding-1.png" data-gallery="portfolio-gallery-app" class="glightbox"><img src="..\images\branding-1.png" class="img-fluid" alt=""></a>
                            <div class="portfolio-info">
                                <h4><a href="..\Template_3\index.html" title="More Details">Template 3</a></h4>
                                <p>Third Template also is advanced of both templates or dynamic features also provided here.</p>
                            </div>
                        </div>
                    </div><!-- End Portfolio Item -->

                </div><!-- End Portfolio Container -->

            </div>

        </div>
    </section><!-- End Portfolio Section -->

</body>

</html>