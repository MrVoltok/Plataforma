require('./bootstrap');

//declaracion de variables para el envío de mensajes en el chat
const messages_el = document.getElementById("chat-boxes");
const username_input = document.getElementById("username_input");
const message_input = document.getElementById("message_input");
const message_form = document.getElementById("message_form");
const user_img = document.getElementById("user-img");

/**
 * Evalua los datos para el envío de mensajes en el chat
 */
message_form.addEventListener('submit',function(e){
    e.preventDefault();
    let image = user_img.value;
    let has_errors = false;


    //Evaluación para posibles errores al eviar el mensaje
    if(username_input.value == ''){
        has_errors = true;
    }

    if(message_input.value == ''){
        has_errors = true;
    }

    if(has_errors){
        return ;
    }

    //Almacena los datos enviados en las variables
    const options = {
        method: 'post',
        url: '/messages/send-message',
        data: {
            username: username_input.value,
            message: message_input.value
        }
    }

    axios(options);
});

/**
 * Envío de mensajes
 */
window.Echo.channel('chat')
    .listen('.message',(e) => {
        //Impresion del mensaje en pantalla
        messages_el.innerHTML += '<li class="received"><img src"'+user_img+'"></img> <div class="text"><p class="user-message"><b>'+e.username+'</b></p><p class="text-messageR">'+e.message+'</p></div></li>';
        //Reinicio del input para enviar mensajes
        message_input.value = '';
    });