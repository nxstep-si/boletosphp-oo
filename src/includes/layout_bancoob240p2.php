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
            <!--.rotate90 {
                    -webkit-transform: rotate(90deg);
                    -moz-transform: rotate(90deg);
                    -o-transform: rotate(90deg);
                    -ms-transform: rotate(90deg);
                    transform: rotate(90deg);
                }
            -->
        </style>
    </head>

    <body text=#000000 bgColor=#ffffff topMargin=0 rightMargin=0>

        <table border-collapse=collapse border-spacing=0  padding=0 width=666 border=0>
            <tbody>
                <tr>
                    <td class=ct width=666><img height=1 src="<?php echo $boleto->getImageBasePath() ?>6.png" width=665 border=0></td>
                </tr>
            </tbody>
        </table>

        <table width=666 cellspacing=5 padding=0 border=0><tr><td width=41></td></tr></table>
        <br />

        <table border-collapse=collapse border-spacing=0  padding=0 width=134 border=0>
            <tr>
                <td class=cp width=134>
                    <span class="campo"><img src="<?php echo $boleto->getImageBasePath() ?>logobancoob.jpg" width="120" height="24" border=0 /></span>
                </td>
            </tr>
            <tbody>
                <tr>
                   <td class=ct width=134>
                      <div align=right><b class=cp>Pagador</b></div>
                   </td>
                </tr>
            </tbody>
        </table>


        <table border-collapse=collapse border-spacing=0  padding=0 width=134 border=0>
            <tbody>
                <tr>
                  <td vertical-align=top width=134 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=134 border=0></td>
                </tr>
            </tbody>
        </table>

        <table border-collapse=collapse border-spacing=0  width=134 padding=0 border=0>
            <tbody>
                <tr>
                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=ct vertical-align=top width=57 height=13>Parcela/Plano</td>
                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=ct vertical-align=top width=57 height=13>Vencimento</td>
                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                </tr>
                <tr>
                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top width=57 height=12><span class="campo"><?php echo $dadosboleto['numero_parcela'].'/'.$dadosboleto['total_parcelas'] ?></span></td>
                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top width=57 height=12><span class="campo"><?php echo $dadosboleto['data_vencimento']; ?></span></td>
                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                </tr>
                <tr>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=57 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=60 border=0></td>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=57 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=60 border=0></td>
                    <td vertical-align=top width=7 height=1><img height=1 align=left src="<?php echo $boleto->getImageBasePath() ?>2.png" width=1 border=0></td>
                </tr>

            </tbody>
       </table>

       <table border-collapse=collapse width=134 border-spacing=0 padding=0 border=0>
           <tbody>
               <tr>
                   <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                   <td class=ct vertical-align=top width=127 height=13> Coop Contr/Cód. Beneficiário</td>
                   <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
               </tr>
               <tr>
                   <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                   <td class=cp vertical-align=top width=127 align=right height=12><span class="campo"><?php echo $dadosboleto['agencia'].'/'.$dadosboleto['conta']; ?></span></td>
                   <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
               </tr>
               <tr>
                   <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                   <td vertical-align=top width=127 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=127 border=0></td>
                   <td vertical-align=top width=7 height=1><img height=1 align=left src="<?php echo $boleto->getImageBasePath() ?>2.png" width=1 border=0></td>
               </tr>
           </tbody>
      </table>

      <table border-collapse=collapse border-spacing=0  width=134 padding=0 border=0>
          <tbody>
              <tr>
                  <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                  <td class=ct vertical-align=top width=57 height=13>Espécie</td>
                  <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                  <td class=ct vertical-align=top width=57 height=13>Quantidade</td>
                  <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
              </tr>
              <tr>
                  <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                  <td class=cp vertical-align=top width=57 height=12><span class="campo"><?php echo $dadosboleto['especie']?></span></td>
                  <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                  <td class=cp vertical-align=top width=57 height=12><span class="campo"><?php echo $dadosboleto['quantidade']; ?></span></td>
                  <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
              </tr>
              <tr>
                  <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                  <td vertical-align=top width=57 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=60 border=0></td>
                  <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                  <td vertical-align=top width=57 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=60 border=0></td>
                  <td vertical-align=top width=7 height=1><img height=1 align=left src="<?php echo $boleto->getImageBasePath() ?>2.png" width=1 border=0></td>
              </tr>

          </tbody>
     </table>

     <table border-collapse=collapse width=134 border-spacing=0 padding=0 border=0>
         <tbody>
             <tr>
                 <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                 <td class=ct vertical-align=top width=127 height=13> N. do Documento</td>
                 <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
             </tr>
             <tr>
                 <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                 <td class=cp vertical-align=top width=127 align=right height=12><span class="campo"><?php echo $dadosboleto['numero_documento']?></span></td>
                 <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
             </tr>
             <tr>
                 <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                 <td vertical-align=top width=127 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=127 border=0></td>
                 <td vertical-align=top width=7 height=1><img height=1 align=left src="<?php echo $boleto->getImageBasePath() ?>2.png" width=1 border=0></td>
             </tr>
         </tbody>
    </table>
    <table border-collapse=collapse width=134 border-spacing=0 padding=0 border=0>
        <tbody>
            <tr>
                <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                <td class=ct vertical-align=top width=127 height=13>Nosso Número</td>
                <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
            </tr>
            <tr>
                <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                <td class=cp vertical-align=top width=127 align=right height=12><span class="campo"><?php echo $dadosboleto['nosso_numero']?></span></td>
                <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
            </tr>
            <tr>
                <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                <td vertical-align=top width=127 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=127 border=0></td>
                <td vertical-align=top width=7 height=1><img height=1 align=left src="<?php echo $boleto->getImageBasePath() ?>2.png" width=1 border=0></td>
            </tr>
        </tbody>
   </table>

   <table border-collapse=collapse width=134 border-spacing=0 padding=0 border=0>
       <tbody>
           <tr>
               <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
               <td class=ct vertical-align=top width=127 height=13>Valor do Documento</td>
               <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
           </tr>
           <tr>
               <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
               <td class=cp vertical-align=top width=127 align=right height=12><span class="campo"><?php echo $dadosboleto['valor_boleto']?></span></td>
               <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
           </tr>
           <tr>
               <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
               <td vertical-align=top width=127 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=127 border=0></td>
               <td vertical-align=top width=7 height=1><img height=1 align=left src="<?php echo $boleto->getImageBasePath() ?>2.png" width=1 border=0></td>
           </tr>
       </tbody>
  </table>

  <table border-collapse=collapse width=134 border-spacing=0 padding=0 border=0>
      <tbody>
          <tr>
              <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
              <td class=ct vertical-align=top width=127 height=13>(-) Desconto/Abatimento</td>
              <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
          </tr>
          <tr>
              <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
              <td class=cp vertical-align=top width=127 align=right height=12><span class="campo"><?php echo $dadosboleto['valor_desconto_1']?></span></td>
              <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
          </tr>
          <tr>
              <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
              <td vertical-align=top width=127 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=127 border=0></td>
              <td vertical-align=top width=7 height=1><img height=1 align=left src="<?php echo $boleto->getImageBasePath() ?>2.png" width=1 border=0></td>
          </tr>
      </tbody>
 </table>

 <table border-collapse=collapse width=134 border-spacing=0 padding=0 border=0>
     <tbody>
         <tr>
             <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
             <td class=ct vertical-align=top width=127 height=13>(-) Outras Deduções</td>
             <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
         </tr>
         <tr>
             <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
             <td class=cp vertical-align=top width=127 align=right height=12><span class="campo"><?php echo $dadosboleto['valor_desconto_2']?></span></td>
             <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
         </tr>
         <tr>
             <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
             <td vertical-align=top width=127 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=127 border=0></td>
             <td vertical-align=top width=7 height=1><img height=1 align=left src="<?php echo $boleto->getImageBasePath() ?>2.png" width=1 border=0></td>
         </tr>
     </tbody>
