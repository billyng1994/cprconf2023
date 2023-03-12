$('#topnavbar').affix({
    offset: {
        top: $('#banner').height()
    }
});

currentpath = window.location.pathname.split("/")
currentpage = currentpath[currentpath.length-1].length == 0 ? "index" : currentpath[currentpath.length-1].split(".")[0]

console.log(currentpage)

$("#"+currentpage).addClass("active")

if(currentpage == "call_for_paper" || currentpage == "submission"){
    $("#programme").addClass("active")
}