<?php

    include 'conexion_be.php';

    $sql = "SELECT * FROM pasajes ORDER BY RAND() LIMIT 6";
    $result = $conexion->query($sql);
    
    if ($result->num_rows > 0) {
        // Mostrar los datos en tarjetas
        while($row = $result->fetch_assoc()) {
?>
<div class="col-md-4 mb-2">
    <div class="card custom-card hover-elevation">
        <img src="<?php echo $row["foto"]; ?>" class="card-img-top img-card" alt="Imagen del pasaje">
        <div class="card-body">
            <?php
            $nombre_origen = $row["origen"];
            $nombre_destino = $row["destino"];
            $tipo_pasaje = $row["tipo_pasaje"];
            ?>
            <div class="d-flex justify-content-between">
                <div>
                    <h5 class="card-title">Origen:</h5>
                    <p class="card-text mb-2"><?php echo $nombre_origen; ?></p>
                </div>
                <div class="date-block-1">
                    <h5 class="card-title">Destino:</h5>
                    <p class="card-text mb-2"><?php echo $nombre_destino; ?></p>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <?php if ($row["ida_vuelta"] == "ida_vuelta"): ?>
                    <div class="date-block">
                        <p class="card-text mb-1">Fecha de Ida:</p>
                        <?php if ($row["fecha_ida"]): ?>
                            <p class="card-text mb-2"><?php echo $row["fecha_ida"]; ?></p>
                        <?php else: ?>
                            <p class="card-text">Fecha no disponible</p>
                        <?php endif; ?>
                    </div>
                    <div class="date-block">
                        <p class="card-text mb-1">Fecha de Vuelta:</p>
                        <?php if ($row["fecha_vuelta"]): ?>
                            <p class="card-text mb-2"><?php echo $row["fecha_vuelta"]; ?></p>
                        <?php else: ?>
                            <p class="card-text">Fecha no disponible</p>
                        <?php endif; ?>
                    </div>
                <?php else: ?>
                    <div class="date-block">
                        <p class="card-text mb-1">Fecha de Ida:</p>
                        <?php if ($row["fecha_ida"]): ?>
                            <p class="card-text mb-2"><?php echo $row["fecha_ida"]; ?></p>
                        <?php else: ?>
                            <p class="card-text">Fecha no disponible</p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <p class="card-text mb-2">Precio: $<?php echo number_format($row["precio"], 2, ',', '.'); ?></p>
                </div>
                <div>
                    <?php if ($tipo_pasaje == "avion"): ?>
                        <i class="bi bi-airplane-fill" style="font-size: 1rem; margin-right: 6rem;"></i>
                    <?php elseif ($tipo_pasaje == "micro"): ?>
                        <i class="fas fa-bus" style="font-size: 1rem; margin-right: 6rem;"></i>
                    <?php endif; ?>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <button class="btn btn-primary btn-toggle mr-2" data-toggle="collapse"
                    data-target="#collapse-<?php echo $row["id"]; ?>" onclick="highlightCard(this)">Ver descripción</button>
                <a href="#" class="btn btn-primary ml-2">Comprar</a>
            </div>
            <div class="collapse card-description" id="collapse-<?php echo $row["id"]; ?>">
                <p class="card-text"><?php echo $row["descripcion"]; ?></p>
            </div>
        </div>
    </div>
</div>

<?php
        }
    } else {
        echo "No se encontraron resultados.";
    }
    $conexion->close();
?>