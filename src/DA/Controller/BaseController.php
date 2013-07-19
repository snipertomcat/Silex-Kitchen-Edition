<?php
/**
 * User: Jesse
 * Date: 5/21/13
 * Time: 8:25 PM
 */
namespace DA\Controller;

use Silex\Controller;

class BaseController extends Controller
{
    protected $logfile;

    public function getLogFile()
    {
        return $this->logfile;
    }
}