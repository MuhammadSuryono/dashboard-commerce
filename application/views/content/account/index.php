<div class="card">
    <div class="card-header">
        <h5 class="card-title"><button class="btn btn-primary btn-sm btn-flat" data-toggle="modal" data-target="#modal-account"><i class="fas fa-plus-circle"></i> Create New Account</button></h5>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th width="10px">No</th>
                    <th class="text-center">Fullname</th>
                    <th class="text-center">Username</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Hak Access</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($accounts as $account) {
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $account->fullname ?></td>
                        <td><?= $account->username ?></td>
                        <td><?= $account->status ?></td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                            </div>
                        </td>
                        <td>
                            <button class="btn btn-xs btn-success"><i class="fas fa-edit"></i> Edit</button>
                            <button class="btn btn-xs btn-danger button-delete" data-id="satu"><i class="fas fa-trash-alt"></i> Delete</button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

<div class="modal fade" id="modal-account">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title"><i class="fas fa-plus-circle"></i> Category - Add</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url() . 'category/create' ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputRounded0">Category Name</label>
                        <input type="text" class="form-control rounded-0" id="exampleInputRounded0" name="category_name" placeholder="Shoes" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default btn-sm btn-flat" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary btn-sm btn-flat"><i class="fas fa-check"></i> Save changes</button>
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
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="exampleInputRounded0">Category Name</label>
                        <input type="text" class="form-control rounded-0" id="exampleInputRounded0" placeholder="Shoes">
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default btn-sm btn-flat" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm btn-flat"><i class="fas fa-check"></i> Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>