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
/******/ 	return __webpack_require__(__webpack_require__.s = "./modules/report-abuse/assets/src/js/admin/main.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./modules/report-abuse/assets/src/js/admin/main.js":
/*!**********************************************************!*\
  !*** ./modules/report-abuse/assets/src/js/admin/main.js ***!
  \**********************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _pages_AbuseReports_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./pages/AbuseReports.vue */ \"./modules/report-abuse/assets/src/js/admin/pages/AbuseReports.vue\");\n\ndokan_add_route(_pages_AbuseReports_vue__WEBPACK_IMPORTED_MODULE_0__[\"default\"]);\n\n//# sourceURL=webpack:///./modules/report-abuse/assets/src/js/admin/main.js?");

/***/ }),

/***/ "./modules/report-abuse/assets/src/js/admin/pages/AbuseReports.vue":
/*!*************************************************************************!*\
  !*** ./modules/report-abuse/assets/src/js/admin/pages/AbuseReports.vue ***!
  \*************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _AbuseReports_vue_vue_type_template_id_27b6196f___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./AbuseReports.vue?vue&type=template&id=27b6196f& */ \"./modules/report-abuse/assets/src/js/admin/pages/AbuseReports.vue?vue&type=template&id=27b6196f&\");\n/* harmony import */ var _AbuseReports_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./AbuseReports.vue?vue&type=script&lang=js& */ \"./modules/report-abuse/assets/src/js/admin/pages/AbuseReports.vue?vue&type=script&lang=js&\");\n/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ \"./node_modules/vue-loader/lib/runtime/componentNormalizer.js\");\n\n\n\n\n\n/* normalize component */\n\nvar component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__[\"default\"])(\n  _AbuseReports_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__[\"default\"],\n  _AbuseReports_vue_vue_type_template_id_27b6196f___WEBPACK_IMPORTED_MODULE_0__[\"render\"],\n  _AbuseReports_vue_vue_type_template_id_27b6196f___WEBPACK_IMPORTED_MODULE_0__[\"staticRenderFns\"],\n  false,\n  null,\n  null,\n  null\n  \n)\n\n/* hot reload */\nif (false) { var api; }\ncomponent.options.__file = \"modules/report-abuse/assets/src/js/admin/pages/AbuseReports.vue\"\n/* harmony default export */ __webpack_exports__[\"default\"] = (component.exports);\n\n//# sourceURL=webpack:///./modules/report-abuse/assets/src/js/admin/pages/AbuseReports.vue?");

/***/ }),

/***/ "./modules/report-abuse/assets/src/js/admin/pages/AbuseReports.vue?vue&type=script&lang=js&":
/*!**************************************************************************************************!*\
  !*** ./modules/report-abuse/assets/src/js/admin/pages/AbuseReports.vue?vue&type=script&lang=js& ***!
  \**************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _node_modules_babel_loader_lib_index_js_node_modules_vue_loader_lib_index_js_vue_loader_options_AbuseReports_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/babel-loader/lib!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./AbuseReports.vue?vue&type=script&lang=js& */ \"./node_modules/babel-loader/lib/index.js!./node_modules/vue-loader/lib/index.js?!./modules/report-abuse/assets/src/js/admin/pages/AbuseReports.vue?vue&type=script&lang=js&\");\n/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__[\"default\"] = (_node_modules_babel_loader_lib_index_js_node_modules_vue_loader_lib_index_js_vue_loader_options_AbuseReports_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__[\"default\"]); \n\n//# sourceURL=webpack:///./modules/report-abuse/assets/src/js/admin/pages/AbuseReports.vue?");

/***/ }),

/***/ "./modules/report-abuse/assets/src/js/admin/pages/AbuseReports.vue?vue&type=template&id=27b6196f&":
/*!********************************************************************************************************!*\
  !*** ./modules/report-abuse/assets/src/js/admin/pages/AbuseReports.vue?vue&type=template&id=27b6196f& ***!
  \********************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AbuseReports_vue_vue_type_template_id_27b6196f___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../../node_modules/vue-loader/lib??vue-loader-options!./AbuseReports.vue?vue&type=template&id=27b6196f& */ \"./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./modules/report-abuse/assets/src/js/admin/pages/AbuseReports.vue?vue&type=template&id=27b6196f&\");\n/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, \"render\", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AbuseReports_vue_vue_type_template_id_27b6196f___WEBPACK_IMPORTED_MODULE_0__[\"render\"]; });\n\n/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, \"staticRenderFns\", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AbuseReports_vue_vue_type_template_id_27b6196f___WEBPACK_IMPORTED_MODULE_0__[\"staticRenderFns\"]; });\n\n\n\n//# sourceURL=webpack:///./modules/report-abuse/assets/src/js/admin/pages/AbuseReports.vue?");

