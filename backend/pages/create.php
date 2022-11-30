<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Pages Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="index.php?route=pages/store" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" name="title" class="form-control"  placeholder="Enter Title">
                        </div>
                        <div class="form-group">
                            <label for="surname">Description</label>
                            <input type="text" name="description" class="form-control"  placeholder="Enter Description">
                        </div>
                        <div class="form-group">
                            <label for="username">Content</label>
                            <input type="text" name="content" class="form-control"  placeholder="Enter Content">
                        </div>
                        <div class="form-group">
                            <label for="is_menu">Is_menu</label></br>
                            <select class="form-control" name="is_menu">
                            <option type="text"  value="1">1</option>
                            <option type="text"  selected value="0"> 0 </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label></br>
                            <select class="form-control" name="status">
                            <option type="text"  value="1">active</option>
                            <option type="text"   value="0"> passive </option>
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