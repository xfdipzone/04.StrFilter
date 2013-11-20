<?php
    header("content-type:text/html;charset=utf8");

    require("StrFilter.class.php");

    $white = array('屌丝', '曹操');
    $black = array('屌', '操');

    $content = "我操,曹操你是屌丝,我屌你啊";

    $obj = new StrFilter($white, $black);
    echo $obj->replace($content);
?>