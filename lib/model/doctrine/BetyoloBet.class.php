<?php

/**
 * BetyoloBet
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    betyolo
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class BetyoloBet extends BaseBetyoloBet
{
  #statuses
  const ON_GOING = 1;
  const EXPIRED  = 2;

  public static $statuses = array(
    1 => "On going",
    2 => "Expried",
  );

  public static $results = array(
    1 => "A win",
    2 => "B win",
  );

  public function printStatus()
  {
  	return self::$statuses[$this->getStatus()];
  }

  public function printResult()
  {
  	return self::$results[$this->getResult()];
  }
}
