<?php

namespace Home\Model;
use Think\Model\RelationModel;

class VulsModel extends RelationModel {

    protected $fields = array('id', 'projid', 'groupid','urls','description','risk','vulsparam','vulsdetails','suggestions');
    //protected $pk = 'id';
    protected $_link = array(
        'Groups' => array(
            'mapping_type' => self::BELONGS_TO,
            //'class_name' => 'Groups',
            'mapping_name' => 'vulgrp',
            'foreign_key' => 'groupid',
            'relation_table' => 'groups'
        )
    );

}

?>