@extends('layout')
@section('content')
<!-- container -->
<section class="showcase">
   <div class="container">
      <div class="pb-2 mt-4 mb-2 border-bottom">
         <h2>JAZZCASH Payment Gateway in Laravel - Checkout</h2>
      </div>
      <!-- JAZZCASH payment form -->
      <div class=" container-fluid my-5 ">
         <div class="row justify-content-center ">
            <div class="col-xl-10">
               <div class="card shadow-lg ">
                  <div class="row justify-content-around">
                     <div class="col-md-7">
                        <div class="card border-0">
                           <div class="card-header pb-0">
                              <h2 class="card-title space ">Checkout</h2>
                              <p class="card-text text-muted mt-4 space">PAYMENT DETAILS</p>
                              <hr class="my-0">
                           </div>
                           <div class="card-body">
                              <!-- ----------------------------------------------------------------------------------------- -->
                              <!-- payment form -->
                              <!-- ----------------------------------------------------------------------------------------- -->
                              <form action="/checkout" method="POST" id="myCCForm">
                                 <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                                 <input type="hidden" name="product_id" value="">
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label for="fullname" class="small text-muted mb-1">
                                          <i class="fa fa-user"></i> Full Name</label>
                                          <input type="text" name="fullname" id="fullname" value="" class="form-control form-control-sm" >
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label for="email" class="small text-muted mb-1">
                                          <i class="fa fa-envelope"></i> Email</label>
                                          <input type="text" name="email" id="email" value="" class="form-control form-control-sm" >
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label for="address" class="small text-muted mb-1">
                                          <i class="fa fa-address-card-o"></i> Address</label>
                                          <input type="text" name="address" id="address" value="" class="form-control form-control-sm" >
                                       </div>
                                    </div>
                                    <div class="col-sm-6">
                                       <div class="form-group">
                                          <label for="country" class="small text-muted mb-1">
                                          <i class="fa fa-address-card-o"></i> Country</label>
                                          <input type="text" name="country" id="country" value="" class="form-control form-control-sm" >
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-4">
                                       <div class="form-group">
                                          <label for="city" class="small text-muted mb-1">
                                          <i class="fa fa-institution"></i> City</label>
                                          <input type="text" name="city" id="city" value="Lahore" class="form-control form-control-sm" >
                                       </div>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="form-group">
                                          <label for="state" class="small text-muted mb-1">State</label>
                                          <input type="text" name="state" id="state" value="" class="form-control form-control-sm" >
                                       </div>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="form-group">
                                          <label for="state" class="small text-muted mb-1">Zip Code</label>
                                          <input type="text" name="zipCode" id="zipCode" value="" class="form-control form-control-sm" >
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row mb-md-5">
                                    <div class="col">
                                       <button type="submit" name="" id="" class="btn btn-lg btn-block btn-primary">PURCHASE PKR</button>
                                    </div>
                                 </div>
                              </form>
                              <!-- ----------------------------------------------------------------------------------------- -->
                              <!-- ./payment form -->
                              <!-- ----------------------------------------------------------------------------------------- -->
                           </div>
                        </div>
                     </div>
                    </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@stop