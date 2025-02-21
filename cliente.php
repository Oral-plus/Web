<?php
require 'vendor/autoload.php';
$nombrearchivo = 'inventario.xlsx';
$documento = PHPExcel_IOFactory::load($nombrearchivo);
$totalHojas = $documento->getSheetCount();

$hojaActual = $documento->getSheet(0);
$numeroFilas = $hojaActual->getHighestDataRow();
$numeroColumnas = 146; // Seleccionar el n�mero m�ximo de la columna que necesitas

echo '<html lang="es">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
echo '<title>Portal Autogestion</title>';
echo '<link rel="icon" type="image/x-icon" href="./imagenes/arriba.jpg">';
echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">';
echo '<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    header {
        color: #ecf0f1;
        padding: 15px;
        text-align: center;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-size: 18px;
        color: #2c3e50;
        margin-top: -10px;
    }

    #filtroInput, #filtrofila {
        padding: 10px;
        border: 1px solid #bdc3c7;
        border-radius: 4px;
        font-size: 16px;
        width: 100%;
        transition: box-shadow 0.3s;
    }

    #filtroInput:focus, #filtrofila:focus {
        outline: none;
        box-shadow: 0 0 10px rgba(44, 62, 80, 0.8);
    }

    /* Estilo para la tabla */
    table {
        width: 100%;
        border-collapse: collapse;

        max-height: 70vh; /* Ajusta el valor seg�n sea necesario */
        overflow-y: auto;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: #fff;
        margin-buttom:50px;
    }

    th, td {
        padding: 12px;
        border: 1px solid #ecf0f1;
        text-align: left;
    }

    th {
        background-color: #7C8FA9;
        color: #ecf0f1;
        position: sticky;
        top: 0;
    }

    /* Estilo para la primera fila de la tabla */
    th:first-child {
        left: 0;
        z-index: 1;
    }

    /* Estilo para las dem�s celdas de la primera fila */
   

    /* Estilo para los encabezados de la columna 8 */
    th:nth-child(8) {
        position: sticky;
        left: 0;
        z-index: 1;
    }

    nav{
        background-color:#8CABEA;
    }

    .nav-link{
        color:#FFFF;
    }

    .navbar-brand{
     color:#FFFF;
    }

    .perfil{
        width: 50px;
    }
   

    /* Estilo para ocultar la tabla inicialmente */
    #miTabla {
        display: none;
    }
    .union{

        display: flex;
        align-items: center;
    }
    
    input {
        margin-right: 10px; /* Espacio entre el input y el bot�n */
    }

    /* inspired form gumroad website */

    .enviar {
        --bg: #000;
        --hover-bg: #ff90e8;
        --hover-text: #000;
        color: #000000;
        cursor: pointer;
        border: 1px solid var(--bg);
        border-radius: 4px;
        padding: 11px 10px 10px 10px;
      
        transition: 0.2s;
      }

  
  .coolinput {
    display: flex;
    flex-direction: column;
    width: fit-content;
    position: static;
    width: 100%;
  }
  
  .coolinput label.text {
    font-size: 0.75rem;
    color: #818CF8;
    font-weight: 700;
    position: relative;
    top: 0.5rem;
    margin: 0 0 0 7px;
    padding: 0 3px;
    background: #e8e8e8;
    width: fit-content;
  }
  
  .coolinput input[type=text].input {
    padding: 11px 10px;
    font-size: 0.75rem;
    border: 2px #818CF8 solid;
    border-radius: 5px;
    background: #e8e8e8;
    width: 80%;
  }
  
  .coolinput input[type=text].input:focus {
    outline: none;
  }

  .btn-class-name {
    --primary: 255, 90, 120;
    --secondary: 150, 50, 60;
    width: 38px;
    height: 28px;
    border: none;
    outline: none;
    cursor: pointer;
    user-select: none;
    touch-action: manipulation;
    outline: 10px solid rgb(var(--primary), .5);
    border-radius: 100%;
    position: relative;
    transition: .3s;
  }
  
  .btn-class-name .back {
    background: rgb(var(--secondary));
    border-radius: 100%;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
  }
  
  .btn-class-name .front {
    background: linear-gradient(0deg, rgba(var(--primary), .6) 20%, rgba(var(--primary)) 50%);
    box-shadow: 0 .5em 1em -0.2em rgba(var(--secondary), .5);
    border-radius: 100%;
    position: absolute;
    border: 1px solid rgb(var(--secondary));
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 1.2rem;
    font-weight: 600;
    font-family: inherit;
    transform: translateY(-15%);
    transition: .15s;
    color: rgb(var(--secondary));
  }
  
  .btn-class-name:active .front {
    transform: translateY(0%);
    box-shadow: 0 0;
  }
</style>';
echo '<style>
  #portal {
    display: none;
}
@media screen and (max-width:800px) 
    {
         #portal {
    display: block;
}


}

