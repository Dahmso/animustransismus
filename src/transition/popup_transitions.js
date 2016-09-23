function popupOpenClose(popup1) {




    /* Open popup */
    $(popup1).show();

    /* Close popup if user clicks on background */
    $(popup1).click(function(e) {
        if (e.target == this) {
            if ($(popup1).is(':visible')) {
                $(popup1).hide();
            }
        }
    });

    /* Close popup and remove errors if user clicks on cancel or close buttons */
    $(popup1).find("button[name=close]").on("click", function() {
        if ($(".formElementError").is(':visible')) {
            $(".formElementError").remove();
        }
        $(popup1).hide();
    });
}

$(document).ready(function() {
    $("[data-js=open]").on("click", function() {
        popupOpenClose($(".popup1"));
    });
});

/////////

function popupOpenClose(popup2) {

    /* Open popup */
    $(popup2).show();

    /* Close popup if user clicks on background */
    $(popup2).click(function(e) {
        if (e.target == this) {
            if ($(popup2).is(':visible')) {
                $(popup2).hide();
            }
        }
    });

    /* Close popup and remove errors if user clicks on cancel or close buttons */
    $(popup2).find("button[name=close]").on("click", function() {
        if ($(".formElementError").is(':visible')) {
            $(".formElementError").remove();
        }
        $(popup2).hide();
    });
}

$(document).ready(function() {
    $("[data-js=ouvrir]").on("click", function() {
        popupOpenClose($(".popup2"));
    });
});

////////////

function popupOpenClose(popup3) {


    /* Open popup */
    $(popup3).show();

    /* Close popup if user clicks on background */
    $(popup3).click(function(e) {
        if (e.target == this) {
            if ($(popup3).is(':visible')) {
                $(popup3).hide();
            }
        }
    });

    /* Close popup and remove errors if user clicks on cancel or close buttons */
    $(popup3).find("button[name=close]").on("click", function() {
        if ($(".formElementError").is(':visible')) {
            $(".formElementError").remove();
        }
        $(popup3).hide();
    });
}

$(document).ready(function() {
    $("[data-js=tourner]").on("click", function() {
        popupOpenClose($(".popup3"));
    });
});

//////////////////

function popupOpenClose(popup4) {



    /* Open popup */
    $(popup4).show();

    /* Close popup if user clicks on background */
    $(popup4).click(function(e) {
        if (e.target == this) {
            if ($(popup4).is(':visible')) {
                $(popup4).hide();
            }
        }
    });

    /* Close popup and remove errors if user clicks on cancel or close buttons */
    $(popup4).find("button[name=close]").on("click", function() {
        if ($(".formElementError").is(':visible')) {
            $(".formElementError").remove();
        }
        $(popup4).hide();
    });
}

$(document).ready(function() {
    $("[data-js=zoomer]").on("click", function() {
        popupOpenClose($(".popup4"));
    });
});

////////////////////////



//////////////////

function popupOpenClose(popup5) {



    /* Open popup */
    $(popup5).show();

    /* Close popup if user clicks on background */
    $(popup5).click(function(e) {
        if (e.target == this) {
            if ($(popup5).is(':visible')) {
                $(popup5).hide();
            }
        }
    });

    /* Close popup and remove errors if user clicks on cancel or close buttons */
    $(popup5).find("button[name=close]").on("click", function() {
        if ($(".formElementError").is(':visible')) {
            $(".formElementError").remove();
        }
        $(popup5).hide();
    });
}

$(document).ready(function() {
    $("[data-js=deformer]").on("click", function() {
        popupOpenClose($(".popup5"));
    });
});

////////////////////////


//////////////////

function popupOpenClose(popup6) {



    /* Open popup */
    $(popup6).show();

    /* Close popup if user clicks on background */
    $(popup6).click(function(e) {
        if (e.target == this) {
            if ($(popup6).is(':visible')) {
                $(popup6).hide();
            }
        }
    });

    /* Close popup and remove errors if user clicks on cancel or close buttons */
    $(popup6).find("button[name=close]").on("click", function() {
        if ($(".formElementError").is(':visible')) {
            $(".formElementError").remove();
        }
        $(popup6).hide();
    });
    7
}

