<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>CCM CFDI</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    </head>

<body>

    <div class="container">

<?php  

       $content = '<?xml version="1.0" encoding="UTF-8"?> <cfdi:Comprobante xmlns:cfdi="http://www.sat.gob.mx/cfd/3" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sat.gob.mx/cfd/3 http://www.sat.gob.mx/sitio_internet/cfd/3/cfdv32.xsd" metodoDePago="No Identificado" LugarExpedicion="Morelia, Mich." version="3.2" folio="3894" fecha="2015-03-05T16:47:15" sello="n6/bV/+HJCdw66QHucYlSWw+c/rb3000xXoOCuX+pVVxBR39WoABQJW2Msbvme3kS0XutK9aM3Pm/4yidZUhpqG550v88SUS6e7RqBqJ9oL1qM3c4GXfEA42plhwLTPRziCigqjYeuZCoWf+f8LrXxJyuZjcKg0vVISWCj+YmgE=" formaDePago="PAGO EN UNA SOLA EXHIBICIÓN" tipoDeComprobante="ingreso" noCertificado="00001000000301659083" certificado="MIIEsTCCA5mgAwIBAgIUMDAwMDEwMDAwMDAzMDE2NTkwODMwDQYJKoZIhvcNAQEFBQAwggGKMTgwNgYDVQQDDC9BLkMuIGRlbCBTZXJ2aWNpbyBkZSBBZG1pbmlzdHJhY2nDs24gVHJpYnV0YXJpYTEvMC0GA1UECgwmU2VydmljaW8gZGUgQWRtaW5pc3RyYWNpw7NuIFRyaWJ1dGFyaWExODA2BgNVBAsML0FkbWluaXN0cmFjacOzbiBkZSBTZWd1cmlkYWQgZGUgbGEgSW5mb3JtYWNpw7NuMR8wHQYJKoZIhvcNAQkBFhBhY29kc0BzYXQuZ29iLm14MSYwJAYDVQQJDB1Bdi4gSGlkYWxnbyA3NywgQ29sLiBHdWVycmVybzEOMAwGA1UEEQwFMDYzMDAxCzAJBgNVBAYTAk1YMRkwFwYDVQQIDBBEaXN0cml0byBGZWRlcmFsMRQwEgYDVQQHDAtDdWF1aHTDqW1vYzEVMBMGA1UELRMMU0FUOTcwNzAxTk4zMTUwMwYJKoZIhvcNAQkCDCZSZXNwb25zYWJsZTogQ2xhdWRpYSBDb3ZhcnJ1YmlhcyBPY2hvYTAeFw0xMzEyMTAxNjM2MTNaFw0xNzEyMTAxNjM2MTNaMIH9MTUwMwYDVQQDEyxTSVNURU1BUyBERSBSRUNJQ0xBRE9TIElORk9STUFUSUNPUyBTQSBERSBDVjE1MDMGA1UEKRMsU0lTVEVNQVMgREUgUkVDSUNMQURPUyBJTkZPUk1BVElDT1MgU0EgREUgQ1YxNTAzBgNVBAoTLFNJU1RFTUFTIERFIFJFQ0lDTEFET1MgSU5GT1JNQVRJQ09TIFNBIERFIENWMSUwIwYDVQQtExxTUkkwMjAyMjg1TjQgLyBWQUFWNTgxMTE1STg1MR4wHAYDVQQFExUgLyBWQUFWNTgxMTE1SE1OUk5DMDYxDzANBgNVBAsTBk1BVFJJWjCBnzANBgkqhkiG9w0BAQEFAAOBjQAwgYkCgYEAqk52H0tbmrdpNDB54W7f+79b6oN4B+0AhIPA+QFGsjgzm6nCOaBbTGBOfRRaGvRjCWhYd2By0fRAvZpIUQpi8Znpc1W5c4xOR645QJ5aCPdKGnra3Ye5dPz5KgcoWBnr6JFRBTgcgCo/53xcxep2X/WamHEQX5jTN9DuZHzm3O8CAwEAAaMdMBswDAYDVR0TAQH/BAIwADALBgNVHQ8EBAMCBsAwDQYJKoZIhvcNAQEFBQADggEBAKTWGSO0xoIDK/oocMnpHacuC1mWvz1hoN1JHbCxZ6eAexlWF8PNHSgNl09186YD2I20V4YXYAMhk76nVAZ9e7juPnaDfA7r8PvZMJN7u9V8bHxoQrWVUOBmjKA01IHoX/GQJOE5dwP+Pqi081wTub396mX29THoFpzrAHrpNO+UNckdRQmlAeNXUygIPPigKpq1v29yVvXD/aKjGBQ6tUdZsDrvNmyeEAoyMW2KtQlikp5awOlnrME85wTFVQj3uFPdUeYi8ydqzOekvmFZ0JpFxcglNuaRG6xQmP+R3V6T7dUCKhfZ4iPp1sRn0iGPjJ96ftYQt8p5B/5pkyZnims=" subTotal="13871.020000" total="16090.380000" serie="A"> <cfdi:Emisor rfc="SRI0202285N4" nombre="SISTEMAS DE RECICLADOS INFORMATICOS, S.A. DE C.V."> <cfdi:DomicilioFiscal calle="ARTILLEROS DE 1847" noExterior="No. 1276" referencia="Entre General Mariano Arista y General Antonio León" colonia="CHAPULTEPEC ORIENTE" localidad="MORELIA" municipio="MORELIA" estado="Michoacan" pais="MEXICO" codigoPostal="58260" /> <cfdi:RegimenFiscal Regimen="REGIMEN GENERAL DE LEY DE PERSONAS MORALES"/> </cfdi:Emisor> <cfdi:Receptor rfc="UNA2907227Y5" nombre="UNIVERSIDAD NACIONAL AUTONOMA DE MEXICO"> <cfdi:Domicilio calle="AV. UNIVERSIDAD" noExterior="3000" colonia="UNAM, C.U. DELEGACION COYOACAN" localidad="MEXICO D.F." municipio="MEXICO D.F." estado="MEXICO D.F." pais="MEXICO" codigoPostal="04510" /> </cfdi:Receptor> <cfdi:Conceptos> <cfdi:Concepto cantidad="2.000000" unidad="No Aplica" noIdentificacion="RG-HP 03A" descripcion="REGENERACION CARTUCHO HP 03A TONER" valorUnitario="526.090000" importe="1052.180000"/> <cfdi:Concepto cantidad="2.000000" unidad="No Aplica" noIdentificacion="RG-HP Q42A" descripcion="REGENERACION CARTUCHO HP Q42A TONER" valorUnitario="790.000000" importe="1580.000000"/> <cfdi:Concepto cantidad="2.000000" unidad="No Aplica" noIdentificacion="RG-HP 64A" descripcion="REGENERACION CARTUCHO HP 64A TONER" valorUnitario="1173.910000" importe="2347.820000"/> <cfdi:Concepto cantidad="3.000000" unidad="No Aplica" noIdentificacion="RG-HP CE285A" descripcion="REGENERACION CARTUCHO HP85A TONER" valorUnitario="462.950000" importe="1388.850000"/> <cfdi:Concepto cantidad="2.000000" unidad="No Aplica" noIdentificacion="RG-HP CC530A" descripcion="REGENERACION CARTUCHO HP CC530A NEGRO TONER" valorUnitario="652.180000" importe="1304.360000"/> <cfdi:Concepto cantidad="2.000000" unidad="No Aplica" noIdentificacion="RG-HP CC531A" descripcion="REGENERACION CARTUCHO HP CC531A CYAN TONER" valorUnitario="608.690000" importe="1217.380000"/> <cfdi:Concepto cantidad="2.000000" unidad="No Aplica" noIdentificacion="RG-HP CC532A" descripcion="REGENERACION CARTUCHO HP32A AMARILLO TONER" valorUnitario="608.690000" importe="1217.380000"/> <cfdi:Concepto cantidad="2.000000" unidad="No Aplica" noIdentificacion="RG-HP CC533A" descripcion="REGENERACION CARTUCHO HP CC533A MAGENTA TONER" valorUnitario="608.690000" importe="1217.380000"/> <cfdi:Concepto cantidad="3.000000" unidad="No Aplica" noIdentificacion="RG-HP78A" descripcion="REGENERACION CARTUCHO HP 78A TONER" valorUnitario="521.550000" importe="1564.650000"/> <cfdi:Concepto cantidad="2.000000" unidad="pieza" noIdentificacion="HP-670 N" descripcion="CARTUCHO HP 670 TINTA NEGRO" valorUnitario="128.440000" importe="256.880000"/> <cfdi:Concepto cantidad="2.000000" unidad="pieza" noIdentificacion="HP-670 C" descripcion="CARTUCHO HP 670 TINTA CYAN" valorUnitario="120.690000" importe="241.380000"/> <cfdi:Concepto cantidad="2.000000" unidad="pieza" noIdentificacion="HP-670 A" descripcion="CARTUCHO HP 670 TINTA AMARILLO" valorUnitario="120.690000" importe="241.380000"/> <cfdi:Concepto cantidad="2.000000" unidad="pieza" noIdentificacion="HP-670 M" descripcion="CARTUCHO HP 670 TINTA MAGENTA" valorUnitario="120.690000" importe="241.380000"/> </cfdi:Conceptos> <cfdi:Impuestos totalImpuestosTrasladados="2219.360000"> <cfdi:Traslados> <cfdi:Traslado impuesto="IVA" tasa="16.000000" importe="2219.360000" /> </cfdi:Traslados> </cfdi:Impuestos> <cfdi:Complemento> <tfd:TimbreFiscalDigital xmlns:tfd="http://www.sat.gob.mx/TimbreFiscalDigital" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" FechaTimbrado="2015-03-05T16:47:15" UUID="92E3A5C0-B3E6-1952-845F-3926F6A8B716" noCertificadoSAT="00001000000203392777" selloCFD="n6/bV/+HJCdw66QHucYlSWw+c/rb3000xXoOCuX+pVVxBR39WoABQJW2Msbvme3kS0XutK9aM3Pm/4yidZUhpqG550v88SUS6e7RqBqJ9oL1qM3c4GXfEA42plhwLTPRziCigqjYeuZCoWf+f8LrXxJyuZjcKg0vVISWCj+YmgE=" selloSAT="f1CS5VFSlkj5JGjQfSEYsn99PygyUR7lfZX0pOnvHpcnCcJaiONTpq3qy/70mNYseiX4uDPQO9ziiMz7vlbn9v4cBWKcPPgpJnqNX5x5+W1HrlGXr5Q7InfwGQCFL3hxayBtSQwPcQZ3d4495KMdGJRseKeW6l5avyY6svpWljM=" version="1.0" xsi:schemaLocation="http://www.sat.gob.mx/TimbreFiscalDigital http://www.sat.gob.mx/TimbreFiscalDigital/TimbreFiscalDigital.xsd"/> </cfdi:Complemento> </cfdi:Comprobante>';

       $xml = simplexml_load_string($content, null, null, 'cfdi', true);
       
       echo 'Lugar de Expedición: ' . $xml->attributes()->LugarExpedicion . '<br>';
       echo 'Folio: ' . $xml->attributes()->folio . '<br>';
       echo 'Fecha: ' . $xml->attributes()->fecha . '<br>';
       echo 'Forma de pago: ' . $xml->attributes()->formaDePago . '<br>';
       echo 'Tipo de comprobante: ' . $xml->attributes()->tipoDeComprobante . '<br>';
       echo 'Número de certificado: ' . $xml->attributes()->noCertificado . '<br>';
       echo 'SubTotal: $' . $xml->attributes()->subTotal . '<br>';
       echo 'Total: $' . $xml->attributes()->total . '<br>';
       echo '<br>';
       
       echo '<strong>Emisor</strong><br><br>';

       echo 'RFC: ' . (string) $xml->children('cfdi', true)->Emisor->attributes()->rfc . '<br>'; 
       echo 'Nombre: ' . (string) $xml->children('cfdi', true)->Emisor->attributes()->nombre . '<br>';
       
       echo 'Calle: ' . (string) $xml->children('cfdi', true)->Emisor->DomicilioFiscal->attributes()->calle . '<br>';
       echo 'Num Exterior: ' . (string) $xml->children('cfdi', true)->Emisor->DomicilioFiscal->attributes()->noExterior . '<br>';
       echo 'Colonia: ' . (string) $xml->children('cfdi', true)->Emisor->DomicilioFiscal->attributes()->colonia . '<br>';
       echo 'Municipio: ' . (string) $xml->children('cfdi', true)->Emisor->DomicilioFiscal->attributes()->municipio . '<br>';
       echo 'Estado: ' . (string) $xml->children('cfdi', true)->Emisor->DomicilioFiscal->attributes()->estado . '<br>';
       echo 'País: ' . (string) $xml->children('cfdi', true)->Emisor->DomicilioFiscal->attributes()->pais . '<br>';
       echo 'Codigo Postal: ' . (string) $xml->children('cfdi', true)->Emisor->DomicilioFiscal->attributes()->codigoPostal . '<br>';

       echo '<br><strong>Receptor</strong><br><br>';

       echo 'RFC: ' . (string) $xml->children('cfdi', true)->Receptor->attributes()->rfc . '<br>'; 
       echo 'Nombre: ' . (string) $xml->children('cfdi', true)->Receptor->attributes()->nombre . '<br>';
       
       echo 'Calle: ' . (string) $xml->children('cfdi', true)->Receptor->Domicilio->attributes()->calle . '<br>';
       echo 'Num Exterior: ' . (string) $xml->children('cfdi', true)->Receptor->Domicilio->attributes()->noExterior . '<br>';
       echo 'Colonia: ' . (string) $xml->children('cfdi', true)->Receptor->Domicilio->attributes()->colonia . '<br>';
       echo 'Municipio: ' . (string) $xml->children('cfdi', true)->Receptor->Domicilio->attributes()->municipio . '<br>';
       echo 'Estado: ' . (string) $xml->children('cfdi', true)->Receptor->Domicilio->attributes()->estado . '<br>';
       echo 'País: ' . (string) $xml->children('cfdi', true)->Receptor->Domicilio->attributes()->pais . '<br>';
       echo 'Codigo Postal: ' . (string) $xml->children('cfdi', true)->Receptor->Domicilio->attributes()->codigoPostal . '<br>';

       echo '<br><strong>Conceptos</strong><br><br>';
