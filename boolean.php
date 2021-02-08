<?php

function boolean($value = null) : bool
{
    return (bool) filter_var($value, FILTER_VALIDATE_BOOLEAN);
}