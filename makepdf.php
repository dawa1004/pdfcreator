<?php

require('tfpdf/tfpdf.php'); // ライブラリ読み込み
$pdf = new tFPDF; // tFPDFのインスタンス作成
// PDFに文字を出力する設定
$pdf->AddFont('ShipporiMincho','','ShipporiMincho-TTF-Regular.ttf',true);


$names = array('相田 孝雄','池浦 隆','石田 房江')

foreach ($names as $name) {
  /* ループする処理
  SetFont( [フォントの種類] ,[フォントのスタイル] ,[フォントのファイル]) */
  $pdf->SetFont('ShipporiMincho','',20);
  $pdf->AddPage(); // pdfを1ページ作成
  // Cell( [横幅], [縦幅], [表示したい文字])
  $pdf->Cell(0,10,"たし算練習プリント");
  $pdf->Ln(5); // Ln→改行 (10)→行数
  $pdf->Cell(100);
  $pdf->Cell(90,10,"名前:$name","B");

  $pdf->Ln(40);
  make_contents(); // コンテンツ部分の出力
} 

$pdf->Output(); // pdfを出力する

function make_contents() {
  global $pdf; // $pdfは関数の外で宣言されているため、global $pdf;と宣言する

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

  // X座標には先ほどと同じく110を、Y座標にはあらかじめ取得しておいた１行目のY座標をセット
  $pdf->setXY(110,$Y); // setXY([X座標],[Y座標])

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
}
