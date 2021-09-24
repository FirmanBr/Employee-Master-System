<?php
    ob_start();
    include(dirname(__FILE__).'/editsummary.php');
 
    $content = ob_get_clean();
    require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
    try
    {
        $html2pdf = new HTML2PDF('P', 'A4', 'en');
        $html2pdf->setTestTdInOnePage(false);
        $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
        $html2pdf->Output('listemployee.pdf');
    }
    catch(HTML2PDF_exception $e) {
        echo $e;
        exit;
    }
?>