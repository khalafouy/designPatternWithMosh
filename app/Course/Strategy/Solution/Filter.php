<?php


namespace App\Course\Strategy\Solution;


interface Filter
{
    function apply($imageName);
}