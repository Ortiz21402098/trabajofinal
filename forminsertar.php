<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertar registros bd</title>

    <style>
   body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    width: 300px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}

form {
    text-align: center;
}

form h2 {
    margin-bottom: 20px;
    color: #333;
}

.form-group {
    margin: 10px 0;
}

.form-group label {
    display: block;
    text-align: left;
    color: #333;
    font-weight: bold;
}

.form-group input {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}
    </style>
</head>
<body>
    <div class="container">
        <form method="get" action="agregar.php">
            <h2>Registro de articulos</h2>
            <div class="form-group">
                <label for="nombre">Codigo Articulo</label>
                <input type="text" name="codigo" required>
            </div>
            <div class="form-group">
                <label for="seccion">Seccion</label>
                <input type="text"  name="seccion" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre Articulo</label>
                <input type="text" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="text" name="precio" required>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="text" name="fecha" required>
            </div>
            <div class="form-group">
                <label for="importado">Importado</label>
                <input type="text" name="importado" required>
            </div>
            <div class="form-group">
                <label for="pais">Pais de origen</label>
                <input type="text" name="pais" required>
            </div>
            <button type="submit">Enviar</button>
            
        </form>
    </div>
</body>
</html>