/***/ }),

/***/ "./modules/report-abuse/assets/src/js/components/AbuseReasonsDropdown.vue":
/*!********************************************************************************!*\
  !*** ./modules/report-abuse/assets/src/js/components/AbuseReasonsDropdown.vue ***!
  \********************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _AbuseReasonsDropdown_vue_vue_type_template_id_5146c7f8___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./AbuseReasonsDropdown.vue?vue&type=template&id=5146c7f8& */ \"./modules/report-abuse/assets/src/js/components/AbuseReasonsDropdown.vue?vue&type=template&id=5146c7f8&\");\n/* harmony import */ var _AbuseReasonsDropdown_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./AbuseReasonsDropdown.vue?vue&type=script&lang=js& */ \"./modules/report-abuse/assets/src/js/components/AbuseReasonsDropdown.vue?vue&type=script&lang=js&\");\n/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ \"./node_modules/vue-loader/lib/runtime/componentNormalizer.js\");\n\n\n\n\n\n/* normalize component */\n\nvar component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__[\"default\"])(\n  _AbuseReasonsDropdown_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__[\"default\"],\n  _AbuseReasonsDropdown_vue_vue_type_template_id_5146c7f8___WEBPACK_IMPORTED_MODULE_0__[\"render\"],\n  _AbuseReasonsDropdown_vue_vue_type_template_id_5146c7f8___WEBPACK_IMPORTED_MODULE_0__[\"staticRenderFns\"],\n  false,\n  null,\n  null,\n  null\n  \n)\n\n/* hot reload */\nif (false) { var api; }\ncomponent.options.__file = \"modules/report-abuse/assets/src/js/components/AbuseReasonsDropdown.vue\"\n/* harmony default export */ __webpack_exports__[\"default\"] = (component.exports);\n\n//# sourceURL=webpack:///./modules/report-abuse/assets/src/js/components/AbuseReasonsDropdown.vue?");

/***/ }),

/***/ "./modules/report-abuse/assets/src/js/components/AbuseReasonsDropdown.vue?vue&type=script&lang=js&":
/*!*********************************************************************************************************!*\
  !*** ./modules/report-abuse/assets/src/js/components/AbuseReasonsDropdown.vue?vue&type=script&lang=js& ***!
  \*********************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _node_modules_babel_loader_lib_index_js_node_modules_vue_loader_lib_index_js_vue_loader_options_AbuseReasonsDropdown_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/babel-loader/lib!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./AbuseReasonsDropdown.vue?vue&type=script&lang=js& */ \"./node_modules/babel-loader/lib/index.js!./node_modules/vue-loader/lib/index.js?!./modules/report-abuse/assets/src/js/components/AbuseReasonsDropdown.vue?vue&type=script&lang=js&\");\n/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__[\"default\"] = (_node_modules_babel_loader_lib_index_js_node_modules_vue_loader_lib_index_js_vue_loader_options_AbuseReasonsDropdown_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__[\"default\"]); \n\n//# sourceURL=webpack:///./modules/report-abuse/assets/src/js/components/AbuseReasonsDropdown.vue?");

/***/ }),

