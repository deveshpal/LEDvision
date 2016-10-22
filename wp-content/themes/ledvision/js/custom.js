$(document).ready(function(){

 

  $('[data-parallax]').each(function(){
    var $this = $(this),
        $window = $(window);

    $window.scroll(function() {
      var y = ($window.scrollTop() / $this.data('speed'));
      var moveTop = y + 'px';
     
      $this.find('#video_background').css('top', moveTop);
    }); 
  });

  $("#myModal .close").click(function() {
    $(this).closest('form').find("input[type=text], textarea").val("");
  });

  $(".lb_canvas").css({"width":"100%","height":"100%"});

  $('.arrowdown .arrow').click(function (e) {
    // e.preventDefault();
    var top;
    $('html, body').animate({
      scrollTop: $($(this)).offset().top 
    }, 1000);
    if ($(window).width() < 768) {
      $('.hdr_cntnr nav').slideToggle();
      $('.hamburg_menu').toggleClass("active");
    }
  });
  if($(window).width() < 768){
      var winheight = $(window).height();
      $(".menuwrapper").css("height", winheight);
  }


      var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btnsecond = document.getElementById("myBtnsecond");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal

btnsecond.onclick = function() {
    modal.style.display = "block";
}

btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}


  $('.bxslider').bxSlider();
  $(".commonclass").hide();
  $(".screenpitch ul li a").click(function(){
      var ouch = $(this).attr("class");
      console.log(ouch);
      $(ouch).addClass('active');
  });

  $(".screenpitch ul li a,.loadmore a ").click(function(event){
    event.preventDefault();
  });
  if($(window).width() < 1024){
    $(".menuwrapper").hide();
  }
  
  if($(window).width() < 768){
    
    $(".hamburgmenu").click(function(){
      $(".menuwrapper").slideToggle();
      $(this).toggleClass("active");
    });

    $(".mainmenu ul li a").click(function(){
      $(".menuwrapper").slideUp();
      $(".hamburgmenu").removeClass("active")
    });

    
  }


  // $("a").click(function(event){
  // event.preventDefault()
  // });


 $(".firstpanel").show();

  $(".screenpitch ul li").click(function(){
    $(".screenpitch ul li").removeClass("active");
    $(this).addClass("active");
    var idselect = $(this).find("a").attr('href');
    console.log(idselect);
    $(".firstpanel").removeClass("active");
    $(".commonclass").hide();
    $('#'+ idselect).show();
  }); 

  $(window).on("scroll", function () {
    if ($(window).scrollTop() > 0) {
        $("header .mainmenu").addClass("nav1");
    } else {
        $("header .mainmenu").removeClass("nav1");
    }
  });

  

});

$(document).on('click', 'a[href^="#"]', function(e) {
    // target element id
    var id = $(this).attr('href');

    // target element
    var $id = $(id);
    if ($id.length === 0) {
        return;
    }

    // prevent standard hash navigation (avoid blinking in IE)
    e.preventDefault();

    // top position relative to the document
    var pos = $(id).offset().top - 60;

    // animated top scrolling
    $('body, html').animate({scrollTop: pos});

});


