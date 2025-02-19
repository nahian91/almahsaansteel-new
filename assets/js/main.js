jQuery(document).ready(function ($) {
    $('.faq-question').click(function () {
        var $this = $(this);
        var $answer = $this.next('.faq-answer');
        var $icon = $this.find('.faq-icon');

        $('.faq-answer').not($answer).stop(true, true).slideUp();
        $('.faq-icon').not($icon).removeClass('fa-minus').addClass('fa-plus').css('transform', 'rotate(0deg)');

        $answer.stop(true, true).slideToggle();
        $icon.toggleClass('fa-plus fa-minus').css('transform', $icon.hasClass('fa-plus') ? 'rotate(0deg)' : 'rotate(180deg)');
    });


    $('.image-faq-question').click(function () {
        var $this = $(this);
        var $answer = $this.next('.image-faq-answer');
        var $icon = $this.find('.image-faq-icon');

        $('.image-faq-answer').not($answer).stop(true, true).slideUp();
        $('.image-faq-icon').not($icon).removeClass('fa-minus').addClass('fa-plus').css('transform', 'rotate(0deg)');

        $answer.stop(true, true).slideToggle();
        $icon.toggleClass('fa-plus fa-minus').css('transform', $icon.hasClass('fa-plus') ? 'rotate(0deg)' : 'rotate(180deg)');
    });
});

(function ($) {
    "use strict";

    var $projects = $(".projects");

    if ($projects.length) {
        $projects.isotope({
            itemSelector: ".item",
            layoutMode: "fitRows"
        });

        $("ul.filters").on("click", "li", function (e) {
            e.preventDefault();
            var filter = $(this).attr("data-filter");

            $("ul.filters > li").removeClass("active");
            $(this).addClass("active");

            $projects.isotope({ filter: filter });
        });
    }

    $(".project").hover(
        function () {
            $(this).find(".project-overlay").stop(true, true).css({ top: "-100%" });
            $(this).find(".project-hover").stop(true, true).css({ top: "0" });
        },
        function () {
            $(this).find(".project-overlay").stop(true, true).css({ top: "0" });
            $(this).find(".project-hover").stop(true, true).css({ top: "100%" });
        }
    );
})(jQuery);
