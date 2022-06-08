

    $(document).ready(function(){
        setInterval(function(){
           $.get("home.php", function(result){
                $('#loads').html(result);
            });
        }, 5000);
    }
    );

             
                      location.reload('../provate/home.php');
                      $(document).ready(function(){
                          $("#info").load("home.php");
                      });      
                     
                      $(function(){
                        // don't cache ajax or content won't be fresh
                        $.ajaxSetup ({
                            cache: false
                        });
                        var ajax_load = "<img src='http://automobiles.honda.com/images/current-offers/small-loading.gif' alt='loading...' />";
                    
                        // load() functions
                        var loadUrl = "home.php";
                        $("#loadbasic").click(function(){
                            $("#loads").html(ajax_load).load(loadUrl);
                        });
                    
                    // end  
                    });