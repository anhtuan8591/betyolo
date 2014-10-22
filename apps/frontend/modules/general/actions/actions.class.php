<?php

/**
 * general actions.
 *
 * @package    betyolo
 * @subpackage general
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class generalActions extends sfActions
{
    public function executeIndex(sfWebRequest $request)
    {
      $this->bets = Doctrine_Core::getTable('BetyoloBet')
        ->createQuery('b')
        ->where('b.status = ?', BetyoloBet::ON_GOING)
        ->orderBy('b.start_dt DESC')
        ->execute();
    }
}
