<html>
  <head>
    <title>TP6 - Smarty</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div class="global" style ="display: table; margin-top: 100; margin : auto; margin-top : 100" >
      <h3 style="text-decoration:underline;">Liste usagers</h3>
	  
	  <table style="border:black 2px solid;">
		<tr>
			<th style="padding:10px; text-align:center;">Nom</th>
			<th style="padding:10px; text-align:center;">N° Carte</th>
			<th style="padding:10px; text-align:center;">Libellé catégorie</th>
			<th style="padding:10px; text-align:center;">Date carte</th>
			<th style="padding:10px; text-align:center;">Montant caution</th>
		</tr>
		{foreach from=$usagers item=usager}
			<tr>
				<td style="padding:10px; text-align:center;">{$usager.nom}</td>
				<td style="padding:10px; text-align:center;">{$usager.num_carte}</td>			
				<td style="padding:10px; text-align:center;">{$usager.lib_categ}</td>			
				<td style="padding:10px; text-align:center;">{$usager.date_carte}</td>			
				<td style="padding:10px; text-align:center;">{$usager.mt_caution}</td>			
			</tr>		
		{/foreach}
	  </table>
    
		
      
      <div class="content">
   
      </div>
    </div>
  </body>
</html>