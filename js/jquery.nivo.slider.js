!function(N){function o(i,t){var e=N.extend({},N.fn.nivoSlider.defaults,t),a={currentSlide:0,currentImage:"",totalSlides:0,running:!1,paused:!1,stop:!1,controlNavEl:!1},n=N(i);n.data("nivo:vars",a).addClass("nivoSlider");var o=n.children();o.each(function(){var i=N(this),t="";i.is("img")||(i.is("a")&&(i.addClass("nivo-imageLink"),t=i),i=i.find("img:first"));var e=0===e?i.attr("width"):i.width(),n=0===n?i.attr("height"):i.height();""!==t&&t.css("display","none"),i.css("display","none"),a.totalSlides++}),e.randomStart&&(e.startSlide=Math.floor(Math.random()*a.totalSlides)),0<e.startSlide&&(e.startSlide>=a.totalSlides&&(e.startSlide=a.totalSlides-1),a.currentSlide=e.startSlide),N(o[a.currentSlide]).is("img")?a.currentImage=N(o[a.currentSlide]):a.currentImage=N(o[a.currentSlide]).find("img:first"),N(o[a.currentSlide]).is("a")&&N(o[a.currentSlide]).css("display","block");var S=N("<img/>").addClass("nivo-main-image");function b(i){var t,e=N(".nivo-caption",n);""!=a.currentImage.attr("title")&&null!=a.currentImage.attr("title")?("#"==(t=a.currentImage.attr("title")).substr(0,1)&&(t=N(t).html()),"block"==e.css("display")?setTimeout(function(){e.html(t)},i.animSpeed):(e.html(t),e.stop().fadeIn(i.animSpeed))):e.stop().fadeOut(i.animSpeed)}S.attr("src",a.currentImage.attr("src")).show(),n.append(S),N(window).resize(function(){n.children("img").width(n.width()),S.attr("src",a.currentImage.attr("src")),S.stop().height("auto"),N(".nivo-slice").remove(),N(".nivo-box").remove()}),n.append(N('<div class="nivo-caption"></div>')),b(e);var r=0;if(!e.manualAdvance&&1<o.length&&(r=setInterval(function(){d(n,o,e,!1)},e.pauseTime)),e.directionNav&&(n.append('<div class="nivo-directionNav"><a class="nivo-prevNav">'+e.prevText+'</a><a class="nivo-nextNav">'+e.nextText+"</a></div>"),N(n).on("click","a.nivo-prevNav",function(){return!a.running&&(clearInterval(r),r="",a.currentSlide-=2,void d(n,o,e,"prev"))}),N(n).on("click","a.nivo-nextNav",function(){return!a.running&&(clearInterval(r),r="",void d(n,o,e,"next"))})),e.controlNav){a.controlNavEl=N('<div class="nivo-controlNav"></div>'),n.after(a.controlNavEl);for(var s,c=0;c<o.length;c++){e.controlNavThumbs?(a.controlNavEl.addClass("nivo-thumbs-enabled"),(s=o.eq(c)).is("img")||(s=s.find("img:first")),s.attr("data-thumb")&&a.controlNavEl.append('<a class="nivo-control" rel="'+c+'"><img src="'+s.attr("data-thumb")+'" alt="" /></a>')):a.controlNavEl.append('<a class="nivo-control" rel="'+c+'">'+(c+1)+"</a>")}N("a:eq("+a.currentSlide+")",a.controlNavEl).addClass("active"),N("a",a.controlNavEl).bind("click",function(){return!a.running&&(!N(this).hasClass("active")&&(clearInterval(r),r="",S.attr("src",a.currentImage.attr("src")),a.currentSlide=N(this).attr("rel")-1,void d(n,o,e,"control")))})}function I(i,t,e){N(e.currentImage).parent().is("a")&&N(e.currentImage).parent().css("display","block"),N('img[src="'+e.currentImage.attr("src")+'"]',i).not(".nivo-main-image,.nivo-control img").width(i.width()).css("visibility","hidden").show();for(var n=N('img[src="'+e.currentImage.attr("src")+'"]',i).not(".nivo-main-image,.nivo-control img").parent().is("a")?N('img[src="'+e.currentImage.attr("src")+'"]',i).not(".nivo-main-image,.nivo-control img").parent().height():N('img[src="'+e.currentImage.attr("src")+'"]',i).not(".nivo-main-image,.nivo-control img").height(),a=0;a<t.slices;a++){var o=Math.round(i.width()/t.slices);a===t.slices-1?i.append(N('<div class="nivo-slice" name="'+a+'"><img src="'+e.currentImage.attr("src")+'" style="position:absolute; width:'+i.width()+"px; height:auto; display:block !important; top:0; left:-"+(o+a*o-o)+'px;" /></div>').css({left:o*a+"px",width:i.width()-o*a+"px",height:n+"px",opacity:"0",overflow:"hidden"})):i.append(N('<div class="nivo-slice" name="'+a+'"><img src="'+e.currentImage.attr("src")+'" style="position:absolute; width:'+i.width()+"px; height:auto; display:block !important; top:0; left:-"+(o+a*o-o)+'px;" /></div>').css({left:o*a+"px",width:o+"px",height:n+"px",opacity:"0",overflow:"hidden"}))}N(".nivo-slice",i).height(n),S.stop().animate({height:N(e.currentImage).height()},t.animSpeed)}function y(i,t,e){N(e.currentImage).parent().is("a")&&N(e.currentImage).parent().css("display","block"),N('img[src="'+e.currentImage.attr("src")+'"]',i).not(".nivo-main-image,.nivo-control img").width(i.width()).css("visibility","hidden").show();for(var n=Math.round(i.width()/t.boxCols),a=Math.round(N('img[src="'+e.currentImage.attr("src")+'"]',i).not(".nivo-main-image,.nivo-control img").height()/t.boxRows),o=0;o<t.boxRows;o++)for(var r=0;r<t.boxCols;r++)r===t.boxCols-1?i.append(N('<div class="nivo-box" name="'+r+'" rel="'+o+'"><img src="'+e.currentImage.attr("src")+'" style="position:absolute; width:'+i.width()+"px; height:auto; display:block; top:-"+a*o+"px; left:-"+n*r+'px;" /></div>').css({opacity:0,left:n*r+"px",top:a*o+"px",width:i.width()-n*r+"px"})):i.append(N('<div class="nivo-box" name="'+r+'" rel="'+o+'"><img src="'+e.currentImage.attr("src")+'" style="position:absolute; width:'+i.width()+"px; height:auto; display:block; top:-"+a*o+"px; left:-"+n*r+'px;" /></div>').css({opacity:0,left:n*r+"px",top:a*o+"px",width:n+"px"})),N('.nivo-box[name="'+r+'"]',i).height(N('.nivo-box[name="'+r+'"] img',i).height()+"px");S.stop().animate({height:N(e.currentImage).height()},t.animSpeed)}function l(i){this.console&&void 0!==console.log&&console.log(i)}e.pauseOnHover&&n.hover(function(){a.paused=!0,clearInterval(r),r=""},function(){a.paused=!1,""!==r||e.manualAdvance||(r=setInterval(function(){d(n,o,e,!1)},e.pauseTime))}),n.bind("nivo:animFinished",function(){S.attr("src",a.currentImage.attr("src")),a.running=!1,N(o).each(function(){N(this).is("a")&&N(this).css("display","none")}),N(o[a.currentSlide]).is("a")&&N(o[a.currentSlide]).css("display","block"),""!==r||a.paused||e.manualAdvance||(r=setInterval(function(){d(n,o,e,!1)},e.pauseTime)),e.afterChange.call(this)});var d=function(r,i,s,t){var e=r.data("nivo:vars");if(e&&e.currentSlide===e.totalSlides-1&&s.lastSlide.call(this),(!e||e.stop)&&!t)return!1;s.beforeChange.call(this),t?("prev"===t&&S.attr("src",e.currentImage.attr("src")),"next"===t&&S.attr("src",e.currentImage.attr("src"))):S.attr("src",e.currentImage.attr("src")),e.currentSlide++,e.currentSlide===e.totalSlides&&(e.currentSlide=0,s.slideshowEnd.call(this)),e.currentSlide<0&&(e.currentSlide=e.totalSlides-1),N(i[e.currentSlide]).is("img")?e.currentImage=N(i[e.currentSlide]):e.currentImage=N(i[e.currentSlide]).find("img:first"),s.controlNav&&(N("a",e.controlNavEl).removeClass("active"),N("a:eq("+e.currentSlide+")",e.controlNavEl).addClass("active")),b(s),N(".nivo-slice",r).remove(),N(".nivo-box",r).remove();var c=s.effect,n="";"random"===s.effect&&(n=new Array("sliceDownRight","sliceDownLeft","sliceUpRight","sliceUpLeft","sliceUpDown","sliceUpDownLeft","fold","fade","boxRandom","boxRain","boxRainReverse","boxRainGrow","boxRainGrowReverse"),void 0===(c=n[Math.floor(Math.random()*(n.length+1))])&&(c="fade")),-1!==s.effect.indexOf(",")&&(n=s.effect.split(","),void 0===(c=n[Math.floor(Math.random()*n.length)])&&(c="fade")),e.currentImage.attr("data-transition")&&(c=e.currentImage.attr("data-transition")),e.running=!0;var a=0,o=0,l="",d="",v="",m="";if("sliceDown"===c||"sliceDownRight"===c||"sliceDownLeft"===c)I(r,s,e),o=a=0,l=N(".nivo-slice",r),"sliceDownLeft"===c&&(l=N(".nivo-slice",r)._reverse()),l.each(function(){var i=N(this);i.css({top:"0px"}),o===s.slices-1?setTimeout(function(){i.animate({opacity:"1.0"},s.animSpeed,"",function(){r.trigger("nivo:animFinished")})},100+a):setTimeout(function(){i.animate({opacity:"1.0"},s.animSpeed)},100+a),a+=50,o++});else if("sliceUp"===c||"sliceUpRight"===c||"sliceUpLeft"===c)I(r,s,e),o=a=0,l=N(".nivo-slice",r),"sliceUpLeft"===c&&(l=N(".nivo-slice",r)._reverse()),l.each(function(){var i=N(this);i.css({bottom:"0px"}),o===s.slices-1?setTimeout(function(){i.animate({opacity:"1.0"},s.animSpeed,"",function(){r.trigger("nivo:animFinished")})},100+a):setTimeout(function(){i.animate({opacity:"1.0"},s.animSpeed)},100+a),a+=50,o++});else if("sliceUpDown"===c||"sliceUpDownRight"===c||"sliceUpDownLeft"===c){I(r,s,e);var u=o=a=0,l=N(".nivo-slice",r);"sliceUpDownLeft"===c&&(l=N(".nivo-slice",r)._reverse()),l.each(function(){var i=N(this);0===o?(i.css("top","0px"),o++):(i.css("bottom","0px"),o=0),u===s.slices-1?setTimeout(function(){i.animate({opacity:"1.0"},s.animSpeed,"",function(){r.trigger("nivo:animFinished")})},100+a):setTimeout(function(){i.animate({opacity:"1.0"},s.animSpeed)},100+a),a+=50,u++})}else if("fold"===c)I(r,s,e),o=a=0,N(".nivo-slice",r).each(function(){var i=N(this),t=i.width();i.css({top:"0px",width:"0px"}),o===s.slices-1?setTimeout(function(){i.animate({width:t,opacity:"1.0"},s.animSpeed,"",function(){r.trigger("nivo:animFinished")})},100+a):setTimeout(function(){i.animate({width:t,opacity:"1.0"},s.animSpeed)},100+a),a+=50,o++});else if("fade"===c)I(r,s,e),(d=N(".nivo-slice:first",r)).css({width:r.width()+"px"}),d.animate({opacity:"1.0"},2*s.animSpeed,"",function(){r.trigger("nivo:animFinished")});else if("slideInRight"===c)I(r,s,e),(d=N(".nivo-slice:first",r)).css({width:"0px",opacity:"1"}),d.animate({width:r.width()+"px"},2*s.animSpeed,"",function(){r.trigger("nivo:animFinished")});else if("slideInLeft"===c)I(r,s,e),(d=N(".nivo-slice:first",r)).css({width:"0px",opacity:"1",left:"",right:"0px"}),d.animate({width:r.width()+"px"},2*s.animSpeed,"",function(){d.css({left:"0px",right:""}),r.trigger("nivo:animFinished")});else if("boxRandom"===c)y(r,s,e),v=s.boxCols*s.boxRows,a=o=0,(m=R(N(".nivo-box",r))).each(function(){var i=N(this);o===v-1?setTimeout(function(){i.animate({opacity:"1"},s.animSpeed,"",function(){r.trigger("nivo:animFinished")})},100+a):setTimeout(function(){i.animate({opacity:"1"},s.animSpeed)},100+a),a+=20,o++});else if("boxRain"===c||"boxRainReverse"===c||"boxRainGrow"===c||"boxRainGrowReverse"===c){y(r,s,e),v=s.boxCols*s.boxRows;var h=a=o=0,p=0,f=[];f[h]=[],m=N(".nivo-box",r),"boxRainReverse"!==c&&"boxRainGrowReverse"!==c||(m=N(".nivo-box",r)._reverse()),m.each(function(){f[h][p]=N(this),++p===s.boxCols&&(p=0,f[++h]=[])});for(var g=0;g<2*s.boxCols;g++){for(var x=g,w=0;w<s.boxRows;w++)0<=x&&x<s.boxCols&&(function(i,t,e){var n=N(f[w][x]),a=n.width(),o=n.height();"boxRainGrow"!==c&&"boxRainGrowReverse"!==c||n.width(0).height(0),t===e-1?setTimeout(function(){n.animate({opacity:"1",width:a,height:o},s.animSpeed/1.3,"",function(){r.trigger("nivo:animFinished")})},100+i):setTimeout(function(){n.animate({opacity:"1",width:a,height:o},s.animSpeed/1.3)},100+i)}(a,o,v),o++),x--;a+=100}}},R=function(i){for(var t,e,n=i.length;n;t=parseInt(Math.random()*n,10),e=i[--n],i[n]=i[t],i[t]=e);return i};return this.stop=function(){N(i).data("nivo:vars").stop||(N(i).data("nivo:vars").stop=!0,l("Stop Slider"))},this.start=function(){N(i).data("nivo:vars").stop&&(N(i).data("nivo:vars").stop=!1,l("Start Slider"))},e.afterLoad.call(this),this}N.fn.nivoSlider=function(a){return this.each(function(i,t){var e=N(this);if(e.data("nivoslider"))return e.data("nivoslider");var n=new o(this,a);e.data("nivoslider",n)})},N.fn.nivoSlider.defaults={effect:"random",slices:15,boxCols:8,boxRows:4,animSpeed:500,pauseTime:3e3,startSlide:0,directionNav:!0,controlNav:!0,controlNavThumbs:!1,pauseOnHover:!0,manualAdvance:!1,prevText:"Prev",nextText:"Next",randomStart:!1,beforeChange:function(){},afterChange:function(){},slideshowEnd:function(){},lastSlide:function(){},afterLoad:function(){}},N.fn._reverse=[].reverse}(jQuery);