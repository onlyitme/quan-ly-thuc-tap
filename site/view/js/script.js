(function($) {
    // Toggle the side navigation
    $("#sidebarToggle").on("click", function(e) {
        e.preventDefault();
        $("#nav-togger").toggleClass("nav-togger_left");
        $("#overlay-nav").toggleClass("d-block");
        $(".container").toggleClass("container_left");

        $("#overlay-nav").click(function(e) {
            e.preventDefault();
            $("#nav-togger").removeClass("nav-togger_left");
            $("#overlay-nav").removeClass("d-block");
            $(".container").removeClass("container_left");
        });
    });
})(jQuery);