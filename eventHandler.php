<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<form method="POST" action="eventHandler.php">
<input type="radio" class="clickyradio" value="first"/>
<input type="radio" class="clickyradio" value="second"/>
<input type="radio" class="clickyradio" value="third"/>
<input type="submit"> vaii </input>
</form>

<script>
$(document).ready(function() {
    var string = "";
   $('.clickyradio').click(function() {
      // whatever you want to happen when it gets clicked
      // "this" keyword will refer to the input element that got clicked
      if(this.value == 'first'){
          string = "primo";
          $.ajax({
            url: "eventHandler.php", 
            data: "valore=primo",
            success: function(risposta) { 
            $("body").html(risposta); 
            },
            error: function(){
            $("body").html(risposta);
                            }
            }); 
        }
      if(this.value == 'second'){
          string = "secondo";
      }
      if(this.value == 'third'){
          string = "terzo";
      }

   console.log(string);
   });
});
</script>