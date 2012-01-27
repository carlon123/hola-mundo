<?php
require_once('../Connections/iuces.php');
mysql_select_db($database_iuces, $iuces);
function fecha1($fec, $tipo)
{
$dia=substr($fec,8,2);
$mes=substr($fec,5,2);
$ano=substr($fec,0,4);
$fecha=array('Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');

    for($i=0;$i<=11;$i++)
       if (($i==($mes-1))&&($tipo=='F')) $mess1=$dia." de ".$fecha[$i]." de ".$ano;
	   else if(($i==($mes-1))&&($tipo=='E')) $mess1= $fecha[$i]."  ".$ano;

return $mess1;	
}
function formato($puntero, $limit1)
{
$raux=$puntero;
if(mysql_result($raux,$limit1,"imaeve")!="")
{
if(substr(mysql_result($raux,$limit1,"imaeve"), -3)=="swf")
{?>
<div class="recuadrofoto"  width="148" height="82">
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0" width="148" height="82">
    <param name="movie" value="imaeve/<?php echo mysql_result($raux,$limit1,"imaeve") ?>" />
    <param name="quality" value="high" />
    <embed src="ima/swf/<?php echo mysql_result($raux,$limit1,"imaeve") ?>" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="148" height="82"></embed>
  </object>
</div>
<?php
}
else
{
  echo "<img src=\"ima/jpg/".mysql_result($raux,$limit1,"imaeve")."\" border=\"0\" width=\"148\" height=\"82\" class=\"recuadrofoto\">";
}// de si es sw o gif o jpg
}//de si hay imagene3s
else echo "<img src=\"ima/jpg/noimagen.jpg\" width=\"148\" heigth=\"82\" border=\"0\" class=\"recuadrofoto\">";
}//fin funcion formato
########################################################################################################
 include("../noticias.php");
 include("../clases/paginator.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>Instituci&oacute;n Universitaria CESMAG</TITLE>
<META content="Institución Universitaria CESMAG. Arquitectura, Derecho, Diseño, Ingeniería, Preescolar, Educación Física" name=description>
<META 
content="Institución Universitaria CESMAG, Facultad de Arquitectura, Facultad de Derecho, Facultad de Diseño, Facultad de Ingeniería, Estudios Individualizados, Colombian University" 
name=Keywords>
<META content=index,follow name=robots>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<META content="Institución Universitaria CESMAG" name=author>
<META content=Global name=Distribution>
<META content="(c) 2010 - Institución Universitaria CESMAG" name=Copyright>
<META content=Never name=Expires>
<META content=General name=Rating>
<META content="Web Page" name=doc-type>
<META content="Institución Universitaria CESMAG" name=owner>
<META http-equiv=Content-Language content=es>
<LINK href="../iupag/estilos.css" type=text/css rel=stylesheet>
<LINK href="../scripts_iu/ja-slideshow.css" type=text/css rel=stylesheet>
<SCRIPT src="../scripts_iu/mootools.js" type=text/javascript></SCRIPT>
<link rel="stylesheet" type="text/css" href="../scripts_iu/slideshow.css" media="screen">

<!-- ************* -->
<script src="../SpryAssets/SpryCollapsiblePanel.js" type="text/javascript"></script>
<script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
<link href="../SpryAssets/SpryCollapsiblePanel.css" rel="stylesheet" type="text/css">
<!-- ************* -->

<style type="text/css">
a {
	color: #404040;
}
a:hover {
	text-decoration: none;
}
code {
	color: #404040;
	font: normal 10px Monaco, monospace;
}
em {
	color: #808080;
	font-style: normal;
}
h1 {
	color: #000;
	font: normal 12px/16px Arial, sans-serif;
	padding: 0 20px 16px;
	text-transform: lowercase;
}
h1:before {
	content: '.';
}
p {
	color: #404040;
	font: normal 12px/16px Arial, sans-serif;
	padding: 0 20px 16px;
}
</style>
<script type="text/javascript" src="../scripts_iu/slideshow.js"></script>
<script type="text/javascript">		
	//<![CDATA[
	  window.addEvent('domready', function(){
	    var data = {
		  'convocatoria.jpg': { caption: '' }
		  '': { caption: '' }
		   
	    };
	    var myShow = new Slideshow('show', data, { captions: true, controller: true, height: 184, hu: 'ima/jpg/', width: 539 });
	  });
	//]]>
	</script>
<STYLE type=text/css>
BODY {
	MARGIN: 0px;
	BACKGROUND-COLOR: #012f5c
}
.style3 {
	COLOR: #666666
}
.Estilo1 {
	FONT-SIZE: 10px;
	COLOR: #656262;
	FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif;
	TEXT-DECORATION: none
}
</STYLE>
<SCRIPT src="../iupag/AC_RunActiveContent.js" 
type=text/javascript></SCRIPT>
<script type="text/javascript" src="../scripts_iu/stmenu.js"></script>
<script src="../SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<META content="MSHTML 6.00.2900.2180" name=GENERATOR>
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
window.addEvent("domready", function(){
TabbedPanels1.showPanel(<?php if(!empty($HTTP_GET_VARS['id'])){echo $HTTP_GET_VARS['id'];}else{ echo '0';}?>);
});
</script>
<link href="../SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
</HEAD>
<BODY onLoad="MM_preloadImages('../iupag/btn_home_a.jpg','../iupag/btn_informa_a.jpg','../iupag/btn_intranet_a.jpg','../iupag/ico_home.gif','../iupag/ico_solicitud.gif','../iupag/ico_ins_linea.gif')">
<DIV id=obCenter align=center>
  <TABLE id=obLayout cellSpacing=0 align=center border=0>
    <TBODY>      <TR>
        <TD background="../iupag/shl_1.png" rowspan="2" width="30" align="right" valign="top"><table border="0" width="20">
            <tr>
              <td height="120"><IMG height=1 alt="" src="../iupag/spacer.gif" width="13"></td>
            </tr>
            <tr>
              <td align="right"><a href=""><IMG src="../iupag/ico_blog_2.png" width="31" height="74" onMouseMove="this.src='iupag/ico_blog_1.png';" 
      onmouseout="this.src='iupag/ico_blog_2.png'" border="0"></a></td>
      		</tr>
            <tr>
              <td align="right"><IMG src="../iupag/spacer.gif" width="31" height="3" border="0"></td>
            </tr>
            <tr>  
              <td align="right"><a href="http://www.iucesmag.edu.co/evirtual/" target="_blank"><IMG src="../iupag/ico_ava_2.png" width="31" height="58" onMouseMove="this.src='iupag/ico_ava_1.png';" 
      onmouseout="this.src='iupag/ico_ava_2.png'" border="0"></a></td>      
            </tr>
            <tr>
              <td align="right"><IMG src="../iupag/spacer.gif" width="31" height="3" border="0"></td>
            </tr>
            <tr>  
              <td align="right"><a href="http://www.iucesmag.edu.co/iu_creditos_1.php" target="_self"><IMG src="../iupag/ico_credito_2.png" width="31" height="159" onMouseMove="this.src='iupag/ico_credito_1.png';" 
      onmouseout="this.src='iupag/ico_credito_2.png'" border="0"></a></td>      
            </tr>            
          </table></TD>
        <TD bgcolor="#FFFFFF"></TD>
        <TD rowspan="2" background="../iupag/shl_2.png" width="30" align="left" valign="top"><IMG height=1 alt="" src="../iupag/spacer.gif" width="30">
<table border="0" width="20">
            <tr>
              <td height="120"><IMG height=1 alt="" src="../iupag/spacer.gif" width="13"></td>
            </tr>
            <tr>
              <td align="left"><a href="http://www.iucesmag.edu.co/fortezza" target="_blank"><IMG src="../iupag/ico_biblioteca_2.png" width="31" height="100" onMouseMove="this.src='iupag/ico_biblioteca_1.png';" 
      onmouseout="this.src='iupag/ico_biblioteca_2.png'" border="0"></a></td>
      		</tr>
            <tr>
              <td align="left"><IMG src="../iupag/spacer.gif" width="31" height="3" border="0"></td>
            </tr>
            <tr>  
              <td align="left"><a href=""><IMG src="../iupag/ico_rss_2.png" width="31" height="58" onMouseMove="this.src='iupag/ico_rss_1.png';" 
      onmouseout="this.src='iupag/ico_rss_2.png'" border="0"></a></td>      
            </tr>
            <tr>
              <td align="left"><IMG src="../iupag/spacer.gif" width="31" height="3" border="0"></td>
            </tr>
            <tr>  
              <td align="left"><a href="../home.php?baner=1"><IMG src="../iupag/ico_carrera_2.png" width="31" height="159" onMouseMove="this.src='iupag/ico_carrera_1.png';" 
      onmouseout="this.src='iupag/ico_carrera_2.png'" border="0"></a></td>      
            </tr>             
          </table>        
        </TD>
      </TR>
      <TR>
        <TD id=obHead><TABLE cellSpacing="0" cellPadding="0" width="790" align=center border="0" bgcolor="#FFFFFF">
            <tbody>
              <tr>
                <td align="center"><TABLE cellSpacing=0 cellPadding=0 width=778 align=center bgColor=#ffffff border=0>
                    <TBODY>
                      <TR>
                        <TD width=779><TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                            <TBODY>
                              <TR>
                                <TH scope=col width=139> <DIV align=left><A href="http://www.iucesmag.edu.co/"><IMG height=115 
            src="../iupag/logo.jpg" width=139 
            border=0></A></DIV></TH>
                                <TH vAlign=top scope=col width=709> <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                                    <TBODY>
                                      <TR align="center">
                                        <TH scope=col height=51>&nbsp;</TH>
                                        <TH vAlign=center align=right> <TABLE cellSpacing=0 cellPadding=0 border=0>
                                            <TBODY>
                                              <TR>
                                                <TD align=right rowSpan=3><?php include("../headico.htm"); ?></TD>
                                              </TR>
                                              <TR>
                                                <TD align=right height=7><IMG height="1" src="../iupag/spacer.gif" width="1"></TD>
                                              </TR>
                                            </TBODY>
                                          </TABLE></TH>
                                        <TH vAlign=center align=left width=1><IMG height=1 src="../iupag/spacer.gif" width=1></TH>
                                      </TR>
                                      <TR>
                                        <TH scope=col colSpan=3 height=64> <TABLE height=64 cellSpacing=0 cellPadding=0 width="100%" bgcolor="#4788E6" border=0>
                                            <TBODY>
                                              <TR>
                                                <TH vAlign="middle" scope=col align="left" width="48%" rowSpan=2> <!--Nombre I.U.CESMAG-->
                                                  <img src="../iupag/head_r2_c2.jpg" alt="iucesmag" width="239" height="43" border="0">
                                                  <!--Fin Nombre I.U.CESMAG-->
                                                </TH>
                                                <TH vAlign=center scope=col align=right width="52%" 
                      background="" height=5><IMG height=5 
                        src="../iupag/spacer.gif" 
                        width=1></TH>
                                              </TR>
                                              <TR>
                                                <TH align=right vAlign=center bgcolor="#4788e6" class="titulo" scope=col>Convocatorias&nbsp;&nbsp;</TH>
                                              </TR>
                                            </TBODY>
                                          </TABLE></TH>
                                      </TR>
                                    </TBODY>
                                  </TABLE></TH>
                              </TR>
                            </TBODY>
                          </TABLE></TD>
                      </TR>
                      <TR>
                        <TD><IMG height=11 src="../iupag/spacer.gif" width=11></TD>
                      </TR>
                      <TR>
                        <TD>
<TABLE cellSpacing=0 cellPadding=0 width=778 bgColor=#f2f2f2 border=0>
        <TBODY>
        <TR>
          <TD width=15>&nbsp;</TD>
          <TD vAlign="center" align="middle" width="206">
          <?php include('../form_prog.php');?>
          </TD>
          <TD width=9>&nbsp;</TD>
          	<TD vAlign=top width="539">
<div style="display: block; position: relative; z-index: 0;" id="show" class="slideshow">
  <div style="display: block; height: 184px; overflow: hidden; position: relative; width: 539px;" class="slideshow-images"><a title="Bienvenidos."><img style="display: block; position: relative; z-index: 10; height: 184px; visibility: visible; width: 539px; left: 0px; top: 0px; opacity: 1;" src="../ima/jpg/convocatoria.jpg" height="184" width="539"></a>
    <div style="visibility: hidden; opacity: 0; background-image: url(&quot;../css/loader-2.png&quot;);" class="slideshow-loader"></div>
  </div>
  <div style="height: 0px; visibility: visible; opacity: 0.0115495;" class="slideshow-captions"></div>
</div>            
 			</TD>
          <TD width=9>&nbsp;</TD></TR></TBODY></TABLE>                        
                        </TD>
                      </TR>
                       <TR>
                        <TD><IMG height="5" src="../iupag/spacer.gif" width="11"></TD>
                      </TR>
                      <TR>
                        <TD height="5"><?php include("../menucesmag.php");?></TD>
                      </TR>
                      <TR>
                        <TD bgcolor="#4788E6"><IMG height="5" src="../iupag/spacer.gif" width="5"></TD>                      </TR>
                      <TR>
                        <TD><IMG height="5" src="../iupag/spacer.gif" width="11"></TD>
                      </TR>
                      <TR>
                      <TR>
                        <TD><TABLE cellSpacng=0 cellPadding=0 width=778 border=0>
                            <TBODY>
                              <TR>
                                <TD width=7>&nbsp;</TD>
                                <TD vAlign=top width=209><TABLE cellSpacing=0 cellPadding=0 width=206 border=0>
                                    <TBODY>
                                      <TR>
                                        <TH vAlign=top scope=col> <TABLE cellSpacing=0 cellPadding=0 width=206 border=0>
                                            <TBODY>
                                              <TR>
                                                <TH><?php include('../mnu_derecho.php');?></TH>
                                              </TR>
                                              <TR>
                                                <TH height=2><IMG height=1 
                        src="../iupag/spacer.gif" 
                        width=1></TH>
                                              </TR>
                                              <TR>
                                                <TH 
                      background="../iupag/linea_punt_negra.gif" 
                      height=1><IMG height=1 
                        src="../iupag/spacer.gif" 
                        width=1></TH>
                                              </TR>
                                              <TR>
                                                <TH vAlign=top align=left 
                      background="../iupag/linea_punt_negra.gif" 
                      height=1><IMG height=1 
                        src="../iupag/spacer.gif" 
                        width=1></TH>
                                              </TR>
                                            </TBODY>
                                          </TABLE></TH>
                                      </TR>
                                    </TBODY>
                                  </TABLE></TD>
                                <TD width=9>&nbsp;</TD>
                                <TD vAlign="top" width="545" align="center">
<table border="0" cellpadding="0" cellspacing="0" width="543">
          <tbody>
          <tr>
            <td><img src="../iupag/spacer.gif" height="5" width="5"></td>
          </tr>
          <tr class="text_gris">
          	<br /><span class="tit_botonera_menu">ULTIMA ACTUALIZACION :</span>&nbsp;&nbsp; <span class="text_gris">26 de Enero del 2012</span>
            <p class="text_gris">Para mirar una convocatoria seleccione una de las pestañas para desplegar el contenido.</p>
          </tr>
          <tr>
            <td><table bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="1" width="543">
              <tbody><tr>
                <th scope="col" bgcolor="#ffffff">
                <!--<div id="TabbedPanels1" class="TabbedPanels">-->
                      
                      <div class="TabbedPanelsContentGroup">
					  
					 <div class="CollapsiblePanelContent" align="center">
					 
					 <!------------------------------------PESTAÑA 1---------------------------------------------->
                     
                     <div id="CollapsiblePanel1" class="CollapsiblePane1">
						<div class="CollapsiblePanelTab" tabindex="0">
							<div align="left"><span class="tit_botonera_grande">CONVOCATORIA PARA CONSULTORIOS JURIDICOS Y CENTRO DE CONCILIACION</div>
                        </div>
					  
                      <div class="TabbedPanelsContent">
							<table cellSpacing=1 cellPadding=3 width="100%" border=0>
                              <tr>
                                <td>
                                  <p class="tit_botonera_grande">
                                  <table width="500" border="1">
                                    <tr>
                                      <td width="195" class="tit_botonera_grande">DENOMINACI&Oacute;N DEL CARGO</td>
                                      <td width="289" class="text_gris">MONITORES O JUDICANTES (4 CARGOS VACANTES)</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">DEDICACI&Oacute;N</td>
                                      <td class="text_gris">TIEMPO COMPLETO</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">SALARIO&nbsp;</td>
                                      <td class="text_gris"><em>SALARIO MINIMO LEGAL VIGENTE</em></td>
                                    </tr>
                                  </table>
								  
								  <p>
                                     <span class="tit_botonera_grande">PERFIL DEL CARGO:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                  </p>
                                  <p>PERSONAS CON ALTO COMPONENTE SOCIAL, CAPACES DE TRABAJAR EN EQUIPO, PROACTIVOS, CON MENTALIDAD EMPRENDEDORA, EXCELENTES RELACIONES INTERPERSONALES Y CAPACES DE IDENTIFICAR Y COMPARTIR LA FORMACION DE VALORES Y CONOCIMIENTOS DE LA FILOSOFIA FRANCISCANA.</p>
                                 <p>
                                     <span class="tit_botonera_grande">REQUISITOS:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                  </p>
                                  <p align="justify" class="text_gris">
<b>1.	</b>Ser egresado del programa de Derecho, de una instituci&oacute;n de educaci&oacute;n superior debidamente reconocida y autorizada por el Estado (la condicion de ser egresado debe acreditarse con la certificaci&oacute;n).<BR>
<b>2.	</b>Haber obtenido un promedio general de calificaciones iguales o superiores a cuatro (4,0) debidamente certificada.<BR>
<b>3.	</b>Acreditar licencia temporal vigente de que trata el Decreto 196 de 1971.<BR>
<b>4.	</b>DISPONIBILIDAD: 9 horas diarias.<BR>
                                  </p>
                                  <TR>
                                    <TD>
                                        <p align="justify"><u><span class="Estilo14"><strong>Importante: </strong></span></u><span class="tit_botonera_menu Estilo11"><strong>Para radicar su hoja de vida, deber&aacute; presentarla en el formato institucional, que se encuentra publicado en la página web de la instituci&oacute;n: www.iucesmag.edu.co, link Convocatorias.  Diligenciando el formato No. 2 con el cumplimiento total de los requisitos exigidos para el cargo, debidamente soportados.  Para la puntuaci&oacute;n de las hojas de vida se tendr&aacute; en cuenta &uacute;nicamente las certificaciones anexas a la misma.</strong></span></p>
                                        <p><font color="#FF0000">2. <a href="http://www.iucesmag.edu.co/pdfpubli/Formulario_funcionarios_N_2.pdf" target="_blank"> Formato hoja de vida Funcionarios (Descargar) </a></font></p>
                                     </TD>
                                   </TR>  
                            </table>
                            <table border='1' cellspacing="3" class="text_gris">
                            <tr bgcolor="#FFFFFF">
                                      <td colspan="4" align="center"><strong>CALENDARIO</strong></td>
                                    </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>RECEPCI&Oacute;N DE HOJAS DE VIDA:</strong></td>
                                      <td colspan="2"><span class="tit_botonera_menu Estilo11"><span class="Estilo14">HASTA EL 31 DE ENERO DE 2012 </span></span></td>
                                    </tr>
									<tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>SELECCIONADOS A PRUEBA DE CONOCIMIENTOS:</strong></td>
                                      <td colspan="2" class="text_gris">6 DE FEBRERO DE 2012 </td>
                                    </tr>
									<tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>PRUEBA DE CONOCIMIENTOS:</strong></td>
                                      <td colspan="2" class="text_gris">8 DE FEBRERO DE 2012 </td>
                                    </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>SELECCIONADOS A PRUEBA PSICOT&Eacute;CNICA:</strong></td>
                                      <td colspan="2" class="text_gris">10 DE FEBRERO DE 2012</td>
                                      </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>PRUEBA PSICOT&Eacute;CNICA:</strong></td>
                                      <td colspan="2" class="text_gris">13 Y 14 DE FEBRERO DE 2012</td>
                                      </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>ENTREVISTA:</strong></td>
                                      <td colspan="2" class="text_gris">16 DE FEBRERO DE 2012</td>
                                    </tr>
									<tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>PUBLICACION DE RESULTADOS:</strong></td>
                                      <td colspan="2" class="text_gris">17 DE FEBRERO DE 2012 (6:00 PM)</td>
                                    </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="4" align="center"><strong>Las hojas de vida no seleccionadas ser&aacute;n entregadas del 23 al 27 de febrero de 2012, de no ser reclamadas ser&aacute;n destruidas despu&eacute;s de esta fecha.</strong></td>
                                    </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="4" align="center">&nbsp;</td></tr>
                                        <tr><td colspan="4"><p align="center"><u><strong>Mayor Información</strong></u><strong>:  </strong>                    
                                                    <BR>Cra 20 A No. 15-54 Sede Administrativa. Of. 212 Tel 21 65 35 ext. 212 y 319.<BR>                         
                                                    San Juan de Pasto.<BR>                        
                                                    <a href="http://www.iucesmag.edu.co">www.iucesmag.edu.co</a>- email:<a href="../ghumanaiucesmag@hotmail.com">ghumanaiucesmag@hotmail.com</a></td>
                                      </tr><tr><td colspan="4" align="center">&nbsp;</td>
                                    </tr>
                            </table>  
                      </div>
				</div>
					 
					 

                     <!------------------------------------PESTAÑA 2---------------------------------------------->
                     
                     <div id="CollapsiblePanel2" class="CollapsiblePane1">
						<div class="CollapsiblePanelTab" tabindex="1">
							<div align="left"><span class="tit_botonera_grande">ESTUDIO DE FACTIBILIDAD SOCIOECONÓMICA PARA LA OFERTA DE PROGRAMAS ACADÉMICOS DE PREGRADO  EN LA CIUDAD DE CALI.</div>
                        </div>
					  
                      <div class="TabbedPanelsContent">
							<table cellSpacing=1 cellPadding=3 width="100%" border=0>
                              <tr>
                                <td>
								  <p align="justify"><span class="tit_botonera_grande">INVITACIÓN PRIVADA No. 001-2012</span><br/></p>
                                  <p align="justify" class="text_gris">
									La Institución Universitaria CESMAG., está interesada en contratar un estudio de factibilidad socioeconómica para determinar la viabilidad de incursionar con programas académicos de pregrado en la ciudad de Cali, para lo cual invita a personas naturales o jurídicas a presentar sus ofertas con base en las condiciones que se detallan en la invitación privada No. 001-2012.
                                  </p>
								  <p align="justify"><span class="tit_botonera_grande">1. OBJETO DE LA INVITACIÓN</span><br/></p>
                                  <p align="justify" class="text_gris">
									La presente invitación tiene por objeto determinar la viabilidad de mercado, técnica, financiera, económica y social para que la Institución Universitaria CESMAG., pueda incursionar en la ciudad de Cali con la oferta de programas de pregrado.
                                  </p>
								  <p align="justify"><span class="tit_botonera_grande">2. DE LA OFERTA</span><br/></p>
                                  <p align="justify" class="text_gris">
									Se deberá presentar los siguientes documentos:<br>
									<p align="justify"><span class="tit_botonera_grande">2.1 DOCUMENTACIÓN LEGAL</span><br/></p>
									<table width="500" border="1">
										<tr>
										  <td class="tit_botonera_grande">OFERENTE PERSONA NATURAL</td>
										  <td class="tit_botonera_grande">OFERENTE PERSONA JURIDICA </td>
										</tr>
										<tr>
										  <td class="text_gris">Fotocopia de la cédula de ciudadanía</td>
										  <td class="text_gris">Fotocopia de la cédula de ciudadanía del Representante Legal </td>
										</tr>
										<tr>
										  <td class="text_gris">Fotocopia del RUT</td>
										  <td class="text_gris"><em>Fotocopia del RUT</em></td>
										</tr>
										<tr>
										  <td class="text_gris">Hoja de Vida y su equipo de trabajo. En esta se debe evidenciar la experiencia en la realización de trabajos iguales o similares al que solicita.</td>
										  <td class="text_gris"><em>Certificado de existencia y representación legal </em></td>
										</tr>
										<tr>
										  <td class="text_gris">&nbsp;</td>
										  <td class="text_gris"><em>Hoja de Vida indicando el equipo de profesionales con que cuenta para la realización del trabajo. En esta se debe evidenciar la experiencia en la realización de trabajos iguales o similares al que solicita. </em></td>
										</tr>
									</table>
                                  </p>
								  <p align="justify"><span class="tit_botonera_grande">2.2.  PROPUESTA TÉCNICA</span><br/></p>
                                  <p align="justify" class="text_gris">
									La propuesta técnica deberá contener el plan de trabajo a realizar y el informe a presentar, el cual debe contemplar entre otros los siguientes aspectos:
                                  </p>
								  <p align="justify"><span class="tit_botonera_grande">2.2.1 Estudio de mercado</span><br/></p>
                                  <p align="justify" class="text_gris">
                                        Este estudio debe realizar un análisis de la oferta y la demanda de los programas académicos, el nivel de formación (tecnológicos, profesionales), la modalidad de formación (presencial o a distancia), organización de los programas (terminales o por ciclos propedéuticos) y el precio de los programas según las características de nivel y modalidad de formación y organización.<br><br>
										Para este efecto se debe considerar el siguiente proceso:
										&bull;	Definir el problema a investigar<br>
										&bull;	Seleccionar y establecer el diseño de la investigación<br>
										&bull;	Identificar los tipos de información necesaria y las fuentes<br>
										&bull;	Determinar y diseñar los instrumentos de medición<br>
										&bull;	Recolección de datos y análisis<br>
										&bull;	Formular hallazgos<br>
										&bull;	Población<br>
										&bull;	Investigación de mercados para la oferta de programas de pregrado en el área de influencia del Colegio San Francisco de Asís de la Ciudad de Cali (especificar área a cubrir con el estudio)<br>
										&bull;	Hombres y mujeres estudiantes de los grados X y XI o graduados de los dos últimos años que no hayan ingresado a programas de educación superior.<br>
										&bull;	Hombres y mujeres padres de familia o cabeza de familia, con hijos estudiantes en los grados X y XI o graduados de los dos últimos años  que no hayan ingresado a programas de educación superior.<br>
										&bull;	Empresas de los diferentes sectores de la economía que permita determinar el tipo de disciplinas que son requeridas al momento de vincular trabajadores.<br>
										&bull;	Instituciones de educación superior de la ciudad de Cali y su área metropolitana que permita conocer: La oferta de programas de pregrado, nivel de formación, duración, número de créditos académicos y precio.<br>
										&bull;	Análisis de los Planes de Desarrollo Municipal y Departamental en los aspectos que sean de interés para el presente estudio.<br>
										&bull;	Análisis de la información estadística del SNIES, ICFES, e ICETEX que permita determinar tendencias que sean pertinentes con el presente estudio.<br>

                                  </p>
								  <p align="justify"><span class="tit_botonera_grande">2.1.2 Estudio técnico</span><br/></p>
                                  <p align="justify" class="text_gris">
                                        Una vez culminado el estudio de mercado, la institución predeterminará cual es el portafolio de programas que la institución ofrecerá en la ciudad de Cali, en calidad de Seccional o Extensión, para lo cual se adelantará el estudio técnico el cual debe permitir determinar el tamaño del proyecto, la localización, los requerimientos de planta física  del campus universitario (aulas de clase, laboratorios, aulas especiales, baterías sanitarias, cafetería, biblioteca, áreas administrativas,  áreas deportivas, áreas recreativas), los requerimientos de medios educativos (Libros, revistas, suscripciones, equipos de cómputo, software, DVDs, televisores, Video Beam, implementos deportivos, cámaras, equipos de dotación de laboratorios especiales).  Todo lo anterior con su correspondiente valoración, ya sea en términos de propiedad de la institución o tomados en arriendo.
                                  </p>
								  <p align="justify"><span class="tit_botonera_grande">2.1.3 Estudio financiero</span><br/></p>
                                  <p align="justify" class="text_gris">
                                        Pretende determinar el monto total de las inversiones que se deberán efectuar para la ejecución del proyecto, y cuantificar todos los ingresos y egresos que se obtendrán durante su vida útil (una cohorte de un programa profesional con ingreso de estudiantes semestralmente), los cuales se  mostrarán en un flujo de fondos.  Con base en lo anterior el estudio financiero debe incluir: inversiones y costos a partir del estudio técnico, proyecciones financieras para el periodo de evaluación del proyecto (una cohorte de un programa profesional con ingreso de estudiantes semestralmente), alternativas de financiamiento, estados financieros proyectados. 
                                  </p>
								  <p align="justify"><span class="tit_botonera_grande">2.1.4 Evaluación del proyecto</span><br/></p>
                                  <p align="justify" class="text_gris">
                                        Se debe establecer el probable comportamiento del proyecto para determinar su mayor o menor conveniencia desde tres enfoques: el financiero, el económico y el social.<br><br>
										* Evaluación financiera: Permitirá medir los pro y los contra que presentará el proyecto para la Institución Universitaria CESMAG, como entidad de educación superior de carácter privado.  Se basa en los flujos monetarios que recibe o desembolsa el proyecto durante su vida útil (una cohorte de un programa profesional con ingreso de estudiantes semestralmente).  El flujo está constituido por inversiones, financiación, ingresos y egresos operacionales y valor residual.<br>
										* Evaluación económica: se basará en los flujos de beneficios y costos que afecten positiva o negativamente a la localidad donde se ubicará el proyecto y el área de influencia.  Se tendrá en cuenta el bienestar individual, considerando a todas las personas en condiciones de igualdad.<br>
										* Evaluación social: como complemento de la evaluación económica describirá los siguientes fenómenos:<br><br>
										&bull;	 Distribución de los beneficios entre los diversos estratos y grupos  sociales de la   localidad.<br>
										&bull;	Distribución geográfica de los beneficios<br>
										&bull;	Distribución de los beneficios entre consumo e inversión<br>
										&bull;	Creación de empleo.
                                  </p>
								  <p align="justify"><span class="tit_botonera_grande">2.3	OFERTA ECONÓMICA</span><br/></p>
                                  <p align="justify" class="text_gris">
                                        Consistirá en la propuesta económica conteniendo el precio del servicio ofertado incluyendo el valor del impuesto a las ventas si el oferente es responsable de este impuesto. En su oferta económica, los oferentes deberán expresar el plazo de validez de sus propuestas que, como mínimo, será de cuarenta y cinco (45) días calendario, contados a partir de la fecha que vence el plazo para la presentación de las propuestas. 
                                  </p>
								  <p align="justify"><span class="tit_botonera_grande">3.	GARANTÍAS</span><br/></p>
                                  <p align="justify" class="text_gris">
                                        El oferente que resulte adjudicado deberá constituir en una compañía de seguros vigilada por la Superintendencia Financiera de Colombia las siguientes garantías:<br/><br/>

										&bull;	Por el manejo del anticipo en caso de requerirse, equivalente al 100% del valor del anticipo por el tiempo de duración del contrato y tres meses más.<br/>
										&bull;	De cumplimiento del objeto contratado, equivalente al 20% del valor del contrato por el tiempo de duración del contrato y tres meses más.<br/>
										&bull;	Por el pago de sueldos y prestaciones sociales, equivalente al 20% del valor del contrato por el tiempo de duración del contrato y tres años más. <br/>
                                  </p>
								  <p align="justify"><span class="tit_botonera_grande">4. PLAZO DE ENTREGA</span><br/></p>
                                  <p align="justify" class="text_gris">
                                        El plazo de entrega del objeto contratado será de cuatro (4) meses contados a partir del perfeccionamiento del contrato.
                                  </p>
								  <p align="justify"><span class="tit_botonera_grande">5.	PRESENTACIÓN DE LAS OFERTAS</span><br/></p>
                                  <p align="justify" class="text_gris">
                                        Las ofertas deberán presentarse en sobre sellado, con la documentación requerida hasta las 5 p.m. del 3 de febrero de 2012 en la Rectoría de la Institución Universitaria CESMAG ubicada en la carrera 20 A 14-54 de la ciudad de Pasto. Las propuestas que se envíen por correo, se tendrá como cumplida la fecha el día y la hora en que sea puesta en el correo.
                                  </p>
								  <p align="justify"><span class="tit_botonera_grande">6.	ACLARACIONES</span><br/></p>
                                  <p align="justify" class="text_gris">
                                        
										Cualquier inquietud relacionada con las condiciones y requisitos de esta invitación, hacerlas llegar al siguiente correo electrónico:  planeación@iucesmag.edu.co, las cuales serán contestadas a más tardar al día siguiente por el mismo medio.
                                  </p>
								  <p align="justify"><span class="tit_botonera_grande">7.	INFORMACIÓN ADICIONAL</span><br/></p>
                                  <p align="justify" class="text_gris">
                                        A continuación se brinda una breve reseña histórica de la institución  que puede ser útil para la preparación de las propuestas:<br><br>
										
										La Institución Universitaria Centro de Estudios Superiores María Goretti, cuya sigla es I. U. CESMAG, con domicilio principal en la Ciudad de Pasto, es una institución de educación superior de utilidad común, sin ánimo de lucro, con personería jurídica reconocida mediante resolución 10735 del 23 de junio de 1982 del Ministerio de Educación Nacional como Institución tecnológica y mediante resolución 1853 del 31 de julio de 2002, emanada del mismo ministerio que autorizó el cambio de carácter académico a Institución Universitaria.<br><br>
										La I.U. CESMAG fue fundada por el sacerdote capuchino Italiano Francisco Bellina Bencivini. Comenzó labores académicas el 16 de agosto de 1982 con los programas tecnológicos de Educación Física, Educación Preescolar, Administración Financiera, Cerámica, Topografía y Delineantes de Arquitectura con 175 estudiantes matriculados de un total de 553 aspirantes.<br><br>
										El 18 de julio de 1986, se otorgaron los primeros títulos de tecnólogos en Educación Física, Educación Preescolar, Administración Financiera y Cerámica.  Se graduaron un total de 68 estudiantes.<br><br>
										El funcionamiento de la I.U. CESMAG en su primera etapa se desarrolló en convenio con el Estado, el cual financiaba la planta de personal administrativa y docente y con los recursos propios provenientes de los derechos pecuniarios  se financiaba el mantenimiento, los recursos educativos y los equipos necesarios para el desarrollo de cada uno de los programas ofertados. Esta etapa está comprendida entre los años 1982 hasta 1994 cuando el gobierno expidió la Ley 115 de 1994 en la cual se prohíbe las transferencias del situado fiscal a Instituciones de Educación Superior de carácter privado.  <br><br>
										El primer reto que tiene que enfrentar la institución es el de seguir funcionando sin el apoyo del gobierno, lo cual tuvo como repercusión inmediata el incremento en las tarifas de matrículas y demás derechos pecuniarios para poder cubrir con recursos propios la planta de personal administrativo y docente, situación que se refleja en el número de estudiantes que aspiraban continuar sus estudios tecnológicos en la Institución. La modalidad de vinculación de los docentes es la hora cátedra y el sistema de remuneración por honorarios.<br><br>
										La preocupación de los directivos de la Institución de poder brindar a la población de egresados de programas tecnológicos y ciudadanía en general programas de nivel universitario y de ofrecer nuevas propuestas de programas académicos hace que nazcan  los programas de: Tecnología en Sistemas en el I periodo de 1993, primer programa de educación superior en Nariño en esta área; Tecnología en Maderas en el II periodo de 1993; Administración Financiera Profesional en convenio con la Universidad Mariana,  Secretariado Ejecutivo con Énfasis en Sistemas en el I periodo de 1995 y Arquitectura en convenio con la Universidad de La Salle en el I periodo de 1997.<br><br>
										Un segundo reto que tiene que afrontar la Institución  es el cambio del sistema de contratación y remuneración de los docentes debido a la sentencia C-517 de la Corte Constitucional que determina que los contratos con los docentes hora cátedra de las Instituciones de Educación Superior se les debe reconocer todo el factor prestacional y parafiscal.  Adicionalmente el valor de la hora cátedra no puede ser inferior a la proporción de ocho salarios mínimos mensuales vigentes. Esta situación conlleva a replantear las proyecciones presupuestales a partir del segundo semestre de 1999 reduciendo el presupuesto de inversiones para adicionar partidas al rubro de gastos de personal docente.<br><br>
										El Plan de Desarrollo 2001 – 2005 tuvo como objetivo buscar nuevas alternativas de programas educativos a nivel tecnológico y gestionar convenios con instituciones de educación superior para ofrecer programas de nivel universitario que permitieran a los egresados de programas tecnológicos terminar su ciclo de formación profesional. Igualmente se propuso culminar el proceso de cambio de carácter académico de institución tecnológica a institución universitaria.<br><br>
										En la ejecución del Plan de Desarrollo 2001 – 2005 se consolida la oferta de nuevas opciones de programas académicos. En el I periodo de 2001 con  Contaduría Pública y Administración de Obras Civiles en convenio con la Fundación Universitaria del Área Andina y Psicología en convenio con la Corporación Universitaria Remington. En el II periodo de 2001 se ponen en marcha los programas tecnológicos de Contaduría y Finanzas, Publicidad y Mercadeo y Administración de Empresas Hoteleras y Turísticas.<br><br>
										Con gran beneplácito el 31 de julio de 2002, la comunidad académica de la Institución y la ciudadanía de Pasto,  recibe la decisión del Ministerio de Educación Nacional de aprobar la reforma estatutaria que consagra el cambio de carácter académico de institución tecnológica a institución universitaria, con la cual se abre el camino para el ofrecimiento de programas de nivel universitario y de  postgrados que demanda la juventud del Sur Occidente Colombiano.<br><br>
										La Institución Universitaria Centro de Estudios Superiores María Goretti cuya sigla es I.U. CESMAG, asume con gran responsabilidad el nuevo reto y comienza el proceso de obtención del Registro Calificado de programas académicos de nivel universitario, los cuales en su nueva condición,  puede ofrecer sin necesidad de recurrir a convenios con otras Instituciones.<br><br>
										En la construcción de las condiciones mínimas de calidad que se tienen que acreditar ante el Ministerio de Educación Nacional para la obtención del registro calificado de los nuevos programas, se visualizan algunas necesidades apremiantes que la Institución tiene que entrar a solucionar entre las que se destacan: La cualificación docente y la infraestructura física.  Las acciones necesarias para responder a estos requerimientos hacen parte del plan de transición entre la culminación del Plan de Desarrollo 2001 – 2005 y la formulación del nuevo Plan de Desarrollo 2007 – 2012.<br><br>
										
										Los primeros registros calificados de programas profesionales y de postgrados propios fueron:<br><br>
										
										<table width="500" border="1">
											<tr>
											  <td class="tit_botonera_grande" align='center'>NOMBRE DEL PROGRAMA</td>
											  <td class="tit_botonera_grande" align='center'>CÓDIGO SNIES</td>
											  <td class="tit_botonera_grande" align='center'>FECHA</td>
											</tr>
											<tr>
											  <td class="text_gris">Diseño Gráfico *</td>
											  <td class="text_gris" align='center'>19062</td>
											  <td class="text_gris" align='center'>15.jul.2003</td>
											</tr>
											<tr>
											  <td class="text_gris">Licenciatura en Educación Física **</td>
											  <td class="text_gris" align='center'>16489</td>
											  <td class="text_gris" align='center'>19.dic.2003</td>
											</tr>
											<tr>
											  <td class="text_gris">Licenciatura en Educación Preescolar **</td>
											  <td class="text_gris" align='center'>16491</td>
											  <td class="text_gris" align='center'>19.dic.2003</td>
											</tr>
											<tr>
											  <td class="text_gris">Ingeniería de Sistemas **</td>
											  <td class="text_gris" align='center'>20376</td>
											  <td class="text_gris" align='center'>30. ene.2004</td>
											</tr>
											<tr>
											  <td class="text_gris">Arquitectura **</td>
											  <td class="text_gris" align='center'>19979</td>
											  <td class="text_gris" align='center'>26.jul.2004</td>
											</tr>
											<tr>
											  <td class="text_gris">Contaduría Pública **</td>
											  <td class="text_gris" align='center'>19788</td>
											  <td class="text_gris" align='center'>10.nov.2004</td>
											</tr>
											<tr>
											  <td class="text_gris">Administración de Empresas **</td>
											  <td class="text_gris" align='center'>19787</td>
											  <td class="text_gris" align='center'>22.nov.2004</td>
											</tr>
											<tr>
											  <td class="text_gris">Especialización en Espíritu Empresarial y Creación de Empresas</td>
											  <td class="text_gris" align='center'>19114</td>
											  <td class="text_gris" align='center'>6.may.2005</td>
											</tr>
											<tr>
											  <td class="text_gris">Especialización en Valoración, Gestión y Proyección del Patrimonio Cultural</td>
											  <td class="text_gris" align='center'>52055</td>
											  <td class="text_gris" align='center'>23.mar.2006</td>
											</tr>
										</table><br>
										(*) Este programa entró en funcionamiento antes de existir la norma específica de condiciones de calidad para el registro calificado.  Una vez el MEN expidió la norma se tramitó el registro calificado.<br>
										(**) Estos programas ya cuentan con renovación del registro calificado por 7 años más.<br><br>
										
										Con base en lo anterior se pone en marcha el Plan Trienal de Cualificación Docente con el cual se busca cualificar al profesorado en: Filosofía Institucional, Investigación Cuantitativa, Cualitativa y Teorías del Pensamiento y Modelos Pedagógicos con los cuales se alcanzó una cobertura del 66%.<br><br>
										Otra de las acciones que se emprende es el reforzamiento del Edificio Holanda y la construcción del Edificio Italia con el fin de dotar a la comunidad académica de una Biblioteca más amplia y moderna, cumplir con la norma de sismo  -  resistencia, ampliar y modernizar los espacios académicos de aulas de clase, salas especiales, salas de profesores, talleres y laboratorios.  Esta obra se entregó al servicio el 28 de julio de 2006 con la visión de ser continuada en un predio adjunto,  adquirido el 31 de enero de 2006.<br><br>
										Con la participación de todos los estamentos de la Institución se construyó y formuló el Plan de Desarrollo 2007 – 2012, el cual se consolida en 37 proyectos estructurados de acuerdo a los lineamientos del Consejo Nacional de Acreditación “CNA” cuyos logros son evaluados semestralmente por el Consejo Directivo.<br>
										Los procesos de autoevaluación institucional y la ejecución de los Planes de Desarrollo Institucional,  tienen como objetivos centrales conducir a la Institución Universitaria a ser reconocida por el Ministerio de Educación Nacional como Universidad e incursionar en los procesos de Acreditación de Excelencia de sus programas académicos y una posterior Acreditación Institucional.<br><br>
										La consolidación de los programas de pregrado actuales y la búsqueda de nuevas alternativas de formación para la juventud se hacen realidad con la entrada en funcionamiento de los siguientes programas profesionales:<br><br>
										
										<table width="500" border="1">
											<tr>
											  <td width="195" class="tit_botonera_grande" align='center'>NOMBRE DEL PROGRAMA</td>
											  <td width="289" class="tit_botonera_grande" align='center'>CÓDIGO SNIES</td>
											  <td width="289" class="tit_botonera_grande" align='center'>FECHA</td>
											</tr>
											<tr align='center'>
											  <td class="text_gris">Diseño Gráfico</td>
											  <td class="text_gris">19062</td>
											  <td class="text_gris">16.may.2007</td>
											</tr>
											<tr align='center'>
											  <td class="text_gris">Derecho</td>
											  <td class="text_gris">52939</td>
											  <td class="text_gris">21.jun.2007</td>
											</tr>
											<tr align='center'>
											  <td class="text_gris">Psicología</td>
											  <td class="text_gris">53874</td>
											  <td class="text_gris">18.jul.2008</td>
											</tr>
											<tr align='center'>
											  <td class="text_gris">Ingeniería Electrónica</td>
											  <td class="text_gris">90715</td>
											  <td class="text_gris">6.ago.2010</td>
											</tr>
										</table><br><br>
										
										A nivel de postgrado, el ofrecimiento de la Maestría en Docencia en convenio con la Universidad de la Salle aprobada por el MEN para ser ofrecida en la ciudad de Pasto el  6 de abril de 2006,  ha contribuido en la formación de alto nivel a los docentes tanto de la Institución como del Departamento de Nariño. Se impulsa un desarrollo constante de la academia por ello también se han realizado convenios con instituciones de educación superior para ofrecer a los egresados universitarios programas de postgrado como la Maestría en Derecho Procesal con la Universidad de Medellín que ha convocado a dos cohortes de profesionales del derecho, la Maestría en Educación desde la Diversidad en convenio con la Universidad de Manizales que igualmente tiene en curso dos cohortes y la Maestría en Desarrollo Sostenible en convenio con la Universidad de Manizales que se encuentra en proceso de inscripción.<br><br>
										El Fortalecimiento de la investigación ha sido un proceso constante que ha permitido a la Institución contar con 26 grupos de investigación de los cuales 20 están registrados en COLCIENCIAS y 11 están clasificados, 1 en categoría B, 3 en categoría C y 7 en categoría D.  La publicación de libros, artículos y la asistencia a ponencias a nivel local, regional nacional e internacional son algunos indicadores que dan cuenta del avance de la Institución en esta función sustantiva de la educación superior.<br><br>
										La Proyección Social es donde se reflejan los logros académicos, investigativos y de gestión Institucional, los cuales se materializan a través de las prácticas profesionales, pedagógicas e investigativas que realizan los estudiantes con asesoría y acompañamiento de sus docentes y las actividades de bienestar universitario.  A lo largo de los 28 años de servicio han sido varias las empresas y comunidades especialmente vulnerables que se han beneficiado.<br><br>
										Con base en lo anterior se puede desatacar: la población infantil de varias poblaciones de Nariño y barrios de la ciudad de Pasto que se beneficiaron con la construcción de  jardines infantiles con el apoyo de las estudiantes de Tecnología en Educación Preescolar, las instituciones educativas que han recibido el apoyo para la formación de  la niñez y juventud en las áreas de educación física,  educación preescolar y la prestación de servicios psicológicos.<br><br>
										El sector productivo regional principalmente, también  ha tenido la oportunidad de contar con estudiantes practicantes y egresados tecnólogos y profesionales que han contribuido al desarrollo empresarial, educativo y de información y comunicaciones.<br><br>
										Comunidades vulnerables como los barrios La Cruz, El Común, La Alameda; las trabajadoras sexuales y sus hijos igualmente han sido beneficiados por los programas de proyección social que adelanta la Institución y alrededor de los cuales ha logrado reunir a las demás Instituciones de Educación Superior de la Red UREL que tienen domicilio  o hacen presencia en Nariño.<br><br>
										Las expectativas de la Institución para beneficio de la Comunidad del Sur Occidente Colombiano son grandes y con el fin de brindar apoyo a los procesos de la academia, la investigación y la proyección social se encuentra en proceso de  construcción de una gran obra de infraestructura al servicio de la educación que será el Edificio Sicilia.<br><br>
                                  </p>
								  
                                  <!--<TR>
                                    <TD>
                                        <p align="justify"><u><span class="Estilo14"><strong>Importante: </strong></span></u><span class="tit_botonera_menu Estilo11"><strong>Para radicar su hoja de vida, deber&aacute; presentarla en el formato institucional, que se encuentra publicado en la página web de la instituci&oacute;n: www.iucesmag.edu.co, link Convocatorias.  Diligenciando el formato No. 1 con el cumplimiento total de los requisitos exigidos para el cargo, debidamente soportados.  Para la puntuaci&oacute;n de las hojas de vida se tendr&aacute; en cuenta &uacute;nicamente las certificaciones anexas a la misma.</strong></span></p>
                                        <p><font color="#FF0000">2. <a href="http://www.iucesmag.edu.co/pdfpubli/formulario_docente_No_1.pdf" target="_blank"> Formato hoja de vida Docentes (Descargar) </a></font></p>
                                     </TD>
                                   </TR>-->
                            </table>
                            <!--<table border='1' cellspacing="3" class="text_gris">
                            <tr bgcolor="#FFFFFF">
                                      <td colspan="4" align="center"><strong>CALENDARIO</strong></td>
                                    </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>RECEPCI&Oacute;N DE HOJAS DE VIDA:</strong></td>
                                      <td colspan="2"><span class="tit_botonera_menu Estilo11"><span class="Estilo14">Del 1 al 18 de noviembre de 2011 (6:00 p.m.) </span></span></td>
                                    </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="4" align="center"><strong>Anexar a la hoja de vida una propuesta en donde explique como organizar&iacute;a los procesos y el trabajo de los docentes para la renovaci&oacute;n del registro calificado</strong></td>
                                    </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>SELECCIONADOS PARA PRUEBA PSICOT&Eacute;CNICA:</strong></td>
                                      <td colspan="2" class="text_gris">26 de noviembre</td>
                                      </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>PRUEBA PSICOT&Eacute;CNICA:</strong></td>
                                      <td colspan="2" class="text_gris">del 28 al 30 de noviembre de 2011</td>
                                      </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>LISTA SELECCIONADOS PARA ENTREVISTA:</strong></td>
                                      <td colspan="2" class="text_gris">2 de diciembre de 2011</td>
                                    </tr>
									<tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>ENTREVISTAS:</strong></td>
                                      <td colspan="2" class="text_gris">6 de diciembre de 2011</td>
                                    </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>PUBLICACI&Oacute;N DE RESULTADOS:</strong></td>
                                      <td colspan="2"><span class="text_gris">9 de diciembre de 2011</span></td>
                                      </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="4" align="center"><strong>Las hojas de vida no seleccionadas ser&aacute;n entregadas del 12  al 16 de diciembre  de 2011, de no ser reclamadas ser&aacute;n destruidas despu&eacute;s de esta fecha.</strong></td>
                                    </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="4" align="center">&nbsp;</td></tr>
                                        <tr><td colspan="4"><p align="center"><u><strong>Mayor Información</strong></u><strong>:  </strong>                    
                                                    <BR>Cra 20 A No. 15-54 Sede Administrativa. Of. 212 Tel 21 65 35 ext. 212 y 319.<BR>                         
                                                    San Juan de Pasto.<BR>                        
                                                    <a href="http://www.iucesmag.edu.co">www.iucesmag.edu.co</a>- email:<a href="../ghumanaiucesmag@hotmail.com">ghumanaiucesmag@hotmail.com</a></td>
                                      </tr><tr><td colspan="4" align="center">&nbsp;</td>
                                    </tr>
                            </table>-->
                      </div>
				</div>
                
                
                
                <!------------------------------------PESTAÑA 3---------------------------------------------->
                
                     <div id="CollapsiblePanel3" class="CollapsiblePane2">
						<div class="CollapsiblePanelTab" tabindex="2">
							<div align="left"><span class="tit_botonera_grande">Coordinador Area Derecho Civil, Comercial, para los Consultorios Jurídicos.</div>
                        </div>
		
					  <div class="TabbedPanelsContent">
							<table cellSpacing=1 cellPadding=3 width="100%" border=0>
                              <tr>
                                <td>
                                  <p class="tit_botonera_grande">
                                  <table width="500" border="1">
                                    <tr>
                                      <td width="195" class="tit_botonera_grande">DENOMINACI&Oacute;N DEL CARGO</td>
                                      <td width="289" class="text_gris">Coordinador Area Derecho Civil, Comercial, para los Consultorios Jurídicos.</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">DEDICACIÓN</td>
                                      <td class="text_gris">Tiempo Completo</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">JEFE INMEDIATO&nbsp;&nbsp;</td>
                                      <td class="text_gris">Director Consultorios Jurídicos</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">SALARIO&nbsp;</td>
                                      <td class="text_gris"><em>$ 2.066.834</em></td>
                                    </tr>
                                  </table>
								  
								  <br />
								  
								  <p><span class="tit_botonera_grande">OBJETIVO DEL CARGO:</span></p>
								  <p align="justify" class="text_gris">
										Asesorar a los estudiantes practicantes en los asuntos relacionados a las consultas como defensores de oficio ante entidades públicas con base en la reglamentación existente, para garantizar el cumplimiento de la misión del espacio de práctica del programa de derecho.
                                  </p>
								  <p><span class="tit_botonera_grande">FUNCIONES Y RESPONSABILIDADES:</span></p>
                                  <p align="justify" class="text_gris">
										<b>1.	</b>Realizar el cronograma semestral de actividades conforme al area de atención.<BR>
										<b>2.	</b>Asesorar a estudiantes practicantes.<BR>
										<b>3.	</b>Realizar la inducción de práctica a los estudiantes inscritos en los Consultorios jurídicos I.<BR>
										<b>4.	</b>Evaluar a los estudiantes practicantes.<BR>
										<b>5.	</b>Revisar las actas y constancias emitidas en el Centro de Conciliación.<BR>
										<b>6.	</b>Hacer seguimiento a los convenios interinstitucionales.<BR>
										<b>7.	</b>Realizar reportes de las actividades.
                                  </p>
								  <p><span class="tit_botonera_grande">REQUISITOS:</span></p>
                                  <p align="justify" class="text_gris">
										<b>1.	</b>Acreditar título de abogado.<BR>
										<b>2.	</b>Preferiblemente con postgrado en cualquier área del derecho.<BR>
										<b>3.	</b>Experiencia profesional de 3 a 5 años.
                                  </p>
								  <p><span class="tit_botonera_grande">HABILIDADES DEL CARGO:</span></p>
								  <p align="justify" class="text_gris">
										Toma de decisiones, Análisis de información, evaluación.
                                  </p>
								  <p><span class="tit_botonera_grande">DEL CARGO:</span></p>
								  <p align="justify" class="text_gris">
										Capacidad de escucha, Don de gente, Excelente presentación personal.
                                  </p>
                                  <TR>
                                    <TD>
                                        <p align="justify"><u><span class="Estilo14"><strong>Importante: </strong></span></u><span class="tit_botonera_menu Estilo11"><strong>Para radicar su hoja de vida, deber&aacute; presentarla en el formato institucional, que se encuentra publicado en la p&aacute;gina web de la instituci&oacute;n: www.iucesmag.edu.co, link Convocatorias.  Diligenciando el formato No. 2 (Hoja de vida para personal administrativo) con el cumplimiento total de los requisitos exigidos para el cargo, debidamente soportados.  Para la puntuaci&oacute;n de las hojas de vida se tendr&aacute; en cuenta &uacute;nicamente las certificaciones anexas a la misma.</strong></span></p>
                                        <p><font color="#FF0000">2. <a href="http://www.iucesmag.edu.co/pdfpubli/Formulario_funcionarios_N_2.pdf" target="_blank"> Formato hoja de vida Funcionarios (Descargar) </a></font></p>
                                     </TD>
                                   </TR>  
                            </table>
                            <table border='1' cellspacing="3" class="text_gris">
                            <tr bgcolor="#FFFFFF">
                                      <td colspan="4" align="center"><strong>CALENDARIO</strong></td>
                                    </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>RECEPCI&Oacute;N DE HOJAS DE VIDA:</strong></td>
                                      <td colspan="2"><span class="tit_botonera_menu Estilo11"><span class="Estilo14">Hasta 27 de enero de 2012</span></span></td>
                                    </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>SELECCIONADOS PARA PRUEBA DE CONOCIMIENTOS:</strong></td>
                                      <td colspan="2" class="text_gris">30 de enero de 2012</td>
                                    </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>PRUEBA DE CONOCIMIENTOS:</strong></td>
                                      <td colspan="2" class="text_gris">31 de enero de 2012</td>
                                    </tr>
									<tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>PRUEBA PSICOTECNICA:</strong></td>
                                      <td colspan="2" class="text_gris">3 de febrero de 2012</td>
                                      </tr>
                                   
									<tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>ENTREVISTA:</strong></td>
                                      <td colspan="2" class="text_gris">6 de febrero de 2012</td>
                                    </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>PUBLICACI&Oacute;N DE RESULTADOS:</strong></td>
                                      <td colspan="2"><span class="text_gris">7 de febrero de 2012</span></td>
                                      </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="4" align="center"><strong>Las hojas de vida no seleccionadas ser&aacute;n entregadas del 13  al 17 de febrero  de 2012, de no ser reclamadas ser&aacute;n destruidas despu&eacute;s de esta fecha.</strong></td>
                                    </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="4" align="center">&nbsp;</td></tr>
                                        <tr><td colspan="4"><p align="center"><u><strong>Mayor Información</strong></u><strong>:  </strong>                    
                                                    <BR>Cra 20 A No. 15-54 Sede Administrativa. Of. 212 Tel 21 65 35 ext. 212 y 319.<BR>                         
                                                    San Juan de Pasto.<BR>                        
                                                    <a href="http://www.iucesmag.edu.co">www.iucesmag.edu.co</a>- email:<a href="../ghumanaiucesmag@hotmail.com">ghumanaiucesmag@hotmail.com</a></td>
                                      </tr><tr><td colspan="4" align="center">&nbsp;</td>
                                    </tr>
                            </table>  
                      </div>
                 </div>
				 
				 
				 <!------------------------------------PESTAÑA 4---------------------------------------------->
                
                     <div id="CollapsiblePanel4" class="CollapsiblePane3">
						<div class="CollapsiblePanelTab" tabindex="3">
							<div align="left"><span class="tit_botonera_grande">Coordinador Area Derecho Público, para los Consultorios Jurídicos.</div>
                        </div>
		
					  <div class="TabbedPanelsContent">
							<table cellSpacing=1 cellPadding=3 width="100%" border=0>
                              <tr>
                                <td>
                                  <p class="tit_botonera_grande">
                                  <table width="500" border="1">
                                    <tr>
                                      <td width="195" class="tit_botonera_grande">DENOMINACI&Oacute;N DEL CARGO</td>
                                      <td width="289" class="text_gris">Coordinador Area Derecho Público, para los Consultorios Jurídicos.</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">DEDICACIÓN</td>
                                      <td class="text_gris">Medio Tiempo</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">JEFE INMEDIATO&nbsp;&nbsp;</td>
                                      <td class="text_gris">Director Consultorios Jurídicos</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">SALARIO&nbsp;</td>
                                      <td class="text_gris"><em>$ 1.134.000</em></td>
                                    </tr>
                                  </table>
								  
								  <br />
								  
								  <p><span class="tit_botonera_grande">OBJETIVO DEL CARGO:</span></p>
								  <p align="justify" class="text_gris">
										Asesorar a los estudiantes practicantes en los asuntos relacionados a las consultas como defensores de oficio ante entidades públicas con base en la reglamentación existente, para garantizar el cumplimiento de la misión del espacio de práctica del programa de derecho.
                                  </p>
								  <p><span class="tit_botonera_grande">FUNCIONES Y RESPONSABILIDADES:</span></p>
                                  <p align="justify" class="text_gris">
										<b>1.	</b>Realizar el cronograma semestral de actividades conforme al area de atención.<BR>
										<b>2.	</b>Asesorar a estudiantes practicantes.<BR>
										<b>3.	</b>Realizar la inducción de práctica a los estudiantes inscritos en los Consultorios jurídicos I.<BR>
										<b>4.	</b>Evaluar a los estudiantes practicantes.<BR>
										<b>5.	</b>Revisar las actas y constancias emitidas en el Centro de Conciliación.<BR>
										<b>6.	</b>Hacer seguimiento a los convenios interinstitucionales.<BR>
										<b>7.	</b>Realizar reportes de las actividades.
                                  </p>
								  <p><span class="tit_botonera_grande">REQUISITOS:</span></p>
                                  <p align="justify" class="text_gris">
										<b>1.	</b>Acreditar título de abogado.<BR>
										<b>2.	</b>Preferiblemente con postgrado en cualquier área del derecho.<BR>
										<b>3.	</b>Experiencia profesional de 3 a 5 años.
                                  </p>
								  <p><span class="tit_botonera_grande">HABILIDADES DEL CARGO:</span></p>
								  <p align="justify" class="text_gris">
										Toma de decisiones, Análisis de información, evaluación.
                                  </p>
								  <p><span class="tit_botonera_grande">DEL CARGO:</span></p>
								  <p align="justify" class="text_gris">
										Capacidad de escucha, Don de gente, Excelente presentación personal.
                                  </p>
                                  <TR>
                                    <TD>
                                        <p align="justify"><u><span class="Estilo14"><strong>Importante: </strong></span></u><span class="tit_botonera_menu Estilo11"><strong>Para radicar su hoja de vida, deber&aacute; presentarla en el formato institucional, que se encuentra publicado en la p&aacute;gina web de la instituci&oacute;n: www.iucesmag.edu.co, link Convocatorias.  Diligenciando el formato No. 2 (Hoja de vida para personal administrativo) con el cumplimiento total de los requisitos exigidos para el cargo, debidamente soportados.  Para la puntuaci&oacute;n de las hojas de vida se tendr&aacute; en cuenta &uacute;nicamente las certificaciones anexas a la misma.</strong></span></p>
                                        <p><font color="#FF0000">2. <a href="http://www.iucesmag.edu.co/pdfpubli/Formulario_funcionarios_N_2.pdf" target="_blank"> Formato hoja de vida Funcionarios (Descargar) </a></font></p>
                                     </TD>
                                   </TR>  
                            </table>
                            <table border='1' cellspacing="3" class="text_gris">
                            <tr bgcolor="#FFFFFF">
                                      <td colspan="4" align="center"><strong>CALENDARIO</strong></td>
                                    </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>RECEPCI&Oacute;N DE HOJAS DE VIDA:</strong></td>
                                      <td colspan="2"><span class="tit_botonera_menu Estilo11"><span class="Estilo14">Hasta 27 de enero de 2012</span></span></td>
                                    </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>SELECCIONADOS PARA PRUEBA DE CONOCIMIENTOS:</strong></td>
                                      <td colspan="2" class="text_gris">30 de enero de 2012</td>
                                    </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>PRUEBA DE CONOCIMIENTOS:</strong></td>
                                      <td colspan="2" class="text_gris">31 de enero de 2012</td>
                                    </tr>
									<tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>PRUEBA PSICOTECNICA:</strong></td>
                                      <td colspan="2" class="text_gris">3 de febrero de 2012</td>
                                      </tr>
                                   
									<tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>ENTREVISTA:</strong></td>
                                      <td colspan="2" class="text_gris">6 de febrero de 2012</td>
                                    </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>PUBLICACI&Oacute;N DE RESULTADOS:</strong></td>
                                      <td colspan="2"><span class="text_gris">7 de febrero de 2012</span></td>
                                      </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="4" align="center"><strong>Las hojas de vida no seleccionadas ser&aacute;n entregadas del 13  al 17 de febrero  de 2012, de no ser reclamadas ser&aacute;n destruidas despu&eacute;s de esta fecha.</strong></td>
                                    </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="4" align="center">&nbsp;</td></tr>
                                        <tr><td colspan="4"><p align="center"><u><strong>Mayor Información</strong></u><strong>:  </strong>                    
                                                    <BR>Cra 20 A No. 15-54 Sede Administrativa. Of. 212 Tel 21 65 35 ext. 212 y 319.<BR>                         
                                                    San Juan de Pasto.<BR>                        
                                                    <a href="http://www.iucesmag.edu.co">www.iucesmag.edu.co</a>- email:<a href="../ghumanaiucesmag@hotmail.com">ghumanaiucesmag@hotmail.com</a></td>
                                      </tr><tr><td colspan="4" align="center">&nbsp;</td>
                                    </tr>
                            </table>  
                      </div>
                 </div>
                
                
                <!------------------------------------PESTAÑA 5---------------------------------------------->
                
           
                     <div id="CollapsiblePanel5" class="CollapsiblePane4">
						<div class="CollapsiblePanelTab" tabindex="4">
							<div align="left"><span class="tit_botonera_grande">CONVOCATORIA 3B</div>
                        </div>
				
				<div class="TabbedPanelsContent">
					<TABLE border = "1" align = "center" width="500">
            		<TR>
            		  <TD colspan="2" align="center" class="text_gris"><strong class="tit_azul">CONVOCATORIA <br /> 3B</strong></TD></TR>
              		<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">ENTIDAD CONVOCANTE:</span></TD>
              		  <TD width="340" align='justify'><span class="text_gris">INSTITUCI&Oacute;N UNIVERSITARIA CENTRO DE ESTUDIOS SUPERIORES MARIA GORETTI “I.U CESMAG”, Instituci&oacute;n Privada de Educaci&oacute;n Superior, de Utilidad Com&uacute;n, sin &aacute;nimo de lucro.</span></TD>
              		</TR> 
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">DEPENDENCIA:</span></TD>
              		  <TD width="340"><span class="text_gris">Rector&iacute;a.</span></TD>
              		</TR> 
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">DIRECCI&Oacute;N:</span></TD>
              		  <TD width="340"><span class="text_gris">Carrera 20 A N° 14-54</span></TD>
              		</TR> 
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">CIUDAD:</span></TD>
              		  <TD width="340"><span class="text_gris">San Juan de Pasto.</span></TD>
              		</TR> 
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">TIPO DE PROCESO:</span></TD>
              		  <TD width="340"><span class="text_gris">Convocatoria abierta para posterior preselecci&oacute;n privada.</span></TD>
              		</TR>
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">REQUISITO INICIAL:</span></TD>
              		  <TD width="340"><span class="text_gris">Carta de intenci&oacute;n a participar seg&uacute;n informaci&oacute;n solicitada en carta de invitaci&oacute;n de rector&iacute;a.</span></TD>
              		</TR>
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">RESPALDO INICIAL SOLICITADO:</span></TD>
              		  <TD width="340"><span class="text_gris">A los preseleccionados, garant&iacute;a de seriedad de la propuesta.</span></TD>
              		</TR>
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">FECHA LIMITE DE RECEPCION DE LAS CARTAS:</span></TD>
              		  <TD width="340"><span class="text_gris">25 D&Iacute;AS DEL MES DE NOVIEMBRE DE 2011.</span></TD>
              		</TR>
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">CONVOCATORIA No.:</span></TD>
              		  <TD width="340"><span class="text_gris">003B</span></TD>
              		</TR> 
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">OBJETO GENERAL:</span></TD>
              		  <TD width="340"><span class="text_gris">Suministro e instalaci&oacute;n de: cableado estructurado para voz y datos; circuito cerrado de televisi&oacute;n; detectores de humo y t&eacute;rmicos con estaciones manuales y sirena estrobosc&oacute;pica, para alarmas de incendio; detectores de intrusi&oacute;n; sonido ambiental y señal de TV. Distribuci&oacute;n de la red de energ&iacute;a regulada soportada por UPS y energ&iacute;a normal.</span></TD>
              		</TR> 
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">DESCRIPCI&Oacute;N <BR> DE LAS OBRAS:</span></TD>
              		  <TD width="340"><span class="text_gris">La I.U. CESMAG para el edificio Sicilia, de acuerdo al  estudio previo que se realiz&oacute; para la instituci&oacute;n, busca una persona natural o jur&iacute;dica que garantice una infraestructura de alta calidad t&eacute;cnica del servicio inform&aacute;tico y comunicacional para contar con medios de acceso a internet, teleconferencias, comunicabilidad en tiempo real desde los diferentes puntos del edificio.  Lo anterior de acuerdo a los planos y  a las especificaciones t&eacute;cnicas. Todas las obras incluyen cableado, accesorios, equipos, suplementos, corte y resane en panel de fibrocemento, en paredes y pisos, desperdicios, limpieza, desalojos y dem&aacute;s requerimientos t&eacute;cnicos y materiales hasta su acabado completo final, los cuales deben estimarse en los costos dado que no se reconocer&aacute;n de manera independiente. Podr&aacute;n proponerse productos similares a los especificados si estos demuestran garant&iacute;as equivalentes y est&aacute;n debidamente normalizados y comercializados en el pa&iacute;s.</span></TD>
              		</TR> 
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">TIEMPO MAXIMO DE EJECUCI&Oacute;N ESTIMADO:</span></TD>
              		  <TD width="340"><span class="text_gris">Seis (6) meses.</span></TD>
              		</TR> 
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">VALOR ESTIMADO:</span></TD>
              		  <TD width="340"><span class="text_gris">$ 1.000 millones  aproximadamente.</span></TD>
              		</TR> 
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">EXPERIENCIA REQUERIDA:</span></TD>
              		  <TD width="340"><span class="text_gris">Las firmas invitadas o sus integrantes, deben acreditar mediante certificaci&oacute;n, ser una Empresa de Ingenier&iacute;a Especializada o ingeniero electricista, el&eacute;ctrico o de sistemas con m&aacute;s de 10 años de experiencia espec&iacute;fica. Demostrar esa experiencia espec&iacute;fica en la construcci&oacute;n de edificaciones educativas o similares en un &aacute;rea m&iacute;nima de 2.500 M2 y una experiencia acumulada de construcci&oacute;n m&iacute;nima de 10.000 M2. Haber construido  sistemas de cableado estructurado y en general de telecomunicaciones en empresas con m&aacute;s de 1000 puntos de voz y datos, preferiblemente del &aacute;rea acad&eacute;mica o similares.</span></TD>
              		</TR> 
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">EXPERIENCIA ESPEC&Iacute;FICA:</span></TD>
              		  <TD width="340"><span class="text_gris">Demostrar por certificados  el suministro de equipos y cableado estructurado.</span></TD>
              		</TR>
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">PROCESO:</span></TD>
              		  <TD width="340"><span class="text_gris">Construcci&oacute;n de una red de cableado estructurado para  permitir articular los edificios universitarios de la I.U.CESMAG y sistemas comunicacionales en forma din&aacute;mica y actualizaci&oacute;n permanente acorde a los prop&oacute;sitos acad&eacute;micos y a los requerimientos de la calidad de la educaci&oacute;n superior, incorporando a la vez servicios de seguridad, trasmisi&oacute;n de datos, voz, TV, etc. Asegurando el control de calidad, ahorro de energ&iacute;a y certificaci&oacute;n ambiental de acuerdo a las respectivas normas vigentes aplicables.</span></TD>
              		</TR>
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">ADJUNTOS:</span></TD>
              		  <TD width="340"><span class="text_gris">
						 <ul>
						 <li><a href="../pdfpubli/Publicar/Carta_invitacion_rectoria.doc" target="_blank">Carta de Invitaci&oacute;n de Rectoria.</a></li>
						 <li><a href="../pdfpubli/Publicar/Convocatoria_Propuesta.doc" target="_blank">Convocatoria Propuesta.</a></li> 
						 <li><a href="../pdfpubli/Publicar/Contrato_3A_electricas_edificio_sicilia_ feb_14_2011.doc" target="_blank">Contrato Numero 3A Electricas Edificio Sicilia (feb 14 2011).</a></li>
						 <li><a href="../pdfpubli/Publicar/Proyecto_final.pdf" target="_blank">Proyecto Final.</a></li>
						 <li><a href="../pdfpubli/Publicar/Memorias_proyecto_edificio_Instituto_universitario_CESMAG.xls" target="_blank">Memorias Proyecto Edificio Instituto universitario CESMAG de Pasto Cableado Dato.</a></li>
                         </ul>
						 <li> Anexo I - Planos.</li>
						 <ul>
						 <li><a href="../pdfpubli/Publicar/Anexo1_planta_mezanine1.rar" target="_blank"> PLANTA MEZANINE 1.</a></li>
						 <li><a href="../pdfpubli/Publicar/Anexo1_planta_mezanine2.rar" target="_blank"> PLANTA MEZANINE 2.</a></li>
						 <li><a href="../pdfpubli/Publicar/Anexo1_planta_primer_piso.rar" target="_blank"> PLANTA PRIMER PISO.</a></li>
						 <li><a href="../pdfpubli/Publicar/Anexo1_planta_segundo_piso.rar" target="_blank"> PLANTA SEGUNDO PISO.</a></li>
						 <li><a href="../pdfpubli/Publicar/Anexo1_planta_tercer_piso.rar" target="_blank"> PLANTA TERCER PISO.</a></li>
						 <li><a href="../pdfpubli/Publicar/Anexo1_planta_cuarto_piso.rar" target="_blank"> PLANTA CUARTO PISO.</a></li>
						 <li><a href="../pdfpubli/Publicar/Anexo1_planta_quinto_piso.rar" target="_blank"> PLANTA QUINTO PISO.</a></li>
						 <li><a href="../pdfpubli/Publicar/Anexo1_planta_sexto_piso.rar" target="_blank"> PLANTA SEXTO PISO.</a></li>
						 <li><a href="../pdfpubli/Publicar/Anexo1_planta_parqueaderos.rar" target="_blank"> PLANTA DE PARQUEADEROS.</a></li>
						 </ul>
						 <!--<li>Anexo II – Planos de Regulada, Iluminaci&oacute;n y Comunicaciones</li>
						 <ul>
						  <li><a href="../pdfpubli/Publicar/Anexo2_Parqueaderos.rar" target="_blank"> Planta de Parqueaderos.</a></li>
						 <li><a href="../pdfpubli/Publicar/Anexo2_Mezanine1.rar" target="_blank"> Planta Mezanine 1.</a></li>
						 <li><a href="../pdfpubli/Publicar/Anexo2_Primer_piso.rar" target="_blank"> Planta Primer Piso.</a></li>
						 <li><a href="../pdfpubli/Publicar/Anexo2_Mezanine2.rar" target="_blank"> Planta Mezanine 2.</a></li>
						 <li><a href="../pdfpubli/Publicar/Anexo2_Segundo_piso.rar" target="_blank"> Planta Segundo Piso.</a></li>
						 <li><a href="../pdfpubli/Publicar/Anexo2_Tercer_piso.rar" target="_blank"> Planta Tercer Piso.</a></li>
						 <li><a href="../pdfpubli/Publicar/Anexo2_Cuarto_piso.rar" target="_blank"> Planta Cuarto Piso.</a></li>
						 <li><a href="../pdfpubli/Publicar/Anexo2_Quinto_piso.rar" target="_blank"> Planta Quinto Piso.</a></li>
						 <li><a href="../pdfpubli/Publicar/Anexo2_Sexto_piso.rar" target="_blank"> Planta Sexto Piso.</a></li>
						 </ul>-->
					  </span>
					  </TD>
              		</TR>
					</TABLE>
                </div>
				</div>
				
                
                
                <!------------------------------------PESTAÑA 6---------------------------------------------->
                
                     <div id="CollapsiblePanel6" class="CollapsiblePane5">
						<div class="CollapsiblePanelTab" tabindex="5">
							<div align="left"><span class="tit_botonera_grande">CONVOCATORIA PARA LA ADQUISICION E INSTALACION DE LAS SILLAS DE LOS AUDITORIOS 1 y 2 DEL EDIFICIO SICILIA DE LA I.U. CESMAG.</div>
                        </div>
				
				<div class="TabbedPanelsContent">
					<TABLE border = "1" align = "center" width="500">
            		<TR>
            		  <TD colspan="2" align="center" class="text_gris"><strong class="tit_azul">CONVOCATORIA <br /> 005-2011</strong></TD></TR>
              		<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">ENTIDAD CONVOCANTE:</span></TD>
              		  <TD width="340" align='justify'><span class="text_gris">INSTITUCI&Oacute;N UNIVERSITARIA CENTRO DE ESTUDIOS SUPERIORES MARIA GORETTI “I.U CESMAG”, Instituci&oacute;n Privada de Educaci&oacute;n Superior, de Utilidad Com&uacute;n, sin &aacute;nimo de lucro.</span></TD>
              		</TR> 
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">DEPENDENCIA:</span></TD>
              		  <TD width="340"><span class="text_gris">Rector&iacute;a.</span></TD>
              		</TR> 
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">DIRECCI&Oacute;N:</span></TD>
              		  <TD width="340"><span class="text_gris">Carrera 20 A N° 14-54</span></TD>
              		</TR> 
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">CIUDAD:</span></TD>
              		  <TD width="340"><span class="text_gris">San Juan de Pasto.</span></TD>
              		</TR> 
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">OBJETO GENERAL:</span></TD>
              		  <TD width="340"><span class="text_gris">ADQUISICION E INSTALACION DE LAS SILLAS DE LOS AUDITORIOS 1 y 2 DEL EDIFICIO SICILIA DE LA I.U. CESMAG.</span></TD>
              		</TR>
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">&nbsp;&nbsp;</span></TD>
              		  <TD width="340"><span class="text_gris">Consiste en la fabricaci&oacute;n, suministro y montaje de 412 sillas de los auditorios 1 y 2 del Edificio Sicilia, localizado en la ciudad de Pasto, las cuales tienen las especificaciones t&eacute;cnicas mínimas descritas en el anexo 1.</span></TD>
              		</TR>
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">TIEMPO MAXIMO DE EJECUCION ESTIMADO:</span></TD>
              		  <TD width="340"><span class="text_gris">Cuatro (4) meses.</span></TD>
              		</TR>
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">VALOR ESTIMADO:</span></TD>
              		  <TD width="340"><span class="text_gris">Oferta abierta.</span></TD>
              		</TR>
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">EXPERIENCIA REQUERIDA:</span></TD>
              		  <TD width="340"><span class="text_gris">Empresa de fabricaci&oacute;n y distribuci&oacute;n de muebles empresariales reconocida en Colombia.</span></TD>
              		</TR>
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">EXPERIENCIA ESPECIFICA O EMPRESA ASOCIADA:</span></TD>
              		  <TD width="340"><span class="text_gris">Demostrar experiencia específica en fabricaci&oacute;n, suministro y montaje de sillas para auditorios.</span></TD>
              		</TR> 
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">DOCUMENTOS:</span></TD>
              		  <TD width="340"><span class="text_gris">Los solicitados en la convocatoria, anexando suficientes elementos ilustrativos de los tipos de silla que est&aacute; ofreciendo.</span></TD>
              		</TR> 
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">INFORMACION ADICIONAL:</span></TD>
              		  <TD width="340"><span class="text_gris">www.iucesmag.edu.co</span></TD>
              		</TR> 
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">FECHA y LUGAR de la RECEPCION DE LA DOCUMENTACION:</span></TD>
              		  <TD width="340"><span class="text_gris">06 DÍAS DEL MES DE DICIEMBRE DE 2011 HASTA LAS 5.00 P.M. EN LA RECTORÍA DE LA I.U. CESMAG EN LA CIUDAD DE PASTO.</span></TD>
              		</TR>
					
					<TR>
              		  <TD width="186" height="19" class="tit_azul"><span class="tit_botonera_grande">ADJUNTOS:</span></TD>
              		  <TD width="340"><span class="text_gris">
						 <p> Para ampliar la informaci&oacute;n descargue el siguiente archivo.</p>
						 <ul>
							 <li><a href="../pdfpubli/Publicar/Convocatoria_005_2011.doc" target="_blank">CONVOCATORIA 005-2011 SILLAS AUDITORIO.</a></li>
						 </ul>
					  </span>
					  </TD>
              		</TR>
					</TABLE>
                </div>
				</div>
				
				
				<!------------------------------------PESTAÑA 7---------------------------------------------->
                     
                     <div id="CollapsiblePanel7" class="CollapsiblePane6">
						<div class="CollapsiblePanelTab" tabindex="6">
							<div align="left"><span class="tit_botonera_grande">RESULTADOS CONVOCATORIAS DOCENTE PARA PRUEBA PSICOTECNICA - IP2012</div>
                        </div>
					  
                      <div class="TabbedPanelsContent">
							<table cellSpacing=1 cellPadding=3 width="100%" border=0>
                              <tr>
                                <td>
                                  <p class="tit_botonera_grande">
                                  <table width="500" border="1">
								  
								    <tr>
                                      <td colspan='2' class="tit_botonera_grande" align='center'><span class="tit_botonera_menu Estilo11"><strong>
											LOS ASPIRANTES ESCOGIDOS PARA LA PRUEBA PSICOTECNICA<br>
											DEBEN ESTAR PENDIENTES DEL LLAMADO TELEFONICO DE LA<br>
											PSICOLOGA, QUIEN LES ASIGNARA LA CITA.
									  </strong></span></td>
                                    </tr>
								    
									<tr>
                                      <td colspan='2' height='10'>&nbsp;&nbsp;</td>
                                    </tr>
									
								    <tr>
                                      <td colspan='2' class="tit_botonera_grande" align='center'><span class="tit_botonera_menu Estilo11"><strong>PROGRAMA DE DERECHO</strong></span></td>
                                    </tr>
									
									<tr>
                                      <td colspan='2' height='10'>&nbsp;</td>
                                    </tr>
									
                                    <tr>
                                      <td width="195" class="tit_botonera_grande" colspan='2' align='center'>CONVOCATORIA Nro: 1</td>
                                    </tr>
									<tr>
                                      <td width="195" class="tit_botonera_grande">DENOMINACION DEL CARGO</td>
                                      <td width="289" class="text_gris">DOCENTE MEDIO TIEMPO (20 HORAS SEMANALES)</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">ASIGNATURAS</td>
                                      <td class="text_gris">1. ELECTIVA DE PROFUNDIZACIÓN III<br>2. DERECHO CIVIL</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">PERFIL</td>
                                      <td class="text_gris">ABOGADO EN EJERCICIO EN EL CAMPO DEL DERECHO PRIVADO</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">REQUISITOS</td>
                                      <td class="text_gris">
											&bull; ACREDITAR TITULO PROFESIONAL DE ABOGADO.<BR>
											&bull; PREFERIBLEMENTE CON POSTGRADO.<BR>
											&bull; EXPERIENCIA DOCENTE UNIVERSITARIA DOS AÑOS MINIMO.
									  </td>
                                    </tr>
									
									<tr><td colspan='2' align='center'><table border='1'>
									<tr><td class="tit_botonera_menu Estilo11" align="center" colspan='2'>SELECCIONADOS A PRUEBA PSICOTECNICA</td></tr>
									<tr><td class="tit_botonera_grande" align='center'>Nro</td><td class="tit_botonera_grande" align='center'>CEDULA</td></tr>
									<tr>
										<td align='center' class="text_gris">1</td>
										<td align="center" class="text_gris">
											1.085.263.114
										</td>
									</tr>
									</table></td></tr>
									
                                    <tr>
                                      <td colspan='2' height='10'>&nbsp;</td>
                                    </tr>
									
								    <tr>
                                      <td width="195" class="tit_botonera_grande" colspan='2' align='center'>CONVOCATORIA Nro: 2</td>
                                    </tr>
									<tr>
                                      <td width="195" class="tit_botonera_grande">DENOMINACION DEL CARGO</td>
                                      <td width="289" class="text_gris">DOCENTE HORA CATEDRA (10 HORAS SEMANALES)</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">ASIGNATURAS</td>
                                      <td class="text_gris">1. PROYECTO FINAL DE LA CARRERA EJECUCIÓN</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">PERFIL</td>
                                      <td class="text_gris">ABOGADO EN EJERCICIO CON EXPERIENCIA COMPROBADA EN INVESTIGACIÓN.</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">REQUISITOS</td>
                                      <td class="text_gris">
											&bull; ACREDITAR TITULO PROFESIONAL DE ABOGADO.<BR>
											&bull; PREFERIBLEMENTE CON POSTGRADO.<BR>
											&bull; HABER REALIZADO INVESTIGACIONES EN EN EL AREA O AFINES.<BR>
											&bull; EXPERIENCIA DOCENTE UNIVERSITARIA DOS AÑOS MINIMO.
									  </td>
                                    </tr>
								    
									<tr><td colspan='2' align='center'><table border='1'>
									<tr><td class="tit_botonera_menu Estilo11" align="center" colspan='2'>SELECCIONADOS A PRUEBA PSICOTECNICA</td></tr>
									<tr><td class="tit_botonera_grande" align='center'>Nro</td><td class="tit_botonera_grande" align='center'>CEDULA</td></tr>
									<tr>
										<td align='center' class="text_gris">1</td>
										<td align="center" class="text_gris">
											87.069.188
										</td>
									</tr>
									</table></td></tr>
									
									<tr>
                                      <td colspan='2' height='10'>&nbsp;</td>
                                    </tr>
									
									<tr>
                                      <td width="195" class="tit_botonera_grande" colspan='2' align='center'>CONVOCATORIA Nro: 3</td>
                                    </tr>
									<tr>
                                      <td width="195" class="tit_botonera_grande">DENOMINACION DEL CARGO</td>
                                      <td width="289" class="text_gris">DOCENTE MEDIO TIEMPO (20 HORAS SEMANALES)</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">ASIGNATURAS</td>
                                      <td class="text_gris">1. INFORMATICA JURIDICA</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">PERFIL</td>
                                      <td class="text_gris">ABOGADO EN EJERCICIO CON CONOCIMIENTOS EN INFORMATICA JURIDICA O INGENIERO DE SISTEMAS CON ESPECIALIZACION EN INFORMATICA JURIDICA.</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">REQUISITOS</td>
                                      <td class="text_gris">
											&bull; ACREDITAR TITULO PROFESIONAL DE ABOGADO O INGENIERO DE SISTEMAS.<BR>
											&bull; PREFERIBLEMENTE CON POSTGRADO.<BR>
											&bull; CAPACITACION COMPROBADA EN INFORMATICA JURIDICA.<BR>
											&bull; EXPERIENCIA DOCENTE UNIVERSITARIA DOS AÑOS MINIMO.
									  </td>
                                    </tr>
									
									<tr><td colspan='2' align='center'><table border='1'>
									<tr><td class="tit_botonera_menu Estilo11" align="center" colspan='2'>SELECCIONADOS A PRUEBA PSICOTECNICA</td></tr>
									<tr><td class="tit_botonera_grande" align='center'>Nro</td><td class="tit_botonera_grande" align='center'>CEDULA</td></tr>
									<tr>
										<td align='center' class="text_gris">1</td>
										<td align="center" class="text_gris">
											DESIERTA
										</td>
									</tr>
									</table></td></tr>
									
									<tr>
                                      <td colspan='2' height='10'>&nbsp;</td>
                                    </tr>
									
									<tr>
                                      <td width="195" class="tit_botonera_grande" colspan='2' align='center'>CONVOCATORIA Nro: 4</td>
                                    </tr>
									<tr>
                                      <td width="195" class="tit_botonera_grande">DENOMINACION DEL CARGO</td>
                                      <td width="289" class="text_gris">DOCENTE MEDIO TIEMPO (20 HORAS SEMANALES)</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">ASIGNATURAS</td>
                                      <td class="text_gris">1. SEGURIDAD SOCIAL RIESGO PROFESIONAL</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">PERFIL</td>
                                      <td class="text_gris">ABOGADO EN EJERCICIO CON CONOCIMIENTOS EN SEGURIDAD SOCIAL RIESGO PROFESIONAL.</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">REQUISITOS</td>
                                      <td class="text_gris">
											&bull; ACREDITAR TITULO PROFESIONAL DE ABOGADO.<BR>
											&bull; PREFERIBLEMENTE CON POSTGRADO, EN SEGURIDAD SOCIAL.<BR>
											&bull; EXPERIENCIA DOCENTE UNIVERSITARIA DOS AÑOS MINIMO.
									  </td>
                                    </tr>
									
									<tr><td colspan='2' align='center'><table border='1'>
									<tr><td class="tit_botonera_menu Estilo11" align="center" colspan='2'>SELECCIONADOS A PRUEBA PSICOTECNICA</td></tr>
									<tr><td class="tit_botonera_grande" align='center'>Nro</td><td class="tit_botonera_grande" align='center'>CEDULA</td></tr>
									<tr>
										<td align='center' class="text_gris">1</td>
										<td align="center" class="text_gris">
											36.752.936
										</td>
									</tr>
									</table></td></tr>
									
									<tr>
                                      <td colspan='2' height='10'>&nbsp;</td>
                                    </tr>
									
									<tr>
                                      <td width="195" class="tit_botonera_grande" colspan='2' align='center'>CONVOCATORIA Nro: 5</td>
                                    </tr>
									<tr>
                                      <td width="195" class="tit_botonera_grande">DENOMINACION DEL CARGO</td>
                                      <td width="289" class="text_gris">DOCENTE MEDIO TIEMPO (20 HORAS SEMANALES)</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">ASIGNATURAS</td>
                                      <td class="text_gris">1. DERECHO INTERNACIONAL PRIVADO</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">PERFIL</td>
                                      <td class="text_gris">ABOGADO EN EJERCICIO CON CONOCIMIENTOS EN DERECHO INTERNACIONAL PRIVADO.</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">REQUISITOS</td>
                                      <td class="text_gris">
											&bull; ACREDITAR TITULO PROFESIONAL DE ABOGADO.<BR>
											&bull; PREFERIBLEMENTE CON POSGRADO, EN DERECHO INTERNACIONAL.<BR>
											&bull; EXPERIENCIA DOCENTE UNIVERSITARIA DOS AÑOS MINIMO.
									  </td>
                                    </tr>
									
									<tr><td colspan='2' align='center'><table border='1'>
									<tr><td class="tit_botonera_menu Estilo11" align="center" colspan='2'>SELECCIONADOS A PRUEBA PSICOTECNICA</td></tr>
									<tr><td class="tit_botonera_grande" align='center'>Nro</td><td class="tit_botonera_grande" align='center'>CEDULA</td></tr>
									<tr>
										<td align='center' class="text_gris">1</td>
										<td align="center" class="text_gris">
											1.085.263.114
										</td>
									</tr>
									</table></td></tr>
									
									<tr>
                                      <td colspan='2' height='10'>&nbsp;</td>
                                    </tr>
									
									<tr>
                                      <td width="195" class="tit_botonera_grande" colspan='2' align='center'>CONVOCATORIA Nro: 6</td>
                                    </tr>
									<tr>
                                      <td width="195" class="tit_botonera_grande">DENOMINACION DEL CARGO</td>
                                      <td width="289" class="text_gris">DOCENTE HORA CATEDRA (8 HORAS SEMANALES)</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">ASIGNATURAS</td>
                                      <td class="text_gris">1. DERECHO LABORAL COLECTIVO</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">PERFIL</td>
                                      <td class="text_gris">ABOGADO EN EJERCICIO CON CONOCIMIENTOS Y APLICACIÓN DEL DERECHO LABORAL COLECTIVO.</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">REQUISITOS</td>
                                      <td class="text_gris">
											&bull; ACREDITAR TITULO PROFESIONAL DE ABOGADO.<BR>
											&bull; PREFERIBLEMENTE CON POSTGRADO, EN DERECHO LABORAL.<BR>
											&bull; EXPERIENCIA DOCENTE UNIVERSITARIA DOS AÑOS MINIMO.
									  </td>
                                    </tr>
									
									<tr><td colspan='2' align='center'><table border='1'>
									<tr><td class="tit_botonera_menu Estilo11" align="center" colspan='2'>SELECCIONADOS A PRUEBA PSICOTECNICA</td></tr>
									<tr><td class="tit_botonera_grande" align='center'>Nro</td><td class="tit_botonera_grande" align='center'>CEDULA</td></tr>
									<tr>
										<td align='center' class="text_gris">1</td>
										<td align="center" class="text_gris">
											DESIERTA
										</td>
									</tr>
									</table></td></tr>
									
									<tr>
                                      <td colspan='2' height='10'>&nbsp;</td>
                                    </tr>
									
									<tr>
                                      <td width="195" class="tit_botonera_grande" colspan='2' align='center'>CONVOCATORIA Nro: 7</td>
                                    </tr>
									<tr>
                                      <td width="195" class="tit_botonera_grande">DENOMINACION DEL CARGO</td>
                                      <td width="289" class="text_gris">DOCENTE MEDIO TIEMPO (20 HORAS SEMANALES)</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">ASIGNATURAS</td>
                                      <td class="text_gris">1. ELECTIVA BASICA ADMINISTRACION Y CONTABILIDAD</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">PERFIL</td>
                                      <td class="text_gris">ADMINISTRADOR DE EMPRESAS ó CONTADOR PUBLICO.</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">REQUISITOS</td>
                                      <td class="text_gris">
											&bull; ACREDITAR TITULO PROFESIONAL DE ADMINISTRADOR DE EMPRESAS ó  CONTADOR PUBLICO.<BR>
											&bull; PREFERIBLEMENTE CON POSTGRADO.<BR>
											&bull; EXPERIENCIA DOCENTE UNIVERSITARIA DOS AÑOS MINIMO.
									  </td>
                                    </tr>
									
									<tr><td colspan='2' align='center'><table border='1'>
									<tr><td class="tit_botonera_menu Estilo11" align="center" colspan='2'>SELECCIONADOS A PRUEBA PSICOTECNICA</td></tr>
									<tr><td class="tit_botonera_grande" align='center'>Nro</td><td class="tit_botonera_grande" align='center'>CEDULA</td></tr>
									<tr>
										<td align='center' class="text_gris">1</td>
										<td align="center" class="text_gris">
											98.385.093
										</td>
									</tr>
									</table></td></tr>
									
									<tr>
                                      <td colspan='2' height='10'>&nbsp;</td>
                                    </tr>
									
									<tr>
                                      <td width="195" class="tit_botonera_grande" colspan='2' align='center'>CONVOCATORIA Nro: 8</td>
                                    </tr>
									<tr>
                                      <td width="195" class="tit_botonera_grande">DENOMINACION DEL CARGO</td>
                                      <td width="289" class="text_gris">DOCENTE MEDIO TIEMPO (20 HORAS SEMANALES)</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">ASIGNATURAS</td>
                                      <td class="text_gris">1. DERECHO PROCESAL LABORAL </td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">PERFIL</td>
                                      <td class="text_gris">ABOGADO EN EJERCICIO CON CONOCIMIENTOS EN DERECHO LABORAL Y PROCEDIMIENTO LABORAL.</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">REQUISITOS</td>
                                      <td class="text_gris">
											&bull; ACREDITAR TITULO PROFESIONAL DE ABOGADO.<BR>
											&bull; PREFERIBLEMENTE CON POSTGRADO, EN DERECHO LABORAL.<BR>
											&bull; EXPERIENCIA DOCENTE UNIVERSITARIA DOS AÑOS MINIMO.
									  </td>
                                    </tr>
									
									<tr><td colspan='2' align='center'><table border='1'>
									<tr><td class="tit_botonera_menu Estilo11" align="center" colspan='2'>SELECCIONADOS A PRUEBA PSICOTECNICA</td></tr>
									<tr><td class="tit_botonera_grande" align='center'>Nro</td><td class="tit_botonera_grande" align='center'>CEDULA</td></tr>
									<tr>
										<td align='center' class="text_gris">1</td>
										<td align="center" class="text_gris">
											87.065.392
										</td>
									</tr>
									</table></td></tr>
									
									<tr>
                                      <td colspan='2' height='10'>&nbsp;</td>
                                    </tr>
									
									<tr>
                                      <td width="195" class="tit_botonera_grande" colspan='2' align='center'>CONVOCATORIA Nro: 9</td>
                                    </tr>
									<tr>
                                      <td width="195" class="tit_botonera_grande">DENOMINACION DEL CARGO</td>
                                      <td width="289" class="text_gris">DOCENTE HORA CATEDRA (8 HORAS SEMANALES)</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">ASIGNATURAS</td>
                                      <td class="text_gris">1. HISTORIA DE LAS IDEAS POLITICAS Y DEL DERECHO</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">PERFIL</td>
                                      <td class="text_gris">ABOGADO EN EJERCICIO CON CONOCIMIENTOS EN TEORIA DEL ESTADO Y DERECHO.</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">REQUISITOS</td>
                                      <td class="text_gris">
											&bull; ACREDITAR TITULO PROFESIONAL DE ABOGADO.<BR>
											&bull; PREFERIBLEMENTE CON POSTGRADO.<BR>
											&bull; EXPERIENCIA DOCENTE UNIVERSITARIA DOS AÑOS MINIMO.
									  </td>
                                    </tr>
									
									<tr><td colspan='2' align='center'><table border='1'>
									<tr><td class="tit_botonera_menu Estilo11" align="center" colspan='2'>SELECCIONADOS A PRUEBA PSICOTECNICA</td></tr>
									<tr><td class="tit_botonera_grande" align='center'>Nro</td><td class="tit_botonera_grande" align='center'>CEDULA</td></tr>
									<tr>
										<td align='center' class="text_gris">1</td>
										<td align="center" class="text_gris">
											98.381.023
										</td>
									</tr>
									</table></td></tr>
									
									<tr>
                                      <td colspan='2' height='10'>&nbsp;</td>
                                    </tr>
									
									<tr>
                                      <td width="195" class="tit_botonera_grande" colspan='2' align='center'>CONVOCATORIA Nro: 10</td>
                                    </tr>
									<tr>
                                      <td width="195" class="tit_botonera_grande">DENOMINACION DEL CARGO</td>
                                      <td width="289" class="text_gris">DOCENTE HORA CATEDRA (8 HORAS SEMANALES)</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">ASIGNATURAS</td>
                                      <td class="text_gris">1. FILOSOFIA DEL DERECHO</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">PERFIL</td>
                                      <td class="text_gris">ABOGADO EN EJERCICIO CON CONOCIMIENTOS EN TEORIA DEL ESTADO Y ARGUMENTACION JURIDICA.</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">REQUISITOS</td>
                                      <td class="text_gris">
											&bull; ACREDITAR TITULO PROFESIONAL DE ABOGADO.<BR>
											&bull; PREFERIBLEMENTE CON POSTGRADO.<BR>
											&bull; EXPERIENCIA DOCENTE UNIVERSITARIA DOS AÑOS MINIMO.
									  </td>
                                    </tr>
									
									<tr><td colspan='2' align='center'><table border='1'>
									<tr><td class="tit_botonera_menu Estilo11" align="center" colspan='2'>SELECCIONADOS A PRUEBA PSICOTECNICA</td></tr>
									<tr><td class="tit_botonera_grande" align='center'>Nro</td><td class="tit_botonera_grande" align='center'>CEDULA</td></tr>
									<tr>
										<td align='center' class="text_gris">1</td>
										<td align="center" class="text_gris">
											98.392.424
										</td>
									</tr>
									</table></td></tr>
									
									<tr>
                                      <td colspan='2' height='10'>&nbsp;</td>
                                    </tr>
									
									<tr>
                                      <td width="195" class="tit_botonera_grande" colspan='2' align='center'>CONVOCATORIA Nro: 11</td>
                                    </tr>
									<tr>
                                      <td width="195" class="tit_botonera_grande">DENOMINACION DEL CARGO</td>
                                      <td width="289" class="text_gris">DOCENTE MEDIO TIEMPO (20 HORAS SEMANALES)</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">ASIGNATURAS</td>
                                      <td class="text_gris">1. DERECHO DE FAMILIA Y LEGISLACION DE LA INFANCIA Y ADOLESCENCIA</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">PERFIL</td>
                                      <td class="text_gris">ABOGADO EN EJERCICIO CON CONOCIMIENTOS EN FAMILIA Y LEGISLACION DE LA INFANCIA Y ADOLESCENCIA.</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">REQUISITOS</td>
                                      <td class="text_gris">
											&bull; ACREDITAR TITULO PROFESIONAL DE ABOGADO.<BR>
											&bull; PREFERIBLEMENTE CON POSTGRADO, EN DERECHO DE FAMILIA Y LEGISLACION DE LA INFANCIA Y LA ADOLESCENCIA.<BR>
											&bull; EXPERIENCIA DOCENTE UNIVERSITARIA DOS AÑOS MINIMO.
									  </td>
                                    </tr>
									
									<tr><td colspan='2' align='center'><table border='1'>
									<tr><td class="tit_botonera_menu Estilo11" align="center" colspan='2'>SELECCIONADOS A PRUEBA PSICOTECNICA</td></tr>
									<tr><td class="tit_botonera_grande" align='center'>Nro</td><td class="tit_botonera_grande" align='center'>CEDULA</td></tr>
									<tr>
										<td align='center' class="text_gris">1</td>
										<td align="center" class="text_gris">
											87.100.379
										</td>
									</tr>
									</table></td></tr>
									
                                  </table>
								  
								  
								  <!-- ************************ -->
								  <br /><br />
								  
								  <table width="500" border="1">
								    <tr>
                                      <td colspan='2' class="tit_botonera_grande" align='center'><span class="tit_botonera_menu Estilo11"><strong>FACULTAD DE CIENCIAS ADMINISTRATIVAS Y CONTABLES</strong></span></td>
                                    </tr>
									
									<tr>
                                      <td colspan='2' height='10'>&nbsp;</td>
                                    </tr>
									
                                    <tr>
                                      <td width="195" class="tit_botonera_grande" colspan='2' align='center'>CONVOCATORIA Nro: 12</td>
                                    </tr>
									<tr>
                                      <td width="195" class="tit_botonera_grande">DENOMINACION DEL CARGO</td>
                                      <td width="289" class="text_gris">DOCENTE MEDIO TIEMPO (20 HORAS SEMANALES)</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">ASIGNATURAS</td>
                                      <td class="text_gris">1. GESTION DE CALIDAD <br /> 2. ESTADISTICA DESCRIPTIVA <br /> 3. ESTADISTICA INFERENCIAL</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">PERFIL</td>
                                      <td class="text_gris">INGENIERO INDUSTRIAL</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">REQUISITOS</td>
                                      <td class="text_gris">
											&bull; ACREDITAR TITULO DE INGENIERO INDUSTRIAL.<BR>
											&bull; CONOCIMIENTOS EN ESTADISTICA DESCRIPTIVA E INFERENCIAL.<BR>
											&bull; PREFERIBLEMENTE CON POSTGRADO.<BR>
											&bull; EXPERIENCIA DOCENTE UNIVERSITARIA DOS AÑOS MINIMO.<BR>
											&bull; HABER REALIZADO INVESTIGACIONES EN EN EL AREA O AFINES.<BR>
											&bull; DISPONIBILIADAD: DIURNA Y NOCTURNA.<BR>
									  </td>
                                    </tr>
									
									<tr><td colspan='2' align='center'><table border='1'>
									<tr><td class="tit_botonera_menu Estilo11" align="center" colspan='2'>SELECCIONADOS A PRUEBA PSICOTECNICA</td></tr>
									<tr><td class="tit_botonera_grande" align='center'>Nro</td><td class="tit_botonera_grande" align='center'>CEDULA</td></tr>
									<tr>
										<td align='center' class="text_gris">1</td>
										<td align="center" class="text_gris">
											98.383.525
										</td>
									</tr>
									</table></td></tr>
									
                                    <tr>
                                      <td colspan='2' height='10'>&nbsp;</td>
                                    </tr>
									
								    <tr>
                                      <td width="195" class="tit_botonera_grande" colspan='2' align='center'>CONVOCATORIA Nro: 13</td>
                                    </tr>
									<tr>
                                      <td width="195" class="tit_botonera_grande">DENOMINACION DEL CARGO</td>
                                      <td width="289" class="text_gris">DOCENTE MEDIO TIEMPO (20 HORAS SEMANALES)</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">ASIGNATURAS</td>
                                      <td class="text_gris">1. CONTABILIDAD DE COSTOS I<br />2. ELECTIVA PROFESIONAL I<br />3. CONTABILIDAD DE GESTION</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">PERFIL</td>
                                      <td class="text_gris">CONTADOR PUBLICO.</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">REQUISITOS</td>
                                      <td class="text_gris">
											&bull; * ACREDITAR TITULO DE CONTADOR PUBLICO.<BR>
											&bull; * PREFERIBLEMENTE CON POSTGRADO.<BR>
											&bull; * EXPERIENCIA DOCENTE UNIVERSITARIA DOS AÑOS MINIMO.<BR>
											&bull; * HABER REALIZADO INVESTIGACIONES EN EN EL AREA O AFINES.<BR>
											&bull; * ESPERIENCIA PROFESIONAL EN EL AREA O AFIN.<BR>
											&bull; * DISPONIBILIDAD: DIURNA Y NOCTURNA.
									  </td>
                                    </tr>
									
									<tr><td colspan='2' align='center'><table border='1'>
									<tr><td class="tit_botonera_menu Estilo11" align="center" colspan='2'>SELECCIONADOS A PRUEBA PSICOTECNICA</td></tr>
									<tr><td class="tit_botonera_grande" align='center'>Nro</td><td class="tit_botonera_grande" align='center'>CEDULA</td></tr>
									<tr>
										<td align='center' class="text_gris">1<br>2<br>3</td>
										<td align="center" class="text_gris">
											5.204.248<br>
											12.988.255<br>
											12.996.700
										</td>
									</tr>
									</table></td></tr>
									
									<tr>
                                      <td colspan='2' height='10'>&nbsp;</td>
                                    </tr>
									
									<tr>
                                      <td width="195" class="tit_botonera_grande" colspan='2' align='center'>CONVOCATORIA Nro: 14</td>
                                    </tr>
									<tr>
                                      <td width="195" class="tit_botonera_grande">DENOMINACION DEL CARGO</td>
                                      <td width="289" class="text_gris">DOCENTE HORA CATEDRA (8 HORAS SEMANALES)</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">ASIGNATURAS</td>
                                      <td class="text_gris">1. SOFTWARE CONTABLE I (PAQUETE CONTABLE SIIGO)<br />2. LABORATORIO CONTABLE SISTEMATIZADO I (PAQUETE CONTABLE SIIGO)</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">PERFIL</td>
                                      <td class="text_gris">CONTADOR PUBLICO.</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">REQUISITOS</td>
                                      <td class="text_gris">
											&bull; ACREDITAR TITULO DE CONTADOR PUBLICO.<BR>
											&bull; PREFERIBLEMENTE CON POSTGRADO.<BR>
											&bull; EXPERIENCIA DOCENTE UNIVERSITARIA DOS AÑOS MINIMO.<BR>
											&bull; HABER REALIZADO INVESTIGACIONES EN EN EL AREA O AFINES.<BR>
											&bull; EXPERIENCIA PROFESIONAL EN EL AREA O AFIN.<BR>
											&bull; DISPONIBILIDAD: JORNADA NOCTURNA.
									  </td>
                                    </tr>
									
									<tr><td colspan='2' align='center'><table border='1'>
									<tr><td class="tit_botonera_menu Estilo11" align="center" colspan='2'>SELECCIONADOS A PRUEBA PSICOTECNICA</td></tr>
									<tr><td class="tit_botonera_grande" align='center'>Nro</td><td class="tit_botonera_grande" align='center'>CEDULA</td></tr>
									<tr>
										<td align='center' class="text_gris">1<br>2</td>
										<td align="center" class="text_gris">
											30.732.989<br>
											87.069.454
										</td>
									</tr>
									</table></td></tr>
</tr>
									
                                  </table>
								  
								  <!-- ************************ -->
								  <br /><br />
                                  
								  
								  <table width="500" border="1">
								    <tr>
                                      <td colspan='2' class="tit_botonera_grande" align='center'><span class="tit_botonera_menu Estilo11"><strong>FACULTAD DE INGENIERIA</strong></span></td>
                                    </tr>
									
									<tr>
                                      <td colspan='2' height='10'>&nbsp;</td>
                                    </tr>
									
                                    <tr>
                                      <td width="195" class="tit_botonera_grande" colspan='2' align='center'>CONVOCATORIA Nro: 15</td>
                                    </tr>
									<tr>
                                      <td width="195" class="tit_botonera_grande">DENOMINACION DEL CARGO</td>
                                      <td width="289" class="text_gris">DOCENTE MEDIO TIEMPO (20 HORAS SEMANALES)</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">ASIGNATURAS</td>
                                      <td class="text_gris">1. PROGRAMACIÓN EN ALTO NIVEL<br />2. PROGRAMACION EN C PARA ELECTRONICA<br />3. PROGRAMACION ORIENTADA A OBJETOS Y MICROPROCESADORES</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">PERFIL</td>
                                      <td class="text_gris">INGENIERO DE SISTEMAS</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">REQUISITOS</td>
                                      <td class="text_gris">
											&bull; ACREDITAR TITULO PROFESIONAL DE INGENIERO DE SISTEMAS.<BR>
											&bull; PREFERIBLEMENTE CON POSTGRADO.<BR>
											&bull; UN AÑO DE EXPERIENCIA EN INVESTIGACION.<BR>
											&bull; EXPERIENCIA DOCENTE UNIVERSITARIA DOS AÑOS MINIMO, EN PROGRAMACION ELECTRONICA.
									  </td>
                                    </tr>
									
									<tr><td colspan='2' align='center'><table border='1'>
									<tr><td class="tit_botonera_menu Estilo11" align="center" colspan='2'>SELECCIONADOS A PRUEBA PSICOTECNICA</td></tr>
									<tr><td class="tit_botonera_grande" align='center'>Nro</td><td class="tit_botonera_grande" align='center'>CEDULA</td></tr>
									<tr>
										<td align='center' class="text_gris">1</td>
										<td align="center" class="text_gris">
											98.395.231
										</td>
									</tr>
									</table></td></tr>
									
                                    <tr>
                                      <td colspan='2' height='10'>&nbsp;</td>
                                    </tr>
									
								    <tr>
                                      <td width="195" class="tit_botonera_grande" colspan='2' align='center'>CONVOCATORIA Nro: 16</td>
                                    </tr>
									<tr>
                                      <td width="195" class="tit_botonera_grande">DENOMINACION DEL CARGO</td>
                                      <td width="289" class="text_gris">DOCENTE HORA CATEDRA (8 HORAS SEMANALES)</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">ASIGNATURAS</td>
                                      <td class="text_gris">1. CIRCUITOS ELECTRICOS DE CORRIENTE ALTERNA</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">PERFIL</td>
                                      <td class="text_gris">INGENIERO ELECTRONICO.</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">REQUISITOS</td>
                                      <td class="text_gris">
											&bull; ACREDITAR TITULO PROFESIONAL DE INGENIERO ELECTRONICO.<BR>
											&bull; PREFERIBLEMENTE CON POSTGRADO.<BR>
											&bull; UN AÑO DE EXPERIENCIA EN INVESTIGACION.<BR>
											&bull; EXPERIENCIA DOCENTE UNIVERSITARIA DOS AÑOS MINIMO, EN PROGRAMACION ELECTRONICA.
									  </td>
                                    </tr>
									
									<tr><td colspan='2' align='center'><table border='1'>
									<tr><td class="tit_botonera_menu Estilo11" align="center" colspan='2'>SELECCIONADOS A PRUEBA PSICOTECNICA</td></tr>
									<tr><td class="tit_botonera_grande" align='center'>Nro</td><td class="tit_botonera_grande" align='center'>CEDULA</td></tr>
									<tr>
										<td align='center' class="text_gris">1</td>
										<td align="center" class="text_gris">
											1.085.246.280
										</td>
									</tr>
									</table></td></tr>
									
                                  </table>
								  
								  
								  <!-- ************************ -->
								  <br /><br />
                                  
								  
								  <table width="500" border="1">
								    <tr>
                                      <td colspan='2' class="tit_botonera_grande" align='center'><span class="tit_botonera_menu Estilo11"><strong>PROGRAMA DE PSICOLOGIA</strong></span></td>
                                    </tr>
									
									<tr>
                                      <td colspan='2' height='10'>&nbsp;</td>
                                    </tr>
									
                                    <tr>
                                      <td width="195" class="tit_botonera_grande" colspan='2' align='center'>CONVOCATORIA Nro: 17</td>
                                    </tr>
									<tr>
                                      <td width="195" class="tit_botonera_grande">DENOMINACION DEL CARGO</td>
                                      <td width="289" class="text_gris">DOCENTE HORA CATEDRA (9 HORAS SEMANALES) JORNADA DIURNA</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">ASIGNATURAS</td>
                                      <td class="text_gris">1. PSICOLOGIA ORGANIZACIONAL<br />2. ASESOR DE PRACTICA</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">PERFIL</td>
                                      <td class="text_gris">PSICOLOGO</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">REQUISITOS</td>
                                      <td class="text_gris">
											&bull; ACREDITAR TITULO PROFESIONAL DE PSICOLOGO.<BR>
											&bull; PREFERIBLEMENTE CON POSTGRADO.<BR>
											&bull; ACREDITAR CONOCIEMIENTOS EN PSICOLOGIA ORGANIZACIONAL Y GERENCIA DEL TALENTO HUMANO.<BR>
											&bull; CONOCIMIENTOS EN ELABORACION DE PROYECTOS.<BR>
											&bull; EXPERIENCIA EN INVESTIGACION DEL AREA ORGANIZACIONAL.<BR>
											&bull; EXPERIENCIA DOCENTE UNIVERSITARIA DOS AÑOS MINIMO, PREFERIBLEMENTE EN ASESORIA DE TRABAJOS DE GRADO A NIVEL INVESTIGATIVO EN EL CAMPO DE LA PSICOLOGIA .
									  </td>
                                    </tr>
									
									<tr><td colspan='2' align='center'><table border='1'>
									<tr><td class="tit_botonera_menu Estilo11" align="center" colspan='2'>SELECCIONADOS A PRUEBA PSICOTECNICA</td></tr>
									<tr><td class="tit_botonera_grande" align='center'>Nro</td><td class="tit_botonera_grande" align='center'>CEDULA</td></tr>
									<tr>
										<td align='center' class="text_gris">1<br>2</td>
										<td align="center" class="text_gris">
											30.741.369<br>
											52.991.661
										</td>
									</tr>
									</table></td></tr>
									
									<tr>
                                      <td colspan='2' height='10'>&nbsp;</td>
                                    </tr>
									
								    <tr>
                                      <td width="195" class="tit_botonera_grande" colspan='2' align='center'>CONVOCATORIA Nro: 18</td>
                                    </tr>
									<tr>
                                      <td width="195" class="tit_botonera_grande">DENOMINACION DEL CARGO</td>
                                      <td width="289" class="text_gris">DOCENTE TIEMPO COMPLETO (40 HORAS SEMANALES) JORNADA DIURNA</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">ASIGNATURAS</td>
                                      <td class="text_gris">1. PSICOLOGIA DE LA SALUD<br />2. PROGRAMA DE PREVENCION<br />3. INTERVENCION CLINICA<br />4. TRABAJO POR PROYECTOS III<br />5. ASESORIA DE PRACTICA PROFESIONAL</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">PERFIL</td>
                                      <td class="text_gris">PSICOLOGO.</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">REQUISITOS</td>
                                      <td class="text_gris">
											&bull; ACREDITAR TITULO PROFESIONAL DE PSICOLOGO<BR>
											&bull; PREFERIBLEMENTE CON POSTGRADO<BR>
											&bull; ACREDITAR CONOCIMIENTOS EN PSICOLOGIA DE LA SALUD<BR>
											&bull; CONOCIMIENTOS EN ELABORACION DE PROYECTOS<BR>
											&bull; EXPERIENCIA EN INVESTIGACION<BR>
											&bull; EXPERIENCIA DOCENTE UNIVERSITARIA DOS AÑOS MINIMO, PREFERIBLEMENTE EN ASESORIA DE TRABAJOS DE GRADO A NIVEL INVESTIGATIVO EN EL CAMPO DE LA PSICOLOGIA<BR>
									  </td>
                                    </tr>
									
									<tr><td colspan='2' align='center'><table border='1'>
									<tr><td class="tit_botonera_menu Estilo11" align="center" colspan='2'>SELECCIONADOS A PRUEBA PSICOTECNICA</td></tr>
									<tr><td class="tit_botonera_grande" align='center'>Nro</td><td class="tit_botonera_grande" align='center'>CEDULA</td></tr>
									<tr>
										<td align='center' class="text_gris">1</td>
										<td align="center" class="text_gris">
											87.063.789
										</td>
									</tr>
									</table></td></tr>
									
                                  </table>
								  
								  
								  <!-- ************************ -->
								  <br /><br />
								  
								  <table width="500" border="1">
								    <tr>
                                      <td colspan='2' class="tit_botonera_grande" align='center'><span class="tit_botonera_menu Estilo11"><strong>PROGRAMA DE PREESCOLAR</strong></span></td>
                                    </tr>
									
									<tr>
                                      <td colspan='2' height='10'>&nbsp;</td>
                                    </tr>
									
                                    <tr>
                                      <td width="195" class="tit_botonera_grande" colspan='2' align='center'>CONVOCATORIA Nro: 19</td>
                                    </tr>
									<tr>
                                      <td width="195" class="tit_botonera_grande">DENOMINACION DEL CARGO</td>
                                      <td width="289" class="text_gris">DOCENTE MEDIO TIEMPO (20 HORAS SEMANALES)</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">ASIGNATURAS</td>
                                      <td class="text_gris">1. PROPUESTA PEDAGOGICA INICIAL<br /> 2. PROPUESTA PEDAGOGICA FINAL <br /> 3. SEMINARIO DE ACTUALIZACION PROFESIONAL<br />4. INCLUSION PARA ATENCION EN LA DIVERSIDAD</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">PERFIL</td>
                                      <td class="text_gris">LICENCIADO EN EDUCACION PREESCOLAR</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">REQUISITOS</td>
                                      <td class="text_gris">
											&bull; ACREDITAR EL TITULO PROFESIONAL DE LICENCIADO EN EDUCACION PREESCOLAR.<BR>
											&bull; PREFERIBLEMENTE CON POSGRADO EN PEDAGOGIA, EDUCACION O AFINES AL AREA DE FORMACION  EN PREGRADO.<BR>
											&bull; TENER EXPERIENCIA MINIMA DE DOS AÑOS EN EL NIVEL DE EDUCACION PREESCOLAR.<BR>
											&bull; TENER EXPERIENCIA EN PROCESOS DE CALIDAD ACADEMICA.<BR>
									  </td>
                                    </tr>
									
									<tr><td colspan='2' align='center'><table border='1'>
									<tr><td class="tit_botonera_menu Estilo11" align="center" colspan='2'>SELECCIONADOS A PRUEBA PSICOTECNICA</td></tr>
									<tr><td class="tit_botonera_grande" align='center'>Nro</td><td class="tit_botonera_grande" align='center'>CEDULA</td></tr>
									<tr>
										<td align='center' class="text_gris">1</td>
										<td align="center" class="text_gris">
											DESIERTA
										</td>
									</tr>
									</table></td></tr>
									
                                    <tr>
                                      <td colspan='2' height='10'>&nbsp;</td>
                                    </tr>
									
								    <tr>
                                      <td width="195" class="tit_botonera_grande" colspan='2' align='center'>CONVOCATORIA Nro: 20</td>
                                    </tr>
									<tr>
                                      <td width="195" class="tit_botonera_grande">DENOMINACION DEL CARGO</td>
                                      <td width="289" class="text_gris">DOCENTE MEDIO TIEMPO (20 HORAS SEMANALES)</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">ASIGNATURAS</td>
                                      <td class="text_gris">1. PROPUESTA PEDAGOGICA INICIAL<br />2. PROPUESTA PEDAGOGICA FINAL<br />3. DIDACTICA DE LA LENGUA ORAL Y ESCRITA<br />4. PRACTICA PEDAGOGICA ADMINISTRATIVA </td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">PERFIL</td>
                                      <td class="text_gris">LICENCIADO EN EDUCACION PREESCOLAR.</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">REQUISITOS</td>
                                      <td class="text_gris">
											&bull; ACREDITAR EL TITULO PROFESIONAL DE LICENCIADO EN EDUCACION PREESCOLAR<BR>
											&bull; PREFERIBLEMENTE CON POSGRADO EN PEDAGOGIA, EDUCACION O AFINES AL AREA DE FORMACION  EN PREGRADO<BR>
											&bull; TENER EXPERIENCIA MINIMA DE DOS AÑOS EN EL NIVEL DE EDUCACION PREESCOLAR<BR>
											&bull; TENER EXPERIENCIA EN PROCESOS DE CALIDAD ACADEMICA<BR>
									  </td>
                                    </tr>
									
									<tr><td colspan='2' align='center'><table border='1'>
									<tr><td class="tit_botonera_menu Estilo11" align="center" colspan='2'>SELECCIONADOS A PRUEBA PSICOTECNICA</td></tr>
									<tr><td class="tit_botonera_grande" align='center'>Nro</td><td class="tit_botonera_grande" align='center'>CEDULA</td></tr>
									<tr>
										<td align='center' class="text_gris">1</td>
										<td align="center" class="text_gris">
											DESIERTA
										</td>
									</tr>
									</table></td></tr>
									
									<tr>
                                      <td colspan='2' height='10'>&nbsp;</td>
                                    </tr>
									
									<tr>
                                      <td width="195" class="tit_botonera_grande" colspan='2' align='center'>CONVOCATORIA Nro: 21</td>
                                    </tr>
									<tr>
                                      <td width="195" class="tit_botonera_grande">DENOMINACION DEL CARGO</td>
                                      <td width="289" class="text_gris">DOCENTE MEDIO TIEMPO (20 HORAS SEMANALES) </td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">ASIGNATURAS</td>
                                      <td class="text_gris">1. METODOLOGIA DE LA INVESTIGACION<br />2. ELECTIVA PROFESIONAL: TALLER DE CREATIVIDAD Y EXPRESION CORPORAL<br />3. COMUNICACIÓN ORAL Y ESCRITA</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">PERFIL</td>
                                      <td class="text_gris">LICENCIADO EN EDUCACION PREESCOLAR.</td>
                                    </tr>
                                    <tr>
                                      <td class="tit_botonera_grande">REQUISITOS</td>
                                      <td class="text_gris">
											&bull; ACREDITAR EL TITULO PROFESIONAL DE LICENCIADO EN EDUCACION PREESCOLAR<BR>
											&bull; PREFERIBLEMENTE CON POSGRADO EN PEDAGOGIA, EDUCACION O AFINES AL AREA DE FORMACION  EN PREGRADO<BR>
											&bull; TENER EXPERIENCIA MINIMA DE DOS AÑOS EN EL NIVEL DE EDUCACION PREESCOLAR<BR>
											&bull; TENER EXPERIENCIA EN PROCESOS DE CALIDAD ACADEMICA<BR>
									  </td>
                                    </tr>
									
									<tr><td colspan='2' align='center'><table border='1'>
									<tr><td class="tit_botonera_menu Estilo11" align="center" colspan='2'>SELECCIONADOS A PRUEBA PSICOTECNICA</td></tr>
									<tr><td class="tit_botonera_grande" align='center'>Nro</td><td class="tit_botonera_grande" align='center'>CEDULA</td></tr>
									<tr>
										<td align='center' class="text_gris">1</td>
										<td align="center" class="text_gris">
											DESIERTA
										</td>
									</tr>
									</table></td></tr>
									
                                  </table>
								  
								  
                                  <TR>
                                    <TD>
                                        <p align="justify"><u><span class="Estilo14"><strong>Importante: </strong></span></u><span class="tit_botonera_menu Estilo11"><strong>Para radicar su hoja de vida, deber&aacute; presentarla en el formato institucional, que se encuentra publicado en la página web de la instituci&oacute;n: www.iucesmag.edu.co, link Convocatorias.  Diligenciando el formato No. 1 con el cumplimiento total de los requisitos exigidos para el cargo, debidamente soportados.  Para la puntuaci&oacute;n de las hojas de vida se tendr&aacute; en cuenta &uacute;nicamente las certificaciones anexas a la misma.</strong></span></p>
                                        <p><font color="#FF0000">2. <a href="http://www.iucesmag.edu.co/pdfpubli/formulario_docente_Nro_1.pdf" target="_blank"> Formato hoja de vida Docentes (Descargar) </a></font></p>
                                     </TD>
                                   </TR>  
                            </table>
                            <table border='1' cellspacing="3" class="text_gris">
									<tr bgcolor="#FFFFFF">
                                      <td colspan="4" align="center"><strong>
										Profesionales con alto componente social, capaces de trabajar en equipo, proactivos, con mentalidad 
									    emprendedora e investigativa, exelentes relaciones interpersonales y capaces de identificar 
										y compartir la formacion de valores y conocimientos de la filosofia franciscana.
									  </strong></td>
                                    </tr>
									<tr bgcolor="#FFFFFF">
                                      <td colspan="4" align="center"><strong>CALENDARIO</strong></td>
                                    </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>RECEPCI&Oacute;N DE HOJAS DE VIDA:</strong></td>
                                      <td colspan="2"><span class="tit_botonera_menu Estilo11"><span class="Estilo14">Hasta enero 13 del 2012 (6:00 p.m.) </span></span></td>
                                    </tr>
									<tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>LISTA SELECCIONADOS A PRUEBA DE CONOCIMIENTOS:</strong></td>
                                      <td colspan="2" class="text_gris">21 de Enero del 2012</td>
                                      </tr>
									<tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>PRUEBA DE CONOCIMIENTOS:</strong></td>
                                      <td colspan="2" class="text_gris">24 y 25 de Enero del 2012</td>
                                      </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>SELECCIONADOS PARA PRUEBA PSICOT&Eacute;CNICA:</strong></td>
                                      <td colspan="2" class="text_gris">26 de Enero del 2012 (6:00 pm)</td>
                                      </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>PRUEBA PSICOT&Eacute;CNICA:</strong></td>
                                      <td colspan="2" class="text_gris">27 y 28 de Enero del 2012</td>
                                      </tr>
									<tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>ENTREVISTAS:</strong></td>
                                      <td colspan="2" class="text_gris">30 y 31 de Enero del 2012</td>
                                    </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="2"><strong>PUBLICACI&Oacute;N DE RESULTADOS:</strong></td>
                                      <td colspan="2"><span class="text_gris">2 de Febrero del 2012</span></td>
                                      </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="4" align="center"><strong>Las hojas de vida no seleccionadas ser&aacute;n entregadas del 6 al 10 de febrero de 2012, de no ser reclamadas ser&aacute;n destruidas despu&eacute;s de esta fecha.</strong></td>
                                    </tr>
                                    <tr bgcolor="#FFFFFF">
                                      <td colspan="4" align="center">&nbsp;</td></tr>
                                        <tr><td colspan="4"><p align="center"><u><strong>Mayor Información</strong></u><strong>:  </strong>                    
                                                    <BR>Cra 20 A No. 15-54 Sede Administrativa. Of. 212 Tel 21 65 35 ext. 212 y 319.<BR>                         
                                                    San Juan de Pasto.<BR>                        
                                                    <a href="http://www.iucesmag.edu.co">www.iucesmag.edu.co</a>- email:<a href="../ghumanaiucesmag@hotmail.com">ghumanaiucesmag@hotmail.com</a></td>
                                      </tr><tr><td colspan="4" align="center">&nbsp;</td>
                                    </tr>
                            </table>  
                      </div>
				</div>
				
				
				
                     </div>
                     </div>
                     
                     
				
		<!------------------------------------ FIN PESTAÑAS ---------------------------------------------->
                    </th>
              </tr>
<!-----------------------------Requisitos------------------------------------------------------------>              
            </tbody></table></td>
          </tr>
          <tr>
            <td><img src="../iupag/spacer.gif" height="5" width="5"></td>
          </tr>
        </tbody></table>
                                </TD>
                                <TD width=9>&nbsp;</TD>
                              </TR>
                            </TBODY>
                          </TABLE>
                          <TABLE cellSpacing=0 cellPadding=0 width=778 border=0>
                            <TBODY>
                              <TR>
                                <TD width=14>&nbsp;</TD>
                                <TD vAlign=top width=200><TABLE cellSpacing=0 cellPadding=0 width=200 border=0>
                                    <TBODY>
                                      <TR>
                                        <TD align="center" valign="bottom"><img src="../iupag/btn_logo.jpg" width="192" height="39"></TD>
                                      </TR>
                                    </TBODY>
                                  </TABLE></TD>
                                <TD width=9>&nbsp;</TD>
                                <TD vAlign="top" width="539" align="center"><TABLE height=65 cellSpacing=0 cellPadding=0 width=539 border=0>
                                    <TBODY>
                                      <TR>
                                        <TD height="29" vAlign=top align="center">
                                         <table border="0" cellpadding="0" cellspacing="0">
                                         <tr>
                                        <td valign="middle" width="110"><a href="http://twitter.com/iucesmag" target="_blank"><img src="../iupag/ico_twitter.png" width="74" height="17" border="0"></a></td>
                                        <td valign="middle" width="110"><a href="http://www.renata.edu.co/index.php" target="_blank"><img src="../iupag/ico_renata.png" width="94" height="29" border="0"></a></td>
                                        <td align="center" valign="middle" width="110"><a href="http://vlex.com/account/login_ip" target="_blank"><img src="../iupag/ico_vlex.png" width="49" height="27" border="0"></a></td>
                                        <td align="center" valign="middle" width="110"><a href="http://www.icetex.gov.co/" target="_blank"><img src="../iupag/ico_icfes.png" width="91" height="16" border="0"></a></td>                                        
                                        </table>
                                        <hr>
                                        </TD>
                                      </TR><TR>
                                        <TH vAlign=top scope=col height=50> <!--Nota al pie iucesmag-->
                                          <?php include("../piecopy.htm"); ?>
                                          <!--Fin nota al pie iucesmag-->
                                        </TH>
                                      </TR>
                                    </TBODY>
                                  </TABLE></TD>
                                <TD width=9>&nbsp;</TD>
                              </TR>
                            </TBODY>
                          </TABLE></TD>
                      </TR>
                    </TBODY>
                  </TABLE></td>
              </tr>
            </tbody>
          </TABLE></TD>
      </TR>
    </TBODY>
  </TABLE>
</DIV>
<script type="text/javascript">
<!--
var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1", {contentIsOpen:false});
var CollapsiblePanel2 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel2", {contentIsOpen:false});
var CollapsiblePanel3 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel3", {contentIsOpen:false});
var CollapsiblePanel4 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel4", {contentIsOpen:false});
var CollapsiblePanel5 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel5", {contentIsOpen:false});
var CollapsiblePanel5 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel6", {contentIsOpen:false});
var CollapsiblePanel5 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel7", {contentIsOpen:false});
//-->
</script>
</BODY>
</HTML>
