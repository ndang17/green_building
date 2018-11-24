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
//        print_r($this->session->all_userdata());

        $dataPercentage = $this->db->get_where('apgt1743_green.user_step_log',
            array('IDUser' => $this->session->userdata('ID')))->result_array();

        $pdf = new FPDF('L','mm','A4');


        // membuat halaman baru
        $pdf->SetMargins(20.5,10.5,0);
        $pdf->AddPage();

//        $pdf->Image(base_url('assets/images/bg/sertifikat.jpg'),0,0,270);
        $pdf->Image(base_url('assets/images/bg/sertifikat2.png'),0,0,300);

        $h = 3;

        $pdf->SetXY(100,25);
        $pdf->SetFont('dinpromedium','',50);
        $pdf->Cell(170,$h,'CERTIFICATE',0,1,'C');

        $pdf->SetFont('dinprolight','',30);
        $pdf->SetXY(100,40);
        $pdf->Cell(170,$h,'AWARDED TO :',0,1,'C');

        $pdf->SetFont('lavanderia_delicate','',50);
        $pdf->SetXY(100,65);
        $pdf->Cell(170,$h,$this->session->userdata('Name'),0,1,'C');

        $h=15;
        $pdf->SetFont('dinprolight','',20);
//        $pdf->SetXY(115,85);
//        $pdf->MultiCell(155,$h,'PT Agung Podomoro Group',0,'C',false);

        $pdf->SetXY(115,90);
        $pdf->MultiCell(155,$h,$this->session->userdata('ProjectName'),'T','C',false);

        $pdf->SetFont('dinprolight','',14);
        $pdf->SetXY(115,105);
        $pdf->MultiCell(155,6,$this->session->userdata('Location'),0,'C',false);

        // ==== Resultnya ====

        $t1 = 0;
        $t2 = 0;
        $t3 = 0;
        $t4 = 0;
        $t5 = 0;
        $t6 = 0;
        foreach ($dataPercentage AS $item){
            if($item['IDTitle']=='1'){
                $t1 = $item['Percentage'];
            } else if($item['IDTitle']=='2'){
                $t2 = $item['Percentage'];
            } else if($item['IDTitle']=='3'){
                $t3 = $item['Percentage'];
            } else if($item['IDTitle']=='4'){
                $t4 = $item['Percentage'];
            } else if($item['IDTitle']=='5'){
                $t5 = $item['Percentage'];
            } else if($item['IDTitle']=='6'){
                $t6 = $item['Percentage'];
            }
        }

        $totalPercentage = $t1 + $t2 + $t3 + $t4 + $t5 + $t6;

        $ketD = 'Bronze';
        $ketIcon = 'bronze2.png';
        if($totalPercentage>=46 && $totalPercentage<57){
            $ketD = 'Silver';
            $ketIcon = 'silver2.png';
        } else if($totalPercentage>=57 && $totalPercentage<73){
            $ketD = 'Gold';
            $ketIcon = 'gold2.png';
        } else if($totalPercentage>=73){
            $ketD = 'Platinum';
            $ketIcon = 'platinum2.png';
        }

        $pdf->Image(base_url('assets/images/icon/'.$ketIcon),125,133,30);

        $pdf->SetXY(115,160);
        $pdf->SetFont('dinpromedium','',15);
        $pdf->Cell(50,$h,'( '.$totalPercentage.' % )',0,0,'C');

        $pdf->SetXY(115,169);
        $pdf->SetFont('dinpromedium','',20);
        $pdf->Cell(50,$h,$ketD,0,0,'C');



        $h = 7;
        $x = 170;
        $w = 100;
        $y = 138;
        $border = 'B';
        $pdf->SetXY($x,$y);
        $pdf->SetFont('dinprolight','',10);
        $pdf->Cell($w,$h,'AREA DASAR HIJAU : '.$t1,$border,1,'L');
        $pdf->SetXY($x,$y + (1*$h));
        $pdf->Cell($w,$h,'EFISIENSI DAN KONSERVASI ENERGI : '.$t2,$border,0,'L');
        $pdf->SetXY($x,$y + (2*$h));
        $pdf->Cell($w,$h,'KONSERVASI AIR : '.$t3,$border,0,'L');
        $pdf->SetXY($x,$y + (3*$h));
        $pdf->SetFont('dinprolight','',10);
        $pdf->Cell($w,$h,'SUMBER DAN SIKLUS MATERIAL : '.$t4,$border,1,'L');
        $pdf->SetXY($x,$y + (4*$h));
        $pdf->Cell($w,$h,'KESEHATAN DAN KENYAMANAN DALAM RUANG : '.$t5,$border,0,'L');
        $pdf->SetXY($x,$y + (5*$h));
        $pdf->Cell($w,$h,'MANAJEMEN LINGKUNGAN BANGUNAN : '.$t6,$border,0,'L');


        $pdf->Image(base_url('assets/images/icon/logo_tr.png'),15,180,80);

        $pdf->Output('D','Sertifikat.pdf');
        $pdf->Output('I','Sertifikat.pdf');
    }
    public function sertifikat2(){
//        print_r($this->session->all_userdata());

        $dataPercentage = $this->db->get_where('apgt1743_green.user_step_log',
            array('IDUser' => $this->session->userdata('ID')))->result_array();



        $pdf = new FPDF('L','mm','A4');


        // membuat halaman baru
        $pdf->SetMargins(20.5,10.5,0);
        $pdf->AddPage();

//        $pdf->Image(base_url('assets/images/bg/sertifikat.jpg'),0,0,270);
        $pdf->Image(base_url('assets/images/bg/sertifikat2.png'),0,0,300);

        $h = 3;

        $pdf->SetXY(100,25);
        $pdf->SetFont('dinpromedium','',50);
        $pdf->Cell(170,$h,'CERTIFICATE',0,1,'C');

        $pdf->SetFont('dinprolight','',30);
        $pdf->SetXY(100,40);
        $pdf->Cell(170,$h,'AWARDED TO :',0,1,'C');

        $pdf->SetFont('lavanderia_delicate','',50);
        $pdf->SetXY(100,65);
        $pdf->Cell(170,$h,$this->session->userdata('Name'),0,1,'C');

        $h=15;
        $pdf->SetFont('dinprolight','',20);
        $pdf->SetXY(115,85);
        $pdf->MultiCell(155,$h,'PT Agung Podomoro Group',0,'C',false);

        $pdf->SetXY(115,100);
        $pdf->MultiCell(155,$h,$this->session->userdata('ProjectName'),'T','C',false);

        $pdf->SetFont('dinprolight','',14);
        $pdf->SetXY(115,115);
        $pdf->MultiCell(155,6,$this->session->userdata('Location'),0,'C',false);

        // ==== Resultnya ====

//        $pdf->SetFillColor(239, 239, 239);
//        $pdf->Rect(115,135,50,50,'FD');

//        $pdf->SetFillColor(239, 239, 239);
//        $pdf->Rect(115,135,50,50);
        $t1 = 0;
        $t2 = 0;
        $t3 = 0;
        $t4 = 0;
        $t5 = 0;
        $t6 = 0;
        foreach ($dataPercentage AS $item){
            if($item['IDTitle']=='1'){
                $t1 = $item['Percentage'];
            } else if($item['IDTitle']=='2'){
                $t2 = $item['Percentage'];
            } else if($item['IDTitle']=='3'){
                $t3 = $item['Percentage'];
            } else if($item['IDTitle']=='4'){
                $t4 = $item['Percentage'];
            } else if($item['IDTitle']=='5'){
                $t5 = $item['Percentage'];
            } else if($item['IDTitle']=='6'){
                $t6 = $item['Percentage'];
            }
        }

        $totalPercentage = $t1 + $t2 + $t3 + $t4 + $t5 + $t6;

        $ketD = 'Bronze';
        $ketIcon = 'bronze2.png';
        if($totalPercentage>=46 && $totalPercentage<=56){
            $ketD = 'Silver';
            $ketIcon = 'silver2.png';
        } else if($totalPercentage>=57 && $totalPercentage<=72){
            $ketD = 'Gold';
            $ketIcon = 'gold2.png';
        } else if($totalPercentage>=73){
            $ketD = 'Platinum';
            $ketIcon = 'platinum2.png';
        }

        $pdf->Image(base_url('assets/images/icon/'.$ketIcon),125,133,30);

        $pdf->SetXY(115,160);
        $pdf->SetFont('dinpromedium','',15);
        $pdf->Cell(50,$h,'( '.$totalPercentage.' % )',0,0,'C');

        $pdf->SetXY(115,169);
        $pdf->SetFont('dinpromedium','',20);
        $pdf->Cell(50,$h,$ketD,0,0,'C');



        $h = 7;
        $x = 170;
        $w = 100;
        $y = 138;
        $border = 'B';
        $pdf->SetXY($x,$y);
        $pdf->SetFont('dinprolight','',10);
        $pdf->Cell($w,$h,'AREA DASAR HIJAU : '.$t1,$border,1,'L');
        $pdf->SetXY($x,$y + (1*$h));
        $pdf->Cell($w,$h,'EFISIENSI DAN KONSERVASI ENERGI : '.$t2,$border,0,'L');
        $pdf->SetXY($x,$y + (2*$h));
        $pdf->Cell($w,$h,'KONSERVASI AIR : '.$t3,$border,0,'L');
        $pdf->SetXY($x,$y + (3*$h));
        $pdf->SetFont('dinprolight','',10);
        $pdf->Cell($w,$h,'SUMBER DAN SIKLUS MATERIAL : '.$t4,$border,1,'L');
        $pdf->SetXY($x,$y + (4*$h));
        $pdf->Cell($w,$h,'KESEHATAN DAN KENYAMANAN DALAM RUANG : '.$t5,$border,0,'L');
        $pdf->SetXY($x,$y + (5*$h));
        $pdf->Cell($w,$h,'MANAJEMEN LINGKUNGAN BANGUNAN : '.$t6,$border,0,'L');


        $pdf->Image(base_url('assets/images/icon/logo_tr.png'),15,180,80);

        $pdf->Output('Ijazah.pdf','I');
    }


    public function sertifikat3(){


        $pdf = new FPDF('L','mm','A4');

        // membuat halaman baru
        $pdf->SetMargins(60.5,10.5,5);
        $pdf->AddPage();

        $pdf->Image(base_url('assets/images/bg/sertifkat3.jpg'),0,0,300);
//        $pdf->Image(base_url('assets/images/bg/sertifikat.png'),0,0,300);

        $pdf->Ln(50);
        $h = 25;
        $pdf->SetFont('lavanderia_delicate','',50);
        $pdf->Cell(0,$h,'Nandang Mulyadi','B',1,'C');




        $pdf->Ln(3);


        $h=6;
        $pdf->SetFont('dinprolight','',15);
        $pdf->Cell(0,$h,'PT Agung Podomoro Group',0,1,'C');

        $pdf->SetFont('dinprolight','',12);
        $pdf->Cell(0,$h,'Project Neo Soho Tanjung Duren',0,1,'C');
        $pdf->SetFont('dinprolight','',10);
        $pdf->SetX(90);
        $pdf->MultiCell(180,5,'Jl. Letjen S. Parman No.28, RT.12/RW.6, Tj. Duren Sel., Grogol petamburan, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta ',0,'C',false);


        $pdf->Image(base_url('assets/images/icon/bronze.png'),110,125,30);

        $pdf->SetXY(85,160);
        $pdf->SetFont('dinlightitalic','',20);
        $pdf->Cell(80,$h,'PLATINUM',0,1,'C');

        $pdf->Image(base_url('assets/images/bg/table.PNG'),170,125,100);
        $pdf->Output('Ijazah.pdf','I');
    }

}
