<tr id="<?=$auction['id']?>">
	<td><?=$auction['id']?></td>
	<td><?=$auction['start_date']?></td>
	<td><?=$auction['end_date']?></td>
	<td><?=$auction['base_amount']?></td>
	<td><?=$auction['current_state']?></td>
	<td>
		<div class="action-btn">
			<a href="/auctions/add_products.php?id=<?=$auction['id']?>" class="btn btn-success">Agregar productos</a>
			<a class="btn btn-warning" href="/auctions/update.php?id=<?=$auction['id']?>"><i class="fas fa-edit"></i></a>
			<button class="btn btn-danger delete-btn"><i class="fas fa-trash-alt"></i></button>
		</div>
		<div class="hidden-btn d-none">
			<button class="btn btn-danger cancel-btn">Cancelar</button>
			<button class="btn btn-success accept-btn">Aceptar</button>
		</div>
	</td>
	
</tr>