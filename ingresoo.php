<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de datos XML</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
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
        border-collapse: collapse;
    max-height: 70vh;
    overflow-y: auto;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
    display: block;
    width: fit-content;
    margin: auto;
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

    /* Estilo para las demás celdas de la primera fila */
   

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
        margin-right: 10px; /* Espacio entre el input y el botón */
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
    width: 80%;
    padding-bottom: 3%;
    

    margin: auto;

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
    </style>
</head>
<body>
<header>
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
      </header>


<div class="coolinput">
    <label for="input" class="text">Cliente:</label>
    <div class="union">
        <input type="text" placeholder="..." name="input" id="filtroInput" class="input">
        <button class="enviar" onclick="consultarFiltroTabla()">Consultar</button>
    </div>
</div>



<div id="response"></div>

<script>
    function fetchData(url) {
        return fetch(url)
            .then(response => response.text())
            .then(xml => {
                const parser = new DOMParser();
                const xmlDoc = parser.parseFromString(xml, 'text/xml');
                return xmlDoc;
            })
            .catch(error => console.error('Error fetching data:', error));
    }

    function renderTable(xmlDoc) {
        const responseDiv = document.getElementById('response');
        const table = document.createElement('table');
        
        // Crear la fila de encabezados
        const headerRow = document.createElement('th');
        const columnToShow = ['Código_Punto_de_Venta', 'Fecha_de_Visita', 'Cep_Baby_Panda__x002B__Protect_Oral_Plus_-_50360203'
, 'Cep_Calipso_2X3_Medio_Oral__-_50280126'
, 'Cep_Calipso_2X3_Suave_Oral__-_50280127'
, 'Cep_Calipso_X_5_Medio_Oral_-_50360072'
, 'Cep_Corn_Medio_Oral_Eco_Friendly_-_50360241'
, 'Cep_Corn_Suave_Oral_Eco_Friendly_-_50360240'
, 'Cep_Crystal_Medio__x002B__Crema_70Gr_Oral_-_50280115'
, 'Cep_Crystal_Medio_2X3_Oral__-_50280008'
, 'Cep_Duo_Dakota_Medio_Oral__-_50280120'
, 'Cep_Gold_Kids_Ind_Oral_Niñas_-_50360201'
, 'Cep_Gold_Kids_Ind_Oral_Niños_-_50360043'
, 'Cep_Ind_Calipso_Medio_Oral__-_50280124'
, 'Cep_Ind_Calipso_Suave_Oral__-_50280125'
, 'Cep_Ind_Dakota_Medio_Oral__-_50280118'
, 'Cep_Ind_Junior_Oral_Plus_-_50360108'
, 'Cep_Niño_Bonite_Oral__-_51370004'
, 'Cep_Niño_Protector_Oral_Plus_-_50360168'
, 'Cep_Original_Ind_Medio_Oral_Plus_Sin_Ristra_-_50360059'
, 'Cep_Original_Medio_Economico_Flex_X12_Ristra_Oral_Plus_Sin_Ganchera_-_50360251'
, 'Cep_Original_Medio_Flex_Ristra_X_12__Oral_Plus_Ganchera_-_50360249'
, 'Cep_Original_Suave__Flex_Ristra_X_12__Oral_Plus_Ganchera_-_50360250'
, 'Cep_Original_Suave_Economico_Flex_X12_Ristra_Oral_Plus_Sin_Ganchera_-_50360256'
, 'Cep_Space_Ind_Niño__x002B__Protec_Oral_-_50280012'
, 'Cep_Super_510_Cuidado_Total_X3__Suave_Oral_-_50360239'
, 'Cep_Super_510_Cuidado_Total_X3_Medio_Oral_-_50360238'
, 'Cep_Super_510_Duo_Medio_Oral__-_50280026'
, 'Cep_Super_510_Medio_Oral__-_50280022'
, 'Cep_Super_510_Suave_Oral__-_50280023'
, 'Cep_Waviness_Ind_Oral_Plus_-_50360167'
, 'Cep_Waviness_Ristra_X_12__Oral_Plus_-_50360243'
, 'Cepillo_Children_x0060_S_Oral_-_Plus_-_50360090'
, 'Cepillo_Imp_Bambu_Adultos_Medio_Oral_Plus_-_50360258'
, 'Cepillo_Imp_Bambu_Adultos_Suave_Oral_Plus_-_50360259'
, 'Cepillo_Imp_Bambu_Niños_Oral_Plus_-_50360260'
, 'Cepillo_Original_Flex_Individual_Text_Media_Oral_Plus_-_50360264'
, 'Cepillo_Original_Flex_Individual_Text_Suaveoral_Plus_-_50360267'
, 'Cepillo_Ultra_Duo_Medio_Oral_Plus_-_50280060'
, 'Cepillo_Ultra_Duo_Suave_Oral_Plus_-_50280095'
, 'Cepillo_Ultra_Individual_Medio_Oral_Plus_-_50360084'
, 'Cepillo_Ultra_Individual_Suave_Oral_Plus_-_50290044'
, 'Ristra_Cepillo_Cristal_Flex_Niñas_X_12_Unidades_Oral_Plus_-_50360361'
, 'Ristra_Cepillo_Cristal_Flex_Niños_X_12_Unidades_Oral_Plus_-_50360362'
, 'Crema_Dental_30G_Niñas_Tutti_Frutti_Con_Flúor_Oral_Plus_-_50360094'
, 'Crema_Dental_Cool_Mint_120_Gr_Oral_-_50340025'
, 'Crema_Dental_Cool_Mint_30Gr_Oral__-_50340010'
, 'Crema_Dental_Cool_Mint_70Gr_Oral__-_50340011'
, 'Crema_Dental_En_Gel_Para_Niñas_Tutti_Frutti_Con_Flúor_50G_Oral-Plus_-_50360093'
, 'Crema_Dental_En_Gel_Para_Niños_Chicle_Con_Flúor_50G_Oral-Plus_-_50360091'
, 'Crema_Dental_Niña_Tutti_Frutti_30Gr_Caja_Oral__-_50340004'
, 'Crema_Dental_Niña_Tutti_Frutti_70Gr_Caja_Oral__-_50340012'
, 'Crema_Dental_Niño_Chicle_30Gr_Caja_Oral__-_50340006'
, 'Crema_Dental_Niño_Chicle_70Gr_Caja_Oral__-_50340013'
, 'Crema_Dental_Niños_Chicle_50G_Oral_Sin_Fluor_-_50360054'
, 'Crema_Dental_Niños_Chicle_Con_Flúor_30G_Oral-Plus_-_50360092'
, 'Crema_Dental_Niños_Tutti_Frutti_50G_Oral__Sin_Fluor_-_50360053'
, 'Crema_Gel_Dental_Carbon_Activado_30G_Oral_-_50360150'
, 'Crema_Gel_Dental_Carbon_Activado_70G_Oral_-_50360151'
, 'Crema_Gel_Dental_Carbon_Activado_90G_Oral_-_50360152'
, 'Gel_Dental_Cuidado_Total_30_G_Oral_Plus_-_50360074'
, 'Gel_Dental_Cuidado_Total_70_G_Oral_Plus_-_50270036'
, 'Gel_Dental_Cuidado_Total_90G_Oral_Plus_-_50360137'
, 'Enj_Niña_Tutti_Frutti_300Ml_Oral__-_50360107'
, 'Enj_Niño_Chicle_300Ml_Oral__-_50360106'
, 'Enjuague_Bucal_180_Ml_Fluor_Oral_Plus_-_50340052'
, 'Enjuague_Bucal_Carbon_Activado_500_Ml__x002B__Jabon_Avena__400_Ml_-_50360400'
, 'Enjuague_Bucal_Carbon_Activado_500_Ml__x002B__Jabon_Frutos_Rojos_400_Ml_-_50360399'
, 'Enjuague_Bucal_Carbon_Activado_500_Ml__x002B__Jabon_Frutos_Verdes_400_Ml_-_50360398'
, 'Enjuague_Bucal_Cuidado_Total_500_Ml__x002B__Jabon__Avena__400_Ml_-_50360401'
, 'Enjuague_Bucal_Cuidado_Total_500_Ml__x002B__Jabon_Frutos_Rojos_400_Ml_-_50360403'
, 'Enjuague_Bucal_Cuidado_Total_500_Ml__x002B__Jabon_Frutos_Verdes_400_Ml_-_50360402'
, 'Enjuague_Bucal_Fluor_500_Ml__x002B__Jabon_Frutos_Rojos_400_Ml_-_50360395'
, 'Enjuague_Bucal_Fluor_500_Ml__x002B__Jabon_Frutos_Verdes_400_Ml_-_50360394'
, 'Enjuague_Bucal_Flúor_Oral_Plus_1000Ml__x0028_Azul_x0029__-_50340056'
, 'Enjuague_Bucal_Flúor_Oral_Plus_300Ml__x0028_Azul_x0029__-_50360097'
, 'Enjuague_Bucal_Flúor_Oral_Plus_500Ml__x0028_Azul_x0029__-_50360096'
, 'Enjuague_Bucal_Zero_Alcohol_Oral_Plus_300Ml__x0028_Verde_x0029__-_50360086'
, 'Enjuague_Bucal_Zero_Alcohol_Oral_Plus_500Ml__x0028_Verde_x0029__-_50360087'
, 'Enjuague_Bucal_Zero_Cool_Mint_500_Ml__x002B__Jabon_Frutos_Rojos_400_Ml_-_50360397'
, 'Enjuague_Bucal_Zero_Cool_Mint_500_Ml__x002B__Jabon_Frutos_Verdes_400_Ml_-_50360396'
, 'Enjuague_Bucal_Zero_Cool_Mint_X__180_Ml_Oral_Plus_-_50360369'
, 'Enjuague_Carbon_Activado_500_Ml_Oral_Plus_-_50360246'
, 'Enjuague_Carbon_Activado_X_180_Ml_Oral_Plus_-_50360370'
, 'Enjuague_Cuidado_Total_50Ml_Oral_Plus_-_50300142'
, 'Enjuague_Cuidado_Total_50Ml_Oral_Plus_Caja_X_24_-_50360120'
, 'Enjuague_Cuidato_Total_1000_Ml_-_50340050'
, 'Enjuague_Cuidato_Total_180_Ml_-_50340048'
, 'Enjuague_Cuidato_Total_300_Ml_-_50360085'
, 'Enjuague_Cuidato_Total_500_Ml_-_50340046'
, 'Enjuague_Fluor_50_Ml_Oral_Plus_-_50330019'
, 'Enjuague_Fluor_50Ml_Caja_X24_Und_Oral_Plus_-_50360119'
, 'Cep_Cristal_Niño_Duo__x002B_Crema_30G_Oral__-_50280009'
, 'Cep_Cristal_Niño_x002B_Crema_30G_x002B_Prot_Oral__-_50360048'
, 'Cep_Crystal_Ortodoncia__x002B__Protec_Oral__-_50280006'
, 'Cep_Gold__x002B__Crema_70Gr_x002B__Protec_Oral_Niñas_-_50360200'
, 'Cep_Gold__x002B__Crema_70Gr_x002B__Protec_Oral_Niños_-_50280130'
, 'Cep_Space_Duo_Niño__x002B__Crema_30Gr_Oral__-_50280010'
, 'Cepillo_Kit_Bonite__x002B__Crema_De_30G_Niños_Oral-Plus_-_50360088'
, 'Crema_Cool_Mint_70G__x002B__Cep_Flex_Tex_Media__x002B__Protector_Oral_Plus_-_50360371'
, 'Crema_Cool_Mint_70G__x002B__Cep_Flex_Tex_Suave__x002B__Protector_Oral_Plus_-_50360372'
, 'Crema_Dental_Niñas_30_G_Sin_Fluor__x002B_Cep_Cristal_Flex__x002B__Protector_Oral_-_50360367'
, 'Crema_Dental_Niños_30_G_Sin_Fluor__x002B_Cep_Cristal_Flex__x002B__Protector_Oral_-_50360368'
, 'Kit_Calipso_Medio_x002B__Enj_50_Ml_x002B_Protec_Oral__-_50280128'
, 'Kit_Dakota_Medio_Oral__x0028_Cep_x002B__Crema_Dental_30_Gr_x002B_Protec_x0029__-_50280122'
, 'Kit_Higiene__Viajero_Suave_Oral__-_50290011'
, 'Kit_Higiene_Viajero_Medio_Oral__-_50290010'
, 'Kit_Higiene_Viajero_Medio_Oral_Economico_-_50340039'
, 'Kit_Higiene_Viajero_Suave_Oral_Economico_-_50360376'
, 'Kit_Junior__x002B__Crema_30G_Con_Flúor__x002B__Seda_20M_Niños_Oral_Plus_-_50360089'
, 'Kit_Oferta_4_Pasos_-_Carbon_Activado_-_50360273'
, 'Kit_Oferta_Niños_4_Pasos_-_50360383'
, 'Kit_Ortodoncia_-_Viajero_New_Dent_-_50290029'
, 'Kit_Ortodoncia_Estuche_Oral__-_50290012'
, 'Kit_Viajero_Adulto_Medio_Oral_Plus_-_50360209'
, 'Kit_Viajero_Adulto_Suave__x00A0_Oral_Plus_-_50360210'
, 'Kit_Viajero_Niños_Oral__-_50280053'
, 'Ristra_Kit_Cep_Gold__x002B__Crema_Sin_Fluor_70G__Niñas_-_50360381'
, 'Ristra_Kit_Cep_Gold__x002B__Crema_Sin_Fluor_70G__Niños_-_50360382'
, 'Cep_Interproximal__x002B__3_Repuestos_Oral__-_50290005'
, 'Cepillo_Interd._Luxury_L_X_5_Oral-Plus_-_50360387'
, 'Cepillo_Interd._Luxury_L_X10_Oral-Plus_-_50360390'
, 'Cepillo_Interd._Luxury_M_X_5_Oral-Plus_-_50360386'
, 'Cepillo_Interd._Luxury_M_X10_Oral-Plus_-_50360389'
, 'Cepillo_Interd._Luxury_S__X_5_Oral-Plus_-_50360385'
, 'Cepillo_Interd._Luxury_S__X10_Oral-Plus_-_50360388'
, 'Cepillo_Interdental_Flex_L_X_10_Oral_Plus_-_50360417'
, 'Cepillo_Interdental_Flex_L_X_5_Oral_Plus_-_50360420'
, 'Cepillo_Interdental_Flex_M_X_10_Oral_Plus_-_50360416'
, 'Cepillo_Interdental_Flex_M_X_5_Oral_Plus_-_50360419'
, 'Cepillo_Interdental_Flex_S_X_10_Oral_Plus_-_50360415'
, 'Cepillo_Interdental_Flex_S_X_5_Oral_Plus_-_50360418'
, 'Cera_Brackets_Con_Cera_Abejas_40_Aplicadores_Oral__-_50290007'
, 'Enhebrador_30Und_Cajita_Oral__-_50290008'
, 'Refrescante__7Ml_Oral_-_50360046'
, 'Ristra_Seda_Dental_Con_Cera_200_M_X_6_Unidades_Oral_Plus_-_50360375'
, 'Ristra_Seda_Dental_Con_Cera_30_M_X_12_Unidades_Oral_Plus_-_50360363'
, 'Seda__30M_C.Menta__x002B__Fluor__Oral_Cuidado_Total_-_50270011'
, 'Seda__50M_C.Menta__x002B__Fluor__Oral__-_50270014'
, 'Seda__50M_C.Menta__x002B__Fluor__Oral_Plus_Eco-Friendly_-_50360237'
, 'Seda__50M_Carbon_Activado__x002B__Menta_Oral_Plus_-_50360247'
, 'Seda_30M_Yerbabuena_x002B_Fluor__Oral_Cuidado_Total_-_50360206'
, 'Seda_50M_Yerbabuena_x002B_Fluor__Oral_Cuidado_Total_-_50270013'
, 'Seda_Dental_Disp_200M_Cera_Oral_Plus_-_50360360'
, 'Seda_Dental_Disp_400Mt_Cera_Oral_Plus_-_50360245'
, 'Seda_x00A0_200M_Menta_x002B_Fluor__x002F_Gratis_30M_Cuidado_Total_Oral_Plus_-_50360205'
, 'Seda_x00A0_200M_Yerbabuena_x002B_Fluor__x002F_Gratis_30M_Cuidado_Total_Oral_Plus_-_50360204'
];
        columnToShow.forEach(columnName => {
            const headerCell = document.createElement('tr');
            headerCell.textContent = columnName;
            headerRow.appendChild(headerCell);
        });
        table.appendChild(headerRow);

        // Filas de datos
        const contentElements = xmlDoc.getElementsByTagName('Content');
        for (let j = 0; j < contentElements.length; j++) {
            const content = contentElements[j].children;
            const row = document.createElement('th');
            columnToShow.forEach(columnName => {
                let cellContent = '';
                for (let k = 0; k < content.length; k++) {
                    const columnNameXML = content[k].nodeName;
                    if (columnNameXML === columnName) {
                        cellContent = content[k].textContent;
                        break;
                    }
                }
                const cell = document.createElement('tr'); // Cambiado a <th>
                cell.textContent = cellContent;
                row.appendChild(cell);
            });
            table.appendChild(row);
        }

        responseDiv.innerHTML = '';
        responseDiv.appendChild(table);
    }
    function consultarFiltroTabla() {
    const filtroInput = document.getElementById('filtroInput').value;
    const url = 'https://wsssl.mysevenminds.com/WSAPI.svc/iwsapi_get_view_xml_filter/4304%7C9748%7C6350%7C80%7C32450%7C6334%7C540%7C1737/2024-04-10/null';
    fetchData(url)
        .then(xmlDoc => {
            // Filtrar datos según el valor ingresado
            if (filtroInput) {
                const filteredData = Array.from(xmlDoc.getElementsByTagName('Content')).filter(content => {
                    const codigoPuntoVenta = content.querySelector('Código_Punto_de_Venta');
                    return codigoPuntoVenta && codigoPuntoVenta.textContent.includes(filtroInput);
                });

                // Ordenar los datos por Fecha_de_Visita en orden descendente
                filteredData.sort((a, b) => {
                    const dateA = new Date(a.querySelector('Fecha_de_Visita').textContent);
                    const dateB = new Date(b.querySelector('Fecha_de_Visita').textContent);
                    return dateB - dateA;
                });

                // Tomar únicamente los dos primeros registros
                const filteredDataLimited = filteredData.slice(0, 2);

                // Crear nuevo documento XML con datos filtrados y limitados
                const filteredXmlDoc = new DOMParser().parseFromString('<Root></Root>', 'text/xml');
                filteredDataLimited.forEach(content => {
                    filteredXmlDoc.documentElement.appendChild(content.cloneNode(true));
                });
                renderTable(filteredXmlDoc);
            } else {
                // Si no hay filtro, mostrar todos los datos
                renderTable(xmlDoc);
            }
        });
}
</script>
</body>
</html>
