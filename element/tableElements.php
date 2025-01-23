<?php 
header('Content-Type: application/json; charset=utf-8');
class hrTablesElementClass{
    public function positionTableElementFunction($kpo){
        ?>
            <div class="nbt">
                  <table class="tb">
                
                <thead>
                    <h2>Tabla de Cargos</h2>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Detalles del cargo</th>
                        <th><button class="add" onclick=showNewPositionForm()><img src="../img/plus3.png" width="20px" title="Agregar"></button></th>
                    </tr>
                </thead>
                <tbody>
                     <tr>
                    
                    <?php 
                    foreach ($kpo as $kpos):
                        
                    ?>
                        <script>
                            let id = JSON.parse('<?php echo json_encode($kpos['id_kpo']) ?>');
                            // const id2 = id.replace(/<br>/g, '');
                            // let element = document.getElementById('delico');
                            // element.setAttribute(data-id, id);
                        </script>
                        <tr>
                            <td><?php echo $kpos['id_kpo']; ?></td>
                            <td><?php echo $kpos['name_kpo']; ?></td>
                            <td><?php echo $kpos['details_kpo']; ?></td>
                            <td><div class="opp"><img class="delico" id="delico" src="../img/rbimg.png" width="25px" alt="" title="Eliminar" data-id="<?php echo json_encode($kpos['id_kpo']) ?>"> <a href="../routes/fDeletePositionRoute.php?id=<?php echo json_encode($kpos['id_kpo']) ?>"><img class="updico"src="../img/edit.png" width="25px" alt="" title="Actualizar"></a> </div></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                   
            </table>
            </div>
            
          
            
        <?php  ?>
        <?php
    }
}
?>