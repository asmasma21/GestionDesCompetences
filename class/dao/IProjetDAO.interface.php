<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


interface IProjetDAO {
    public function insertProjet($projet); // return boolean
    public function deleteProjet($projet); // return boolean
    public function updateProjet($projet); // return Competence
    public function findProjet($projet); // return boolean
<<<<<<< HEAD
    public function selectProjet($projet); // return Competence
    public function selectProjets($projets_filter, $limit);  // return array of Competences
=======
    public function selectProjet($projet); // return project
    public function selectProjets($projets_filter, $limit);  // return array of Projects
>>>>>>> 8f59c7ad32652b89422144b74e3a390884e4c07c
}
?>
