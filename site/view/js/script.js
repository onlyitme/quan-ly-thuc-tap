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
    $("#list-grid").on("click", function(e) {
        e.preventDefault();
        $(".detail-job_list button").addClass("col-lg-6");
        $(".detail-job_list ").removeClass("small");
        $(".detail-job_inf").removeClass("d-md-block");
    });
    $("#list-inf").on("click", function(e) {
        e.preventDefault();
        $(".detail-job_list ").addClass("small");
        $(".detail-job_list button").removeClass("col-lg-6");
        $(".detail-job_inf").addClass("d-md-block");

    });
})(jQuery);