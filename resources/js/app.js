require('./bootstrap');

const messages_el = document.getElementById("chat-boxes");
const username_input = document.getElementById("username_input");
const message_input = document.getElementById("message_input");
const message_form = document.getElementById("message_form");

message_form.addEventListener('submit',function(e){
    e.preventDefault();

    let has_errors = false;

    if(username_input.value == ''){
        has_errors = true;
    }

    if(message_input.value == ''){
        has_errors = true;
    }

    if(has_errors){
        return ;
    }

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

window.Echo.channel('chat')
    .listen('.message',(e) => {
        if(username_input.value == "{{auth()->user()->name}}")
            messages_el.innerHTML += '<li class="sended"><p class="text-message">'+e.message+'</p></li>';
        else
            messages_el.innerHTML += '<li class="received"><p class="user-message"><b>'+e.username+'</b></p><p class="text-messageR">'+e.message+'</p></li>';
        message_input.value = '';
    });