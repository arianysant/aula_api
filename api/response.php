<?php
   class Response{
    public static function resposta($status=200,$message='Sucesso!',$data=null){
        //aqui vai o corpo da resposta
        header('Content-Type: application/json');
        return json_encode([
            'status' => $status,
            'mensagem' => $message,
            'dados' => $data
        ]);
    }
    
   }

?>