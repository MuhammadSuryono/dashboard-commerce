<div class="card">
    <div class="card-header">
        <h5 class="card-title">
            <button class="btn btn-primary btn-sm btn-flat" data-toggle="modal" data-target="#modal-category"><i
                        class="fas fa-plus-circle"></i> Create New Category
            </button>
        </h5>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th width="10px">No</th>
                <th class="text-center">Category Name</th>
                <th class="text-center">Created</th>
                <th class="text-center">Updated</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            foreach ($categories->data as $category) {
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $category->category_name ?></td>
                    <td><?= date('Y-m-d h:i:s', strtotime($category->created_at)) ?></td>
                    <td><?= date('Y-m-d h:i:s', strtotime($category->updated_at)) ?></td>
                    <td>
                        <button class="btn btn-xs btn-success edit-category" data-id="<?= $category->id ?>"
                                data-name="<?= $category->category_name ?>"><i class="fas fa-edit"></i> Edit
                        </button>
                        <button class="btn btn-xs btn-danger button-delete"
                                data-uri="<?= 'category/' . $category->id ?>"><i class="fas fa-trash-alt"></i> Delete
                        </button>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

<div class="modal fade" id="modal-category">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title"><i class="fas fa-plus-circle"></i> Category - Add</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url() . 'category/create' ?>" enctype="multipart/form-data" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputRounded0">Category Name</label>
                        <input type="text" class="form-control rounded-0" id="exampleInputRounded0" name="category_name"
                               placeholder="Shoes" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputRounded0">Images</label>
                        <input type="file" class="form-control rounded-0" id="exampleInputRounded0" name="images"
                               placeholder="Select Image" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm btn-flat" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm btn-flat"><i class="fas fa-check"></i> Save
                        changes
                    </button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<div class="modal fade" id="edit-modal-category">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title"><i class="fas fa-edit"></i> Category - Edit</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url() . 'category/update' ?>" enctype="multipart/form-data" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputRounded0">Category Name</label>
                        <input type="text" class="form-control category-id-edit" name="category_id" hidden required>
                        <input type="text" class="form-control rounded-0 category-name-edit" name="category_name"
                               id="exampleInputRounded0" placeholder="Shoes">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputRounded0">Image</label>
                        <input type="file" class="form-control rounded-0" id="exampleInputRounded0"
                               name="category_image" placeholder="Select Image">
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm btn-flat" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm btn-flat"><i class="fas fa-check"></i> Save
                        changes
                    </button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>