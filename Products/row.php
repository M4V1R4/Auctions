<tr id="<?=$product['id']?>">
	<td><?=$product['nombre']?></td>
	<td><?=$product['description']?></td>
	<td><?=$product['id_admin']?></td>
	<td>
		<div class="action-btn">
			<a class="btn btn-warning" href="/Products/EditProduct.php?id=<?=$product['id']?>">Editar</a>
			<button class="btn btn-danger delete-btn">Eliminar</button>
		</div>
		<div class="hidden-btn d-none">
			<button class="btn btn-danger cancel-btn">Cancelar</button>
			<button class="btn btn-success accept-btn">Aceptar</button>
		</div>
	</td>
</tr>