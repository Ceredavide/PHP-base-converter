<?php
include("actions.php");

//
// Funzione che si incarica di mostrare il risultato
// All'inizio verifica se ci sono degli errori nelle basi o nel numero inserito
// Nel caso ci fossero, mostra la lista degli errori trovati
// Nel caso non ci fosse nessun errore, converte il numero tramite le informazioni fornite.
//

function renderResult()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $errors = checkIfHasErrors();

        if (count($errors) != 0) {
            renderErrors($errors);
        } else {
            renderConvertionSteps();
        }
    }
}

function renderErrors($errors)
{
    foreach ($errors as $error) {
        echo '<div class="col-8"><div class="alert alert-danger" role="alert">Errore: <a href="#" class="alert-link">' . $error . '</a></div></div>';
    };
}

function renderConvertionSteps()
{
    $initialBase = $_POST['initialBase'];
    $finalBase = $_POST['finalBase'];

    if($initialBase != 10 || $finalBase != 10){
        $valueBase10 = base_convert($_POST['number'], $_POST['initialBase'], 10);
        echo '<div class="col-12 col-xl-8"><div class="alert alert-secondary" role="alert">Converto il valore in base 10: <a href="#" class="alert-link">' . $valueBase10 . '</a></div></div>';
    }
    if($initialBase != 2 || $finalBase != 2){
        $valueBase2 = base_convert($_POST['number'], $_POST['initialBase'], 2);
        echo '<div class="col-12 col-xl-8"><div class="alert alert-secondary" role="alert">Converto il valore in base 2: <a href="#" class="alert-link">' . $valueBase2 . '</a></div></div>';
    }

    $valueConverted =  base_convert($_POST['number'], $_POST['initialBase'], $_POST['finalBase']);
    echo '<div class="col-12 col-xl-8"><div class="alert alert-success" role="alert">Valore in base ' . $_POST['finalBase'] . ': <a href="#" class="alert-link">' . $valueConverted . '</a></div></div>';
};

//
// Parte legata ai forms
// se la pagina è chiamata in POST, lui prende i dati e li inserisce negli ipnuts
// altrimenti i campi rimangono vuoti
//

function renderForm()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        renderCompiledForm();
    } else {
        renderEmptyForm();
    }
}

function renderCompiledForm()
{
    echo ' <div class="col-12 col-xl-3">
    <label>Numero:</label>
    <input name="number" type="text" class="form-control" value=' . $_POST['number'] . '>
</div>
<div class="col-12 col-xl-2">
<label>Base Iniziale:</label>
    <input name="initialBase" type="text" class="form-control" value=' . $_POST['initialBase'] . '>
</div>
<div class="col-6 col-xl-2">
<label>Base Finale:</label>
    <input name="finalBase" type="text" class="form-control" value=' . $_POST['finalBase'] . '>
</div>
<div class="col-2 align-self-end">
    <button type="submit" class="btn btn-success">Converti!</button>
</div>';
}

function renderEmptyForm()
{
    echo '<div class="col-12 col-xl-3">
    <input name="number" type="text" class="form-control" placeholder="Numero:">
</div>
<div class="col-6 col-xl-2">
    <input name="initialBase" type="text" class="form-control" placeholder="Base Iniziale:">
</div>
<div class="col-6 col-xl-2">
    <input name="finalBase" type="text" class="form-control" placeholder="Base Finale:">
</div>
<div class="col-2">
    <button type="submit" class="btn btn-success">Converti!</button>
</div>';
}
