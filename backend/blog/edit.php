<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Blog Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <?php
                $id = $_GET['id'];
                $db = new database();
                $db->select("blog","*", "id='$id'");
                $result = $db->sql;
                while ($row = mysqli_fetch_array($result)) {

                ?>
                <form action="blog/update.php?id=<?= $id ?>" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" value="<?= $row['title'] ?>"
                                   placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control" value="<?= $row['description'] ?>"
                                   placeholder="Enter Description">
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label><br>
                            <img src="./download/<?=$row['image']?>" alt="" height="100">
                            <input type="file" name="image"  class="form-control"  value="<?= $row['image'] ?>"
                            placeholder="Download image"> 
                        </div>
                        <div class="form-group">
                            <label for="description">Video</label>
                            <input type="text" name="video" class="form-control" value="<?= $row['video'] ?>"
                                   placeholder="Enter Description">
                        </div>
                        <div class="form-group">
                            <label for="cat_id">Cat_id</label></br>
                            <select class="form-control" name="cat_id">
                            <?php
                            $a = new database();
                            $a->select("categories","*");
                            $result = $a->sql;
                            foreach ($result as $value) {
                            ?>
                            <option type="text"  value="<?php echo $value['id'] ?>"> <?php echo $value['title_c'] ?></option>
                            <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <input type="text" name="content" class="form-control" value="<?= $row['content'] ?>"
                                   placeholder="Enter Content">
                        </div>
                        <div class="form-group">
                        <label for="is_monset">Is_monset</label>
                            <select name="is_monset" class="form-control" name="status">
                                <?php
                                if ($row['is_monset'] == 1) {
                                    $active = 'selected';
                                    $passive = '';
                                } else {
                                    $active = '';
                                    $passive = 'selected';
                                }
                                ?>
                                <option value="0" <?= $passive ?> >0</option>
                                <option value="1" <?= $active ?> >1</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" class="form-control">
                                <?php
                                if ($row['status'] == 1) {
                                    $active = 'selected';
                                    $passive = '';
                                } else {
                                    $active = '';
                                    $passive = 'selected';
                                }
                                ?>
                                <option value="0" <?= $passive ?> >Passive</option>
                                <option value="1" <?= $active ?> >Active</option>
                            </select>
                        </div>
                        
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                    <?php } ?>
                </form>
            </div>

        </div>
    </section>
</div>