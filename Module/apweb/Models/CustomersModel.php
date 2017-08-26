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

class CustomersModel {
    /**
     * @var interfaceModel instanciando o BD
     */
//    private $m;

    /**
     * @var iDatabase instanciando o BD
     */
    private $entity;

    public function __construct(iDatabase $entity) {

        $this->entity = $entity;
    }

    /**
     * @param $id id for user selected by session
     * @return array
     */
    public function getUser($id) {
        return $this->entity->selectManager('SELECT * FROM usuarios WHERE id =:id', ["id" => $id]);
    }

    public function getusers($user) {
        return $this->entity->selectManager("SELECT * FROM usuarios WHERE id=:id", ["id" => $user]);
    }

    public function getAllUser() {

        return $this->entity->selectManager("SELECT * FROM usuarios");
    }

    /**
     * @param $data
     * @param $id
     */
    public function updates($data, $id) {
        return $this->entity->update('usuarios', $data, "id=" . $id);
    }

    public function deletes($id) {
        $this->entity->delete('usuarios', "id=$id", 1);
    }

}
