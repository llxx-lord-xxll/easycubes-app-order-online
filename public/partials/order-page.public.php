<?php

// Start a new function to print Project rows
function getProduct($product='', $prefix='', $alt=0, $price='23.00') {
  $prodName = $product;
  $GLOBALS['filePrefix'] = $prefix;
  $GLOBALS['prodPrice'] = $price;

  if (!function_exists('getSubitem')) {
    // Start new function to print subitems
    function getSubitem($color='white', $ral='White RAL9003'){
      $fileColor = $color;
      $ralName = $ral;
    ?>
        <div class="col">
          <div class="product-item-subitem">
            <div class="row no-gutters">
              <div class="col-12 col-md">
                <img class="product-item-thumb" src="<?php echo $GLOBALS['pluginuri'] . 'images/'. $GLOBALS['filePrefix'] . '-' . $fileColor; ?>@x2.jpg"/>
              </div>
              <div class="w-100 d-none d-sm-block d-md-none"></div>
              <div class="col">
                <p class="text-normal product-item-subitem-detail">
                  VARIANT
                  <span class="product-item-text-large">
                    <?php echo $ralName; ?>
                  </span>
                </p>
                <p class="text-normal product-item-subitem-detail">
                  UNIT RETAIL PRICE
                  <span class="product-item-text-large">
                    &euro; <?php echo $GLOBALS['prodPrice']; ?>
                  </span>
                </p>
                <p class="text-normal product-item-subitem-detail">
                  UNITS PER PALLET
                  <span class="product-item-text-large">
                    60
                  </span>
                </p>
              </div>
            </div>
            <div class="row pallet-chooser">
              <div class="col-12 col-md-6 label-container">
                <span class="label-pallets">SELECT NUMBER OF PALLETS</span>
              </div>
              <div class="w-100 d-none d-sm-block d-md-none"></div>
              <div class="col-12 col-md-6">
                <select class="form-control" name="pallets">

                  <?php
                  $i=0;
                  while ($i <= 10) {
                    echo '<option value="'.$i.'">'.$i.'</option>';
                    $i = $i + 1;
                  }
                  ?>

                </select>
              </div>
            </div>
          </div>
        </div>
    <?php }
    // function getSubitem closed;

  }
// Start getProduct render
?>
<div class="row align-items-center order-product-item">
  <div class="col-12 col-md-2">
    <div class="text-product-title">
      <?php echo $prodName; ?>
    </div>
    <div class="info-product-link">
      <a class="" title="Learn more"><span class="fa fa-info-circle"></span></a>
    </div>

    <div class="product-details">
      <p class="text-normal">
        <?php echo $prodName; ?> come in pallets with units of 60. The minimum order is two pallets.
      </p>
      <p class="text-highlight">
        Note that the custom color cubes, <strong> require a minimum order of 8 pallets.</strong>
      </p>
      <p class="text-light">
        Presented prices do not reflect the actual invoice total. Provided quotes do not take into account Your individual dealer rate.
      </p>
    </div>
  </div>
  <div class="col product-item-subitems">
    <div class="row">
    <?php
      getSubitem();
      getSubitem('black','Black RAL9005');

    if( !$alt==1 ){
      getSubitem('color','Costom');
    } else {
      echo '<div class="col"></div>';
    } ?>
    </div>
  </div>
</div>
<?php
}
// function getProduct closed;



// -------------------------------------------------------------------- START PAGE RENDER
?>
<!-- Start page container -->
<div class="container fill page-container">

<!-- Start page header -->
<div class="row align-items-center header-area">
  <div class="col-12">
    <h2>Online order form</h2>
  </div>
  <div class="w-100"></div>
  <div class="col-12 pt-5">
    <div class="row no-gutters justify-content-center nav nav-pills order-page-pills">
      <div class="col-2 text-center">
        <div class="active"><a data-toggle="pill" href="#ordernew-cart-products">CHOOSE PRODUCTS</a></div>
      </div>
      <div class="col-1 text-center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>
      <div class="col-2 text-center">
        <div><a data-toggle="pill" href="#ordernew-cart-shipping">SHIPPING INFO</a></div>
      </div>
      <div class="col-1 text-center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>
      <div class="col-2 text-center">
        <div><a data-toggle="pill" href="#ordernew-order-confirm">CONFIRMATION</a></div>
      </div>
    </div>
  </div>
</div>
<!-- End page header -->

