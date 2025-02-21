// Array de productos
let productosCepillos = [
    { nombre: 'Ristra Cepillo Dental Original', precio: 14.109 * 1000, codigo1: 50360251, codigo2: 50360256, textura: 'Media', textura2: 'Suave', img: 'imgmayorista/originalflex.png', url: './mayoristahtml/originalflex.html' },
    { nombre: 'Cep Original Flex Ristra X 12', precio: 16.983 * 1000, codigo1: 50360249, codigo2: 50360250, textura: 'Media', textura2: 'Suave', img: 'imgmayorista/RISTRACEPILLORIGINAL12.png', url: './cepillohtml/Ristra.html' },
    { nombre: 'Cepillo Original', precio: 1.280* 1000, codigo1: 50360264, codigo2: 50360267, textura: 'Media', textura2: 'Suave', img: 'imgcepillo/cepillooriginal.png', url: './cepillohtml/original.html' },


    { nombre: 'Cepillo Waviness', precio: 1.685 * 1000, codigo1: 50360167, textura: 'Media', img: 'imgcepillo/cepillowaviness.png', url: './cepillohtml/waviness.html' },
    { nombre: 'Ristra Cepillo Waviness X12', precio: 19.674 * 1000, codigo1: 50360243, textura: 'Media', img: 'imgcepillo/waviness.png', url: './mayoristahtml/wanivess.html' },

    { nombre: 'Cepillo Calipso Ind', precio: 3.220 * 1000, codigo1: 50280124, codigo2: 50280125, textura: 'Media', textura2: 'Suave', img: 'imgcepillo/cepillocalipso.png', url: './cepillohtml/calipso.html' },
    { nombre: 'Kit Calipso', precio: 5.487 * 1000, codigo1: 50280128, textura: 'Media', img: 'imgkitviajero/CALIPSO KIT_Mesa de trabajo 1.png' },
    { nombre: 'Cepillo Calipso X3', precio: 6.440 * 1000, codigo1: 50280126, codigo2: 50280127, textura: 'Media', textura2: 'Suave', img: 'imgcepillo/cepillocalipso x3.png', url: './cepillohtml/calipso.html' },
    { nombre: 'Cepillo Calipso x5', precio: 11.593 * 1000, codigo1: 50360072, textura: 'Media', img: 'imgcepillo/cepillocalipso x5.png', url: './cepillohtml/calipso.html' },

    { nombre: 'Cepillo Dakota', precio: 3.593 * 1000, codigo1: 50280118, textura: 'Media', img: 'imgcepillo/cepilloteen.png', url: './universohtml/teen.html' },
    { nombre: 'Kit Dakota', precio: 8.106 * 1000, codigo1: 50280122, textura: 'Media', img: 'imgkitviajero/KIT DAKOPTA_Mesa de trabajo 1.png', url: './universohtml/kitdakopta.html' },
    { nombre: 'Cepillo Duo Dakota', precio: 6.107 * 1000, codigo1: 50280120, textura: 'Media', img: 'imgcepillo/cepduodakota.png', url: './cepillohtml/cepilloduodakota.html' },

    { nombre: 'Cepillo Model 400 Ind', precio: 3.789 * 1000, codigo1: 50360465, codigo2: 50360464, textura: 'Media', textura2: 'Suave', img: 'imgcepillo/CEPMODEL400.png', url: './cepillohtml/cepillomodel400ind.html' },
    { nombre: 'Cepillo Model 400 X3', precio: 9.661 * 1000, codigo1: 50360467, codigo2: 50360466, textura: 'Media', textura2: 'Suave', img: 'imgcepillo/CEPMODELOX3UNI.png', url: './cepillohtml/cepillomodel400x3.html' },
    { nombre: 'Cepillo Model 400 X5', precio: 15.154 * 1000, codigo1: 50360469, codigo2: 50360468, textura: 'Media', textura2: 'Suave', img: 'imgcepillo/CEPMODELX5.png', url: './cepillohtml/cepillomodel400x5.html' },


    { nombre: 'Cepillo Cuidado Total', precio: 6.401 * 1000, codigo1: 50280022, codigo2: 50280023, textura: 'Media', textura2: 'Suave', img: 'imgcepillo/cepillosuper510.png', url: './cepillohtml/super510.html' },
    { nombre: 'Cepillo Cuidado Total X2', precio: 10.111 * 1000, codigo1: 50280026, textura: 'Media', img: 'imgcepillo/cepillosuper510x2.png', url: './cepillohtml/super510.html' },
    { nombre: 'Cepillo Cuidado Total X3', precio: 13.913 * 1000, codigo1: 50360238, textura: 'Media', img: 'imgcepillo/cepillosuper510x3.png', url: './cepillohtml/super510.html' },



];




