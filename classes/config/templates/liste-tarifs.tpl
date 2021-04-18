<html>
  <head>
    <title>TP6 - Smarty</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div class="global" style ="display: table; margin-top: 100; margin : auto; margin-top : 100" >
      <h3 style="text-decoration:underline;">Liste tarifs</h3>
	  
	  <table style="border:black 2px solid;">
		<tr>
			<th style="padding:10px; text-align:center;">Prestation</th>
			<th style="padding:10px; text-align:center;">Catégorie</th>
			<th style="padding:10px; text-align:center;">Prix</th>
		</tr>
		{foreach from=$tarifs item=tarif}
			<tr>
				<td style="padding:10px; text-align:center;">{$tarif.type_prest}</td>
				<td style="padding:10px; text-align:center;">{$tarif.lib_categ}</td>			
				<td style="padding:10px; text-align:center;">{$tarif.prix}</td>					
			</tr>		
		{/foreach}
	  </table>
    
		
      
      <div class="content">
   
      </div>
    </div>
  </body>
</html>