<h1>Edit Product</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="name">Product's name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter a name" name="name" value ="<?php if (null !=($product->getName())) echo $product->getName();?>">
    </div>
    <div class="form-group">
        <label for="prince">Product's Prince</label>
        <input type="text" class="form-control" id="prince" placeholder="Enter a name" name="prince" value ="<?php if (null != ($product->getPrice())) echo $product->getPrice();?>" />
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" id="description" placeholder="Enter a description" name="description" value ="<?php if (null != ($product->getDescription())) echo $product->getDescription();?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>