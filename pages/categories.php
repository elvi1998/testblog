<?php 
@$id=$_GET['id'];
$db = new database ();
$query = "SELECT c.title_c, b.* FROM blog b
LEFT JOIN categories c ON c.id=b.cat_id
WHERE cat_id='$id'";
$result = $db->select_pro($query);
foreach($result as $value) {?>
<main id="main">
  <section class="single-post-content">
    <div class="container">
      <div class="row">
        <div class="col-md-9 post-content" data-aos="fade-up">

          <!-- ======= Single Post Content ======= -->
          <div class="single-post">
            <div class="post-meta"><span class="title"><?php echo $value['title_c']?></span> <span class="mx-1">&bullet;</span> <span><?php  echo date_format(date_create($value['created_at']), 'j F');?></span></div>
            <h1 class="mb-5"><?php echo $value['title']?></h1>
            <p><span class="firstcharacter"><?php echo $value['content']?></p>
            <figure class="my-4">
              <img src="backend/download/<?php echo $value['image']?>" alt="" class="img-fluid">
            </figure>
            <p><?php echo $value['description']?></p>
          </div><!-- End Single Post Content -->

        <?php } ?>
        </div>