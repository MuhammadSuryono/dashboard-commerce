<!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-file-invoice"></i> Order ID: <?=$orderId?> &nbsp;&nbsp; <i class="text-danger"><?=$details->order->order_status?></i>
                    <small class="float-right">Create Order: 2/10/2014</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Qty</th>
                      <th>Product</th>
                      <th>Product Code #</th>
                      <th>Description</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
					<?php
					$subTotal = 0;
					foreach($details->product as $product) {
						$subTotal = $subTotal + ($product->price * $product->qty);
					?>
                    <tr>
                      <td><?=$product->qty?></td>
                      <td><?=$product->item_name?></td>
                      <td><?=$product->item_code?></td>
                      <td><?=$product->description?></td>
                      <td>Rp. <?=number_format($product->price * $product->qty)?></td>
                    </tr>
					<?php } ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Payment Methods:</p>
                  <img src="<?=base_url() . 'assets/dist/img/credit/visa.png'?>" alt="Visa">
                  <img src="<?=base_url(). 'assets/dist/img/credit/mastercard.png'?>" alt="Mastercard">
                </div>
                <!-- /.col -->
                <div class="col-6">

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>Rp. <?=$subTotal?></td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td>Rp. <?=$subTotal?></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <!-- <div class="row no-print">
                <div class="col-12">
                  <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                    Payment
                  </button>
                  <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    <i class="fas fa-download"></i> Generate PDF
                  </button>
                </div>
              </div> -->
            </div>