let productosSeda = [
    { nombre: 'Seda Dental Cuidado Total Yerbabuena + Flúor 50m', precio: 5.160 * 1000, codigo1: 50270013, img: 'seda/CUIDADO TOTAL YERBABUENA + FLUOR 50M.png', url: './sedahtml/yerbabuenafluor50.html' },
    { nombre: 'Seda Dental Cuidado Total Menta + Flúor 30m', precio: 4.738 * 1000, codigo1: 50270011, img: 'seda/1.png', url: './sedahtml/mentafluor30.html' },
    { nombre: 'Seda Dental Cuidado Total Yerbabuena + Flúor 30m', precio: 4.738 * 1000, codigo1: 50360206, img: 'seda/CUIDADO TOTAL YERBABUENA + FLUOR 30M.png', url: './sedahtml/yerbabuenafluor30.html' },

    // Nuevos productos
    { nombre: 'Seda Dental Dis Individual Cera 100m', precio: 4.900 * 1000, codigo1: 50360475, img: 'seda/SEDACONCERA100M.png', url: './cepillohtml/seda100.html' },
    { nombre: 'Seda Dental Dis Individual Cera 200m', precio: 7.708 * 1000, codigo1: 50360360, img: 'seda/SEDACONCERA200.png', url: './cepillohtml/SedaDentalDisIndividualCera200m.html' },
    { nombre: 'Seda Dental Cuidado Total Yerbabuena + Flúor 230m', precio: 11.627 * 1000, codigo1: 50360204, img: 'seda/CUIDADO TOTAL YERBABUENA + FLUOR 230M.png', url: './sedahtml/yerbabuenafluor230.html' },
    { nombre: 'Seda Dental Cuidado Total Menta + Flúor 230m', precio: 11.627 * 1000, codigo1: 50360205, img: 'seda/CUIDADO TOTAL MENTA + FLUOR 230M.png', url: './cepillohtml/SedaDentalCuidadoTotalMenta+Flúor230m.html' },
    { nombre: 'Seda Dental Con Cera Caja x12', precio: 11.757 * 1000, codigo1: 50360242, img: 'seda/CAJAX12.png', url: './cepillohtml/SedaDentalConCeraCajax12.html' },
    { nombre: 'Ristra Seda Dental Con Cera X12', precio: 18.812 * 1000, codigo1: 50360363, img: 'imgmayorista/sedax12.png', url: './mayoristahtml/ristax1230m.html' },


];


let productosKit = [
    { nombre: 'Kit Economico', precio: 11.836 * 1000, codigo1: 50360209, codigo2: 50360210, textura: 'Media', textura2: 'Suave', img: 'imgkitviajero/KIT VIAJERO_Mesa de trabajo 1.png', url: './kitviajerohtml/kitviajerocilindrico.html' },
    { nombre: 'Kit Higiene Viajero', precio: 14.174 * 1000, codigo1: 50340039, codigo2: 50360376, textura: 'Media', textura2: 'Suave', img: 'imgkitviajero/KIT HIGIENE ORAL CERRADO_Mesa de trabajo 1.png', url: './cepillohtml/KitHigieneViajero.html' },
    // Nuevos productos
    { nombre: 'Kit Higiene Viajero Cuidado Total', precio: 19.465 * 1000, codigo1: 50290010, codigo2: 50290011, textura: 'Media', textura2: 'Suave', img: 'imgkitviajero/KIT VIAJERO CUDIADO TOTAL CERRADO_Mesa de trabajo 1.png', url: './cepillohtml/KitHigieneViajeroCuidadoTotal.html' },
    //   { nombre: 'Kit Oferta 4 Pasos Carbon Activado', precio: 14.900 * 1000,  codigo1:50360273, img:  'imgkitviajero/KITCARBON2.png' }
];


let productosCremas = [
    { nombre: 'Cremas Dental Cool Mint 30g', precio: 2.554 * 1000, codigo1: 50340010, img: 'imgcremas/coolmint30.png', url: './cremahtml/coolmint.html' },
    { nombre: 'Cremas Dental Cool Mint 70g', precio: 2.743 * 1000, codigo1: 50340011, img: 'imgcremas/coolmint70.png', url: './cremahtml/coolmint.html' },
    { nombre: 'Cremas Dental Cool Mint 120g', precio: 5.160 * 1000, codigo1: 50340025, img: 'imgcremas/coolmint90.png', url: './cremahtml/coolmint.html' },

    { nombre: 'Cremas Dental Cool Mint 7g + cepillo + protector', precio: 4.248 * 1000, codigo1: 50360371, img: 'imgcremas/COOLMINTCREMA.png', url: './mayoristahtml/superofertacool.html' },

    { nombre: 'Cremas Dental En Gel Cuidado Total 30g', precio: 3.053 * 1000, codigo1: 50360074, img: 'imgcremas/cuidadototal30.png', url: './cremahtml/descripcioncuidadototal.html' },
    { nombre: 'Cremas Dental En Gel Cuidado Total 70g', precio: 4.593 * 1000, codigo1: 50270036, img: 'imgcremas/cuidadototal70.png', url: './cremahtml/descripcioncuidadototal.html' },
    { nombre: 'Cremas Dental En Gel Cuidado Total 90g', precio: 6.150 * 1000, codigo1: 50360137, img: 'imgcremas/cuidadototal90.png', url: './cremahtml/descripcioncuidadototal.html' },
    { nombre: 'Cremas Dental En Gel Carbon Activado 30g', precio: 5.095 * 1000, codigo1: 50360150, img: 'imgcremas/carbonactivado30.png', url: './cremahtml/descripcionmuestracarbon.html' },
    { nombre: 'Cremas Dental En Gel Carbon Activado 70g', precio: 8.731 * 1000, codigo1: 50360151, img: 'imgcremas/carbonactivado70.png', url: './cremahtml/descripcionmuestracarbon.html' },
    { nombre: 'Cremas Dental En Gel Carbon Activado 90g', precio: 10.302 * 1000, codigo1: 50360152, img: 'imgcremas/carbonactivado90.png', url: './cremahtml/descripcionmuestracarbon.html' },
    { nombre: 'Cremas Dental Cuatriaccion Plus 30g', precio: 1.190 * 1000, codigo1: 50360473, img: 'imgcremas/cuatri30g.png', url: '' },
    { nombre: 'Cremas Dental Cuatriaccion Plus 151.2g', precio: 3.677 * 1000, codigo1: 50360471, img: 'imgcremas/cuatriaccion151g.png', url: '' },
    { nombre: 'Cremas Dental Cuatriaccion Plus x3', precio: 11.610 * 1000, codigo1: 50360472, img: 'imgcremas/CREMA23.png', url: '' },

];

