<?php
// if (isset($_POST['data'])) {
//     $data = $_POST['data'];
//     $result = "Dữ liệu đã được xử lý: " . $data;
//     echo $result;
// }
?>

<section class="h-100 h-custom">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="row">

        <div class="table-responsive col-lg-7 card shadow-2-strong" style="border-radius: 16px;">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" class="h5">Shopping Bag</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <!-- <?php 
                $cart = isset($_SESSION["cart"]) ? $_SESSION["cart"] : array();
                foreach($cart as $index => $item){
              ?> -->
              <tr>
                <th scope="row">
                  <div class="d-flex align-items-center">
                    <img src="<?php echo $item['url'];?>" class="img-fluid rounded-3" style="width: 120px;" alt="Book">
                    <div class="flex-column ms-4">
                      <p class="mb-2"><?php echo $item['ten_laptop'];?></p>
                      <p class="mb-0"><?php echo $item['ten_mau'];?> | <?php echo $item['dung_luong'];?></p>
                    </div>
                  </div>
                </th>
                <td class="align-middle">
                  <div class="d-flex flex-row">
                    
                    

                    <input id="<?php echo $item['id_ctlaptop'];?>" min="0" name="quantity"
                      value="<?php echo $item['so_luong_mua'];?>" type="number"
                      class="form-control form-control-sm text-center mx-2 bg-light" style="width: 50px;" min="0"
                      max="<?php echo $item['max_so_luong'];?>" readonly
                      />

                  </div>
                </td>
                <td class="align-middle">
                  <p class="mb-0" style="font-weight: 500;"><?php echo number_format($item['don_gia'], 0, ',', '.');?>đ
                  </p>
                </td>
                <td class="align-middle">
                  <form action="index.php?action=giohang&act=delete" method="post">
                    <input type="text" class="d-none" name="id_ctlaptop" value="<?php echo $item['id_ctlaptop']?>">
                      <button class="mb-0 bg-transparent border-0" style="font-weight: 500;" onclick="deleteItem(event)"><i
                          class="fa fa-times-circle-o text-danger" aria-hidden="true"></i></button>
                      </form>
                </td>
              </tr>
              <?php };?>
            </tbody>
          </table>
        </div>

        <!-- <div class="card shadow-2-strong mb-5 mb-lg-0 col-lg-5" style="border-radius: 16px;">
          <div class="card-body p-4">

            <div class="row">
              <div class="col-md-6 col-lg-4 col-xl-3 mb-4 mb-md-0">
                <form>
                  <div class="d-flex flex-row pb-3">
                    <div class="d-flex align-items-center pe-2">
                      <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel1v" value=""
                        aria-label="..." checked />
                    </div>
                    <div class="rounded border w-100 p-3">
                      <p class="d-flex align-items-center mb-0">
                        <i class="fab fa-cc-mastercard fa-2x text-dark pe-2"></i>Credit
                        Card
                      </p>
                    </div>
                  </div>
                  <div class="d-flex flex-row pb-3">
                    <div class="d-flex align-items-center pe-2">
                      <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel2v" value=""
                        aria-label="..." />
                    </div>
                    <div class="rounded border w-100 p-3">
                      <p class="d-flex align-items-center mb-0">
                        <i class="fab fa-cc-visa fa-2x fa-lg text-dark pe-2"></i>Debit Card
                      </p>
                    </div>
                  </div>
                  <div class="d-flex flex-row">
                    <div class="d-flex align-items-center pe-2">
                      <input class="form-check-input" type="radio" name="radioNoLabel" id="radioNoLabel3v" value=""
                        aria-label="..." />
                    </div>
                    <div class="rounded border w-100 p-3">
                      <p class="d-flex align-items-center mb-0">
                        <i class="fab fa-cc-paypal fa-2x fa-lg text-dark pe-2"></i>PayPal
                      </p>
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-6 col-lg-4 col-xl-6">
                <div class="row">
                  <div class="col-12 col-xl-6">
                    <div class="form-outline mb-4 mb-xl-5">
                      <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                        placeholder="John Smith" />
                      <label class="form-label" for="typeName">Name on card</label>
                    </div>

                    <div class="form-outline mb-4 mb-xl-5">
                      <input type="text" id="typeExp" class="form-control form-control-lg" placeholder="MM/YY" size="7"
                        id="exp" minlength="7" maxlength="7" />
                      <label class="form-label" for="typeExp">Expiration</label>
                    </div>
                  </div>
                  <div class="col-12 col-xl-6">
                    <div class="form-outline mb-4 mb-xl-5">
                      <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                        placeholder="1111 2222 3333 4444" minlength="19" maxlength="19" />
                      <label class="form-label" for="typeText">Card Number</label>
                    </div>

                    <div class="form-outline mb-4 mb-xl-5">
                      <input type="password" id="typeText" class="form-control form-control-lg"
                        placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                      <label class="form-label" for="typeText">Cvv</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-xl-3">
                <div class="d-flex justify-content-between" style="font-weight: 500;">
                  <p class="mb-2">Subtotal</p>
                  <p class="mb-2">$23.49</p>
                </div>

                <div class="d-flex justify-content-between" style="font-weight: 500;">
                  <p class="mb-0">Shipping</p>
                  <p class="mb-0">$2.99</p>
                </div>

                <hr class="my-4">

                <div class="d-flex justify-content-between mb-4" style="font-weight: 500;">
                  <p class="mb-2">Total (tax included)</p>
                  <p class="mb-2">$26.48</p>
                </div>

                <button type="button" class="btn btn-primary btn-block btn-lg">
                  <div class="d-flex justify-content-between">
                    <span>Checkout</span>
                    <span>$26.48</span>
                  </div>
                </button>

              </div>
            </div>

          </div>
        </div> -->

      </div>
    </div>
  </div>
</section>
<style>
  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }
</style>

<script>
  function deleteItem(event){
    if(!window.confirm('Bạn muốn xóa sản phẩm ?')){
      event.preventDefault();
    }

  }
</script>
