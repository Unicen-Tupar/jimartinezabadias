<?php

require_once "src/views/AdminView.php";
require_once "src/models/AdminModel.php";

class AdminController{

    private $view;
    private $model;

    function __construct(){
        $this->view = new AdminView();
        $this->model = new AdminModel();
    }

    function showIndex(){
        $this->view->Index();
    }

    function showDishes(){
        $dishes = $this->model->Dishes();
        $this->view->Dishes($dishes);
    }

    function showDish($params){
        $id_dish = $params[0];
        $dish = $this->model->Dish($id_dish);
        $this->view->Dish($dish);
    }

    function formNewDish(){
        $categories = $this->model->Categories();
        $this->view->formNewDish($categories);
    }

    function editDish($params){
        $id_dish = $params[0];
        $dish = $this->model->Dish($id_dish);
        $categories = $this->model->Categories();
        $this->view->formEditDish($dish,$categories);
    }

    function insertDish(){
        $this->model->insertDish(
            $_GET["id_category"],
            $_GET["dish_name"],
            $_GET["description"], 
            $_GET["price"],
            $_GET["in_menu"]);
        header("Location: platos");
    }

    function saveDish(){
        $this->model->updateDish(
            $_GET["id_dish"],
            $_GET["id_category"],
            $_GET["new_id_category"],
            $_GET["dish_name"],
            $_GET["description"], 
            $_GET["price"],
            $_GET["in_menu"]);
        header("Location: platos");
    }

    function deleteDish($params){
        $id_dish = $params[0];
        $this->model->deleteDish($id_dish);
        header("Location: ../platos");
    }

    function showCategories(){
        $categories = $this->model->Categories();
        $this->view->Categories($categories);
    }

    function formNewCategory(){
        $this->view->formNewCategory($categories);
    }
    
    function insertCategory(){
        $this->model->insertCategory(
            $_GET["category_name"],
            $_GET["description"]);
        header("Location: categorias");
    }

    function showCategory($params){
        $id_category = $params[0];
        $category = $this->model->Category($id_category);
        $this->view->Category($category);
    }

    function editCategory($params){
        $cod_category = $params[0];
        $category = $this->model->Category($id_category);
        $this->view->formEditCategory($category);
    }

    // Helpers
    private function splitDishId($dish_url){
        return explode('_',$dish_url);
    }
}

?>