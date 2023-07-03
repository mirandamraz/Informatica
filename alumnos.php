<!DOCTYPE html>
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Description" content="Universidad del Istmo, UNISTMO, Tehuantepec, Ixtepec, SUNEO, Oaxaca" />

<title>UNISTMO</title>

<link href="images/favicon.ico" rel="icon" type="image/x-icon" />
<link href="estilo1.css" rel="stylesheet" type="text/css" />
<link href="estilo2.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" media="all" type="text/css" href="css/more.css" />
<link href="pestanias.css" rel="stylesheet" type="text/css" />
<link href="redes_soc.css" rel="stylesheet" type="text/css" />

<script src="js/click_toggle.js" type="text/javascript"></script>

<script type="text/javascript">
var menuids=["sidebarmenu1"] //Enter id(s) of each Side Bar Menu's main UL, separated by commas
function initsidebarmenu(){
for (var i=0; i<menuids.length; i++){
  var ultags=document.getElementById(menuids[i]).getElementsByTagName("ul")
    for (var t=0; t<ultags.length; t++){
    ultags[t].parentNode.getElementsByTagName("a")[0].className+=" subfolderstyle"
  if (ultags[t].parentNode.parentNode.id==menuids[i]) //if this is a first level submenu
   ultags[t].style.left=ultags[t].parentNode.offsetWidth+"px" //dynamically position first level submenus to be width of main menu item
  else //else if this is a sub level submenu (ul)
    ultags[t].style.left=ultags[t-1].getElementsByTagName("a")[0].offsetWidth+"px" //position menu to the right of menu item that activated it
    ultags[t].parentNode.onmouseover=function(){
    this.getElementsByTagName("ul")[0].style.display="block"
    }
    ultags[t].parentNode.onmouseout=function(){
    this.getElementsByTagName("ul")[0].style.display="none"
    }
    }
  for (var t=ultags.length-1; t>-1; t--){ //loop through all sub menus again, and use "display:none" to hide menus (to prevent possible page scrollbars
  ultags[t].style.visibility="visible"
  ultags[t].style.display="none"
  }
  }
}

if (window.addEventListener)
window.addEventListener("load", initsidebarmenu, false)
else if (window.attachEvent)
window.attachEvent("onload", initsidebarmenu)

</script>
</head>

<body onload="clickMenu('expandir','div','mas')">
	<a class="flotante" href="https://www.facebook.com/Universidad-del-Istmo-117590020150928" target="_blank"><img src="images/facebook2.png" border="0"/></a>
    <a class="flotante2" href="http://twitter.com/#!/UNISTMO_SUNEO" target="_blank"><img src="images/twitter2.png" border="0"/></a>
<table width="1000" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" align="center">
  <tr>
    <td class="izquierda" width="10">&nbsp;</td>
    <td colspan="2" align="right"><img src="images/unistmo_large.png" alt="Universidad del Istmo" /></td>
    <td class="derecha" width="10">&nbsp;</td>
  </tr>
  <tr>
    <td class="izquierda">&nbsp;</td>
    <td width="260" bgcolor="#962D00">&nbsp;</td>
    <td width="724" bgcolor="#962D00">
      <!--inicia menú-->
      <ul id="menu">
        <li><span>Nuestra&nbsp;Universidad</span>
          <!--[if lte IE 6]><a href="#nogo"><table><tr><td><![endif]-->
          <dl>
            <dt><a href="nuestrauniversidad.html">Nuestra&nbsp;Universidad</a></dt>
          </dl>
          <!--[if lte IE 6]></td></tr></table></a><![endif]-->
        </li>
        <li><span>Directorio</span>
          <!--[if lte IE 6]><a href="#nogo"><table><tr><td><![endif]-->
          <dl>
            <dt><a href="directorio.html">Directorio</a></dt>
          </dl>
          <!--[if lte IE 6]></td></tr></table></a><![endif]-->
        </li>
        <li><span>Ense&ntilde;anza</span>
          <!--[if lte IE 6]><a href="#nogo"><table><tr><td><![endif]-->
          <dl>
            <dt><a href="ensenanza.html">Ense&ntilde;anza</a></dt>
          </dl>
          <!--[if lte IE 6]></td></tr></table></a><![endif]-->
        </li>
        <li><span>Investigaci&oacute;n</span>
          <!--[if lte IE 6]><a href="#nogo"><table><tr><td><![endif]-->
          <dl>
            <dt><a href="investigacion.html">Investigaci&oacute;n</a></dt>
          </dl>
          <!--[if lte IE 6]></td></tr></table></a><![endif]-->
        </li>
        <li><span>Difusi&oacute;n&nbsp;Cultural</span>
          <!--[if lte IE 6]><a href="#nogo"><table><tr><td><![endif]-->
          <dl>
            <dt><a href="difusioncultural.html">Difusi&oacute;n&nbsp;Cultural</a></dt>
          </dl>
          <!--[if lte IE 6]></td></tr></table></a><![endif]-->
        </li>
        <li><span>Promoci&oacute;n&nbsp;del&nbsp;Desarrollo</span>
          <!--[if lte IE 6]><a href="#nogo"><table><tr><td><![endif]-->
          <dl>
            <dt><a href="promocion.html">Promoci&oacute;n&nbsp;del&nbsp;Desarrollo</a></dt>
          </dl>
          <!--[if lte IE 6]></td></tr></table></a><![endif]-->
        </li>
      </ul>
      </td>
    <!--termina menú-->
  </tr>
        </tr>
  <tr>
    <td colspan="2"><hr /></td>
  </tr>

  <tr >
    <td colspan="2" align="left"><h2 id="ingreso">Informaci&oacute;n de Ingreso</h2></td>
  </tr>

  <tr>
    <td colspan="2" align="center">Requisitos, fechas y costos de Licenciaturas y Postgrados con los que cuenta la Universidad del Istmo.</td>
  </tr>
  <tr>
    <td colspan="2" align="left">&nbsp;</td>
  </tr>
  <tr>

    <td colspan="2"style="width:8000px">
