# Web3D

A Coca Cola themed single-page-application (SPA) built from scratch for my Web 3D Applications module, using the model-view-controller design pattern and implementing RESTful APIs for data interactions. The app showcases different drinks along with their respective images and an interactive scene with its models. The front-end and back-end are connected via JQuery and AJAX.

The website can be viewed at: https://users.sussex.ac.uk/~tn283/3dapp/assignment/index.php

## Front-end

The Bootstrap 5.3 framework along with some custom CSS was used for the front-end. 
PHP hooks are also used to fetch images for display and generative JavaScript is used to build and render these images upon web components.

## Back-end

The back-end consists of a JSON database which is accessible through SQLite and PHP data objects (PDOs) where the database is stored locally.

## Models

The models are created using Blender where two different groups of models were made where one group, utilized by the x3dom framework, is modeled to have a minimal number of vertices without sacrificing quality for optimal app performance. The other group of models that are saved in the glTF format possess a higher model definition. 