let productosEnjuagues = [
    { nombre: 'Enjuague Bucal Caja x24', precio: 75.327 * 1000, codigo1: 50360120, img: 'imgenjuague/cuidadototal50multiple.png', url: './enjuaguehtml/descripcioncuidadototal50.html' },
    { nombre: 'Enjuague Bucal Cuidado Total 180ml', precio: 5.160 * 1000, codigo1: 50340048, img: 'imgenjuague/cuidadototal180.png', url: './enjuaguehtml/descripcioncuidadototal180.html' },
    { nombre: 'Enjuague Bucal Cuidado Total 300ml', precio: 7.224 * 1000, codigo1: 50360085, img: 'imgenjuague/cuidadototal300.png', url: './enjuaguehtml/descripcioncuidadototal300.html' },
    { nombre: 'Enjuague Bucal Cuidado Total 500ml', precio: 10.114 * 1000, codigo1: 50340046, img: 'imgenjuague/cuidadototal500.png', url: './enjuaguehtml/descripcioncuidadototal500.html' },
    { nombre: 'Enjuague Bucal Cuidado Total 1000ml', precio: 15.171 * 1000, codigo1: 50340050, img: 'imgenjuague/cuidadototal1000.png', url: './enjuaguehtml/descripcioncuidadototal1000.html' },

    { nombre: 'Enjuague Bucal Zero 180ml', precio: 4.311 * 1000, codigo1: 50360369, img: 'imgenjuague/zeroalcohol180.png', url: './enjuaguehtml/zero300.html' },
    { nombre: 'Enjuague Bucal Zero 300ml', precio: 6.035 * 1000, codigo1: 50360086, img: 'imgenjuague/zeroalcohol300.png', url: './enjuaguehtml/zero300.html' },
    { nombre: 'Enjuague Bucal Zero 500ml', precio: 8.450 * 1000, codigo1: 50360087, img: 'imgenjuague/zeroalcohol500.png', url: './enjuaguehtml/zero300.html' },
    { nombre: 'Enjuague Bucal Zero 1000ml', precio: 12.675 * 1000, codigo1: 50360430, img: 'imgenjuague/zeroalcohol1000.png', url: './enjuaguehtml/zero300.html' },


    { nombre: 'Enjuague Bucal Caja x24', precio: 57.085 * 1000, codigo1: 50360119, img: 'imgenjuague/fluorazul50multiple.png', url: './enjuaguehtml/fluorazul50.html' },
    { nombre: 'Enjuague Bucal Fluor 180ml', precio: 4.775 * 1000, codigo1: 50340052, img: 'imgenjuague/fluorazul180.png', url: './enjuaguehtml/fluorazul300.html' },
    { nombre: 'Enjuague Bucal Fluor 300ml', precio: 6.685 * 1000, codigo1: 50360097, img: 'imgenjuague/fluorazul300.png', url: './enjuaguehtml/fluorazul300.html' },
    { nombre: 'Enjuague Bucal Fluor 500ml', precio: 9.358 * 1000, codigo1: 50360096, img: 'imgenjuague/fluorazul500.png', url: './enjuaguehtml/fluorazul500.html' },
    { nombre: 'Enjuague Bucal Fluor 1000ml', precio: 14.044 * 1000, codigo1: 50340056, img: 'imgenjuague/fluorazul1000.png', url: './enjuaguehtml/fluorazul1000.html' },

    { nombre: 'Enjuague Bucal Carbon Activado 500ml', precio: 11.627 * 1000, codigo1: 50360246, img: 'imgenjuague/carbonactivado.png', url: './enjuaguehtml/carbonactivado.html' },
];

