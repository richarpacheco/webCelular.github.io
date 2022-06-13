<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cotizador-css.css">

    <title>Cotización</title>

</head>
<body>

    <div class="header">
        <header><h1>Pagar:</h1>
          
          <div>
              
           <ul class="menu">
              <li> <a href="main.html">Inicio</a></li> <!--li>a=lista+enlace interno-->
            
          </ul>
  
          </div>

      
      </header>
    </div>

   

    <div class="datos">
        
<?php

if(isset($_POST['submit1'])){
    $submit1=$_POST['submit1'];
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $direccion=$_POST['direccion'];
    $telefono=$_POST['telefono'];
    $productos=$_POST['productos'];
    $pago=$_POST['pago'];
    $retiro=$_POST['retiro'];
    $tarjeta=$_POST['tarjeta'];
    $preciototal=0;
    /*Manejando los precios*/
    $preciohuawei=369;
    $preciosamsung= 429;
    $precioxiaomi=229;
    $envioDomicilio=5;
    $descuento=10/100; //Descuento del 10% = 0.1 => 

    


    echo "Nombre:".$nombre, "<br>";
    echo "Apellido:".$apellido, "<br>";
    echo "Direccion:".$direccion, "<br>";
    echo "Telefono:".$telefono, "<br>";
    echo "Producto:".$productos, "<br>";
    echo "Paga con:".$pago, "<br>";
    echo "Retira en:".$retiro, "<br>";

   
    

    /*Precio de los telefonos con el cargo fijo de envio a domicilio = U$S5*/
    if($productos=='HUAWEI Y8P 2020' && $retiro=='Enviar a domicilio' &&  $pago=='Transferencia Bancaria'){
        $preciototal=($preciohuawei+$envioDomicilio) - (($preciohuawei+$envioDomicilio)*$descuento);
        
        echo "El importe total a abonar son US$"."&nbsp;".$preciototal;

      }
  
      else if( $productos=='HUAWEI Y8P 2020' && $retiro=='Enviar a domicilio'){
        echo "El precio de HUAWEI Y8P 2020 son US"."&nbsp;".$preciohuawei,"<br>";
        $preciototal=$preciohuawei+$envioDomicilio;
        echo "El precio total a abonar son de US"."&nbsp;".$preciototal,"<br>";
    }
    else if( $productos=='HUAWEI Y8P 2020' && $pago=='Transferencia Bancaria'){
        echo "El precio de HUAWEI Y8P 2020 son US"."&nbsp;".$preciohuawei,"<br>";
        $preciototal=$preciohuawei- ($preciohuawei*$descuento);
        echo "El precio total a abonar con descuento son de US"."&nbsp;".$preciototal,"<br>";
    }
    else if(($productos=='HUAWEI Y8P 2020') && ($pago!='Transferencia Bancaria') && ($retiro!='Enviar a domicilio')){
        echo "Número de tarjeta:".$tarjeta, "<br>";
        echo "El precio final a abonar son de US$". "&nbsp;".$preciohuawei;
    }

    if($productos=='Samsung Galaxy A32' && $retiro=='Enviar a domicilio' &&  $pago=='Transferencia Bancaria'){
        $preciototal=($preciosamsung+$envioDomicilio) - (($preciosamsung+$envioDomicilio)*$descuento);
        
        echo "El importe total a abonar son US$"."&nbsp;".$preciototal;

      }
      else if($productos=='Samsung Galaxy A32' && $retiro=='Enviar a domicilio'){
        echo "El precio de Samsung Galaxy A32 son US"."&nbsp;".$preciosamsung,"<br>";
        $preciototal=$preciosamsung+$envioDomicilio;
        echo "El precio total a abonar son de US"."&nbsp;".$preciototal,"<br>";
    }
    else if($productos=='Samsung Galaxy A32' && $pago=='Transferencia Bancaria'){
        echo "El precio de Samsung Galaxy A32 son US"."&nbsp;".$preciosamsung,"<br>";
        $preciototal=$preciosamsung-($preciosamsung*$descuento);
        echo "El precio total a abonar con descuento son de US"."&nbsp;".$preciototal,"<br>";
    }
    else if(($productos=='Samsung Galaxy A32') && ($pago!='Transferencia Bancaria') && ($retiro!='Enviar a domicilio')){
        echo "El precio final a abonar son de US$". "&nbsp;".$preciosamsung;
    }
    
    if($productos=='XIAOMI Redmi 9C' && $retiro=='Enviar a domicilio' &&  $pago=='Transferencia Bancaria'){
        $preciototal=($precioxiaomi+$envioDomicilio) - (($precioxiaomi+$envioDomicilio)*$descuento);
        
        echo "El importe total a abonar son US$"."&nbsp;".$preciototal;

      }
    else if($productos=='XIAOMI Redmi 9C'&& $retiro=='Enviar a domicilio'){
        echo "El precio de XIAOMI Redmi 9C son US"."&nbsp;".$precioxiaomi,"<br>";
        $preciototal=$precioxiaomi+$envioDomicilio;
        echo "El precio total a abonar son de US"."&nbsp;".$preciototal,"<br>"; 
    }
    else if($productos=='XIAOMI Redmi 9C'&& $pago=='Transferencia Bancaria'){
        echo "El precio de XIAOMI Redmi 9C son US"."&nbsp;".$precioxiaomi,"<br>";
        $preciototal=$precioxiaomi-($precioxiaomi*$descuento);
        echo "El precio total a abonar con descuento son de US"."&nbsp;".$preciototal,"<br>";   
    }
    else if(($productos=='XIAOMI Redmi 9C') && ($pago!='Transferencia Bancaria') && ($retiro!='Enviar a domicilio')){
        echo "El precio final a abonar son de US$". "&nbsp;".$precioxiaomi;
    }

 }