/*Jquery time*/
$(document).ready(function(){
  var item, img, title, large_img;
  var CW, CH, CL, CT, hpadding, vpadding, imgtag;
  //Flag for preventing multiple image displays
  var lb_loading = false;
  var doc = $(document);
  
  $(".lightbox li").click(function(){
    if(lb_loading) return false;
    lb_loading= true;
    
    item = $(this);
    img = item.find("img");
    title = item.find(".title").html();
    
    //Remove active class from previously clicked LI
    $(".lightbox li.active").removeClass("active");
    //Mark the clicked LI as active for later use
    item.addClass("active");
    
    //The large image
    large_img = new Image();
    //Use data-large or the src itself if large image url is not available
    large_img.src = img.attr("data-large") ? img.attr("data-large") : img.attr("src");
    
    //Adding additional HTML - only if it hasn't been added before
    if($(".lb_backdrop").length < 1)
    {
      var lb_backdrop = '<div class="lb_backdrop"></div>';
      var lb_canvas = '<div class="lb_canvas"></div>';
      var lb_previous = '<span class="lb_previous"><</span>';
      var lb_title = '<span class="lb_title"></span>';
      var lb_next = '<span class="lb_next">></span>';
      var lb_controls = '<div class="lb_controls">'+lb_previous+lb_title+lb_next+'</div>';
      var total_html = lb_backdrop+lb_canvas+lb_controls;
      
      $(total_html).appendTo("body");
    }
    //Fade in lightbox elements if they are hidden due to a previous exit
    if($(".lb_backdrop:visible").length == 0)
    {
      $(".lb_backdrop, .lb_canvas, .lb_controls").fadeIn("slow");
    }
    
    //Display preloader till the large image loads and make the previous image translucent so that the loader in the BG is visible
    if(!large_img.complete) 
      $(".lb_canvas").addClass("loading").children().css("opacity", "0.5")
    
    //Disabling left/right controls on first/last items
    if(item.prev().length == 0)
      $(".lb_previous").addClass("inactive");
    else
      $(".lb_previous").removeClass("inactive");
    if(item.next().length == 0)
      $(".lb_next").addClass("inactive");
    else
      $(".lb_next").removeClass("inactive");
    
    //Centering .lb_canvas
    CW = $(".lb_canvas").outerWidth();
    CH = $(".lb_canvas").outerHeight();
    //top and left coordinates
    CL = ($(window).width() - CW)/2;
    CT = ($(window).height() - CH)/2;
    $(".lb_canvas").css({top: CT, left: CL});
    
    //Inserting the large image into .lb_canvas once it's loaded
    $(large_img).load(function(){
      //Recentering .lb_canvas with new dimensions
      CW = large_img.width;
      CH = large_img.height;
      //.lb_canvas padding to be added to image width/height to get the total dimensions
      hpadding = parseInt($(".lb_canvas").css("paddingLeft")) + parseInt($(".lb_canvas").css("paddingRight"));
      vpadding = parseInt($(".lb_canvas").css("paddingTop")) + parseInt($(".lb_canvas").css("paddingBottom"));
      CL = ($(window).width() - CW - hpadding)/2;
      CT = ($(window).height() - CH - vpadding)/2;
      
      //Animating .lb_canvas to new dimentions and position
      $(".lb_canvas").html("").animate({width: CW, height: CH, top: CT, left: CL}, 500, function(){
        //Inserting the image but keeping it hidden
        imgtag = '<img src="'+large_img.src+'" style="opacity: 0;" />';
        $(".lb_canvas").html(imgtag);
        $(".lb_canvas img").fadeTo("slow", 1);
        //Displaying the image title
        $(".lb_title").html(title);
        
        lb_loading= false;
        $(".lb_canvas").removeClass("loading");
      })
    })
  })
  
  //Click based navigation
  doc.on("click", ".lb_previous", function(){ navigate(-1) });
  doc.on("click", ".lb_next", function(){ navigate(1) });
  doc.on("click", ".lb_backdrop", function(){ navigate(0) });
  
  //Keyboard based navigation
  doc.keyup(function(e){
    //Keyboard navigation should work only if lightbox is active which means backdrop is visible.
    if($(".lb_backdrop:visible").length == 1)
    {
      //Left
      if(e.keyCode == "37") navigate(-1);
      //Right
      else if(e.keyCode == "39") navigate(1);
      //Esc
      else if(e.keyCode == "27") navigate(0);
    }
  });
  
  //Navigation function
  function navigate(direction)
  {
    if(direction == -1) // left
      $(".lightbox li.active").prev().trigger("click");
    else if(direction == 1) //right
      $(".lightbox li.active").next().trigger("click");
    else if(direction == 0) //exit
    {
      $(".lightbox li.active").removeClass("active");
      $(".lb_canvas").removeClass("loading");
      //Fade out the lightbox elements
      $(".lb_backdrop, .lb_canvas, .lb_controls").fadeOut("slow", function(){
        //empty canvas and title
        $(".lb_canvas, .lb_title").html("");
      })
      lb_loading= false;
    }
  }
})

// $(document).ready(function () {
//     var size_li = $("#lightbox li").size();
//     console.log(size_li);
//     var x=4;

//     $('#lightbox li:lt("+x+")').show();
//     $('#LoadMore').click(function () {
//         x= (x+4 <= size_li) ? x+4 : size_li;
//         $("#myList li:lt('+x+')").show();
//     });
//     $('#showLess').click(function () {
//         x=(x-4<0) ? 4 : x-4;
//         $('#myList li').not(":lt('+x+')").hide();
//     });
// });


