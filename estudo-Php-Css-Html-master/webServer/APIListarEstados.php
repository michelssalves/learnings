<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    header('Content-type: application/json');
    $api_token = "liberadoparauso";

   if($api_token == "liberadoparauso20"){
    
        
        // Conexão com o Banco de Dados
        
        require_once 'config.php';
        
        // Definir UTF8 para a conexão
        
        mysqli_set_charset($conn, $charset);
        
        $response = array();
        
        // Prepara a consulta SQL
        
        $sql = "SELECT id, sigla, nome FROM estado";
        $stmt = mysqli_prepare($conn, $sql);
        
        
        // Executa a consulta
        
        mysqli_stmt_execute($stmt);
        
        // Salva o resultado da consulta
        
        mysqli_stmt_store_result($stmt);
        
        // Gera os dados a serem apresentados
        // em variáveis conforme o select.
        
        mysqli_stmt_bind_result($stmt, $id, $sigla, $nome);
        
        // apresenta os dados da consulta
        
        //var_dump($stmt);
        
        if(mysqli_stmt_num_rows($stmt) > 0){
            while(mysqli_stmt_fetch($stmt)){
                array_push($response, array(
                    "id" => $id,
                    "sigla" => $sigla,
                    "nome" => $nome
                    ));
            }
        
                echo json_encode($response);
        }else{
                echo json_encode($response);
        }
        }else{
            $response['auth_token'] = false;
            echo json_encode($response);
        }
    }
    
?>