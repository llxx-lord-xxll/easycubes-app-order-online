<?php
function link_style($file='', $ver='') {
  if (!$file == '') {
    if ($ver == '') {
      echo "<link rel=\"stylesheet\" href=\"$file\">\n";
    } else if ( $ver == version ) {
      $f_Bytes = filesize($file);
      $f_KBytes = round($fsBytes / 1024, 3);
      $f_Date = date(filemtime($file));
      echo "<link rel=\"stylesheet\" href=\"".$GLOBALS['pluginuri']."$file?v=$f_Date"."_"."$f_Bytes\">\n";
    } else {
      echo "<link rel=\"stylesheet\" href=\"".$GLOBALS['pluginuri']."$file?v=$ver\">\n";
    }
  } else {
    echo "No \$file provided.";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Order Page Preview</title>

  <style>
    /*! sanitize.css v8.0.0 | CC0 License | github.com/csstools/sanitize.css */
    *,::before,::after{background-repeat:no-repeat;box-sizing:border-box}::before,::after{text-decoration:inherit;vertical-align:inherit}html{cursor:default;font-family:system-ui,-apple-system,Segoe UI,Roboto,Ubuntu,Cantarell,Noto Sans,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";line-height:1.15;-moz-tab-size:4;tab-size:4;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;word-break:break-word}body{margin:0}h1{font-size:2em;margin:0.67em 0}hr{height:0;overflow:visible}main{display:block}nav ol,nav ul{list-style:none}pre{font-family:Menlo,Consolas,Roboto Mono,Ubuntu Monospace,Noto Mono,Oxygen Mono,Liberation Mono,monospace;font-size:1em}a{background-color:transparent}abbr[title]{text-decoration:underline;text-decoration:underline dotted}b,strong{font-weight:bolder}code,kbd,samp{font-family:Menlo,Consolas,Roboto Mono,Ubuntu Monospace,Noto Mono,Oxygen Mono,Liberation Mono,monospace;font-size:1em}small{font-size:80%}::-moz-selection{background-color:#b3d4fc;color:#000;text-shadow:none}::selection{background-color:#b3d4fc;color:#000;text-shadow:none}audio,canvas,iframe,img,svg,video{vertical-align:middle}audio,video{display:inline-block}audio:not([controls]){display:none;height:0}img{border-style:none}svg:not([fill]){fill:currentColor}svg:not(:root){overflow:hidden}table{border-collapse:collapse}button,input,select,textarea{font-family:inherit;font-size:inherit;line-height:inherit}button,input,select{margin:0}button{overflow:visible;text-transform:none}button,[type="button"],[type="reset"],[type="submit"]{-webkit-appearance:button}fieldset{padding:0.35em 0.75em 0.625em}input{overflow:visible}legend{color:inherit;display:table;max-width:100%;white-space:normal}progress{display:inline-block;vertical-align:baseline}select{text-transform:none}textarea{margin:0;overflow:auto;resize:vertical}[type="checkbox"],[type="radio"]{padding:0}[type="search"]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}::-webkit-input-placeholder{color:inherit;opacity:0.54}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}::-moz-focus-inner{border-style:none;padding:0}:-moz-focusring{outline:1px dotted ButtonText}details{display:block}dialog{background-color:white;border:solid;color:black;display:block;height:-moz-fit-content;height:-webkit-fit-content;height:fit-content;left:0;margin:auto;padding:1em;position:absolute;right:0;width:-moz-fit-content;width:-webkit-fit-content;width:fit-content}dialog:not([open]){display:none}summary{display:list-item}canvas{display:inline-block}template{display:none}a,area,button,input,label,select,summary,textarea,[tabindex]{-ms-touch-action:manipulation;touch-action:manipulation}[hidden]{display:none}[aria-busy="true"]{cursor:progress}[aria-controls]{cursor:pointer}[aria-disabled="true"],[disabled]{cursor:not-allowed}[aria-hidden="false"][hidden]:not(:focus){clip:rect(0,0,0,0);display:inherit;position:absolute}
  </style>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Titillium+Web:200,400,600');
    :root {
      --brand--d1:#008eca;
      --brand--d2:#0084bf;
      --brand--d3:#007ab4;
      --brand--d4:#0070a8;
      --brand--d5:#00679d;
      --brand--d6:#005e93;
      --brand--d7:#005589;
      --brand--blue: #2699d6;
      --brand--l1:#4aa3db;
      --brand--l2:#65aee1;
      --brand--l3:#7cb9e6;
      --brand--l4:#90c5ec;
      --brand--l5:#a3d0f1;
      --brand--l6:#b6dcf6;
      --brand--l7:#c8e8fb;
      --brand--black: #3c3c3b;
      --brand--g1:#595958;
      --brand--g2:#737272;
      --brand--g3:#8c8b8b;
      --brand--g4:#a2a2a2;
      --brand--g5:#b9b9b8;
      --brand--g6:#cececd;
      --brand--g7:#e2e2e2;
      --brand--white: #f6f6f6;
    }
  </style>
  <!-- <link rel="stylesheet" href="css/normalize.css"> -->
  <?php
  link_style('css/bootstrap.min.css', '4.0');
  // link_style('css/bootstrap-theme.min.css', '3.37');
  link_style('css/order-page.theme.css', version);
  ?>
</head>

<body class="<?php echo $bodyClasses ?>">
