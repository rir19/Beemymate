      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "PAGE-ID");
      chatbox.setAttribute("attribution", "biz_inbox");
  

   
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'API-VERSION'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://graph.facebook.com/v14.0/me/messenger_profile?access_token=<PAGE_ACCESS_TOKEN>';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
  