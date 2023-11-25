<?php

    include_once("conn.php");

    $method = $_SERVER["REQUEST_METHOD"];
    if($method === "GET") {

        $bordasQuery = $conn->query("SELECT * FROM bordas;");

        $bordas = $bordasQuery->fetchAll();

        $massasQuery = $conn->query("SELECT * FROM massas;");

        $massas = $massasQuery->fetchAll();

        $saboresQuery = $conn->query("SELECT * FROM sabores;");

        $sabores = $saboresQuery->fetchAll();


    } else if($method === "POST") {

        $data = $_POST;

        $borda = $data["borda"];
        $massa = $data["massa"];
        $sabores = $data["sabores"];

        if(count($sabores) >3 ) {

            $_SESSION["msg"] = "Selecione no máximo 3 sabores!";
            $_SESSION["status"] = "warning";


        }   else {

                $smtm = $conn->prepare("INSERT INTO pizzas (borda_id, massa_id) VALUES (:borda, :massa)");

                $smtm->bindParam(":borda", $borda, PDO::PARAM_INT);
                $smtm->bindParam(":massa", $massa, PDO::PARAM_INT);
                
                $smtm->execute();

                $pizzaId = $conn->lastInsertId();

                $smtm = $conn->prepare("INSERT INTO pizza_sabor (pizza_id, sabor_id) VALUES (:pizza, :sabor)");

            foreach($sabores as $sabor) {

                $smtm->bindParam(":pizza", $pizzaId, PDO::PARAM_INT);
                $smtm->bindParam(":sabor", $sabor, PDO::PARAM_INT);
                  

                $smtm->execute();                 
            }

            $smtm = $conn->prepare("INSERT INTO pedidos (pizza_id, status_id) VALUES (:pizza, :status)");
            
            $statusId = 1;

            $smtm->bindParam(":pizza", $pizzaId);
            $smtm->bindParam(":status", $statusId);                  

            $smtm->execute();     
            
            $_SESSION["msg"] = "Pedido realizado com sucesso";
            $_SESSION["status"] = "sucess";

        }

        header("Location:..");

    }
    
?>