/*    
<cfdi:Conceptos><cfdi:Concepto cantidad="63.00" unidad="PZ" descripcion="10001 GARRAFON BONAFONT 20L" valorUnitario="18.00" importe="1134.00"/>
</cfdi:Conceptos>
*/
       echo '<br><strong>Impuestos</strong><br><br>';
       
       echo 'Total Impuestos Trasladados: ' . (string) $xml->children('cfdi', true)->Impuestos->attributes()->totalImpuestosTrasladados . '<br>';
       echo 'Impuesto: ' . (string) $xml->children('cfdi', true)->Impuestos->Traslados->Traslado->attributes()->impuesto . '<br>';
       echo 'Tasa: ' . (string) $xml->children('cfdi', true)->Impuestos->Traslados->Traslado->attributes()->tasa . '<br>';  
       echo 'Importe: ' . (string) $xml->children('cfdi', true)->Impuestos->Traslados->Traslado->attributes()->importe . '<br>';    

       echo '<br><strong>Complementos</strong><br><br>';
       
       echo 'UUID: ' . (string) $xml->children('cfdi', true)->Complemento->children('tfd', true)->TimbreFiscalDigital->attributes()->UUID . '<br>';
       echo 'Fecha Timbrado: ' . (string) $xml->children('cfdi', true)->Complemento->children('tfd', true)->TimbreFiscalDigital->attributes()->FechaTimbrado . '<br>';
  
     

?>

    </div>

</body>

</html>

