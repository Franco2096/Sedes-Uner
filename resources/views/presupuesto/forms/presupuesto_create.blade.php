<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <script type="text/javascript">

    var TotalGeneral=0;
    // Refresca Producto: Refresco la Lista de Productos dentro de la Tabla
    // Si es vacia deshabilito el boton guardar para obligar a seleccionar al menos un producto al usuario
    // Sino habilito el boton Guardar para que pueda Guardar
    function RefrescaProducto(){
        var ip = [];
        var i = 0;
        //$('#guardar').attr('disabled','disabled'); //Deshabilito el Boton Guardar

        // Si la lista de Productos no es vacia Habilito el Boton Guardar
        if (i = 0) {
            // $('#guardar').removeAttr('disabled','disabled');
        }
        //   var ipt=JSON.stringify(ip); //Convierto la Lista de Productos a un JSON para procesarlo en tu controlador
        //   $('#ListaPro').val(encodeURIComponent(ipt));
    }
    function agregarProducto() {

        var sel = $('#pro_id').find(':selected').val(); //Capturo el Value del Producto
        var text = $('#pro_id').find(':selected').text();//Capturo el Nombre del Producto- Texto dentro del Select



        var sptext = text.split();


        var newtr = '<tr class="item" id="'+sel+'" id2="' + text + '" data-id="'+sel+'" >';
        newtr = newtr + '<td class="calcular" value="'+sel+'">' + text + '</td>';
        newtr = newtr + '<td hidden> <input type="hidden" class="form-control "  name="id[]" value="'+sel+'"/></td>';
        newtr = newtr + '<td> <input type="number" class="form-control cant'+sel+' " id="'+sel+'" name="idCant[]" value="0" onkeyup="calcular();"  /></td>';
        newtr = newtr + '<td> <input type="number" class="form-control precio'+sel+' " id="'+sel+'" name="idPersonal[]" value="0" onkeyup="calcular();"  /></td>';
        newtr = newtr + '<td><input type="number" class="form-control precio'+sel+'" id="'+sel+'" name="idServicio[]" value="0" onkeyup="calcular();"  /></td>';
        newtr = newtr + '<td><input type="" class="form-control precio'+sel+'"  id="'+sel+'"  name="idDeterminacion[]" value="0" onkeyup="calcular();"  /></td>';
        newtr = newtr + '<td><input  type="" class="form-control subtotales"  id="Total'+sel+'"  name="idsubTotal[]" value="0" readonly  /></td>';

        newtr = newtr + '<td><input  class="form-control totales"  id="spTotal'+sel+'"  name="idTotal[]" value="0" readonly  /></td>';
        newtr = newtr + '<td><button type="button" class="btn btn-danger btn-xs remove-item"></i>ELIMINAR</button></td></tr>';

        $('#ProSelected').append(newtr); //Agrego el Producto al tbody de la Tabla con el id=ProSelected

        RefrescaProducto();//Refresco Productos

        $('.remove-item').off().click(function(e) {
            // alert();
            $('#pro_id').append('<option value="'+$("table tr:last ").attr('id')+'">'+$("table tr:last ").attr('id2')+'');
            $(this).parent('td').parent('tr').remove(); //En accion elimino el Producto de la Tabla
            if ($('#ProSelected tr.item').length == 0)
            $('#ProSelected .no-item').slideDown(300);
            document.getElementById('guardar').disabled=true;
            RefrescaProducto();
        });

        $('.iProduct').off().change(function(e) {
            RefrescaProducto();
        });

        //$('#pro_id').find('option[value="'+sel+'"]').remove();

    }

    function calcular(){
        var pepe;
        var total=0;
        var cant= 0;
        var subtotal=0;
        $('#ProSelected').on('change', 'input', function(){
            pepe = $(this).attr('id');
            // alert("hola: "+pepe);

            $(".precio"+pepe).each(function()
            {
                total+=parseFloat($(this).val());
            });
            // alert(total);
            $("#"+'Total'+pepe).val(total);

            cant = $("."+'cant'+pepe).val();
            // alert('La cant  es: '+cant);
            subtotal = cant * ($("#"+'Total'+pepe).val());
            $("#"+'spTotal'+pepe).val(subtotal);
        })


        //  $("#"+'spTotal'+''+pepe).val(total);
    }

    function totales(){

        var sel = $('#pro_id').find(':selected').val();

        var total = 0;

        $(".totales").each(function() {

            if (isNaN(parseFloat($(this).val()))) {

                total += 0;

            } else {

                total += parseFloat($(this).val());

            }

        });


        document.getElementById('totalGeneral').innerHTML = total;

        document.getElementById('eltotal').value = total;

        if(total > 0)
        {
            document.getElementById('guardar').disabled=false;
        }
        else {
            document.getElementById('guardar').disabled=true;
        }



    }



    function determi(parametro){
        // alert(parametro);
        alert("pee");
        // alert($sol->tipo_servicio);
    }

    </script>

