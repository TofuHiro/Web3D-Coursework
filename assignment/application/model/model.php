<?php

class Model {

    public $dbhandle;

    public function __construct()
    {
        $dsn = "sqlite:./db/web3D.db";

        try {
            $this->dbhandle = new PDO($dsn, "user", "password", array(
                                                                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                                                PDO::ATTR_EMULATE_PREPARES => false,
                                                                ));
        }
        catch (PDOException $e) {
            echo "Unable to connect to the database";
            print new Exception($e->getMessage());
        }
    }

    function openConnection() {
        $dsn = "sqlite:./db/web3D.db";

        try {
            $this->dbhandle = new PDO($dsn, "user", "password", array(
                                                                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                                                PDO::ATTR_EMULATE_PREPARES => false,
                                                                ));
        }
        catch (PDOException $e) {
            echo "Unable to connect to the database";
            print new Exception($e->getMessage());
        }
    }

    //Get main page json data
    function getPageData() {
        //Return JSON data as array
        $file = file_get_contents("application/model/data.json");
        return json_decode($file, true);
    }


    //-----Create Tables-----

    //General drink information
    function dbCreateDrinkInfoTable() {
        try {
            $this->dbhandle->exec("CREATE TABLE Drink_Info 
            (drink TEXT PRIMARY KEY,  
            image_url TEXT, 
            image_alt TEXT, 
            title TEXT,
            nutrition TEXT,
            info TEXT)");
            return "Drink_Info table is successfully created inside web3D.db file";
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }
    //Layout for about block
    function dbCreateDrinkAboutLayoutTable() {
        try {
            $this->dbhandle->exec("CREATE TABLE Drink_About_Layout 
            (drink TEXT PRIMARY KEY, 
            image_float TEXT, 
            text_float TEXT)");
            return "Drink_About_Layout table is successfully created inside web3D.db file";
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }
    //Button types for each drink
    function dbCreateDrinkButtonTable() {
        try {
            $this->dbhandle->exec("CREATE TABLE Drink_Button 
            (drink TEXT PRIMARY KEY,  
            button_type TEXT)");
            return "Drink_Button table is successfully created inside web3D.db file";
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }
    //Information to display in about section
    function dbCreateDrinkAboutInfoTable() {
        try {
            $this->dbhandle->exec("CREATE TABLE Drink_About_Info 
            (drink TEXT PRIMARY KEY,  
            about_info TEXT)");
            return "Drink_About_Info table is successfully created inside web3D.db file";
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }
    //Information to display in 'more'
    function dbCreateDrinkImageInfoTable() {
        try {
            $this->dbhandle->exec("CREATE TABLE Drink_Image_Info 
            (drink TEXT PRIMARY KEY,  
            image_info TEXT)");
            return "Drink_Image_Info table is successfully created inside web3D.db file";
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }
    //Model info
    function dbCreateDrinkModelInfoTable() {
        try {
            $this->dbhandle->exec("CREATE TABLE Drink_Model 
            (drink TEXT PRIMARY KEY,  
            x3d_info TEXT,
            x3d_model TEXT,
            x3d_creation_method TEXT,
            glTF_info TEXT, 
            glTF_model TEXT, 
            glTF_creation_method TEXT)");
            return "Drink_Model table is successfully created inside web3D.db file";
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }
    //Background urls
    function dbCreateBackgroundsTable() {
        try {
            $this->dbhandle->exec("CREATE TABLE Backgrounds 
            (bg_index INTEGER PRIMARY KEY,  
            bg_url TEXT)");
            return "Backgrounds table is successfully created inside web3D.db file";
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }


    //-----Insert Into Table-----

    //Insert new content
    function dbInsertDrinkInfo() {
        try {
            $this->dbhandle->exec(
                "INSERT INTO Drink_Info (drink, image_url, image_alt, title, nutrition, info) 
                    VALUES ('Coca Cola', 'assets/images/coke_bottle.png', 'Coca Cola', 'Coca Cola', 
                    'Nutrition Information: per 100ml; Energy: 180kJ/42 kcal; Fat: 0g; Of which saturates: 0g; Carbohydrate: 10.6g; Of which sugars: 10.6g; Protein: 0g; Salt: 0g;', 
                    
                    'Coca-Cola, or Coke, is a carbonated soft drink manufactured by the Coca-Cola Company. In 2013, Coke products were sold in over 200 countries worldwide, with consumers drinking more than 1.8 billion company beverage servings each day. Coca-Cola ranked No. 87 in the 2018 Fortune 500 list of the largest United States corporations by total revenue. Based on Interbrand’s best global brand study of 2020, Coca-Cola was the world’s sixth most valuable brand.'); " .

                "INSERT INTO Drink_Info (drink, image_url, image_alt, title, nutrition, info) 
                    VALUES ('Diet Coke', 'assets/images/diet_coke_can.png', 'Diet Coke', 'Diet Coke', 
                    'Nutrition Information: per 100ml; Energy: 1.6kJ/0.4 kcal; Fat: 0g; Of which saturates: 0g; Carbohydrate: 0g; Of which sugars: 0g; Protein: 0g; Salt: 0g;', 
                    
                    'Diet Coke (also branded as Coca-Cola Light, Coca-Cola Diet or Coca-Cola Light Taste) is a sugar-free and low-calorie soft drink produced and distributed by the Coca-Cola Company. It contains artificial sweeteners instead of sugar. Unveiled on July 8, 1982, and introduced in the United States on August 9, 1982, it was the first new brand since 1886 to use the Coca-Cola trademark. The product quickly overtook the company’s existing diet cola, Tab (which was discontinued in 2022), in sales.'); " .

                "INSERT INTO Drink_Info (drink, image_url, image_alt, title, nutrition, info) 
                    VALUES ('Dr Pepper', 'assets/images/drpepper_can.png', 'Dr Pepper', 'Dr Pepper', 
                    'Nutrition Information: per 100ml; Energy: 85 kJ / 20 kcal; Fat: 0g; Of which saturates: 0g; Carbohydrate: 4.9g; Of which sugars: 4.9g; Protein: 0g; Salt: 0g;', 
                    
                    'Dr Pepper is a carbonated soft drink. It was created in the 1880s by pharmacist Charles Alderton in Waco, Texas, and first served around 1885. Dr Pepper was first nationally marketed in the United States in 1904. It is now also sold in Europe, Asia, North and South America. In Australia, New Zealand and South Africa, Dr Pepper is sold as an imported good. Variants include Diet Dr Pepper and, beginning in the 2000s, a line of additional flavors.'); " .

                "INSERT INTO Drink_Info (drink, image_url, image_alt, title, nutrition, info) 
                    VALUES ('Fanta', 'assets/images/fanta_can.png', 'Fanta', 'Fanta', 
                    'Nutrition Information: per 100mL; Energy: 81 kJ / 19 kcal; Fat: 0g; Of which saturates: 0g; Carbohydrate: 4.6g; Of which sugars: 4.6g;	Protein: 0g; Salt: 0g;', 
                    
                    'Fanta is an American-owned German brand of fruit-flavored carbonated soft drinks created by Coca-Cola Deutschland under the leadership of German businessman Max Keith. There are more than 200 flavors worldwide. Fanta originated in Germany as a Coca-Cola alternative in 1940 due to the American trade embargo of Nazi Germany, which affected the availability of Coca-Cola ingredients. Fanta soon dominated the German market with three million cases sold in 1943. The current formulation of Fanta was developed in Italy in 1955.'); " .

                "INSERT INTO Drink_Info (drink, image_url, image_alt, title, nutrition, info) 
                    VALUES ('Oasis', 'assets/images/oasis_bottle.png', 'Oasis', 'Oasis', 
                    'Nutrition Information: per 100ml; Energy: 74 kJ / 17 kcal; Fat: 0g; Of which saturates: 0g; Carbohydrate: 4.1g; Of which sugars: 4.1g;	Protein: 0g; Salt: 0.08g;', 
                    
                    'Oasis is a non-carbonated bottled soft drink, a product of Orangina Schweppes. In the UK it is manufactured by the Coca-Cola EuroPacific Partners in conjunction with Coca-Cola Company subsidiary Atlantic Industries and in the Republic of Ireland it is distributed by Coca-Cola HBC Ireland. It originated in France by Volvic in 1966 and initially distributed under the name ’Pulse’, until flagging sales led to a rebrand and its current name ’Oasis’ being introduced. The drink is described as a ’fruit juice drink - with sugar and sweeteners’. In May 2013, Oasis was imported to stores and supermarkets around the Ivory Coast, and by the end of 2013, Oasis was imported to stores and supermarkets around Madagascar.'); " . 

                "INSERT INTO Drink_Info (drink, image_url, image_alt, title, nutrition, info) 
                    VALUES ('Sprite', 'assets/images/sprite_bottle.png', 'Sprite', 'Sprite', 
                    'Nutrition Information: per 100ml; Energy: 79 kJ / 19 kcal; Fat: 0g; Of which saturates: 0g; Carbohydrate: 4.4g; Of which sugars: 4.4g; Protein: 0g; Salt: 0.04g;', 
                    
                    'Sprite is a clear, lemon and lime-flavored soft drink created by the Coca-Cola Company. Sprite comes in multiple flavors, including cranberry, cherry, grape, orange, tropical, ginger, and vanilla. Ice, peach, Berryclear remix, and newer versions of the drinks are artificially sweetened. Sprite was created to compete primarily against 7 Up. The Sprite brand name was created by T. C. ’Bud’ Evans, a Houston-based bottler who also distributed Coca-Cola products, circa 1955 for a line of drinks with flavors such as strawberry and orange; the rights to the name were acquired by the Coca-Cola Company in 1960.'); ");

            return "Drink info inserted successfully inside web3D.db";
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }
    //Layout for about block for each drinks
    function dbInsertDrinkAboutLayout() {
        try {
            $this->dbhandle->exec(
                "INSERT INTO Drink_About_Layout (drink, image_float, text_float) 
                    VALUES ('Coca Cola', 'float-start', 'float-end'); " .

                "INSERT INTO Drink_About_Layout (drink, image_float, text_float) 
                    VALUES ('Diet Coke', 'float-end', 'float-start'); " .

                "INSERT INTO Drink_About_Layout (drink, image_float, text_float) 
                    VALUES ('Dr Pepper', 'float-start', 'float-end'); " .

                "INSERT INTO Drink_About_Layout (drink, image_float, text_float) 
                    VALUES ('Fanta', 'float-end', 'float-start'); " .

                "INSERT INTO Drink_About_Layout (drink, image_float, text_float) 
                    VALUES ('Oasis', 'float-start', 'float-end'); " . 

                "INSERT INTO Drink_About_Layout (drink, image_float, text_float) 
                    VALUES ('Sprite', 'float-end', 'float-start'); ");

            return "Drink about layout inserted successfully inside web3D.db";
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }
    //Button types
    function dbInsertDrinkButton() {
        try {
            $this->dbhandle->exec(
                "INSERT INTO Drink_Button (drink, button_type) 
                    VALUES ('Coca Cola', 'coke_button'); " .

                "INSERT INTO Drink_Button (drink, button_type) 
                    VALUES ('Diet Coke', 'diet_coke_button'); " .

                "INSERT INTO Drink_Button (drink, button_type) 
                    VALUES ('Dr Pepper', 'drpepper_button'); " .

                "INSERT INTO Drink_Button (drink, button_type) 
                    VALUES ('Fanta', 'fanta_button'); " .

                "INSERT INTO Drink_Button (drink, button_type) 
                    VALUES ('Oasis', 'oasis_button'); " . 

                "INSERT INTO Drink_Button (drink, button_type) 
                    VALUES ('Sprite', 'pepsi_button'); ");

            return "Drink button inserted successfully inside web3D.db";
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }
    //About info for drinks
    function dbInsertDrinkAboutInfo() {
        try {
            $this->dbhandle->exec(
                "INSERT INTO Drink_About_Info (drink, about_info) 
                    VALUES ('Coca Cola', 'Coca‑Cola Original Taste is the world’s favourite soft drink and has been enjoyed since 1886. You can find Coca‑Cola Original Taste in a variety of sizes to suit every lifestyle and occasion.'); " .

                "INSERT INTO Drink_About_Info (drink, about_info) 
                    VALUES ('Diet Coke', 'History was made 40 years ago with the creation of Diet Coke. Within two years, Diet Coke was the world’s favourite light cola, and it still is! Diet Coke encourages you to love what you love, celebrating the unapologetic attitude that comes with knowing who you are and what you’re into, whether it’s ‘cool’ or not. So add some sparkle to your day - without sugar or calories - with a crisp, refreshing Diet Coke!'); " .

                "INSERT INTO Drink_About_Info (drink, about_info) 
                    VALUES ('Dr Pepper', 'For over a century, Dr Pepper’s truly unique taste has been impossible to describe… a taste so misunderstood that’s confusingly good. Grab it now, thank us later. Available with zero sugar and zero calories.'); " .

                "INSERT INTO Drink_About_Info (drink, about_info) 
                    VALUES ('Fanta', 'Bright, bubbly, instantly refreshing and great tasting. Fanta is made with 100% natural flavours and is caffeine free. Fanta is available in a variety of real fruit flavours.'); " .

                "INSERT INTO Drink_About_Info (drink, about_info) 
                    VALUES ('Oasis', 'Oasis is a non-carbonated bottled soft drink, a product of Orangina Schweppes. In the UK it is manufactured by the Coca-Cola EuroPacific Partners in conjunction with Coca-Cola Company subsidiary Atlantic Industries and in the Republic of Ireland it is distributed by Coca-Cola HBC Ireland.'); " . 

                "INSERT INTO Drink_About_Info (drink, about_info) 
                    VALUES ('Sprite', 'Crisp, refreshing and clean-tasting, Sprite is a lemon and lime-flavoured soft drink. It first hit shop shelves back in 1961 and today it’s sold in more than 190 countries.'); ");

            return "Drink about info inserted successfully inside web3D.db";
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }
    //Image info
    function dbInsertDrinkImageInfo() {
        try {
            $this->dbhandle->exec(
                "INSERT INTO Drink_Image_Info (drink, image_info) 
                    VALUES ('Coca Cola', 'This image was rendered using Blender where a more realistic material was used to outline the glass material along with its refractive effect and the metallic cap of the Coca Cola bottle'); " .

                "INSERT INTO Drink_Image_Info (drink, image_info) 
                    VALUES ('Diet Coke', 'This image was rendered using Blender with a highly smooth and metallic material giving its shine and metallic can look'); " .

                "INSERT INTO Drink_Image_Info (drink, image_info) 
                    VALUES ('Dr Pepper', 'This image was rendered using Blender with a highly smooth and metallic material giving its shine and metallic can look'); " .

                "INSERT INTO Drink_Image_Info (drink, image_info) 
                    VALUES ('Fanta', 'This image was rendered using Blender with a highly smooth and metallic material giving its shine and metallic can look'); " .

                "INSERT INTO Drink_Image_Info (drink, image_info) 
                    VALUES ('Oasis', 'This image was rendered using Blender with different types of materials such as a smooth plastic for the cap and a transparent bottle. This also provides the light refraction effect mainly noticable in the juice'); " . 

                "INSERT INTO Drink_Image_Info (drink, image_info) 
                    VALUES ('Sprite', 'This image was rendered using Blender with different types of materials such as a smooth plastic for the cap and a transparent bottle. This also provides the light refraction effect mainly noticable in the juice'); ");

            return "Drink image info inserted successfully inside web3D.db";
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }
    //Model info
    function dbInsertDrinkModelInfo() {
        try {
            $this->dbhandle->exec(
                "INSERT INTO Drink_Model (drink, x3d_info, x3d_model, x3d_creation_method, glTF_info, glTF_model, glTF_creation_method) 
                    VALUES ('Coca Cola', 'This model was created using Blender. The model includes details such as the small indents around the bottle and the bottle cap while sustaining a low vertex count of 760. Parts of the bottle is transparent to give a much more accurate look of a glass bottle. Due to Blender no longer supporting exporting to VRML2 (.wrl), animation are exported to the glTF model instead.', 'assets/models/x3d/coke.x3d', 'Modelled and exported as X3D with Blender', 'This model was created using Blender. The model contains the same model details as the X3D model with the difference of higher quality materials, especially transparency/transmission and material smoothness noticable on the glass bottle itself and the cap.', 'assets/models/glTF/coke.glb', 'Modelled, animated and exported as glTF 2.0 using Blender'); " .

                "INSERT INTO Drink_Model (drink, x3d_info, x3d_model, x3d_creation_method, glTF_info, glTF_model, glTF_creation_method) 
                    VALUES ('Diet Coke', 'This model was created using Blender with a vertex count of 1506 where extra detail was added to the smoothness of the can and the pull tab. One material with the can texture is used and mapped onto the model.', 'assets/models/x3d/dietcoke.x3d', 'Modelled and exported as X3D with Blender', 'This model was created using Blender and a highly smooth, metallic material to highlight the metallic feel of the can.', 'assets/models/glTF/dietcoke.glb', 'Modelled, animated and exported as glTF 2.0 using Blender'); " .

                "INSERT INTO Drink_Model (drink, x3d_info, x3d_model, x3d_creation_method, glTF_info, glTF_model, glTF_creation_method)  
                    VALUES ('Dr Pepper', 'This model was created using Blender with a vertex count of 1506 where extra detail was added to the smoothness of the can and the pull tab. One material with the can texture is used and mapped onto the model.', 'assets/models/x3d/drpepper.x3d', 'Modelled and exported as X3D with Blender', 'This model was created using Blender and a highly smooth, metallic material to highlight the metallic feel of the can.', 'assets/models/glTF/drpepper.glb', 'Modelled, animated and exported as glTF 2.0 using Blender'); " .

                "INSERT INTO Drink_Model (drink, x3d_info, x3d_model, x3d_creation_method, glTF_info, glTF_model, glTF_creation_method) 
                    VALUES ('Fanta', 'This model was created using Blender with a vertex count of 1506 where extra detail was added to the smoothness of the can and the pull tab. One material with the can texture is used and mapped onto the model.', 'assets/models/x3d/fanta.x3d', 'Modelled and exported as X3D with Blender', 'This model was created using Blender and a highly smooth, metallic material to highlight the metallic feel of the can.', 'assets/models/glTF/fanta.glb', 'Modelled, animated and exported as glTF 2.0 using Blender'); " .

                "INSERT INTO Drink_Model (drink, x3d_info, x3d_model, x3d_creation_method, glTF_info, glTF_model, glTF_creation_method) 
                    VALUES ('Oasis', 'This model was created using Blender with a vertex count of 600. The model contains transparency on the bottle and the liquid content and contains detail at the bottom and top of the bottle.', 'assets/models/x3d/oasis.x3d', 'Modelled and exported as X3D with Blender', 'This model was created using Blender, similar to the X3D model, it is kept simple with a low vertex count but with a more smooth and clearer transparent material.', 'assets/models/glTF/oasis.glb', 'Modelled, animated and exported as glTF 2.0 using Blender'); " . 

                "INSERT INTO Drink_Model (drink, x3d_info, x3d_model, x3d_creation_method, glTF_info, glTF_model, glTF_creation_method) 
                    VALUES ('Sprite', 'This model was created using Blender with a vertex count of 1188 where detail such as the divots on the bottles are added efficiently outlining the bottles detail while maintaining an optimal number of vertices. Further detail at the top and bottom of the bottle exist along with the bottle cap itself. Transparency is also used for the bottle material.', 'assets/models/x3d/sprite.x3d', 'Modelled and exported as X3D with Blender', 'This model was created using Blender, similar to the X3D model, it is kept simple with a low vertex count while maintaining its details but with a more smooth and clearer transparent material.', 'assets/models/glTF/sprite.glb', 'Modelled, animated and exported as glTF 2.0 using Blender'); ");

            return "Drink model info inserted successfully inside web3D.db";
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }
    //Background urls
    function dbInsertBackgrounds() {
        try {
            $this->dbhandle->exec(
                "INSERT INTO Backgrounds (bg_index, bg_url) 
                    VALUES ('0', 'assets/skyboxes/brown_photostudio_02_4k.hdr'); " .
                "INSERT INTO Backgrounds (bg_index, bg_url) 
                    VALUES ('1', 'assets/skyboxes/industrial_sunset_puresky_4k.hdr'); " .
                "INSERT INTO Backgrounds (bg_index, bg_url) 
                    VALUES ('2', 'assets/skyboxes/shanghai_bund_4k.hdr'); " .
                "INSERT INTO Backgrounds (bg_index, bg_url) 
                    VALUES ('3', 'assets/skyboxes/aft_lounge_4k.hdr'); ");

            return "Backgrounds inserted successfully inside web3D.db";
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

    //-----Select-----

    //Get specific drink info 
    function dbGetDrinkInfo($drink, $toJSON) {
        try {
            $sql = 'SELECT * FROM Drink_Info WHERE drink = "'. $drink . '"';
            $stmt = $this->dbhandle->query($sql);
            $result = null;
            
            $data = $stmt->fetch();
            $result['image_url'] = $data['image_url'];
            $result['image_alt'] = $data['image_alt'];
            $result['title'] = $data['title'];
            $result['nutrition'] = $data['nutrition'];
            $result['info'] = $data['info'];
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
        if ($toJSON) {
            $result = json_encode($result);
        }
        return $result;
    }
    //Get specific drink layout
    function dbGetDrinkAboutLayout($drink, $toJSON) {
        try {
            $sql = 'SELECT * FROM Drink_About_Layout WHERE drink = "'. $drink . '"';
            $stmt = $this->dbhandle->query($sql);
            $result = null;
            
            $data = $stmt->fetch();
            $result['image_float'] = $data['image_float'];
            $result['text_float'] = $data['text_float'];
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;

        if ($toJSON) {
            $result = json_encode($result);
        }
        return $result;
    }
    //Get specific drink button
    function dbGetDrinkButton($drink, $toJSON) {
        try {
            $sql = 'SELECT * FROM Drink_Button WHERE drink = "'. $drink . '"';
            $stmt = $this->dbhandle->query($sql);
            $result = null;
            
            $data = $stmt->fetch();
            $result['button_type'] = $data['button_type'];
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;

        if ($toJSON) {
            $result = json_encode($result);
        }
        return $result;
    }
    //Get specific image info
    function dbGetDrinkImageInfo($drink, $toJSON) {
        try {
            $sql = 'SELECT * FROM Drink_Image_Info WHERE drink = "'. $drink . '"';
            $stmt = $this->dbhandle->query($sql);
            $result = null;
            
            $data = $stmt->fetch();
            $result['image_info'] = $data['image_info'];
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;

        if ($toJSON) {
            $result = json_encode($result);
        }
        return $result;
    }
    //Get specific model info
    function dbGetDrinkModelInfo($drink, $toJSON) {
        try {
            $sql = 'SELECT * FROM Drink_Model WHERE drink = "'. $drink . '"';
            $stmt = $this->dbhandle->query($sql);
            $result = null;
            
            $data = $stmt->fetch();
            $result['x3d_info'] = $data['x3d_info'];
            $result['x3d_model'] = $data['x3d_model'];
            $result['x3d_creation_method'] = $data['x3d_creation_method'];
            $result['glTF_info'] = $data['glTF_info'];
            $result['glTF_model'] = $data['glTF_model'];
            $result['glTF_creation_method'] = $data['glTF_creation_method'];
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;

        if ($toJSON) {
            $result = json_encode($result);
        }
        return $result;
    }
    //Get all drink info
    function dbGetAllDrinkInfo($toJSON) {
        try {
            $sql = 'SELECT * FROM Drink_Info';
            $stmt = $this->dbhandle->query($sql);
            $result = null;
            $i = 0;
            
            while ($data = $stmt->fetch()) {
                $result[$i]['image_url'] = $data['image_url'];
                $result[$i]['image_alt'] = $data['image_alt'];
                $result[$i]['title'] = $data['title'];
                $result[$i]['nutrition'] = $data['nutrition'];
                $result[$i]['info'] = $data['info'];
                $i++;
            }
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
        
        if ($toJSON) {
            $result = json_encode($result);
        }
        return $result;
    }
    //Get all drink about layout
    function dbGetAllDrinkAboutLayout($toJSON) {
        try {
            $sql = 'SELECT * FROM Drink_About_Layout';
            $stmt = $this->dbhandle->query($sql);
            $result = null;
            $i = 0;
            
            while ($data = $stmt->fetch()) {
                $result[$i]['image_float'] = $data['image_float'];
                $result[$i]['text_float'] = $data['text_float'];
                $i++;
            }
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;

        if ($toJSON) {
            $result = json_encode($result);
        }
        return $result;
    }
    //Get all button types
    function dbGetAllDrinkButton($toJSON) {
        try {
            $sql = 'SELECT * FROM Drink_Button';
            $stmt = $this->dbhandle->query($sql);
            $result = null;
            $i = 0;
            
            while ($data = $stmt->fetch()) {
                $result[$i]['button_type'] = $data['button_type'];
                $i++;
            }
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;

        if ($toJSON) {
            $result = json_encode($result);
        }
        return $result;
    }
    //Get all drink about info
    function dbGetAllDrinkAboutInfo($toJSON) {
        try {
            $sql = 'SELECT * FROM Drink_About_Info';
            $stmt = $this->dbhandle->query($sql);
            $result = null;
            $i = 0;
            
            while ($data = $stmt->fetch()) {
                $result[$i]['about_info'] = $data['about_info'];
                $i++;
            }
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;

        if ($toJSON) {
            $result = json_encode($result);
        }
        return $result;
    }
    //Get all image info
    function dbGetAllDrinkImageInfo($toJSON) {
        try {
            $sql = 'SELECT * FROM Drink_Image_Info';
            $stmt = $this->dbhandle->query($sql);
            $result = null;
            $i = 0;
            
            while ($data = $stmt->fetch()) {
                $result[$i]['image_info'] = $data['image_info'];
                $i++;
            }
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;

        if ($toJSON) {
            $result = json_encode($result);
        }
        return $result;
    }
    //Get all model info
    function dbGetAllDrinkModelInfo($toJSON) {
        try {
            $sql = 'SELECT * FROM Drink_Model';
            $stmt = $this->dbhandle->query($sql);
            $result = null;
            $i = 0;
            
            while ($data = $stmt->fetch()) {
                $result[$i]['x3d_info'] = $data['x3d_info'];
                $result[$i]['x3d_model'] = $data['x3d_model'];
                $result[$i]['x3d_creation_method'] = $data['x3d_creation_method'];
                $result[$i]['glTF_info'] = $data['glTF_info'];
                $result[$i]['glTF_model'] = $data['glTF_model'];
                $result[$i]['glTF_creation_method'] = $data['glTF_creation_method'];
                $i++;
            }
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;

        if ($toJSON) {
            $result = json_encode($result);
        }
        return $result;
    }
    //Get background urls
    function dbGetBackgrounds($toJSON) {
        try {
            $sql = 'SELECT * FROM Backgrounds';
            $stmt = $this->dbhandle->query($sql);
            $result = null;
            $i = 0;
            
            while ($data = $stmt->fetch()) {
                $result[$i]['bg_url'] = $data['bg_url'];
                $i++;
            }
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;

        if ($toJSON) {
            $result = json_encode($result);
        }
        return $result;
    }


    //-----Delete Tables-----

    //Delete table
    function dbDeleteDrinkInfoTable() {
        try {
            $this->dbhandle->exec("DROP TABLE Drink_Info");
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
        return "Drink_Info table successfully dropped";
    }
    //Delete table
    function dbDeleteDrinkAboutLayoutTable() {
        try {
            $this->dbhandle->exec("DROP TABLE Drink_About_Layout");
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
        return "Drink_About_Layout table successfully dropped";
    }
    //Delete table
    function dbDeleteDrinkButtonTable() {
        try {
            $this->dbhandle->exec("DROP TABLE Drink_Button");
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
        return "Drink_Button table successfully dropped";
    }
    //Delete table
    function dbDeleteDrinkAboutInfoTable() {
        try {
            $this->dbhandle->exec("DROP TABLE Drink_About_Info");
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
        return "Drink_About_Info table successfully dropped";
    }
    //Delete table
    function dbDeleteDrinkImageInfoTable() {
        try {
            $this->dbhandle->exec("DROP TABLE Drink_Image_Info");
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
        return "Drink_Image_Info table successfully dropped";
    }
    //Delete table
    function dbDeleteDrinkModelInfoTable() {
        try {
            $this->dbhandle->exec("DROP TABLE Drink_Model");
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
        return "Drink_Model table successfully dropped";
    }
    //Delete table
    function dbDeleteBackgroundsTable() {
        try {
            $this->dbhandle->exec("DROP TABLE Backgrounds");
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
        return "Backgrounds table successfully dropped";
    }


    //-----Generic-----

    //Modify with layout
    function dbUpdateField() {
        try {
            $this->dbhandle->exec("
            UPDATE Drink_Hotspots" . "
            SET info_text = 'Testtesttest' "."
            WHERE drink = 'Sprite';");
            //UPDATE {Table name}
            //SET {column name} = {value}
            //WHERE {primary key} = {key};
        }
        catch (PDOException $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
        return "Table successfully updated";
    }
}

?>