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
        <table border-collapse=collapse border-spacing=0  padding=0 border=0>
            <tbody>
                <tr>
                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=ct vertical-align=top colspan=1 height=13>Nº documento</td>
                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=ct vertical-align=top width=7 height=13>Contrato</td>
                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=ct vertical-align=top width=132 height=13>CPF/CNPJ</td>
                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=ct vertical-align=top width=134 height=13>Vencimento</td>
                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=ct vertical-align=top width=180 height=13>Valor documento</td>
                </tr>
                <tr>
                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top colspan=1 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto['numero_documento'] ?>
                        </span>
                    </td>
                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top width=7 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto['numero_documento'] ?>
                        </span>
                    </td>
                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top width=132 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto['cpf_cnpj'] ?>
                        </span>
                    </td>
                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top width=134 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto['data_vencimento'] ?>
                        </span>
                    </td>
                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top align=right width=180 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto['valor_boleto'] ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=113 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=113 border=0></td>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=72 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=72 border=0></td>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=132 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=132 border=0></td>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=134 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=134 border=0></td>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=180 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=180 border=0></td>
                </tr>
            </tbody>
        </table>
        <table border-collapse=collapse border-spacing=0  padding=0 border=0>
            <tbody>
                <tr>
                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=ct vertical-align=top width=113 height=13>(-)Desconto</td>
                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=ct vertical-align=top width=112 height=13>(-)Outras deduções</td>
                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=ct vertical-align=top width=113 height=13>(+)Mora / Multa</td>
                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=ct vertical-align=top width=113 height=13>(+)Outros acréscimos</td>
                    <td class="ct ctd" vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class="ct ctd" vertical-align=top width=180 height=13>(=)Valor cobrado</td>
                </tr>
                <tr>
                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top colspan=1 height=12>
                    	<span class="campo">
                            <?php echo $dadosboleto['valor_desconto_1'] ?>
                        </span>
                    </td>
                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top width=112 height=12>
                    	<span class="campo">
                            <?php echo $dadosboleto['valor_desconto_2'] ?>
                        </span>
                    </td>
                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top width=113 height=12>
                    	<span class="campo">
                            <?php echo $dadosboleto['valor_multa'] ?>
                        </span>
                    </td>
                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top width=113 height=12>
                    	<span class="campo">
                            <!-- TODO inserir lógica de calculo  -->
                        </span>
                    </td>
                    <td class="cp ctd" vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class="cp ctd" vertical-align=top align=right width=180 height=12>
                    	<span class="campo">
                        </span>
                    </td>
                </tr>
                <tr>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath()?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=113 height=1><img height=1 src="<?php echo $boleto->getImageBasePath()?>2.png" width=113 border=0></td>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath()?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=112 height=1><img height=1 src="<?php echo $boleto->getImageBasePath()?>2.png" width=112 border=0></td>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath()?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=113 height=1><img height=1 src="<?php echo $boleto->getImageBasePath()?>2.png" width=113 border=0></td>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath()?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=113 height=1><img height=1 src="<?php echo $boleto->getImageBasePath()?>2.png" width=113 border=0></td>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath()?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=180 height=1><img height=1 src="<?php echo $boleto->getImageBasePath()?>2.png" width=180 border=0></td>
                </tr>
            </tbody>
        </table>
        <table border-collapse=collapse border-spacing=0  padding=0 border=0>
            <tbody>
                <tr>
                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath()?>1.png" width=1 border=0></td>
                    <td class=ct vertical-align=top width=659 height=13>Sacado</td>
                </tr>
                <tr>
                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath()?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top width=659 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto['sacado'] ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath()?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=659 height=1><img height=1 src="<?php echo $boleto->getImageBasePath()?>2.png" width=659 border=0></td>
                </tr>
            </tbody>
        </table>
        <table border-collapse=collapse border-spacing=0  padding=0 border=0>
            <tbody>
                <tr>
                    <td class=ct  width=7 height=12></td>
                    <td class=ct  width=564 >Demonstrativo</td>
                    <td class=ct  width=7 height=12></td>
                    <td class=ct  width=88 >Autenticação mecânica</td>
                </tr>
                <tr>
                    <td width=7 ></td>
                    <td class=cp width=564 >
                        <span class="campo">
                            <?php echo $dadosboleto['demonstrativo1'] ?><br />
                            <?php echo $dadosboleto['demonstrativo2'] ?><br />
                            <?php echo $dadosboleto['demonstrativo3'] ?><br />
                        </span>
                    </td>
                    <td width=7 ></td>
                    <td width=88 ></td>
                </tr>
            </tbody>
        </table>
        <table border-collapse=collapse border-spacing=0  padding=0 width=666 border=0>
            <tbody>
                <tr>
                    <td width=7></td>
                    <td width=500 class=cp><br /><br /><br /></td>
                    <td width=159></td>
                </tr>
            </tbody>
        </table>
        <table border-collapse=collapse border-spacing=0  padding=0 width=666 border=0>
            <tr>
                <td class=ct width=666></td>
            </tr>
            <tbody>
                <tr>
                    <td class=ct width=666><div align=right>Corte na linha pontilhada</div></td>
                </tr>
                <tr>
                    <td class=ct width=666><img height=1 src="<?php echo $boleto->getImageBasePath() ?>6.png" width=665 border=0></td>
                </tr>
            </tbody>
        </table>
        <br />
        <table border-collapse=collapse border-spacing=0  padding=0 width=666 border=0>
            <tr>
                <td class=cp width=150>
                    <span class="campo"><img src="<?php echo $boleto->getImageBasePath() ?>logobancoob.jpg" width="140" height="28" border=0 /></span>
                </td>
                <td width=3 vertical-align=bottom><img height=22 src="<?php echo $boleto->getImageBasePath() ?>3.png" width=2 border=0></td>
                <td class=cpt width=58 vertical-align=bottom>
                    <div align=center><font class=bc><?php echo $dadosboleto['codigo_banco_com_dv'] ?></font></div>
                </td>
                <td width=3 vertical-align=bottom><img height=22 src="<?php echo $boleto->getImageBasePath() ?>3.png" width=2 border=0></td>
                <td class=ld align=right width=453 vertical-align=bottom>
                    <span class=ld>
                        <span class="campotitulo">
                            <?php echo $dadosboleto['linha_digitavel'] ?>
                        </span>
                    </span>
                </td>
            </tr>
            <tbody>
                <tr>
                    <td colspan=5><img height=2 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=666 border=0></td>
                </tr>
            </tbody>
        </table>
        <table border-collapse=collapse border-spacing=0  padding=0 border=0>
            <tbody>
                <tr>
                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=ct vertical-align=top width=472 height=13>Local de pagamento</td>
                    <td class="ct ctd" vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class="ct ctd" vertical-align=top width=180 height=13>Vencimento</td>
                </tr>
                <tr>
                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top width=472 height=12>Pagável em qualquer Banco até o vencimento</td>
                    <td class="cp ctd" vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class="cp ctd" vertical-align=top align=right width=180 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto['data_vencimento'] ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=472 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=472 border=0></td>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=180 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=180 border=0></td>
                </tr>
            </tbody>
        </table>
        <table border-collapse=collapse border-spacing=0  padding=0 border=0>
            <tbody>
                <tr>
                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=ct vertical-align=top width=472 height=13>Cedente</td>
                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=ct vertical-align=top width=180 height=13>Agência/Código cedente</td>
                </tr>
                <tr>
                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top width=472 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto['cedente'] ?>
                        </span>
                    </td>
                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top align=right width=180 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto['agencia_codigo'] ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=472 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=472 border=0></td>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=180 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=180 border=0></td>
                </tr>
            </tbody>
        </table>
        <table border-collapse=collapse border-spacing=0  padding=0 border=0>
            <tbody>
                <tr>
                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=ct vertical-align=top width=113 height=13>Data do documento</td>
                    <td class=ct vertical-align=top width=7 height=13> <img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=ct vertical-align=top width=153 height=13>Nº documento</td>
                    <td class=ct vertical-align=top width=7 height=13> <img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=ct vertical-align=top width=62 height=13>Espécie doc.</td>
                    <td class=ct vertical-align=top width=7 height=13> <img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=ct vertical-align=top width=34 height=13>Aceite</td>
                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=ct vertical-align=top width=82 height=13>Data process.</td>
                    <td class=ct vertical-align=top width=7 height=13> <img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=ct vertical-align=top width=180 height=13>Nosso número</td>
                </tr>
                <tr>
                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top  width=113 height=12>
                        <div align=left>
                            <span class="campo">
                                <?php echo $dadosboleto['data_documento'] ?>
                            </span>
                        </div>
                    </td>
                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top width=153 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto['numero_documento'] ?>
                        </span>
                    </td>
                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top  width=62 height=12>
                        <div align=left>
                            <span class="campo">
                                <?php echo $dadosboleto['especie_doc'] ?>
                            </span>
                        </div>
                    </td>
                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top  width=34 height=12>
                        <div align=left>
                            <span class="campo">
                                <?php echo $dadosboleto['aceite'] ?>
                            </span>
                        </div>
                    </td>
                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top  width=82 height=12>
                        <div align=left>
                            <span class="campo">
                                <?php echo $dadosboleto['data_processamento'] ?>
                            </span>
                        </div>
                    </td>
                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top align=right width=180 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto['nosso_numero'] ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=113 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=113 border=0></td>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=153 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=153 border=0></td>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=62 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=62 border=0></td>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=34 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=34 border=0></td>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=82 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=82 border=0></td>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=180 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=180 border=0></td>
                </tr>
            </tbody>
        </table>
        <table border-collapse=collapse border-spacing=0  padding=0 border=0>
            <tbody>
                <tr>
                    <td class="ct ctd" vertical-align=top width=7 height=13> <img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class="ct ctd" vertical-align=top COLSPAN="3" height=13>Uso do banco</td>
                    <td class=ct vertical-align=top height=13 width=7> <img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=ct vertical-align=top width=83 height=13>Carteira</td>
                    <td class=ct vertical-align=top height=13 width=7><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=ct vertical-align=top width=53 height=13>Espécie</td>
                    <td class=ct vertical-align=top height=13 width=7><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=ct vertical-align=top width=123 height=13>Quantidade</td>
                    <td class=ct vertical-align=top height=13 width=7><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=ct vertical-align=top width=72 height=13>(x) Valor</td>
                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=ct vertical-align=top width=180 height=13>(=)Valor documento</td>
                </tr>
                <tr>
                    <td class="cp ctd" vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class="cp ctd"  vertical-align=top class=cp height=12 COLSPAN="3"><div align=left></div></td>
                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top  width=83>
                        <div align=left>
                            <span class="campo"><?php echo $dadosboleto['carteira'] ?></span>
                        </div>
                    </td>
                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top  width=53>
                        <div align=left>
                            <span class="campo"><?php echo $dadosboleto['especie'] ?></span>
                        </div>
                    </td>
                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top  width=123>
                        <span class="campo">
                            <?php echo $dadosboleto['quantidade'] ?>
                        </span>
                    </td>
                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top  width=72>
                        <span class="campo">
                            <?php echo $dadosboleto['valor_unitario'] ?>
                        </span>
                    </td>
                    <td class=cp vertical-align=top width=7 height=12> <img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top align=right width=180 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto['valor_boleto'] ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td vertical-align=top width=7 height=1> <img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=75 border=0></td>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=31 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=31 border=0></td>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=83 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=83 border=0></td>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=53 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=53 border=0></td>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=123 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=123 border=0></td>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=72 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=72 border=0></td>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=180 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=180 border=0></td>
                </tr>
            </tbody>
        </table>
        <table border-collapse=collapse border-spacing=0  padding=0 width=666 border=0>
            <tbody>
                <tr>
                    <td align=right width=10>
                        <table border-collapse=collapse border-spacing=0  padding=0 border=0 align=left>
                            <tbody>
                                <tr>
                                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                                </tr>
                                <tr>
                                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                                </tr>
                                <tr>
                                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=1 border=0></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td vertical-align=top width=468 rowspan=5 colspan=7>
                        <font class=ct>Instruções(Texto de responsabilidade do cedente)</font>
                        <br />
                        <span class=cp>
                            <font class=campo>
                            <?php echo $dadosboleto['instrucoes1']; ?><br />
                            <?php echo $dadosboleto['instrucoes2']; ?><br />
                            <?php echo $dadosboleto['instrucoes3']; ?><br />
                            <?php echo $dadosboleto['instrucoes4']; ?>
                            </font>
                            <br />
                        </span>
                    </td>
                    <td align=right width=188>
                        <table border-collapse=collapse border-spacing=0  padding=0 border=0>
                            <tbody>
                                <tr>
                                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                                    <td class=ct vertical-align=top width=180 height=13>(-)Desconto / Abatimentos</td>
                                </tr>
                                <tr>
                                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                                    <td class=cp vertical-align=top align=right width=180 height=12>
                                    	<span class="campo">
                            				<?php echo $dadosboleto['valor_desconto_1'] ?>
                        				</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                                    <td vertical-align=top width=180 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=180 border=0></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align=right width=10>
                        <table border-collapse=collapse border-spacing=0  padding=0 border=0 align=left>
                            <tbody>
                                <tr>
                                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                                </tr>
                                <tr>
                                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                                </tr>
                                <tr>
                                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=1 border=0></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td align=right width=188>
                        <table border-collapse=collapse border-spacing=0  padding=0 border=0>
                            <tbody>
                                <tr>
                                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                                    <td class=ct vertical-align=top width=180 height=13>(-)Outras deduções</td>
                                </tr>
                                <tr>
                                    <td class=cp vertical-align=top width=7 height=12> <img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                                    <td class=cp vertical-align=top align=right width=180 height=12>
                                    	<span class="campo">
                            				<?php echo $dadosboleto['valor_desconto_2'] ?>
                        				</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                                    <td vertical-align=top width=180 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=180 border=0></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align=right width=10>
                        <table border-collapse=collapse border-spacing=0  padding=0 border=0 align=left>
                            <tbody>
                                <tr>
                                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                                </tr>
                                <tr>
                                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                                </tr>
                                <tr>
                                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=1 border=0></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td align=right width=188>
                        <table border-collapse=collapse border-spacing=0  padding=0 border=0>
                            <tbody>
                                <tr>
                                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                                    <td class=ct vertical-align=top width=180 height=13>(+)Mora / Multa</td>
                                </tr>
                                <tr>
                                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                                    <td class=cp vertical-align=top align=right width=180 height=12>
                                    	<span class="campo">
                            				<?php echo $dadosboleto['valor_multa'] ?>
                        				</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td vertical-align=top width=7 height=1> <img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                                    <td vertical-align=top width=180 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=180 border=0></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align=right width=10>
                        <table border-collapse=collapse border-spacing=0  padding=0 border=0 align=left>
                            <tbody>
                                <tr>
                                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                                </tr>
                                <tr>
                                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                                </tr>
                                <tr>
                                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=1 border=0></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td align=right width=188>
                        <table border-collapse=collapse border-spacing=0  padding=0 border=0>
                            <tbody>
                                <tr>
                                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                                    <td class=ct vertical-align=top width=180 height=13>(+)Outros acréscimos</td>
                                </tr>
                                <tr>
                                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                                    <td class=cp vertical-align=top align=right width=180 height=12></td>
                                </tr>
                                <tr>
                                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                                    <td vertical-align=top width=180 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=180 border=0></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td align=right width=10>
                        <table border-collapse=collapse border-spacing=0  padding=0 border=0 align=left>
                            <tbody>
                                <tr>
                                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                                </tr>
                                <tr>
                                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td align=right width=188>
                        <table border-collapse=collapse border-spacing=0  padding=0 border=0>
                            <tbody>
                                <tr>
                                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                                    <td class=ct vertical-align=top width=180 height=13>(=)Valor cobrado</td>
                                </tr>
                                <tr>
                                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                                    <td class=cp vertical-align=top align=right width=180 height=12></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <table border-collapse=collapse border-spacing=0  padding=0 width=666 border=0>
            <tbody>
                <tr>
                    <td vertical-align=top width=666 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=666 border=0></td>
                </tr>
            </tbody>
        </table>
        <table border-collapse=collapse border-spacing=0  padding=0 border=0>
            <tbody>
                <tr>
                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=ct vertical-align=top width=659 height=13>Sacado</td>
                </tr>
                <tr>
                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top width=659 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto['sacado'] ?>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
        <table border-collapse=collapse border-spacing=0  padding=0 border=0>
            <tbody>
                <tr>
                    <td class=cp vertical-align=top width=7 height=12><img height=12 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top width=659 height=12>
                        <span class="campo">
                            <?php echo $dadosboleto['endereco1'] ?>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
        <table border-collapse=collapse border-spacing=0 padding=0 border=0>
            <tbody>
                <tr>
                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=cp vertical-align=top width=472 height=13>
                        <span class="campo">
                            <?php echo $dadosboleto['endereco2'] ?>
                        </span>
                    </td>
                </tr>
				<tr>
                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=ct  width=409 >Sacador/Avalista: <?php echo $dadosboleto['nome_avalista'] ?> </td>
                    <td class=ct vertical-align=top width=7 height=13><img height=13 src="<?php echo $boleto->getImageBasePath() ?>1.png" width=1 border=0></td>
                    <td class=ct vertical-align=top width=180 height=13>Cód. baixa</td>
                </tr>
                <tr>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=472 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=472 border=0></td>
                    <td vertical-align=top width=7 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=7 border=0></td>
                    <td vertical-align=top width=180 height=1><img height=1 src="<?php echo $boleto->getImageBasePath() ?>2.png" width=180 border=0></td>
                </tr>
            </tbody>
        </table>
        <table border-collapse=collapse border-spacing=0  padding=0 border=0 width=666>
            <tbody>
                <tr>
                    <td class=ct  width=7 height=12></td>
                    <td class=ct  width=250 >
                        <div align=right>Autenticação mecânica - <b class=cp>Ficha de Compensação</b></div>
                    </td>
                </tr>
                <tr>
                    <td class=ct  colspan=4 ></td>
                </tr>
            </tbody>
        </table>
        <table border-collapse=collapse border-spacing=0  padding=0 width=666 border=0>
            <tbody>
                <tr>
                    <td vertical-align=bottom align=left height=50>
                        <?php echo self::fbarcode($dadosboleto['codigo_barras'], $boleto->getImageBasePath()); ?>
                    </td>
                </tr>
            </tbody>
        </table>
        <table border-collapse=collapse border-spacing=0  padding=0 width=666 border=0>
            <tr>
                <td class=ct width=666></td>
            </tr>
            <tbody>
                <tr>
                    <td class=ct width=666>
                        <div align=right>Corte na linha pontilhada</div>
                    </td>
                </tr>
                <tr>
                    <td class=ct width=666><img height=1 src="<?php echo $boleto->getImageBasePath() ?>6.png" width=665 border=0></td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
