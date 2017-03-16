<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.0 Transitional//EN'>
<html>
<head>
<meta http-equiv=Content-Type content=text/html charset=UTF-8 />
<title><?php echo $dadosboleto['identificacao']; ?></title>
        <meta name="Generator" content="Projeto BoletoPHP - www.boletophp.com.br - Licença GPL" />
        <style type=text/css>
            <!--.cp 	{ font: bold 10px Arial; color: black}
            <!--.ti 	{ font: 9px Arial, Helvetica, sans-serif}
            <!--.ld 	{ font: bold 15px Arial; color: #000000}
            <!--.ct 	{ font: 9px "Arial Narrow"; color: #000033}
            <!--.cn 	{ font: 9px Arial; color: black }
            <!--.bc		{ font: bold 20px Arial; color: #000000 }
            <!--.ld2 	{ font: bold 12px Arial; color: #000000 }
            <!--.ctd 	{ background-color: #DBDBDB}
            <!-- table  { border-collapse: collapse; /* 'cellspacing' equivalent */}
            <!-- table td, table th {padding: 0; /* 'cellpadding' equivalent */}
            <!--.campo	{ font: bold 10px Arial, Helvetica; color: black}
            -->
        </style>
    </head>


  <body text=#000000 bgColor=#ffffff topMargin=0 rightMargin=0>

    <!-- PRIMEIRA PARTE-->

    <!--SEGUNDA PARTE-->

    <table border-collapse=collapse border-spacing=0  padding=0 width=300 border=0>
        <tr>
            <td class=cp width=150>
                <span class="campo"><img src="<?php echo $boleto->getImageBasePath() ?>logobancoob.jpg" width="140" height="28" border=0 /></span>
            </td>
            <td width=3 vertical-align=bottom><img height=22 src="<?php echo $boleto->getImageBasePath() ?>3.png" width=2 border=0 /></td>
            <td class=cp width=15 vertical-align=bottom>
                <div align=center><font class=bc><?php echo $dadosboleto['codigobanco'] ?></font></div>
            </td>
            <td width=3 vertical-align=bottom><img height=22 src="<?php echo $boleto->getImageBasePath() ?>3.png" width=2 border=0 /></td>
            <td class=ld align=right width=290 vertical-align=bottom>
                <span class=ld>
                    <span class="campotitulo">
                        <?php echo $dadosboleto['linha_digitavel'] ?>
                    </span>
                </span>
            </td>
        </tr>
        <tbody>
            <tr>
                <td colspan=5><img height=2 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=666 border=0 /></td>
            </tr>
        </tbody>
    </table>

    </body>
</html>
