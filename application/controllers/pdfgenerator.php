<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class uploader extends CI_Controller {
    /**
   * Index Page for this controller.
   *ambiental
   * Maps to the following URL
   *    http://example.com/index.php/welcome
   *  - or -
   *    http://example.com/index.php/welcome/index
   *  - or -
   * Since this controller is set as the default controller in
   * config/routes.php, it's displayed at http://example.com/
   *
   * So any other public methods not prefixed with an underscore will
   * map to /index.php/welcome/<method_name>
   * @see http://codeigniter.com/user_guide/general/urls.html
   */
function __construct(){
    parent::__construct();

    $this->load->model('m_eColonia');
  }

public function pdf()
    {
        // Se carga el modelo alumno
        /*$this->load->model('alumno_modelo');*/
        // Se carga la libreria fpdf
        $this->load->library('pdf');

        // Se obtienen los alumnos de la base de datos
        $reporte = $this->m_eColonia->obtenerReporteResiduos();

        // Creacion del PDF

        /*
         * Se crea un objeto de la clase Pdf, recuerda que la clase Pdf
         * heredó todos las variables y métodos de fpdf
         */
        $this->pdf = new Pdf();
        // Agregamos una página
        $this->pdf->AddPage();
        // Define el alias para el número de página que se imprimirá en el pie
        $this->pdf->AliasNbPages();

        /* Se define el titulo, márgenes izquierdo, derecho y
         * el color de relleno predeterminado
         */
        $this->pdf->SetTitle("Reporte de residuos");
        $this->pdf->SetLeftMargin(15);
        $this->pdf->SetRightMargin(15);
        $this->pdf->SetFillColor(200,200,200);

        // Se define el formato de fuente: Arial, negritas, tamaño 9
        $this->pdf->SetFont('Arial', 'B', 9);
        /*
         * TITULOS DE COLUMNAS
         *
         * $this->pdf->Cell(Ancho, Alto,texto,borde,posición,alineación,relleno);
         */

        $this->pdf->Cell(15,4,'Reporte','TBL',0,'C','1');
        $this->pdf->Cell(25,4,'Residuo','TB',0,'L','1');
        $this->pdf->Cell(25,4,'Cantidad','TB',0,'L','1');
        $this->pdf->Cell(25,4,'Periodo','TB',0,'L','1');
        $this->pdf->Ln(4);
        // La variable $x se utiliza para mostrar un número consecutivo
        $x = 1;
        foreach ($reporte as $reporte) {
            // se imprime el numero actual y despues se incrementa el valor de $x en uno
            $this->pdf->Cell(15,5,$x++,'BL',0,'C',0);
            // Se imprimen los datos de cada alumno
            $this->pdf->Cell(25,5,$reporte->Residuos_idResiduos,'B',0,'L',0);
            $this->pdf->Cell(25,5,$reporte->nombre,'B',0,'L',0);
            $this->pdf->Cell(25,5,$reporte->cantidad,'B',0,'L',0);
            $this->pdf->Cell(40,5,$reporte->periodo,'B',0,'C',0);
            //Se agrega un salto de linea
            $this->pdf->Ln(4);
        }
        /*
         * Se manda el pdf al navegador
         *
         * $this->pdf->Output(nombredelarchivo, destino);
         *
         * I = Muestra el pdf en el navegador
         * D = Envia el pdf para descarga
         *
         */
        $this->pdf->Output("Lista de alumnos.pdf", 'I');
    }


}
