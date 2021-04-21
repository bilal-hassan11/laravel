<?php 

echo"<pre>";
print_r($categories);
die();

?>
<!-- Dropdown --> 
<select id='selUser' style='width: 200px;'>
  <option value='0'>Select User</option> 
  @foreach($categories as $category)
  <option value=''>{{ $category->category_name }}</option> 
  @endforeach
</select>

<input type='button' value='Seleted option' id='but_read'>

<br/>
<div id='result'></div>