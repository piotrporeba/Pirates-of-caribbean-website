<?php
if(!isset($indexLinkStyle)){
    $indexLinkStyle = '';
};
if(!isset($membershipLinkStyle)){
    $membershipLinkStyle = '';
};
if(!isset($shopLinkStyle)){
    $shopLinkStyle = '';
};
if(!isset($sitemapLinkStyle)){
    $sitemapLinkStyle = '';
};
if(!isset($contactusLinkStyle)){
    $contactusLinkStyle = '';
};


?>


<div id= "nav">

    <a href="index.php?action=index" class=<?= $indexLinkStyle ?>>Home </a>

    <a href="index.php?action=shop" class=<?= $shopLinkStyle?>>Shop </a>
    <a href="index.php?action=contactus " class=<?= $contactusLinkStyle?>>Contact Us </a>
    <a href="index.php?action=sitemap" class=<?= $sitemapLinkStyle?>>Site Map </a>


</div>

