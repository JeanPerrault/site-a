<?php

// IF
if (condition) {
    // code a executer si condition est réalisée
}

// IF ... ELSE
if (condition) {
    // code a executer si condition est réalisée
} else {
    // code a executer si condition n est pas réalisée
}

// IF ... ELSE IF
if (condition) {
    // code a executer si condition est réalisée
} else if (condition_2) {
    // code a executer si condition_2 n est pas réalisée
}

// IF ... ELSE IF ... ELSE
if (condition) {
    // code a executer si condition est réalisée
} else if (condition_2) {
    // code a executer si condition_2 n est pas réalisée
}else {
    // code a executer si condition et condition_2 ne sont pas réalisées
}

// SWITCH
switch (condition){
    case 'A' :
        // code a executer si condition vaut A
        break;
    case 'B' :
        // code a executer si condition vaut B
        break;
    default : 
        // code a executer si condition ne vaut ni A ni B
}

// TERNAIRE
$result = condition ? true : false;
$teskoi = age > 18 ? "un homme" : "un bébé";
