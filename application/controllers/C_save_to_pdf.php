<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_save_to_pdf extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');

        date_default_timezone_set("Asia/Jakarta");
    }

    // ====== sertifikat =======
    public function sertifikat(){


        $pdf = new FPDF('L','mm','A4');

        // membuat halaman baru
        $pdf->SetMargins(20.5,10.5,0);
        $pdf->AddPage();

        $pdf->Image(base_url('assets/images/bg/sertifikat.png'),0,0,300);

        $h = 3;



        $pdf->SetXY(100,25);
        $pdf->SetFont('dinpromedium','',30);
        $pdf->Cell(170,$h,'CERTIFICATE OF APPRECIATION',0,1,'C');

        $pdf->SetFont('dinprolight','',20);
        $pdf->SetXY(100,40);
        $pdf->Cell(170,$h,'AWARDED TO :',0,1,'C');

        $pdf->SetFont('lavanderia_delicate','',50);
        $pdf->SetXY(100,65);
        $pdf->Cell(170,$h,'Nandang Mulyadi',0,1,'C');


        $h=10;
        $pdf->SetFont('dinprolight','',15);
        $pdf->SetXY(115,85);
        $pdf->MultiCell(155,$h,'PT Agung Podomoro Group','T','C',false);
        $pdf->SetXY(115,95);
        $pdf->MultiCell(155,$h,'Project Neo Soho Tanjung Duren','T','C',false);

        $pdf->SetFont('dinprolight','',10);
        $pdf->SetXY(115,105);
        $pdf->MultiCell(155,5,'Jl. Letjen S. Parman No.28, RT.12/RW.6, Tj. Duren Sel., Grogol petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta ',0,'C',false);

        $pdf->Image(base_url('assets/images/icon/bronze.png'),175,125,30);

        $pdf->SetXY(100,160);
        $pdf->SetFont('dinlightitalic','',20);
        $pdf->Cell(180,$h,'PLATINUM',0,1,'C');

        $pdf->Output('Ijazah.pdf','I');
    }

}
