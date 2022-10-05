 <!-- ======= Portfolio Section ======= -->
 <section id="portfolio" class="portfolio">
     <div class="container">

         <div class="section-title">
             <span>Portfolio</span>
             <h2>Portfolio</h2>
             <p>This page will show you all of my recent Artworks</p>
         </div>

         <div class="row" data-aos="fade-up">
             <div class="col-lg-12 d-flex justify-content-center">
                 <ul id="portfolio-flters">
                     <li data-filter="*" class="filter-active">All</li>
                     <li data-filter=".filter-html">HTML</li>
                     <li data-filter=".filter-css">CSS</li>
                     <li data-filter=".filter-php">PHP</li>
                     <li data-filter=".filter-js">Javascript</li>
                     <li data-filter=".filter-figma">UI/UX</li>
                 </ul>
             </div>
         </div>

         <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="150">
             <!-- ===================== Foreach ===================== -->
             <?php
                require_once 'myItems.php';
                foreach ($myTask as $task) {

                ?>

                 <div class="col-lg-4 col-md-6 portfolio-item <?= $task['div'] ?>">
                     <img src="<?= $task['img'] ?>" class="img-fluid" alt="">
                     <div class="portfolio-info">
                         <h4><?= $task['title'] ?></h4>
                         <p><?= $task['subtitle'] ?></p>
                         <!-- Link -->
                         <a href="<?= $task['a-img'] ?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?= $task['d-title'] ?>"><i class="bx bx-plus"></i></a>
                         <!-- Link -->
                         <a href="index.php?page=mytask&id=<?= $task['id'] ?>" class="details-link" title="<?= $task['title'] ?>"><i class="bx bx-link"></i></a>
                     </div>
                 </div>

             <?php } ?>

             <!-- =================== END Foreach =================== -->
         </div>

     </div>
 </section><!-- End Portfolio Section -->