<?php

require_once '../Model/ConceptCreator.php';
$cc = new ConceptCreator;
if(isset($_FILES['uploadpdf']) || isset($_POST['uploadvideo']) || isset($_POST['uploadvisual'])){


    $lesson = $_POST['lesson'];
    $concept = $_POST['concept'];
    $learningmethod = $_POST['learningmethod'];
    $attempt = $_POST['attempt'];

    $uniqueKey = uniqid().date("y");

    if(!empty($_FILES['uploadpdf'])){
        $img_name = $_FILES['uploadpdf']['name'];
        $tmp_name = $_FILES['uploadpdf']['tmp_name'];

        $signatures_img_ext = pathinfo($img_name, PATHINFO_EXTENSION);
        $signatures_img_ex_lc = strtolower($signatures_img_ext);

        if($lesson == 1){
            $final_new_name = uniqid("less1-",true).'.'.$signatures_img_ex_lc;
            $img_upload_path = "../Lesson1/".$final_new_name;
        }
        else if($lesson == 2){
            $final_new_name = uniqid("less2-",true).'.'.$signatures_img_ex_lc;
            $img_upload_path = "../Lesson2/".$final_new_name;
        }
        else if($lesson == 3){
            $final_new_name = uniqid("less3-",true).'.'.$signatures_img_ex_lc;
            $img_upload_path = "../Lesson3/".$final_new_name;
        }
        else if($lesson == 4){
            $final_new_name = uniqid("less4-",true).'.'.$signatures_img_ex_lc;
            $img_upload_path = "../Lesson4/".$final_new_name;
        }

        if($cc->createConcept($uniqueKey,$lesson,$concept,$learningmethod,$final_new_name,$attempt)){
            move_uploaded_file($tmp_name, $img_upload_path);
            header("Location: ../dashboard.php?added=success");
        }

    }
    else if(!empty($_POST['uploadvideo'])){
        $videoLink = $_POST['uploadvideo'];
        if($cc->createConcept($uniqueKey,$lesson,$concept,$learningmethod,$videoLink,$attempt)){
            header("Location: ../dashboard.php?added=success");
        }
    }
    else if(!empty($_POST['uploadvisual'])){
        $htmlOutput = $_POST['uploadvisual'];
        if($cc->createConcept($uniqueKey,$lesson,$concept,$learningmethod,(string)$htmlOutput,$attempt)){
            header("Location: ../dashboard.php?added=success");
        }

    }

}




?>