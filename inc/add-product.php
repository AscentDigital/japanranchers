<?php include './inc/00-default-nav.php'; ?>
<div class="container">
  <h2>Add Product</h2>
  <form>
    <div class="form-group">
      <label for="name">Product Name:</label>
      <input type="text" class="form-control" id="name" name="pname" placeholder="Product Name">
    </div>
    <div class="form-group">
      <label for="pwd">Product Type:</label>
      <select class="form-control" id="ptype" name="ptype">
      	<option value="fFruit">Fruits</option>
      		<option value="vegetable">Vegetables</option>
      			<option value="dairy_product">Dairy Products</option>
      				<option value="bamboo_craft">Bamboo Crafts</option>
      					<option value="animal">Animals</option>


      </select>
    </div>
     <div class="form-group">
      <label for="product number">Number of Products:</label>
      <input type="text" class="form-control" id="product_num" name="product_num" placeholder="Number of Products Available">
    </div>
    <div class="form-group">
      <label for="product unit">Unit:</label>
      <input type="text" class="form-control" id="product_unit" name="product_unit" placeholder="Unit">
    </div>
        <div class="form-group">
      <label for="price">Product Price:</label>
      <input type="text" class="form-control" id="pprice" name="pprice" placeholder="Product Price">
    </div>
        <div class="form-group">
      <label for="small description">Product Small Description:</label>
      <input type="textarea" class="form-control" id="small" name="small" placeholder="Small Description">
    </div>
     <div class="form-group">
      <label for="long description">Product Long Description:</label>
      <input type="textarea" class="form-control" id="long" name="long" placeholder="Long Description">
    </div>

    <div class="form-group">
      <label for="upload">Upload Product Image:</label>
      <input type="file" class="form-control" id="upload" name="upload" placeholder="Upload Product Image">
    </div>
    <div >
     <div class="form-group">
  <div class="form-check">
      <label class="form-check-label">
        <input type="radio" class="form-check-input" name="upload" id="option1" value="Single Upload" >
          <img src="data:image/jpeg;base64,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">
      </label>
    </div>
    </div>

    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>
<?php include './inc/09-contact-section.php' ?>