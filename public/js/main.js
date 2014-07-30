    var act = "home";
    var prec = ".home";
    var precLink = "#homeLink";

    $(".second").hide();
    $(".three").hide();
    $(".four").hide();
    $(".five").hide();

   $("#secondLink").click(function(e){

    if(act != "second"){
        $('.second').show();
        $('.second').transition({ top: '0px'},500,'ease');

        $(prec).transition({ top: '900px'},500,'ease');
        $(prec).hide();

        $(prec).transition({ top: '-900px'},500,'ease');

        $(precLink).parent().removeClass('active');
        $("#secondLink").parent().addClass('active');
    }
    act = "second";
    prec = ".second";
    precLink = "#secondLink";
    e.preventDefault();
   });

  $("#homeLink").click(function(e){

    if(act != "home"){
        $('.home').show();
        $('.home').transition({ top: '0px'},500,'ease');

        $(prec).transition({ top: '900px'},500,'ease');
        $(prec).hide();

        $(prec).transition({ top: '-900px'},500,'ease');

        $(precLink).parent().removeClass('active');
        $("#homeLink").parent().addClass('active');
    }
    act = "home";
    prec = ".home";
    precLink = "#homeLink";
    e.preventDefault();
   });

  $("#threeLink").click(function(e){

    if(act != "three"){
        $('.three').show();
        $('.three').transition({ top: '0px'},500,'ease');

        $(prec).transition({ top: '900px'},500,'ease');
        $(prec).hide();

        $(prec).transition({ top: '-900px'},500,'ease');

        $(precLink).parent().removeClass('active');
        $("#threeLink").parent().addClass('active');
    }
    act = "three";
    prec = ".three";
    precLink = "#threeLink";
    e.preventDefault();
   });

  $("#fourLink").click(function(e){

    if(act != "four"){
        $('.four').show();
        $('.four').transition({ top: '0px'},500,'ease');

        $(prec).transition({ top: '900px'},500,'ease');
        $(prec).hide();

        $(prec).transition({ top: '-900px'},500,'ease');

        $(precLink).parent().removeClass('active');
        $("#fourLink").parent().addClass('active');
    }
    act = "four";
    prec = ".four";
    precLink = "#fourLink";
    e.preventDefault();
   });

  $("#fiveLink").click(function(e){

    if(act != "five"){
        $('.five').show();
        $('.five').transition({ top: '0px'},500,'ease');

        $(prec).transition({ top: '900px'},500,'ease');
        $(prec).hide();

        $(prec).transition({ top: '-900px'},500,'ease');

        $(precLink).parent().removeClass('active');
        $("#fiveLink").parent().addClass('active');
    }
    act = "five";
    prec = ".five";
    precLink = "#fiveLink";
    e.preventDefault();
   });