/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "./modules/geolocation/assets/src/js/filters.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./modules/geolocation/assets/src/js/bootstrap-dropdown.js":
/*!*****************************************************************!*\
  !*** ./modules/geolocation/assets/src/js/bootstrap-dropdown.js ***!
  \*****************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("/* ========================================================================\n * Bootstrap: dropdown.js v3.3.7\n * ======================================================================== */\n+function ($) {\n  'use strict'; // DROPDOWN CLASS DEFINITION\n  // =========================\n\n  var backdrop = '.dokan-geo-dropdown-backdrop';\n  var toggle = '[data-toggle=\"dokan-geo-dropdown\"]';\n\n  var Dropdown = function Dropdown(element) {\n    $(element).on('click.dokan.geo.dropdown', this.toggle);\n  };\n\n  Dropdown.VERSION = '3.3.7';\n\n  function getParent($this) {\n    var selector = $this.attr('data-target');\n\n    if (!selector) {\n      selector = $this.attr('href');\n      selector = selector && /#[A-Za-z]/.test(selector) && selector.replace(/.*(?=#[^\\s]*$)/, ''); // strip for ie7\n    }\n\n    var $parent = selector && $(selector);\n    return $parent && $parent.length ? $parent : $this.parent();\n  }\n\n  function clearMenus(e) {\n    if (e && e.which === 3) return;\n    $(backdrop).remove();\n    $(toggle).each(function () {\n      var $this = $(this);\n      var $parent = getParent($this);\n      var relatedTarget = {\n        relatedTarget: this\n      };\n      if (!$parent.hasClass('open')) return;\n      if (e && e.type == 'click' && /input|textarea/i.test(e.target.tagName) && $.contains($parent[0], e.target)) return;\n      $parent.trigger(e = $.Event('hide.dokan.geo.dropdown', relatedTarget));\n      if (e.isDefaultPrevented()) return;\n      $this.attr('aria-expanded', 'false');\n      $parent.removeClass('open').trigger($.Event('hidden.dokan.geo.dropdown', relatedTarget));\n    });\n  }\n\n  Dropdown.prototype.toggle = function (e) {\n    var $this = $(this);\n    if ($this.is('.disabled, :disabled')) return;\n    var $parent = getParent($this);\n    var isActive = $parent.hasClass('open');\n    clearMenus();\n\n    if (!isActive) {\n      if ('ontouchstart' in document.documentElement && !$parent.closest('.navbar-nav').length) {\n        // if mobile we use a backdrop because click events don't delegate\n        $(document.createElement('div')).addClass('dokan-geo-dropdown-backdrop').insertAfter($(this)).on('click', clearMenus);\n      }\n\n      var relatedTarget = {\n        relatedTarget: this\n      };\n      $parent.trigger(e = $.Event('show.dokan.geo.dropdown', relatedTarget));\n      if (e.isDefaultPrevented()) return;\n      $this.trigger('focus').attr('aria-expanded', 'true');\n      $parent.toggleClass('open').trigger($.Event('shown.dokan.geo.dropdown', relatedTarget));\n    }\n\n    return false;\n  };\n\n  Dropdown.prototype.keydown = function (e) {\n    if (!/(38|40|27|32)/.test(e.which) || /input|textarea/i.test(e.target.tagName)) return;\n    var $this = $(this);\n    e.preventDefault();\n    e.stopPropagation();\n    if ($this.is('.disabled, :disabled')) return;\n    var $parent = getParent($this);\n    var isActive = $parent.hasClass('open');\n\n    if (!isActive && e.which != 27 || isActive && e.which == 27) {\n      if (e.which == 27) $parent.find(toggle).trigger('focus');\n      return $this.trigger('click');\n    }\n\n    var desc = ' li:not(.disabled):visible a';\n    var $items = $parent.find('.dokan-geo-dropdown-menu' + desc);\n    if (!$items.length) return;\n    var index = $items.index(e.target);\n    if (e.which == 38 && index > 0) index--; // up\n\n    if (e.which == 40 && index < $items.length - 1) index++; // down\n\n    if (!~index) index = 0;\n    $items.eq(index).trigger('focus');\n  }; // DROPDOWN PLUGIN DEFINITION\n  // ==========================\n\n\n  function Plugin(option) {\n    return this.each(function () {\n      var $this = $(this);\n      var data = $this.data('dokan.geo.dropdown');\n      if (!data) $this.data('dokan.geo.dropdown', data = new Dropdown(this));\n      if (typeof option == 'string') data[option].call($this);\n    });\n  }\n\n  var old = $.fn.dropdown;\n  $.fn.dropdown = Plugin;\n  $.fn.dropdown.Constructor = Dropdown; // DROPDOWN NO CONFLICT\n  // ====================\n\n  $.fn.dropdown.noConflict = function () {\n    $.fn.dropdown = old;\n    return this;\n  }; // APPLY TO STANDARD DROPDOWN ELEMENTS\n  // ===================================\n\n\n  $(document).on('click.dokan.geo.dropdown.data-api', clearMenus).on('click.dokan.geo.dropdown.data-api', '.dokan-geo-dropdown form', function (e) {\n    e.stopPropagation();\n  }).on('click.dokan.geo.dropdown.data-api', toggle, Dropdown.prototype.toggle).on('keydown.dokan.geo.dropdown.data-api', toggle, Dropdown.prototype.keydown).on('keydown.dokan.geo.dropdown.data-api', '.dokan-geo-dropdown-menu', Dropdown.prototype.keydown);\n}(jQuery);\n\n//# sourceURL=webpack:///./modules/geolocation/assets/src/js/bootstrap-dropdown.js?");

/***/ }),

