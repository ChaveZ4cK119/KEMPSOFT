<?php
class headerElementsClass{
    public function normalHeaderElementsFunction( $name, $img, $surname){
        ?>
            <html>
                <header >
                    <div class="profile" title="Ver y deitar perfil">
                        <div class="imgpro">
                            <img src="<?php echo $img ?>" alt="" id="proimg">
                        </div>    
                        <div class="names">
                            <h3 id="name" class="names"><?php echo $name ?></h3>
                            <h2 id="sname" class="names"><?php echo $surname ?></h2>
                        </div>
                                        
                    </div>
                    <div class="companyLogo" title="Mas de Kemp">
                        <h1>KEMP</h1>
                    </div>
                    <div class="menu" title="Administrar">
                       <img src="../img//menu.png" alt="" class="headericons" id="dmenubtn" onclick="dmenu()">
                       <div class="dmenu" id="dmenu">
                        <button class="mbtn">Perfil</button><br>
                        <button class="mbtn" onclick="show2()">Recursos humanos</button><br>
                        <button class="mbtn" onclick="show1()">Direcciones</button><br>
                        <a href="../web/logOut.php">  <button class="mbtn" onclick="logOutMs()">Cerrar sesion</button></a>
                       </div>
                    </div>
                </header>
            </html>
        <?php
    }
   
}

class lateralBarElementsClass{
     public function lateralBarElementsFunction(){
        ?> 
        <html>
            <div class="lateralBar" >
                <h3 id="fmsg">Selecciona una rama en el menu.</h3>
                <!-- <h4>selecciona una rama</h4> -->
                <h3 class="hr">Recursos humanos</h3>
                <h3 class="dr">Directorio</h3>
                    <button onclick="ShowPosition();" class="lbtn hr">Cargos</button>
                    <button class="lbtn hr">Empleados</button></a>
                    <button  class="lbtn dr">Ciudades</button></a>
                    <button class="lbtn dr">Departamentos</button></a>
                    <button class="lbtn dr">paises</button>

                
            </div>
           
        </html>
    <?php
    }
}
?>