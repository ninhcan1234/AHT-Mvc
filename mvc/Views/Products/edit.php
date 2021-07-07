<h1>Edit Product</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="name">Product's name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter a name" name="name" value ="<?php if (isset($product["name"])) echo $product["name"];?>">
    </div>
    <div class="form-group">
        <label for="prince">Product's Prince</label>
        <input type="text" class="form-control" id="prince" placeholder="Enter a name" name="prince" value ="<?php if (isset($product["prince"])) echo $product["prince"];?>" />
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" class="form-control" id="description" placeholder="Enter a description" name="description" value ="<?php if (isset($product["description"])) echo $product["description"];?>">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>