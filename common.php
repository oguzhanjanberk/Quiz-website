<?php

//ouputting header, title, css style sheet and body
function outputHeader($title){
    echo '<!DOCTYPE html>';
    echo '<html>';
    echo '<head>';
    echo '<title>' . $title . '</title>';
    echo '<!-- Link to external style sheet -->';
    echo '<link rel="stylesheet" type="text/css" href="stylecss.css">';
    echo '</head>';
    echo '<body>';
}

/* outputting navigation */

function outputBannerNavigation($pageName){
    echo '<div class="banner"></div>';
    echo '<div class="navigation">';
    echo '<ul>';
    echo '<li>';

    //page links with arrays
    $linkNames = array("Home", "Game", "Register", "Login", "Rankings");
    $linkAddresses = array("index.php", "game.php", "register.php", "login.php", "rankings.php");

    //outputting navigation
    for($x = 0; $x < count($linkNames); $x++){
        echo '<li><a ';
        echo '<ul><a ';
        if($linkNames[$x] == $pageName){
            echo 'class="navigation" ';
        }
        echo 'href="' . $linkAddresses[$x] . '">' . $linkNames[$x] . '</a></li>';
    }
    echo '</div>';


}
//outputting closed body and html tag
function outputFooter(){
    echo '<footer>';
    echo '<div class="footer">';
    echo '<p> By Oguzhan Janberk</p>';
    echo '</footer>';
    echo '</div>';
    echo '</body>';
    echo '</html>';

}
