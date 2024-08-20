<?php

function checkIfFieldsAreEmppty($username, $email, $role)
{
    return (!empty($username) && !empty($email) && !empty($role)) ? true : false;
}
