<?php
require_once "conexion.php";

    class Crud extends Conexion{
   
        
//mostrarEntradas
        public function mostrarDatos($id){
            $sql="SELECT id, titulo, fecha, categoria, ciudad, n_fija FROM entradas where idarea = :id AND estatus = 1";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            $query->execute();
            return $query->fetchAll();
            $query->close();
        }
        
//mostrarUsuarios
        public function mostrarUsuarios(){
            $sql="SELECT id, n_completo, usuario, u.area, a.nombre, idarea FROM usuarios u INNER JOIN areas a ON u.area = a.idarea";
            $query=Conexion::conectar()->prepare($sql);
            $query->execute();
            return $query->fetchAll();
            $query->close();
        }

//mostrarCategorias
        public function mostrarCategorias($id){
            $sql="SELECT id, categoria_nombre FROM categorias WHERE idarea = :id AND estatus =1";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            $query->execute();
            return $query->fetchAll();
            $query->close();
        }

//mostrarEstados
public function mostrarEstados(){
    $sql="SELECT id, descripcion FROM estados";
    $query=Conexion::conectar()->prepare($sql);
    $query->execute();
    return $query->fetchAll();
    $query->close();
}

//insertarDatos
            public function insertarDatos($datos){
                $sql="INSERT INTO entradas (titulo, descripcion_c, keywords, categoria, ciudad, n_fija, long_desc, imagen_fd, imagen_fi, fecha, estatus, tipo)
                VALUES (:titulo,:descripcion_c,:keywords,:categoria,:ciudad,:n_fija,:long_desc,:imagen_fd,:imagen_fi,:fecha, 1, :idtipo)";
                $query=Conexion::conectar()->prepare($sql);
                $query->bindParam(":titulo", $datos["titulo"], PDO::PARAM_STR);
                $query->bindParam(":descripcion_c", $datos["descripcion_c"], PDO::PARAM_STR);
                $query->bindParam(":keywords", $datos["keywords"], PDO::PARAM_STR);
                $query->bindParam(":categoria", $datos["categoria"], PDO::PARAM_STR);
                $query->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);
                $query->bindParam(":n_fija", $datos["n_fija"], PDO::PARAM_STR);
                $query->bindParam(":long_desc", $datos["long_desc"], PDO::PARAM_STR);
                $query->bindParam(":imagen_fd", $datos["imagen_fd"], PDO::PARAM_STR);
                $query->bindParam(":imagen_fi", $datos["imagen_fi"], PDO::PARAM_STR);
                $query->bindParam(":imagen_fi", $datos["imagen_fi"], PDO::PARAM_STR);
                $query->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
                $query->bindParam(":idtipo", $datos["idtipo"], PDO::PARAM_INT);

            return $query->execute();
            $query->close();
        }

//insertarUsuarios       
        public static function insertarUsuarios($usuario){
            $sql="INSERT INTO usuarios (n_completo, usuario, clave, area)
            VALUES (:n_completo,:usuario,:clave,:area)";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":n_completo", $usuario["n_completo"], PDO::PARAM_STR);
            $query->bindParam(":usuario", $usuario["usuario"], PDO::PARAM_STR);
            $query->bindParam(":clave", $usuario["clave"], PDO::PARAM_STR);
            $query->bindParam(":area", $usuario["area"], PDO::PARAM_STR);

        return $query->execute();
        $query->close();
    }

//insertarCategorias      
        public static function insertarCategorias($categoria){
            $sql="INSERT INTO categorias (categoria_nombre,idarea,estatus)
            VALUES (:categoria_nombre, :idarea, 1)";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":categoria_nombre", $categoria["categoria_nombre"], PDO::PARAM_STR);
            $query->bindParam(":idarea", $categoria["idarea"], PDO::PARAM_STR);
            
        return array("respuesta" => $query->execute(), "idarea" => $categoria["idarea"] );
        $query->close();
        }

//insertarCategorias      
        public function insertarEstados($ciudades){
            $sql="INSERT INTO estados (descripcion)
            VALUES (:descripcion)";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":descripcion", $ciudades["descripcion"], PDO::PARAM_STR);
            
        return $query->execute();
        $query->close();
        }

//obtenerDatos
        public static function obtenerDatos($id){
           $sql="SELECT id, titulo, descripcion_c, keywords, categoria, ciudad, n_fija, idarea, tipo FROM entradas WHERE id=:id AND estatus = 1";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            $query->execute();
            return $query->fetch();
            $query->close();
        }