</style>

</head>';
echo '<body>';

echo '<header>
        <nav class="navbar navbar-expand-lg navbar">

               

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
           
            <img class="perfil" src="./imagenes/logosky.png" alt="">
            </button>
            
            <a class="navbar-brand" href="cerrarSesion.php">
            <button class="btn-class-name">
            <span class="back"></span>
            <span class="front"></span>
          </button></a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                

                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </nav>
      </header>';


echo '<div class="container">'; // Bootstrap container

echo '<div class="coolinput">';
echo ' <label for="input" class="text">Cliente:</label>';
echo ' <div class="union">';
echo '    <input type="text" placeholder="..." name="input" id="filtroInput" class="input">';
echo '      <button class="enviar" onclick="consultarFiltroTabla()">Consultar</button>';
        echo '  </div>';
        echo '</div>';



        echo '<div class="coolinput">';
        echo ' <label for="input" class="text">Producto:</label>';
echo '<div class="union">';
echo '<input type="text" id="filtrofila" placeholder="..." name="input" class="input"">';
echo '<button class="enviar" onclick="consultarFiltroFila()">Consultar</button>';
echo '</div>';
echo '</div>';
echo '</br>';
// Agregar men� desplegable para seleccionar la cantidad de filas por p�gina


echo '<div style="max-height: 70vh; overflow-y: auto; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">'; // Agregamos un contenedor con scroll
echo '<table id="miTabla" class="table table-bordered">';

echo '<tr>';
for ($indiceFila = 1; $indiceFila <= $numeroFilas; $indiceFila++) {
    echo '<th>' . $hojaActual->getCellByColumnAndRow(1, $indiceFila)->getValue() . '</th>';
}
echo '</tr>';

echo '<tr>';
for ($indiceFila = 1; $indiceFila <= $numeroFilas; $indiceFila++) {
    echo '<th>' . $hojaActual->getCellByColumnAndRow(3, $indiceFila)->getValue() . '</th>';
}
echo '</tr>';






for ($indiceColumna = 13; $indiceColumna <= $numeroColumnas; $indiceColumna++) {
    echo '<tr>';
    for ($indiceFila = 1; $indiceFila <= $numeroFilas; $indiceFila++) {
        $valor = $hojaActual->getCellByColumnAndRow($indiceColumna, $indiceFila)->getValue();
        echo '<td>' . $valor . '</td>';
    }
    echo '</tr>';
}
echo '</table>';
echo '</div>'; // Cerramos el contenedor con scroll

echo '<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>';
echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>';
echo '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>';
echo '<script>
function quitarTildes(texto) {
    return texto.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
}

function consultarFiltroTabla() {
    // Mostrar la tabla
    document.getElementById("miTabla").style.display = "table";

    filtrarTabla();
}

function consultarFiltroFila() {
    // Mostrar la tabla
    document.getElementById("miTabla").style.display = "table";

    filtrarfila();
}

function filtrarTabla() {
    var input, filter, table, tr, th, i, txtValue, txtValueSinTildes;
    input = document.getElementById("filtroInput");
    filter = quitarTildes(input.value.toUpperCase());
    table = document.getElementById("miTabla");
    th = table.getElementsByTagName("th");

    for (i = 0; i < th.length; i++) {
        txtValue = th[i].textContent || th[i].innerText;
        txtValueSinTildes = quitarTildes(txtValue.toUpperCase());
        if (txtValueSinTildes.indexOf(filter) > -1) {
            for (var j = 0; j < table.rows.length; j++) {
                if (i === 0) {
                    table.rows[j].cells[i].style.display = "";
                } else {
                    table.rows[j].cells[i].style.display = "";
                }
            }
        } else {
            for (var j = 0; j < table.rows.length; j++) {
                if (i === 0) {
                    table.rows[j].cells[i].style.display = "";
                } else {
                    table.rows[j].cells[i].style.display = "none";
                }
            }
        }
    }
}
function filtrarfila() {
    var input, filter, table, tr, th, i, txtValue, txtValueSinTildes;
    input = document.getElementById("filtrofila");
    filter = quitarTildes(input.value.toUpperCase());
    table = document.getElementById("miTabla");

    // Comienza el bucle desde la segunda fila
    for (i = 1; i < table.rows.length; i++) {
        tr = table.rows[i];
        txtValue = "";
        for (var j = 0; j < tr.cells.length; j++) {
            txtValue += " " + tr.cells[j].textContent || tr.cells[j].innerText;
        }
        txtValueSinTildes = quitarTildes(txtValue.toUpperCase());
        if (txtValueSinTildes.indexOf(filter) > -1) {
            tr.style.display = "";
        } else {
            tr.style.display = "none";
        }
    }
}

</script>';
echo '</body>';
echo '</html>';
?>