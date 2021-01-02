<div class="card">
    <div class="card-header">
        <h5 class="card-title">
            <button class="btn btn-primary btn-sm btn-flat" data-toggle="modal" data-target="#modal-add-product"><i
                        class="fas fa-plus-circle"></i> Create New Product
            </button>
        </h5>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th width="10px">No</th>
                <th class="text-center">Product Code</th>
                <th class="text-left">Product Name</th>
                <th class="text-center">Category</th>
                <th class="text-center">Stock</th>
                <th class="text-center">Images</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            foreach ($products->data as $product) {
                ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $product->item_code ?></td>
                    <td><?= $product->item_name ?></td>
                    <td><?= $product->category_name ?></td>
                    <td><?= $product->stock ?></td>
                    <td></td>
                    <td>
                        <button class="btn btn-xs btn-success"><i class="fas fa-edit"></i> Edit</button>
                        <button class="btn btn-xs btn-danger button-delete" data-id="satu"><i
                                    class="fas fa-trash-alt"></i> Delete
                        </button>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>

<div class="modal fade" id="modal-add-product">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title"><i class="fas fa-plus-circle"></i> Category - Add</h6>
                <button type="button" id="product-close" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" enctype="multipart/form-data" id="create-product">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="exampleInputRounded0">Product Code <small class="text-red"><i>*</i></small></label>
                        <input type="text" name="product_code" class="form-control rounded-0" placeholder="908959xxxx" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputRounded0">Product Name <small class="text-red"><i>*</i></small></label>
                        <input type="text" name="product_name" class="form-control rounded-0" placeholder="Detergen" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputRounded0">Category <small class="text-red"><i>*</i></small></label>
                        <select class="form-control rounded-0" name="product_category" required>
                            <option value="">Select Category</option>
                            <?php
                            foreach ($categories as $category) {
                                echo '<option value="' . $category->id . '">' . $category->category_name . '</option>';
                            }
                            ?>
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputRounded0">Price <small class="text-red"><i>*</i></small></label>
                        <input type="number" class="form-control rounded-0" name="price" placeholder="0" value="0" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputRounded0">Stock <small class="text-red"><i>*</i></small></label>
                        <input type="text" class="form-control rounded-0" name="stock" placeholder="Detergen" value="0" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputRounded0">Unit <small class="text-red"><i>*</i></small></label>
                        <input type="text" class="form-control rounded-0" name="unit" placeholder="Pax" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputRounded0">Weight <small class="text-red"><i>* in grams (gr)</i></small></label>
                        <input type="text" class="form-control rounded-0" name="weight" placeholder="0" value="0" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputRounded0">Color</label>
                        <input type="text" class="form-control rounded-0 my-colorpicker1" name="color" placeholder="xxxx">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputRounded0">Image</label>
                        <input type="file" class="form-control rounded-0" name="images">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputRounded0">Description</label>
                        <input type="text" class="form-control rounded-0" name="description" placeholder="xxxx">
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