let productosUniverso = [
    { nombre: 'Cepillo Original Flex', precio: 1.280, codigo1: 50360407, img: 'imguniverso/ORIGINALFLEXNINOS.png', url: './mayoristahtml/crystalflexr.html' },
    { nombre: 'Cepillo Children', precio: 1.790 * 1000, codigo1: 50360090, img: 'imguniverso/cepillodinosaurkids.png', url: './universohtml/dinosaur.html' },
    { nombre: 'Cepillo Junior', precio: 3.114 * 1000, codigo1: 50360108, img: 'imguniverso/cepillojunior.png', url: './universohtml/junior.html' },
    { nombre: 'Cepillo kids Bonite', precio: 3.527 * 1000, codigo1: 51370004, img: 'imguniverso/cepillokidsbonite.png', url: './universohtml/kidsbonite.html' },
    //{ nombre: 'Cepillo Gold Kids', precio: 2. * 1000, codigo1: 50360043, img: 'imguniverso/cepillogoldkids.png', url: './universohtml/goldkids.html' },
    { nombre: 'Cepillo space', precio: 3.400 * 1000, codigo1: 50280012, img: 'imguniverso/cepillospace.png', url: './universohtml/space.html' },
    { nombre: 'Kit Gold Niño', precio: 5.879 * 1000, codigo1: 50280130, img: 'imguniverso/kitgoldnino.png', url: './universohtml/kitgoldsnino.html' },
    { nombre: 'Cepillo Baby Panda', precio: 6.401 * 1000, codigo1: 50360203, img: 'imguniverso/cepillobabypanda.png', url: './universohtml/babypanda.html' },


    //{  nombre: 'Kit Bonite', precio: 4.600 * 1000,  codigo1:50360088, img:  'imguniverso/KITBONITE.png', url: './universohtml/kitbonite.html' },
    { nombre: 'Kit Junior', precio: 6.467 * 1000, codigo1: 50360089, img: 'imguniverso/KITJUNIOR.png', url: './universohtml/kitjunior.html' },
    { nombre: 'Cepillo Space Duo Niño + Cremas 30gr', precio: 10.425 * 1000, codigo1: 50280010, img: 'imguniverso/CEPSPACEDUO.png', url: './cepillohtml/CepilloSpaceDuoNiño+Cremas30gr.html' },
    { nombre: 'Kit viajero', precio: 11.627 * 1000, codigo1: 50280053, img: 'imguniverso/KITNIÑOSVARIOS.png', url: './universohtml/kitnino.html' },
    //  {  nombre: 'Crema dental chicle con fluor 50g', precio: 3.100 * 1000,  codigo1:50360091, img:  'imguniverso/CONFLUORNINOS.png', url: './cremahtml/ninoconfluorchicle.html' },

    //  {  nombre: 'Crema dental tutti-frutti sin fluor 50g', precio: 3.100 * 1000,  codigo1:50360053, img:  'imguniverso/CREMANINOS50G.png', url: './cremahtml/ninasinfluortutti.html' },
    { nombre: 'Crema dental tutti-frutti sin fluor 70g', precio: 6.205 * 1000, codigo1: 50340012, img: 'imguniverso/CREMANINOS70G.png', url: './cremahtml/ninasinfluortutti.html' },

    //{  nombre: 'Crema dental chicle sin fluor 50g', precio: 3.750 * 1000,  codigo1:50360054, img:  'imguniverso/SINFLUORNINOS50G.png' },
    { nombre: 'Crema dental chicle sin fluor 70g', precio: 6.205 * 1000, codigo1: 50340013, img: 'imguniverso/SINFLUOR70GM.png', url: './cepillohtml/Cremadentalchiclesinfluor70g.html' },


    { nombre: 'Enjuague bucal tutti frutti 300ml', precio: 6.467 * 1000, codigo1: 50360107, img: 'imguniverso/ninoschicle300.png', url: './universohtml/nino.html' },
    { nombre: 'Enjuague bucal chicle 300ml', precio: 6.467 * 1000, codigo1: 50360106, img: 'imguniverso/ninastutti300.png', url: './universohtml/nina.html' },

    { nombre: 'Crema dental chicle sin fluor + Cep 30g ', precio: 4.507 * 1000, codigo1: 50360368, img: 'imguniverso/CREMADENTALCHICLE.png', url: './mayoristahtml/superoferta.html' },
    { nombre: 'Crema dental tutti-frutti sin fluor + Cep 30g ', precio: 4.507 * 1000, codigo1: 50360367, img: 'imguniverso/CREMASINFLUORNINA.png', url: './mayoristahtml/superoferta.html' },
    { nombre: 'Crema dental con fluor 30g + Cep junior  ', precio: 4.507 * 1000, codigo1: 50360474, img: 'imguniverso/ofertajunior.png', url: './mayoristahtml/superoferta.html' },
];
let productosOrtodoncia = [
    { nombre: 'Cepillo Interdental Flex S 5 Und', precio: 8.951 * 1000, codigo1: 50360418, img: 'imgortodoncia/INTERDENTALES ESPACIOS ESTRECHOS FLEX.png', url: './ortodonciahtml/estrechosflex.html' },
    { nombre: 'Cepillo Interdental Flex S 10 Und', precio: 14.092 * 1000, codigo1: 50360415, img: 'imgortodoncia/INTERDENTALFLEX10.png', url: './cepillohtml/CepilloInterdentalLuxuryS10Und.html' },
    { nombre: 'Cepillo Interdental Flex M 5 Und', precio: 8.951 * 1000, codigo1: 50360419, img: 'imgortodoncia/INTERDENTALES INTERMEDIO FLEX.png', url: './ortodonciahtml/intermedioflex.html' },
    { nombre: 'Cepillo Interdental Flex M 10 Und', precio: 14.092 * 1000, codigo1: 50360416, img: 'imgortodoncia/INTERDENTALES10INTERMEDIOS.png', url: './ortodonciahtml/intermedioflex.html' },
    { nombre: 'Cepillo Interdental Flex L 5 Und', precio: 8.951 * 1000, codigo1: 50360420, img: 'imgortodoncia/INTERDENTALES ESPACIOS AMPLIOS FLEX.png', url: './ortodonciahtml/ampliosflex.html' },
    { nombre: 'Cepillo Interdental Flex L 10 Und', precio: 14.092 * 1000, codigo1: 50360417, img: 'imgortodoncia/INTERDFLEX10.png', url: './ortodonciahtml/ampliosflex.html' },


    { nombre: 'Cepillo Interdental Luxury S 5 Und', precio: 11.188 * 1000, codigo1: 50360385, img: 'imgortodoncia/INTERDENTALES ESPACIOS ESTRECHOS LUXURY.png', url: './ortodonciahtml/estrechosluxury.html' },
    { nombre: 'Cepillo Interdental Luxury S 10 Und', precio: 18.475 * 1000, codigo1: 50360388, img: 'imgortodoncia/10INTERDENTALESTRECHOS.png', url: '../ortodonciahtml/estrechosluxury.html' },

    { nombre: 'Cepillo Interdental Luxury M 5 Und', precio: 11.188 * 1000, codigo1: 50360386, img: 'imgortodoncia/INTERMEDIOSX5MEDIANOS.png', url: './ortodonciahtml/intermedioluxury.html' },
    { nombre: 'Cepillo Interdental Luxury M 10 Und', precio: 18.475 * 1000, codigo1: 50360389, img: 'imgortodoncia/INTERDENTALES INTERMEDIO LUXURY.png', url: './ortodonciahtml/intermedioluxury.html' },


    { nombre: 'Cepillo Interdental Luxury L 5 Und', precio: 11.188 * 1000, codigo1: 50360387, img: 'imgortodoncia/INTERDENTALES ESPACIOS AMPLIOS LUXURY.png', url: './ortodonciahtml/ampliosluxury.html' },
    { nombre: 'Cepillo Interdental Luxury L 10 Und', precio: 18.475 * 1000, codigo1: 50360390, img: 'imgortodoncia/AMPLIOSESPACIOSX10.png', url: './ortodonciahtml/ampliosluxury.html' },

    { nombre: 'Cera Para Brackts X5g', precio: 4.392 * 1000, codigo1: 50360269, img: 'imgortodoncia/CERA PARA BRACKETSH.png', url: './ortodonciahtml/cera.html' },
    { nombre: 'Enhebradores X15', precio: 5.304 * 1000, codigo1: 50360432, img: 'imgortodoncia/ENHEBRADORES.png', url: './ortodonciahtml/enhebradoresx15.html' },
    { nombre: 'Seda Menta + Fluor Cuidado Total', precio: 5.160 * 1000, codigo1: 50270014, img: 'imgortodoncia/CUIDADO TOTAL menta + FLUOR 50M.png', url: './sedahtml/mentafluor50.html' },
    { nombre: 'Flosspick X30', precio: 10.041 * 1000, codigo1: 50360439, img: 'imgortodoncia/FLOSSPICK.png', url: './ortodonciahtml/flosspick.html' },
    { nombre: 'Enhebradores X30', precio: 9.014 * 1000, codigo1: 50360404, img: 'imgortodoncia/ENHEBRADORESX30.png', url: './ortodonciahtml/enhebradores.html' },
    //{ nombre: 'Kit Ortodoncia Flex', precio: 10.870 * 1000, codigo1: 50360406, img: 'imgortodoncia/KIT FLEX.png', url: './ortodonciahtml/kitflex.html' },
    { nombre: 'Kit Ortodoncia Luxury', precio: 18.504 * 1000, codigo1: 50360428, img: 'imgortodoncia/KIT LUXURY.png', url: './ortodonciahtml/kitluxury.html' },
    { nombre: 'Kit Ortodoncia Viajero', precio: 24.039 * 1000, codigo1: 50360427, img: 'imgortodoncia/KIT LUXURY COMPLETE.png', url: './ortodonciahtml/kitcomplete.html' },
];


