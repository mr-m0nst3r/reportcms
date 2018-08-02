<?php

namespace Home\Model;
use Think\Model;

class UserModel extends Model {

    protected $fields = array('id', 'username', 'passwd');
    //protected $pk = 'id';

}

?>