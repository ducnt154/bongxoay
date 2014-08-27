<?php /* Smarty version 2.6.6, created on 2014-06-29 22:58:35
         compiled from view_meme.tpl */ ?>
<!-- Le styles -->
<link href="css/bootstrap.css" rel="stylesheet">
<link rel='stylesheet' href="css/spectrum.css" />
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php echo '
    <script src="js/jquery.js"></script>
    <script>

        var currentRating = 0;
        var alreadyRated = 0;
        var currentMeme = \'<?php echo $fn; ?>\';

        $(function () {

            jQuery.ajax({
                type : "GET",
                data: { meme: currentMeme, cr: 1},
                url: \'love.php\',
                success:function(data1){
                    rateData = jQuery.parseJSON(data1);
                    $("#loverate").html(rateData.points);
                    if(rateData.rated)
                    {
                        $("#lovethis").removeClass("active");
                        $("#lovethis").addClass("disabled");
                        $("#lovethis").html("You Love This!");
                    }
                }
            });


            $("#sharelink").click(function() {
                $(this).select();
            });

            $("#lovethis").click(function () {

                        if(!alreadyRated)
                        {

                            currentRating++;

                            jQuery.ajax({
                                type : "GET",
                                data: { meme: currentMeme},
                                url: \'love.php\',
                                success:function(data1){
                                    if(data1 == \'-1\')
                                    {
                                        $("#lovethis").removeClass("active");
                                        $("#lovethis").addClass("disabled");
                                        $("#lovethis").html("You Love This!");
                                    }
                                    else if(data1 == \'-2\')
                                    {
                                        alert("Error: Meme not found");
                                    }
                                    else
                                    {
                                        currentRating = data1;
                                        $("#loverate").html(currentRating);
                                        $("#lovethis").removeClass("active");
                                        $("#lovethis").addClass("disabled");
                                        $("#lovethis").html("You Love This!");

                                    }
                                }

                            });

                            alreadyRated = 1;
                        }
                        else
                        {
                            alert("You have already loved this, thanks!");
                        }
                    }
            );

        });
    </script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
'; ?>