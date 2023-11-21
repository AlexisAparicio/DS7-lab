<HTML LANG="es">
    <HEAD>
        <TITLE>Laboratorio 16.1</TITLE>
        <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
    </HEAD>
    <BODY>
        <H1>Consulta de servicios Web de Conversión de Temperatura</H1>
        <Form NAME="FormConv" METHOD="post" ACTION="lab16.1.php">
            <BR/>
            Convertir desde <select name="temp">
                <option value="CtoF" SELECTED>ºC a ºF</option>
                <option value="FtoC" >ºF a ºC</option>
            </select> el valor
            <input type="number" NAME="valor" step="Any" required>
            <input Name="Convertir" Value="Convertir" type="submit"/>
        </Form>
        <?php
        $servicio="https://www.w3schools.com/xml/tempconvert.asmx?wsdl";
        $parametros=array();
        if(array_key_exists('Convertir',$_POST))
        {
            $valor=$_POST['valor'];
            $temp=$_POST['temp'];

            if($temp=="CtoF")
            {
                $parametros['Celsius']=$valor;
                $cliente= new SoapClient($servicio,$parametros);
                $resultObj = $cliente->CelsiusToFahrenheit($parametros);
                $resultado=$resultObj->CelsiusToFahrenheitResult;
            }
            else
            {
                $parametros['Fahrenheit']=$valor;
                $cliente= new SoapClient($servicio,$parametros);
                $resultObj = $cliente->FahrenheitToCelsius($parametros);
                $resultado=$resultObj->FahrenheitToCelsiusResult;
            }
            print("<BR> La Temperatura $valor".substr($temp,0,1)." es igual a: $resultado".substr($temp,3,1));
        }
        ?>

    </BODY>
    </HTML>