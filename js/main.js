
$(document).ready(function () {
    // $("body").css("display", "none");
    $("body").css("visibiity", "hidden");

    $("body").fadeIn(4000);

    $("a").click(function (event) {
        event.preventDefault();
        linkLocation = this.href;
        $("body").fadeOut(2000, redirectPage);
    });

    function redirectPage() {
        window.location = linkLocation;
    }
});
