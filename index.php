<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chatbot</title>
    <link rel="stylesheet" href="assets/chatbot.css">
</head>
<body>
<div id="center-text">
    <h2>ChatBox UI</h2>
    <p>Message send and scroll to bottom enabled </p>
</div>
<div id="body">
    <div id="chat-circle" class="btn btn-raised">
        <div id="chat-overlay"></div>

    </div>
    <div class="chat-box">
        <div class="chat-box-header">
            ChatBot
            <span class="chat-box-toggle">&times;</span>
        </div>
        <div class="chat-box-body">
            <div class="chat-box-overlay">
            </div>
            <div class="chat-logs">

            </div><!--chat-log -->
        </div>
        <div class="chat-input">
            <form id="chatbot-form">
                <input type="text" id="chat-input" placeholder="Send a message..."/>
                <button type="submit" class="chat-submit" id="chat-submit">
                    <svg version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                        <style type="text/css">
                            .st0{fill:none;stroke:#000000;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
                            .st1{fill:none;stroke:#000000;stroke-width:2;stroke-linejoin:round;stroke-miterlimit:10;}
                        </style>
                         <path class="st0" d="M26.4,2.9L3.8,15c-0.7,0.4-0.7,1.5,0.1,1.8l20.8,8.7c0.6,0.3,1.3-0.2,1.4-0.8l1.7-20.8
                        C27.9,3,27.1,2.5,26.4,2.9z"/>
                        <path class="st0" d="M26,4L13,20v7.3c0,0.9,1.2,1.4,1.8,0.7L19,23"/>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</div>
<!-- Require javascript files -->
<script src="./assets/jquery-3.6.0.min.js"></script>
<script src="./assets/chatbot.js"></script>
</body>
</html>