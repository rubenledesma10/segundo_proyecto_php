<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section style="height:3000px;">
		<?php
		include ("recursos.php");
		$base= new Basedatos(SERV, USUA, PASS, BASE);
		$productos = new Productos($base);
		$listado_productos = $productos->listar_productos();
		$carrito = new Carrito ($base);
		$listar_compra=$carrito->listar_compra();
		?>
		<h2>Compras</h2>
		<?php
		for($i=0; $i<count($listado_productos);$i++){
		?>
        <p><b>Codigo:</b> <?php echo $listado_productos [$i]['codigo'];?></p>
        <p><b>Producto:</b> <?php echo $listado_productos [$i]['producto'];?></p>
        <p><b>Descripcion: </b><?php echo $listado_productos [$i]['descripcion'];?></p>
        <p><b>Precio: </b><?php echo $listado_productos [$i]['precio'];?></p>
       	<a href="datos_carro.php?codigo=<?php echo $listado_productos[$i]['codigo'];?>&&producto=<?php echo $listado_productos[$i]['producto']?>&&descripcion=<?php echo $listado_productos[$i]['descripcion']?>&&precio=<?php echo $listado_productos[$i]['precio']?>" style="color: darkblue;"><b>AGREGAR AL CARRITO</b></a>         
		<?php } ?>
	</section>
	<aside>
	<h2>Carrito</h2>
	<?php
	for($i=0;$i<count($listar_compra);$i++){
    ?>
    <p><b>Código:</b><?php echo $listar_compra[$i]['codigo']; ?></p>
	<p><b>Producto:</b><?php echo $listar_compra[$i]['producto']; ?></p>
	<p><b>Descripción:</b><?php echo $listar_compra[$i]['descripcion'];?></p>
	<p><b>Precio: </b>$ <?php echo $listar_compra[$i]['precio'];?></p>
	<a href="eliminar_producto.php?codigo=<?php echo $listar_compra[$i]['codigo']?>" style="color: darkblue;">ELIMINAR</a>
	<?php } ?>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>