<h2 class="trigger"><a href="#procesos">&emsp;&emsp;Licenciaturas</a></h2>
      <div class="toggle_container">
        <div class="block">
          <!--<h4>Curso Propedéutico Largo 2020</h4>
          <div class="justificar">&emsp;Nota: El Curso propedéutico Largo estará sujeto a la demanda, con 15 alumnos mínimo por carrera y los trámites se realizarán en Febrero e iniciará en Marzo.</div><br />-->


          <h4>PROCESO DE ADMISIÓN 2023</h4>
          <table cellspacing="0" cellpadding="0" width="100%" align="center">
            <tr>
              <td class="tablab">FECHAS</td>
              <td class="tablab" width="53%">&nbsp;</td>
              </tr>
            <tr>
              <td class="tablab2">Entrega de fichas</td>
              <td class="tablab2">17 de febrero al 28 de junio 2023.</td>
              </tr>
            <tr>
              <td class="tablab2">Examen de selección</td>
              <td class="tablab2">27 de mayo 2023 o 03 de julio 2023.</td>
              </tr>
            <tr>
              <td class="tablab2">Inscripciones al curso propedéutico</td>
              <td class="tablab2">17 al 28 de julio del 2023.</td>
              </tr>
            <tr>
              <td class="tablab2">Curso propedéutico</td>
              <td class="tablab2">Del 31 de julio al 22 de septiembre 2023</td>
              </tr>
            </table>
          <p>&nbsp;</p>
          <div class="justificar">&emsp;<strong>REQUISITOS:</strong></div>
          <ul class="extendido">
            <li>Copia del Acta de Nacimiento.</li>
            <li>Copia del Certificado de Secundaria.</li>
            <li>Copia de Certificado de bachillerato legalizado u original de constancia de estudios.</li>
            <li>CURP.</li>
            <li>Seis fotografías tamaño infantil blanco y negro, de frente, en papel mate.</li>
            <li>Comprobante de Pago Bancario<br />
            (<a href="http://www.unistmo.edu.mx/servicios_escolares/tutoriales/PROCEDIMIENTO_LINEA_DE_CAPTURA_FICHA.pdf" target="_blank">Procedimiento para pagar con L&iacute;nea de Captura</a>)</li>
            </ul>
          <p>&nbsp;</p>
          <div class="justificar">&emsp;<strong>Entrega de fichas</strong></div>
          <ul class="extendido">
            <li>En las instalaciones de la UNISTMO, en cualquiera de sus tres Campus <br />
            (Ixtepec, Tehuantepec y Juchitán) tel.71 5 22 40 50 Ext. 111 o al 971 2 70 50 Ext. 212</li>
            <li>Oficinas en Oaxaca, Pino Su&aacute;rez 509, Col. Centro, Tel. (951) 132 69 58</li>
            <li>En cualquiera de las universidades del SUNEO: UTM, UMAR, UNPA, UNSIS,<br />
                UNSIJ, UNCA, NU, UNCOS y UNICHA</li>
            <li>Oficinas en la Cd. de M&eacute;xico, ubicadas en Sacramento 347, <br />
                 Col. del Valle, C.P. 03100, M&eacute;xico, D.F.</li>
            <li>Horario de 9-14 hrs. y de 16-19 hrs  		  	</li>
            </ul>

                    <div class="justificar">&emsp;<strong>Nota:</strong> Toda la documentación debe entregarse en tamaño carta junto con el pago del examen de selección en original y copia.</div>
                   <p>&nbsp;</p>

          </div>
        </div><!--termina pesta&ntilde;a-->
    </td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
    <tr>
          <td colspan="3"><div class="subir" align="right"><a href="#">Subir</a></div></td>
        </tr>
          <tr>
    <td colspan="2"><hr /></td>
  </tr>

  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
    <tr>
          <td colspan="3"><div class="subir" align="right"><a href="#">Subir</a></div></td>
        </tr>
    <tr>
      <td colspan="3"><hr /></td>
    </tr>
    <tr>
      <td colspan="3">
