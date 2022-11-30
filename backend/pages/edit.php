<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Pages Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <?php
                $id = $_GET['id'];
                $db = new database();
                $db->select("pages","*", "id='$id'");
                $result = $db->sql;
                while ($row = mysqli_fetch_array($result)) {

                ?>
                <form action="pages/update.php?id=<?= $id ?>" method="post">
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
                            <label for="content">Content</label>
                            <input type="text" name="content" class="form-control" value="<?= $row['content'] ?>"
                                   placeholder="Enter Content">
                        </div>
                        <div class="form-group">
                        <label for="is_menu">Is_menu</label>
                            <select name="is_menu" class="form-control">
                                <?php
                                if ($row['is_menu'] == 1) {
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
                        <div class="form-group">
                            <label for="content">Created_at</label>
                            <input type="data" name="created_at" class="form-control" value="<?= $row['content'] ?>"
                                   placeholder="Enter Created Data">
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