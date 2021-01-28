<?php


class View
{

    function generate($content_view, $template_view, $data = null, $isAllowed = false)
    {
        include 'app/views/' . $template_view;
    }
}
