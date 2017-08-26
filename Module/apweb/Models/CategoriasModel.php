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

class CategoriasModel {

    private $entity;

    public function __construct(iDatabase $entity) {

        $this->entity = $entity;
    }

    public function _allCategorias() {
        return $this->entity->selectManager("SELECT * FROM categoria  WHERE id_cat ORDER BY id_cat DESC ");
    }

    public function category($nameCat) {
        $idName = str_replace("-", " ", $nameCat);

        return $this->entity->selectManager("SELECT * FROM categoria inner join article on categoria.id_cat = article.id_cat WHERE categoria.name = '$idName' ORDER BY categoria.name DESC");
    }

    public function getArcticleBycategory($id) {

        return $this->entity->selectManager("SELECT * FROM article inner join categoria on article.id_cat = categoria.id_cat WHERE article.id_article = $id");
    }

    public function getArcticleById() {

        return $this->entity->selectManager("SELECT * FROM article WHERE article.id_article");
    }

    public function categoryByNameTitle($nameCat) {
        $idName = str_replace("-", " ", $nameCat);

        return $this->entity->selectManager("SELECT * FROM categoria inner join article on categoria.id_cat = article.id_cat WHERE categoria.name = '$idName' ORDER BY categoria.name DESC  LIMIT 1");
    }

    public function createCategory($data) {
        return $this->entity->insert('categoria', $data);
    }

    public function deleteCategory($id) {
        $this->entity->delete('categoria', "id_cat=$id", 1);
    }

}
