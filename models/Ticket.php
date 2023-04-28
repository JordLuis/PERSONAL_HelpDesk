<?php
    class Ticket extends Conectar{

        public function inser_ticket($usu_id,$cat_id,$tick_titulo,$tick_descrip,$est){
            $conectar= parent::conexion();
            parent::set_names();
            $sql="SELECT * FROM tm_categoria WHERE est=1;";
            $sql=$conectar->prepare($sql);
            $sql->execute();
            return $resultado=$sql->fetchAll();
        }

    }
?>
