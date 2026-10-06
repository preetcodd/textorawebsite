<div id="textora-ai-widget">

    <!-- Chat Box -->
    <div id="textora-chat-box" style="display:none;">

        <!-- Header -->
        <div class="chat-header">

            <div style="display:flex;align-items:center;gap:10px;">

                <img src="{{ asset('images/ai-bot.png') }}"
                     alt="Textora AI"
                     style="
                        width:42px;
                        height:42px;
                        border-radius:50%;
                        background:#fff;
                        padding:3px;
                        object-fit:cover;
                        box-shadow:0 2px 8px rgba(0,0,0,.25);
                     ">

                <div>
                    <strong style="font-size:18px;font-weight:700;">
                        Textora AI Assistant
                    </strong><br>

                    <small style="font-size:12px;">
                        🟢 Online • Usually replies in under a minute
                    </small>
                </div>

            </div>

            <span id="close-chat"
                  style="cursor:pointer;font-size:24px;font-weight:bold;">
                ✕
            </span>

        </div>

        <!-- Body -->
        <div class="chat-body">

            <h3 style="font-size:20px;font-weight:700;color:#1d8b41;margin-bottom:8px;">
                👋 Hi, I'm Preet !
            </h3>

            <p style="font-size:14px;line-height:1.7;color:#555;margin-bottom:18px;">
                <strong>Your AI Assistant at Textora Technologies.</strong><br>
                I'm here to help you choose the best messaging solution for your business.
            </p>

            <p style="font-size:13px;color:#777;margin-bottom:15px;">
                Please select a service below to connect instantly with our team on WhatsApp.
            </p>

            <button type="button" onclick="sendService('Bulk SMS')">
                📩 Bulk SMS
            </button>

            <button type="button" onclick="sendService('WhatsApp Business API')">
                💬 WhatsApp Business API
            </button>

            <button type="button" onclick="sendService('RCS Messaging')">
                🚀 RCS Messaging
            </button>

            <button type="button" onclick="sendService('Email Marketing')">
                📧 Email Marketing
            </button>

            <button type="button" onclick="sendService('Website Development')">
                💻 Website Development
            </button>

            <button
                type="button"
                class="whatsapp-btn"
                onclick="sendService('General Enquiry')">
                💚 Chat on WhatsApp
            </button>

        </div>

    </div>

    <!-- Floating AI Button -->
    <div id="textora-ai-icon">

        <img src="{{ asset('images/ai-bot.png') }}"
             alt="AI Assistant"
             style="
                width:100%;
                height:100%;
                object-fit:cover;
                border-radius:50%;
             ">

    </div>

</div>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const aiIcon = document.getElementById("textora-ai-icon");
    const chatBox = document.getElementById("textora-chat-box");
    const closeBtn = document.getElementById("close-chat");

    aiIcon.addEventListener("click", function(e){

        e.preventDefault();
        e.stopPropagation();

        if(chatBox.style.display==="block"){
            chatBox.style.display="none";
        }else{
            chatBox.style.display="block";
        }

    });

    closeBtn.addEventListener("click", function(e){

        e.preventDefault();
        e.stopPropagation();

        chatBox.style.display="none";

    });

    chatBox.addEventListener("click", function(e){

        e.stopPropagation();

    });

    document.addEventListener("click", function(){

        chatBox.style.display="none";

    });

});

function sendService(service){

    let message =
`Hi Textora Team 👋

I am interested in ${service}.

Please share pricing, demo and complete details.`;

    window.open(
        "https://wa.me/919187054466?text=" + encodeURIComponent(message),
        "_blank"
    );

}
</script>