</table>

<table border-collapse=collapse width=134 border-spacing=0 padding=0 border=0>
    <tbody>
        <tr>
            <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
            <td class=ct vertical-align=top width=127 height=13>(+) Mora/Multa</td>
            <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
        </tr>
        <tr>
            <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
            <td class=cp vertical-align=top width=127 align=right height=12><span class="campo"><?php echo $dadosboleto['valor_multa']?></span></td>
            <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
        </tr>
        <tr>
            <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
            <td vertical-align=top width=127 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=127 border=0></td>
            <td vertical-align=top width=7 height=1><img height=1 align=left src="<?php echo $boleto->getImageBasePath() ?>2.png" width=1 border=0></td>
        </tr>
    </tbody>
</table>

<table border-collapse=collapse width=134 border-spacing=0 padding=0 border=0>
    <tbody>
        <tr>
            <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
            <td class=ct vertical-align=top width=127 height=13>(+) Outros Acréscimos</td>
            <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
        </tr>
        <tr>
            <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
            <td class=cp vertical-align=top width=127 align=right height=12><span class="campo"><?php echo 'qual variável?'?></span></td>
            <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
        </tr>
        <tr>
            <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
            <td vertical-align=top width=127 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=127 border=0></td>
            <td vertical-align=top width=7 height=1><img height=1 align=left src="<?php echo $boleto->getImageBasePath() ?>2.png" width=1 border=0></td>
        </tr>
    </tbody>
