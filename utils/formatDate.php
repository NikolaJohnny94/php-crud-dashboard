<?php
function formatDate($date_to_format)
{
    $date = new DateTime($date_to_format);
    echo $date->format('F jS, Y');
}
