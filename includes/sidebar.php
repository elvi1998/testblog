<div class="col-md-3">
          <!-- ======= Sidebar ======= -->
          <div class="aside-block">


            <div class="tab-content" id="pills-tabContent">
            <?php
            include './config/config.php';
            $query = mysqli_query($db, "SELECT c.title_c, b.* FROM blog b
            LEFT JOIN categories c ON c.id=b.cat_id
            WHERE is_monset = '0' ORDER BY created_at DESC LIMIT 3 ");
            $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
            foreach($result as $value) {?>
              <!-- Popular -->
              <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                <div class="post-entry-1 border-bottom">
                  <div class="post-meta"><span class="date"><?php echo $value['title_c']?></span> <span class="mx-1">&bullet;</span> <span><?php  echo date_format(date_create($value['created_at']), 'j F');?></span></div>
                  <h2 class="mb-2"><a href="index.php?route=categories&id=<?= $value['cat_id']?>"><?php echo $value['title']?></a></h2>
                </div>
                <?php }?>
               <!-- End Popular -->

            </div>
          </div>
          <div class="aside-block">
            <h3 class="aside-title">Categories</h3>
            <ul class="aside-links list-unstyled">
            <?php 
            //include './config/config.php';
            
            $a = new database();
            $a->select("categories", "*", "is_menu = 0");
            $result = $a->sql;
            foreach($result as  $value){?>
              <li><a href="index.php?route=categories&id=<?php echo $value['id']?>"><i class="bi bi-chevron-right"></i> <?php echo $value['title_c']?></a></li>
              <!-- <li><a href="category.html"><i class="bi bi-chevron-right"></i> Culture</a></li>
              <li><a href="category.html"><i class="bi bi-chevron-right"></i> Sport</a></li>
              <li><a href="category.html"><i class="bi bi-chevron-right"></i> Food</a></li>
              <li><a href="category.html"><i class="bi bi-chevron-right"></i> Politics</a></li>
              <li><a href="category.html"><i class="bi bi-chevron-right"></i> Celebrity</a></li>
              <li><a href="category.html"><i class="bi bi-chevron-right"></i> Startups</a></li>
              <li><a href="category.html"><i class="bi bi-chevron-right"></i> Travel</a></li> --><?php } ?>
            </ul>
          </div><!-- End Categories -->
        </div>
      </div>
    </div>
  </section>