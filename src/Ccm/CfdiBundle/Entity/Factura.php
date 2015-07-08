<?php

namespace Ccm\CfdiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;

/**
 * Factura
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Ccm\CfdiBundle\Entity\FacturaRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Factura
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="lugarExpedicion", type="string", length=120)
     */
    private $lugarExpedicion;

    /**
     * @var string
     *
     * @ORM\Column(name="Folio", type="string", length=30)
     */
    private $folio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date")
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="FormaPago", type="string", length=40)
     */
    private $formaPago;

    /**
     * @var string
     *
     * @ORM\Column(name="TipoComprobante", type="string", length=40)
     */
    private $tipoComprobante;

    /**
     * @var string
     *
     * @ORM\Column(name="NumeroCertificado", type="string", length=40)
     */
    private $numeroCertificado;

    /**
     * @var string
     *
     * @ORM\Column(name="SubTotal", type="decimal")
     */
    private $subTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal")
     */
    private $total;

    /**
     * @var string
     *
     * @ORM\Column(name="emisorRfc", type="string", length=15)
     */
    private $emisorRfc;

    /**
     * @var string
     *
     * @ORM\Column(name="emisorNombre", type="string", length=50)
     */
    private $emisorNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="emisorCalle", type="string", length=80)
     */
    private $emisorCalle;

    /**
     * @var string
     *
     * @ORM\Column(name="emisorNumExterior", type="string", length=8)
     */
    private $emisorNumExterior;

    /**
     * @var string
     *
     * @ORM\Column(name="emisorColonia", type="string", length=50)
     */
    private $emisorColonia;

    /**
     * @var string
     *
     * @ORM\Column(name="emisorMunicipio", type="string", length=50)
     */
    private $emisorMunicipio;

    /**
     * @var string
     *
     * @ORM\Column(name="emisorEstado", type="string", length=50)
     */
    private $emisorEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="emisorPais", type="string", length=20)
     */
    private $emisorPais;

    /**
     * @var string
     *
     * @ORM\Column(name="emisorCp", type="string", length=10)
     */
    private $emisorCp;

    /**
     * @var string
     *
     * @ORM\Column(name="receptorRfc", type="string", length=15)
     */
    private $receptorRfc;

    /**
     * @var string
     *
     * @ORM\Column(name="receptorNombre", type="string", length=50)
     */
    private $receptorNombre;

    /**
     * @var string
     *
     * @ORM\Column(name="receptorCalle", type="string", length=50)
     */
    private $receptorCalle;

    /**
     * @var string
     *
     * @ORM\Column(name="receptorNumExterior", type="string", length=8)
     */
    private $receptorNumExterior;

    /**
     * @var string
     *
     * @ORM\Column(name="ReceptorColonia", type="string", length=50)
     */
    private $receptorColonia;

    /**
     * @var string
     *
     * @ORM\Column(name="receptorMunicipio", type="string", length=50)
     */
    private $receptorMunicipio;

    /**
     * @var string
     *
     * @ORM\Column(name="receptorEstado", type="string", length=50)
     */
    private $receptorEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="receptorPais", type="string", length=20)
     */
    private $receptorPais;

    /**
     * @var string
     *
     * @ORM\Column(name="receptorCp", type="string", length=15)
     */
    private $receptorCp;

    /**
     * @var string
     *
     * @ORM\Column(name="totalImpuestoTrasladado", type="decimal")
     */
    private $totalImpuestoTrasladado;

    /**
     * @var string
     *
     * @ORM\Column(name="impuesto", type="string", length=10)
     */
    private $impuesto;

    /**
     * @var string
     *
     * @ORM\Column(name="tasa", type="decimal")
     */
    private $tasa;

    /**
     * @var string
     *
     * @ORM\Column(name="importe", type="decimal")
     */
    private $importe;

    /**
     * @var string
     *
     * @ORM\Column(name="uuid", type="string", length=255)
     */
    private $uuid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaTimbrado", type="date")
     */
    private $fechaTimbrado;

    /**
     * @var string
     *
     * @ORM\Column(name="nombreArchivo", type="string", length=80)
     */
    private $nombreArchivo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaCreacion", type="date")
     */
    private $fechaCreacion;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set lugarExpedicion
     *
     * @param string $lugarExpedicion
     * @return Factura
     */
    public function setLugarExpedicion($lugarExpedicion)
    {
        $this->lugarExpedicion = $lugarExpedicion;

        return $this;
    }

    /**
     * Get lugarExpedicion
     *
     * @return string 
     */
    public function getLugarExpedicion()
    {
        return $this->lugarExpedicion;
    }

    /**
     * Set folio
     *
     * @param string $folio
     * @return Factura
     */
    public function setFolio($folio)
    {
        $this->folio = $folio;

        return $this;
    }

    /**
     * Get folio
     *
     * @return string 
     */
    public function getFolio()
    {
        return $this->folio;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Factura
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set formaPago
     *
     * @param string $formaPago
     * @return Factura
     */
    public function setFormaPago($formaPago)
    {
        $this->formaPago = $formaPago;

        return $this;
    }

    /**
     * Get formaPago
     *
     * @return string 
     */
    public function getFormaPago()
    {
        return $this->formaPago;
    }

    /**
     * Set tipoComprobante
     *
     * @param string $tipoComprobante
     * @return Factura
     */
    public function setTipoComprobante($tipoComprobante)
    {
        $this->tipoComprobante = $tipoComprobante;

        return $this;
    }

    /**
     * Get tipoComprobante
     *
     * @return string 
     */
    public function getTipoComprobante()
    {
        return $this->tipoComprobante;
    }

    /**
     * Set numeroCertificado
     *
     * @param string $numeroCertificado
     * @return Factura
     */
    public function setNumeroCertificado($numeroCertificado)
    {
        $this->numeroCertificado = $numeroCertificado;

        return $this;
    }

    /**
     * Get numeroCertificado
     *
     * @return string 
     */
    public function getNumeroCertificado()
    {
        return $this->numeroCertificado;
    }

    /**
     * Set subTotal
     *
     * @param string $subTotal
     * @return Factura
     */
    public function setSubTotal($subTotal)
    {
        $this->subTotal = $subTotal;

        return $this;
    }

    /**
     * Get subTotal
     *
     * @return string 
     */
    public function getSubTotal()
    {
        return $this->subTotal;
    }

    /**
     * Set total
     *
     * @param string $total
     * @return Factura
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string 
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set emisorRfc
     *
     * @param string $emisorRfc
     * @return Factura
     */
    public function setEmisorRfc($emisorRfc)
    {
        $this->emisorRfc = $emisorRfc;

        return $this;
    }

    /**
     * Get emisorRfc
     *
     * @return string 
     */
    public function getEmisorRfc()
    {
        return $this->emisorRfc;
    }

    /**
     * Set emisorNombre
     *
     * @param string $emisorNombre
     * @return Factura
     */
    public function setEmisorNombre($emisorNombre)
    {
        $this->emisorNombre = $emisorNombre;

        return $this;
    }

    /**
     * Get emisorNombre
     *
     * @return string 
     */
    public function getEmisorNombre()
    {
        return $this->emisorNombre;
    }

    /**
     * Set emisorCalle
     *
     * @param string $emisorCalle
     * @return Factura
     */
    public function setEmisorCalle($emisorCalle)
    {
        $this->emisorCalle = $emisorCalle;

        return $this;
    }

    /**
     * Get emisorCalle
     *
     * @return string 
     */
    public function getEmisorCalle()
    {
        return $this->emisorCalle;
    }

    /**
     * Set emisorNumExterior
     *
     * @param string $emisorNumExterior
     * @return Factura
     */
    public function setEmisorNumExterior($emisorNumExterior)
    {
        $this->emisorNumExterior = $emisorNumExterior;

        return $this;
    }

    /**
     * Get emisorNumExterior
     *
     * @return string 
     */
    public function getEmisorNumExterior()
    {
        return $this->emisorNumExterior;
    }

    /**
     * Set emisorColonia
     *
     * @param string $emisorColonia
     * @return Factura
     */
    public function setEmisorColonia($emisorColonia)
    {
        $this->emisorColonia = $emisorColonia;

        return $this;
    }

    /**
     * Get emisorColonia
     *
     * @return string 
     */
    public function getEmisorColonia()
    {
        return $this->emisorColonia;
    }

    /**
     * Set emisorMunicipio
     *
     * @param string $emisorMunicipio
     * @return Factura
     */
    public function setEmisorMunicipio($emisorMunicipio)
    {
        $this->emisorMunicipio = $emisorMunicipio;

        return $this;
    }

    /**
     * Get emisorMunicipio
     *
     * @return string 
     */
    public function getEmisorMunicipio()
    {
        return $this->emisorMunicipio;
    }

    /**
     * Set emisorEstado
     *
     * @param string $emisorEstado
     * @return Factura
     */
    public function setEmisorEstado($emisorEstado)
    {
        $this->emisorEstado = $emisorEstado;

        return $this;
    }

    /**
     * Get emisorEstado
     *
     * @return string 
     */
    public function getEmisorEstado()
    {
        return $this->emisorEstado;
    }

    /**
     * Set emisorPais
     *
     * @param string $emisorPais
     * @return Factura
     */
    public function setEmisorPais($emisorPais)
    {
        $this->emisorPais = $emisorPais;

        return $this;
    }

    /**
     * Get emisorPais
     *
     * @return string 
     */
    public function getEmisorPais()
    {
        return $this->emisorPais;
    }

    /**
     * Set emisorCp
     *
     * @param string $emisorCp
     * @return Factura
     */
    public function setEmisorCp($emisorCp)
    {
        $this->emisorCp = $emisorCp;

        return $this;
    }

    /**
     * Get emisorCp
     *
     * @return string 
     */
    public function getEmisorCp()
    {
        return $this->emisorCp;
    }

    /**
     * Set receptorRfc
     *
     * @param string $receptorRfc
     * @return Factura
     */
    public function setReceptorRfc($receptorRfc)
    {
        $this->receptorRfc = $receptorRfc;

        return $this;
    }

    /**
     * Get receptorRfc
     *
     * @return string 
     */
    public function getReceptorRfc()
    {
        return $this->receptorRfc;
    }

    /**
     * Set receptorNombre
     *
     * @param string $receptorNombre
     * @return Factura
     */
    public function setReceptorNombre($receptorNombre)
    {
        $this->receptorNombre = $receptorNombre;

        return $this;
    }

    /**
     * Get receptorNombre
     *
     * @return string 
     */
    public function getReceptorNombre()
    {
        return $this->receptorNombre;
    }

    /**
     * Set receptorCalle
     *
     * @param string $receptorCalle
     * @return Factura
     */
    public function setReceptorCalle($receptorCalle)
    {
        $this->receptorCalle = $receptorCalle;

        return $this;
    }

    /**
     * Get receptorCalle
     *
     * @return string 
     */
    public function getReceptorCalle()
    {
        return $this->receptorCalle;
    }

    /**
     * Set receptorNumExterior
     *
     * @param string $receptorNumExterior
     * @return Factura
     */
    public function setReceptorNumExterior($receptorNumExterior)
    {
        $this->receptorNumExterior = $receptorNumExterior;

        return $this;
    }

    /**
     * Get receptorNumExterior
     *
     * @return string 
     */
    public function getReceptorNumExterior()
    {
        return $this->receptorNumExterior;
    }

    /**
     * Set receptorColonia
     *
     * @param string $receptorColonia
     * @return Factura
     */
    public function setReceptorColonia($receptorColonia)
    {
        $this->receptorColonia = $receptorColonia;

        return $this;
    }

    /**
     * Get receptorColonia
     *
     * @return string 
     */
    public function getReceptorColonia()
    {
        return $this->receptorColonia;
    }

    /**
     * Set receptorMunicipio
     *
     * @param string $receptorMunicipio
     * @return Factura
     */
    public function setReceptorMunicipio($receptorMunicipio)
    {
        $this->receptorMunicipio = $receptorMunicipio;

        return $this;
    }

    /**
     * Get receptorMunicipio
     *
     * @return string 
     */
    public function getReceptorMunicipio()
    {
        return $this->receptorMunicipio;
    }

    /**
     * Set receptorEstado
     *
     * @param string $receptorEstado
     * @return Factura
     */
    public function setReceptorEstado($receptorEstado)
    {
        $this->receptorEstado = $receptorEstado;

        return $this;
    }

    /**
     * Get receptorEstado
     *
     * @return string 
     */
    public function getReceptorEstado()
    {
        return $this->receptorEstado;
    }

    /**
     * Set receptorPais
     *
     * @param string $receptorPais
     * @return Factura
     */
    public function setReceptorPais($receptorPais)
    {
        $this->receptorPais = $receptorPais;

        return $this;
    }

    /**
     * Get receptorPais
     *
     * @return string 
     */
    public function getReceptorPais()
    {
        return $this->receptorPais;
    }

    /**
     * Set receptorCp
     *
     * @param string $receptorCp
     * @return Factura
     */
    public function setReceptorCp($receptorCp)
    {
        $this->receptorCp = $receptorCp;

        return $this;
    }

    /**
     * Get receptorCp
     *
     * @return string 
     */
    public function getReceptorCp()
    {
        return $this->receptorCp;
    }

    /**
     * Set totalImpuestoTrasladado
     *
     * @param string $totalImpuestoTrasladado
     * @return Factura
     */
    public function setTotalImpuestoTrasladado($totalImpuestoTrasladado)
    {
        $this->totalImpuestoTrasladado = $totalImpuestoTrasladado;

        return $this;
    }

    /**
     * Get totalImpuestoTrasladado
     *
     * @return string 
     */
    public function getTotalImpuestoTrasladado()
    {
        return $this->totalImpuestoTrasladado;
    }

    /**
     * Set impuesto
     *
     * @param string $impuesto
     * @return Factura
     */
    public function setImpuesto($impuesto)
    {
        $this->impuesto = $impuesto;

        return $this;
    }

    /**
     * Get impuesto
     *
     * @return string 
     */
    public function getImpuesto()
    {
        return $this->impuesto;
    }

    /**
     * Set tasa
     *
     * @param string $tasa
     * @return Factura
     */
    public function setTasa($tasa)
    {
        $this->tasa = $tasa;

        return $this;
    }

    /**
     * Get tasa
     *
     * @return string 
     */
    public function getTasa()
    {
        return $this->tasa;
    }

    /**
     * Set importe
     *
     * @param string $importe
     * @return Factura
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return string 
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set uuid
     *
     * @param string $uuid
     * @return Factura
     */
    public function setUuid($uuid)
    {
        $this->uuid = $uuid;

        return $this;
    }

    /**
     * Get uuid
     *
     * @return string 
     */
    public function getUuid()
    {
        return $this->uuid;
    }

    /**
     * Set fechaTimbrado
     *
     * @param \DateTime $fechaTimbrado
     * @return Factura
     */
    public function setFechaTimbrado($fechaTimbrado)
    {
        $this->fechaTimbrado = $fechaTimbrado;

        return $this;
    }

    /**
     * Get fechaTimbrado
     *
     * @return \DateTime 
     */
    public function getFechaTimbrado()
    {
        return $this->fechaTimbrado;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     * @return Factura
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime 
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set nombreArchivo
     *
     * @param string $nombreArchivo
     * @return Factura
     */
    public function setNombreArchivo($nombre)
    {
        $this->nombreArchivo = $nombre;

        return $this;
    }

    /**
     * Get nombreArchivo
     *
     * @return string
     */
    public function getNombreArchivo()
    {
        return $this->nombreArchivo;
    }

    /**
     * Llena los campos de Factura con los datos del xml
     *
     */
    public function loadXml($string)
    {

        //print_r($string);

        //$xml = new \SimpleXMLElement($string, null, null, 'cfdi', true);
        $xml = simplexml_load_string($string, null, null, 'cfdi', true);

        $this->setLugarExpedicion($xml->attributes()->LugarExpedicion);
        $this->setFolio($xml->attributes()->folio);
        $this->setFecha(new \DateTime($xml->attributes()->fecha));
        $this->setFormaPago($xml->attributes()->formaDePago);
        $this->setTipoComprobante($xml->attributes()->tipoDeComprobante);
        $this->setNumeroCertificado($xml->attributes()->noCertificado);
        $this->setSubTotal($xml->attributes()->subTotal);
        $this->setTotal($xml->attributes()->total);

        //  Emisor

        $this->setEmisorRfc((string) $xml->children('cfdi', true)->Emisor->attributes()->rfc);
        $this->setEmisorNombre((string) $xml->children('cfdi', true)->Emisor->attributes()->nombre);
        $this->setEmisorCalle((string) $xml->children('cfdi', true)->Emisor->DomicilioFiscal->attributes()->calle);
        $this->setEmisorNumExterior((string) $xml->children('cfdi', true)->Emisor->DomicilioFiscal->attributes()->noExterior);
        $this->setEmisorColonia((string) $xml->children('cfdi', true)->Emisor->DomicilioFiscal->attributes()->colonia);
        $this->setEmisorMunicipio((string) $xml->children('cfdi', true)->Emisor->DomicilioFiscal->attributes()->municipio);
        $this->setEmisorEstado((string) $xml->children('cfdi', true)->Emisor->DomicilioFiscal->attributes()->estado);
        $this->setEmisorPais((string) $xml->children('cfdi', true)->Emisor->DomicilioFiscal->attributes()->pais);
        $this->setEmisorCp((string) $xml->children('cfdi', true)->Emisor->DomicilioFiscal->attributes()->codigoPostal);

        // Receptor

        $this->setReceptorRfc((string) $xml->children('cfdi', true)->Receptor->attributes()->rfc);
        $this->setReceptorNombre((string) $xml->children('cfdi', true)->Receptor->attributes()->nombre);
        $this->setReceptorCalle((string) $xml->children('cfdi', true)->Receptor->Domicilio->attributes()->calle);
        $this->setReceptorNumExterior((string) $xml->children('cfdi', true)->Receptor->Domicilio->attributes()->noExterior);
        $this->setReceptorColonia((string) $xml->children('cfdi', true)->Receptor->Domicilio->attributes()->colonia);
        $this->setReceptorMunicipio((string) $xml->children('cfdi', true)->Receptor->Domicilio->attributes()->municipio);
        $this->setReceptorEstado((string) $xml->children('cfdi', true)->Receptor->Domicilio->attributes()->estado);
        $this->setReceptorPais((string) $xml->children('cfdi', true)->Receptor->Domicilio->attributes()->pais);
        $this->setReceptorCp((string) $xml->children('cfdi', true)->Receptor->Domicilio->attributes()->codigoPostal);

        // Conceptos
        /*
        <cfdi:Conceptos><cfdi:Concepto cantidad="63.00" unidad="PZ" descripcion="10001 GARRAFON BONAFONT 20L" valorUnitario="18.00" importe="1134.00"/>
        </cfdi:Conceptos>
        */

        // Impuestos
        // Condiciona los Impuestos


        if($xml->children('cfdi', true)->Impuestos->Traslado->count()) {

            $this->setTotalImpuestoTrasladado($xml->children('cfdi', true)->Impuestos->attributes()->totalImpuestosTrasladados);
            $this->setImpuesto($xml->children('cfdi', true)->Impuestos->Traslados->Traslado->attributes()->impuesto);
            $this->setTasa($xml->children('cfdi', true)->Impuestos->Traslados->Traslado->attributes()->tasa);
            $this->setImporte($xml->children('cfdi', true)->Impuestos->Traslados->Traslado->attributes()->importe);

        }
        else {

            $this->setTotalImpuestoTrasladado(0);
            $this->setImpuesto(0);
            $this->setTasa(0);
            $this->setImporte(0);

        }


        // Complementos

        $this->setUuid($xml->children('cfdi', true)->Complemento->children('tfd', true)->TimbreFiscalDigital->attributes()->UUID);
        $this->setFechaTimbrado(new \DateTime($xml->children('cfdi', true)->Complemento->children('tfd', true)->TimbreFiscalDigital->attributes()->FechaTimbrado));

    }

    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        $this->fechaCreacion  = new \DateTime();
    }
}
