function anonlink(){
    var link = document.getElementById("link").value;
    //alert(link);
    var anolink = proto + "://" + domain + "/?link64=" + btoa(link);
    var result = '<div>link: <a href="'+link+'" target="_blank">'+link+'</a>, anolink: <a href="'+anolink+'" target="_blank">'+anolink+'</a></div>';

    document.getElementById("results").innerHTML += result;
}