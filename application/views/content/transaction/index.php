<div class="card">
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th width="10px">No</th>
                <th class="text-center">Order ID</th>
                <th class="text-center">Transaction ID</th>
                <th class="text-center">Total Price</th>
                <th class="text-center">Transaction Status</th>
                <th class="text-center">Payment Type</th>
                <th class="text-center">Settlement Time</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $no = 1;
            foreach ($transactions as $transaction){
            ?>
            <tr>
                <td><?=$no++?></td>
                <td><?=$transaction->order_id?></td>
                <td><?=$transaction->transaction_id?></td>
                <td><?=$transaction->total?></td>
                <td class="text-center"><span class="badge badge-success"><?=strtoupper($transaction->transaction_status)?></span></td>
                <td><?=$transaction->payment_type?></td>
                <td><?=$transaction->transaction_time?></td>
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