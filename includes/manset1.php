
<main class="container">
  <div class="p-4 p-md-5 mb-4 rounded text-bg-primary">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Head Line</h1>
    </div>
  </div>
  <?php
    include './config/config.php';
    if(isset($_GET['page'])){
      $page=$_GET['page'];
    } else {
      $page = 1;
    }

    $show_data = 2;
    $limit = ($page - 1) * $show_data;
    $a = new database();
    $sql= "SELECT * FROM blog WHERE is_monset = 1 AND status = 1 ORDER BY created_at DESC";
    $count_data = $a->count($sql);
    $sql = "SELECT categories.title_c, blog.* FROM blog 
    LEFT JOIN categories  ON categories.id=blog.cat_id 
    WHERE  is_monset = 1 and blog.status = 1 LIMIT $limit, $show_data";
    $monsets = $a->select_pro($sql);
    $total_pages = ceil($count_data/$show_data);
    $pagLink = "";
  ?>
  <div class="row mb-2">
    <?php
      foreach ($monsets as $monset){
    ?>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
        
          <strong class="d-inline-block mb-2 text-primary"><?php echo $monset['title_c']?></strong>
          <h3 class="mb-0"><?php echo $monset['title']?></h3>
          <div class="mb-1 text-muted"><?php  echo date_format(date_create($monset['created_at']), 'j F');?></div>
          <p class="card-text mb-auto"><?php echo substr($monset['description'], 0, 100)?></p>
          <a href="index.php?route=categories&id=<?= $monset['cat_id']?>" class="stretched-link">Continue reading</a>
        </div>
      </div>
    </div>
    <?php } ?>
  </div>
  
  
  <nav aria-label="Page navigation example">
    <ul class="pagination">
      <?php 
      if ($page>=2) {
        echo "<li class='page-item'><a class='page-link' href='index.php?page=".($page - 1)."' aria-label='Previous'>
          <span aria-hidden='true'>&laquo;</span>
          <span class='sr-only'>Previous</span>
        </a>
      </li>";
      }
      for ($i = 1; $i<=$total_pages; $i++){
        if ($i == $page){
          $pagLink.= "<li class='page-item'><a class='active page-link' href='index.php?page=".$i."'>".$i."</a></li>";
        } else {
            $pagLink.= "<li class='page-item'><a class='page-link' href='index.php?page=".$i."'>".$i."</a></li>";
        }
      }
      echo $pagLink;
      if ($page < $total_pages){
        echo "<li class='page-item'>
        <a class='page-link' href='index.php?page=".($page + 1)."' aria-label='Next'>
          <span aria-hidden='true'>&raquo;</span>
          <span class='sr-only'>Next</span>
        </a>
      </li>";
      }
      ?>
    </ul>
  </nav>
  <hr>