</head>

<body>

    <div class="container" >
        <form method="POST" action="" name="pepito" id="pepito">
            <h2><center>Seleccione la Solicutud a presupuestar</center></h2>
            <div  class="panel-body col-xl-12">
                <div class="col-xl-6">
                    <select class="selectpicker form-control" style="width:90%;" onchange="document.getElementById('data').value=this.options[this.selectedIndex].getAttribute('fecha')" id="idsolicitud" name="idsolicitud" data-width='100%' required>
                        <option value="" selected disabled>Seleccione la solicitud</option>
                        @foreach($solicitud as $sol)
                            <option id="holas" fecha="{{$sol->tipo_servicio}}" value="{{$sol->id}}">{{ $sol->titulo }}</option>

                            {{-- <input type="hidden" id="totito" name="totito" value="{{$sol->titulo}}"> --}}
                        @endforeach
                    </select>

                    <textarea id="data" style="width:90%; background-color:#ffffff;" rows="4" style="overflow:scroll;" disabled> </textarea>
                </div>
                <div class="col-xl-6">
                    <td align='right'>
                        <td align='left'><h4>Seleccione la determinación a presupuestar</h4></td>
                        <td align='right'><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">Agregar</button></td>
                    </td>
                </div>

            </div>

            {{-- <textarea name="tituloSolicitud" id="tituloSolicitud"rows="8" cols="80" >{{$sol->tipo_servicio}}</textarea> --}}

            <hr>




            <!-- Trigger the modal with a button -->

            {{-- <input type="hidden" id="ListaPro" name="ListaPro" value=""  /> --}}

            {{-- <input type="text" id="education" name="education" value=""  /> --}}

            <table id="TablaPro" class="table" >
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio Servicio</th>
                        <th>Precio Personal</th>
                        <th>Precio Determinacion</th>
                        <th>Total</th>
                        <th>SubTotal</th>
                        <th>Acción</th>
                    </tr>
                </thead>
                <tbody id="ProSelected"><!--Ingreso un id al tbody-->
                    <tr>

                    </tr>

                </tbody>
            </table>
            <!--Agregue un boton en caso de desear enviar los productos para ser procesados-->
            <hr>
            <div class="form-group">


                <div >
                    <center><a class="btn btn-primary btn-sm"  id="calcular" name="calcular" type="button" onclick="totales();">Calcular </a>
                    <h5><span style="text-decoration:underline"><strong>Total Presupuestado: </strong></span><span id="totalGeneral"></span></h5>
                    <input type="hidden" id = "eltotal" name = "eltotal"></center>
                </div>

            </div>

        </form>

        <button type="submit" id="guardar" name= "guardar" class="btn btn-success btn-sm pull-right" disabled>Guardar</button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">

            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content cuerpo">
                    <div class="modal-header cuerpo">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><center>Agregar determinación</center></h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">

                            <select class="selectpicker form-control" id="pro_id" name="pro_id" data-width='100%' required>
                                <option value="" disabled selected>Seleccionar Determinación</option>
                                @foreach($determinaciones as $determinacion)
                                    <option value="{{$determinacion->id}}">{{ $determinacion->determinacion }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!--Uso la funcion onclick para llamar a la funcion en javascript-->
                        <button type="button" onclick="agregarProducto()" class="btn btn-success btn-sm" data-dismiss="modal">Agregar</button>
                        <button type="button" class="btn btn-danger btn-sm pull-left" data-dismiss="modal">Cerrar</button>

                    </div>
                </div>

            </div>
        </div>

    </div>

</body>
