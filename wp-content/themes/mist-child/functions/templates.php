<?php

    function tbd_get_template_part($template,$options = [])
    {
        include(locate_template('templates/'.$template.'.php'));
    }


    function tbd_get_svg($template)
    {
        include(locate_template('templates/svgs/'.$template.'.svg'));
    }