<h2 id="becas" class="trigger"><a href="#becas">&emsp;&emsp;Becas</a></h2>
      <div class="toggle_container">
        <div class="block">
            <ul class="extendido">
              <li><strong>Becas por  Servicios Educativos</strong>.- Implica exentar a un n&uacute;mero ilimitado de alumnos del pago total o  parcial de servicios educativos (25%, 50%, 75% o 100%). &nbsp;La beca se aplica al pago de&nbsp; colegiaturas,  reinscripci&oacute;n,&nbsp; examen extraordinario, examen especial y constancia de  estudios. La actualizaci&oacute;n del porcentaje se realiza cada semestre.</li>
              <li><strong>Beca  alimentaria.</strong>- Implica  otorgar a un n&uacute;mero limitado de alumnos, desayuno y comida de lunes a viernes seg&uacute;n  su situaci&oacute;n econ&oacute;mica y la disponibilidad de la beca en la Universidad.</li>
              <li><strong>Beca  Pronabes-Bienestar.-</strong> Los alumnos interesados podr&aacute;n realizar dicho  tr&aacute;mite de acuerdo a la convocatoria anual, los Responsables Operativos en la  IPES, orientaran a los alumnos para su tr&aacute;mite.</li>
              <li><strong>Beca  TELMEX</strong>.- Es una  beca de excelencia acad&eacute;mica.</li>
              <li><strong>BECA  PEBES.- </strong>Es una beca para los hijos de trabajadores del  IEEPO, el Depto. Servicios Escolares apoya a los alumnos expidiendo constancia de estudios y calificaciones<strong>.</strong></li>
              <li><strong>OTRAS  BECAS EXTERNAS</strong>.- De  acuerdo a las convocatorias recibidas o vigentes de diversas Instituciones y a  la solicitud de los alumnos.</li>
              </ul>
          <br /><br /><br />
      </div>
      <!--termina pesta&ntilde;a--></div>
      </td>
    </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3"><div class="subir" align="right"><a href="#">Subir</a></div></td>
    </tr>
    </table>


</div>



<div class="fijo"></div>
 </div>
    </td>
    <!--termina contenido-->
    <td class="derecha">&nbsp;</td>
  </tr>
  <tr>
    <td class="izquierda">&nbsp;</td>
    <td bgcolor="#D4D483">&nbsp;</td>
    <td class="derecha">&nbsp;</td>
  </tr>
  <!--empieza pie-->
  <tr>
  	<td class="izquierda">&nbsp;</td>
    <td colspan="2"><div style="background:url(images/divider.png) repeat-x;"><img src="images/divider.png" alt="" width="724" height="10" /></div></td>
	<td class="derecha">&nbsp;</td>
  </tr>
  <tr>
    <td class="izquierda">&nbsp;</td>
    <td colspan="2"><div align="center"><strong><font color="#990000">Sistema de Universidades Estatales de Oaxaca</font></strong></div></td>
    <td width="10" class="derecha">&nbsp;</td>
  </tr>
  <tr>
    <td class="izquierda">&nbsp;</td>
    <td class="pie" colspan="2">

    </td>
    <td class="derecha">&nbsp;</td>
  </tr>
  <tr>
    <td class="izquierda">&nbsp;</td>
    <td colspan="2">&nbsp;</td>
    <td class="derecha">&nbsp;</td>
  </tr>
  <tr>
    <td class="izquierda">&nbsp;</td>
    <td class="direc" colspan="2"><div align="right">Carr. Chihuitan Ixtepec S/N Ixtepec, Oax., M&eacute;xico C.P. 70110<br />Ciudad Universitaria S/N, Barrio Santa Cruz, 4a. Secci&oacute;n Sto. Domingo Tehuantepec, Oax., M&eacute;xico C.P. 70760<br />Carretera Trans&iacute;smica Juchit&aacute;n - La Ventosa Km. 14, La Ventosa, Oax., M&eacute;xico C.P. 70102</div></td>
    <td class="derecha">&nbsp;</td>
  </tr>
  <tr>
    <td class="izquierda">&nbsp;</td>
    <td class="piep" colspan="2">&nbsp;</td>
    <td class="derecha">&nbsp;</td>
  </tr>
  <!--termina pie-->
</table></body>
</html>
