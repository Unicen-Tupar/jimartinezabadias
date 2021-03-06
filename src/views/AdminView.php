<?php

require_once('libs/smarty/Smarty.class.php');

class AdminView{

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty;
    }

    function Index($menu){
        $this->smarty->assign('menu',$menu);
        $this->smarty->display('src/views/templates/adminMenu.tpl');
    }

    function Dishes($dishes){
        $this->smarty->assign('dishes',$dishes);
        $this->smarty->display('src/views/templates/adminDishes.tpl');
    }

    function Dish($dish){
        $this->smarty->assign('dish',$dish);
        $this->smarty->display('src/views/templates/adminDish.tpl');
    }

    function formNewDish($categories){
        $this->smarty->assign('categories',$categories);
        $this->smarty->display('src/views/templates/formNewDish.tpl');
    }
    
    function formEditDish($dish,$categories){
        $this->smarty->assign('dish',$dish);
        $this->smarty->assign('categories',$categories);
        $this->smarty->display('src/views/templates/formEditDish.tpl');
    }

    function Categories($categories){
        $this->smarty->assign('categories',$categories);
        $this->smarty->display('src/views/templates/adminCategories.tpl');
    }

    function formNewCategory(){
        $this->smarty->display('src/views/templates/formNewCategory.tpl');
    }

    function Category($category){
        $this->smarty->assign('category',$category);
        $this->smarty->display('src/views/templates/adminCategory.tpl');
    }

    function formEditCategory($category){
        $this->smarty->assign('category',$category);
        $this->smarty->display('src/views/templates/formEditCategory.tpl');
    }

}

?>