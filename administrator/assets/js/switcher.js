

document.switcher = null;
			window.addEvent('domready', function(){
				toggler = document.id('submenu');
				element = document.id('config-school');
				if (element) {
					document.switcher = new JSwitcher(toggler, element, {cookieName: toggler.getProperty('class')});
				}
			});
window.addEvent('domready', function() {
			$$('.hasTip').each(function(el) {
				var title = el.get('title');
				if (title) {
					var parts = title.split('::', 2);
					el.store('tip:title', parts[0]);
					el.store('tip:text', parts[1]);
				}
			});
			var JTooltips = new Tips($$('.hasTip'), { maxTitleChars: 50, fixed: false});
		});
		window.addEvent('domready', function() {

			SqueezeBox.initialize({});
			SqueezeBox.assign($$('a.modal'), {
				parse: 'rel'
			});
		});
	function jInsertFieldValue(value, id) {
		var old_value = document.id(id).value;
		if (old_value != value) {
			var elem = document.id(id);
			elem.value = value;
			elem.fireEvent("change");
			if (typeof(elem.onchange) === "function") {
				elem.onchange();
			}
			jMediaRefreshPreview(id);
		}
	}
	function jMediaRefreshPreview(id) {
		var value = document.id(id).value;
		var img = document.id(id + "_preview");
		if (img) {
			if (value) {
				img.src = "http://jhc.com:801/" + value;
				document.id(id + "_preview_empty").setStyle("display", "none");
				document.id(id + "_preview_img").setStyle("display", "");
			} else { 
				img.src = ""
				document.id(id + "_preview_empty").setStyle("display", "");
				document.id(id + "_preview_img").setStyle("display", "none");
			} 
		} 
	}
	function jMediaRefreshPreviewTip(tip)
	{
		tip.setStyle("display", "block");
		var img = tip.getElement("img.media-preview");
		var id = img.getProperty("id");
		id = id.substring(0, id.length - "_preview".length);
		jMediaRefreshPreview(id);
	}
window.addEvent('domready', function() {
			$$('.hasTipPreview').each(function(el) {
				var title = el.get('title');
				if (title) {
					var parts = title.split('::', 2);
					el.store('tip:title', parts[0]);
					el.store('tip:text', parts[1]);
				}
			});
			var JTooltips = new Tips($$('.hasTipPreview'), { maxTitleChars: 50, fixed: false, onShow: jMediaRefreshPreviewTip});
		});
window.addEvent('domready', function(){ new Fx.Accordion($$('div#permissions-sliders.pane-sliders .panel h3.pane-toggler'),$$('div#permissions-sliders.pane-sliders .panel div.pane-slider'), {onActive: function(toggler, i) {toggler.addClass('pane-toggler-down');toggler.removeClass('pane-toggler');i.addClass('pane-down');i.removeClass('pane-hide');Cookie.write('jpanesliders_permissions-sliders',$$('div#permissions-sliders.pane-sliders .panel h3').indexOf(toggler));},onBackground: function(toggler, i) {toggler.addClass('pane-toggler');toggler.removeClass('pane-toggler-down');i.addClass('pane-hide');i.removeClass('pane-down');}, duration: 300, display: 0, show: 0, alwaysHide:true, opacity: false}); });
  