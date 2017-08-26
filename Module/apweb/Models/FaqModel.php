<?php

/**
 *
 * knut7 Framework (http://framework.artphoweb.com/)
 * knut7 FW(tm) : Rapid Development Framework (http://framework.artphoweb.com/)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @link      http://github.com/zebedeu/artphoweb for the canonical source repository
 * @copyright (c) 2016.  knut7  Software Technologies AO Inc. (http://www.artphoweb.com)
 * @license   http://framework.artphoweb.com/license/new-bsd New BSD License
 * @author    Marcio Zebedeu - artphoweb@artphoweb.com
 * @version   1.0.0
 */

/**
 * Created by PhpStorm.
 * User: artphotografie
 * Date: 2016/06/22
 * Time: 3:13 PM
 */
use FWAP\Database\Drives\iDatabase;

class FaqModel {

    /**
     * @var iDatabase
     */
    private $entity;

    public function __construct(iDatabase $entity) {

        $this->entity = $entity;
    }

    /**
     * @param $data
     * @return bool
     */
    public function insertFaq($data) {
        return $this->entity->insert('faq', $data);
    }

    /**
     * @return mixed
     */
    public function _getFaq() {
        return $this->entity->selectManager("SELECT * FROM faq");
    }

}
