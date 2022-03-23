<?php
require_once "conexion.php";

    class Crud extends Conexion{
//mostrarEntradas
        public function mostrarDatos(){
            $sql="SELECT id, titulo, fecha, categoria, ciudad, n_fija FROM entradas";
            $query=Conexion::conectar()->prepare($sql);
            $query->execute();
            return $query->fetchAll();
            $query->close();
        }
        
//mostrarUsuarios
        public function mostrarUsuarios(){
            $sql="SELECT id, n_completo, usuario, area, p_usuarios, p_noticias, p_entradas FROM usuarios";
            $query=Conexion::conectar()->prepare($sql);
            $query->execute();
            return $query->fetchAll();
            $query->close();
        }

//mostrarCategorias
        public function mostrarCategorias(){
            $sql="SELECT id, categoria_nombre FROM categorias";
            $query=Conexion::conectar()->prepare($sql);
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
                $sql="INSERT INTO entradas (titulo, descripcion_c, keywords, categoria, ciudad, n_fija, long_desc, imagen_fd, imagen_fi, fecha)
                VALUES (:titulo,:descripcion_c,:keywords,:categoria,:ciudad,:n_fija,:long_desc,:imagen_fd,:imagen_fi,:fecha)";
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
                $query->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);

            return $query->execute();
            $query->close();
        }

//insertarUsuarios       
        public function insertarUsuarios($usuario){
            $sql="INSERT INTO usuarios (n_completo, usuario, clave, area, p_usuarios, p_noticias, p_entradas)
            VALUES (:n_completo,:usuario,:clave,:area,:p_usuarios,:p_noticias,:p_entradas)";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":n_completo", $usuario["n_completo"], PDO::PARAM_STR);
            $query->bindParam(":usuario", $usuario["usuario"], PDO::PARAM_STR);
            $query->bindParam(":clave", $usuario["clave"], PDO::PARAM_STR);
            $query->bindParam(":area", $usuario["area"], PDO::PARAM_STR);
            $query->bindParam(":p_usuarios", $usuario["p_usuarios"], PDO::PARAM_STR);
            $query->bindParam(":p_noticias", $usuario["p_noticias"], PDO::PARAM_STR);
            $query->bindParam(":p_entradas", $usuario["p_entradas"], PDO::PARAM_STR);

        return $query->execute();
        $query->close();
    }

//insertarCategorias      
        public function insertarCategorias($categoria){
            $sql="INSERT INTO categorias (categoria_nombre)
            VALUES (:categoria_nombre)";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":categoria_nombre", $categoria["categoria_nombre"], PDO::PARAM_STR);
            
        return $query->execute();
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
        public function obtenerDatos($id){
            $sql="SELECT id, titulo, descripcion_c, keywords, categoria, ciudad, n_fija FROM entradas WHERE id=:id";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            $query->execute();
            return $query->fetch();
            $query->close();
        }

//obtenerUsuarios
        public function obtenerUsuarios($id){
            $sql="SELECT id, n_completo, usuario, clave, area, p_usuarios, p_noticias, p_entradas FROM usuarios WHERE id=:id";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            $query->execute();
            return $query->fetch();
            $query->close();
        }

//obtenerCategorias
        public function obtenerCategorias($id){
            $sql="SELECT id, categoria_nombre FROM categorias WHERE id=:id";
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
        public function actualizarDatos($datos){
            $sql="UPDATE entradas set titulo = :titulo, descripcion_c = :descripcion_c, keywords = :keywords, categoria = :categoria, ciudad = :ciudad, n_fija = :n_fija WHERE id=:id";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":titulo", $datos["titulo"], PDO::PARAM_STR);
            $query->bindParam(":descripcion_c", $datos["descripcion_c"], PDO::PARAM_STR);
            $query->bindParam(":keywords", $datos["keywords"], PDO::PARAM_STR);
            $query->bindParam(":categoria", $datos["categoria"], PDO::PARAM_STR);
            $query->bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);
            $query->bindParam(":n_fija", $datos["n_fija"], PDO::PARAM_STR);
            $query->bindParam(":id", $datos["id"], PDO::PARAM_INT);
            return $query->execute();

            $query->close();

        }
    
//actualizarUsuarios
        public function actualizarUsuarios($usuario){
            $sql="UPDATE usuarios set n_completo = :n_completo, usuario = :usuario, clave = :clave, area = :area, p_usuarios = :p_usuarios, p_noticias = :p_noticias, p_entradas =:p_entradas WHERE id=:id";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":n_completo", $usuario["n_completo"], PDO::PARAM_STR);
            $query->bindParam(":usuario", $usuario["usuario"], PDO::PARAM_STR);
            $query->bindParam(":clave", $usuario["clave"], PDO::PARAM_STR);
            $query->bindParam(":area", $usuario["area"], PDO::PARAM_STR);
            $query->bindParam(":p_usuarios", $usuario["p_usuarios"], PDO::PARAM_STR);
            $query->bindParam(":p_noticias", $usuario["p_noticias"], PDO::PARAM_STR);
            $query->bindParam(":p_entradas", $usuario["p_entradas"], PDO::PARAM_STR);
            $query->bindParam(":id", $usuario["id"], PDO::PARAM_INT);
            return $query->execute();

            $query->close();

        }

//actualizarCategorias
        public function actualizarCategorias($categoria){
            $sql="UPDATE categorias set categoria_nombre = :categoria_nombre WHERE id=:id";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":categoria_nombre", $categoria["categoria_nombre"], PDO::PARAM_STR);
            $query->bindParam(":id", $categoria["id"], PDO::PARAM_INT);
            return $query->execute();

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
        public function eliminarDatos($id){
            $sql="DELETE FROM entradas where id=:id";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            return $query->execute();

            $query->close();

        }

//eliminarUsuarios
        public function eliminarUsuarios($id){
            $sql="DELETE FROM usuarios where id=:id";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            return $query->execute();

            $query->close();

        }

//eliminarCategorias
        public function eliminarCategorias($id){
            $sql="DELETE FROM categorias where id=:id";
            $query=Conexion::conectar()->prepare($sql);
            $query->bindParam(":id", $id, PDO::PARAM_INT);
            return $query->execute();

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