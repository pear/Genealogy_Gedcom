<?php
/* vim: set expandtab tabstop=4 shiftwidth=4: */
// +----------------------------------------------------------------------+
// | PHP Version 4                                                        |
// +----------------------------------------------------------------------+
// | Copyright (c) 1997-2003 The PHP Group                                |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.02 of the PHP license,      |
// | that is bundled with this package in the file LICENSE, and is        |
// | available at through the world-wide-web at                           |
// | http://www.php.net/license/2_02.txt.                                 |
// | If you did not receive a copy of the PHP license and are unable to   |
// | obtain it through the world-wide-web, please send a note to          |
// | license@php.net so we can mail you a copy immediately.               |
// +----------------------------------------------------------------------+
// | Authors: Olivier Vanhoucke <olivier@php.net>                         |
// +----------------------------------------------------------------------+
//
// $Id$
//

/**
 * Genealogy_Object
 *
 * Purpose:
 *
 *
 *
 * Contributors:
 *
 * @author   Olivier Vanhoucke <olivier@php.net>
 * @version  $Revision$
 * @package  Genealogy_Gedcom
 * @access   public
 */
class Genealogy_Object {

    /**
     * Contains the Gedcom object identifier
     *
     * @var    string
     * @access public
     */
    var $Identifier   = '';

    /**
     * Contains the Gedcom object : FILE
     *
     * @var    string
     * @access public
     */
    var $File = '';

    /**
     * Constructor
     *
     * Creates a new Genealogy_Object Object
     *
     * @access public
     * @param  array
     * @return object Genealogy_Object
     */
    function Genealogy_Object($arg) {
        $this->Identifier = $arg[0];
        $this->File       = $arg[1];
    }
}
?>
