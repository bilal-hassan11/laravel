<!DOCTYPE html>
<html>
<head>
	<title>ADD CATEGORY</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tagmanager/3.0.2/tagmanager.min.js"></script>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong><br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
			@endforeach
        </ul>
    </div>
@endif
	<form method="post" action="savecategory">
	{{Csrf_field()}}
		<div class="form-group">
			<label>Add category:</label>
			<input type="text" name="category" class="form-control" >
		</div>
		<div class="form-group">
			<label>Add sub category:</label>
			<input type="text" name="sub_category" class="form-control" >
		</div>
		<div class="form-group">
			<label>Add sub of sub category:</label>
			<input type="text" name="sub_of_subcategory" class="form-control" >
		</div>
		<div class="form-group">
			<label>Description:</label>
			<textarea name="category_description"  class="ckeditor form-control"></textarea>
		</div>
		<div class="form-group">
			<button class="btn btn-success">Submit</button>
		</div>
	</form>


	<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });

		$(".tm-input").tagsManager();
	</script>


</body>
</html>