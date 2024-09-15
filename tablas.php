<?php
function showHome (){
    require_once 'templates/header.php';
}
?>

<?php
    function generarTablaMultiplicacion($tabla) {
        require_once 'templates/header.php';
?> 
        <h2>Tabla de multiplicar del <?php echo $tabla; ?> </h2>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th>Multiplicando</th>
                <th>Multiplicador</th>
                <th>Resultado</th>
            </tr>
<?php        
        for ($i = 1; $i <= 20; $i++) {
            $resultado = $tabla * $i;
?> 
            <tr>
                <td><?php echo $tabla; ?></td>
                <td><?php echo $i; ?></td>
                <td><?php echo $resultado; ?></td>
            </tr>    
<?php 
        }
?>
        </table>
<?php
    }

    if (isset($_POST['limite'])) {
        $limite = intval($_POST['limite']);

        for ($tabla = 1; $tabla <= $limite; $tabla++) {
            generarTablaMultiplicacion($tabla);
        }
    }  
?>
</body>
