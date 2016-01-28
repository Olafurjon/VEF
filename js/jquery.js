$(document).ready(function()
{
    
             $('.fyrrisida').click(function() { 
              if ($(".4").hasClass("valid"))
              {
                
                $('.1,.2,.3,.4').removeClass("valid");
                $('.3').addClass("valid");
                $('.4').removeClass("show");
                $('.3').removeClass("hidden");
                $('.3').addClass("show");
                $('.1,.2,.4').addClass("hidden");

              }
               else if ($(".3").hasClass("valid"))
              {
                
                $('.1,.2,.3,.4').removeClass("valid");
                $('.2').addClass("valid");
                $('.3').removeClass("show");
                $('.2').removeClass("hidden");
                $('.2').addClass("show");
                $('.1,.3,.4').addClass("hidden");

              }
               else if ($(".2").hasClass("valid"))
              {
                
                $('.1,.2,.3,.4').removeClass("valid");
                $('.1').addClass("valid");
                $('.2').removeClass("show");
                $('.1').removeClass("hidden");
                $('.1').addClass("show");
                $('.3,.2,.4').addClass("hidden");

              }

               else if ($(".1").hasClass("valid"))
              {
                
               $('.1,.2,.3,.4').removeClass("valid");
                $('.4').addClass("valid");
                $('.3').removeClass("show");
                $('.4').removeClass("hidden");
                $('.4').addClass("show");
                $('.3,.2,.1').addClass("hidden");

              }
         
          });

       
             

           $('.naestasida').click(function() {
           if ($(".1").hasClass("valid"))
              {
                
                $('.1,.2,.3,.4').removeClass("valid");
                $('.2').addClass("valid");
                $('.1').removeClass("show");
                $('.2').removeClass("hidden");
                $('.2').addClass("show");
                $('.1,.3,.4').addClass("hidden");

              }
               else if ($(".2").hasClass("valid"))
              {
                
                $('.1,.2,.3,.4').removeClass("valid");
                $('.3').addClass("valid");
                $('.2').removeClass("show");
                $('.3').removeClass("hidden");
                $('.3').addClass("show");
                $('.1,.2,.4').addClass("hidden");

              }
               else if ($(".3").hasClass("valid"))
              {
                
                $('.1,.2,.3,.4').removeClass("valid");
                $('.4').addClass("valid");
                $('.3').removeClass("show");
                $('.4').removeClass("hidden");
                $('.4').addClass("show");
                $('.3,.2,.1').addClass("hidden");

              }

                  else if ($(".4").hasClass("valid"))
              {
                
                $('.1,.2,.3,.4').removeClass("valid");
                $('.1').addClass("valid");
                $('.2').removeClass("show");
                $('.1').removeClass("hidden");
                $('.1').addClass("show");
                $('.3,.2,.4').addClass("hidden");

              }
         
          });


           });


      
    
   