/***/ "./modules/report-abuse/assets/src/js/components/AbuseReasonsDropdown.vue?vue&type=template&id=5146c7f8&":
/*!***************************************************************************************************************!*\
  !*** ./modules/report-abuse/assets/src/js/components/AbuseReasonsDropdown.vue?vue&type=template&id=5146c7f8& ***!
  \***************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AbuseReasonsDropdown_vue_vue_type_template_id_5146c7f8___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../../../node_modules/vue-loader/lib??vue-loader-options!./AbuseReasonsDropdown.vue?vue&type=template&id=5146c7f8& */ \"./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./modules/report-abuse/assets/src/js/components/AbuseReasonsDropdown.vue?vue&type=template&id=5146c7f8&\");\n/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, \"render\", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AbuseReasonsDropdown_vue_vue_type_template_id_5146c7f8___WEBPACK_IMPORTED_MODULE_0__[\"render\"]; });\n\n/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, \"staticRenderFns\", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_AbuseReasonsDropdown_vue_vue_type_template_id_5146c7f8___WEBPACK_IMPORTED_MODULE_0__[\"staticRenderFns\"]; });\n\n\n\n//# sourceURL=webpack:///./modules/report-abuse/assets/src/js/components/AbuseReasonsDropdown.vue?");

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js!./node_modules/vue-loader/lib/index.js?!./modules/report-abuse/assets/src/js/admin/pages/AbuseReports.vue?vue&type=script&lang=js&":
/*!************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib!./node_modules/vue-loader/lib??vue-loader-options!./modules/report-abuse/assets/src/js/admin/pages/AbuseReports.vue?vue&type=script&lang=js& ***!
  \************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! jquery */ \"jquery\");\n/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);\n/* harmony import */ var _components_AbuseReasonsDropdown_vue__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../components/AbuseReasonsDropdown.vue */ \"./modules/report-abuse/assets/src/js/components/AbuseReasonsDropdown.vue\");\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n\n\nvar ListTable = dokan_get_lib('ListTable');\nvar Modal = dokan_get_lib('Modal');\nvar Multiselect = dokan_get_lib('Multiselect');\n/* harmony default export */ __webpack_exports__[\"default\"] = ({\n  name: 'AbuseReports',\n  components: {\n    AbuseReasonsDropdown: _components_AbuseReasonsDropdown_vue__WEBPACK_IMPORTED_MODULE_1__[\"default\"],\n    ListTable: ListTable,\n    Modal: Modal,\n    Multiselect: Multiselect\n  },\n  data: function data() {\n    return {\n      columns: {\n        reason: {\n          label: this.__('Reason', 'dokan')\n        },\n        product: {\n          label: this.__('Product', 'dokan')\n        },\n        vendor: {\n          label: this.__('Vendor', 'dokan')\n        },\n        reported_by: {\n          label: this.__('Reported by', 'dokan')\n        },\n        reported_at: {\n          label: this.__('Reported at', 'dokan')\n        }\n      },\n      loading: false,\n      reports: [],\n      actions: [],\n      bulkActions: [{\n        key: 'delete',\n        label: this.__('Delete', 'dokan')\n      }],\n      totalItems: 0,\n      totalPages: 1,\n      perPage: 10,\n      showModal: false,\n      report: {},\n      query: {},\n      filter: {\n        reason: '',\n        vendor_id: 0,\n        product_id: 0\n      }\n    };\n  },\n  computed: {\n    currentPage: function currentPage() {\n      var page = this.$route.query.page || 1;\n      return parseInt(page);\n    },\n    queryFilterReason: function queryFilterReason() {\n      return this.$route.query.reason || '';\n    }\n  },\n  created: function created() {\n    if (this.queryFilterReason) {\n      this.filter.reason = this.queryFilterReason;\n      this.query.reason = this.queryFilterReason;\n    } // @todo: Filter by product and vendor on page load\n\n\n    this.fetchReports();\n  },\n  mounted: function mounted() {\n    var self = this;\n    jquery__WEBPACK_IMPORTED_MODULE_0___default()('#filter-products').selectWoo({\n      ajax: {\n        url: \"\".concat(dokan.rest.root, \"wc/v3/products\"),\n        dataType: 'json',\n        headers: {\n          \"X-WP-Nonce\": dokan.rest.nonce\n        },\n        data: function data(params) {\n          return {\n            search: params.term\n          };\n        },\n        processResults: function processResults(data) {\n          return {\n            results: data.map(function (product) {\n              return {\n                id: product.id,\n                text: product.name\n              };\n            })\n          };\n        }\n      }\n    });\n    jquery__WEBPACK_IMPORTED_MODULE_0___default()('#filter-products').on('select2:select', function (e) {\n      self.filter.product_id = e.params.data.id;\n    });\n    jquery__WEBPACK_IMPORTED_MODULE_0___default()('#filter-vendors').selectWoo({\n      ajax: {\n        url: \"\".concat(dokan.rest.root, \"dokan/v1/stores\"),\n        dataType: 'json',\n        headers: {\n          \"X-WP-Nonce\": dokan.rest.nonce\n        },\n        data: function data(params) {\n          return {\n            search: params.term\n          };\n        },\n        processResults: function processResults(data) {\n          return {\n            results: data.map(function (store) {\n              return {\n                id: store.id,\n                text: store.store_name\n              };\n            })\n          };\n        }\n      }\n    });\n    jquery__WEBPACK_IMPORTED_MODULE_0___default()('#filter-vendors').on('select2:select', function (e) {\n      self.filter.vendor_id = e.params.data.id;\n    });\n  },\n  watch: {\n    '$route.query.page': function $routeQueryPage() {\n      this.fetchReports();\n    },\n    '$route.query.reason': function $routeQueryReason() {\n      this.fetchReports();\n    },\n    '$route.query.product_id': function $routeQueryProduct_id() {\n      this.fetchReports();\n    },\n    '$route.query.vendor_id': function $routeQueryVendor_id() {\n      this.fetchReports();\n    },\n    'filter.reason': function filterReason(reason) {\n      this.query = {};\n\n      if (reason) {\n        this.query = {\n          reason: reason\n        };\n      }\n\n      this.goTo(this.query);\n    },\n    'filter.product_id': function filterProduct_id(product_id) {\n      if (product_id) {\n        this.query.product_id = product_id;\n      } else if (this.query.product_id) {\n        delete this.query.product_id;\n        this.clearSelection('#filter-products');\n      }\n\n      this.goTo(this.query);\n    },\n    'filter.vendor_id': function filterVendor_id(vendor_id) {\n      if (vendor_id) {\n        this.query.vendor_id = vendor_id;\n      } else if (this.query.vendor_id) {\n        delete this.query.vendor_id;\n        this.clearSelection('#filter-vendors');\n      }\n\n      this.goTo(this.query);\n    }\n  },\n  methods: {\n    fetchReports: function fetchReports() {\n      var self = this;\n      self.loading = true;\n\n      if (self.currentPage > 1) {\n        self.query.page = self.currentPage;\n      }\n\n      dokan.api.get('/abuse-reports', self.query).done(function (response, status, xhr) {\n        self.reports = response;\n        self.loading = false;\n        self.updatePagination(xhr);\n      });\n    },\n    updatePagination: function updatePagination(xhr) {\n      this.totalPages = parseInt(xhr.getResponseHeader('X-Dokan-AbuseReports-TotalPages'));\n      this.totalItems = parseInt(xhr.getResponseHeader('X-Dokan-AbuseReports-Total'));\n    },\n    moment: function (_moment) {\n      function moment(_x) {\n        return _moment.apply(this, arguments);\n      }\n\n      moment.toString = function () {\n        return _moment.toString();\n      };\n\n      return moment;\n    }(function (date) {\n      return moment(date);\n    }),\n    goToPage: function goToPage(page) {\n      this.query.page = page;\n      this.goTo(this.query);\n    },\n    goTo: function goTo(query) {\n      this.$router.push({\n        name: 'AbuseReports',\n        query: query\n      });\n    },\n    showReport: function showReport(report) {\n      this.report = report;\n      this.showModal = true;\n    },\n    hideReport: function hideReport() {\n      this.report = {};\n      this.showModal = false;\n    },\n    clearSelection: function clearSelection(element) {\n      jquery__WEBPACK_IMPORTED_MODULE_0___default()(element).val(null).trigger('change');\n    },\n    onBulkAction: function onBulkAction(action, items) {\n      var self = this;\n\n      if (!confirm(this.__('Are you sure you want to delete this report', 'dokan'))) {\n        return;\n      }\n\n      dokan.api.delete('/abuse-reports/batch', {\n        items: items\n      }).done(function (response) {\n        self.fetchReports();\n      });\n    }\n  }\n});\n\n//# sourceURL=webpack:///./modules/report-abuse/assets/src/js/admin/pages/AbuseReports.vue?./node_modules/babel-loader/lib!./node_modules/vue-loader/lib??vue-loader-options");

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js!./node_modules/vue-loader/lib/index.js?!./modules/report-abuse/assets/src/js/components/AbuseReasonsDropdown.vue?vue&type=script&lang=js&":
/*!*******************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib!./node_modules/vue-loader/lib??vue-loader-options!./modules/report-abuse/assets/src/js/components/AbuseReasonsDropdown.vue?vue&type=script&lang=js& ***!
  \*******************************************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n//\n/* harmony default export */ __webpack_exports__[\"default\"] = ({\n  name: 'AbuseReasonsDropdown',\n  props: {\n    value: {\n      type: String,\n      required: true\n    },\n    placeholder: {\n      type: String,\n      required: false,\n      default: ''\n    }\n  },\n  data: function data() {\n    return {\n      abuseReasons: []\n    };\n  },\n  computed: {\n    selectedReason: {\n      get: function get() {\n        var _this = this;\n\n        var reason = this.abuseReasons.filter(function (reason) {\n          return _this.value === reason.value;\n        });\n\n        if (reason.length) {\n          return reason[0].value;\n        }\n\n        return '';\n      },\n      set: function set(reason) {\n        this.$emit('input', reason || '');\n      }\n    },\n    noneText: function noneText() {\n      return this.placeholder || this.__('Select a reason', 'dokan');\n    }\n  },\n  created: function created() {\n    this.fetchAbuseReasons();\n  },\n  methods: {\n    fetchAbuseReasons: function fetchAbuseReasons() {\n      var self = this;\n      dokan.api.get('/abuse-reports/abuse-reasons').done(function (response) {\n        self.abuseReasons = response;\n      });\n    }\n  }\n});\n\n//# sourceURL=webpack:///./modules/report-abuse/assets/src/js/components/AbuseReasonsDropdown.vue?./node_modules/babel-loader/lib!./node_modules/vue-loader/lib??vue-loader-options");

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./modules/report-abuse/assets/src/js/admin/pages/AbuseReports.vue?vue&type=template&id=27b6196f&":
/*!**************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./modules/report-abuse/assets/src/js/admin/pages/AbuseReports.vue?vue&type=template&id=27b6196f& ***!
  \**************************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"render\", function() { return render; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"staticRenderFns\", function() { return staticRenderFns; });\nvar render = function() {\n  var _vm = this\n  var _h = _vm.$createElement\n  var _c = _vm._self._c || _h\n  return _c(\n    \"div\",\n    [\n      _c(\"h1\", { staticClass: \"wp-heading-inline\" }, [\n        _vm._v(_vm._s(_vm.__(\"Abuse Reports\", \"dokan\")))\n      ]),\n      _vm._v(\" \"),\n      _c(\"hr\", { staticClass: \"wp-header-end\" }),\n      _vm._v(\" \"),\n      _c(\n        \"list-table\",\n        {\n          attrs: {\n            columns: _vm.columns,\n            loading: _vm.loading,\n            rows: _vm.reports,\n            actions: _vm.actions,\n            \"bulk-actions\": _vm.bulkActions,\n            \"total-items\": _vm.totalItems,\n            \"total-pages\": _vm.totalPages,\n            \"per-page\": _vm.perPage,\n            \"current-page\": _vm.currentPage,\n            text: _vm.$root.listTableTexts()\n          },\n          on: { pagination: _vm.goToPage, \"bulk:click\": _vm.onBulkAction },\n          scopedSlots: _vm._u([\n            {\n              key: \"reason\",\n              fn: function(ref) {\n                var row = ref.row\n                return [\n                  _c(\"strong\", [\n                    _c(\n                      \"a\",\n                      {\n                        attrs: { href: \"#view-report\" },\n                        on: {\n                          click: function($event) {\n                            $event.preventDefault()\n                            return _vm.showReport(row)\n                          }\n                        }\n                      },\n                      [_vm._v(_vm._s(row.reason))]\n                    )\n                  ])\n                ]\n              }\n            },\n            {\n              key: \"product\",\n              fn: function(ref) {\n                var row = ref.row\n                return [\n                  _c(\"a\", { attrs: { href: row.product.admin_url } }, [\n                    _vm._v(_vm._s(row.product.title))\n                  ])\n                ]\n              }\n            },\n            {\n              key: \"vendor\",\n              fn: function(ref) {\n                var row = ref.row\n                return [\n                  _c(\n                    \"router-link\",\n                    { attrs: { to: \"/vendors/\" + row.vendor.id } },\n                    [\n                      _vm._v(\n                        \"\\n                \" +\n                          _vm._s(\n                            row.vendor.name\n                              ? row.vendor.name\n                              : _vm.__(\"(no name)\", \"dokan\")\n                          ) +\n                          \"\\n            \"\n                      )\n                    ]\n                  )\n                ]\n              }\n            },\n            {\n              key: \"reported_by\",\n              fn: function(ref) {\n                var row = ref.row\n                return [\n                  row.reported_by.admin_url\n                    ? _c(\"a\", {\n                        attrs: {\n                          href: row.reported_by.admin_url,\n                          target: \"_blank\"\n                        },\n                        domProps: { textContent: _vm._s(row.reported_by.name) }\n                      })\n                    : [\n                        _vm._v(\n                          \"\\n                \" +\n                            _vm._s(row.reported_by.name) +\n                            \" <\" +\n                            _vm._s(row.reported_by.email) +\n                            \">\\n            \"\n                        )\n                      ]\n                ]\n              }\n            },\n            {\n              key: \"reported_at\",\n              fn: function(ref) {\n                var row = ref.row\n                return [\n                  _vm._v(\n                    \"\\n            \" +\n                      _vm._s(\n                        _vm\n                          .moment(row.reported_at)\n                          .format(\"MMM D, YYYY h:mm:ss a\")\n                      ) +\n                      \"\\n        \"\n                  )\n                ]\n              }\n            }\n          ])\n        },\n        [\n          _vm._v(\" \"),\n          _vm._v(\" \"),\n          _vm._v(\" \"),\n          _vm._v(\" \"),\n          _vm._v(\" \"),\n          _c(\n            \"template\",\n            { slot: \"filters\" },\n            [\n              _c(\"abuse-reasons-dropdown\", {\n                attrs: {\n                  placeholder: _vm.__(\"Filter by abuse reason\", \"dokan\")\n                },\n                model: {\n                  value: _vm.filter.reason,\n                  callback: function($$v) {\n                    _vm.$set(_vm.filter, \"reason\", $$v)\n                  },\n                  expression: \"filter.reason\"\n                }\n              }),\n              _vm._v(\" \"),\n              _vm.filter.reason\n                ? _c(\n                    \"button\",\n                    {\n                      staticClass: \"button\",\n                      attrs: { type: \"button\" },\n                      on: {\n                        click: function($event) {\n                          _vm.filter.reason = \"\"\n                        }\n                      }\n                    },\n                    [_vm._v(\"×\")]\n                  )\n                : _vm._e(),\n              _vm._v(\" \"),\n              _c(\"select\", {\n                staticStyle: { width: \"190px\" },\n                attrs: {\n                  id: \"filter-products\",\n                  \"data-placeholder\": _vm.__(\"Filter by product\", \"dokan\")\n                }\n              }),\n              _vm._v(\" \"),\n              _vm.filter.product_id\n                ? _c(\n                    \"button\",\n                    {\n                      staticClass: \"button\",\n                      attrs: { type: \"button\" },\n                      on: {\n                        click: function($event) {\n                          _vm.filter.product_id = 0\n                        }\n                      }\n                    },\n                    [_vm._v(\"×\")]\n                  )\n                : _vm._e(),\n              _vm._v(\" \"),\n              _c(\"select\", {\n                staticStyle: { width: \"190px\" },\n                attrs: {\n                  id: \"filter-vendors\",\n                  \"data-placeholder\": _vm.__(\"Filter by vendor\", \"dokan\")\n                }\n              }),\n              _vm._v(\" \"),\n              _vm.filter.vendor_id\n                ? _c(\n                    \"button\",\n                    {\n                      staticClass: \"button\",\n                      attrs: { type: \"button\" },\n                      on: {\n                        click: function($event) {\n                          _vm.filter.vendor_id = 0\n                        }\n                      }\n                    },\n                    [_vm._v(\"×\")]\n                  )\n                : _vm._e()\n            ],\n            1\n          )\n        ],\n        2\n      ),\n      _vm._v(\" \"),\n      _vm.showModal\n        ? _c(\n            \"modal\",\n            {\n              attrs: {\n                title: _vm.__(\"Product Abuse Report\", \"dokan\"),\n                footer: false\n              },\n              on: { close: _vm.hideReport }\n            },\n            [\n              _c(\"template\", { slot: \"body\" }, [\n                _c(\"p\", { staticStyle: { \"margin-top\": \"0\" } }, [\n                  _c(\"strong\", [\n                    _vm._v(_vm._s(_vm.__(\"Reported Product\", \"dokan\")) + \":\")\n                  ]),\n                  _vm._v(\" \"),\n                  _c(\"a\", { attrs: { href: _vm.report.product.admin_url } }, [\n                    _vm._v(_vm._s(_vm.report.product.title))\n                  ])\n                ]),\n                _vm._v(\" \"),\n                _c(\"p\", [\n                  _c(\"strong\", [\n                    _vm._v(_vm._s(_vm.__(\"Reason\", \"dokan\")) + \":\")\n                  ]),\n                  _vm._v(\" \" + _vm._s(_vm.report.reason))\n                ]),\n                _vm._v(\" \"),\n                _c(\"p\", [\n                  _c(\"strong\", [\n                    _vm._v(_vm._s(_vm.__(\"Description\", \"dokan\")) + \":\")\n                  ]),\n                  _vm._v(\" \" + _vm._s(_vm.report.description || \"―\"))\n                ]),\n                _vm._v(\" \"),\n                _c(\n                  \"p\",\n                  [\n                    _c(\"strong\", [\n                      _vm._v(_vm._s(_vm.__(\"Reported by\", \"dokan\")) + \":\")\n                    ]),\n                    _vm._v(\" \"),\n                    _vm.report.reported_by.admin_url\n                      ? _c(\"a\", {\n                          attrs: {\n                            href: _vm.report.reported_by.admin_url,\n                            target: \"_blank\"\n                          },\n                          domProps: {\n                            textContent: _vm._s(_vm.report.reported_by.name)\n                          }\n                        })\n                      : [\n                          _vm._v(\n                            \"\\n                    \" +\n                              _vm._s(_vm.report.reported_by.name) +\n                              \" <\" +\n                              _vm._s(_vm.report.reported_by.email) +\n                              \">\\n                \"\n                          )\n                        ]\n                  ],\n                  2\n                ),\n                _vm._v(\" \"),\n                _c(\"p\", [\n                  _c(\"strong\", [\n                    _vm._v(_vm._s(_vm.__(\"Reported At\", \"dokan\")) + \":\")\n                  ]),\n                  _vm._v(\n                    \" \" +\n                      _vm._s(\n                        _vm\n                          .moment(_vm.report.reported_at)\n                          .format(\"MMM D, YYYY h:mm:ss a\")\n                      )\n                  )\n                ]),\n                _vm._v(\" \"),\n                _c(\n                  \"p\",\n                  [\n                    _c(\"strong\", [\n                      _vm._v(_vm._s(_vm.__(\"Product Vendor\", \"dokan\")) + \":\")\n                    ]),\n                    _vm._v(\" \"),\n                    _vm.report.vendor.admin_url\n                      ? _c(\"a\", {\n                          attrs: { href: _vm.report.vendor.admin_url },\n                          domProps: {\n                            textContent: _vm._s(_vm.report.vendor.name)\n                          }\n                        })\n                      : [\n                          _vm._v(\n                            \"\\n                    \" +\n                              _vm._s(_vm.report.reported_by.name) +\n                              \" <\" +\n                              _vm._s(_vm.report.reported_by.email) +\n                              \">\\n                \"\n                          )\n                        ]\n                  ],\n                  2\n                )\n              ])\n            ],\n            2\n          )\n        : _vm._e()\n    ],\n    1\n  )\n}\nvar staticRenderFns = []\nrender._withStripped = true\n\n\n\n//# sourceURL=webpack:///./modules/report-abuse/assets/src/js/admin/pages/AbuseReports.vue?./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options");

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./modules/report-abuse/assets/src/js/components/AbuseReasonsDropdown.vue?vue&type=template&id=5146c7f8&":
/*!*********************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./modules/report-abuse/assets/src/js/components/AbuseReasonsDropdown.vue?vue&type=template&id=5146c7f8& ***!
  \*********************************************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"render\", function() { return render; });\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"staticRenderFns\", function() { return staticRenderFns; });\nvar render = function() {\n  var _vm = this\n  var _h = _vm.$createElement\n  var _c = _vm._self._c || _h\n  return _c(\n    \"select\",\n    {\n      directives: [\n        {\n          name: \"model\",\n          rawName: \"v-model\",\n          value: _vm.selectedReason,\n          expression: \"selectedReason\"\n        }\n      ],\n      on: {\n        change: function($event) {\n          var $$selectedVal = Array.prototype.filter\n            .call($event.target.options, function(o) {\n              return o.selected\n            })\n            .map(function(o) {\n              var val = \"_value\" in o ? o._value : o.value\n              return val\n            })\n          _vm.selectedReason = $event.target.multiple\n            ? $$selectedVal\n            : $$selectedVal[0]\n        }\n      }\n    },\n    [\n      _c(\"option\", { attrs: { value: \"\" } }, [_vm._v(_vm._s(_vm.noneText))]),\n      _vm._v(\" \"),\n      _vm._l(_vm.abuseReasons, function(reason) {\n        return _c(\"option\", {\n          key: reason.id,\n          domProps: { textContent: _vm._s(reason.value) }\n        })\n      })\n    ],\n    2\n  )\n}\nvar staticRenderFns = []\nrender._withStripped = true\n\n\n\n//# sourceURL=webpack:///./modules/report-abuse/assets/src/js/components/AbuseReasonsDropdown.vue?./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options");

/***/ }),

