
<?php

//$pageTitle = 'shop';

//$shopLinkStyle = 'current';


require_once __DIR__ . '/header.php';
?>
<h1> <em>Shop</em> </h1>
<div id="section2">
    <form action="#" method="GET" >
        <table>

                <tr>
                    <th>Picture</th>
                    <th>Title</th>
                    <th>description</th>
                    <th>price</th>
                    <th>stock quantity</th>
                    <th>Buy Now</th>
                </tr>
                <tr>
                    <td><img class ="shopitem" src="images/<?= $product['picture'] ?>"></td>
                    <td><?= $product['title'] ?></td>
                    <td><?= $product['description'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td><?= $product['stockQuantity'] ?></td>
                    <td><a href="index.php?action=buy&id=<?= $product['id'] ?>">Buy</a></td>
                </tr>

        </table>
    </form>


</div>
<div id="sideb2">
</div>
<?php require_once __DIR__."/footer.php" ?>