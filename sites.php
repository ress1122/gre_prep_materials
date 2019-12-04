<?php

function Redirect($url, $permanent = false)
{
    if (headers_sent() === false)
    {
        header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
    }

    exit();
}

//some usable sites that might be help while preparing the test

Redirect('https://www.ets.org/gre', false); //register your test and do pp there
Redirect('https://gre.magoosh.com/', false);
Redirect('http://gre.kmf.com/', false); //some practice questions from other places are available on this site
Redirect('https://www.reddit.com/r/GRE/', false);
Redirect('https://theconversation.com/au', false); //news written by academics and researchers
Redirect('https://magazinelib.com/?s=the+economist', false); //download the economist from there(also other mags if you want)
Redirect('https://writingcenter.ashford.edu/transitional-phrases', false); //make your own list, this is just an exp


?>