// Array para el carrito
let carrito = [];
let CIEN = 1000;
// Función para mostrar productos en una categoría
// Función para mostrar productos en una categoría
// Función para mostrar productos
function mostrarProductos(categoria) {
    const contenedor = document.getElementById(categoria);
    contenedor.innerHTML = ''; // Limpiar el contenedor

    let productos = categoria === 'Cepillos' ? productosCepillos
        : categoria === 'Sedas' ? productosSeda
            : categoria === 'Kit' ? productosKit
                : categoria === 'Cremas' ? productosCremas
                    : categoria === 'Enjuagues' ? productosEnjuagues
                        : categoria === 'Universo' ? productosUniverso
                            : productosOrtodoncia;

    productos.forEach((producto, index) => {
        const div = document.createElement('div');
        div.classList.add('items');
        div.innerHTML = `
            <img  style="cursor: pointer;" onclick="activarUrl('${producto.url}')" src="${producto.img}" alt="${producto.nombre}">
            <h2  style="cursor: pointer;" onclick="activarUrl('${producto.url}')">${producto.nombre}</h2>
            ${producto.codigo1 || producto.codigo2 ? `
                <select id="codigo-${categoria}-${index}" class="producto-codigo">
                    ${producto.codigo1 ? `
                        <option value="${producto.codigo1}" data-textura="${producto.textura || ''}">${producto.textura ? `${producto.textura} - ` : ''}${producto.codigo1}</option>
                    ` : ''}
                    ${producto.codigo2 ? `
                        <option value="${producto.codigo2}" data-textura="${producto.textura2 || ''}">${producto.textura2 ? `${producto.textura2} - ` : ''}${producto.codigo2}</option>
                    ` : ''}
                </select>
            ` : ''}
            <p class="producto-precio">${producto.precio.toLocaleString('en-US', { style: 'currency', currency: 'USD', minimumFractionDigits: 0, maximumFractionDigits: 0 })}</p>
            
 <div style="display: flex; justify-content: center; padding: 10px;">
 <div style="display: flex; justify-content: center; padding: 0;">
  <button 
    onclick="agregarAlCarrito(${index}, '${categoria}')" 
    class="add-to-cart-btn"
    style="
      position: relative;
      background-color: #000000;
      color: white;
      padding: 12px 28px;
      border: none;
      border-radius: 30px;
      font-family: 'Open Sans', sans-serif;
      font-size: 15px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      gap: 10px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      overflow: hidden;
      margin-top: -5px;
    "
    onmouseover="this.style.backgroundColor='#3d7ba9'; animateItems();"
    onmouseout="this.style.backgroundColor='#000000';"
  >
    <svg 
      width="20" 
      height="20" 
      viewBox="0 0 24 24" 
      fill="none" 
      stroke="currentColor" 
      stroke-width="2" 
      stroke-linecap="round" 
      stroke-linejoin="round"
      class="cart-icon"
    >
      <circle cx="9" cy="21" r="1"></circle>
      <circle cx="20" cy="21" r="1"></circle>
      <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
    </svg>
    Añadir al carrito
  </button>
</div>

<style>
@keyframes floatDiagonalLeft {
  0% {
    opacity: 0;
    transform: translate(0, 0) scale(0.5) rotate(0deg);
  }
  50% {
    opacity: 1;
    transform: translate(-15px, -15px) scale(1) rotate(-180deg);
  }
  100% {
    opacity: 0;
    transform: translate(-30px, -30px) scale(0.5) rotate(-360deg);
  }
}

@keyframes floatUp {
  0% {
    opacity: 0;
    transform: translateY(0) scale(0.5) rotate(0deg);
  }
  50% {
    opacity: 1;
    transform: translateY(-20px) scale(1.2) rotate(180deg);
  }
  100% {
    opacity: 0;
    transform: translateY(-40px) scale(0.5) rotate(360deg);
  }
}

@keyframes floatDiagonalRight {
  0% {
    opacity: 0;
    transform: translate(0, 0) scale(0.5) rotate(0deg);
  }
  50% {
    opacity: 1;
    transform: translate(15px, -15px) scale(1) rotate(180deg);
  }
  100% {
    opacity: 0;
    transform: translate(30px, -30px) scale(0.5) rotate(360deg);
  }
}

@keyframes cartBounce {
  0%, 100% { transform: translateY(0); }
  50% { transform: translateY(-3px); }
}

.add-to-cart-btn::before,
.add-to-cart-btn::after,
.add-to-cart-btn span::before {
  content: '✦';
  position: absolute;
  color: #4F95CD;
  font-size: 20px;
  pointer-events: none;
  opacity: 0;
  text-shadow: 0 0 10px rgba(79, 149, 205, 0.5);
}

.add-to-cart-btn::before {
  content: '🦷';
  left: 40%;
  top: 50%;
}

.add-to-cart-btn::after {
  content: '✨';
  left: 50%;
  top: 50%;
}

.add-to-cart-btn span::before {
  content: '🦷';
  left: 60%;
  top: 50%;
}

.add-to-cart-btn:hover::before {
  animation: floatDiagonalLeft 1s ease-out;
}

.add-to-cart-btn:hover::after {
  animation: floatUp 1s ease-out;
}

.add-to-cart-btn:hover span::before {
  animation: floatDiagonalRight 1s ease-out;
}

.add-to-cart-btn:hover .cart-icon {
  animation: cartBounce 0.5s ease infinite;
}

.add-to-cart-btn {
  position: relative;
}

.add-to-cart-btn:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 12px rgba(0,0,0,0.15);
}

.add-to-cart-btn::after {
  content: '';
  position: absolute;
  top: -2px;
  left: -2px;
  right: -2px;
  bottom: -2px;
  background: linear-gradient(45deg, #4F95CD, #3d7ba9);
  z-index: -1;
  border-radius: 32px;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.add-to-cart-btn:hover::after {
  opacity: 1;
}
</style>

<script>
function animateItems() {
  const btn = document.querySelector('.add-to-cart-btn');
  btn.style.transform = 'scale(1.05)';
  setTimeout(() => {
    btn.style.transform = 'scale(1)';
  }, 200);
}
</script>
        `;
        contenedor.appendChild(div);
    });
}
const style = document.createElement("style");
style.innerHTML = `
.producto-codigo {
    width: 100%;
    padding: 12px 15px;
    border: 2px solid #e6e6e6;
    border-radius: 8px;
    background-color: #ffffff;
    font-family: 'Poppins', sans-serif;
    font-size: 14px;
    color: #444;
    appearance: none;
    background-image: url('data:image/svg+xml;utf8,<svg fill="%23330066" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>');
    background-repeat: no-repeat;
    background-position: right 12px center;
    background-size: 16px;
    cursor: pointer;
    transition: all 0.3s ease;
    margin-bottom: 12px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.03);
}

.producto-codigo:hover {
    border-color: #00396e;
    background-color: #fafafa;
    transform: translateY(-1px);
    box-shadow: 0 4px 8px rgba(128, 0, 255, 0.08);
}

.producto-codigo:focus {
    outline: none;
    border-color: #00396e;
    box-shadow: 0 0 0 3px rgba(102, 0, 204, 0.1);
    background-color: #ffffff;
}

.producto-codigo option {
    padding: 12px;
    font-size: 14px;
    background-color: #ffffff;
    color: #444;
}

/* Disabled state */
.producto-codigo:disabled {
    background-color: #f8f8f8;
    border-color: #e0e0e0;
    cursor: not-allowed;
    opacity: 0.7;
}

/* Custom scrollbar for select dropdown (works in modern browsers) */
.producto-codigo::-webkit-scrollbar {
    width: 8px;
}

.producto-codigo::-webkit-scrollbar-track {
    background: #f5f5f5;
    border-radius: 4px;
}

.producto-codigo::-webkit-scrollbar-thumb {
    background: #00396e;
    border-radius: 4px;
}

.producto-codigo::-webkit-scrollbar-thumb:hover {
    background: #00396e;
}
`;
document.head.appendChild(style);

