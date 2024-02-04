// Load the main page at start
$("html").ready(function () {
    $(".center").load("pages/history.php?nocache=");
});

// Scripts for loading subpage on the main page
$(".menu").click(function () {
    $(".center").load("pages/menu.php?nocache=");
});

$(".login").click(function () {
    $(".center").load("pages/profile.php?nocache=");
});

$(".reservation").click(function () {
    $(".center").load("pages/reservation.php?nocache=");
});

$(".contact").click(function () {
    $(".center").load("pages/contact.php?nocache=");
});

$(".title>h1").click(function () {
    $(".center").load("pages/history.php?nocache=");
});