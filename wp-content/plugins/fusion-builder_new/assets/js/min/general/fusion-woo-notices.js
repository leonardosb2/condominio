!function(o){"use strict";var e=function(){var e,c,r=0;e=fusion.getAdminbarHeight(),c=o(".fusion-header-wrapper").find("div"),r=0,c.each(function(){"fixed"===o(this).css("position")&&(r=o(this).height())}),o("html, body").stop(),o("html, body").animate({scrollTop:o(".woocommerce-error, .woocommerce-message, .woocommerce-info").offset().top-e-r},500)};o("form.checkout").on("checkout_place_order",function(){if(Boolean(fusionWooNoticesVars.login_required)&&!fusionWooNoticesVars.is_logged_in)return e(),!1}),o(document.body).on("checkout_error avada_checkout_error",function(e,c){var r,n,i=0,s=0,t=0,a="undefined"!=typeof avadaWooCommerceVars?avadaWooCommerceVars.woocommerce_checkout_error:"";o(".fusion-woo-notices-tb .woocommerce-notices-wrapper").length&&(void 0===c&&(c=a),"checkout_error"===e.type?((r=o(c.replace(/<li>/g,'<li class="avada-checkout-error">'))).find("li[data-id]").each(function(){o("#"+o(this).data("id")+"_field").addClass("woocommerce-invalid woocommerce-invalid-required-field")}),1<r.find("li").length&&r.find("li").each(function(){o(this)[0].hasAttribute("data-id")&&(t++,o(this).remove())}),0<t&&r.append('<li class="avada-checkout-error">'+a+"</li>"),i=fusion.getAdminbarHeight(),n=o(".fusion-header-wrapper").find("div"),s=0,n.each(function(){"fixed"===o(this).css("position")&&(s=o(this).height())})):r=o('<ul class="woocommerce-error"><li class="avada-checkout-error">'+c+"</li><ul>"),r.find("li").each(function(){o(this).wrapInner('<span class="wc-notices-text"></span>').prepend(fusionWooNoticesVars.error_icon)}),o(".woocommerce-NoticeGroup-checkout, .woocommerce-error, .woocommerce-message").remove(),o(".fusion-woo-notices-tb .woocommerce-notices-wrapper").prepend(r[0].outerHTML),"checkout_error"===e.type&&(o("html, body").stop(),o("html, body").animate({scrollTop:o(".woocommerce-error").offset().top-i-s},500)))}).on("applied_coupon_in_checkout removed_coupon_in_checkout",function(c,r){var n="applied_coupon_in_checkout"===c.type?"form.checkout_coupon":"form.woocommerce-checkout",i="success",s=o(n).prev(),t=o(".fusion-woo-notices-tb .woocommerce-notices-wrapper");s.hasClass("woocommerce-error")?i="error":s.hasClass("woocommerce-info")&&(i="notice"),t.length&&s.length&&("error"===i?s.find("li").each(function(){o(this).wrapInner('<span class="wc-notices-text"></span>').prepend(fusionWooNoticesVars.error_icon)}):s.wrapInner('<span class="wc-notices-text"></span>').prepend(fusionWooNoticesVars[i+"_icon"]),t.prepend(s),e())}).on("applied_coupon removed_coupon",function(c,r){var n=o(".fusion-woo-notices-tb .woocommerce-notices-wrapper"),i="success";n.find(".woocommerce-error").length?i="error":n.find(".woocommerce-info").length&&(i="notice"),"error"===i?n.find("li").each(function(){o(this).wrapInner('<span class="wc-notices-text"></span>').prepend(fusionWooNoticesVars.error_icon)}):n.find(".woocommerce-message, .woocommerce-info").wrapInner('<span class="wc-notices-text"></span>').prepend(fusionWooNoticesVars[i+"_icon"]),e()})}(jQuery);