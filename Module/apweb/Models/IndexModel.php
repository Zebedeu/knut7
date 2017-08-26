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

class IndexModel {

    private $entity;

    public function __construct(iDatabase $entity) {

        $this->entity = $entity;
    }

    /**
     * select que vai pegar tudo da base de dados na ordem desc por id
     * @return array
     */
    public function exibirAricle() {
        return $this->entity->selectManager("SELECT  *  FROM article ORDER BY id_article  DESC  limit 3 ");
    }

    public function exibiAllTitle() {
        return $this->entity->selectManager("SELECT  *  FROM article ORDER BY id_article  DESC  ");
    }

}
