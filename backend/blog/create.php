<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Blog Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                
                <form action="index.php?route=blog/store" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control"  placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" name="description" class="form-control"  placeholder="Enter Description">
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control"  placeholder="Download image">
                            
                        </div>
                        <div class="form-group">
                            <label for="surname">Video</label>
                            <input type="text" name="video" class="form-control"  placeholder="Download Video">
                        </div>
                        <div class="form-group">
                            <label for="cat_id">Cat_id</label></br>
                            <select class="form-control" name="cat_id">
                            <?php
                            $query = mysqli_query($db, "SELECT * FROM categories c");
                            $result = mysqli_fetch_all($query, MYSQLI_ASSOC);
                            foreach ($result as $value) {
                            ?>
                            <option type="text"  value="<?php echo $value['id'] ?>"> <?php echo $value['title_c'] ?> </option>
                            <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="username">Content</label>
                            <input type="text" name="content" class="form-control"  placeholder="Enter Content">
                        </div>
                        <div class="form-group">
                            <label for="is_monset">Is_monset</label></br>
                            <select class="form-control" name="is_monset">
                            <option type="text"  value="1">1</option>
                            <option type="text"  selected value="0"> 0 </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label></br>
                            <select class="form-control" name="status">
                            <option type="text"  value="1">active</option>
                            <option type="text"  value="0"> passive </option>
                            </select>
                        </div>
                        
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>

        </div>
    </section>
</div>