<!-- Start page content -->
  <div class="row content-area">
    <div class="tab-content">
      <div id="ordernew-cart-products" class="tab-pane active">
        <?php
          getProduct('Cubes','cube');
          getProduct('Floors', 'floor');
          getProduct('Covers', 'cover');
          getProduct('Ramps', 'ramp', 1);
        ?>
      </div>

      <div id="ordernew-cart-shipping" class="tab-pane fade">
        <div class="col-md-4">
          <h3 class="shipping-panel-title">
            Delivery Info
          </h3>
          <div class="form-horizontal form-delivery-info">

            <div class="form-group">
              <label class="control-label col-md-4" for="dealers">PICK DEALER</label>
              <div class="col-md-8">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-4" for="email">COMPANY NAME</label>
              <div class="col-md-8">
                <input type="email" class="form-control" id="email" placeholder="Company" name="email">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-4" for="email">DEALER NAME</label>
              <div class="col-md-8">
                <div class="input-group">
                  <input class="form-control" type="text" name="source" placeholder="First name">
                  <span class="input-group-addon input-group-separator"></span>
                  <input class="form-control" type="url" name="source" placeholder="Last name">
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <label class="control-label col-md-4" for="email">EMAIL</label>
                <div class="col-md-8">
                  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>

                <div class="col-md-12" style="height: 5px"></div>

                <label class="control-label col-md-4" for="phone">PHONE NUMBER</label>
                <div class="col-md-8">
                  <input type="tel" class="form-control" id="phone" placeholder="Enter phone" name="email">
                </div>

              </div>
            </div>

            <div class="form-group address">
              <div class="input-group">
                <label class="control-label col-md-4" for="email">Address</label>
                <div class="col-md-8">
                  <input type="email" class="form-control" id="email" placeholder="Street address" name="email">
                </div>

                <div class="col-md-12" style="height: 5px"></div>

                <div class="col-md-4"></div>

                <div class="col-md-8">
                  <div class="input-group">
                    <input class="form-control" type="text" name="source" placeholder="City">
                    <input class="form-control" type="text" name="source" placeholder="P.O. box">
                  </div>
                </div>

                <div class="col-md-12" style="height: 5px"></div>
                <div class="col-md-4"></div>

                <div class="col-md-8">
                  <input type="text" class="form-control" id="email" placeholder="Country" name="country">
                </div>

              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-md-4" for="email">VAT NO.</label>
              <div class="col-md-8">
                <input type="email" class="form-control" id="email" placeholder="Vat #" name="email">
              </div>
            </div>

          </div>

          <div class="submission-info">
            <p class="text-normal">
              Cubes come in pallets with units of 60. The minimum order is two pallets.
            </p>
            <p class="text-highlight">
              Note that the custom color cubes, <strong> require a minimum order of 8 pallets.</strong>
            </p>
            <p class="text-light">
              Presented prices do not reflect the actual invoice total. Provided quotes do not take into account Your individual dealer rate.
            </p>
          </div>

        </div>
        <div class="col-md-4">
          <h3 class="shipping-panel-title">
            Shipping
          </h3>
        </div>
        <div class="col-md-4">
          <h3 class="shipping-panel-title">
            Total
          </h3>
        </div>
      </div>

      <div id="ordernew-order-confirm" class="tab-pane fade">
        <h3>Confirm</h3>
      </div>
    </div>
  </div>
<!-- End page content -->


<!-- Start order summary -->
  <div class="order-summary container">
    <!-- <div class="container"> -->
      <div class="panel-heading">
        <div class="row no-gutters">
          <div class="col-5">
            <a data-toggle="collapse" href="#collapse1" class="order-summary-toggle">
              <div class="colspin" ></div>
              <span>Order Summary</span>
            </a>
          </div>
          <div class="col-7 order-summary-short">
            <div class="row no-gutters aling-items-center justify-content-end ">
              <div class="col align-self-center">
                <span class="text-small"> TOTAL NET RETAIL PRICE </span>
                <span class="order-cart-price">&euro; 16 560</span>
              </div>
              <div class="col order-summary-buttons">
                <div class="row align-items-center">
                  <a href="#" class="col btn btn-white"> BECOME A DEALER </a>
                  <a href="#" class="col btn btn-brand"> <span class="glyphicon glyphicon-ok-circle"></span> Order</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="collapse1" class="order-summary-details panel-collapse collapse">
        <div class="row">
          <div class="col-7">
            <div class="row">
              <div class="col">
                <span class="col-md-8 order-summary-label"> AMOUNT OF PALLETS </span>
                <span class="col-md-4 order-summary-bignum"> 12 </span>
              </div>
              <div class="col">
                <span class="col-md-6 order-summary-label"> SPACES TAKEN </span>
                <span class="col-md-4 order-summary-bignum"> 8 </span>
              </div>
              <div class="col">
                <span class="col-md-8 order-summary-label"> CONTAINER TYPE </span>
                <span class="col-md-4 order-summary-bignum"> 2 </span>
              </div>
            </div>
            <div class="row">
            </div>
          </div>

          <div class="col-5">
            <table class="table table-order-summary ">
              <tr>
                <th>ITEM</th>
                <th>VARIANT</th>
                <th>UNIT RETAIL PRICE</th>
                <th>UNITS TOTAL</th>
                <th>PALLETS</th>
                <th></th>
              </tr>

              <tr>
                <td>FLOOR</td>
                <td>Black</td>
                <td>€ <?php echo $prodPrice; ?></td>
                <td>720</td>
                <td>1</td>
                <td> <a class=""><span class="glyphicon glyphicon-remove"></span> </a> </td>
              </tr>

              <tr>
                <td>FLOOR</td>
                <td>Black</td>
                <td>€ <?php echo $prodPrice; ?></td>
                <td>720</td>
                <td>1</td>
                <td> <a class=""><span class="glyphicon glyphicon-remove"></span> </a> </td>
              </tr>

              <tr>
                <td>FLOOR</td>
                <td>Black</td>
                <td>€ <?php echo $prodPrice; ?></td>
                <td>720</td>
                <td>1</td>
                <td> <a class=""><span class="glyphicon glyphicon-remove"></span> </a> </td>
              </tr>
            </table>
          </div>
        </div>

        <div class="row no-gutters order-summary-bottom justify-content-end">
          <div class="col-7 order-summary-short">
            <div class="row no-gutters aling-items-center justify-content-end ">
              <div class="col align-self-center">
                <span class="text-small"> TOTAL NET RETAIL PRICE </span>
                <span class="order-cart-price">&euro; 16 560</span>
              </div>
              <div class="col order-summary-buttons">
                <div class="row align-items-center">
                  <p class="col info"><small>The total doesn’t take into account Your individual dealer rate.</small></p>
                  <a href="#" class="col btn btn-brand"> <span class="glyphicon glyphicon-ok-circle"></span> Order</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
<!-- End order summary -->

</div>
<!-- End page container -->
