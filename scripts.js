$(function () { 
	let select = '<select name="ing"><?php foreach ($ings as $ing) {echo "<option value=".$ing["id_ingrend"].">".$ing["uni_descr"]."</option>";}?></select>';
	$('.boton').click(function(){
        $('.before').before(select);
        // console.log(select);
        
	});
});