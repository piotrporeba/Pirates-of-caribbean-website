<?php
//-------- page header -------------------
$pageTitle = 'new product form';
require_once __DIR__ . '/header.php';
//----------------------------------------
?>

<h1>Update Product</h1>
    <div id="section2">
        <form action="index.php?action=updateProduct" method="POST">
            <table>

                <tr>
                    <th> title </th>
                    <th> description </th>
                    <th> price </th>
                    <th>Quantity</th>
                    <th>Picture</th>
                </tr>

                <tr>
                    <td><input type="text" name="title" value="<?= $item['title'] ?>"></td>
                    <td><input type="text" name="description" value="<?= $item['description'] ?>"></td>
                    <td><input type="text" name="price" value="<?= $item['price'] ?>"></td>
                    <td> <input type="text" name="stockQuantity" value="<?= $item['stockQuantity'] ?>"></td>
                    <td> <input type="text" name="picture" value="<?= $item['picture'] ?>"></td>

                </tr>
                <tr><input type="hidden" name="id" value="<?= $item['id'] ?>"></tr>

            </table>



            <input class="submitshop" type="submit" value="Update Product">

        </form>
    </div>
<?php require_once __DIR__."/footer.php" ?>