<?php
namespace app\controllers;

class ResultCtrl{

    private $records;

    public function action_resultList(){
        try{
            $this->records = getDB()->select("results", [
                "id_wyniku",
                "sum",
                "months",
                "percent",
                "result",
                "data"
            ]);
        } catch (PDOException $e){
            getMessages()->addError('Wystąpił błąd');
            if (getConf()->debug) getMessages()->addError($e->getMessage());
        }
        getSmarty()->assign('results',$this->records);
        getSmarty()->assign('page_title','Historia obliczeń');
        getSmarty()->assign('page_header',' ');
        getSmarty()->assign('page_description',' ');
        getSmarty()->display('ResultList.tpl');
    }
    public function action_resultClear(){
        try{
            getDB()->delete("results",[]);
            getMessages()->addInfo('Usunięto');
        } catch (PDOException $e){
            getMessages()->addError('Wystąpił błąd');
            if (getConf()->debug) getMessages()->addError($e->getMessage());
        }
        forwardTo('resultList');
    }
}

