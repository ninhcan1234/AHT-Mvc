<h1>Products</h1>
<div class="row col-md-12 centered">
    <table class="table table-striped custab">
        <thead>
        <a href="/mvc/products/create/" class="btn btn-primary btn-xs pull-right"><b>+</b> Add new product</a>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Prince</th>
            <th>Description</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <?php
        foreach ($product as $product)
        {
            echo '<tr>';
            echo "<td>" . $product->id . "</td>";
            echo "<td>" . $product->name . "</td>";
            echo "<td>" . $product->prince . " $" . "</td>";
            echo "<td>" . $product->description . "</td>";
            echo "<td class='text-center'>
            <a class='btn btn-info btn-xs' href='/mvc/products/edit/" . $product->id . "' >
                <span class='glyphicon glyphicon-edit'></span> Edit
            </a> 
            <a href='/mvc/products/delete/" . $product->id . "' class='btn btn-danger btn-xs'>
                <span class='glyphicon glyphicon-remove'></span> Del
            </a>
            </td>";
            echo "</tr>";
        }
        ?>
    </table>
</div>