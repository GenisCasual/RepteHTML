
    var menuOpen = false;

    function llisca(param){
        var element = document.querySelector(param);
        element.scrollIntoView({behavior: 'smooth'});
      }

    function menu(){
      var media = window.matchMedia("(max-width: 800px)");
      var x = document.getElementsByClassName("menu");
      if(media.matches){
        if(!menuOpen){
        x[0].style.width = "175px";
        x[0].style.border.radius = "5px";
        x[0].style.backgroundColor = "transparent";
        x[0].style.border = "3px solid #F44336";
        x[0].style.height = "255px";
        document.getElementsByTagName("ul")[0].style.display = "block";
        document.getElementsByTagName("ul")[0].style.opacity = "1";
        document.getElementsByClassName("barry")[0].style.display = "none";
        menuOpen = true;
        }else{
          x[0].style.width = "100px";
          x[0].style.border.radius = "50%";
          x[0].style.backgroundColor = "#F44336";
          x[0].style.border = "3px solid transparent";
          x[0].style.height = "100px";
          document.getElementById("mmeennuu").display = "none";
          document.getElementsByTagName("ul")[0].style.display = "none";
          document.getElementsByTagName("ul")[0].style.opacity = "0";
          document.getElementsByClassName("barry")[0].style.display = "block";
          menuOpen = false;
        }
      }else{
      if(!menuOpen){
      x[0].style.width = "700px";
      x[0].style.border.radius = "5px";
      x[0].style.backgroundColor = "transparent";
      x[0].style.border = "3px solid #F44336";
      x[0].style.height = "85px";
      document.getElementsByTagName("ul")[0].style.display = "block";
      document.getElementsByTagName("ul")[0].style.opacity = "1";
      document.getElementsByClassName("barry")[0].style.display = "none";
      menuOpen = true;
      }
      else{
        x[0].style.width = "100px";
        x[0].style.border.radius = "50%";
        x[0].style.backgroundColor = "#F44336";
        x[0].style.border = "3px solid transparent";
        x[0].style.height = "100px";
        document.getElementById("mmeennuu").display = "none";
        document.getElementsByTagName("ul")[0].style.display = "none";
        document.getElementsByTagName("ul")[0].style.opacity = "0";
        document.getElementsByClassName("barry")[0].style.display = "block";
        menuOpen = false;
      }
    }
  }

  $(window).on("scroll touchmove", function() {

    if ($(document).scrollTop() >= $("#Contact").position().top - 350) {
          $('#paragraf').css( "top", "25vh" );
          $('#paragraf').css( "color", "black" );

        } else {
          $('#paragraf').css( "top", "50vh" );
          $('#paragraf').css( "color", "transparent" );
        };
  })
