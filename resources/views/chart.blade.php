  {{-- whatsapp chart  start --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <div id="whatsapp-chat" class="whatsapp-chat-container">
      <div class="floating-message message-1">Need help?</div>
      <div class="floating-message message-2">Chat with us!</div>
      <div class="floating-message message-3">We're here for you</div>
      <a href="javascript:void(0);" class="whatsapp-button">
          <i class="fab fa-whatsapp"></i>
      </a>
      <div class="chat-popup">
          <div class="chat-header">
              <h4>Chat with Us</h4>
              <button class="close-chat">&times;</button>
          </div>
          <div class="chat-body">
              <p>Hello! How can we assist you today?</p>
              <p>Our team is ready to help via WhatsApp.</p>
              <a href="https://wa.me/254712787744?text=Hello%2C%20I'm%20interested%20in%20Onlyou%20Elgeyo%20properties.%20Can%20you%20provide%20more%20information%3F"
                  target="_blank" class="whatsapp-link">Start Conversation</a>
          </div>
      </div>
  </div>
  <style>
      .whatsapp-chat-container {
          position: fixed;
          bottom: 20px;
          right: 20px;
          z-index: 9999;
      }

      .floating-message {
          position: absolute;
          background-color: #25d366;
          color: white;
          padding: 10px 15px;
          border-radius: 20px;
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
          opacity: 0;
          animation: float 3s ease-in-out infinite, fadeInOut 6s ease-in-out infinite;
      }

      .message-1 {
          bottom: 80px;
          right: 0;
          animation-delay: 0s;
      }

      .message-2 {
          bottom: 130px;
          right: 30px;
          animation-delay: 2s;
      }

      .message-3 {
          bottom: 180px;
          right: 0;
          animation-delay: 4s;
      }

      @keyframes float {

          0%,
          100% {
              transform: translateY(0);
          }

          50% {
              transform: translateY(-10px);
          }
      }

      @keyframes fadeInOut {

          0%,
          100% {
              opacity: 0;
          }

          25%,
          75% {
              opacity: 1;
          }
      }

      .whatsapp-button {
          background-color: #25d366;
          color: white;
          border-radius: 50%;
          width: 60px;
          height: 60px;
          display: flex;
          justify-content: center;
          align-items: center;
          font-size: 30px;
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
          cursor: pointer;
          transition: all 0.3s ease;
      }

      .whatsapp-button:hover {
          transform: scale(1.1);
          box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
      }

      .chat-popup {
          display: none;
          position: absolute;
          bottom: 80px;
          right: 0;
          width: 300px;
          background-color: white;
          border-radius: 15px;
          box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
          overflow: hidden;
          transition: all 0.3s ease;
      }

      .chat-header {
          background-color: #075e54;
          color: white;
          padding: 15px;
          display: flex;
          justify-content: space-between;
          align-items: center;
      }

      .chat-header h4 {
          margin: 0;
          font-size: 18px;
      }

      .close-chat {
          background: none;
          border: none;
          color: white;
          font-size: 24px;
          cursor: pointer;
          transition: all 0.2s ease;
      }

      .close-chat:hover {
          transform: scale(1.1);
      }

      .chat-body {
          padding: 20px;
      }

      .chat-body p {
          margin-bottom: 10px;
          font-size: 14px;
          line-height: 1.4;
      }

      .whatsapp-link {
          display: inline-block;
          background-color: #25d366;
          color: white;
          padding: 12px 20px;
          text-decoration: none;
          border-radius: 25px;
          margin-top: 15px;
          font-weight: bold;
          transition: all 0.3s ease;
      }

      .whatsapp-link:hover {
          background-color: #128C7E;
          transform: translateY(-2px);
          box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      }
  </style>

  <script>
      document.addEventListener('DOMContentLoaded', function() {
          const whatsappButton = document.querySelector('.whatsapp-button');
          const chatPopup = document.querySelector('.chat-popup');
          const closeChat = document.querySelector('.close-chat');

          whatsappButton.addEventListener('click', function() {
              chatPopup.style.display = 'block';
          });

          closeChat.addEventListener('click', function() {
              chatPopup.style.display = 'none';
          });
      });
  </script>

  {{-- whatsapp chart  end --}}
