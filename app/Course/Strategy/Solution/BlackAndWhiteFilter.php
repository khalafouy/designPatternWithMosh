<?php


namespace App\Course\Strategy\Solution;


class BlackAndWhiteFilter implements Filter
{
    function apply($imageName)
    {
        echo "Apply Black And White Filter";
    }

}