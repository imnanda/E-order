<?php
function is_login()
{
    if($_SESSION['sudahlogin'] == true)
    {
        return true;
    }
    else
    {
        return false;
    }
}