<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Blog</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <div class="input-group-append">
                                        <a href="index.php?route=blog/create" class="btn btn-primary float-right">
                                            Create
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" >
                            <table class="table table-hover text-nowrap" >
                                <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Video</th>
                                    <th>Cat_id</th>
                                    <th>Content</th>
                                    <th>Is_monset</th>
                                    <th>Created_at</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody >
                                <?php
                                $b = new database();
                                $b->select("blog","*");
                                $result = $b->sql;
                                foreach ($result as $admin) {
                                    ?>
                                    <tr>
                                        <td><?= wordwrap($admin['title'],2,"<br>\n") ?></td>
                                        <td><div style=" height:200px; overflow-y:auto; overflow-x: hidden;"><?= wordwrap($admin['description'],2,"<br>\n")?></div></td>
                                        <td><img src="./download/<?php echo $admin['image']; ?> " width="100" height="100">
                                        </td>
                                        <td>
                                            <?php 
                                            if($admin['video']==NULL){
                                                echo "Null";}
                                            else {?>
                                                <iframe width="100" height="100" src="https://www.youtube.com/embed/<?= $admin['video']?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            <?php } ?>
                                        </td>
                                        <td><?= $admin['cat_id'] ?></td>
                                        <td><div style=" height:200px; overflow:auto; overflow-x: hidden;"><?= wordwrap($admin['content'],2,"<br>\n") ?></div></td>
                                        <td><?= $admin['is_monset'] ?></td>
                                        <td><?= wordwrap($admin['created_at'],2,"<br>\n") ?></td>
                                        <td style="display:flex;column-gap:5px;">
                                            <a href="index.php?route=blog/edit&id=<?= $admin['id'] ?>" title="Edit"
                                               class="btn btn-sm btn-primary pull-right">
                                                <i class="voyager-paper-plane">Edit</i>
                                            </a>
                                            <a href="index.php?route=blog/delete&id=<?= $admin['id'] ?>"
                                               title="Delete"
                                               class="btn btn-sm btn-danger pull-right">
                                                <i class="voyager-paper-plane">Delete</i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

        </div>
    </section>
</div>

