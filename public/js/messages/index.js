let send = $('#send');
let message = $('#message');
let receiver = send.data('user');
let ul = $('#chat-container');
let div = $('.chat-box');



div.scrollTop(div[0].scrollHeight)

let url            =  window.location.protocol + "//" + location.host +  "/" ;


send.on('click',function (e)
{
    e.preventDefault();

    axios({
        method: 'POST',
        url: url + 'messages',
        data: {
            sender_id: 1,
            receiver_id:Number(receiver),
            Message:message.val()
        }
    }).then((response) =>
    {
        if (response.data != null)
        {
            ul.append(`<li class="our_msg mt-1">${response.data.message}</li>`);
            div.scrollTop(div[0].scrollHeight)
            message.val('')
        }

    }, (error) =>
    {
        return error;
    });
});
