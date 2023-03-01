$('#topnavbar').affix({
    offset: {
        top: $('#banner').height()
    }
});

currentpath = window.location.pathname.split("/")
currentpage = currentpath[2].length == 0 ? "index" : currentpath[2].split(".")[0]

$("#"+currentpage).addClass("active")