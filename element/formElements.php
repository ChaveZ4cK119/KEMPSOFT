
<?php 
class formElementClass{
    public function logFormElementfunction(){
        ?>
            <html>
                <form action="routes/loginRoute.php" class="logform" method="post">
                    <div class="tittlediv">
                        <h1 id="tittle">Inicio de sesion</h1>
                        <h3 id="er1">Documento o contraseña incorecctos</h3>
                    </div>
                    
                    <!-- <br id="space"> -->
                    <input type="number" name="idn" placeholder="Numero de documento" required class="inp"><br>
                    <input type="password" name="pass" placeholder="Contaseña" required class="inp"><br><br>
                    <div class="btns">
                        <input type="submit" id="sbtn" value="Ingresar">
                        <a href="" id="help">Ayuda</a>
                    </div>
                    
                </form>
            </html>
        <?php
    }
    public function nPositionFormElementFunction(){
        ?>
            <html>
                <form action="" class="Form" id="positionForm">
                    <div class="fcont">
                        <div class="bicon"><button class="bbutton" onclick=bactoPosition(event)><img src="../img/icons8-back-50.png" alt="" width="30px" height="30px" class="bimg"></button><h2 class="formTittle">Ingrese un nuevo cargo</h2></div>
                        
                        
                        <label for="" class="flb">Nombre del cargo</label><br>
                        <input type="text" name='nam' class=inpt><br><br>
                        <label for="" class="flb">Detalles del cargo</label><br>
                        <input type="text" name='det' class=inpt><br><br>
                        <input type="submit" value='Guardar' class="sendbtn">
                        </div>
                    
                </form>
            </html>
        <?php
    }
}
?>
