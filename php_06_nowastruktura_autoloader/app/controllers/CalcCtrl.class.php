<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {

	private $form;
	private $result;

	public function __construct(){
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}

	public function getParams(){
		$this->form->sum = getFromRequest('sum');
		$this->form->months = getFromRequest('months');
		$this->form->percent = getFromRequest('percent');
	}
	

	public function validate() {

		if (! (isset ( $this->form->sum ) && isset ( $this->form->months ) && isset ( $this->form->percent ))) {

			return false;
		}
		

		if ($this->form->sum == "") {
			getMessages()->addError('Nie podano kwoty pożyczki');
		}
		if ($this->form->months == "") {
			getMessages()->addError('Nie podano liczby miesięcy');
		}
        if ($this->form->percent == "") {
            getMessages()->addError('Nie podano procentu');
        }

		if (! getMessages()->isError()) {

			if (! is_numeric ( $this->form->sum )) {
				getMessages()->addError('Kwota pożyczki musi być liczbą całkowitą');
			}
			
			if (! is_numeric ( $this->form->months )) {
				getMessages()->addError('Liczba miesięcy musi być liczbą całkowitą');
			}

            if (! is_numeric ( $this->form->percent )) {
                getMessages()->addError('Procent musi być liczbą całkowitą');
            }
		}
		
		return ! getMessages()->isError();
	}

	public function process(){

		$this->getParams();
		
		if ($this->validate()) {

			$this->form->sum = intval($this->form->sum);
			$this->form->months = intval($this->form->months);
            $this->form->percent = intval($this->form->percent);
			getMessages()->addInfo('Parametry poprawne.');

            $this->result->result=($this->form->sum +(($this->form->percent/100) * $this->form->sum))/$this->form->percent;
            $this->result->result=round($this->result->result,2);
			
			getMessages()->addInfo('Wykonano obliczenia.');
		}
		
		$this->generateView();
	}
	
	

	public function generateView(){

		
		getSmarty()->assign('page_title','Zadanie 6');
		getSmarty()->assign('page_description','Nowa Struktura i Autoloader');
		getSmarty()->assign('page_header','Kalkulator Składek');
					
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.html');
	}
}
