$(document).ready(function(){
    $("#pausebutton").click(function(){
        if ($("#newVal").val() == "1" && ( $("#enText").val() == "" || $("#cnText").val() == "" || $("#cnButton").val() == "" || $("#enButton").val() == "")){
            $("#error").text("Enter the messages and button texts please.");
            return false;
        }else{            
             jQuery.ajax({
                url: "update.php",
                type: "post",
                dataType: "json",
                data: {pause: $("#newVal").val(), 
                       enButton: encodeURIComponent($("#enButton").val()),
                       cnButton: encodeURIComponent($("#cnButton").val()),
                       enText: encodeURIComponent($("#enText").val()), 
                       cnText: encodeURIComponent($("#cnText").val())},
                cache: false,
                success: function(data) {
                      $("#error").text("");
                      if (data.pause == "1"){
                          $("#pausebutton").text("UNPAUSE");
                          $("#pausebutton").removeClass("red");
                          $("#pausebutton").addClass("green");
                          $("#newVal").val(0);
                      }else if (data.pause == "0"){
                          $("#pausebutton").text("PAUSE");
                          $("#pausebutton").removeClass("green");
                          $("#pausebutton").addClass("red");
                          $("#newVal").val(1);
                      }
                },
                error: function(XMLHttpRequest, textStatus, errorThrown) {
                    $("#error").text(errorThrown);
                }
           });
        }
    });
    }
);