function abrirFormularioCompra() {
    document.getElementById('formulario-compra').style.display = 'flex';
    document.body.classList.add('modal-open');
}


// Asegurar que el modal no se cierre al hacer clic dentro del contenido
document.querySelector(".modal-content2").addEventListener("click", function (event) {
    event.stopPropagation();
});

// Función para actualizar el valor de la variable `codigo` al cambiar la opción seleccionada
function obtenerCodigoSeleccionado(index) {
    const select = document.getElementById(`codigo-${index}`);
    return select.value; // Retorna el valor seleccionado (codigo1 o codigo2)
}

// Función para activar la URL del producto
function activarUrl(url) {
    window.location.href = url; // Cambia la URL a la del producto
}

// Función para agregar al carrito
function agregarAlCarrito(index, categoria) {
    let producto;

    // Seleccionamos el producto según la categoría
    if (categoria === 'Cepillos') {
        producto = productosCepillos[index];
    } else if (categoria === 'Sedas') {
        producto = productosSeda[index];
    } else if (categoria === 'Kit') {
        producto = productosKit[index];
    } else if (categoria === 'Cremas') {
        producto = productosCremas[index];
    } else if (categoria === 'Enjuagues') {
        producto = productosEnjuagues[index];
    } else if (categoria === 'Universo') {
        producto = productosUniverso[index];
    } else {
        producto = productosOrtodoncia[index];
    }

    // Accedemos al select con el id correcto
    const select = document.getElementById(`codigo-${categoria}-${index}`);
    const codigoSeleccionado = select.value; // Obtener el código seleccionado
    const texturaSeleccionada = select.options[select.selectedIndex].dataset.textura; // Obtener la textura seleccionada

    // Verifica si el producto ya está en el carrito
    let productoEnCarrito = carrito.find(item => item.nombre === producto.nombre && item.codigo === codigoSeleccionado);

    if (productoEnCarrito) {
        // Si ya existe, solo aumentamos la cantidad
        productoEnCarrito.cantidad += 1;
        productoEnCarrito.total = productoEnCarrito.precio * productoEnCarrito.cantidad; // Actualizamos el total
    } else {
        // Si no está en el carrito, lo agregamos
        carrito.push({
            nombre: producto.nombre,
            codigo: codigoSeleccionado,
            textura: texturaSeleccionada,
            precio: producto.precio,
            cantidad: 1,
            total: producto.precio,
            img: producto.img
        });
    }

    // Actualizamos el contador del carrito y mostramos los productos en el modal
    document.getElementById('contador-carrito').innerText = carrito.length;
    mostrarCarrito(); // Asegúrate de que esta función muestra el carrito correctamente
}


