<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Settings Create</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="index.php?route=settings/store" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="key">Key</label>
                            <input type="text" name="_key" class="form-control"  placeholder="Enter Key">
                        </div>
                        <div class="form-group">
                            <label for="value">Value</label>
                            <input type="text" name="value" class="form-control"  placeholder="Enter Surname">
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