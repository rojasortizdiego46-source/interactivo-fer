<!DOCTYPE html>
<html>
<head>
    <title>comentario</title>
     <style>
        body {
            font-family: Arial, sans-serif;
               background-image: url('img/Espacio.jpg');
}

h2, p{
    color:#ffffff;
    font-family: 'Times New Roman', Times, serif;
}
        

        form {
            background-color: #1d3b8a;
            border: 2px solid #ccc;
            padding: 20px;
            width: 400px;
            margin: 30px auto;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        p {
            margin-bottom: 15px;
        }

        input[type="text"], input[type="number"], select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        #btnEnviar {
            background-color: #2a52be;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #btnEnviar:hover {
            background-color: #224397ff;
        }
    </style>
</head>
<body>
    <form method="post" action="procesar.php">
        <h2>Que te parecio el interactivo, porfavor deja un comentario:</h2>
        <p>Nombre: <input name="campoNombre" type="text"/></p>
   <p>Comentario:</p>
<textarea name="areaComentario"></textarea>
       <center>
        <p><input id="btnEnviar" type="submit" value="Enviar"></p>
       </center>
</form>
</body>
</html>