$(document).ready(function() {
    $("[data-js=assombrir]").on("click", function() {
        popupOpenClose($(".popup6"));
    });
});

////////////////////////


//////////////////

function popupOpenClose(popup7) {



    /* Open popup */
    $(popup7).show();

    /* Close popup if user clicks on background */
    $(popup7).click(function(e) {
        if (e.target == this) {
            if ($(popup7).is(':visible')) {
                $(popup7).hide();
            }
        }
    });

    /* Close popup and remove errors if user clicks on cancel or close buttons */
    $(popup7).find("button[name=close]").on("click", function() {
        if ($(".formElementError").is(':visible')) {
            $(".formElementError").remove();
        }
        $(popup7).hide();
    });
}

$(document).ready(function() {
    $("[data-js=agrandir]").on("click", function() {
        popupOpenClose($(".popup7"));
    });
});

////////////////////////


//////////////////

function popupOpenClose(popup8) {



    /* Open popup */
    $(popup8).show();

    /* Close popup if user clicks on background */
    $(popup8).click(function(e) {
        if (e.target == this) {
            if ($(popup8).is(':visible')) {
                $(popup8).hide();
            }
        }
    });

    /* Close popup and remove errors if user clicks on cancel or close buttons */
    $(popup8).find("button[name=close]").on("click", function() {
        if ($(".formElementError").is(':visible')) {
            $(".formElementError").remove();
        }
        $(popup8).hide();
    });
}

$(document).ready(function() {
    $("[data-js=attendre]").on("click", function() {
        popupOpenClose($(".popup8"));
    });
});

////////////////////////


//////////////////

function popupOpenClose(popup9) {


    /* Open popup */
    $(popup9).show();

    /* Close popup if user clicks on background */
    $(popup9).click(function(e) {
        if (e.target == this) {
            if ($(popup9).is(':visible')) {
                $(popup9).hide();
            }
        }
    });

    /* Close popup and remove errors if user clicks on cancel or close buttons */
    $(popup9).find("button[name=close]").on("click", function() {
        if ($(".formElementError").is(':visible')) {
            $(".formElementError").remove();
        }
        $(popup9).hide();
    });
}

$(document).ready(function() {
    $("[data-js=easy]").on("click", function() {
        popupOpenClose($(".popup9"));
    });
});

////////////////////////


//////////////////

function popupOpenClose(popup10) {



    /* Open popup */
    $(popup10).show();

    /* Close popup if user clicks on background */
    $(popup10).click(function(e) {
        if (e.target == this) {
            if ($(popup10).is(':visible')) {
                $(popup10).hide();
            }
        }
    });

    /* Close popup and remove errors if user clicks on cancel or close buttons */
    $(popup10).find("button[name=close]").on("click", function() {
        if ($(".formElementError").is(':visible')) {
            $(".formElementError").remove();
        }
        $(popup10).hide();
    });
}

$(document).ready(function() {
    $("[data-js=ligne]").on("click", function() {
        popupOpenClose($(".popup10"));
    });
});

////////////////////////


//////////////////

function popupOpenClose(popup11) {



    /* Open popup */
    $(popup11).show();

    /* Close popup if user clicks on background */
    $(popup11).click(function(e) {
        if (e.target == this) {
            if ($(popup11).is(':visible')) {
                $(popup11).hide();
            }
            11
        }
    });

    /* Close popup and remove errors if user clicks on cancel or close buttons */
    $(popup11).find("button[name=close]").on("click", function() {
        if ($(".formElementError").is(':visible')) {
            $(".formElementError").remove();
        }
        $(popup11).hide();
    });
}

$(document).ready(function() {
    $("[data-js=etape]").on("click", function() {
        popupOpenClose($(".popup11"));
    });
});

////////////////////////