// Función para abrir una categoría
function abrirCategoria(evt, categoria) {
    // Ocultar todas las pestañas
    let tabcontent = document.getElementsByClassName("tabcontent");
    for (let i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Remover la clase "active" de todas las pestañas
    let tablinks = document.getElementsByClassName("tablink");
    for (let i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("active");
    }

    // Mostrar la pestaña actual y añadir una clase "active" al botón que la abre
    document.getElementById(categoria).style.display = "block";
    evt.currentTarget.classList.add("active");

    // Mostrar productos de la categoría seleccionada
    mostrarProductos(categoria);
}

// Abrir la pestaña por defecto
document.getElementById("defaultOpen").click();
// Función para actualizar el contador del carrito
function actualizarCarrito() {
    let contador = document.getElementById('contador-carrito');
    let totalItems = 0;

    for (let producto in carrito) {
        totalItems += parseInt(carrito[producto].cantidad, 10); // Usamos parseInt para convertir a número
    }

    contador.textContent = totalItems; // Mostramos el total de productos en el contador
}

// Función para eliminar productos del carrito


// Función para actualizar la cantidad de un producto
function modificarCantidad(nombre, codigo, cantidad) {
    // Buscamos el producto en el carrito por nombre y código
    let producto = carrito.find(item => item.nombre === nombre && item.codigo === codigo);

    if (producto) {
        // Actualizamos la cantidad y el total del producto
        producto.cantidad = parseInt(cantidad); // Asegúrate de que la cantidad sea un número
        producto.total = producto.precio * producto.cantidad; // Recalcula el total con la nueva cantidad
    }

    // Mostramos el carrito actualizado
    mostrarCarrito();
}


// Función para mostrar el carrito en el modal

function mostrarCarrito() {
    let modal = document.getElementById('modal-carrito');
    let productosCarrito = document.getElementById('productos-carrito');
    let totalCarrito = document.getElementById('total-carrito');
    let totaliva = document.getElementById('total-iva');
    let totalcomision = document.getElementById('total-comision');
    let totalincluido = document.getElementById('total-incluido');

    let iva = 19;
    let divi = 100;
    let comi = 3;

    productosCarrito.innerHTML = ''; // Limpiamos el modal antes de agregar los productos
    let total = 0;

    // Recorremos los productos en el carrito y los mostramos
    carrito.forEach(producto => {
        productosCarrito.innerHTML += `
<div class="producto-carrito bg-gradient-to-br from-gray-100 to-white shadow-2xl rounded-3xl p-8 flex flex-col items-center border border-gray-300 transition-all hover:shadow-3xl hover:scale-105">
    <img src="${producto.img}" alt="${producto.nombre}" class="w-40 h-40 object-cover rounded-full shadow-lg border-4 border-gray-400">
    
    <div class="text-center mt-4 space-y-3">
        <p class="font-extrabold text-4xl text-gray-900">${producto.nombre}</p>
        <p class="text-gray-600 text-lg">Código: <span class="font-semibold text-gray-800">${producto.codigo}</span></p>
        <p class="text-gray-600 text-lg">Textura: <span class="font-semibold text-gray-800">${producto.textura}</span></p>
    </div>
    
    <input 
        type="number" 
        value="${producto.cantidad}" 
        min="1" 
        onchange="modificarCantidad('${producto.nombre}', '${producto.codigo}', this.value)"
        class="w-24 p-3 border border-gray-400 rounded-xl text-center shadow-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 mt-4 bg-gray-50 text-lg font-semibold transition-all hover:shadow-lg hover:bg-white"
    >
    
    <p class="font-bold text-green-600 text-3xl mt-4">
        ${producto.total.toLocaleString('en-US', { style: 'currency', currency: 'USD', minimumFractionDigits: 0, maximumFractionDigits: 0 })}
    </p>
    
    <button 
        onclick="eliminarDelCarrito('${producto.nombre}', '${producto.codigo}')"
        class="mt-6 bg-red-500 hover:bg-red-600 text-white px-6 py-3 rounded-full shadow-lg transition-all text-2xl font-bold transform hover:scale-110 hover:shadow-xl"
    >
        ✖
    </button>
</div>

        `;
        total += producto.total;
    });

    // Actualizamos los totales del carrito
    totalCarrito.textContent = total;
    let totalComision = (total * comi) / divi;
    totalcomision.textContent = totalComision.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
    let totalIva = ((total - totalComision) * iva) / divi;
    totaliva.textContent = totalIva.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
    totalincluido.textContent = (total - totalComision + totalIva).toLocaleString('en-US', { style: 'currency', currency: 'USD' });

    // Actualizamos los contadores de ambos botones
    contador = carrito.length; // Asignamos la cantidad total de productos en el carrito
    document.getElementById('contador-carrito').innerText = contador;
    document.getElementById('contador-carrito-duplicado').innerText = contador;

    // Mostramos el modal
    modal.style.display = 'flex'; // Mostramos el modal con el carrito actualizado
}

// Función para cerrar el modal
function cerrarCarrito() {
    let modal = document.getElementById('modal-carrito');
    modal.style.display = 'none';
}

// Mostramos los productos de la primera pestaña al cargar la página
window.onload = () => {
    mostrarProductos('Cepillos');
}
function eliminarDelCarrito(nombre, codigo) {
    carrito = carrito.filter(item => !(item.nombre === nombre && item.codigo === codigo)); // Filtra correctamente
    mostrarCarrito(); // Actualizar el carrito
}

// Función para mostrar el formulario de compra
function mostrarFormularioCompra() {
    let totalCarrito = document.getElementById('total-carrito').textContent;
    totalCarrito = parseInt(totalCarrito, 10); // Convertimos el valor a un número

    if (totalCarrito < 120000) {
        let errorMessage = document.getElementById('error-message');
        errorMessage.textContent = "El total de la compra debe ser mayor de $120,000 para proceder con la compra.";

        // Show the overlay
        let overlay = document.getElementById('error-overlay');
        overlay.style.display = 'flex'; // Display the overlay
        return; // Si es menor a 120,000 no se muestra el formulario
    }

    let modal = document.getElementById('formulario-compra');
    modal.style.display = 'flex'; // Mostramos el formulario si la validación es exitosa
}

// Function to close the overlay
function closeOverlay() {
    let overlay = document.getElementById('error-overlay');
    overlay.style.display = 'none'; // Hide the overlay when "Cerrar" is clicked
}


// Función para cerrar el formulario de compra
// Function to show the overlay with the custom message
// Function to show the overlay with the custom message
// Function to show the overlay with a custom message
function showOverlay(message) {
    const overlay = document.getElementById('error-overlay');
    const errorMessage = document.getElementById('error-message');

    errorMessage.textContent = message;
    overlay.style.display = 'flex'; // Show the overlay

}

// Function to close the overlay
function closeOverlay2() {
    const overlay = document.getElementById('error-overlay');
    overlay.style.display = 'none'; // Hide the overlay

}

function showOverlay(message) {
    const overlay = document.getElementById('error-overlay2');
    const errorMessage = document.getElementById('error-message2');

    errorMessage.textContent = message;
    overlay.style.display = 'flex'; // Show the overlay

}


// Function to hide the modal and reload the page
function cerrarFormularioCompra() {
    const modal = document.getElementById("formulario-compra")
    const modal2 = document.getElementById("modal-carrito")
    const modalContent = document.getElementsByClassName("modal-content")[0] // Assuming there's only one modal-content
  
    // Verificar si todos los elementos existen
    if (modal && modal2 && modalContent) {
      // Ocultar los elementos
      modal.style.display = "none"
      modal2.style.display = "none"
      modalContent.style.display = "none"
  
      // Recargar la página después de un breve retraso
     // 100ms de retraso, ajusta según sea necesario
    } else {
      console.error("Uno o más elementos no fueron encontrados")
      // Aquí puedes manejar el caso en que no se encuentren todos los elementos
      // Por ejemplo, podrías mostrar un mensaje al usuario o realizar otra acción
    }
  }
  
  


// Manejo del evento DOMContentLoaded para rellenar campos con datos de backend
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('cedula').addEventListener('input', function () {
        let cedula = this.value;
        if (cedula) {
            fetch(`obtener_datos.php?cedula=${cedula}`)
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        alert(data.error);
                        document.getElementById('nombre').value = '';
                        document.getElementById('direccion').value = '';
                        document.getElementById('telefono').value = '';
                        document.getElementById('correo').value = '';
                    } else {
                        document.getElementById('nombre').value = data.CardName || '';
                        document.getElementById('direccion').value = data.Address || '';
                        document.getElementById('telefono').value = data.Phone1 || '';
                        document.getElementById('correo').value = data.E_Mail || '';
                    }
                })
                .catch(error => console.error('Error:', error));
        } else {
            document.getElementById('nombre').value = '';
            document.getElementById('direccion').value = '';
            document.getElementById('telefono').value = '';
            document.getElementById('correo').value = '';
        }
    });
});

