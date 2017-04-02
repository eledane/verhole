/*! complex-tracking v0.0.1 | (c) 2015, 2015 Homecreidt China, Inc. | Summer.Xia */

/*
 * listen client paste event
 */
$.fn.pasteEvents = function(delay) {
	if (delay == undefined)
		delay = 20;
	return $(this).each(function() {
		var $el = $(this);
		$el.on("paste", function() {
			$el.trigger("prepaste");
			setTimeout(function() {
				$el.trigger("postpaste");
			}, delay);
		});
	});
};

var technology = {
	isPC : function() {
		var userAgentInfo = navigator.userAgent;
		var Agents = [ "Android", "iPhone", "SymbianOS", "Windows Phone",
				"iPad", "iPod" ];
		var flag = true;
		for (var v = 0; v < Agents.length; v++) {
			if (userAgentInfo.indexOf(Agents[v]) > 0) {
				flag = false;
				break;
			}
		}
		return flag;
	},
	getPcOS:function (){
		var sUserAgent = navigator.userAgent,
			isWin = (navigator.platform == "Win32") || (navigator.platform == "Windows");

	    if (isWin) {
	    	var isWin7 = sUserAgent.indexOf("Windows NT 6.1") > -1 || sUserAgent.indexOf("Windows 7") > -1;
	        if (isWin7) return "Win7";

	        if(sUserAgent.indexOf("Windows 8") > -1) return "Win8";

	        var isWinXP = sUserAgent.indexOf("Windows NT 5.1") > -1 || sUserAgent.indexOf("Windows XP") > -1;
	        if (isWinXP) return "WinXP";

	        var isWin2K = sUserAgent.indexOf("Windows NT 5.0") > -1 || sUserAgent.indexOf("Windows 2000") > -1;
	        if (isWin2K) return "Win2000";

	        var isWin2003 = sUserAgent.indexOf("Windows NT 5.2") > -1 || sUserAgent.indexOf("Windows 2003") > -1;
	        if (isWin2003) return "Win2003";

	        var isWinVista= sUserAgent.indexOf("Windows NT 6.0") > -1 || sUserAgent.indexOf("Windows Vista") > -1;
	        if (isWinVista) return "WinVista";
	    }

	    var isMac = (navigator.platform == "Mac68K") || (navigator.platform == "MacPPC") || (navigator.platform == "Macintosh") || (navigator.platform == "MacIntel");
	    if (isMac) return "Mac";

	    var isUnix = (navigator.platform == "X11") && !isWin && !isMac;
	    if (isUnix) return "Unix";

	    var isLinux = (String(navigator.platform).indexOf("Linux") > -1);
	    if (isLinux) return "Linux";

	    return "other";
	},
	getMobileOS : function() {
		var sUserAgent = navigator.userAgent.toLowerCase();

		if (sUserAgent.match(/ipad/i) == "ipad")
			return "ipad";
		if (sUserAgent.match(/iphone os/i) == "iphone os")
			return "iphone os";
		if (sUserAgent.match(/android/i) == "android")
			return "android";
		if (sUserAgent.match(/windows mobile/i) == "windows mobile")
			return "windows mobile";
		if (sUserAgent.match(/windows ce/i) == "windows ce")
			return "windows ce";
		if (sUserAgent.match(/midp/i) == "midp")
			return "midp";
		if (sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4")
			return "rv:1.2.3.4";
		if (sUserAgent.match(/ucweb/i) == "ucweb")
			return "ucweb";
		return "other";
	}
}

/*
 * complex-tracking.js depend on JQuery. it can track client action.
 * All critical properties are defined in tracking object.
 * <br><br>
 * getTechnologyInfo: get all technology info,include cookie id,session id, fingerprint, screenResolutino, browser ...
 * getFingerPrint: get the unique indicate of client computer
 * getRemoteAddress: get client ip address
 * getBrowser: get browser info
 * getPlatform: get client platform,like windows, iPhone, MacOS etc.
 * getLanguage: get client used language
 * getTimeZone: get client time zone
 * getScreenResolution: get screen size
 * getFlash: get client flash info
 * send: send client technology data and action data to server
 * form: It's sub module. Listening client action is primary task.
 * <br><br>
 * author:Summer.Xia &nbsp;&nbsp;&nbsp; email:Summer.Xiasz@homecredit.cn
 */

function saveSessionAndCookieToClient(data){
	if (data != undefined) {
		var obj = tracking.getCookieAndSession();
		if(obj.tracking_client_cookie != data.cookieID){
			$.cookie('tracking_client_cookie', data.cookieID);
		}
		if(obj.traking_client_session != data.sessionID){
			$.cookie('traking_client_session', data.sessionID);
		}
	}
}

var tracking = {
	// some flag
	ifTechnic : 'N',
	ifUnload : 'Y',
	ifOnload : 'Y',
	_getTrackingHost: function(){
		var host = "";
		if($('script[src*="complex-tracking.js"]')){
			host = $('script[src*="complex-tracking.js"]').attr('trackingHost');
		}
		return host;
	},
	//_initUrl : '/tracking/init',
	_initUrl : '/tracking/init',
	_listenUnloadUrl : '/tracking/listenUnload',
	_listenOnloadUrl : '/tracking/listenOnload',
	_saveBehaviorDataUrl : "/tracking/saveBehaviorData",
	getTrackingId : function() {
		return {
			'idTracking' : tracking.form._idTracking
		}
	},
	getTrackingCode : function() {
		return {
			'trackingCode' : tracking.form._trackingCode
		}
	},
	getMd5Code : function() {
		return {
			'Md5Code' : tracking.form._md5_code
		}
	},
	getCookieAndSession : function() {
		return {
			'tracking_client_cookie' : $.cookie("tracking_client_cookie"),
			'traking_client_session' : $.cookie("traking_client_session")
		}
	},
	getTechnologyInfo : function() {
		return {
			'fingerPrint' : this.getFingerPrint(),
			'remoteAddress' : this.getRemoteAddress(),
			'browser' : this.getBrowser(),
			'browserVersion' : this.getBrowserVersion(),
			'platform' : this.getPlatform(),
			'language' : this.getLanguage(),
			'timeZone' : this.getTimeZone(),
			'screenResolution' : this.getScreenResolution(),
			'flash' : this.getFlash(),
			'referer' : this.getReferer(),
			'divce' : this.getDivce(),
			'operatingSystem' : this.getOperatingSystem(),
			'ipgl' : this.getIPGL(),
			'currentPageUrl' : this.getCurrentPageUrl(),
			'idTracking' : tracking.form._idTracking,
			'subTrackingId' : tracking.form._sub_tracking_id,
			'trackingCode' : tracking.form._trackingCode,
			'Md5Code' : tracking.form._md5_code
		};
	},
	getFingerPrint : function() {
		var fingerprint = "";
		try {
			fingerprint = new Fingerprint().get();
		} catch (err) {
		}
		return fingerprint;
	},
	getRemoteAddress : function() {
		var remoteAddress = "";
		try {
			remoteAddress = returnCitySN.cip;
		} catch (err) {
		}
		return remoteAddress;
	},
	getBrowser : function() {
		return navigator.appCodeName;
	},
	getBrowserVersion : function() {
		return navigator.appVersion;
	},
	getPlatform : function() {
		return navigator.platform;
	},
	getLanguage : function() {
		return navigator.language;
	},
	getTimeZone : function() {
		return new Date().getTimezoneOffset();
	},
	getScreenResolution : function() {
		return window.screen.width + 'x' + window.screen.height + 'x'
				+ window.screen.colorDepth;
	},
	getFlash : function() {
		var flash = false;
		try {
			flash = navigator.plugins["Shockwave Flash"].name + ':'
					+ navigator.plugins["Shockwave Flash"].description;
		} catch (err) {
		}
		return flash;
	},
	getReferer : function() {
		return window.location.href;
	},
	getDivce : function() {
		return navigator.userAgent;
	},
	getOperatingSystem : function() {
		if (technology.isPC()) {
			return technology.getPcOS();
		}
		return technology.getMobileOS();
	},
	getIPGL : function() {
		var ipgl = "";
		try {
			ipgl = returnCitySN.cname;
		} catch (err) {
		}
		return ipgl;
	},
	getCurrentPageUrl : function() {
		return window.location.href;
	},
	_isNotEmpty : function(value) {
		if (value != undefined && value != null && value != '') {
			return true;
		}
		return false;
	},
	_isArray : function(array) {
		if (array instanceof Array) {
			return true;
		}
		return false;
	},
	_isArrayNotNull : function(array) {
		if (array != undefined && array != null && array.length > 0) {
			return true;
		}
		return false;
	},
	getCurrentTime : function(){
	    var date = new Date();
	    var seperator1 = "";
	    var seperator2 = "";
	    var seperator3 = "";
	    var month = date.getMonth() + 1;
	    if (month >= 1 && month <= 9) {
	        month = "0" + month;
	    }
	    var strDate = date.getDate();
	    if (strDate >= 0 && strDate <= 9) {
	        strDate = "0" + strDate;
	    }
	    var currentdate = date.getFullYear() + seperator1 + month + seperator1 + strDate
	            + seperator3 + date.getHours() + seperator2 + date.getMinutes()
	            + seperator2 + date.getSeconds();
	    return currentdate;
	},
	calculateSeconds : function(date1, date2) {
		if((date1 instanceof Date) && (date2 instanceof Date)){
			var temp = date2 - date1;
			return Math.round(temp/1000);
		}
		return 0;
	},
	send : function(params, success,error) {
		if (params != undefined) {
			var data = params.data;
			var url = params.url;
			if (url == undefined) {
				return;
			}
			var callback = (params.callback != undefined) ? params.callback : 'saveSessionAndCookieToClient';
			if (this._isNotEmpty(url)) {
				$.ajax({
					type : 'get',
					url : url,
					data : data,
					dataType: 'jsonp',
					//jsonp: 'callback',
					jsonpCallback: callback
				});
			}
		}
	},
	page : {
		techTracking : function() {
			var url = tracking._getTrackingHost() + tracking._initUrl;
			tracking.send({'data' : $.extend(tracking.getCookieAndSession(), tracking.getTechnologyInfo()),	'url' : url});
		},
		listenUnload : function(){
			window.onbeforeunload = function(){
				var url = tracking._getTrackingHost() + tracking._listenUnloadUrl;
				var xhr = new XMLHttpRequest();
				xhr.withCredentials = true;
				var param = "&behaviorData=" + (JSON.stringify(tracking.form._data))
					+ "&idTracking=" + tracking.form._idTracking + "&trackingKey="
					+ tracking.form._data.trackingKey + "&currentPageUrl=" + tracking.getCurrentPageUrl()
					+ "&trackingCode=" + tracking.form._trackingCode + "&Md5Code" + tracking.form._md5_code;;
				xhr.open('POST', url, true);
				xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
				xhr.send(param);
				//clear the fields
				tracking.form._data.fields.length = 0;
			};
		},
		listenOnload : function() {
			$(document).ready(function(){
				var params = {'currentPageUrl' : tracking.getCurrentPageUrl()};
				params = $.extend(params,tracking.getCookieAndSession());
				params = $.extend(params,tracking.getTrackingId());
				params = $.extend(params,tracking.getTrackingCode());
				params = $.extend(params,tracking.getMd5Code());
				var url = tracking._getTrackingHost() + tracking._listenOnloadUrl;
			 	tracking.send({'data' : params,'url' : url});
			});
		}
	},
	form : {
		_idTracking:'',
		_list : [],
		_data : {
			'trackingKey' : '',
			'count_of_pastes' : 0,
			'fill_application_starttime' : new Date(),
			'fill_application_time' : 0,
			'scroll_count' : 0,
			'fields' : []
		},
		_sub_tracking_id : '',
		_trackingCode: '',
		_md5_code: '',
		_paste : 'paste',
		_change : 'change',
		_findData : function(name) {
			if (tracking._isArrayNotNull(tracking.form._data.fields)) {
				for (var i = 0; i < tracking.form._data.fields.length; i++) {
					var dataItem = tracking.form._data.fields[i];
					if (dataItem != undefined && dataItem.field_name == name) {
						return dataItem;
					}
				}
			}
			return null;
		},
		_findComponent : function(id) {
			if (tracking._isArray(tracking.form._list)) {
				for (var i = 0; i < tracking.form._list.length; i++) {
					var item = tracking.form._list[i];
					if (item != undefined && item.id == id) {
						return item;
					}
				}
			}
			return null;
		},
		_create : function(name) {
			var newDataItem = {
				'field_name' : name,
				'count_change' : 0,
				'count_click' : 0,
				'time_start' : tracking.getCurrentTime(),
				'startTime' : new Date(),
				'endTime' : new Date(),
				'fill_each_attr_time' : 0,
				'pasted_values' : [],
				'field_values' : [],
				'click_times' : [],
				'click_start_time' : [],
				'click_end_time' : []
			};
			tracking.form._data.fields.push(newDataItem);
			return newDataItem;
		},
		_getDateItem : function(component){
			var dataItem = tracking.form._findData(component.name);
			if (dataItem == null) {
				dataItem = tracking.form._create(component.name);
			}
			return dataItem;
		},
		clickEvent : function(obj){
			var component = tracking.form._findComponent($(obj).attr('id'));
			var dataItem = tracking.form._getDateItem(component);
			$(obj).click(function(){
				dataItem.count_click = (++dataItem.count_click);
				dataItem.click_times.push(new Date());
			});

			$(obj).mousedown(function(){
				dataItem.click_start_time.push(new Date());
			});

			$(obj).mouseup(function(){
				dataItem.click_end_time.push(new Date());
			});
		},
		listenBehavior : function(list) {
			if (tracking._isArray(list) && tracking._isArrayNotNull(list)) {
				// scroll event
				$(window).scroll(function() {
					++tracking.form._data.scroll_count;
				});
				tracking.form._list = list;
				for (var i = 0; i < list.length; i++) {
					var item = list[i];
					var obj = $('#' + item.id);
					var tagName = document.getElementById(item.id).tagName;
					// onchange event
					$(obj).change(function() {
						var component = tracking.form._findComponent($(this).attr('id'));
						var dataItem = tracking.form._getDateItem(component);
						if (typeof (item.fn) == 'Function') {
							component.fn(this, tracking.form._change);
						} else {
							var originalObj = document.getElementById($(this).attr('id'));
							var changeValue = "";
							if (originalObj != undefined && originalObj.tagName == 'SELECT') {
								var text = $('#' + $(this).attr('id') + ' option:selected').text();
								changeValue = $(this).val()	+ "|" + text;
							} else {
								changeValue = $(this).val();
							}
							dataItem.field_values.push(changeValue);
							dataItem.endTime = new Date();
							dataItem.count_change = (++dataItem.count_change);
							dataItem.fill_each_attr_time = tracking.calculateSeconds(dataItem.startTime,dataItem.endTime);
							tracking.form._data.fill_application_time = tracking.calculateSeconds(tracking.form._data.fill_application_starttime, new Date());
						}
					});
					switch (tagName.toUpperCase()) {
						case 'A':
							tracking.form.clickEvent(obj);
							break;
						case 'DIV':
							tracking.form.clickEvent(obj);
							break;
						case 'INPUT' :
							// keydown event
							$(obj).keydown(function(event) {
								var component = tracking.form._findComponent($(this).attr('id'));
								var dataItem = tracking.form._getDateItem(component);
							});
							// paste event
							$(obj).on("postpaste", function() {
								var component = tracking.form._findComponent($(this).attr('id'));
								var dataItem = tracking.form._getDateItem(component);
								if (typeof (item.fn) == 'Function') {
									component.fn(this, tracking.form._paste);
								} else {
									dataItem.pasted_values.push($(this).val());
									var num = tracking.form._data.count_of_pastes;
									tracking.form._data.count_of_pastes = ++num;
								}
							}).pasteEvents();
							break;
						case 'BUTTON' :
							tracking.form.clickEvent(obj);
							break;
						default :
							alert('no tag name');
							break;
					}
				}
			}
		},
		sendBehaviorDataOld : function(callback,idOrder) {
			var params = {'behaviorData' : JSON.stringify(tracking.form._data),'idOrder':idOrder};
			params = $.extend(params, tracking.getCookieAndSession());
			var url = tracking._getTrackingHost() + tracking._saveBehaviorDataUrl;
			tracking.send({
				'data' : params,
				'url' : url,
				'callback' : callback
			});
		},
		sendBehaviorData : function() {
			var url = tracking._getTrackingHost() + tracking._saveBehaviorDataUrl;
			var param = "&behaviorData=" + (JSON.stringify(tracking.form._data))
				+ "&idTracking=" + tracking.form._idTracking
				+ "&trackingKey=" + tracking.form._data.trackingKey
				+ "&trackingCode=" + tracking.form._trackingCode
				+ "&Md5Code" + tracking.form._md5_code;
			var xhr = new XMLHttpRequest();
			xhr.withCredentials = true;
			xhr.open('POST', url, true);
			xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			xhr.send(param);
		},
		print : function() {
			console.info(JSON.stringify(tracking.form._data));
		},
		bindTracking : function(tracking_code, tracking_id, tracking_key, list, md5code, sub_tracking_id){
			if(!tracking._isNotEmpty(tracking_id) || !tracking._isNotEmpty(tracking_key)
				|| !tracking._isNotEmpty(tracking_code) || !tracking._isNotEmpty(md5code)) {
				alert('empty value with tracking id or tracking key or tracking code or md5code when binding');
				return false;
			}
			// bind listen
			tracking.form.listenBehavior(list);
			// set trackingId
			tracking.form._idTracking = tracking_id;
			// set tracking code
			tracking.form._trackingCode = tracking_code;
			// set tracking code
			tracking.form._md5_code = md5code;
			// set out side tracking data
			if(tracking._isNotEmpty(sub_tracking_id)){
				tracking.form._sub_tracking_id = sub_tracking_id;
			}
			// set tracking key
			tracking.form._data.trackingKey = tracking_key;
			//listen
			if(tracking.ifTechnic == 'Y'){
				tracking.page.techTracking();
			}
			if(tracking.ifUnload == 'Y'){
				tracking.page.listenUnload();
			}
			if(tracking.ifOnload == 'Y' && tracking.ifTechnic == 'N'){
				tracking.page.listenOnload();
			}
		}
	}
}
