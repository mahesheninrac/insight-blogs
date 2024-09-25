function base_url() {
    var currentUrl = window.location.href;
    var url = new URL(currentUrl);
    if (url.hostname === "localhost" || url.hostname === "127.0.0.1") {
        let segment = url.pathname.split('/');
        return url.protocol + "//" + url.host + '/' + segment[1] + '/';
    } else {
        return url.protocol + "//" + url.hostname + '/omni/';
    }
}
function headertitleName() {
    let headertitle = document.querySelector('.archive-page-header__title');
    let articleHeroSingle = document.querySelector(".article-hero--single")//    
    let articleHeader = document.querySelector(".article-header")// 
    if (headertitle) {
        headertitle.classList.add('archive-page-header__title--is-visible');
        headertitle.style.animation = "fadeIn 1s ease-in-out";
        setTimeout(() => {
            headertitle.style.animation = "";
        }, 1000);
    }

    if (articleHeroSingle) {
        articleHeroSingle.classList.add('article-hero--is-visible');
        articleHeroSingle.style.animation = "fadeIn 1s ease-in-out";
        setTimeout(() => {
            articleHeroSingle.style.animation = "";
        }, 1000);
    }

    if (articleHeader) {
        articleHeader.classList.add('article-header--is-visible');
        articleHeader.style.animation = "fadeIn 1s ease-in-out";
        setTimeout(() => {
            articleHeader.style.animation = "";
        }, 1000);
    }

}

window.onload = headertitleName;
