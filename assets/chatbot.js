$(function() {
    var INDEX = 0;

    $("#chat-submit").click(function(e) {
        e.preventDefault();
        var userMsg = $("#chat-input").val();
        if(userMsg.trim() == ''){
            return false;
        }
        generate_message(userMsg, 'self');
        // Call api server.
       call_server(userMsg);
    });

    function call_server(userInputMsg) {
        $.ajax({
            method: "POST",
            url: "chatbot.php",
            data:{'msg':userInputMsg},
            dataType: "json",
            success: function(response) {
                generate_message(response.data.message, 'user');
            }
        });
    }

    function generate_message(msg, type) {
        INDEX++;
        var str=``;
        var img = '<img src="assets/chatbot.png">';
        if(type == 'self') {
            img = '<img src="assets/user.png">';
        }
        str += `<div id='cm-msg-${INDEX}' class="chat-msg ${type}">
                 <span class="msg-avatar">
                    ${img}
                  </span>
                   <div class="cm-msg-text">${msg}</div>
                </div>`;
        $(".chat-logs").append(str);
        $("#cm-msg-"+INDEX).hide().fadeIn(300);
        if(type == 'self'){
            $("#chat-input").val('');
        }
        $(".chat-logs").stop().animate({ scrollTop: $(".chat-logs")[0].scrollHeight}, 1000);
    }

    $(document).delegate(".chat-btn", "click", function() {
        var value = $(this).attr("chat-value");
        var name = $(this).html();
        $("#chat-input").attr("disabled", false);
        generate_message(name, 'self');
    });

    // Open chatbot dialog.
    $("#chat-circle").click(function() {
        // Greeting Message.
        setTimeout(function() {
            generate_message('Welcome,How can i help you?', 'user');
        }, 1000);
        $("#chat-circle").toggle('scale');
        $(".chat-box").toggle('scale');
    });

    // Close chatbot dialog.
    $(".chat-box-toggle").click(function() {
        $("#chat-circle").toggle('scale');
        $(".chat-box").toggle('scale');
    });
});