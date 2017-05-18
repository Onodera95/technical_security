<?php
/**
 * Created by PhpStorm.
 * User: stud03
 * Date: 18.05.2017
 * Time: 12:42
 */

namespace form;

require_once('../class/SQL_INSERT.php');
use tables\SQL_INSERT;
class doljnost
{
    private $data; //Обработанные данные, которые мы получили от пользователя

    /**
     * @return mixed
     */
    public function getTables()
    {
        return 'doljnost';
    }

    public function load()
    {
        $valid = true;
        if (isset($_REQUEST['name']) && $_REQUEST['name'] != '') {
            $this->data['name'] = $_REQUEST['name'];
        } else {
            echo 'ОШИБКА. Заполните поле';
            $valid = false;
        }        

        if ($valid === false) {
            return false;
        }

        return true;
    }
    
    public function save(){
        $r=new SQL_INSERT();
        $r->setTable($this->getTables());
        $r->setValues($this->data);
        $r->Insert();

        return $r->SQL;

    }
    
}