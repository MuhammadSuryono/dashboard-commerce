<div class="card">
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th width="10px">No</th>
                    <th class="text-center">Fullname</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">NPWP</th>
                    <th class="text-center">Address</th>
                    <th class="text-center">Phone Number</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($customers as $customer) {
                ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $customer->fullname ?></td>
                        <td><?= $customer->email ?></td>
                        <td><?= $customer->npwp ?></td>
                        <td><?= $customer->address ?></td>
                        <td><?= $customer->phone_number ?></td>
                        <td>
                            <button class="btn btn-xs btn-primary"><i class="fas fa-eye"></i> Detail</button>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>