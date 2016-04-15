<?php

/* @PCFundation/Admin/censo.html */
class __TwigTemplate_4a96e012b8f9d279fcf57bdd5b21c66e4f12bbd9247da194fa3fe084cc7a7904 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_660bfbc15d9bc5ae6212573cfda1dbbae01973503bcc7942bcc0dd22f26f13f8 = $this->env->getExtension("native_profiler");
        $__internal_660bfbc15d9bc5ae6212573cfda1dbbae01973503bcc7942bcc0dd22f26f13f8->enter($__internal_660bfbc15d9bc5ae6212573cfda1dbbae01973503bcc7942bcc0dd22f26f13f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PCFundation/Admin/censo.html"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
\t<title>censo</title>
\t<link rel=\"stylesheet\" href=\"\">
\t<link rel=\"stylesheet\" href=\"css/bootstrap.min.css\" rel = \"stylesheet\">
 <link rel=\"stylesheet\" type=\"text/css\" href=\"css/estile.css\">
</head>
<body>
\t     <h1 class=\"bagtitle textjusti colortexth4 page-header\">CENSO</h1>
              <div class=\"row\">
              <div class=\"textjusti col-xs-8 col-md-4 col-lg-5\">
                <table class=\"table table-striped\">
                <thead>
                    <tr>
                      <th>Zona:</th>
                      <th> </th>
                    </tr>
                    <tr>
                      <th>fecha:</th>
                      <th> </th>
                    </tr>
                </thead>
                </table> <!-- table de nombre zona. -->
                <br>
                 <a href=\"agragardatos.html\" id=\"ventemerg2\" class=\"btn btn-default\">Agregar datos »</a>
              </div>
              <div class=\"col-md-1 col-lg-1\"></div>
              <div class=\"col-xs-4 col-md-5 col-lg-5\">
                
                <h4>Colaboradores.</h4>
                <table class=\"tabl\">
                     <tr>
                      <td class=\"tdd\">Nombre: </td>
                      <td class=\"tdb\">  </td>
                     </tr>
                    <tr>
                      <td class=\"tdd\">Nombre: </td>
                      <td class=\"tdb\">  </td>
                    </tr>
                    <tr>
                      <td class=\"tdd\">Nombre: </td>
                      <td class=\"tdb\">  </td>
                    </tr>
               </table>

              </div> 
              <div class=\"col-md-1 col-lg-1\"></div>
            </div> <!-- div row-->
            <hr>
            <h5></h5>
           <table class=\"tabl table-striped\">
              <thead>
                <tr><td class=\"pest\" colspan=\"3\">información del Animal</td>
                  <td colspan=\"4\"></td>
                  <td  class=\"pest\" colspan=\"3\">informacion responsable</td>
                </tr>
                <tr class=\"tdb\">
                  <th class=\"tdxs\">#</th>
                  <th class=\"tdmd\">Clasificación</th>
                  <th class=\"tdd\">Rasgo</th>
                  <th class=\"tdd\">Color</th>
                  <th class=\"tdmd\">edad</th>
                  <th class=\"tdxs\">¿cirugia?</th>
                  <th class=\"tdxs\">#</th>
                  <th class=\"tdd\">Nombre</th>
                  <th class=\"tdd\">Telefono</th>
                  <th class=\"tdxs\">edit</th>
                </tr>
              </thead>
              <tbody class=\"tdb\">
                <tr>
                  <td>1</td>
                  <td>perro</td>
                  <td class=\"tdd\">crio</td>
                  <td>negro</td>
                  <td>0,6</td>
                  <td>no</td>
                  <td>1</td>
                  <td>juan</td>
                  <td>3122345678</td>
                  <td><a href=\" \">&nbsp;<span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></a></td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>gato</td>
                  <td class=\"tdd\">crio</td>
                  <td>negro</td>
                  <td>1</td>
                  <td>no</td>
                  <td>1</td>
                  <td>juan</td>
                  <td>3122345678</td>
                  <td><a href=\" \" data-toggle=\"modal\" data-target=\".bs-example-modal-sm\">&nbsp;<span class=\"glyphicon glyphicon-plus\" aria-hidden=\"true\"></a>

                    <div class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
              <div class=\"modal-dialog modal-sm\">
                <div class=\"modal-content\">
                  
                  <div class=\"timod modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"></button>
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Información de responsable<span class=\"btn-lg glyphicon glyphicon-user\" aria-hidden=\"true\"></span></h5>
                  </div>

                   <div class=\"modal-body\">
                      <form>
                        <div class=\"form-group\">
                          <label for=\"recipient-name\" class=\"textjusti control-label\">Nombre:</label>
                          <input type=\"password\" class=\"form-control\" id=\"recipient-name\"
                          placeholder=\"Nombre\"disabled>
                        </div>

                        <div class=\"form-group\">
                          <label for=\"recipient-name\" class=\"textjusti control-label\">Edad:</label>
                          <input type=\"password\" class=\"form-control\" id=\"recipient-name\"
                          placeholder=\"Edad\"disabled>
                        </div>
                        <div class=\"form-group\">
                          <label for=\"recipient-name\" class=\"textjusti control-label\">Dirección:</label>
                          <input type=\"password\" class=\"form-control\" id=\"recipient-name\"
                          placeholder=\"Dirección\"disabled>
                        </div>

                        <div class=\"form-group\">
                          <label for=\"recipient-name\" class=\"textjusti control-label\">Telefono:</label>
                          <input type=\"password\" class=\"form-control\" id=\"recipient-name\"
                          placeholder=\"Telefono\"disabled>
                        </div>
                      </form>
                    </div>

                    <div class=\"modal-footer\">
                      <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cerrar</button>
                    </div>
              </div>
              </div>
            </div>

                  </td>
                </tr>
              </tbody>
            </table>
\t  <script src=\"https://code.jquery.com/jquery-latest.js\" type=\"text/javascript\"></script>
      <script src=\"js/bootstrap.min.js\"type=\"text/javascript\"></script>
      <script src=\"js/functJquery.js\"></script>
</body>
</html>";
        
        $__internal_660bfbc15d9bc5ae6212573cfda1dbbae01973503bcc7942bcc0dd22f26f13f8->leave($__internal_660bfbc15d9bc5ae6212573cfda1dbbae01973503bcc7942bcc0dd22f26f13f8_prof);

    }

    public function getTemplateName()
    {
        return "@PCFundation/Admin/censo.html";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* 	<meta charset="utf-8">*/
/* 	<meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* 	 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">*/
/* 	<title>censo</title>*/
/* 	<link rel="stylesheet" href="">*/
/* 	<link rel="stylesheet" href="css/bootstrap.min.css" rel = "stylesheet">*/
/*  <link rel="stylesheet" type="text/css" href="css/estile.css">*/
/* </head>*/
/* <body>*/
/* 	     <h1 class="bagtitle textjusti colortexth4 page-header">CENSO</h1>*/
/*               <div class="row">*/
/*               <div class="textjusti col-xs-8 col-md-4 col-lg-5">*/
/*                 <table class="table table-striped">*/
/*                 <thead>*/
/*                     <tr>*/
/*                       <th>Zona:</th>*/
/*                       <th> </th>*/
/*                     </tr>*/
/*                     <tr>*/
/*                       <th>fecha:</th>*/
/*                       <th> </th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 </table> <!-- table de nombre zona. -->*/
/*                 <br>*/
/*                  <a href="agragardatos.html" id="ventemerg2" class="btn btn-default">Agregar datos »</a>*/
/*               </div>*/
/*               <div class="col-md-1 col-lg-1"></div>*/
/*               <div class="col-xs-4 col-md-5 col-lg-5">*/
/*                 */
/*                 <h4>Colaboradores.</h4>*/
/*                 <table class="tabl">*/
/*                      <tr>*/
/*                       <td class="tdd">Nombre: </td>*/
/*                       <td class="tdb">  </td>*/
/*                      </tr>*/
/*                     <tr>*/
/*                       <td class="tdd">Nombre: </td>*/
/*                       <td class="tdb">  </td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                       <td class="tdd">Nombre: </td>*/
/*                       <td class="tdb">  </td>*/
/*                     </tr>*/
/*                </table>*/
/* */
/*               </div> */
/*               <div class="col-md-1 col-lg-1"></div>*/
/*             </div> <!-- div row-->*/
/*             <hr>*/
/*             <h5></h5>*/
/*            <table class="tabl table-striped">*/
/*               <thead>*/
/*                 <tr><td class="pest" colspan="3">información del Animal</td>*/
/*                   <td colspan="4"></td>*/
/*                   <td  class="pest" colspan="3">informacion responsable</td>*/
/*                 </tr>*/
/*                 <tr class="tdb">*/
/*                   <th class="tdxs">#</th>*/
/*                   <th class="tdmd">Clasificación</th>*/
/*                   <th class="tdd">Rasgo</th>*/
/*                   <th class="tdd">Color</th>*/
/*                   <th class="tdmd">edad</th>*/
/*                   <th class="tdxs">¿cirugia?</th>*/
/*                   <th class="tdxs">#</th>*/
/*                   <th class="tdd">Nombre</th>*/
/*                   <th class="tdd">Telefono</th>*/
/*                   <th class="tdxs">edit</th>*/
/*                 </tr>*/
/*               </thead>*/
/*               <tbody class="tdb">*/
/*                 <tr>*/
/*                   <td>1</td>*/
/*                   <td>perro</td>*/
/*                   <td class="tdd">crio</td>*/
/*                   <td>negro</td>*/
/*                   <td>0,6</td>*/
/*                   <td>no</td>*/
/*                   <td>1</td>*/
/*                   <td>juan</td>*/
/*                   <td>3122345678</td>*/
/*                   <td><a href=" ">&nbsp;<span class="glyphicon glyphicon-plus" aria-hidden="true"></a></td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                   <td>1</td>*/
/*                   <td>gato</td>*/
/*                   <td class="tdd">crio</td>*/
/*                   <td>negro</td>*/
/*                   <td>1</td>*/
/*                   <td>no</td>*/
/*                   <td>1</td>*/
/*                   <td>juan</td>*/
/*                   <td>3122345678</td>*/
/*                   <td><a href=" " data-toggle="modal" data-target=".bs-example-modal-sm">&nbsp;<span class="glyphicon glyphicon-plus" aria-hidden="true"></a>*/
/* */
/*                     <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">*/
/*               <div class="modal-dialog modal-sm">*/
/*                 <div class="modal-content">*/
/*                   */
/*                   <div class="timod modal-header">*/
/*                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>*/
/*                     <h5 class="modal-title" id="exampleModalLabel">Información de responsable<span class="btn-lg glyphicon glyphicon-user" aria-hidden="true"></span></h5>*/
/*                   </div>*/
/* */
/*                    <div class="modal-body">*/
/*                       <form>*/
/*                         <div class="form-group">*/
/*                           <label for="recipient-name" class="textjusti control-label">Nombre:</label>*/
/*                           <input type="password" class="form-control" id="recipient-name"*/
/*                           placeholder="Nombre"disabled>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                           <label for="recipient-name" class="textjusti control-label">Edad:</label>*/
/*                           <input type="password" class="form-control" id="recipient-name"*/
/*                           placeholder="Edad"disabled>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                           <label for="recipient-name" class="textjusti control-label">Dirección:</label>*/
/*                           <input type="password" class="form-control" id="recipient-name"*/
/*                           placeholder="Dirección"disabled>*/
/*                         </div>*/
/* */
/*                         <div class="form-group">*/
/*                           <label for="recipient-name" class="textjusti control-label">Telefono:</label>*/
/*                           <input type="password" class="form-control" id="recipient-name"*/
/*                           placeholder="Telefono"disabled>*/
/*                         </div>*/
/*                       </form>*/
/*                     </div>*/
/* */
/*                     <div class="modal-footer">*/
/*                       <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>*/
/*                     </div>*/
/*               </div>*/
/*               </div>*/
/*             </div>*/
/* */
/*                   </td>*/
/*                 </tr>*/
/*               </tbody>*/
/*             </table>*/
/* 	  <script src="https://code.jquery.com/jquery-latest.js" type="text/javascript"></script>*/
/*       <script src="js/bootstrap.min.js"type="text/javascript"></script>*/
/*       <script src="js/functJquery.js"></script>*/
/* </body>*/
/* </html>*/
