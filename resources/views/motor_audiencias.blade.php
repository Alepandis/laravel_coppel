<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motor de Audiencias</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/omni_canal.css')}}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!-- Barra de navegación -->
    <nav class="navbar">
        <div class="navbar-left">
            <i class="fa-solid fa-bars"></i>
        </div>
        <div class="navbar-right">
            Motor de Audiencias
            <i class="fa-solid fa-table-cells-large"></i>
            <i class="fa-solid fa-right-from-bracket"></i>
        </div>
    </nav>
    <form id="campanasForm" method="POST" action="{{ route('generar.json')}}">
    @csrf
        <div class="campanas">
            <p>Selecciona la estrategia de push a utilizar<p>
            
                <input type="radio" name="categoria" value="Categoria"> Categoria <br>
                <input type="radio" name="multicategoria" value="Multicategoria"> Multicategoria<br>
                <input type="radio" name="corporate" value="Corporate"> Corporate Deal<br>
                <input type="submit" value="Regresar">
                <input type="submit" value="Continuar">
                <hr>
        </div>
        <div>
            <select name="categoria" id="categoria">
                <option value="categoria">Categoria</option>
            </select></br>
            <input type="checkbox" name="almacenamiento" value="almacenamiento"> ALMACENAMIENTO <br>
            <input type="checkbox" name="audio_video" value="audio_video">AUDIO Y VIDEO <br>
            <input type="checkbox" name="automotriz" value="automotriz"> AUTOMOTRIZ <br>
            <input type="checkbox" name="bebes" value="bebes"> BEBES <br>
            <input type="checkbox" name="belleza" value="belleza"> BELLEZA Y CUIDADO PERSONAL <br>
            <select>
                <option value="clases_semilla">Clases semilla</option>
            </select></br>
            <input type="checkbox" name="accesorios" value="accesorios"> ACCESORIOS <br>
            <input type="checkbox" name="acces_aut_electricos" value="acces_aut_electricos"> ACCESORIOS AUT ELECTRICOS <br>
            <input type="checkbox" name="acces_aut_manuales" value="acces_aut_manuales"> ACESSORIOS AUT MANUALES <br>
            <input type="checkbox" name="acces_automotriz" value="acces_automotriz"> ACCESORIOS AUTOMOTRIZ <br>
        </div>
        <div>
            <input type="checkbox" name="especial_fin" value="especial_fin"> Especial fin de semana <br>
            <input type="checkbox" name="prueba_ab" value="prueba_ab"> Prueba A/B <br>
        </div>
        <div>
            <select name="multi_categoria" id="multi_categoria">
                <option value="multi_categoria">Categoria</option>
            </select></br>
            <input type="checkbox" name="almacenamiento" value="almacenamiento"> ALMACENAMIENTO <br>
            <input type="checkbox" name="audio_video" value="audio_video">AUDIO Y VIDEO <br>
            <input type="checkbox" name="automotriz" value="automotriz"> AUTOMOTRIZ <br>
            <input type="checkbox" name="bebes" value="bebes"> BEBES <br>
            <input type="checkbox" name="belleza" value="belleza"> BELLEZA Y CUIDADO PERSONAL <br>
            <select>
                <option value="clases_semilla">Clases semilla</option>
            </select></br>
            <input type="checkbox" name="accesorios" value="accesorios"> ACCESORIOS <br>
            <input type="checkbox" name="acces_aut_electricos" value="acces_aut_electricos"> ACCESORIOS AUT ELECTRICOS <br>
            <input type="checkbox" name="acces_aut_manuales" value="acces_aut_manuales"> ACESSORIOS AUT MANUALES <br>
            <input type="checkbox" name="acces_automotriz" value="acces_automotriz"> ACCESORIOS AUTOMOTRIZ <br>
        </div>
        <div>
            <select name="marca" id="marca">
                <option value="marca">Marca</option>
            </select><br>
            <input type="checkbox" name="sesamo" value="sesamo"> 123 SESAMO <br>
            <input type="checkbox" name="forever" value="forever"> 18 FOREVER  <br>
            <input type="checkbox" name="forever_sport" value="forever_sport"> 18 FOREVER SPORT <br>
            <input type="checkbox" name="1818" value="1818"> 1818 <br>
            <input type="checkbox" name="2fast_4you" value="2fast_4you"> 2 FAST 4 YOU <br>
            <select>
                <option value="categoria">Categoria</option>
            </select><br>
            <input type="checkbox" name="almacenamiento" value="almacenamiento"> ALMACENAMIENTO <br>
            <input type="checkbox" name="audio_video" value="audio_video">AUDIO Y VIDEO <br>
            <input type="checkbox" name="automotriz" value="automotriz"> AUTOMOTRIZ <br>
            <input type="checkbox" name="bebes" value="bebes"> BEBES <br>
            <input type="checkbox" name="belleza" value="belleza"> BELLEZA Y CUIDADO PERSONAL <br>
        </div>
        <div>
            <input type="text" id="camp_name_int" name="camp_name_int" value="Titulo interno de campaña"><br><br>
            <label for="fec_lanzamiento">Escriba fecha de lanzamiento</label>
            <input type="date" id="fec_lanzamiento" name="fec_lanzamiento"><br><br>
        </div>
        <div>Propensiones</br>
            <div>
                Busquedas</br>
                <label for="prop_busqueda_cat">Categoria</label>
                <select name="prop_busqueda_cat" id="prop_busqueda_cat">
                    <option value="0.5">0.5</option>
                    <option value="0.8">0.6</option>
                    <option value="0.8">0.7</option>
                    <option value="0.8">0.8</option>
                    <option value="0.8">0.9</option>
                    <option value="0.8">1</option>
                </select></br>
                <label for="prop_busqueda_subcat">Subcategoria</label>
                <select name="prop_busqueda_subcat" id="prop_busqueda_subcat">
                    <option value="0.5">0.5</option>
                    <option value="0.8">0.6</option>
                    <option value="0.8">0.7</option>
                    <option value="0.8">0.8</option>
                    <option value="0.8">0.9</option>
                    <option value="0.8">1</option>
                </select></br>
                <label for="prop_busqueda_clase">Clase</label>
                <select name="prop_busqueda_clase" id="prop_busqueda_clase">
                    <option value="0.5">0.5</option>
                    <option value="0.8">0.6</option>
                    <option value="0.8">0.7</option>
                    <option value="0.8">0.8</option>
                    <option value="0.8">0.9</option>
                    <option value="0.8">1</option>
                </select></br>
                <label for="prop_triple">Triple, nivel clase</label>
                <select name="prop_triple" id="prop_triple">
                <option value="0.5">0.5</option>
                    <option value="0.8">0.6</option>
                    <option value="0.8">0.7</option>
                    <option value="0.8">0.8</option>
                    <option value="0.8">0.9</option>
                    <option value="0.8">1</option>
                </select></br>
            </div> 
            <div>
                Compras</br>
                <label for="prop_compra_cat">Categoria</label>
                <select name="prop_compra_cat" id="prop_compra_cat">
                    <option value="0.5">0.5</option>
                    <option value="0.8">0.6</option>
                    <option value="0.8">0.7</option>
                    <option value="0.8">0.8</option>
                    <option value="0.8">0.9</option>
                    <option value="0.8">1</option>
                </select></br>
                <label for="prop_compra_subcat">Subcategoria</label>
                <select name="prop_compra_subcat" id="prop_compra_cat">
                    <option value="0.5">0.5</option>
                    <option value="0.8">0.6</option>
                    <option value="0.8">0.7</option>
                    <option value="0.8">0.8</option>
                    <option value="0.8">0.9</option>
                    <option value="0.8">1</option>
                </select></br>
                <label for="prop_compra_clase">Clase</label>
                <select name="prop_compra_clase" id="prop_compra_clase">
                    <option value="0.5">0.5</option>
                    <option value="0.8">0.6</option>
                    <option value="0.8">0.7</option>
                    <option value="0.8">0.8</option>
                    <option value="0.8">0.9</option>
                    <option value="0.8">1</option>
                </select></br>
            </div> 
            <div>
                Vistas</br>
                <label for="prop_vista_cat">Categoria</label>
                <select name="prop_vista_cat" id="prop_vista_cat">
                    <option value="0.5">0.5</option>
                    <option value="0.8">0.6</option>
                    <option value="0.8">0.7</option>
                    <option value="0.8">0.8</option>
                    <option value="0.8">0.9</option>
                    <option value="0.8">1</option>
                </select></br>
                <label for="prop_vista_subcat">Subcategoria</label>
                <select name="prop_vista_subcat" id="prop_vista_subcat">
                    <option value="0.5">0.5</option>
                    <option value="0.8">0.6</option>
                    <option value="0.8">0.7</option>
                    <option value="0.8">0.8</option>
                    <option value="0.8">0.9</option>
                    <option value="0.8">1</option>
                </select></br>
                <label for="prop_vista_clase">Clase</label>
                <select name="prop_vista_clase" id="prop_vista_clase">
                    <option value="0.5">0.5</option>
                    <option value="0.8">0.6</option>
                    <option value="0.8">0.7</option>
                    <option value="0.8">0.8</option>
                    <option value="0.8">0.9</option>
                    <option value="0.8">1</option>
                </select></br>
            </div> 
        </div>
        <div>Modelos de segmentacion de clientes
            <div>
                <label for="scoreRecompra">Score Recompra</label>
                <select name="scoreRecompra" id="scoreRecompra">
                    <option value="0.5">0.5</option>
                    <option value="0.8">0.6</option>
                    <option value="0.8">0.7</option>
                    <option value="0.8">0.8</option>
                    <option value="0.8">0.9</option>
                    <option value="0.8">1</option>
                </select></br>
            </div>
            <div>
                RFM
                <div>
                    <select name="R_lst" id="R_lst">
                        <option value="R_lst">Recencia</option>
                    </select></br>
                    <input type="checkbox" name="1" value="1"> 1 <br>
                    <input type="checkbox" name="2" value="2"> 2 <br>
                    <input type="checkbox" name="3" value="3"> 3 <br>
                    <input type="checkbox" name="4" value="4"> 4 <br>
                    <select name="F_lst" id="F_lst">
                        <option value="F_lst">Frecuencia</option>
                    </select></br>
                    <input type="checkbox" name="1" value="1"> 1 <br>
                    <input type="checkbox" name="2" value="2"> 2 <br>
                    <input type="checkbox" name="3" value="3"> 3 <br>
                    <input type="checkbox" name="4" value="4"> 4 <br>
                    <select name="M_lst" id="M_lst">
                        <option value="M_lst">Monetario</option>
                    </select></br>
                    <input type="checkbox" name="1" value="1"> 1 <br>
                    <input type="checkbox" name="2" value="2"> 2 <br>
                    <input type="checkbox" name="3" value="3"> 3 <br>
                    <input type="checkbox" name="4" value="4"> 4 <br>
                </div>
            </div>
        </div>
        <div>Interacciones y comportamiento de cliente</div>
            <div>Intervalo de días búsquedas y Vistas
                <select name="intervalo_dias" id="intervalo_dias">
                    <option value="31">31</option>
                </select></br>
                <div>Nivel de MKP
                    <input type="radio" name="cate_primer_nivel" value="PRIMER NIVEL"> PRIMER NIVEL <br>
                    <input type="radio" name="cate_segundo_nivel" value="SEGUNDO NIVEL"> SEGUNDO NIVEL <br>
                </div>
            </div>
            <div>
                <select name="canales_lst" id="canales_lst">
                    <option value="canales_lst">canal vistas, búsquedas, órdenes y carrito</option>
                </select></br>
                <input type="checkbox" name="app_coppel" value="APP COPPEL"> APP COPPEL <br>
                <input type="checkbox" name="coppel_com" value="COPPEL.COM"> COPPEL.COM <br>
            </div>
            <div>
                <input type="radio" name="flag_temporalidades" value="04 2023, 08 2022"> Temporalidades extra órdenes <br>
                <input type="text" name="flag_temporalidades" value="04 2023, 08 2022"><br>
            </div>
        <div>Modelos extra
            <div>SPC
                <select name="spc_lst" id="spc_lst">
                    <option value="spc_lst">SPC</option>
                </select></br>
                <input type="checkbox" name="C1" value="C1"> C1 <br>
                <input type="checkbox" name="C2" value="C2"> C2 <br>
                <input type="checkbox" name="C3" value="C3"> C3 <br>
                <input type="checkbox" name="C4" value="C4"> C4 <br>
            </div>
            <div>Score por canal
                <select name="spc_lst" id="spc_lst">
                    <option value="spc_lst">SPC</option>
                </select></br>
            </div>
        </div>
        <input type="submit" value="Generar JSON">
    </form>
    <script>
        $(document).ready(function() {
            $('#campanasForm').on('submit', function(e) {
                e.preventDefault(); // Evitar el envío del formulario predeterminado

                // Crear un objeto FormData para capturar los datos del formulario
                var formData = $(this).serialize();

                // Hacer una solicitud AJAX a la ruta backend
                $.ajax({
                    type: 'POST',
                    url: "{{ route('generar.json') }}", // Ruta que procesa los datos en Laravel
                    data: formData,
                    success: function(response) {
                        // Crear un enlace temporal para descargar el archivo JSON
                        const blob = new Blob([JSON.stringify(response)], { type: "application/json" });
                        const url = URL.createObjectURL(blob);
                        const a = document.createElement('a');
                        a.href = url;
                        a.download = 'data.json';
                        document.body.appendChild(a);
                        a.click();
                        document.body.removeChild(a);
                        URL.revokeObjectURL(url);
                    },
                    error: function(xhr, status, error) {
                        alert('Error al generar el archivo JSON');
                    }
                });
            });
        });
    </script>
</body>
</html>