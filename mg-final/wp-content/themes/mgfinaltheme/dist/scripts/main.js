!function(i){var n={common:{init:function(){i("input[type='submit']").click(function(){i("form").hide(),i("div.contribute-form").text("Thanks for yoursubmission!")})},finalize:function(){}},home:{init:function(){},finalize:function(){}},about_us:{init:function(){}}},o={fire:function(i,o,t){var e,f=n;o=void 0===o?"init":o,e=""!==i,e=e&&f[i],e=e&&"function"==typeof f[i][o],e&&f[i][o](t)},loadEvents:function(){o.fire("common"),i.each(document.body.className.replace(/-/g,"_").split(/\s+/),function(i,n){o.fire(n),o.fire(n,"finalize")}),o.fire("common","finalize")}};i(document).ready(o.loadEvents)}(jQuery);
//# sourceMappingURL=main.js.map
