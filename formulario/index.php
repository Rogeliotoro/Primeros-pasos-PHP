<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rent bike</title>
    <link rel="stylesheet" href="./scss/main.scss">
</head>

<body>
    <div class="cabecera">
        <nav>Renta de Bicicletas Top 🚴‍♀️</nav>
    </div>
    <div class="contenido">
        <div class="productos">
            <p class="producto">
                Con el alquiler de bicicletas en Madrid de Rent bike, recorrer los lugares más emblemáticos de la capital de España puede convertirse en todo un placer. Una aventura que se vuelve inolvidable si te decantas por nuestro servicio más especial. Si hay un medio de transporte ideal para hacer turismo, ese es la bicicleta. Si montas en una de las nuestras, serás capaz de descubrir hasta el último de los secretos que la capital te tiene reservados.

                ¿Estás preparado para tu próxima aventura? Puedes estar seguro de que rentar una bici es la mejor alternativa para explorar a fondo esta increíble ciudad.
            </p>
        </div>
        <div class="formulario">
            <form action="alquiler.php" method="POST">
                <div>
                    <label for="nombre">nombre</label>
                    <input id="nombre" type="text" placeholder="indique su nombre" />
                </div>
                <div>
                    <label for="apellidos">apellidos</label>
                    <input id="apellidos" type="text" placeholder="indique sus apellidos" />
                </div>
                <div>
                    <label for="direccion">direccion</label>
                    <input id="direccion" type="text" placeholder="indique la direccion" />
                </div>
                <div> Seleccione su bicicleta
                    <select name="bicicletas">
                        <option ></option>
                        <option value="Orbea oiz m10">Orbea oiz m10</option>
                        <option value="Canyon Lux">Canyon Lux</option>
                        <option value="Rockrider XC900s">Rockrider XC900s</option>
                        <option value="MMR Kenta10">MMR Kenta10</option>
                        <option value="Cannodale Scalpe">Cannodale Scalpe</option>
                        <option value="Scott Sparl rc">Scott Spark rc</option>
                    </select>
                </div>
                <div>
                    <input id="boton" type="submit" value="Alquilar" />
                </div>
            </form>
        </div>
    </div>
</body>

</html>