<?php

function checkIfHasErrors()
{
    $errors = [];

    $isAValidNumber = checkIfIsAValidNumber();

    if ($_POST['initialBase'] < 2 || $_POST['initialBase'] > 16) {
        array_push($errors, "La base iniziale sembra essere errata.");
    }
    if ($_POST['finalBase'] < 2 || $_POST['finalBase'] > 16) {
        array_push($errors, "La base finale sembra essere errata.");
    }
    if (!$isAValidNumber) {
        array_push($errors, "Il numero inserito non è compatibile con la base iniziale.");
    }

    return $errors;
}

function checkIfIsAValidNumber()
{
    $isAValidNumber = true;

    $number = $_POST['number'];

    $initialBase = $_POST['initialBase'];

    $array = str_split($number);

    $chars = ["a", "b", "c", "d", "e", "f"];

    if ($initialBase < 10) {
        foreach ($array as $num) {
            if ($num >= $initialBase)
                $isAValidNumber = false;
        }
    } else {
        foreach ($array as $num) {
            if (!is_int($num)) {
                $index = array_search($num, $chars, true);
                if ($index > ($initialBase - 11)) {
                    $isAValidNumber = false;
                }
            }
        }
    }

    return $isAValidNumber;
}
