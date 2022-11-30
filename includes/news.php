<?php 
include './config/config.php';
?>
<div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
        <?php 
        include './config/config.php';
        $db = new database();
        $query = "SELECT c.title_c, b.* FROM blog b
        LEFT JOIN categories c ON c.id=b.cat_id
        WHERE is_monset = '0' ORDER BY created_at DESC LIMIT 1 offset 1";
        $result = $db->select_pro($query);
        foreach($result as $value) {?>
          <strong class="d-inline-block mb-2 text-primary"><?php echo $value['title_c']?></strong>
          <h3 class="mb-0"><?php echo $value['title']?></h3>
          <div class="mb-1 text-muted"><?php  echo date_format(date_create($value['created_at']), 'j F');?></div>
          <p class="card-text mb-auto"><?php echo $value['description']?></p>
          <a href="index.php?route=categories&id=<?= $value['cat_id']?>" class="stretched-link">Continue reading</a>
        </div>
        <?php } ?>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="../backend/download/<?php echo $value['image']?>" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
        <?php 
        //include './config/config.php';
        $query = "SELECT c.title_c, b.* FROM blog b
        LEFT JOIN categories c ON c.id=b.cat_id
        WHERE is_monset = '0' ORDER BY created_at DESC LIMIT 1 ";
        $result = $db->select_pro($query);
        foreach($result as $value1) {?>
          <strong class="d-inline-block mb-2 text-success"><?php echo $value1['title_c']?></strong>
          <h3 class="mb-0"><?php echo $value1['title']?></h3>
          <div class="mb-1 text-muted"><?php  echo date_format(date_create($value['created_at']), 'j F');?></div>
          <p class="mb-auto"><?php echo $value1['description']?></p>
          <a href="index.php?route=categories&id=<?= $value['cat_id']?>" class="stretched-link">Continue reading</a>
        </div>
        <?php } ?>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

        </div>
        
      </div>
    </div>
  </div>
<!--  test hissesi-->
</main>