//obtenerUsuarios
        public static function obtenerUsuarios($id){
            $sql="SELECT u.id, u.n_completo, u.usuario, u.clave, idarea, a.nombre FROM usuarios u INNER JOIN areas a ON a.idarea = u.area WHERE u.id=:id";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            $query->execute();
            return $query->fetch();
            $query->close();
        }

//obtenerCategorias
        public static function obtenerCategorias($id){
            $sql="SELECT id, categoria_nombre FROM categorias WHERE id=:id AND estatus = 1";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            $query->execute();
            return $query->fetch();

            $query->close();
            
        }

//obtenerEstados
        public function obtenerEstados($id){
            $sql="SELECT id, descripcion FROM estados WHERE id=:id";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            $query->execute();
            return $query->fetch();
            $query->close();
        }

//actualizarDatos
        public static function actualizarDatos($datos){
            $sql="UPDATE entradas set titulo = :titulo, descripcion_c = :descripcion_c, keywords = :keywords,categoria = :categoria, ciudad = :ciudad, n_fija = :n_fija, idarea = :idarea, tipo = :tipo WHERE id=:id";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":titulo", $datos["titulo"], PDO::PARAM_STR);
            $query->bindParam(":descripcion_c", $datos["descripcion_c"], PDO::PARAM_STR);
            $query->bindParam(":keywords", $datos["keywords"], PDO::PARAM_STR);
            $query->bindParam(":categoria", $datos["categoria"], PDO::PARAM_STR);
            $query->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);
            $query->bindParam(":n_fija", $datos["n_fija"], PDO::PARAM_STR);
            $query->bindParam(":idarea", $datos["idarea"], PDO::PARAM_STR);
            $query->bindParam(":tipo", $datos["idtipo"], PDO::PARAM_INT);
            $query->bindParam(":id", $datos["id"], PDO::PARAM_INT);
            
            // return $query->execute();
            return array("respuesta" => $query->execute(), "idarea" => $datos["idarea"] );
            $query->close();

        }
    
//actualizarUsuarios
        public static function actualizarUsuarios($usuario){
            $sql="UPDATE usuarios set n_completo = :n_completo, usuario = :usuario, clave = :clave, area = :area WHERE id=:id";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":n_completo", $usuario["n_completo"], PDO::PARAM_STR);
            $query->bindParam(":usuario", $usuario["usuario"], PDO::PARAM_STR);
            $query->bindParam(":clave", $usuario["clave"], PDO::PARAM_STR);
            $query->bindParam(":area", $usuario["area"], PDO::PARAM_STR);
            $query->bindParam(":id", $usuario["id"], PDO::PARAM_INT);
            return $query->execute();

            $query->close();

        }

//actualizarCategorias
        public static function actualizarCategorias($categoria){
            $sql="UPDATE categorias set categoria_nombre = :categoria_nombre WHERE id=:id";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":categoria_nombre", $categoria["categoria_nombre"], PDO::PARAM_STR);
            $query->bindParam(":id", $categoria["id"], PDO::PARAM_INT);
            // return $query->execute();
            return array("respuesta" => $query->execute(), "idarea" => $categoria["idarea"] );
            $query->close();

        }

//actualizarEstados
        public function actualizarEstados($ciudades){
            $sql="UPDATE estados set descripcion = :descripcion WHERE id=:id";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":descripcion", $ciudades["descripcion"], PDO::PARAM_STR);
            $query->bindParam(":id", $ciudades["id"], PDO::PARAM_INT);
            return $query->execute();

            $query->close();

        }
//eliminarDatos
        public static function eliminarDatos($id){
            $sql="UPDATE entradas SET estatus = 0  where id=:id";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            return $query->execute();

            $query->close();

        }

//eliminarUsuarios
        public static function eliminarUsuarios($id){
            $sql="DELETE FROM usuarios where id=:id";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            return $query->execute();

            $query->close();

        }

//eliminarCategorias
        public static function eliminarCategorias($id){
           
            $sql="UPDATE categorias set estatus = 0 WHERE id=:id";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);

            return  $query->execute();
            $query->close();
         

        }

//eliminarCategorias
        public function eliminarEstados($id){
            $sql="DELETE FROM estados where id=:id";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            return $query->execute();

            $query->close();

        }
    }


?>