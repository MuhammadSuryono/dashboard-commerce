<div class="card">
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th width="10px">No</th>
                <th class="text-center">Order ID</th>
                <th class="text-left">Customer Name</th>
                <th class="text-center">Total Qty</th>
                <th class="text-center">Total Price</th>
                <th class="text-center">Order Status</th>
                <th class="text-center">Created At</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            foreach ($orders as $order){
            ?>
            <tr>
                <td><?=$no++?></td>
                <td><?=$order->order_id?></td>
                <td><?=$order->fullname?></td>
                <td><?=$order->total_quantity?></td>
                <td><?=$order->total_price?></td>
                <td><?=$order->order_status?></td>
                <td><?=date('Y-m-d h:i:s', strtotime($order->created_at))?></td>
                <td>
                    <button class="btn btn-xs btn-primary"><i class="fas fa-eye"></i> Detail Order</button>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>