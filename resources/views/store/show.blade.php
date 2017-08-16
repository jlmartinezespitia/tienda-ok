@extends('store.template')
@section('content')
<div id="content_detalle" >
    <div id="detalle_box">
        <h2 id="pclave">{{$product->clave}}</h2>
        <h3 id="pnombre">{{$product->nombre}}</h3>
        <h4 id="pdescripcion">{{$product->descripcion}}</h4>
        <hr>
        <table width="900" border="0" id="teibol">
            <tr>
                <td width="240" rowspan="9"><img id="myImg" src="{{ asset('images/product/'.$product->imagen) }}" alt="{{$product->nombre}}" width="330" height="220"></td>
                    
                    <!-- The Modal -->
                    <div id="myModal" class="modal">
                    <span class="close">×</span>
                    <img class="modal-content" id="img01">
                    <div id="caption"></div>
                    </div>

                    <script>
                    // Get the modal
                    var modal = document.getElementById('myModal');
                    // Get the image and insert it inside the modal - use its "alt" text as a caption
                    var img = document.getElementById('myImg');
                    var modalImg = document.getElementById("img01");
                    var captionText = document.getElementById("caption");
                    img.onclick = function(){
                        modal.style.display = "block";
                        modalImg.src = this.src;
                        captionText.innerHTML = this.alt;
                    };
                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() { 
                        modal.style.display = "none";
                    };
                    </script>    
                    <!-- FIN The Modal -->
                    
                <td width="150" rowspan="2"><img src="{{ asset('images/product/alemania.jpg') }}" width="69" height="42"></td>
                <td width="80" height="20">Colores:</td>
                <td width="310"><font color="red">{{$product->colores}}</td>
            </tr>
            <tr>
                <td width="80" height="20">Medidas:</td>
                <td width="310"><font color="red">{{$product->medidas}}</td>
            </tr>
            <tr>
                <td width="150">&nbsp;</td>
                <td width="80">Material:</td>
                <td width="310"><font color="red">{{$product->material}}</td>
            </tr>
            <tr>
                <td width="150" rowspan="8"><img src="{{ asset('images/product/moleskine.jpg') }}" width="140" height="40"></td>
                <td width="80">&nbsp;</td>
                <td width="310"><font color="red">{{$product->carac3}}</td>
            </tr>
            <tr>
                <td width="80">&nbsp;</td>
                <td width="310">&nbsp;</td>
            </tr>
            <tr>
                <td width="80">Status:</td>
                <td width="310"><font color="red">{{$product->status}}</td>
            </tr>
            <tr>
                <td width="80">Página del catálogo:</td>
                <td width="310"><font color="red">{{$product->paginacat}}</td>
            </tr>
            <tr>
                <td width="80">&nbsp;</td>
                <td width="310">&nbsp;</td>
            </tr>
            <tr>
                <td width="80">Técnica de impresión:</td>
                <td width="310"><font color="red">{{$product->tecnicaimp}}</td>
            </tr>
            <tr>
                <td width="240"><font color="#8fb410">Click en la imagen para ampliar</td>
                <td width="80" valign="top">Comentarios:</td>
                <td width="310"><font color="red">{{$product->impcoment}}</td>
            </tr>
            <tr>
                <td width="240"><font color="#8fb410"></td>
                <td width="80" valign="top">Adicionales:</td>
                <td width="310"><font color="red">{{$product->adicionales}}</td>
            </tr>
        </table>
        <br>
        <div class="cajaSola" >        
            <table width="240" border="0" align="left">
                <tr align="center">
                    <td colspan="2">Impresión</td>
                </tr>
                <tr align="center">
                    <td bgcolor="#CCCCCC">Zona</td>
                    <td bgcolor="#CCCCCC">Área</td>
                </tr>
               <!-- -->
                <tr align="left" valign="top">
                    <td>zona.zona</td>
                    <td>zona.area</td>
                </tr>
               <!-- fin f --> 
            </table>
            
            <p>&nbsp;</p>
            <table width="200" border="0">
                 <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                
                <tr align="left">
                    <td>Empaque:</td>
                    <td><font color="red">{{$product->empaque}}</td>
                </tr>
                <tr align="left">
                    <td>Pzas. por caja:</td>
                    <td><font color="red">{{$product->pzasxcaja}}</td>
                </tr>
                <tr align="left">
                <td>Medida de la caja</td>
                    <td><font color="red">{{$product->medidascaja}}</td>
                </tr>
                <tr align="left">
                    <td>Peso por 100 pzas.</td>
                    <td><font color="red">{{$product->peso100p}}</td>
                </tr>
                
            </table>
        </div>  
        <div class="cajaSola">
            <table width="240" border="0" id="miTabla">
                <tr>
                    <th colspan="4" font-weight:normal style="text-align:center">Escalas y precios</th>
                </tr>
                <tr>
                    <th bgcolor="#CCCCCC">Escala</th>
                    <th bgcolor="#CCCCCC">Precio</th>
                    <th bgcolor="#CCCCCC">Precio de imp.</th>
                    <th bgcolor="#CCCCCC">Total</th>
                </tr>
                <!-- 
                $total=$fila->precio+$fila->precioimp;
                 -->
                <tr>
                    <td>10</td>
                    <td>5</td>
                    <td>2</td>
                    <td>7</td>
                </tr>
                <!-- } -->
            </table>
        </div>      
        <div class="vistaCarrito">
            <form id="form1" name="form1" method="post" action="agregar_carrito">
                <table width="350"  border="0">
                    <tr>
                        <td ><img src="{{ asset('images/current_car.png') }}" width="20" height="20"></td>
                        <td colspan="3" align="left" id="agregarc">Agregar al carrito de compras</td>
                    </tr>
                    <tr bgcolor="#00CCFF">
                        <td width="80">Cantidad</td>
                        <td width="90">Importe</td>
                        <td width="90">Total</td>
                        <td width="90">&nbsp;</td>
                    </tr>
                    <tr>
                        <td width="80" ><label for="cantidad"></label>
                            <!-- <?php
                            
                            ?>    --> 
                            <input type="hidden" name="clave" value="{{$product->clave}}">
                            <input type="hidden" name="nombre" value="{{$product->nombre}}>">
                            <input name="cantidad" id="busqueda" size="7" onblur="jsBuscar()"/>
                            <!-- <input onclick="jsBuscar();" type="button" value="Actualizar" /><br /> -->
                            
                        </td>
                        <td width="90"><input name="importe" type="text" id="carimporte" size="7" disabled></td>
                        <td width="90"><input name="total" type="text" id="cartotal" size="7" disabled>&nbsp;</td>
                        <td width="90"><a class="btn btn-success btn-sm" href="{{route('cart-add',$product->slug)}}">Agregar</a>
                        <!-- <td width="90"><input type="submit" name="agregar" id="agregar" value="Agregar" /></td> -->
                    </tr>
                    <tr>
                        <td><a  onclick="jsBuscar()"" class="btn btn-warning btn-sm" href="">Actualizar</a></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                </table>
            </form>
        
        </div>  
		 <hr>
		<p>&nbsp;</p>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
