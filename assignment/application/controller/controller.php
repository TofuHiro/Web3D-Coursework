<?php

class Controller {

    public $load;
    public $model;

    function __construct($pageURI = null) {
        $this->load = new Load();
        $this->model = new Model();
        $this->$pageURI();
    }

    //Default
    function home() {
        $data = $this->model->getPageData();
        $this->load->view('home', $data);
    }


    //-----Database functions-----


    //-----Create Tables-----

    function apiCreateAllTables() {
        $this->model->dbCreateDrinkInfoTable();
        $this->model->openConnection();
        $this->model->dbCreateDrinkAboutLayoutTable();
        $this->model->openConnection();
        $this->model->dbCreateDrinkButtonTable();
        $this->model->openConnection();
        $this->model->dbCreateDrinkAboutInfoTable();
        $this->model->openConnection();
        $this->model->dbCreateDrinkImageInfoTable();
        $this->model->openConnection();
        $this->model->dbCreateDrinkModelInfoTable();
        $this->model->openConnection();
        $this->model->dbCreateBackgroundsTable();

        $data = "All tables successfully created";
        $this->load->view('viewMessage', $data);
    }

    function apiCreateDrinkInfoTable() {
        $data = $this->model->dbCreateDrinkInfoTable();
        $this->load->view('viewMessage', $data);
    }
    function apiCreateDrinkAboutLayoutTable() {
        $data = $this->model->dbCreateDrinkAboutLayoutTable();
        $this->load->view('viewMessage', $data);
    }
    function apiCreateDrinkButtonTable() {
        $data = $this->model->dbCreateDrinkButtonTable();
        $this->load->view('viewMessage', $data);
    }
    function apiCreateDrinkAboutInfoTable() {
        $data = $this->model->dbCreateDrinkAboutInfoTable();
        $this->load->view('viewMessage', $data);
    }
    function apiCreateDrinkImageInfoTable() {
        $data = $this->model->dbCreateDrinkImageInfoTable();
        $this->load->view('viewMessage', $data);
    }
    function apiCreateDrinkModelInfoTable() {
        $data = $this->model->dbCreateDrinkModelInfoTable();
        $this->load->view('viewMessage', $data);
    }
    function apiCreateBackgroundsTable() {
        $data = $this->model->dbCreateBackgroundsTable();
        $this->load->view('viewMessage', $data);
    }


    //-----Insert Into Tables-----

    function apiInsertAll() {
        $this->model->dbInsertDrinkInfo();
        $this->model->openConnection();
        $this->model->dbInsertDrinkAboutLayout();
        $this->model->openConnection();
        $this->model->dbInsertDrinkButton();
        $this->model->openConnection();
        $this->model->dbInsertDrinkAboutInfo();
        $this->model->openConnection();
        $this->model->dbInsertDrinkImageInfo();
        $this->model->openConnection();
        $this->model->dbInsertDrinkModelInfo();
        $this->model->openConnection();
        $this->model->dbInsertBackgrounds();

        $data = "All data successfully inserted";
        $this->load->view('viewMessage', $data);
    }

    function apiInsertDrinkInfo() {
        $data = $this->model->dbInsertDrinkInfo();
        $this->load->view('viewMessage', $data);
    }
    function apiInsertDrinkAboutLayout() {
        $data = $this->model->dbInsertDrinkAboutLayout();
        $this->load->view('viewMessage', $data);
    }
    function apiInsertDrinkButton() {
        $data = $this->model->dbInsertDrinkButton();
        $this->load->view('viewMessage', $data);
    }
    function apiInsertDrinkAboutInfo() {
        $data = $this->model->dbInsertDrinkAboutInfo();
        $this->load->view('viewMessage', $data);
    }
    function apiInsertDrinkImageInfo() {
        $data = $this->model->dbInsertDrinkImageInfo();
        $this->load->view('viewMessage', $data);
    }
    function apiInsertDrinkModelInfo() {
        $data = $this->model->dbInsertDrinkModelInfo();
        $this->load->view('viewMessage', $data);
    }
    function apiInsertBackgrounds() {
        $data = $this->model->dbInsertBackgrounds();
        $this->load->view('viewMessage', $data);
    }

    //-----Select-----

    //Gets all drink info and display on a view
    function apiViewAllTables() {
        $info_data = $this->model->dbGetAllDrinkInfo(false);
        $this->model->openConnection();
        $layout_data = $this->model->dbGetAllDrinkAboutLayout(false);
        $this->model->openConnection();
        $button_data = $this->model->dbGetAllDrinkButton(false);
        $this->model->openConnection();
        $about_data = $this->model->dbGetAllDrinkAboutInfo(false);
        $this->model->openConnection();
        $image_data = $this->model->dbGetAllDrinkImageInfo(false);
        $this->model->openConnection();
        $model_data = $this->model->dbGetAllDrinkModelInfo(false);
        $this->model->openConnection();
        $backgrounds_data = $this->model->dbGetBackgrounds(false);

        $this->load->view('viewDrinkInfo', $info_data);
        $this->load->view('viewDrinkAboutLayout', $layout_data);
        $this->load->view('viewDrinkButton', $button_data);
        $this->load->view('viewDrinkAboutInfo', $about_data);
        $this->load->view('viewDrinkImageInfo', $image_data);
        $this->load->view('viewDrinkModelInfo', $model_data);
        $this->load->view('viewBackgrounds', $backgrounds_data);
    }

