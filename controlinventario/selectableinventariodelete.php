<?php
                $query = "SELECT

inv.id_producto,
inv.producto,
inv.descripcion,
inv.cantidad,
inv.precio_unitario,
inv.fecha_ingreso,
inv.estado,
cat.nombre_categoria AS categoria,
prov.nombre_proveedor AS proveedor
FROM
	inventario AS inv
    LEFT JOIN 
    categorias AS cat ON inv.id_categoria=cat.id_categoria
    LEFT JOIN
    proveedor AS prov ON inv.id_proveedor = prov.id_proveedor;
    ";
                $result = $conn->query($query);

                while($row = $result->fetch_assoc()){
                ?>
                <tr>

                    <td><?php echo $row['id_producto']; ?></td>
                    <td><?php echo $row['producto']; ?></td>
                    <td><?php echo $row['descripcion']; ?></td>
                    <td><?php echo $row['cantidad']; ?></td>
                    <td><?php echo $row['precio_unitario']; ?></td>
                    <td><?php echo $row['categoria']; ?></td>
                    <td><?php echo $row['proveedor']; ?></td>
                    <td><?php echo $row['fecha_ingreso']; ?></td>
                    <td><?php echo $row['estado']; ?></td>


                    
                    <td>

                   
                    
                    <a href="controlinventario/deleteinventario.php?id=<?php echo $row['id_producto']; ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                    
                </tr>
                <?php } ?>