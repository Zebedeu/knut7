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
use FWAP\Database\Drives\iDatabase;

class SearchUserModel {

    private $id = null;
    private $entity;

    public function __construct(iDatabase $entity) {

        $this->entity = $entity;
    }

    /**
     * @param $id
     * @return array
     */
    public function getSearch($busca) {

        return $this->entity->selectManager("SELECT * FROM article, usuarios WHERE content, usuarios.name, usuarios.city like '%$busca%'ORDER BY title DESC LIMIT 10");
    }

}
