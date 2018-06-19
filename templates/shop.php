
    <?php
    $test = 1;

    $pageTitle = 'shop';

    $shopLinkStyle = 'current';


    require_once __DIR__ . '/header.php';
    ?>
    <h1> <em>Shop</em> </h1>
<div id="section2">
    <form action="#" method="POST" >
        <table>
            <tr>
                <th>Detailed Page</th>
                <th> ID </th>
                <th>Picture</th>
                <th> title </th>
                <th> price </th>

                <th> Delete an item</th>
                <th> Update item</th>
            </tr>

            <?php
            //--------------------------
            foreach($items as $item):
                //--------------------------
                ?>

                <tr>

                    <td><a href="index.php?action=show&id=<?= $item['id'] ?>">details</a></td>
                    <td> <?= $item['id'] ?></td>
                    <td><img class ="shopitem" src="images/<?= $item['picture'] ?>"></td>
                    <td> <?= $item['title'] ?> </td>
                    <td> <?= $item['price']?> </td>
                    <td><a href="index.php?action=delete&id=<?= $item['id'] ?>">(DELETE)</a></td>
                    <td><a href="index.php?action=showUpdateProductForm&id=<?= $item['id'] ?>">(UPDATE)</a></td>
                </tr>


                <?php
                //--------------------------
            endforeach;
            //--------------------------
            ?>


        </table>


    </form>


    <p>

    <form class="submitshop"
        action="index.php"
        method="get"
    >
        <input type="hidden" name="action" value="showNewProductForm">
        <input type="submit" value="Create New Product">

    </form>
</div>
<div id="sideb2">
</div>
<?php require_once __DIR__."/footer.php" ?>