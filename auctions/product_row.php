<tr id="<?=$product['id']?>">
	<td><?=$product['id']?></td>
	<td><?=$product['nombre']?></td>
	<td><?=$product['description']?></td>
	<td>
		<div class="action-btn">
			<input type="checkbox" name="chk[]" value="<?=$product['id']?>">
		</div>
	</td>
</tr>