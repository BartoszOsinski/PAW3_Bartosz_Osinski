<?php
require_once dirname(__FILE__).'/../config.php';

include _ROOT_PATH.'/app/security/check.php';


function getParams(&$loan){
	$loan['sum'] = isset($_REQUEST['sum']) ? $_REQUEST['sum'] : null;
    $loan['months'] = isset($_REQUEST['months']) ? $_REQUEST['months'] : null;
    $loan['percent'] = isset($_REQUEST['percent']) ? $_REQUEST['percent'] : null;
}


function validate(&$loan,&$messages){

	if ( ! (isset($loan['sum']))) {
		return false;
	}

	if ( $loan['sum'] == "") {
		$messages [] = 'Nie podano kwoty pożyczki';
	}
    if ( $loan['months'] == "") {
        $messages [] = 'Nie podano liczby miesięcy';
    }
    if ( $loan['percent'] == "") {
        $messages [] = 'Nie podano procentu pożyczki';
    }

	if (count ( $messages ) != 0) return false;

	if (! is_numeric( $loan['sum'] )) {
		$messages [] = 'Kwota pożyczki nie jest liczbą całkowitą';
	}
    if (! is_numeric( $loan['months'] )) {
        $messages [] = 'Liczba miesięcy nie jest liczba całkowitą';
    }
    if (! is_numeric( $loan['percent'] )) {
        $messages [] = 'Podany procent nie jest liczbą całkowitą';
    }

	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$loan,&$result){
	global $role;

	$loan['sum'] = intval($loan['sum']);
    $loan['months'] = intval($loan['months']);
    $loan['percent'] = intval($loan['percent']);


    $result=($loan['sum'] +(($loan['percent']/100) * $loan['sum']))/$loan['months'];
    $result=round($result,2);
}


$loan = array();
$result = null;
$messages = array();


getParams($loan);
if ( validate($loan,$messages) ) {
	process($loan,$result);
}


include 'calc_view.php';