<main id="main">

    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Result Journal International</h2>

                <ol>
                    <li><a href="#">Home</a></li>
                    <li>Result</li>
                    <li>International</li>
                </ol>
            </div>

        </div>
    </section><!-- End Blog Section -->

    <!-- ======= Blog Section ======= -->
    <section class="blog" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
        <div class="container">

            <div class="row">

                <div class="col-lg-8 entries">
                    <?php
                    foreach ($journal_i as $j) { ?>

                        <article class="entry">
                            <h2 class="entry-title">
                                <a href=""><?php echo $j->title ?></a>
                            </h2>

                            <div class="entry-meta">
                                <ul>
                                    <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="#"><?php echo $j->issn ?></a></li>
                                    <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="#"><?php echo $j->year ?></a></li>
                                    <li class="d-flex align-items-center"><i class="icofont-wall-list"></i> <a href="#"><?php echo $j->category ?></a></li>
                                </ul>
                            </div>

                            <div class="entry-content">
                                <p>
                                    <?php echo $j->abstract ?>
                                </p>
                                <div class="read-more">
                                    <a href="#">Read More</a>
                                </div>
                            </div>

                        </article><!-- End blog entry -->

                    <?php } ?>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar">

                        <h3 class="sidebar-title">Search</h3>
                        <div class="sidebar-item search-form">
                            <form action="">
                                <input type="text">
                                <button type="submit"><i class="icofont-search"></i></button>
                            </form>
                        </div><!-- End sidebar search formn-->

                        <h3 class="sidebar-title">Categories</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <?php
                                foreach ($journal_i as $j) { ?>
                                    <li>
                                        <a href=""><?php echo $j->category ?></a>
                                    </li>
                                <?php } ?>
                            </ul>

                        </div><!-- End sidebar categories-->

                        <h3 class="sidebar-title">Years</h3>
                        <div class="sidebar-item categories">
                            <ul>
                                <?php
                                foreach ($journal_i as $j) { ?>
                                    <li>
                                        <a href=""><?php echo $j->year ?></a>
                                    </li>
                                <?php } ?>
                            </ul>

                        </div><!-- End sidebar categories-->

                    </div><!-- End sidebar -->

                </div><!-- End blog sidebar -->

            </div><!-- End .row -->

        </div><!-- End .container -->

    </section><!-- End Blog Section -->

</main><!-- End #main -->