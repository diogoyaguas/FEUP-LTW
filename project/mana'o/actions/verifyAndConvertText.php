<?php

    function convertText($text) {

        $reg_exUrl = "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";

        if (preg_match($reg_exUrl, $text, $url)) {

            echo preg_replace($reg_exUrl, '<a href="' . $url[0] . '" rel="nofollow">' . $url[0] . '</a>', $text);
        } else echo $text;
}

?>