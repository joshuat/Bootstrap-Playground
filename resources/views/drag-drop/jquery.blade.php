<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap-Playground</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <style>
  body {
    min-width: 520px;
    padding: 20px;

  }
  .column {
    width: 170px;
    float: left;
    padding-bottom: 100px;
  }
  .portlet {
    margin: 0 1em 1em 0;
    padding: 0.3em;
  }

  .portlet-header {
    padding: 0.2em 0.3em;
    margin-bottom: 0.5em;
    position: relative;
  }

   .portlet-header:hover{
  	cursor: pointer;
  }


  .portlet-toggle {
    position: absolute;
    top: 50%;
    right: 0;
    margin-top: -8px;
    overflow: hidden;

  }
  .portlet-content {
    padding: 0.4em;
  }
  .portlet-placeholder {
    /*border: 1px dotted black;*/
    margin: 0 1em 1em 0;
    height: 50px;
    background: #D6D2D2;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( ".column" ).sortable({
      connectWith: ".column",
      handle: ".portlet-header",
      cancel: ".portlet-toggle",
      placeholder: "portlet-placeholder ui-corner-all"
    });
 
    $( ".portlet" )
      .addClass( "ui-widget ui-widget-content ui-helper-clearfix ui-corner-all" )
      .find( ".portlet-header" )
        .addClass( "ui-widget-header ui-corner-all" )
        .prepend( "<span class='ui-icon ui-icon-minusthick portlet-toggle'></span>");
 
    $( ".portlet-toggle" ).on( "click", function() {
      var icon = $( this );
      icon.toggleClass( "ui-icon-minusthick ui-icon-plusthick" );
      icon.closest( ".portlet" ).find( ".portlet-content" ).toggle();
    });
  } );
  </script>
</head>
<body>
 
<div class="column">
 
  <div class="portlet">
    <div class="portlet-header">Cleaning</div>
    <!-- <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div> -->
  </div>
 
  <div class="portlet">
    <div class="portlet-header">Washing</div>
    <!-- <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div> -->
  </div>
    <div class="portlet">
    <div class="portlet-header">Flying</div>
    <!-- <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div> -->
  </div>
    <div class="portlet">
    <div class="portlet-header">Wiping</div>
    <!-- <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div> -->
  </div>
    <div class="portlet">
    <div class="portlet-header">Transport</div>
    <!-- <div class="portlet-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</div> -->
  </div>
 
</div>
 
<div class="column"></div>
<div class="column"></div>
<div class="column"></div>
<div class="column"></div>
 
 
</body>
</html>