/***/ "./modules/geolocation/assets/src/js/filters.js":
/*!******************************************************!*\
  !*** ./modules/geolocation/assets/src/js/filters.js ***!
  \******************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _less_filters_less__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../less/filters.less */ \"./modules/geolocation/assets/src/less/filters.less\");\n/* harmony import */ var _less_filters_less__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_less_filters_less__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _bootstrap_dropdown__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./bootstrap-dropdown */ \"./modules/geolocation/assets/src/js/bootstrap-dropdown.js\");\n/* harmony import */ var _bootstrap_dropdown__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_bootstrap_dropdown__WEBPACK_IMPORTED_MODULE_1__);\n\n\n/**\n * Dokan Geolocation Module: Filter Form\n */\n\n(function ($) {\n  function GeolocationFilter(form) {\n    this.form = null;\n    this.slider = null;\n    this.slider_value = 0;\n    this.href = '';\n    this.base_url = '';\n    this.queries = {};\n    this.query_params = [];\n    this.scope = null;\n    this.switchable_scope = null;\n    this.display = '';\n    this.s = '';\n    this.do_seller_search = '';\n    this.product_cat = '';\n    this.latitude = 0.00;\n    this.longitude = 0.00;\n    this.address = '';\n    this.distance = 0;\n    this.geocoder = null;\n    this.isStoreCategoryOn = false;\n    this.form = form;\n    this.init();\n  }\n\n  GeolocationFilter.prototype.init = function () {\n    var self = this;\n    self.set_query_params();\n    self.form.on('submit', function (e) {\n      e.preventDefault();\n    });\n    self.display_form();\n    self.s = self.form.find('[name=\"s\"]').val();\n    self.do_seller_search = self.form.find('[name=\"do_seller_search\"]').val();\n    self.latitude = self.form.find('[name=\"latitude\"]').val();\n    self.longitude = self.form.find('[name=\"longitude\"]').val();\n    self.slider = self.form.find('.dokan-range-slider');\n    self.slider_value = self.slider.prev('.dokan-range-slider-value').find('span');\n    self.slider.on('input', function () {\n      self.slider_value.html($(this).val());\n    });\n    self.slider.on('change', function () {\n      self.set_param('distance', $(this).val());\n    });\n    self.form.find('[name=\"s\"], [name=\"do_seller_search\"]').on('blur', function () {\n      self.set_search_term($(this).val());\n    });\n    self.form.find('[name=\"s\"], [name=\"do_seller_search\"]').on('keypress', function (e) {\n      if (13 === e.which) {\n        self.set_search_term($(this).val());\n      }\n    }); // On category page, category is already selected. So, we are setting the product_cat query.\n\n    var product_cats = self.form.find('[name=\"product_cat\"]');\n\n    if (product_cats.val()) {\n      self.queries['product_cat'] = product_cats.val();\n    }\n\n    product_cats.on('change', function () {\n      var category = $(this).val();\n      self.set_param('product_cat', category);\n    });\n    self.form.find('[name=\"store_categories\"]').on('change', function () {\n      var category = $(this).val();\n      self.set_param('store_categories', category);\n    });\n    self.form.find('.dokan-geo-filters-search-btn').on('click', function (e) {\n      e.preventDefault();\n      self.redirect(self.switchable_scope);\n    });\n    self.bind_address_input();\n  };\n\n  GeolocationFilter.prototype.display_form = function () {\n    var self = this;\n    self.form.find('.dokan-geolocation-filters-loading').remove();\n    self.form.find('.dokan-row').removeClass('dokan-hide');\n    self.scope = self.form.data('scope');\n    self.display = self.form.data('display');\n    self.isStoreCategoryOn = self.form.find('#store-category-dropdown').length;\n\n    if ('inline' !== self.display) {\n      self.form.find('.dokan-geo-filters-column').addClass('dokan-w12');\n    } else if ('product' === self.scope) {\n      self.form.find('.dokan-geo-filters-column').addClass('dokan-w4');\n    } else if ('vendor' === self.scope && self.isStoreCategoryOn) {\n      self.form.find('.dokan-geo-filters-column').addClass('dokan-w4');\n    } else if ('vendor' === self.scope) {\n      self.form.find('.dokan-geo-filters-column').addClass('dokan-w6');\n    } else {\n      self.form.find('.dokan-geo-filters-column').addClass('dokan-w3');\n    }\n\n    if (!self.scope) {\n      self.switchable_scope = 'product';\n      self.form.find('[name=\"store_categories\"]').parent().addClass('dokan-hide');\n    }\n\n    var scope_switch = self.form.find('.dokan-geo-filter-scope-switch a'),\n        scope_label = self.form.find('.dokan-geo-filter-scope');\n    scope_switch.on('click', function (e) {\n      e.preventDefault();\n      var scope = $(this).data('switch-scope');\n\n      if ('product' === scope) {\n        self.form.find('[name=\"s\"]').removeClass('dokan-hide');\n        self.form.find('[name=\"do_seller_search\"]').addClass('dokan-hide');\n        self.form.find('.dokan-geo-product-categories').removeClass('dokan-hide');\n        self.form.find('.dokan-geo-filters-column').removeClass('dokan-w4').addClass('dokan-w3');\n        self.form.find('[name=\"store_categories\"]').parent().addClass('dokan-hide');\n      } else {\n        var removeClass = self.isStoreCategoryOn ? 'dokan-w4' : 'dokan-w3';\n        var addClass = self.isStoreCategoryOn ? 'dokan-w3' : 'dokan-w4';\n        self.form.find('[name=\"s\"]').addClass('dokan-hide');\n        self.form.find('[name=\"do_seller_search\"]').removeClass('dokan-hide');\n        self.form.find('.dokan-geo-product-categories').addClass('dokan-hide');\n        self.form.find('.dokan-geo-filters-column').removeClass(removeClass).addClass(addClass);\n        self.form.find('[name=\"store_categories\"]').parent().removeClass('dokan-hide');\n      }\n\n      scope_label.html($(this).html());\n      self.switchable_scope = scope;\n    });\n  };\n\n  GeolocationFilter.prototype.navigatorGetCurrentPosition = function (callback) {\n    var self = this; // Locate button functions\n\n    var locate_btn = self.form.find('.locate-icon'),\n        loader = locate_btn.next();\n\n    if (navigator.geolocation) {\n      locate_btn.removeClass('dokan-hide').on('click', function () {\n        locate_btn.addClass('dokan-hide');\n        loader.removeClass('dokan-hide');\n        navigator.geolocation.getCurrentPosition(function (position) {\n          locate_btn.removeClass('dokan-hide');\n          loader.addClass('dokan-hide');\n          self.latitude = position.coords.latitude;\n          self.longitude = position.coords.longitude;\n          callback();\n        });\n      });\n    }\n  };\n\n  GeolocationFilter.prototype.bind_address_input = function () {\n    if (window.google && google.maps) {\n      this.bind_google_map();\n    } else if ($('[name=\"dokan_mapbox_access_token\"]').val()) {\n      this.bind_mapbox();\n    }\n  };\n\n  GeolocationFilter.prototype.bind_google_map = function () {\n    var self = this;\n    self.geocoder = new google.maps.Geocoder(); // Autocomplete location address\n\n    var address_input = self.form.find('.location-address input'),\n        autocomplete = new google.maps.places.Autocomplete(address_input.get(0));\n    autocomplete.addListener('place_changed', function () {\n      var place = autocomplete.getPlace(),\n          location = place.geometry.location;\n      self.latitude = location.lat();\n      self.longitude = location.lng();\n      self.set_address(place.formatted_address);\n    });\n    self.navigatorGetCurrentPosition(function () {\n      self.geocoder.geocode({\n        location: {\n          lat: self.latitude,\n          lng: self.longitude\n        }\n      }, function (results, status) {\n        var address = '';\n\n        if ('OK' === status) {\n          address = results[0].formatted_address;\n        }\n\n        self.set_address(address);\n        address_input.val(address);\n      });\n    });\n  };\n\n  GeolocationFilter.prototype.bind_mapbox = function () {\n    var self = this;\n    var address_input = self.form.find('.location-address input');\n    var input = address_input.get(0);\n    var suggestions = new Suggestions(input, [], {\n      minLength: 3,\n      limit: 3,\n      hideOnBlur: false\n    });\n\n    suggestions.getItemValue = function (item) {\n      return item.place_name;\n    };\n\n    address_input.on('change', function () {\n      if (suggestions.selected) {\n        var location = suggestions.selected;\n        self.latitude = location.geometry.coordinates[1];\n        self.longitude = location.geometry.coordinates[0];\n        self.set_address(location.place_name);\n      }\n    });\n\n    var address_search = _.debounce(function (search, text) {\n      if (search.cancel) {\n        search.cancel();\n      }\n\n      self.mapboxGetPlaces(text, function (features) {\n        suggestions.update(features);\n      });\n    }, 250);\n\n    address_input.on('input', function () {\n      var input_text = $(this).val();\n      address_search(address_search, input_text);\n    });\n    self.navigatorGetCurrentPosition(function () {\n      self.mapboxGetPlaces({\n        lng: self.longitude,\n        lat: self.latitude\n      }, function (features) {\n        if (features && features.length) {\n          var address = features[0].place_name;\n          self.set_address(address);\n          address_input.val(address);\n        }\n      });\n    });\n  };\n\n  GeolocationFilter.prototype.mapboxGetPlaces = function (search, callback) {\n    if (!search) {\n      return;\n    }\n\n    var url_origin = 'https://api.mapbox.com';\n    var access_token = $('[name=\"dokan_mapbox_access_token\"]').val();\n\n    if (search.lng && search.lat) {\n      search = search.lng + '%2C' + search.lat;\n    }\n\n    var url = url_origin + '/geocoding/v5/mapbox.places/' + search + '.json?access_token=' + access_token + '&cachebuster=' + +new Date() + '&autocomplete=true';\n    $.ajax({\n      url: url,\n      method: 'get'\n    }).done(function (response) {\n      if (response.features && typeof callback === 'function') {\n        callback(response.features);\n      }\n    });\n  };\n\n  GeolocationFilter.prototype.set_search_term = function (s) {\n    this.set_param('s', s);\n    this.set_param('do_seller_search', s);\n  };\n\n  GeolocationFilter.prototype.set_address = function (address) {\n    this.set_param('address', address);\n\n    if (!this.distance) {\n      var distance = 0,\n          slider_val = this.slider.val();\n\n      if (slider_val) {\n        distance = slider_val;\n      } else {\n        var min = parseInt(this.slider.attr('min'), 10),\n            max = parseInt(this.slider.attr('max'), 10);\n        distance = Math.ceil((min + max) / 2);\n      }\n\n      this.set_param('distance', distance);\n    }\n\n    this.set_param('latitude', this.latitude);\n    this.set_param('longitude', this.longitude);\n  };\n\n  GeolocationFilter.prototype.set_query_params = function () {\n    var self = this;\n    self.href = window.location.href;\n    var search = window.location.search;\n    self.base_url = self.href.replace(search, '');\n    search.replace('?', '').split('&').forEach(function (query) {\n      if (!query) {\n        return;\n      }\n\n      query = query.split('=');\n      var param = query[0].toLowerCase(),\n          value = query[1];\n\n      switch (param) {\n        case 'distance':\n          self.distance = parseInt(value, 10);\n          break;\n\n        case 'latitude':\n          self.latitude = parseFloat(value);\n          break;\n\n        case 'longitude':\n          self.longitude = parseFloat(value);\n          break;\n\n        case 'address':\n          self.address = value;\n      }\n\n      if (self.query_params.indexOf(param) < 0) {\n        self.query_params.push(param);\n      }\n\n      self.queries[param] = value;\n    });\n  };\n\n  GeolocationFilter.prototype.set_param = function (param, val) {\n    if (this.query_params.indexOf(param) < 0) {\n      this.query_params.push(param);\n    }\n\n    this[param] = val;\n\n    if (val) {\n      this.queries[param] = val;\n    } else {\n      delete this.queries[param];\n    }\n\n    if (this.scope) {\n      if ('distance' === param && (!this.latitude || !this.longitude)) {\n        return;\n      }\n\n      this.redirect(this.scope);\n    }\n  };\n\n  GeolocationFilter.prototype.redirect = function (scope) {\n    var search = [],\n        param = '';\n\n    for (param in this.queries) {\n      if (['post_type', 'do_seller_search', 's'].indexOf(param) < 0) {\n        if (param === 'distance' && (!this.latitude || !this.longitude)) {\n          continue;\n        }\n\n        search.push(param + '=' + this.queries[param]);\n      }\n    }\n\n    var s = this.s || '',\n        do_seller_search = this.do_seller_search || '',\n        base_url = '';\n\n    if ('product' === scope) {\n      if (s) {\n        search.push('s=' + s);\n      }\n\n      search.push('post_type=product');\n      base_url = this.form.find('[name=\"wc_shop_page\"]').val();\n    } else {\n      if (do_seller_search) {\n        search.push('do_seller_search=' + do_seller_search);\n      }\n\n      base_url = this.form.find('[name=\"dokan_store_listing_page\"]').val();\n    }\n\n    window.location.href = base_url + '?' + search.join('&');\n  };\n\n  $('.dokan-geolocation-location-filters').each(function () {\n    new GeolocationFilter($(this));\n  });\n})(jQuery);\n\n//# sourceURL=webpack:///./modules/geolocation/assets/src/js/filters.js?");

/***/ }),

/***/ "./modules/geolocation/assets/src/less/filters.less":
/*!**********************************************************!*\
  !*** ./modules/geolocation/assets/src/less/filters.less ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

eval("// extracted by mini-css-extract-plugin\n\n//# sourceURL=webpack:///./modules/geolocation/assets/src/less/filters.less?");

/***/ })

/******/ });