<!-- <script type="text/javascript" src="/assets/js/jquery-3.1.1.min.js"></script> -->
<script>
//función que realiza la busqueda
function jsBuscar(){
 
        //obtenemos el valor insertado a buscar
        buscar=parseInt($("#busqueda").prop("value"));
        //utilizamos esta variable solo de ayuda y mostrar que se encontro
        encontradoResultado=false;
        //validamos cantidad mínima
        minimo=$("#miTabla tr").find('td:eq(0)').html();
        if(buscar<minimo){
            alert("La cantidad mínima es: "+minimo);
        }else{
        //realizamos el recorrido solo por las celdas que contienen el código, que es la primera
        importe=$("#miTabla tr").find('td:eq(3)').html();
        $("#mostrarResultado").html(": "+importe);
            $("#miTabla tr").find('td:eq(0)').each(function () {
              //obtenemos el codigo de la celda
              codigo = $(this).html();
              //comparamos para ver si el código es igual a la busqueda
              if(codigo<=buscar){
                //aqui ya que tenemos el td que contiene el codigo utilizaremos parent para obtener el tr.
                trDelResultado=$(this).parent();
                //ya que tenemos el tr seleccionado ahora podemos navegar a las otras celdas con find
                importe=trDelResultado.find("td:eq(3)").html();
                encontradoResultado=true;
               }
        });
        $("#carimporte").val(importe);
        $("#cartotal").val(importe*buscar);
        //mostramos el resultado en el div
//                    $("#mostrarResultado").html("Encontrado: "+importe);
        }
        //si no se encontro resultado mostramos que no existe.
//        if(!encontradoResultado)
//        $("#mostrarResultado").html("No encontrado: "+importe);
}
</script>
<!-- <div id="mostrarResultado">Aquí</div>-->
 
                
<!--			</div>-->
          
    </div> 
    <div align="center">
    	<p>-</p>
    	<p>
              <a align="center" class="btn btn-info btn-sm" href="{{route('home')}}"><i class="fa fa-chevron-circle-left"></i> Regresar</a>
          </p>  
    </div>
    	

<!--        <div class="cleaner"></div>-->

<!-- INCLUIR MODAL.CSS -->
<!-- <h1>Detalle del Producto</h1>
	<div class="product-block">
		<img src="{{ asset('images/product/'.$product->imagen) }}" width='250'>
	</div>
	<div class="product-block">
		<h3>{{$product->nombre}}</h3>
		<hr>
		<div class="product-info">
			<p>{{$product->descripcion}}</p>
			<p>
				<a href="">Comprar</a>
			</p>
		</div>
	</div>
	<p><a href="{{route('home')}}">Regresar</a></p>-->
</div>
@stop


	
 