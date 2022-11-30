<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Admin Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <?php
                $id = $_GET['id'];
                $db = new database();
                $db->select("admin","*", "id='$id'");
                $result = $db->sql;
                while ($row = mysqli_fetch_array($result)) {

                ?>
                <form action="admins/update.php?id=<?= $id ?>" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" value="<?= $row['name'] ?>"
                                   placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="surname">SurName</label>
                            <input type="text" name="surname" class="form-control" value="<?= $row['surname'] ?>"
                                   placeholder="Enter Surname">
                        </div>
                        <div class="form-group">
                            <label for="username">UserName</label>
                            <input type="text" name="username" class="form-control" value="<?= $row['username'] ?>"
                                   placeholder="Enter username">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control" value="<?= $row['email'] ?>"
                                   placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" class="form-control" >
                                <?php
                                if ($row['status'] == 1) {
                                    $active = 'selected';
                                    $passive = '';
                                } else {
                                    $active = '';
                                    $passive = 'selected';
                                }
                                ?>
                                <option value="0" <?php echo $passive ?> >Passive</option>
                                <option value="1" <?php echo $active ?> >Active</option>
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