$(document).ready(function () {
    size_li1 = $("#lightbox li").size();
    x1=4;
    $('#lightbox li:lt('+x1+')').show();
    $("#lightbox .firsthidden").hide();
    $('#LoadMore').click(function () {
        x1= (x1+4 <= size_li1) ? x1+4 : size_li1;
        if(size_li1 == x1){
          // console.log("equal hai");
          $("#lightbox .firsthidden").show();
          $("#lightbox .firstshown").hide();
        }else{
          $("#lightbox .firsthidden").hide();
          $("#lightbox .firstshown").show();
        }
        $('#lightbox li:lt('+x1+')').show();
    });
    $('#showLess').click(function () {

        $('#lightbox li').not(':lt('+x1+')').hide();
        console.log("show Less");
        x1=(x1-4<0) ? 4 : x1-4;
        $('#lightbox li').not(':lt('+x1+')').hide();
        x1=4;
        $('#lightbox li:lt('+x1+')').show();
        $(".firstshown").show();
        $('#lightbox li').not(':lt('+x1+')').hide();


        $("#lightbox .firsthidden").hide();
    });
});


$(document).ready(function () {
    size_li2 = $("#eventgallery li").size();
    x2=4;
    $('#eventgallery li:lt('+x2+')').show();
    $("#eventgallery .firsthidden").hide();
    $('#LoadMore1').click(function () {
        x2= (x2+4 <= size_li2) ? x2+4 : size_li2;
        if(size_li2 == x2){
          // console.log("equal hai");
          $("#eventgallery .firsthidden").show();
          $("#eventgallery .firstshown").hide();
        }else{
          $("#eventgallery .firsthidden").hide();
          $("#eventgallery .firstshown").show();
        }
        $('#eventgallery li:lt('+x2+')').show();
    });
    $('#showLess1').click(function () {
        $('#eventgallery li').not(':lt('+x2+')').hide();
        console.log("show Less");
        x2=(x2-4<0) ? 4 : x2-4;
        $('#eventgallery li').not(':lt('+x2+')').hide();
        x2=4;
        $('#eventgallery li:lt('+x2+')').show();
        $(".firstshown").show();
        $('#eventgallery li').not(':lt('+x2+')').hide();


        $("#eventgallery .firsthidden").hide();
    });
});


$(document).ready(function () {
    size_li3 = $("#corporategallery li").size();
    // console.log(size_li3);
    x3=4;
    $('#corporategallery li:lt('+x3+')').show();
    $("#corporategallery .firsthidden").hide();
    $('#LoadMore2').click(function () {
      console.log(size_li3);
      console.log(x3);
      console.log("load more");
        x3= (x3+4 <= size_li) ? x3+4 : size_li;
        console.log(size_li3);
        console.log(x3);
        if(size_li3 == x3){
          // console.log("equal hai");
          $("#corporategallery .firsthidden").show();
          $("#corporategallery .firstshown").hide();
        }else{
          $("#corporategallery .firsthidden").hide();
          $("#corporategallery .firstshown").show();
        }
        $('#corporategallery li:lt('+x3+')').show();
    });
    $('#showLess2').click(function () {
        // console.log("show Less");
        // x=(x-4<size_li) ? 4 : x-4;
        
        x3=4;
        $('#corporategallery li:lt('+x3+')').show();
        $('#corporategallery li').not(':lt('+x3+')').hide();
        $("#corporategallery .firsthidden").hide();
        $("#corporategallery .firstshown").show();
    });
});

$(document).ready(function () {
    size_li = $("#stagegallery li").size();
    x=4;
    $('#stagegallery li:lt('+x+')').show();
    $("#stagegallery .firsthidden").hide();
    $('#LoadMore3').click(function () {

      console.log("load more");
      console.log(size_li);
      console.log(x);
        x= (x+4 <= size_li) ? x+4 : size_li;
        console.log(size_li);
        console.log(x);
        if(size_li == x){
          // console.log("equal hai");
          $("#stagegallery .firsthidden").show();
          $("#stagegallery .firstshown").hide();
        }else{
          $("#stagegallery .firsthidden").hide();
          $("#stagegallery .firstshown").show();
        }
        $('#stagegallery li:lt('+x+')').show();
    });
    $('#showLess3').click(function () {
        console.log("show Less");
        x=(x-4<0) ? 4 : x-4;
        $('#stagegallery li').not(':lt('+x+')').hide();
        x=4;
        $('#stagegallery li:lt('+x+')').show();
        $(".firstshown").show();

        if(x % 4 === 0){
          // x = 4 - (4 - x % 4);
         
          $('#stagegallery li').not(':lt('+x+')').hide();

        }

        $("#stagegallery .firsthidden").hide();
    });
});


