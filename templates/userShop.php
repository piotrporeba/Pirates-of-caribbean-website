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
                    <th>Picture</th>
                    <th> title </th>
                    <th> price </th>

                </tr>

                <?php
                //--------------------------
                foreach($items as $item):
                    //--------------------------
                    ?>

                    <tr>

                        <td><a href="index.php?action=show&id=<?= $item['id'] ?>">details</a></td>
                        <td><img class ="shopitem" src="images/<?= $item['picture'] ?>"></td>
                        <td> <?= $item['title'] ?> </td>
                        <td> <?= $item['price']?> </td>

                    </tr>


                    <?php
                    //--------------------------
                endforeach;
                //--------------------------
                ?>


            </table>


        </form>


        <p>


    </div>
    <div id="sideb2">
    </div>
<?php require_once __DIR__."/footer.php" ?>