/***/ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js":
/*!********************************************************************!*\
  !*** ./node_modules/vue-loader/lib/runtime/componentNormalizer.js ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, \"default\", function() { return normalizeComponent; });\n/* globals __VUE_SSR_CONTEXT__ */\n\n// IMPORTANT: Do NOT use ES2015 features in this file (except for modules).\n// This module is a runtime utility for cleaner component module output and will\n// be included in the final webpack user bundle.\n\nfunction normalizeComponent (\n  scriptExports,\n  render,\n  staticRenderFns,\n  functionalTemplate,\n  injectStyles,\n  scopeId,\n  moduleIdentifier, /* server only */\n  shadowMode /* vue-cli only */\n) {\n  // Vue.extend constructor export interop\n  var options = typeof scriptExports === 'function'\n    ? scriptExports.options\n    : scriptExports\n\n  // render functions\n  if (render) {\n    options.render = render\n    options.staticRenderFns = staticRenderFns\n    options._compiled = true\n  }\n\n  // functional template\n  if (functionalTemplate) {\n    options.functional = true\n  }\n\n  // scopedId\n  if (scopeId) {\n    options._scopeId = 'data-v-' + scopeId\n  }\n\n  var hook\n  if (moduleIdentifier) { // server build\n    hook = function (context) {\n      // 2.3 injection\n      context =\n        context || // cached call\n        (this.$vnode && this.$vnode.ssrContext) || // stateful\n        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional\n      // 2.2 with runInNewContext: true\n      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {\n        context = __VUE_SSR_CONTEXT__\n      }\n      // inject component styles\n      if (injectStyles) {\n        injectStyles.call(this, context)\n      }\n      // register component module identifier for async chunk inferrence\n      if (context && context._registeredComponents) {\n        context._registeredComponents.add(moduleIdentifier)\n      }\n    }\n    // used by ssr in case component is cached and beforeCreate\n    // never gets called\n    options._ssrRegister = hook\n  } else if (injectStyles) {\n    hook = shadowMode\n      ? function () {\n        injectStyles.call(\n          this,\n          (options.functional ? this.parent : this).$root.$options.shadowRoot\n        )\n      }\n      : injectStyles\n  }\n\n  if (hook) {\n    if (options.functional) {\n      // for template-only hot-reload because in that case the render fn doesn't\n      // go through the normalizer\n      options._injectStyles = hook\n      // register for functional component in vue file\n      var originalRender = options.render\n      options.render = function renderWithStyleInjection (h, context) {\n        hook.call(context)\n        return originalRender(h, context)\n      }\n    } else {\n      // inject component registration as beforeCreate hook\n      var existing = options.beforeCreate\n      options.beforeCreate = existing\n        ? [].concat(existing, hook)\n        : [hook]\n    }\n  }\n\n  return {\n    exports: scriptExports,\n    options: options\n  }\n}\n\n\n//# sourceURL=webpack:///./node_modules/vue-loader/lib/runtime/componentNormalizer.js?");

/***/ }),

/***/ "jquery":
/*!*************************!*\
  !*** external "jQuery" ***!
  \*************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("module.exports = jQuery;\n\n//# sourceURL=webpack:///external_%22jQuery%22?");

/***/ })

/******/ });