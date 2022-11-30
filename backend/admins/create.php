<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Admin Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="index.php?route=store" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control"  placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="surname">SurName</label>
                            <input type="text" name="surname" class="form-control"  placeholder="Enter Surname">
                        </div>
                        <div class="form-group">
                            <label for="username">User Name</label>
                            <input type="text" name="username" class="form-control"  placeholder="Enter username">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control"  placeholder="Password">
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