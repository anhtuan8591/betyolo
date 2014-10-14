<?php

/**
 * Transaction
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    betyolo
 * @subpackage model
 * @author     Nguyen Anh Tuan
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Transaction extends BaseTransaction
{
  #type
  const DEPOSIT  = 1;
  const WITHDRAW = 2;

  static public $amounts = array(
    10000 => 10000,
    20000 => 20000,
    50000 => 50000,
    100000 => 100000,
    200000 => 200000,
    300000 => 300000,
    400000 => 400000,
    500000 => 500000,
  );
}
