function GetLastSearches() {
    if("savedSearches" in localStorage) { 
        document.getElementById("content").innerHTML = decodeURI(localStorage.getItem("savedSearches"));
        //localStorage.setItem("savedSearches", document.getElementById("content").innerHTML);
    }
    else {
        document.getElementById("content").innerHTML = "No saved content";

    }
}
function SaveSearch() {
    localStorage.setItem("savedSearches", document.getElementById("content").innerHTML);
}