function addBookmarkFF(url, title) {   
    if ( window.external && typeof(window.sidebar) == 'undefined') {
        window.external.AddFavorite(url,title);
    } else if ( window.sidebar.addPanel ) {
        window.sidebar.addPanel(title,url,"");
    }
}