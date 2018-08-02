<?php

namespace Home\Model;
use Think\Model;

class ProjectModel extends Model {

    protected $fields = array('id', 'name', 'client','pnumber','pdomain','pip','puser','ptime','psummary');
    //protected $pk = 'id';

}

?>