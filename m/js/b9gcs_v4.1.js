jQuery.noConflict();(function(c,b)
{
GAG=
{

}
;GAG.Utils=
{
formatEntryLink:function(f)
{
return"http://"+GAG.Page.getDomain()+"/gag/"+f
}
,formatNumber:function(f)
{
return(f+"").replace(/\b(\d+)((\.\d+)*)\b/g,function(h,g,j)
{
return(g.charAt(0)>0&&!(j||".").lastIndexOf(".")?g.replace(/(\d)(?=(\d{3})+$)/g,"$1,"):g)+j
}
)
}
,formattedNumberToInt:function(f)
{
f=f.replace(/,/g,"");return parseInt(f,10)
}

}
;GAG.GA=
{
track:function(g,j,f,h)
{
try
{
if(h==undefined)
{
h=1
}
_gaq.push(["_trackEvent",g,j,f,h]);if(b.addMvProfile)
{
_gaq.push(["_mv._trackEvent",g,j,f,h])
}

}
catch(l)
{

}

}
,_TMP_KEY:"ga_tmp",enqueueTmp:function(g,j,f,h)
{
c.cookie(this._TMP_KEY,g+"___"+j+"___"+f+"___"+h)
}
,processTmp:function()
{
var g=c.cookie(this._TMP_KEY);if(g)
{
var f=g.split("___");if(f.length==4)
{
GAG.GA.track(f[0],f[1],f[2],f[3]);c.cookie(this._TMP_KEY,"")
}

}

}

}
;setTimeout("GAG.GA.processTmp();",1000);var a=function()
{
this._items=
{

}
;this._headKey=null;this._tailKey=null;this._currKey=null;this._size=0
}
;a.prototype.getSize=function()
{
return this._size
}
;a.prototype.prepend=function(f,g)
{
if(this.getSize()==0)
{
this._items[f]=
{
prevKey:null,nextKey:null,item:g,key:f
}
;this._headKey=f;this._tailKey=f
}
else
{
var h=
{
prevKey:null,nextKey:this._headKey,item:g,key:f
}
;this._items[this._headKey]["prevKey"]=f;this._items[f]=h;this._headKey=f
}
this._size++
}
;a.prototype.append=function(f,g)
{
if(this.getSize()==0)
{
this._items[f]=
{
prevKey:null,nextKey:null,item:g,key:f
}
;this._headKey=f;this._tailKey=f
}
else
{
var h=
{
prevKey:this._tailKey,nextKey:null,item:g,key:f
}
;this._items[this._tailKey]["nextKey"]=f;this._items[f]=h;this._tailKey=f
}
this._size++
}
;a.prototype.rewind=function()
{
this._currKey=this._headKey
}
;a.prototype.getPrevKey=function()
{
var f=this._items[this._currKey];if(!f)
{
return false
}
return f.prevKey
}
;a.prototype.hasPrev=function()
{
var f=this._items[this._currKey];if(!f)
{
return false
}
if(f.prevKey)
{
return !!this._items[f.prevKey]
}
return false
}
;a.prototype.prev=function()
{
if(!this.hasPrev())
{
return null
}
var g=this.getPrevKey();var f=this._items[g];this._currKey=g;return f
}
;a.prototype.getNextKey=function()
{
var f=this._items[this._currKey];if(!f)
{
return false
}
return f.nextKey
}
;a.prototype.hasNext=function()
{
var f=this._items[this._currKey];if(!f)
{
return false
}
if(f.nextKey)
{
return !!this._items[f.nextKey]
}
return false
}
;a.prototype.next=function()
{
if(!this.hasNext())
{
return null
}
var g=this.getNextKey();var f=this._items[g];this._currKey=g;return f
}
;a.prototype.setCurrKey=function(f)
{
this._currKey=f
}
;a.prototype.getCurrKey=function()
{
return this._currKey
}
;a.prototype.getNext=function(g)
{
if(g==undefined)
{
g=this.getCurrKey()
}
var h=this._items[g];if(!h)
{
return null
}
var f=h.nextKey;if(this._items[f])
{
return this._items[f]
}

}
;a.prototype.getPrev=function(g)
{
if(g==undefined)
{
g=this.getCurrKey()
}
var h=this._items[g];if(!h)
{
return null
}
var f=h.prevKey;if(this._items[f])
{
return this._items[f]
}

}
;a.prototype.getItem=function(f)
{
if(this.keyExists(f))
{
return this._items[f]
}
return null
}
;a.prototype.setItem=function(f,g)
{
if(this.keyExists(f))
{
this._items[f]["item"]=g
}

}
;a.prototype.keyExists=function(f)
{
return !!(this._items[f])
}
;a.prototype.print=function()
{
console.log(this.getSize());console.log(this._items)
}
;a.prototype.remove=function(f)
{

}
;GAG.Response=function()
{
this._isSuccess=false;this._keys=
{

}
;this.setKey(GAG.Response.Constants.RESPONSE_MESSAGE,"")
}
;GAG.Response.Constants=
{
RESPONSE_MESSAGE:"RESPONSE_MESSAGE",RESPONSE_CODE:"RESPONSE_CODE",RESPONSE_DATA:"RESPONSE_DATA"
}
;GAG.Response.prototype.succeeded=function(f)
{
this._isSuccess=true;this.setKey(GAG.Response.Constants.RESPONSE_MESSAGE,f);return this
}
;GAG.Response.prototype.failed=function(f)
{
this._isSuccess=false;this.setKey(GAG.Response.Constants.RESPONSE_MESSAGE,f);return this
}
;GAG.Response.prototype.isSuccess=function()
{
return this._isSuccess
}
;GAG.Response.prototype.setKey=function(f,g)
{
this._keys[f]=g;return this
}
;GAG.Response.prototype.getKey=function(f)
{
return this._keys[f]
}
;GAG.Response.prototype.setCode=function(f)
{
this.setKey(GAG.Response.Constants.RESPONSE_CODE,f);return this
}
;GAG.Response.prototype.getCode=function()
{
return this.getKey(GAG.Response.Constants.RESPONSE_CODE)
}
;GAG.Response.prototype.setData=function(f)
{
this.setKey(GAG.Response.Constants.RESPONSE_DATA,f);return this
}
;GAG.Response.prototype.getData=function()
{
return this.getKey(GAG.Response.Constants.RESPONSE_DATA)
}
;GAG.Response.prototype.setMessage=function(f)
{
this.setKey(GAG.Response.Constants.RESPONSE_MESSAGE,f);return this
}
;GAG.Response.prototype.getMessage=function()
{
return this.getKey(GAG.Response.Constants.RESPONSE_MESSAGE)
}
;GAG.BaseObject=function()
{
this._namespace=""
}
;GAG.BaseObject.prototype.setNamespace=function(f)
{
this._namespace=f
}
;GAG.BaseObject.prototype.log=function(g,f)
{
console.log(this._namespace+(f?f+" ":"")+g)
}
;GAG.BaseObject.prototype.failed=function(f)
{
return(new GAG.Response()).failed(f)
}
;GAG.BaseObject.prototype.succeeded=function(f)
{
return(new GAG.Response()).succeeded(f)
}
;GAG.Model=function()
{
this._base=this
}
;GAG.Model.prototype=new GAG.BaseObject();GAG.Model.prototype.getBase=function()
{
return this._base
}
;GAG.Model.prototype.init=function()
{

}
;GAG.Page=c.extend(
{

}
,new GAG.Model(),
{
init:function()
{
this.setNamespace("Page");this.loadData(GAG.pageData)
}
,getProtocol:function()
{
return("https:"==document.location.protocol)?"https":"http"
}
,getSiteDomain:function()
{
return this._pageData?this._pageData.siteDomain:this.getDomain()
}
,getDomain:function()
{
return b.location.host
}
,redirectCurrentPageToLogin:function(g)
{
var f=b.location;this.redirectLogin(f,g)
}
,redirectLogin:function(g,h)
{
var f="https://"+GAG.Page.getDomain()+"/login?next="+encodeURIComponent(g)+"&src="+encodeURIComponent(h);b.location=f
}
,_pageData:
{

}
,loadData:function(f)
{
this._pageData=f
}
,getBackUrl:function()
{
return this._pageData?this._pageData.backUrl:""
}
,getPageKey:function()
{
return this._pageData?this._pageData.pageKey:null
}
,isListPage:function()
{
return this.isHotPage()||this.isTrendingPage()||this.isVotePage()
}
,isHotPage:function()
{
return this.getPageKey()=="mobile-hot"
}
,isTrendingPage:function()
{
return this.getPageKey()=="mobile-trending"
}
,isVotePage:function()
{
return this.getPageKey()=="mobile-vote"
}
,isPostPage:function()
{
return this.getPageKey()=="mobile-post"
}
,isMemberPage:function()
{
return this.getPageKey()=="mobile-member"
}

}
);GAG.User=c.extend(
{

}
,new GAG.Model(),
{
init:function()
{
this.setNamespace("User");this.loadData(GAG.userData)
}
,_userData:
{

}
,loadData:function(f)
{
this._userData=f
}
,isLoggedIn:function()
{
return this.getUserName()!==null&&this.getUserName()!=""
}
,getUserName:function()
{
return this._userData?this._userData.username:null
}
,getUserId:function()
{
return this._userData?this._userData.userId:null
}

}
);GAG.Vote=c.extend(
{

}
,new GAG.Model(),
{
TYPE_VOTE_UP:"up",TYPE_VOTE_DOWN:"down",TYPE_UNVOTE:"unvote",URL_VOTE_UP:"/vote/like/id/",URL_VOTE_DOWN:"/vote/dislike/id/",URL_UNVOTE:"/vote/unlike/id/",init:function()
{
this.setNamespace("Vote")
}
,doVote:function(h,g,j,m)
{
var f="";switch(h)
{
case"down":f=this.URL_VOTE_DOWN;break;case"unvote":f=this.URL_UNVOTE;break;case"up":default:f=this.URL_VOTE_UP
}
f+=g;var l=
{
pv:"m."+GAG.Vote._getView()
}
;c.ajax(
{
url:f,type:"POST",dataType:"json",data:l,cache:false,success:j,error:m
}
)
}
,_getView:function()
{
if(GAG.Page.isPostPage())
{
return"p"
}
if(GAG.Page.isListPage())
{
return"l"
}
return"l"
}

}
);GAG.Facebook=
{
_xfbmlRenderItems:[],_fbInitedCallbacks:[],init:function()
{
GAG.Facebook.fbAsyncInited=true;this.initApp();this.executeRenderQueue()
}
,_getChannelFile:function()
{
var g=GAG.Page.getProtocol();var f="//"+GAG.Page.getDomain()+"/static/"+g+"_channel.html";return f
}
,initApp:function()
{
FB.init(
{
appId:GAG.appData.facebook.appId,channelUrl:this._getChannelFile(),xfbml:false,status:true,cookie:true
}
);FB.Event.subscribe("comment.create",function(h,g)
{
var f=h.href;GAG.GA.track("Mobile-Facebook-Comment","Added","Post");GAG.Track.event("social","fb.c")
}
);FB.Event.subscribe("comment.remove",function(h,g)
{
var f=h.href;GAG.GA.track("Mobile-Facebook-Comment","Removed","Post");GAG.Track.event("social","fb.rc")
}
);this._checkFacebookLoginStatus()
}
,addInitCallback:function(g,f)
{
GAG.Facebook._fbInitedCallbacks.push(
{
callbackType:g,callback:f
}
)
}
,_executeFbInitedCallbacks:function(h)
{
for(var f=0;f<this._fbInitedCallbacks.length;f++)
{
var g=this._fbInitedCallbacks[f];if((h.indexOf(g.callbackType)!==-1)&&(typeof g.callback=="function")&&(!this._fbInitedCallbacks[f]["executed"]))
{
this._fbInitedCallbacks[f]["executed"]=true;g.callback()
}

}

}
,sessionChangeHandler:function(f)
{
if(!f)
{
return
}
if(f.status==="connected")
{
if(f.authResponse)
{
GAG.Facebook._executeFbInitedCallbacks("connected,logged-in,all")
}

}
else
{
if(f.status==="not_authorized")
{
GAG.Facebook._executeFbInitedCallbacks("logged-in,all")
}
else
{
GAG.Facebook._executeFbInitedCallbacks("logged-out,all")
}

}

}
,_checkFacebookLoginStatus:function()
{
FB.getLoginStatus(GAG.Facebook.sessionChangeHandler);FB.Event.subscribe("auth.authResponseChange",GAG.Facebook.sessionChangeHandler)
}
,executeRenderQueue:function()
{
for(var g=0;g<this._xfbmlRenderItems.length;g++)
{
var f=this._xfbmlRenderItems[g];this.parseElement(f.elementId,f.callback)
}

}
,renderElement:function(f,g)
{
if(GAG.Facebook.fbAsyncInited)
{
this.parseElement(f,g)
}
else
{
this._xfbmlRenderItems.push(
{
elementId:f,callback:g
}
)
}

}
,parseElement:function(f,h)
{
try
{
if(h)
{
FB.XFBML.parse(document.getElementById(f))
}
else
{
FB.XFBML.parse(document.getElementById(f),h)
}

}
catch(g)
{

}

}
,renderComment:function(f,l,h)
{
var j=this.Plugins.Comments.getElement(h);var g=c("#"+f).html("").append(j);this.renderElement(f,l)
}
,Plugins:
{
Comments:
{
getElement:function(g)
{
var f=
{
"class":"fb-comments","data-href":"","data-num-posts":5,"data-width":470
}
;g=c.extend(f,g);var j=c("<div/>");for(var h in g)
{
j.attr(h,g[h])
}
return j
}

}

}
,Connect:
{
FB_CONNECT_CALLBACK_URL:"/connect/facebook-callback",INIT_FAILURE_MESSAGE:"Facebook Connect is not enabled, please check if there's any browser plugin blocking the function.",_additionalParams:
{

}
,addParam:function(f,g)
{
this._additionalParams[f]=g
}
,_getConnectParamsString:function()
{
var g="";var f=0;for(k in this._additionalParams)
{
g+=(f==0?"":"&")+k+"="+encodeURIComponent(this._additionalParams[k]);f++
}
return g
}
,_getConnectUrl:function()
{
var f=GAG.Facebook.Connect.FB_CONNECT_CALLBACK_URL;f+="?"+this._getConnectParamsString();return f
}
,connect:function(h)
{
try
{
if(h==undefined||h==null)
{
h="/"
}
var f="https://"+GAG.Page.getDomain()+"/connect/facebook";var g="next="+encodeURIComponent(h+"?"+this._getConnectParamsString());f+="?"+g;b.location=f
}
catch(j)
{
if(c.browser.msie&&parseInt(c.browser.version,10)<=8)
{

}
else
{

}

}

}

}

}
;GAG.fbAsyncInit=function()
{
GAG.Facebook.init()
}
;GAG.Configs=
{
_configs:
{

}
,init:function()
{

}
,load:function(f)
{
this._configs=f?f:
{

}

}
,get:function(g)
{
var h=g.split(".");var f=this._configs;var j="";while(f&&h.length>0)
{
f=f[h.shift()];j=f
}
return j
}
,Facebook:
{
init:function()
{

}
,getAppId:function()
{
return GAG.Configs.get("configs.facebook.app_id")
}
,getChannelFile:function()
{
var f=GAG.Page.getProtocol();return"//"+GAG.Page.getDomain()+"/static/"+f+"_channel.html"
}

}

}
;GAG.Controller=function()
{
this._base=this
}
;GAG.Controller.prototype=new GAG.BaseObject();GAG.Controller.prototype.getBase=function()
{
return this._base
}
;GAG.Controller.prototype.init=function()
{

}
;GAG.Controller.prototype.onLoad=function()
{

}
;GAG.Controller.prototype.onResize=function()
{

}
;GAG.Controller.prototype.onScroll=function()
{

}
;GAG.Controller.prototype.onDomReady=function()
{

}
;GAG.PageController=c.extend(
{

}
,new GAG.Controller(),
{
init:function()
{
this._bindElements()
}
,_bindElements:function()
{
this._bindHeaderMenu();this._bindProfileMenu();this._bindFacebookButtons();this._bindSwitchViewButtons()
}
,_bindFacebookButtons:function()
{

}
,_bindProfileMenu:function()
{
var f=this;c("#jsid-head-profile-toggle").on("click",function(h)
{
h.preventDefault();var g=c(this);var j=g.hasClass("selected");f._expandListMenu(false);f._expandProfileMenu(!j)
}
)
}
,_expandProfileMenu:function(f)
{
var h=c("#jsid-head-profile-toggle");var g=c("#jsid-head-profile-menu");if(f)
{
c("#jsid-head-profile-toggle-down").hide();c("#jsid-head-profile-toggle-up").show();h.addClass("selected");g.show()
}
else
{
c("#jsid-head-profile-toggle-up").hide();c("#jsid-head-profile-toggle-down").show();h.removeClass("selected");g.hide()
}

}
,_bindHeaderMenu:function()
{
var f=this;c("#target-head-list-toggle").on("click",function(h)
{
	if (c("#target-head-list-toggle").hasClass("show")){
		h.preventDefault();var g=c(this);var j=g.hasClass("selected");f._expandProfileMenu(false);f._closeListMenu(!j)
	}else{
		h.preventDefault();var g=c(this);var j=g.hasClass("selected");f._expandProfileMenu(false);f._expandListMenu(!j)
	}


}
)
}
,_expandListMenu:function(f)
{
var h=c("#target-head-list-toggle");var g=c("#target-list-main-nav");if(f)
{
	
c("#target-head-list-toggle-down").hide();c("#target-head-list-toggle-up").show();h.addClass("show");g.show()
}
else
{
	
c("#target-head-list-toggle-up").hide();c("#target-head-list-toggle-down").show();h.removeClass("show");g.hide()
}

}
,_closeListMenu:function(f)
{
var h=c("#target-head-list-toggle");var g=c("#target-list-main-nav");if(f)
{
	
c("#target-head-list-toggle-down").hide();c("#target-head-list-toggle-up").show();h.removeClass("show");g.hide()
}
else
{
	
c("#target-head-list-toggle-up").hide();c("#target-head-list-toggle-down").show();h.removeClass("show");g.hide()
}

}
,_bindSwitchViewButtons:function()
{

}

}
);GAG.PostController=c.extend(
{

}
,new GAG.Controller(),
{
init:function()
{
if(!GAG.Page.isPostPage())
{
return
}
this._bindElements();this._bindCommentChecker();this._orderList=new a();this._loadEntries();this._showContent()
}
,selectors:
{
ENTRY_ANIMATED_COVER:".badge-animated-cover",ENTRY_ANIMATED_CONTAINER_ANIMATED:".badge-animated-container-animated",ENTRY_ANIMATED_CONTAINER_STATIC:".badge-animated-container-static",ENTRY_ANIMATED_CONTAINER_PLAY:".badge-animated-play",CONTAINER:"#container"
}
,_loadEntries:function()
{
var h=c("#jsid-content-item");var f=h.attr("data-key");GAG.PostController._trackUniqueView(f);this._orderList.append(f,this._getEntryWrapper().html());this._orderList.setCurrKey(f);if(GAG.nextItems)
{
for(var g in GAG.nextItems)
{
this._orderList.append(g,GAG.nextItems[g])
}

}
if(GAG.prevItems)
{
for(var g in GAG.prevItems)
{
this._orderList.prepend(g,GAG.prevItems[g])
}

}

}
,_showContent:function()
{
var g=""+b.location.hash;if(g)
{
var f=g.split("#").pop();if(parseInt(f,10)==f)
{
b.location.href="/gag/"+f
}

}
else
{
c("#content").show()
}

}
,showItem:function(g)
{
var l=this._orderList.getItem(g);if(l)
{
this._orderList.setCurrKey(g);this._getEntryWrapper().empty().append(l.item);var f=GAG.PostController._orderList.getCurrKey();var j=f.split(":").pop();c("#content").show();this._resetComment(j);if(b.history&&b.history.pushState&&b.history.replaceState)
{
b.history.pushState(
{
key:f,entryId:j
}
,j,"/gag/"+j)
}
else
{
b.location="#"+j
}
if(c("#jsid-content-item").attr("data-title"))
{
document.title="9GAG - "+c("#jsid-content-item").attr("data-title")
}
if(b.scrollTo)
{
b.scrollTo(0,0)
}
var h=GAG.Page.getProtocol()+"://"+GAG.Page.getSiteDomain()+"/views?view=desktop&id="+j;c(".badge-switch-view").attr("href",h)
}

}
,_bindElements:function()
{
GAG.Facebook.renderElement("post-fb-comment");this._bindPageTurnToggler();this._bindVoteElements();this._bindPageTurners();this._bindReadPost();this._bindEntryCoverElements();var f=false;b.onpopstate=function(l)
{
if(f)
{
var j=l.state;var h=j.entryId;var g=j.key;if(g&&h)
{
GAG.PostController.showItem(g)
}

}
else
{
f=true
}

}
;GAG.Facebook.addInitCallback("logged-out",function()
{
c(".badge-show-email-signup").show()
}
)
}
,_getEntryWrapper:function()
{
return c("#jsid-content-container")
}
,_pageTurnShown:false,_bindPageTurnToggler:function()
{
var f=".badge-page-turn";this._getEntryWrapper().on("click",".badge-page-turn-toggler",function(g)
{
g.preventDefault();GAG.PostController._pageTurnShown=!GAG.PostController._pageTurnShown;if(GAG.PostController._pageTurnShown)
{
c(f).css("opacity",1)
}
else
{
c(f).css("opacity",0)
}

}
)
}
,_bindPageTurners:function()
{
this._getEntryWrapper().on("click",".badge-page-turn",function(o)
{
var l=c(this);var g=l.attr("data-dir");var f=GAG.PostController._getEntryWrapper().html();GAG.PostController._orderList.setItem(GAG.PostController._orderList.getCurrKey(),f);var j=null;if(g=="prev")
{
j=GAG.PostController._orderList.getPrevKey()
}
else
{
j=GAG.PostController._orderList.getNextKey()
}
if(!j)
{
return
}
GAG.PostController.showItem(j);var h=c("#jsid-content-item");var n=h.attr("data-key");var m=n.split(":").pop();GAG.PostController._updateOgReadNotice(m);GAG.PostController._doOgRead(m);GAG.PostController._trackUniqueView(m);o.preventDefault()
}
)
}
,_bindEntryCoverElements:function()
{
c(this.selectors.CONTAINER).on("click",this.selectors.ENTRY_ANIMATED_COVER,c.proxy(function(l)
{
l.preventDefault();var j=c(l.currentTarget);var h=j.find(this.selectors.ENTRY_ANIMATED_CONTAINER_STATIC);var g=j.find(this.selectors.ENTRY_ANIMATED_CONTAINER_ANIMATED);var f=j.find(this.selectors.ENTRY_ANIMATED_CONTAINER_PLAY);if(h.is(":visible"))
{
h.hide();g.show();f.hide()
}
else
{
g.prop("src",g.prop("src"));h.show();g.hide();f.show()
}

}
,this))
}
,_bindVoteElements:function()
{
this._getEntryWrapper().on("click",".badge-btn-upvote",function(h)
{
h.preventDefault();if(!GAG.User.isLoggedIn())
{
GAG.Page.redirectCurrentPageToLogin("Vote")
}
var f=c(this).attr("entryId");var g=c(this).hasClass("selected");if(g)
{
GAG.Vote.doVote(GAG.Vote.TYPE_UNVOTE,f,GAG.PostController._unvoteCallback,function()
{

}
);GAG.GA.track("Mobile-Entry-UnVoteFromUp","Clicked-Post","Entry-"+f)
}
else
{
GAG.Vote.doVote(GAG.Vote.TYPE_VOTE_UP,f,GAG.PostController._upvoteCallback,function()
{

}
);GAG.GA.track("Mobile-Entry-UpVote","Clicked-Post","Entry-"+f)
}

}
);this._getEntryWrapper().on("click",".badge-btn-downvote",function(h)
{
h.preventDefault();if(!GAG.User.isLoggedIn())
{
GAG.Page.redirectCurrentPageToLogin("Vote")
}
var f=c(this).attr("entryId");var g=c(this).hasClass("selected");if(g)
{
GAG.Vote.doVote(GAG.Vote.TYPE_UNVOTE,f,GAG.PostController._unvoteCallback,function()
{

}
);GAG.GA.track("Mobile-Entry-UnVoteFromDown","Clicked-Post","Entry-"+f)
}
else
{
GAG.Vote.doVote(GAG.Vote.TYPE_VOTE_DOWN,f,GAG.PostController._downvoteCallback,function()
{

}
);GAG.GA.track("Mobile-Entry-DownVote","Clicked-Post","Entry-"+f)
}

}
)
}
,_upvoteCallback:function(l)
{
if(!l||!l.id||!l.msg)
{
return
}
var f=c("#post-stats-"+l.id);var j=GAG.Utils.formattedNumberToInt(c(f).find(".badge-count-like").text())+1;if(!isNaN(j))
{
j=GAG.Utils.formatNumber(j);c(f).find(".badge-count-like").text(j)
}
var h=c("#fsid-btn-downvote-"+l.id).hasClass("selected");if(h)
{
var g=GAG.Utils.formattedNumberToInt(c(f).find(".badge-count-dislike").text())-1;if(!isNaN(g))
{
g=GAG.Utils.formatNumber(g);c(f).find(".badge-count-dislike").text(g)
}

}
c("#fsid-btn-downvote-"+l.id).removeClass("selected");c("#fsid-btn-upvote-"+l.id).addClass("selected")
}
,_unvoteCallback:function(l)
{
if(!l||!l.id||!l.msg)
{
return
}
var f=c("#post-stats-"+l.id);var m=c("#fsid-btn-upvote-"+l.id).hasClass("selected");if(m)
{
var j=GAG.Utils.formattedNumberToInt(c(f).find(".badge-count-like").text())-1;if(!isNaN(j))
{
j=GAG.Utils.formatNumber(j);c(f).find(".badge-count-like").text(j)
}

}
var h=c("#fsid-btn-downvote-"+l.id).hasClass("selected");if(h)
{
var g=GAG.Utils.formattedNumberToInt(c(f).find(".badge-count-dislike").text())-1;if(!isNaN(g))
{
g=GAG.Utils.formatNumber(g);c(f).find(".badge-count-dislike").text(g)
}

}
c("#fsid-btn-upvote-"+l.id).removeClass("selected");c("#fsid-btn-downvote-"+l.id).removeClass("selected")
}
,_downvoteCallback:function(l)
{
if(!l)
{
return
}
var f=c("#post-stats-"+l.id);var j=parseInt(f.attr("myScore"),10);var m=c("#fsid-btn-upvote-"+l.id).hasClass("selected");if(m)
{
var h=GAG.Utils.formattedNumberToInt(c(f).find(".badge-count-like").text())-1;if(!isNaN(h))
{
h=GAG.Utils.formatNumber(h);c(f).find(".badge-count-like").text(h)
}

}
var g=GAG.Utils.formattedNumberToInt(c(f).find(".badge-count-dislike").text())+1;if(!isNaN(g))
{
g=GAG.Utils.formatNumber(g);c(f).find(".badge-count-dislike").text(g)
}
c("#fsid-btn-upvote-"+l.id).removeClass("selected");c("#fsid-btn-downvote-"+l.id).addClass("selected")
}
,_commentChecker:null,_commentRenderCheckInterval:500,_bindCommentChecker:function()
{
if(!this._commentChecker)
{
this._commentChecker=setInterval("GAG.PostController.checkCommentRender();",this._commentRenderCheckInterval)
}

}
,_resetComment:function(j)
{
var h=c("#post-fb-comment");h.removeAttr("data-rendered");var l=c("#post-fb-comment-header");if(this._isNsfwPost())
{
h.hide();l.hide()
}
else
{
h.show();l.show()
}
var f="http://"+GAG.Page.getSiteDomain()+"/gag/"+j;var g='<div class="fb-comments" data-href="'+f+'" data-num-posts="2" data-width="320"></div>';h.empty().html(g)
}
,_commentScrollPassed:function()
{
var j=c("#post-fb-comment");if(j.length==0)
{
return
}
if(j.attr("data-rendered"))
{
return false
}
var g=j.offset().top;var m=c(document).height();var l=c(document).scrollTop();var o=200;var h=c(b).scrollTop()+o;var f=c(document).height()-c(b).height();var n=h>=f;return n
}
,checkCommentRender:function()
{
var f=this._commentScrollPassed();if(f)
{
c("#post-fb-comment").attr("data-rendered","1");GAG.Facebook.renderElement("post-fb-comment")
}

}
,currReadRequest:false,readPost:function(h,f)
{
if(GAG.PostController.currReadRequest)
{
try
{
GAG.PostController.currReadRequest.abort()
}
catch(l)
{

}

}
var j=GAG.PostController._getOgNoticeToggle();j.attr("data-text",j.text()).text("Loading...");GAG.PostController._setOgReadOn(true);GAG.GA.track("Mobile-Facebook-OG",f?"Post-Added":"Post-Removed","Read");var g="/read/read-post";GAG.PostController.currReadRequest=c.ajax(
{
dataType:"json",type:"POST",data:
{
entryId:h,read:f?1:0
}
,url:g,success:function(n)
{
var m=GAG.PostController._getOgNoticeBox();if(n&&n.okay)
{
GAG.PostController.setPostRead(h,f);GAG.PostController._updateOgReadNoticeMsg(f);m.show()
}
else
{
m.show();j.text(j.attr("data-text"))
}
GAG.PostController.currReadRequest=false
}
,error:function()
{
GAG.PostController.currReadRequest=false
}

}
)
}
,_getOgNoticeBox:function()
{
return c("#jsid-og-read-msg")
}
,_getOgNoticeToggle:function()
{
return c("#jsid-og-read-toggle")
}
,_bindReadPost:function()
{
var f=this._getOgNoticeBox();var h=this._getOgNoticeToggle();if(f.length==0||h.length==0)
{
return
}
h.on("click",function(j)
{
j.preventDefault();GAG.PostController.readPost(f.attr("data-entryId"),!c(this).hasClass("active"))
}
);var g=c("#jsid-og-read-dismiss");g.on("click",function(l)
{
l.preventDefault();var m="og_read_notice";var j="."+GAG.Page.getSiteDomain();c.cookie(m,0,
{
domain:j,path:"/",expires:365
}
);c("#jsid-og-read-tips-box").hide();GAG.GA.track("Mobile-Facebook-OG","Post-Dismissed","Read")
}
)
}
,_entryReads:
{

}
,_updateOgReadNotice:function(f)
{
this._getOgNoticeBox().attr("data-entryId",f);this._updateOgReadNoticeMsg(this._isPostRead(f));this._updateOgReadNoticeCount()
}
,_updateOgReadNoticeMsg:function(g)
{
if(this._isNsfwPost())
{
this._getOgNoticeBox().hide()
}
else
{
this._getOgNoticeBox().show()
}
var f=this._getOgNoticeToggle();if(g)
{
f.addClass("active").addClass("green").removeClass("blue").text("You read this post")
}
else
{
f.removeClass("active").addClass("blue").removeClass("green").text("Add to your reads")
}

}
,_updateOgReadNoticeCount:function()
{
if(this._isNsfwPost())
{
return
}
var g=c("#jsid-og-read-msg-count");if(g.length==0)
{
return
}
var h=parseInt(g.text(),10)-1;var f="."+GAG.Page.getSiteDomain();if(h>0)
{
g.text(h);c.cookie("og_read_notice_cnt",h-1,
{
domain:f,path:"/",expires:365
}
)
}
else
{
c("#jsid-og-read-tips-box").hide();c.cookie("og_read_notice",0,
{
domain:f,path:"/",expires:365
}
)
}

}
,_isOgReadOn:function()
{
var f=this._getOgNoticeBox();return f.length>0&&f.attr("data-ogReadOn")=="1"
}
,_setOgReadOn:function(f)
{
this._getOgNoticeBox().attr("data-ogReadOn","1")
}
,_isPostRead:function(f)
{
return !!(this._entryReads["id:"+f])
}
,_isPostUnread:function(f)
{
return this._entryReads["id:"+f]===false
}
,setPostRead:function(f,g)
{
this._entryReads["id:"+f]=g
}
,_isNsfwPost:function()
{
var f=c("#jsid-content-item");var g=f.attr("data-nsfw");return !!g
}
,_trackUniqueView:function(g)
{
var h=g.split(":").pop();var f=
{
label:"",labelValue:"",platform:"m",entry:h,views:"p"
}
;GAG.Track.uniqueViewed(f)
}
,_doOgRead:function(f)
{
if(!this._isOgReadOn())
{
return
}
if(this._isNsfwPost())
{
return
}
if(this._isPostRead(f))
{

}
else
{
if(this._isPostUnread(f))
{

}
else
{
this.readPost(f,true)
}

}

}

}
);GAG.ListController=c.extend(
{

}
,new GAG.Controller(),
{
_scrollStartTime:0,_scrollStartTop:0,_windowWidth:0,_vh_debug_mode:false,init:function()
{
if(!GAG.Page.isListPage())
{
return
}
this._bindElements();this._monitorLoadMore();if(location.href.indexOf("debug=1")>-1)
{
this._vh_debug_mode=true
}

}
,selectors:
{
ENTRY_ANIMATED_COVER:".badge-animated-cover",ENTRY_ANIMATED_CONTAINER_ANIMATED:".badge-animated-container-animated",ENTRY_ANIMATED_CONTAINER_STATIC:".badge-animated-container-static",ENTRY_ANIMATED_CONTAINER_PLAY:".badge-animated-play",CONTAINER:"#target-list-container"
}
,_bindElements:function()
{
this._bindLoadMore();this._bindLoadComment();this._bindVoteElements();this._bindViewHistoryTrackingEvents();this._bindEntryCoverElements()
}
,_bindEntryCoverElements:function()
{
c(this.selectors.CONTAINER).on("click",this.selectors.ENTRY_ANIMATED_COVER,c.proxy(function(l)
{
l.preventDefault();var j=c(l.currentTarget);var h=j.find(this.selectors.ENTRY_ANIMATED_CONTAINER_STATIC);var g=j.find(this.selectors.ENTRY_ANIMATED_CONTAINER_ANIMATED);var f=j.find(this.selectors.ENTRY_ANIMATED_CONTAINER_PLAY);if(h.is(":visible"))
{
h.hide();g.show();f.hide()
}
else
{
g.prop("src",g.prop("src"));h.show();g.hide();f.show()
}

}
,this))
}
,_bindLoadMore:function()
{
var f=c("#target-list-more-load-button");f.on("click",function(g)
{
if(f.attr("data-click")=="1")
{

}
else
{
g.preventDefault();GAG.ListController.checkLoadMore()
}

}
)
}
,_bindViewHistoryTrackingEvents:function()
{
var f=this;c(document).on("touchmove",function()
{
f._scrollStartTime=new Date().getTime();f._scrollStartTop=c(b).scrollTop();f._windowWidth=c(b).width();f._windowHeight=c(b).height()
}
);c(document).on("scroll",_.throttle(function()
{
var m=new Date().getTime();var h=c(b).scrollTop();var g=h-f._scrollStartTop;var n=m-f._scrollStartTime;var j=g/n/f._windowWidth*1000;if(n<400)
{
return
}
var l=j<2.5;if(f._vh_debug_mode)
{
console.log("include between = "+l+" since scrollRate is "+j+" time taken = "+n)
}
c(".badge-list-item-unread").each(function()
{
var o=c(this);var p=o.offset().top;var q=o.height();if(p<h+f._windowHeight-200&&p+q-200>h)
{
if(f._vh_debug_mode)
{
o.css("background-color","#fcc")
}
o.removeClass("badge-list-item-unread");f._markEntryRead(o)
}
else
{
if(l&&(p>f._scrollStartTop&&p+q<=h+f._windowHeight))
{
if(f._vh_debug_mode)
{
o.css("background-color","#ccf")
}
o.removeClass("badge-list-item-unread");f._markEntryRead(o)
}

}

}
)
}
,500))
}
,_readIds:
{

}
,_readIdsBuffer:[],_readIdsBufferFlushThreshold:5,_markEntryRead:function(j)
{
var h=j.attr("id").substr(10);var f=GAG.pageData&&GAG.pageData.poolKey;if(!this._readIds[h])
{
this._readIds[h]=1;this._readIdsBuffer.push(h);if(f)
{
console.log(GAG.Track);GAG.Track.markReadInCookie(h)
}
if(this._readIdsBuffer.length>=this._readIdsBufferFlushThreshold)
{
if(f)
{
GAG.Track.read(this._readIdsBuffer)
}
var g=
{
label:"",labelValue:"",platform:"m",entry:this._readIdsBuffer.join(","),views:"l"
}
;GAG.Track.uniqueViewed(g);this._readIdsBuffer=[]
}

}

}
,_getListWrapper:function()
{
return c("#content")
}
,_bindLoadComment:function()
{
var f="li.badge-list-item .badge-btn-toggle-comment";this._getListWrapper().on("click",f,function(h)
{
h.preventDefault();var g=c(this);var l="list-item-fb-comment-"+g.attr("entryId");var j=c("#"+l);if(g.attr("data-rendered"))
{
j.toggle()
}
else
{
g.attr("data-rendered","1");GAG.Facebook.renderElement(l)
}
GAG.GA.track("Mobile-Facebook-Comment","Clicked-List","Entry-"+l)
}
)
}
,_bindVoteElements:function()
{
this._getListWrapper().on("click",".badge-btn-upvote",function(h)
{
h.preventDefault();if(!GAG.User.isLoggedIn())
{
GAG.Page.redirectCurrentPageToLogin("Vote")
}
var f=c(this).attr("entryId");var g=c(this).hasClass("selected");if(g)
{
GAG.Vote.doVote(GAG.Vote.TYPE_UNVOTE,f,GAG.PostController._unvoteCallback,function()
{

}
);GAG.GA.track("Mobile-Entry-UnVoteFromUp","Clicked-List","Entry-"+f)
}
else
{
GAG.Vote.doVote(GAG.Vote.TYPE_VOTE_UP,f,GAG.PostController._upvoteCallback,function()
{

}
);GAG.GA.track("Mobile-Entry-UpVote","Clicked-List","Entry-"+f)
}

}
);this._getListWrapper().on("click",".badge-btn-downvote",function(h)
{
h.preventDefault();if(!GAG.User.isLoggedIn())
{
GAG.Page.redirectCurrentPageToLogin("Vote")
}
var f=c(this).attr("entryId");var g=c(this).hasClass("selected");if(g)
{
GAG.Vote.doVote(GAG.Vote.TYPE_UNVOTE,f,GAG.PostController._unvoteCallback,function()
{

}
);GAG.GA.track("Mobile-Entry-UnVoteFromDown","Clicked-List","Entry-"+f)
}
else
{
GAG.Vote.doVote(GAG.Vote.TYPE_VOTE_DOWN,f,GAG.PostController._downvoteCallback,function()
{

}
);GAG.GA.track("Mobile-Entry-DownVote","Clicked-List","Entry-"+f)
}

}
)
}
,_LOAD_MORE_MAX:9,_loadMoreCount:0,_isLoading:false,_loadMoreData:function()
{
var f=this;this._isLoading=true;var h=c("#target-list-more-load-button");var j=h.attr("data-list");var g=this._getLoadMoreUrl(h);h.text("Loading...");GAG.GA.track("Mobile-InfiniteScrolling","Loaded-"+j,"Load-"+f._loadMoreCount+1);c.ajax(
{
type:"post",url:g,success:function(n)
{
if(n != "")
{
GAG.ListController._isLoading=false;h.text("More");
var r=c("#target-list-container");
var l=null;var o=false;
var tpage = parseInt(h.attr("data-entryId"));


r.append(n);
h.attr("data-entryId",tpage + 1);

page = tpage+1

h.attr("href", themobileurl+"/"+j+"?page="+ page );
return
}
if(l!==null)
{
f._loadMoreCount++;h.attr("data-count",f._loadMoreCount);var m=h.attr("data-list");
}
else
{
if(n.ids&&n.ids.length==0)
{
o=true
}

}
if(o)
{
h.attr("data-click","1").text("Start over")
}
else
{
if(f._reachedLoadMoreLimit())
{
h.attr("data-click","1").text("I want more fun!")
}
else
{
h.text("More")
}

}
GAG.ListController._isLoading=false
}
,error:function(l)
{
h.text("More");GAG.ListController._isLoading=false
}

}
)
}
,_reachedLoadMoreLimit:function()
{
return this._loadMoreCount>=this._LOAD_MORE_MAX
}
,_getLoadMoreUrl:function(f)
{
var h=f.attr("data-list");var j=f.attr("data-group");var g=themobileurl+"/json.php?section="+h+"&page="+f.attr("data-entryId");return g
}
,_isLoadMorePassed:function()
{
var j=c("#target-list-more-load-button");if(j.length==0)
{
return
}
var g=j.offset().top;var m=c(document).height();var l=c(document).scrollTop();var o=600;var h=c(b).scrollTop()+o;var f=c(document).height()-c(b).height();var n=h>=f;return n
}
,_loadMoreChecker:null,_loadMoreCheckerInterval:400,_loadMoreMinInterval:200,_loadMoreLastTs:0,_monitorLoadMore:function()
{
if(this._loadMoreChecker===null)
{
this._loadMoreChecker=setInterval("GAG.ListController.checkLoadMore(true);",this._loadMoreCheckerInterval)
}

}
,_getNowTs:function()
{
return(new Date()).getTime()
}
,_doAutoTrigger:function()
{
var f=c("#target-list-more-load-button");if(f.attr("data-click")=="1")
{
return false
}
return true
}
,checkLoadMore:function(f)
{
if(this._isLoading)
{
return
}
if(this._reachedLoadMoreLimit())
{
return
}
if(f)
{
if(!this._doAutoTrigger())
{
return
}
var g=this._getNowTs()-this._loadMoreLastTs;if(g<300)
{
return
}
this._loadMoreLastTs=this._getNowTs();var h=this._isLoadMorePassed();if(h)
{
this._loadMoreData()
}

}
else
{
this._loadMoreData()
}

}
,onScroll:function()
{
this.checkLoadMore(true)
}

}
);GAG.AccountController=c.extend(
{

}
,new GAG.Controller(),
{
init:function()
{
if(!GAG.Page.isMemberPage())
{
return
}
this.bindElements()
}
,_trackElementClicked:function(f,h)
{
var g=f.attr("data-label");if(g==null)
{
g="MobileOthers"
}
GAG.GA.track(h,"Clicked",g)
}
,_showEmailSignUpForm:function()
{
c("#jsid-signup-with-email").show()
}
,_validateEmailAddress:function()
{
email=c(".badge-input-email").val();return GAG.Validator.isValidEmail(email)
}
,_validatePassword:function()
{
password=c(".badge-input-password").val();return GAG.Validator.isValidPassword(password,6,50)
}
,_validateFullName:function()
{
fullName=c(".badge-input-fullname").val();return GAG.Validator.isValidFullName(fullName)
}
,_validateEmailSignUpForm:function()
{
isEmailValid=GAG.AccountController._validateEmailAddress();isPasswordValid=GAG.AccountController._validatePassword();elErrorList=c(".badge-error-list ul");elErrorList.empty();if(!isEmailValid)
{
elErrorList.append("<li>Your email address is not valid</li>")
}
if(!isPasswordValid)
{
elErrorList.append("<li>Your password has to have at least 6 characters</li>")
}
if(!isEmailValid||!isPasswordValid)
{
c(".badge-error-list").removeClass("hide");return false
}
else
{
c(".badge-error-list").addClass("hide");return true
}

}
,_getTimezoneOffset:function()
{
return new Date().getTimezoneOffset()/-60
}
,bindElements:function()
{
c(".badge-facebook-connect").on("click",function(l)
{
l.preventDefault();var h=c(this);GAG.AccountController._trackElementClicked(h,"Facebook-Signup");var j=h.attr("data-next");var o=h.hasClass("nsfw-post");if(o)
{
GAG.Facebook.Connect.addParam("nsfw",1)
}
var g=h.attr("data-refSource");if(g)
{
GAG.Facebook.Connect.addParam("src",g)
}
var f=h.attr("data-refUrl");if(f)
{
GAG.Facebook.Connect.addParam("ref",f)
}
var n=h.attr("data-app");if(n)
{
GAG.Facebook.Connect.addParam("app",n)
}
var m=GAG.AccountController._getTimezoneOffset();GAG.Facebook.Connect.addParam("tzo",m);GAG.Facebook.Connect.connect(j)
}
);c(".badge-email-signup-form").on("submit",function(f)
{
c("#jsid-signup-input-tzo").val(GAG.AccountController._getTimezoneOffset())
}
);c(".badge-input-email").on("change",function(f)
{
isValid=GAG.AccountController._validateEmailAddress();if(isValid)
{
c(".badge-input-email").addClass("okay");c(".badge-input-email").removeClass("error")
}
else
{
c(".badge-input-email").addClass("error");c(".badge-input-email").removeClass("okay")
}

}
);c(".badge-input-password").on("change",function(f)
{
isValid=GAG.AccountController._validatePassword();if(isValid)
{
c(".badge-input-password").addClass("okay");c(".badge-input-password").removeClass("error")
}
else
{
c(".badge-input-password").addClass("error");c(".badge-input-password").removeClass("okay")
}

}
);c(".badge-input-field").on("keydown",function(f)
{
if(f.which==13)
{
c(".badge-email-form-submit").focus().click()
}

}
);GAG.Facebook.addInitCallback("logged-out",function()
{
c(".badge-show-email-signup").show()
}
)
}
,validateLoginForm:function()
{
GAG.GA.track("Mobile-Login","Clicked","");var f=c("#jsid-login-id");var j=c("#jsid-login-password");var l=f.val();var h=j.val();var g=!!(l&&h);if(!g)
{
c(".badge-message").hide();f.removeClass("error").removeClass("okay");j.removeClass("error").removeClass("okay");if(!l&&!h)
{
c("#jsid-message-both").show();f.addClass("error");j.addClass("error")
}
else
{
if(!l)
{
c("#jsid-message-id").show();f.addClass("error");j.addClass("okay")
}
else
{
if(!h)
{
c("#jsid-message-password").show();f.addClass("okay");j.addClass("error")
}

}

}

}
return g?true:false
}
,onResize:function()
{

}
,onDocumentClicked:function()
{

}

}
);GAG.Track=
{
tuvCookie:"_tuv",tuvCookieMax:100,baseUrl:"http://t.9gag.com",imageUrl:"/img.gif",bindElements:function()
{
var f=document.getElementById("jsid-track-domain");if(f)
{
GAG.Track.baseUrl=f.value
}

}
,_saveHistory:function(h,g)
{
var f=g.join(",");c.cookie(h,f,
{
expires:10000,path:"/",domain:GAG.Configs.get("page.cookie_domain")
}
)
}
,_checkUnique:function(l,g,f)
{
if(f.length>32)
{
var f=c.md5(f)
}
var h=c.cookie(l);var j=[];if(h)
{
j=h.split(",")
}
if(j.indexOf(f)==-1)
{
if(j.length>=g)
{
j.shift()
}
j.push(f);GAG.Track._saveHistory(l,j);return true
}
else
{
return false
}
return true
}
,uniqueViewed:function(h)
{
var m="unique-viewed";if(typeof h.entry=="undefined")
{
return
}
var g=h.entry||"";var l=g.split(",");var f=[];for(var j=0;j<l.length;j++)
{
if(GAG.Track._checkUnique(GAG.Track.tuvCookie,GAG.Track.tuvCookieMax,l[j]))
{
f.push(l[j])
}

}
if(l.length>0&&f.length>0)
{
h.entry=f.join(",");GAG.Track.event(m,"v",h)
}

}
,read:function(f)
{
c.ajax(
{
type:"POST",url:"/read/ids",data:
{
ids:f.join(",")
}
,dataType:"json",success:function(g)
{

}
,error:function(g)
{

}

}
)
}
,markReadInCookie:function(f)
{
GAG.Track._checkUnique("viewed_ids",GAG.Track.tuvCookieMax,f)
}
,page:function()
{
var g="viewed";var f=location.href;GAG.Track.event(g,f)
}
,event:function(m,l,j)
{
var g=j.user?j.user:GAG.Configs.get("user.id");if(!g)
{
g=""
}
var n=
{
action:m,value:l,ref:"",label:(typeof j.label==="undefined")?"":j.label,labelValue:(typeof j.labelValue==="undefined")?"":j.labelValue,platform:(typeof j.platform==="undefined")?"":j.platform,entry:(typeof j.entry==="undefined")?"":j.entry,user:g,view:(typeof j.view==="undefined")?"":j.view
}
;n.ref=GAG.Track._getQueryStringParam("ref");var h=GAG.Track._formatUrl(n);var f=new Image();f.src=h
}
,_getUrl:function()
{
return location.href
}
,_getReferrer:function()
{
return document.referrer
}
,_getTime:function()
{
var f=new Date();var g=new Date(f.getUTCFullYear(),f.getUTCMonth(),f.getUTCDate(),f.getUTCHours(),f.getUTCMinutes(),f.getUTCSeconds());var h=Math.round((g).getTime()/1000);return h
}
,_getQueryStringParam:function(h)
{
var g=b.location.href;var f=g.split(/[\?&]+/);for(i=0;i<f.length;i++)
{
var j=f[i].split("=");if(j[0]==h)
{
return j[1]
}

}
return""
}
,_formatUrl:function(h)
{
var f=GAG.Track.baseUrl+GAG.Track.imageUrl;var l="";var j=[];if(h)
{
if(h.action!=undefined&&h.action!=null)
{
j.push("a="+encodeURIComponent(h.action))
}
if(h.value!=undefined&&h.value!=null)
{
j.push("v="+encodeURIComponent(h.value))
}
if(h.ref!=undefined&&h.ref!=null)
{
j.push("ref="+encodeURIComponent(h.ref))
}
if(h.label!=undefined&&h.label!=null)
{
j.push("lbl="+encodeURIComponent(h.label))
}
if(h.labelValue!=undefined&&h.labelValue!=null)
{
j.push("lblv="+encodeURIComponent(h.labelValue))
}
if(h.platform!=undefined&&h.platform!=null)
{
j.push("p="+encodeURIComponent(h.platform))
}
if(h.entry!=undefined&&h.entry!=null)
{
j.push("e="+encodeURIComponent(h.entry))
}
if(h.user!=undefined&&h.user!=null)
{
j.push("u="+encodeURIComponent(h.user))
}
if(h.view!=undefined&&h.view!=null)
{
j.push("w="+encodeURIComponent(h.view))
}

}
j.push("url="+encodeURIComponent(GAG.Track._getUrl()));j.push("referrer="+encodeURIComponent(GAG.Track._getReferrer()));j.push("t="+encodeURIComponent(GAG.Track._getTime()));for(var g=0;g<j.length;g++)
{
l+=j[g]+"&"
}
f+="?"+l;return f
}

}
;GAG.App=
{
_models:[],_controllers:[],init:function()
{
var f=this;c(document).ready(function()
{
f._onDomReady()
}
);c(b).on("scroll",function(g)
{
f._runOnControllers("onScroll")
}
);c(b).on("resize",function(g)
{
f._runOnControllers("onResize")
}
)
}
,_onDomReady:function()
{
this._runOnModels("init");this._runOnControllers("init");GAG.Track.bindElements()
}
,_runOnObjects:function(g,h)
{
if(!g instanceof Array)
{
return
}
for(var f=0;f<g.length;f++)
{
if(g[f][h]&&typeof g[f][h]=="function")
{
g[f][h]()
}

}

}
,_runOnModels:function(f)
{
this._runOnObjects(this._models,f)
}
,_runOnControllers:function(f)
{
this._runOnObjects(this._controllers,f)
}
,addModel:function(g)
{
if(g instanceof Array)
{
for(var f=0;f<g.length;f++)
{
this._models.push(g[f])
}

}
else
{
this._models.push(g)
}
return this
}
,addController:function(g)
{
if(g instanceof Array)
{
for(var f=0;f<g.length;f++)
{
this._controllers.push(g[f])
}

}
else
{
this._controllers.push(g)
}
return this
}

}
;var e=[GAG.Page,GAG.User,GAG.Vote];var d=[GAG.PageController,GAG.PostController,GAG.ListController,GAG.AccountController];GAG.App.addModel(e).addController(d).init()
}
)(jQuery,window);