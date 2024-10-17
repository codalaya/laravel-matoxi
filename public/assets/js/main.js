$(document).ready(function () {
    $(function () {
        "use strict";

        /* scrollar */

        // new PerfectScrollbar(".quick-menu");

        new PerfectScrollbar(".notify-list");

        new PerfectScrollbar(".search-content");

        // new PerfectScrollbar(".mega-menu-widgets")

        /* Light & Dark Mode */

        $("#DarkMode").on("click", function () {
            $("html").attr("data-bs-theme") == "dark"
                ? $("html").attr("data-bs-theme", "light")
                : $("html").attr("data-bs-theme", "dark");
        }),
            $(".dark-mode i").click(function () {
                $(this).text(function (i, v) {
                    return v === "dark_mode" ? "light_mode" : "dark_mode";
                });
            });

        $(".dark-mode").click(function () {
            $("html").attr("data-bs-theme", function (i, v) {
                return v === "dark" ? "light" : "dark";
            });
        });

        // switcher

        $("#LightTheme").on("click", function () {
            $("html").attr("data-bs-theme", "light");
        }),
            $("#DarkTheme").on("click", function () {
                $("html").attr("data-bs-theme", "dark");
            }),
            $("#SemiDarkTheme").on("click", function () {
                $("html").attr("data-bs-theme", "semi-dark");
            }),
            $("#BoderedTheme").on("click", function () {
                $("html").attr("data-bs-theme", "bodered-theme");
            });

        /* search control */

        $(".search-control").click(function () {
            $(".search-popup").addClass("d-block");
            $(".search-close").addClass("d-block");
        });

        $(".search-close").click(function () {
            $(".search-popup").removeClass("d-block");
            $(".search-close").removeClass("d-block");
        });

        $(".mobile-search-btn").click(function () {
            $(".search-popup").addClass("d-block");
        });

        $(".mobile-search-close").click(function () {
            $(".search-popup").removeClass("d-block");
        });

        /* sidenav */

        $(function () {
            $("#sidenav").metisMenu();
        });

        /* menu active */

        $(function () {
            for (
                var e = window.location,
                    o = $(".metismenu li a")
                        .filter(function () {
                            return this.href == e;
                        })
                        .addClass("")
                        .parent()
                        .addClass("mm-active");
                o.is("li");

            )
                o = o
                    .parent("")
                    .addClass("mm-show")
                    .parent("")
                    .addClass("mm-active");
        });



    });
});

// setting toggling sidebar for smaller screns.
$(document).ready(function() {
    // Toggle sidebar and backdrop when button is clicked
    $('#toggle-sidebar').click(function() {
        $("#mainSideNav").css('z-index', '10000'); // Toggle sidebar
        $("#mainSideNav").toggleClass('active'); // Slide sidebar in/out
        $('#sidebar-backdrop').toggleClass('active'); // Show/hide backdrop
    });

    // Close the sidebar if the backdrop is clicked
    $('#sidebar-backdrop, .primary-menu-close').click(function() {
        $("#mainSideNav").css('z-index', '');
        $("#mainSideNav").removeClass('active');
        $('#sidebar-backdrop').removeClass('active');
    });
});
