<?php
include_once "simunicon.php";

?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
        <title>similar_unicode_converter(SIMUNICON)</title>
    </head>
    <body style="width: 99%">
        <div style="background-color: lightgray">
            <a href="/" style="">
                <h1 style="display: inline; background-color: lightgray">similar_unicode_converter(SIMUNICON)</h1>
            </a>
            <p style="float: right"><em>Mar 23 2018  CreativeGP</em></p>
        </div>

        <h2><em>This converts ascii text into similar unicode (Unicode magic!!)</em></h2>

        <h3 id="examples">Examples</h3>
        <p>CreativeGP -> 𝘾𝙧𝙚𝞪𝙩𝞲𝞶𝙚𝙂𝞠</p>
        <p>query string -> 𝓺𝓾𝐞𝓻𝑦 𝓈𝓽𝓻ℹ𝓷𝒈</p>

        <h3 id="howtouse">How to use</h3>
        <p>Just type the text you want to convert in the field titled "String to convert",
            and push the button named "CONVERT!!" ;)
        </p>
        <p>And there's some options used to convert.
        </p>
        <p>
            <b>chartype</b> option selects the type of encoded unicode character. You can find the avaliable chartype list <a href="#list">here</a>.
            I should be go well with chartype written many times in the list. How about examining it?
        </p>
        <p>
            <b>index</b> option indicates the index used to retrieve the character from candidates list.
            I don't exactly know you that what index should go well with. Please examine it yourself.
            And you can set the index "rand". This value randomizes the index. You may get so crazy text :)
        </p>

        <h3 id="playground">Playground</h3>
        <form action="#playground" method="GET">
            <p><p>String to convert: </p><textarea style="width: 100%; height: 100px; resize: none" name="s"/><?php if ($_GET['s']) echo htmlspecialchars($_GET['s'])?></textarea></p>
            <p>Options (chartype): <input name="o" type="text" style="width: 100%" value="<?= isset($_GET['o'])?htmlspecialchars($_GET['o']):'MATHEMATICAL SANS-SERIF BOLD';?>" /></p>
            <p>Options (index): <input name="i" type="text" style="width: 100%" value="<?= isset($_GET['i'])?htmlspecialchars($_GET['i']):'10'?>"/></p>
            <p><input type="submit" value="CONVERT!!"/></p>
            <p>Magic string: <textarea style="width: 100%; height: 100px; resize: none"><?php if ($_GET['s']) echo htmlspecialchars(simunicon($_GET['s'], $_GET['o'], $_GET['i'])); ?></textarea></p>
        </form>

        <h3 id="list">Information</h3>
        <p>Author: <a target="_blank" href="https://cretgp.com">CreativeGP</a></p>
        <p>Github repository: <a target="_blank" href="https://github.com/CreativeGP/similar-unicode-converter">github.com/CreativeGP/similar-unicode-converter</a></p>

        <h3 id="list">Avaliable chartype list</h3>
        <pre><?= file_get_contents('list.txt');?></pre>
    </body>
</html>
