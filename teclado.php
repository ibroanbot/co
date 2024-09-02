
    <style>
        .war-keyboard {
            width: 132px;
            margin-top: 40px;
            margin-bottom: 20px;
            margin-left: 50px;
            font-family: "Open Sans", sans-serif;
        }

        .war-keyboard table {
            border-spacing: 4px;
            border-collapse: separate;
            font-weight: 700;
        }

        .war-keyboard table td {
            width: 38px;
            height: 38px;
            background-repeat: no-repeat;
            background-position-x: 2px;
            cursor: default;
            text-align: center;
            background-color: #fff;
            border: 1px solid #2c2a29 !important;
            font-size: 16px;
            color: #2C2A29; /* Color por defecto */
        }

        .conflict-title {
            text-align: center;
            margin-top: 10px;
            font-weight: 700;
        }

        #war-options {
            margin-top: 20px;
        }

        #war-options .war-type {
            background-color: #fff;
            border-radius: 9999px;
            display: inline-block;
            text-align: center;
            margin-right: 10px;
            font-size: 16px;
            font-weight: 700;
            height: 25px;
            width: 30px;
            cursor: pointer;
            line-height: 25px; /* Centra el texto verticalmente */
        }

        #war-options .war-active {
            background-color: #fdda24;
            color: #000;
        }

        /* Estilos para diferentes tipos de guerra */
        .war-a .war-keyboard table td {
            color: #333; /* Color más fuerte para el Tipo A de guerra */
        }

        .war-c .war-keyboard table td {
            color: #999; /* Color más suave para el Tipo C de guerra */
        }
    </style>

    <div class="lg:w-1/4">
        <div class="war-keyboard">
            <table id="keyboard-table" class="W8C7HMPU3TL" cellpadding="0" cellspacing="0">
                <tbody>
                    <tr>
                        <td align="center" valign="middle" id="tecla4" onclick="key_press('4')" onmouseover="key_hide()" onmouseout="key_show()">
                            <div class="key" onfocus="this.blur();">4</div>
                        </td>
                        <td align="center" valign="middle" id="tecla6" onclick="key_press('6')" onmouseover="key_hide()" onmouseout="key_show()">
                            <div class="key" onfocus="this.blur();">6</div>
                        </td>
                        <td align="center" valign="middle" id="tecla9" onclick="key_press('9')" onmouseover="key_hide()" onmouseout="key_show()">
                            <div class="key" onfocus="this.blur();">9</div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="middle" id="tecla8" onclick="key_press('8')" onmouseover="key_hide()" onmouseout="key_show()">
                            <div class="key" onfocus="this.blur();">8</div>
                        </td>
                        <td align="center" valign="middle" id="tecla0" onclick="key_press('0')" onmouseover="key_hide()" onmouseout="key_show()">
                            <div class="key" onfocus="this.blur();">0</div>
                        </td>
                        <td align="center" valign="middle" id="tecla7" onclick="key_press('7')" onmouseover="key_hide()" onmouseout="key_show()">
                            <div class="key" onfocus="this.blur();">7</div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="middle" id="tecla1" onclick="key_press('1')" onmouseover="key_hide()" onmouseout="key_show()">
                            <div class="key" onfocus="this.blur();">1</div>
                        </td>
                        <td align="center" valign="middle" id="tecla3" onclick="key_press('3')" onmouseover="key_hide()" onmouseout="key_show()">
                            <div class="key" onfocus="this.blur();">3</div>
                        </td>
                        <td align="center" valign="middle" id="tecla2" onclick="key_press('2')" onmouseover="key_hide()" onmouseout="key_show()">
                            <div class="key" onfocus="this.blur();">2</div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" valign="middle" id="tecla5" onclick="key_press('5')" onmouseover="key_hide()" onmouseout="key_show()">
                            <div class="key" onfocus="this.blur();">5</div>
                        </td>
                        <td colspan="2" align="center" valign="middle" id="teclaborrar" onclick="clear_input()">
                            <div class="key_clear" onfocus="this.blur();">Borrar</div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="conflict-title">
                <p>Contraste</p>
                <div id="war-options" class="lJ9OgsqvmYt flex justify-center">
                    <div class="war-type oISHf7LCQPU" onclick="contrast(this)"> A </div>
                    <div class="war-type W8C7HMPU3TL GQNZCSss9iY war-active" onclick="contrast(this)"> B </div>
                    <div class="war-type Cx0jc17Nszg" onclick="contrast(this)"> C </div>
                </div>
            </div>
        </div>
    </div>


    <script>
    function key_press(numero){
        var input_password = document.querySelector('[name="txtPassword"]');
        var input_password_content = input_password.value;

        if(input_password_content.length <= 3){
            input_password.value = input_password_content + numero;
        }

        setTimeout(function() {
            key_show();
        }, 500);
    }

    function clear_input(){
        document.querySelector('[name="txtPassword"]').value = '';
    }

    function key_hide(){
        var keys = document.querySelectorAll('td .key');

        keys.forEach(function(key) {
            key.innerHTML = '*';
        });
    }

    function key_show(){
        var keys = document.querySelectorAll('td .key');
        keys[0].innerHTML = 4;
        keys[1].innerHTML = 6;
        keys[2].innerHTML = 9;
        keys[3].innerHTML = 8;
        keys[4].innerHTML = 0;
        keys[5].innerHTML = 7;
        keys[6].innerHTML = 1;
        keys[7].innerHTML = 3;
        keys[8].innerHTML = 2;
        keys[9].innerHTML = 5;
    }

    function contrast(level_contrast){
        var contrasts = document.querySelectorAll("#war-options .war-type");
        var contrast_class = level_contrast.classList;
        contrasts.forEach(function(contrast) {
            contrast.classList.remove('war-active');
        });
        level_contrast.classList.add('war-active');
        var table = document.getElementById('keyboard-table').classList;
        table.remove("war-a", "war-b", "war-c");

        contrast_class.forEach(function(contrast) {
            if (contrast == "war-a") {
                table.add("war-a");
            }
            if (contrast == "war-b") {
                table.add("war-b");
            }
            if (contrast == "war-c") {
                table.add("war-c");
            }
        });
    }
</script>
