<?php 
//include './config/config.php';
$db = new database ();
$sql = "SELECT * FROM blog WHERE is_monset = '1' AND status='1'  ORDER BY created_at DESC LIMIT 1";
$result = $db->select_pro($sql);
foreach($result as $value) {?>
<main class="container">
  <div class="p-4 p-md-5 mb-4 rounded text-bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic"><?php echo $value['title']?></h1>
      <p class="lead my-3"><?php echo $value['content']?></p>
      <p class="lead mb-0"><a href="index.php?route=categories&id=<?= $value['cat_id']?>" class="text-white fw-bold">Continue reading...</a></p>
      <?php } ?>
    </div>
  </div>

