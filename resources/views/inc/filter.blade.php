<div class="container">
   <form action="search" mehtod="GET" id="search_form">
      <!-- <div class="select-container">
         <div class="form-group">
           <select id="color" type="checkbox" >
             <option>Select color</option>
             <option>green</option>
             <option>yellow</option>
             <option>red</option>
             </select>
         </div>
         </div> -->
      <div class="sidebar-widget">
         <div class="billing-form-item">
            <div class="billing-title-wrap">
               <h3 class="widget-title">COLOR</h3>
               <div class="title-shape"></div>
            </div>
            <!-- billing-title-wrap -->
            <div class="billing-content">
               <ul>
                  <li>
                     <div class="custom-checkbox">
                        <input type="checkbox" class="checkbox" value="green" name="colors[]" id="green" >
                        <label for="green" class="font-weight-medium">GREEN</label>
                     </div>
                  </li>
                  <li>
                     <div class="custom-checkbox">
                        <input type="checkbox" class="checkbox" value="red" name="colors[]" id="red">
                        <label for="red" class="font-weight-medium">RED</label>
                     </div>
                  </li>
                  <li>
                     <div class="custom-checkbox">
                        <input type="checkbox" class="checkbox" value="yellow" name="colors[]" id="yellow" >
                        <label for="yellow" class="font-weight-medium">YELLOW</label>
                     </div>
                  </li>
                  <li>
                     <div class="custom-checkbox">
                        <input type="checkbox" class="checkbox" value="blue" name="colors[]" id="blue" >
                        <label for="blue" class="font-weight-medium">BLUE</label>
                     </div>
                  </li>
               </ul>
            </div>
            <!-- end billing-content -->
         </div>
      </div>
      <!-- end sidebar-widget -->
      <div class="select-container">
         <select id="search_category" id="category">
            <option value="">Select category</option>
            <option value="1">c1</option>
            <option value="2">c2</option>
            <option value="3">c3</option>
         </select>
      </div>
   </form>
</div>