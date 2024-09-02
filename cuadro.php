<div class="grotesca-title"><?php echo $titulo ?></div>
<div class="caminolimpio">
    <div class="message"><?php echo $mensaje ?></div>
    <div class="label-container">
        <?php if ($mostrar_icono_info && $icono_info) { ?>
            <img src="<?php echo $icono_info ?>" alt="Icono" width="10" height="10">
        <?php } ?>
        <span class="label-text"><?php echo $contenidotitle ?></span>
        <span class="label-text" style="margin-left: -10px;" ><?php echo $contenidotitle2 ?></span>
    </div>
    <div class="input-container">
    <img src="<?php echo $icono_input ?>" alt="Input Icon" class="input-icon">
    <input type="<?php echo $tipo_input_html ?>" class="camionescolombia" id="<?php echo $id_input ?>" name="<?php echo $nombre_input ?>" placeholder="<?php echo $placeholder_input ?>" <?php if ($disabled) echo 'disabled'; ?> maxlength="<?php echo $max_caracteres ?>">
</div>
    <?php if ($mostrar_mensaje_teclado) { ?>
        <div style="padding: 10px; line-height: 1; padding: 5px 10px 0px 10px; font-size: 12px !important; text-align: left !important;  margin-bottom: 0 !important; margin-top: -10px;"><?php echo $mensaje_teclado ?></div>
    <?php } ?>
    <div class="button-container">
        <?php if ($mostrar_button1) { ?>
            <button type="submit" id="<?php echo $id_button1 ?>" name="<?php echo $nombre_button1 ?>" class="motocarro"><?php echo $texto_button1 ?></button>
        <?php } ?>
        <?php if ($mostrar_button2) { ?>
            <button type="submit" id="<?php echo $id_button2 ?>" name="<?php echo $nombre_button2 ?>" class="motoconcho"><?php echo $texto_button2 ?></button>
        <?php } ?>
    </div>
    <a href="#" style=" text-decoration: none; color: inherit; " ><?php if ($mostrar_genera_clave_personal) { ?>
        <div style="padding: 20px; text-align: right; line-height: 1;">
            <img src="<?php echo $icono ?>" alt="Icono" width="10" height="10">
            <?php echo $Generaunaclavepersonal ?>
        </div>
    <?php } ?></a>
    <?php if ($mostrar_enlace) { ?>
        <a href="#" class="conflicto">
            <div class="forgot-link">
                <p>¿Olvidaste tu usuario?</p>
                <p>¿Problemas para conectarte?</p>
            </div>
        </a>
    <?php } ?>

</div>
