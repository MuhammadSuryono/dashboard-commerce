<div class="callout callout-info">
  <h5><i class="fas fa-info"></i> Note:</h5>
  This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
</div>
<!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-file-invoice"></i> Transaction ID: <?=$transactions->transaction_id?>
                    <small class="float-right">Create Transaction: <?=$transactions->time_create_payment?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  Kepada :
                  <address>
                    <strong><?=$transactions->shipper->recipents_name?></strong><br>
                    <?=$transactions->shipper->address?><br>
                    <strong>Phone:</strong><br> <?=$transactions->shipper->contact?><br>
                    <strong>Deliver Service:</strong><br> JNE: <?=$transactions->shipper->destination?>
                  </address>
                </div>
				<div class="col-sm-4 invoice-col></div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  <b>Invoice #INV<?=$transactions->transaction_id?></b><br>
                  <br>
                  <b>Order ID:</b> <?=$orderId?><br>
				  <b>Transaction ID:</b> <?=$transactions->transaction_id?></br>
                  <b>Payment Due:</b> <?=$transactions->transaction_time?><br>
                  <b>Payment Number:</b> - <br>
				  <b>Status:</b> <span class="badge badge-success"><?=$transactions->transaction_status?></span>
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
                      <th>Serial #</th>
                      <th>Description</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
					$subTotal = 0;
					foreach($transactions->products as $product) {
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
                  <p class="lead">Amount Due <?=$transactions->transaction_time?></p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th style="width:50%">Subtotal:</th>
                        <td>Rp. <?=number_format($subTotal)?></td>
                      </tr>
                      <tr>
                        <th>Shipping:</th>
                        <td>Rp. <?=number_format($transactions->shipper->cost)?></td>
                      </tr>
                      <tr>
                        <th>Total:</th>
                        <td>Rp. <?=number_format($transactions->total)?></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <!--<div class="row no-print">
                //<div class="col-12">
                 // <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
                  //<button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                   // Payment
                  //</button>
                  //<button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                    //<i class="fas fa-download"></i> Generate PDF
                  //</button>
                //</div>
              //</div>
-->
            </div>
