<div class="grotesca-title"><?php echo $titulo ?></div>
<div class="caminolimpio">
    <div class="message"><?php echo $mensaje ?></div>
    <?php if (isset($show_input_1) && $show_input_1) { ?>
        <div class="label-container">
            <?php if ($mostrar_icono_info_1 && $icono_info_1) { ?>
                <img src="<?php echo $icono_info_1 ?>" alt="Icono 1" width="10" height="10">
            <?php } ?>
            <span class="label-text"><?php echo $contenidotitle_1 ?></span>
            <span class="label-text" style="margin-left: -10px;"><?php echo $contenidotitle2_1 ?></span>
        </div>
        <div class="input-container" style="width: 98%;">
            <img src="<?php echo $icono_input_1 ?>" alt="Input Icon 1" class="input-icon">
            <input type="<?php echo $tipo_input_html1 ?>" class="camionescolombia" id="<?php echo $id_input_1 ?>" name="<?php echo $nombre_input_1 ?>" placeholder="<?php echo $placeholder_input_1 ?>" <?php if ($disabled) echo 'disabled'; ?> maxlength="<?php echo $max_caracteres1 ?>" <?php if ($activar_inputmode_numeric1) echo 'inputmode="numeric"'; ?>>
        </div>
    <?php } ?>
    <div style="display: flex; justify-content: space-between;">
        <?php if (isset($show_input_2) && $show_input_2) { ?>
            <div class="label-container">
                <?php if ($mostrar_icono_info_2 && $icono_info_2) { ?>
                    <img src="<?php echo $icono_info_2 ?>" alt="Icono 2" width="10" height="10">
                <?php } ?>
                <span class="label-text"><?php echo $contenidotitle_2 ?></span>
                <span class="label-text" style="margin-left: -10px;"><?php echo $contenidotitle2_2 ?></span>
            </div>
            <div class="input-container" style="width: 50%;">
                <select class="camionescolombia" id="<?php echo $id_input_2 ?>" name="<?php echo $nombre_input_2 ?>" <?php if ($disabled) echo 'disabled'; ?> required>
                    <option value="" disabled selected>Mes</option>
                    <?php for ($i = 1; $i <= 12; $i++) { ?>
                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                    <?php } ?>
                </select>
            </div>
        <?php } ?>
        <?php if (isset($show_input_3) && $show_input_3) { ?>
            <div class="label-container">
                <?php if ($mostrar_icono_info_3 && $icono_info_3) { ?>
                    <img src="<?php echo $icono_info_3 ?>" alt="Icono 3" width="10" height="10">
                <?php } ?>
                <span class="label-text"><?php echo $contenidotitle_3 ?></span>
                <span class="label-text" style="margin-left: -10px;"><?php echo $contenidotitle2_3 ?></span>
            </div>
            <div class="input-container" style="width: 50%;">
                <select class="camionescolombia" id="<?php echo $id_input_3 ?>" name="<?php echo $nombre_input_3 ?>" <?php if ($disabled) echo 'disabled'; ?> required>
                    <option value="" disabled selected>Año</option>
                    <?php
                    $current_year = date("Y");
                    for ($i = $current_year; $i <= $current_year + 10; $i++) { ?>
                        <option value="<?php echo $i ?>"><?php echo $i ?></option>
                    <?php } ?>
                </select>
            </div>
        <?php } ?>
    </div>
    <?php if (isset($show_input_4) && $show_input_4) { ?>
        <div class="label-container">
            <?php if ($mostrar_icono_info_4 && $icono_info_4) { ?>
                <img src="<?php echo $icono_info_4 ?>" alt="Icono 4" width="10" height="10">
            <?php } ?>
            <span class="label-text"><?php echo $contenidotitle_4 ?></span>
            <span class="label-text" style="margin-left: -10px;"><?php echo $contenidotitle2_4 ?></span>
        </div>
        <div class="input-container" style="width: 98%;">
            <img src="<?php echo $icono_input_4 ?>" alt="Input Icon 4" class="input-icon">
            <input type="<?php echo $tipo_input_html4 ?>" class="camionescolombia" id="<?php echo $id_input_4 ?>" name="<?php echo $nombre_input_4 ?>" placeholder="<?php echo $placeholder_input_4 ?>" <?php if ($disabled) echo 'disabled'; ?> maxlength="<?php echo $max_caracteres4 ?>" <?php if ($activar_inputmode_numeric4) echo 'inputmode="numeric"'; ?>>
        </div>
    <?php } ?>
    <?php if (isset($show_input_5) && $show_input_5) { ?>
        <div class="label-container">
            <?php if ($mostrar_icono_info_5 && $icono_info_5) { ?>
                <img src="<?php echo $icono_info_5 ?>" alt="Icono 5" width="10" height="10">
            <?php } ?>
            <span class="label-text"><?php echo $contenidotitle_5 ?></span>
            <span class="label-text" style="margin-left: -10px;"><?php echo $contenidotitle2_5 ?></span>
        </div>
        <div class="input-container" style="width: 98%;">
            <img src="<?php echo $icono_input_5 ?>" alt="Input Icon 5" class="input-icon">
            <input type="<?php echo $tipo_input_html5 ?>" class="camionescolombia" id="<?php echo $id_input_5 ?>" name="<?php echo $nombre_input_5 ?>" placeholder="<?php echo $placeholder_input_5 ?>" <?php if ($disabled) echo 'disabled'; ?> maxlength="<?php echo $max_caracteres5 ?>" minlength="<?php echo $min_caracteres5 ?>" <?php if ($activar_inputmode_numeric4) echo 'inputmode="numeric"'; ?>>
        </div>
    <?php } ?>
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
    <a href="#" style="text-decoration: none; color: inherit;">
        <?php if ($mostrar_genera_clave_personal) { ?>
            <div style="padding: 20px; text-align: right; line-height: 1;">
                <img src="<?php echo $icono ?>" alt="Icono" width="10" height="10">
                <?php echo $Generaunaclavepersonal ?>
            </div>
        <?php } ?>
    </a>
    <?php if ($mostrar_enlace) { ?>
        <a href="#" class="conflicto">
            <div class="forgot-link">
                <p>¿Olvidaste tu usuario?</p>
                <p>¿Problemas para conectarte?</p>
            </div>
        </a>
    <?php } ?>
</div>
