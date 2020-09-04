<?php

require('tfpdf/tfpdf.php'); // ライブラリ読み込み
$pdf = new tFPDF; // tFPDFのインスタンス作成
$pdf->AddPage(); // pdfを1ページ作成
// PDFに文字を出力する設定
$pdf->AddFont('ShipporiMincho','','ShipporiMincho-TTF-Regular.ttf',true);
// SetFont( [フォントの種類] ,[フォントのスタイル] ,[フォントのファイル])
$pdf->SetFont('ShipporiMincho','',14);
// Cell( [横幅], [縦幅], [表示したい文字])
$pdf->Cell(40,10,'1+1=');
$pdf->Cell(40,10,'1+2=');
$pdf->Cell(40,10,'1+3=');

$pdf->Output(); // pdfを出力する
