<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<fieldset>
   <!-- Form Name -->
   <legend>PRODUCTS</legend>
   @if ($errors->any())
   <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
         @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>   
   @endif
   <form class="form-horizontal" enctype="multipart/form-data" action="store_products" method="post">
 
   @csrf
      <!-- Text input-->
      
      <div class="form-group">
         <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>  
         <div class="col-md-4">
            <input id="product_name" name="product_name" placeholder="PRODUCT NAME" class="form-control input-md"  type="text">
         </div>
      </div>

      <div class="form-group">
      <label class="col-md-4 control-label" for="product_category">PRODUCT CATEGORY</label>
         <select class="form-control" name="parent_id" style='width: 400px; height: 35px;'>
            <option value="">Select Category</option>
            @foreach ($categories as $category)
               <option value="{{ $category->category_name }}">{{ $category->category_name }}</option>
            @endforeach
         </select>
      </div>

      <div class="form-group">
         <label class="col-md-4 control-label" for="product_color">PRODUCT COLOR</label>  
         <div class="col-md-4">
            <input id="product_color" name="product_color" placeholder="PRODUCT NAME" class="form-control input-md"  type="text">
         </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
         <label class="col-md-4 control-label" for="product_description">PRODUCT DESCRIPTION</label>  
         <div class="col-md-4">
            <input id="product_description" name="product_description" placeholder="PRODUCT DESCRIPTION " class="form-control input-md"  type="text">
         </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
         <label class="col-md-4 control-label" for="product_quantity">PRODUCT QUANTITY</label>  
         <div class="col-md-4">
            <input id="product_quantity" name="product_quantity" placeholder="PRODUCT QUANTITY" class="form-control input-md"  type="text">
         </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
         <label class="col-md-4 control-label" for="product_price">PRODUCT PRICE</label>  
         <div class="col-md-4">
            <input id="product_price" name="product_price" placeholder="PRODUCT PRICE" class="form-control input-md"  type="text">
         </div>
      </div>
      <!-- Text input-->
      <div class="form-group">
         <label class="col-md-4 control-label" for="image">Image</label>  
         <div class="col-md-4">
            <input id="image" name="product_image" placeholder="AUTHOR" class="form-control input-md"  type="file">
         </div>
      </div>
      <!-- Button -->
      <div class="form-group">
         <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
         <div class="col-md-4">
            <button id="singlebutton" name="singlebutton" class="btn btn-primary">Button</button>
         </div>
      </div>
</fieldset>
</form>
<!-- <script>
   $(document).ready(function() {
      
       $('#singlebutton').on('click', function() {
         var product_name = $('#product_name').val();
         var product_descripttion = $('#product_description').val();
         var product_color = $('#product_color').val();
         var product_available_quantity = $('#available_quantity').val();
         var product_discount = $('#product_discount').val();
         var product_image = $('#image').val();
         
         if(product_name!="" && product_descripttion!="" product_color!="" && product_available_quantity!="" && product_discount!="" && product_image!=""){
           /*  $("#butsave").attr("disabled", "disabled"); */
           jQuery.support.cors = true;
             $.ajax({
                 url: "/save_product",
                 type: "POST",
                 data: {
                     _token: $("#csrf").val(),
                     type: 'post',
                     product_name: product_name,
                     product_description: product_description,
                     product_color: product_color
                     available_quantity: available_quantity,
                     product_discount: product_discount,
                 },
                 cache: false,
                 success: function(dataResult){
                     console.log(dataResult);
                     var dataResult = JSON.parse(dataResult);
                     if(dataResult.statusCode==200){
                       window.location = "/";				
                     }
                     else if(dataResult.statusCode==201){
                        alert("Error occured !");
                     }
                     
                 }
             });
         }
         else{
             alert('Please fill all the field !');
         }
     });
   });
</script> -->