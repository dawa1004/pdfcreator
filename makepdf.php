<?php

require('tfpdf/tfpdf.php'); // ライブラリ読み込み
$pdf = new tFPDF; // tFPDFのインスタンス作成
$pdf->AddPage(); // pdfを1ページ作成
// PDFに文字を出力する設定
$pdf->AddFont('ShipporiMincho','','ShipporiMincho-TTF-Regular.ttf',true);
// SetFont( [フォントの種類] ,[フォントのスタイル] ,[フォントのファイル])
$pdf->SetFont('ShipporiMincho','',20);
// Cell( [横幅], [縦幅], [表示したい文字])
$pdf->Cell(0,10,"たし算練習プリント");
$pdf->Ln(5); // Ln→改行 (10)→行数
$pdf->Cell(100);
$pdf->Cell(90,10,"名前:山田太郎","B");

$pdf->Ln(40);

$Y = $pdf->getY();

$pdf->SetFont('ShipporiMincho','',25);
$pdf->Cell(20,10,"(1)");
$pdf->SetFont('ShipporiMincho','',30);
$pdf->Cell(80,10,"1 + 1 =");
$pdf->Ln(25);

$pdf->SetFont('ShipporiMincho','',25);
$pdf->Cell(20,10,"(2)");
$pdf->SetFont('ShipporiMincho','',30);
$pdf->Cell(80,10,"1 + 2 =");
$pdf->Ln(25);

$pdf->SetFont('ShipporiMincho','',25);
$pdf->Cell(20,10,"(3)");
$pdf->SetFont('ShipporiMincho','',30);
$pdf->Cell(80,10,"1 + 3 =");
$pdf->Ln(25);

$pdf->SetFont('ShipporiMincho','',25);
$pdf->Cell(20,10,"(4)");
$pdf->SetFont('ShipporiMincho','',30);
$pdf->Cell(80,10,"1 + 4 =");
$pdf->Ln(25);

$pdf->SetFont('ShipporiMincho','',25);
$pdf->Cell(20,10,"(5)");
$pdf->SetFont('ShipporiMincho','',30);
$pdf->Cell(80,10,"1 + 5 =");
$pdf->Ln(25);

$pdf->SetFont('ShipporiMincho','',25);
$pdf->Cell(20,10,"(6)");
$pdf->SetFont('ShipporiMincho','',30);
$pdf->Cell(80,10,"1 + 6 =");
$pdf->Ln(25);

$pdf->SetFont('ShipporiMincho','',25);
$pdf->Cell(20,10,"(7)");
$pdf->SetFont('ShipporiMincho','',30);
$pdf->Cell(80,10,"1 + 7 =");
$pdf->Ln(25);

$pdf->SetFont('ShipporiMincho','',25);
$pdf->Cell(20,10,"(8)");
$pdf->SetFont('ShipporiMincho','',30);
$pdf->Cell(80,10,"1 + 8 =");
$pdf->Ln(25);

$pdf->SetFont('ShipporiMincho','',25);
$pdf->Cell(20,10,"(9)");
$pdf->SetFont('ShipporiMincho','',30);
$pdf->Cell(80,10,"1 + 9 =");
$pdf->Ln(25);

$pdf->setXY(110,$Y);

$pdf->SetFont('ShipporiMincho','',25);
$pdf->Cell(20,10,"(10)");
$pdf->SetFont('ShipporiMincho','',30);
$pdf->Cell(50,10,"2 + 1 =");
$pdf->Ln(25);

$pdf->setX(110);
$pdf->SetFont('ShipporiMincho','',25);
$pdf->Cell(20,10,"(11)");
$pdf->SetFont('ShipporiMincho','',30);
$pdf->Cell(50,10,"2 + 2 =");
$pdf->Ln(25);

$pdf->setX(110);
$pdf->SetFont('ShipporiMincho','',25);
$pdf->Cell(20,10,"(12)");
$pdf->SetFont('ShipporiMincho','',30);
$pdf->Cell(50,10,"2 + 3 =");
$pdf->Ln(25);

$pdf->setX(110);
$pdf->SetFont('ShipporiMincho','',25);
$pdf->Cell(20,10,"(13)");
$pdf->SetFont('ShipporiMincho','',30);
$pdf->Cell(50,10,"2 + 4 =");
$pdf->Ln(25);

$pdf->setX(110);
$pdf->SetFont('ShipporiMincho','',25);
$pdf->Cell(20,10,"(14)");
$pdf->SetFont('ShipporiMincho','',30);
$pdf->Cell(50,10,"2 + 5 =");
$pdf->Ln(25);

$pdf->setX(110);
$pdf->SetFont('ShipporiMincho','',25);
$pdf->Cell(20,10,"(15)");
$pdf->SetFont('ShipporiMincho','',30);
$pdf->Cell(50,10,"2 + 6 =");
$pdf->Ln(25);

$pdf->setX(110);
$pdf->SetFont('ShipporiMincho','',25);
$pdf->Cell(20,10,"(16)");
$pdf->SetFont('ShipporiMincho','',30);
$pdf->Cell(50,10,"2 + 7 =");
$pdf->Ln(25);

$pdf->setX(110);
$pdf->SetFont('ShipporiMincho','',25);
$pdf->Cell(20,10,"(17)");
$pdf->SetFont('ShipporiMincho','',30);
$pdf->Cell(50,10,"2 + 8 =");
$pdf->Ln(25);

$pdf->setX(110);
$pdf->SetFont('ShipporiMincho','',25);
$pdf->Cell(20,10,"(18)");
$pdf->SetFont('ShipporiMincho','',30);
$pdf->Cell(50,10,"2 + 9 =");
$pdf->Ln(25);

$pdf->Output(); // pdfを出力する
