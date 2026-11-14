<div id="textora-ai-widget">

    <!-- Chat Box -->
    <div id="textora-chat-box" style="display:none;">

        <!-- Header -->
        <div class="chat-header">

            <div style="display:flex;align-items:center;gap:10px;">

                <img src="{{ asset('images/ai-bot.png') }}"
                     alt="Textora AI"
                     style="
                        width:38px;
                        height:38px;
                        border-radius:50%;
                        background:#fff;
                        padding:2px;
                        object-fit:cover;
                        border:1px solid rgba(255,255,255,0.2);
                     ">

                <div>
                    <strong style="font-size:16px;font-weight:600;">
                        Textora Assistant
                    </strong><br>

                    <small style="font-size:12px;opacity:0.9;">
                        <span style="display:inline-block;width:7px;height:7px;background:#86efac;border-radius:50%;margin-right:4px;"></span> Online &middot; Avg response &lt; 1 min
                    </small>
                </div>

            </div>

            <button type="button" id="close-chat"
                  style="cursor:pointer;background:none;border:none;color:#fff;font-size:18px;display:flex;align-items:center;justify-content:center;padding:4px;"
                  aria-label="Close chat">
                <i class="fa-solid fa-xmark"></i>
            </button>

        </div>

        <!-- Body -->
        <div class="chat-body">

            <h3 style="font-size:16px;font-weight:600;color:#0f172a;margin-bottom:6px;">
                Messaging Inquiries &amp; Support
            </h3>

            <p style="font-size:13px;line-height:1.6;color:#64748b;margin-bottom:14px;">
                Select a service to connect directly with our engineering and routing team on WhatsApp:
            </p>

            <button type="button" onclick="sendService('Bulk SMS Gateway')" style="display:flex;align-items:center;gap:10px;text-align:left;padding:10px 14px;font-size:13px;">
                <i class="fa-solid fa-comment-sms" style="color:#049a3d;width:16px;"></i>
                <span>Bulk SMS Gateway &amp; OTP</span>
            </button>

            <button type="button" onclick="sendService('WhatsApp Business API')" style="display:flex;align-items:center;gap:10px;text-align:left;padding:10px 14px;font-size:13px;">
                <i class="fa-brands fa-whatsapp" style="color:#049a3d;width:16px;"></i>
                <span>WhatsApp Business API</span>
            </button>

            <button type="button" onclick="sendService('RCS Messaging')" style="display:flex;align-items:center;gap:10px;text-align:left;padding:10px 14px;font-size:13px;">
                <i class="fa-solid fa-message" style="color:#049a3d;width:16px;"></i>
                <span>RCS Business Messaging</span>
            </button>

            <button type="button" onclick="sendService('Voice Call OBD')" style="display:flex;align-items:center;gap:10px;text-align:left;padding:10px 14px;font-size:13px;">
                <i class="fa-solid fa-phone-volume" style="color:#049a3d;width:16px;"></i>
                <span>Voice Call OBD &amp; IVR</span>
            </button>

            <button type="button" onclick="sendService('Textora CRM & HRMS')" style="display:flex;align-items:center;gap:10px;text-align:left;padding:10px 14px;font-size:13px;">
                <i class="fa-solid fa-cubes" style="color:#049a3d;width:16px;"></i>
                <span>Textora CRM &amp; HRMS Suites</span>
            </button>

            <button
                type="button"
                class="whatsapp-btn"
                onclick="sendService('General Consultation')"
                style="display:flex;align-items:center;justify-content:center;gap:8px;padding:11px 14px;font-size:13px;background:#049a3d;color:#fff;margin-top:12px;">
                <i class="fa-brands fa-whatsapp text-sm"></i>
                <span>Connect with Sales on WhatsApp</span>
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

    if (aiIcon && chatBox) {
        aiIcon.addEventListener("click", function(e){
            e.preventDefault();
            e.stopPropagation();

            if(chatBox.style.display==="block"){
                chatBox.style.display="none";
            }else{
                chatBox.style.display="block";
            }
        });
    }

    if (closeBtn && chatBox) {
        closeBtn.addEventListener("click", function(e){
            e.preventDefault();
            e.stopPropagation();
            chatBox.style.display="none";
        });
    }

    if (chatBox) {
        chatBox.addEventListener("click", function(e){
            e.stopPropagation();
        });
    }

    document.addEventListener("click", function(){
        if (chatBox) {
            chatBox.style.display="none";
        }
    });

});

function sendService(service){

    let message =
`Hello Textora Team,

I am inquiring regarding ${service}.

Please provide pricing, API access details, and documentation.`;

    window.open(
        "https://wa.me/919187054466?text=" + encodeURIComponent(message),
        "_blank"
    );

}
</script>
