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
<form class="form-horizontal" action="store_product" enctype="multipart/form-data" method="post">

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >PRODUCT NAME</label>  
  <div class="col-md-4">
  <input name="name" placeholder="PRODUCT NAME" class="form-control input-md"  type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >PRODUCT DESCRIPTION </label>  
  <div class="col-md-4">
  <input name="description" placeholder="PRODUCT DESCRIPTION" class="form-control input-md"  type="text">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" >PRODUCT CATEGORY</label>
  <div class="col-md-4">
    <select  name="category" class="form-control">
    <option > Select Category</option>
    @foreach ($categories as $data)
    <option value = "{{$data->id}}">{{$data->category_name}}</option>
    @endforeach
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >AVAILABLE QUANTITY</label>  
  <div class="col-md-4">
  <input  name="quantity" placeholder="AVAILABLE QUANTITY" class="form-control input-md"  type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >PERCENTAGE DISCOUNT</label>  
  <div class="col-md-4">
  <input  name="discount" placeholder="PERCENTAGE DISCOUNT" class="form-control input-md"  type="text">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >Price</label>  
  <div class="col-md-4">
  <input  name="price" placeholder="Price" class="form-control input-md"  type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" >main_image</label>
  <div class="col-md-4">
    <input  name="Photo" class="input-file" type="file">
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" >Single Button</label>
  <div class="col-md-4">
    <button  name="singlebutton" class="btn btn-primary">Button</button>
  </div>
  </div>

</fieldset>
</form>