</table>

<table border-collapse=collapse width=134 border-spacing=0 padding=0 border=0>
    <tbody>
        <tr>
            <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
            <td class=ct vertical-align=top width=127 height=13>(=) Valor Cobrado</td>
            <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
        </tr>
        <tr>
            <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
            <td class=cp vertical-align=top width=127 align=right height=12><span class="campo"><?php echo 'qual variável?'?></span></td>
            <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
        </tr>
        <tr>
            <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
            <td vertical-align=top width=127 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=127 border=0></td>
            <td vertical-align=top width=7 height=1><img height=1 align=left src="<?php echo $boleto->getImageBasePath() ?>2.png" width=1 border=0></td>
        </tr>
    </tbody>
</table>

<br />

<table border-collapse=collapse width=134 border-spacing=0 padding=0 border=0>
    <tbody>
        <tr>
            <td class=ct align=center width=127 height=13>Autenticação Mecânica</td>
        </tr>
    </tbody>
</table>


<br />
<br />
<br />
<br />
--SEGUNDA PARTE--
<br />
<br />
<br />
<br />

<table border-collapse=collapse border-spacing=0  padding=0 width=532 border=0>
      <tbody>
        <tr>
          <td class=cp width=130>
            <span class="campo"><img src="<?php echo $boleto->getImageBasePath() ?>logobancoob.jpg" width="120" height="24" border=0 /></span>
          </td>
          <td class=ct width=7>
            <img src="<?php echo $boleto->getImageBasePath() ?>3.png" width="2" height="15" border=0 />
          </td>
          <td class=cpt width=7 vertical-align=bottom>
              <div align=center><font class=bc><?php echo $dadosboleto['codigobanco'] ?></font></div>
          </td>
          <td class=ct width=7>
            <img src="<?php echo $boleto->getImageBasePath() ?>3.png" width="2" height="15" border=0 />
          </td>
          <td class=ct width=381>
            <span class=campo><?php echo $dadosboleto['linha_digitavel'] ?></span>
          </td>
        </tr>
      </tbody>
</table>

<table border-collapse=collapse border-spacing=0  padding=0 width=532 border=0>
      <tbody>
        <tr>
          <td class=cp width=130>
            <span class="campo"><img src="<?php echo $boleto->getImageBasePath() ?>logobancoob.jpg" width="120" height="24" border=0 /></span>
          </td>
          <td class=ct width=7>
            <img src="<?php echo $boleto->getImageBasePath() ?>3.png" width="2" height="15" border=0 />
          </td>
          <td class=cpt width=7 vertical-align=bottom>
              <div align=center><font class=bc><?php echo $dadosboleto['codigobanco'] ?></font></div>
          </td>
          <td class=ct width=7>
            <img src="<?php echo $boleto->getImageBasePath() ?>3.png" width="2" height="15" border=0 />
          </td>
          <td class=ct width=381>
            <span class=campo><?php echo $dadosboleto['linha_digitavel'] ?></span>
          </td>
        </tr>
      </tbody>
</table>

    </body>
</html>