    //Returns all drink info
    function apiGetAllDrinkInfo() {
        $data = $this->model->dbGetAllDrinkInfo(true);
        echo $data;
    }
    function apiGetAllDrinkAboutLayout() {
        $data = $this->model->dbGetAllDrinkAboutLayout(true);
        echo $data;
    }
    function apiGetAllDrinkButton() {
        $data = $this->model->dbGetAllDrinkButton(true);
        echo $data;
    }
    function apiGetAllDrinkAboutInfo() {
        $data = $this->model->dbGetAllDrinkAboutInfo(true);
        echo $data;
    }
    function apiGetAllDrinkImageInfo() {
        $data = $this->model->dbGetAllDrinkImageInfo(true);
        echo $data;
    }
    function apiGetAllDrinkModelInfo() {
        $data = $this->model->dbGetAllDrinkModelInfo(true);
        echo $data;
    }

    //Drink Infos
    function apiGetCocaColaDrinkInfo() {
        $data = $this->model->dbGetDrinkInfo("Coca Cola", true);
        echo $data;
    }
    function apiGetDietCokeDrinkInfo() {
        $data = $this->model->dbGetDrinkInfo("Diet Coke", true);
        echo $data;
    }
    function apiGetDrPepperDrinkInfo() {
        $data = $this->model->dbGetDrinkInfo("Dr Pepper", true);
        echo $data;
    }
    function apiGetFantaDrinkInfo() {
        $data = $this->model->dbGetDrinkInfo("Fanta", true);
        echo $data;
    }
    function apiGetOasisDrinkInfo() {
        $data = $this->model->dbGetDrinkInfo("Oasis", true);
        echo $data;
    }
    function apiGetSpriteDrinkInfo() {
        $data = $this->model->dbGetDrinkInfo("Sprite", true);
        echo $data;
    }

    //Image Infos
    function apiGetCocaColaImageInfo() {
        $data = $this->model->dbGetDrinkImageInfo("Coca Cola", true);
        echo $data;
    }
    function apiGetDietCokeImageInfo() {
        $data = $this->model->dbGetDrinkImageInfo("Diet Coke", true);
        echo $data;
    }
    function apiGetDrPepperImageInfo() {
        $data = $this->model->dbGetDrinkImageInfo("Dr Pepper", true);
        echo $data;
    }
    function apiGetFantaImageInfo() {
        $data = $this->model->dbGetDrinkImageInfo("Fanta", true);
        echo $data;
    }
    function apiGetOasisImageInfo() {
        $data = $this->model->dbGetDrinkImageInfo("Oasis", true);
        echo $data;
    }
    function apiGetSpriteImageInfo() {
        $data = $this->model->dbGetDrinkImageInfo("Sprite", true);
        echo $data;
    }

    //Model Infos
    function apiGetCocaColaModelInfo() {
        $data = $this->model->dbGetDrinkModelInfo("Coca Cola", true);
        echo $data;
    }
    function apiGetDietCokeModelInfo() {
        $data = $this->model->dbGetDrinkModelInfo("Diet Coke", true);
        echo $data;
    }
    function apiGetDrPepperModelInfo() {
        $data = $this->model->dbGetDrinkModelInfo("Dr Pepper", true);
        echo $data;
    }
    function apiGetFantaModelInfo() {
        $data = $this->model->dbGetDrinkModelInfo("Fanta", true);
        echo $data;
    }
    function apiGetOasisModelInfo() {
        $data = $this->model->dbGetDrinkModelInfo("Oasis", true);
        echo $data;
    }
    function apiGetSpriteModelInfo() {
        $data = $this->model->dbGetDrinkModelInfo("Sprite", true);
        echo $data;
    }
    
    //Backgrounds
    function apiGetBackgrounds() {
        $data = $this->model->dbGetBackgrounds(true);
        echo $data;
    }

    
    //-----Delete Tables-----

    function apiDeleteDrinkInfoTable() {
        $data = $this->model->dbDeleteDrinkInfoTable();
        $this->load->view('viewMessage', $data);
    }
    function apiDeleteDrinkAboutLayoutTable() {
        $data = $this->model->dbDeleteDrinkAboutLayoutTable();
        $this->load->view('viewMessage', $data);
    }
    function apiDeleteDrinkButtonTable() {
        $data = $this->model->dbDeleteDrinkButtonTable();
        $this->load->view('viewMessage', $data);
    }
    function apiDeleteDrinkAboutInfoTable() {
        $data = $this->model->dbDeleteDrinkAboutInfoTable();
        $this->load->view('viewMessage', $data);
    }
    function apiDeleteDrinkImageInfoTable() {
        $data = $this->model->dbDeleteDrinkImageInfoTable();
        $this->load->view('viewMessage', $data);
    }
    function apiDeleteDrinkModelInfoTable() {
        $data = $this->model->dbDeleteDrinkModelInfoTable();
        $this->load->view('viewMessage', $data);
    }
    function apiDeleteBackgroundsTable() {
        $data = $this->model->dbDeleteBackgroundsTable();
        $this->load->view('viewMessage', $data);
    }


    //-----Generic Functions-----
    
    //Edit function in Model and call in controller
    function apiUpdateField() {
        $data = $this->model->dbUpdateField();
        $this->load->view('viewMessage', $data);
    }

}

?>