// Función para enviar la compra al servidor
// Function to show the overlay with the custom message

// Example usage in the enviarCompra() function
function enviarCompra() {
    let cedula = document.getElementById('cedula').value.trim();
    let nombre = document.getElementById('nombre').value.trim();
    let direccion = document.getElementById('direccion').value.trim();
    let telefono = document.getElementById('telefono').value.trim();
    let correo = document.getElementById('correo').value.trim();

    if (!cedula || !nombre || !direccion || !telefono || !correo) {
        showOverlay("Por favor, complete todos los campos del cliente.");
        return;
    }

    if (!Array.isArray(carrito) || carrito.length === 0) {
        showOverlay("El carrito está vacío.");
        return;
    }

    let subtotal = document.getElementById("total-incluido").innerText;

    let datosCompra = {
        cedula: cedula,
        nombre: nombre,
        direccion: direccion,
        telefono: telefono,
        correo: correo,
        productos: carrito,
        subtotal: subtotal
    };

    console.log("Enviando datos:", JSON.stringify(datosCompra));

    document.getElementById('cargando').style.display = 'flex';

    fetch('procesar_compra.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(datosCompra)
    })
    .then(response => response.json())
    .then(data => {
        document.getElementById('cargando').style.display = 'none';
        console.log("Respuesta del servidor:", data);

        const overlay = document.getElementById("error-overlay2");
        const message = document.getElementById("error-message2");

        if (overlay && message) {
            if (data.success) {
                message.innerText = data.message;
                overlay.style.display = "flex";
                overlay.style.zIndex = "9999";
                carrito = [];
                actualizarCarrito();
                document.getElementById('cedula').value = '';
                document.getElementById('nombre').value = '';
                document.getElementById('direccion').value = '';
                document.getElementById('telefono').value = '';
                document.getElementById('correo').value = '';
                cerrarFormularioCompra();
            } else {
                message.innerText = "Hubo un problema al procesar tu compra. " + data.message;
                overlay.style.display = "flex";
                overlay.style.zIndex = "9999";
            }
        }
    })
    .catch(error => {
        document.getElementById('cargando').style.display = 'none';
        console.error('Error:', error);
        showOverlay("Hubo un error al procesar la compra. Inténtalo de nuevo.");
    });
}
