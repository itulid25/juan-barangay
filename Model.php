<?php
require_once("models/models.php");

class Model {

        public function  getlogin(){
            if (isset($_REQUEST['username'])&&isset($_REQUEST['password'])){
                if ($_REQUEST['username']=='Juan' && $_REQUEST['password']=='Password'){
                    return 'login';
                }
                else{
                    return 'invalid user';
                }


            }

        }

}



?>
