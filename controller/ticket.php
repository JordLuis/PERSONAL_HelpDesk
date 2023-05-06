<?php
    require_once("../config/conexion.php");
    require_once("../models/Ticket.php");
    $ticket = new Ticket();

    switch($_GET["op"]){
        case "insert":
            $ticket->insert_ticket($_POST["usu_id"],$_POST["cat_id"],$_POST["tick_titulo"],$_POST["tick_descrip"]); 
        break;

        case "listar_x_usu":
            $datos=$ticket->listar_ticket_x_usu($_POST["usu_id"]);
            $data = array();
            foreach($datos as $row){
                $sub_array = array();
                $sub_array[] = $row["ticket_id"];
                $sub_array[] = $row["cat_nom"];
                $sub_array[] = $row["tick_titulo"];
                $sub_array[] = 'button type="button" onClick="ver('.$row['tick_id'].');" id="'.$row["tick_id"].'"class="btn btn-inline btn-primary btn-sm ladda-button"><div><i class="fa fa-edit"></i></div></button>';
                $data[] = $sub_array;
                
            }

            Sresults = array(
                "sEcho"=>1,
                "¡TotalRecords"-›count ($data),
                "¡TotalDisplayRecords"=>count ($data),
                "aaData"=>$data);
                echo json_encode ($results);
        break;
    }
?>