?>
    <div class="bots">
    <button class="botons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m14.49 20.937 5.381-1.166S17.93 6.633 17.914 6.546c-.016-.086-.086-.144-.158-.144s-1.439-.101-1.439-.101-.949-.949-1.064-1.05c-.027-.029-.057-.043-.086-.058l-.677 15.744zm.446-15.772c-.016 0-.043.014-.057.014-.016 0-.217.059-.533.158-.318-.919-.879-1.768-1.871-1.768h-.086c-.289-.361-.633-.519-.936-.519-2.316 0-3.426 2.892-3.77 4.359-.892.275-1.538.476-1.613.505-.504.158-.517.172-.574.648-.057.344-1.367 10.489-1.367 10.489l10.117 1.899.69-15.785zm-2.635.704v.102c-.559.173-1.178.36-1.783.547.346-1.323.992-1.972 1.553-2.217.146.375.23.878.23 1.568zm-.92-2.2c.1 0 .201.028.303.102-.732.344-1.539 1.222-1.871 2.978a59.11 59.11 0 0 1-1.411.432c.389-1.339 1.325-3.512 2.979-3.512zm.402 7.812s-.604-.315-1.322-.315c-1.08 0-1.123.676-1.123.849 0 .921 2.418 1.28 2.418 3.453 0 1.712-1.08 2.806-2.547 2.806-1.756 0-2.648-1.094-2.648-1.094l.475-1.554s.922.792 1.697.792a.693.693 0 0 0 .721-.69c0-1.209-1.986-1.268-1.986-3.252 0-1.669 1.195-3.295 3.627-3.295.936 0 1.395.272 1.395.272l-.707 2.028zm.922-7.281c.518.06.85.648 1.064 1.311-.258.087-.547.173-.863.273v-.187c0-.561-.072-1.022-.201-1.397z"></path></svg><a class="abtn"  href="pago.html">Pagar</a></button>
   <button class="botons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="m14.49 20.937 5.381-1.166S17.93 6.633 17.914 6.546c-.016-.086-.086-.144-.158-.144s-1.439-.101-1.439-.101-.949-.949-1.064-1.05c-.027-.029-.057-.043-.086-.058l-.677 15.744zm.446-15.772c-.016 0-.043.014-.057.014-.016 0-.217.059-.533.158-.318-.919-.879-1.768-1.871-1.768h-.086c-.289-.361-.633-.519-.936-.519-2.316 0-3.426 2.892-3.77 4.359-.892.275-1.538.476-1.613.505-.504.158-.517.172-.574.648-.057.344-1.367 10.489-1.367 10.489l10.117 1.899.69-15.785zm-2.635.704v.102c-.559.173-1.178.36-1.783.547.346-1.323.992-1.972 1.553-2.217.146.375.23.878.23 1.568zm-.92-2.2c.1 0 .201.028.303.102-.732.344-1.539 1.222-1.871 2.978a59.11 59.11 0 0 1-1.411.432c.389-1.339 1.325-3.512 2.979-3.512zm.402 7.812s-.604-.315-1.322-.315c-1.08 0-1.123.676-1.123.849 0 .921 2.418 1.28 2.418 3.453 0 1.712-1.08 2.806-2.547 2.806-1.756 0-2.648-1.094-2.648-1.094l.475-1.554s.922.792 1.697.792a.693.693 0 0 0 .721-.69c0-1.209-1.986-1.268-1.986-3.252 0-1.669 1.195-3.295 3.627-3.295.936 0 1.395.272 1.395.272l-.707 2.028zm.922-7.281c.518.06.85.648 1.064 1.311-.258.087-.547.173-.863.273v-.187c0-.561-.072-1.022-.201-1.397z"></path></svg><a  class="abtn" href="formulario.html">Cancelar</a></button>


</div>
   
    </div>

   




    <div class="footer">
        <footer>Desarollado por:Richard Pacheco 3°BY</footer>
    </div>



</body>
</html>

