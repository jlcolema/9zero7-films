!function(o){o(document).ready(function(){o("#nav").find(".toggle").click(function(){o(this).next().toggleClass("open")}),o(".register-today a, .become-a-sponsor a").smoothScroll({offset:-30}),o(".questions ol li a").smoothScroll({offset:-30}),o("body").addClass("dev");var t=o(window).width(),e=o(window).height();o("#footer").after('<div id="dev"></div>'),o("#dev").text(t+" W / "+e+" H")}),o(window).load(function(){}),o(window).resize(function(){var t=o(window).width(),e=o(window).height();o("#dev").text(t+" W / "+e+" H")})}(window.jQuery);