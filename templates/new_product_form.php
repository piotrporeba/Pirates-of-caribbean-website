<?php
//-------- page header -------------------
$pageTitle = 'new product form';
require_once __DIR__ . '/header.php';
//----------------------------------------
?>


<h1>Create a new product</h1>
    <div id="section2">
<form
    action="index.php?action=createNewProduct"
    method="POST"
>
<table>
    <tr>

        <th> title </th>
        <th> description </th>
        <th> price </th>
        <th>Quantity</th>
        <th>Picture</th>
    </tr>
    <tr>
        <td><input type="text" name="title"></td>
        <td><input type="text" name="description"></td>
        <td><input type="text" name="price"></td>
        <td><input type="text" name="stockQuantity"></td>
        <td><input type="text" name="picture"></td>

    </tr>

</table>



    <input class="submitshop" type="submit" value="Create New Product">

</form>
</div>
<?php require_once __DIR__."/footer.php" ?>