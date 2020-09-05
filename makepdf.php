<?php

require('tfpdf/tfpdf.php'); // ライブラリ読み込み
$pdf = new tFPDF; // tFPDFのインスタンス作成
// PDFに文字を出力する設定
$pdf->AddFont('ShipporiMincho','','ShipporiMincho-TTF-Regular.ttf',true);


// GETパラメータからカンマ区切りで配列として取得
// $names = explode(",", $_GET['names']);
$names = htmlentities($_GET['names'],ENT_QUOTES,"utf-8");
$names = explode("\r\n",$names);

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
  // $contents = explode(",", $_GET['contents']); GETパラメータからカンマ区切りで配列として取得し、変数$contentsに代入
  $contents = htmlentities($_GET['contents'],ENT_QUOTES,"utf-8"); // GETはそのまま扱うとセキュリティ上のリスクあるので、htmlentitiesを用いてエスケープする
  $contents = explode("\r\n",$contents); // 改行ごとに分解して配列として取得
  $count = 0; // ループ回数を数える
  $Y = $pdf->getY();

  foreach($contents as $content){
    $count++;
    if($count == 10){
      // $countが10になると2段目になる
      $pdf->setY($Y);
    }
    if($count >= 10){
      $pdf->setX(110);
    }
    $pdf->SetFont('ShipporiMincho','',25);
		$pdf->Cell(20,10,"({$count})");
		$pdf->SetFont('ShipporiMincho','',30);
		$pdf->Cell(80,10,$content);
		$pdf->Ln(25);
  }
}
