// 建立目录树
function buildPostMenutree() {
    var hs = jQuery(".post-body").find("h1,h2,h3,h4,h5,h6");
    if (hs.length < 2) return;
    var s = "";
    s += '<div class="post-menutree-wrapper" >';
    s += '<div class="post-menutree-title"><span class="post-menutree-title-name">内容目录</span><span class="post-menutree-title-handle">[<a href="#" onclick="javascript:return openPostMenutree(this);" title="显示">显示</a>]</span></div>';
    s += '<div class="post-menutree-content">';
    s += '<ol class="post-menutree-content-list">';
    var old_h = 0,
        ol_cnt = 0;
    for (var i = 0; i < hs.length; i++) {
        var h = parseInt(hs[i].tagName.substr(1), 10);
        if (!old_h) old_h = h;
        if (h > old_h) {
            s += "<ol>";
            ol_cnt++;
        } else if (h < old_h && ol_cnt > 0) {
            s += "</ol>";
            ol_cnt--;
        }
        if (h == 1) {
            while (ol_cnt > 0) {
                s += "</ol>";
                ol_cnt--;
            }
        }
        old_h = h;
        var tit = hs.eq(i).text();
        //var tit = hs.eq(i).text().replace(/^[\d.、\s]+/g, "");
        //tit = tit.replace(/[^a-zA-Z0-9_\-\s\u4e00-\u9fa5]+/g, "");
        if (tit.length < 100) {
            //将每一个h标签拼接到s上，生成目录
            // s += '<li><a href="#t' + i + '" onclick="menuScrollTo(\'#t' + i + '\')">' + tit + "</a></li>";
            s += '<li><a href="javascript:void(0);" onclick="menuScrollTo(\'#menu_t' + i + '\')">' + tit + "</a></li>";
            //给文章中的h标签加上id
            hs.eq(i).html('<a id="menu_t' + i + '"></a>' + hs.eq(i).html());
        }
    }
    while (ol_cnt > 0) {
        s += "</ol>";
        ol_cnt--;
    }
    s += "</ol></div>";
    s += "</div><div style='clear:both'></div>";
    jQuery(s).insertAfter(jQuery(".post-menutree-wrapper-before"));
}

function menuScrollTo(hrefLoc) {
    $('html,body').animate({ scrollTop: $(hrefLoc).offset().top - 20 }, 500);
}

function openPostMenutree(e) {
    if (e.innerHTML == "显示") {
        jQuery(e).attr("title", "隐藏").html("隐藏");
        jQuery(".post-menutree-content").slideDown('fast');
        //jQuery(".post-menutree-content").animate({'display':'block'},'fast');
    } else {
        jQuery(e).attr("title", "显示").html("显示");
        jQuery(".post-menutree-content").slideUp('fast');
        //jQuery(".post-menutree-content").animate({'display':'none'},'fast');
    }
    e.blur();
    return false;
}