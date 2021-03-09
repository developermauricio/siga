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
/******/ 	return __webpack_require__(__webpack_require__.s = "./modules/geolocation/assets/src/js/locations-map-mapbox.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./modules/geolocation/assets/src/js/locations-map-mapbox.js":
/*!*******************************************************************!*\
  !*** ./modules/geolocation/assets/src/js/locations-map-mapbox.js ***!
  \*******************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

eval("(function ($) {\n  DokanGeo.LocationsMaps = {\n    map: null,\n    mapboxId: 'dokan-geolocation-locations-map',\n    items: [],\n    data: {\n      type: 'FeatureCollection',\n      features: []\n    },\n    marker: {\n      image: null,\n      clusterer: null\n    },\n    init: function init() {\n      var self = this;\n      var locations = {\n        longitude: 0,\n        latitude: 0\n      };\n      mapboxgl.accessToken = DokanGeo.mapbox_access_token;\n      self.map = new mapboxgl.Map({\n        container: self.mapboxId,\n        style: 'mapbox://styles/mapbox/streets-v10',\n        center: [DokanGeo.default_geolocation.longitude, DokanGeo.default_geolocation.latitude],\n        zoom: DokanGeo.map_zoom\n      });\n      self.map.addControl(new mapboxgl.NavigationControl());\n      self.items = $('[name=\"dokan_geolocation[]\"]');\n      self.items.each(function (i) {\n        var id = $(this).val(),\n            latitude = $(this).data('latitude'),\n            longitude = $(this).data('longitude'),\n            info = $(this).data('info');\n        var dataItem = {\n          type: 'Feature',\n          properties: {\n            id: 'dokan-geolocation-item-' + i,\n            info: info\n          },\n          geometry: {\n            type: 'Point',\n            coordinates: [longitude, latitude, 0]\n          }\n        };\n        self.data.features.push(dataItem);\n        locations.longitude += longitude;\n        locations.latitude += latitude;\n      });\n\n      if (locations.longitude && locations.latitude) {\n        self.map.setCenter([locations.longitude / self.items.length, locations.latitude / self.items.length]);\n      }\n\n      self.map.on('load', function () {\n        self.loadImages('image', DokanGeo.marker.image);\n        self.loadImages('clusterer', DokanGeo.marker.clusterer);\n      });\n    },\n    loadImages: function loadImages(id, imageURL) {\n      var self = this;\n      self.map.loadImage(imageURL, function (error, image) {\n        if (error) {\n          return;\n        }\n\n        self.marker[id] = image;\n        self.map.addImage('dokan-marker-' + id, image);\n        self.addMapLayers();\n      });\n    },\n    addMapLayers: function addMapLayers() {\n      var self = this;\n\n      if (!self.marker.image || !self.marker.clusterer) {\n        return;\n      }\n\n      self.map.addSource('dokan_geolocation_map_main_data', {\n        type: 'geojson',\n        data: self.data,\n        cluster: true,\n        clusterMaxZoom: 14,\n        // Max zoom to cluster points on\n        clusterRadius: 50 // Radius of each cluster when clustering points (defaults to 50)\n\n      });\n      self.map.addLayer({\n        id: 'clusters',\n        type: 'symbol',\n        source: 'dokan_geolocation_map_main_data',\n        filter: ['has', 'point_count'],\n        layout: {\n          'icon-image': 'dokan-marker-clusterer',\n          \"icon-allow-overlap\": true,\n          \"text-allow-overlap\": true\n        }\n      });\n      self.map.addLayer({\n        id: 'cluster-count',\n        type: 'symbol',\n        source: 'dokan_geolocation_map_main_data',\n        filter: ['has', 'point_count'],\n        layout: {\n          'text-field': '{point_count_abbreviated}',\n          'text-font': ['DIN Offc Pro Medium', 'Arial Unicode MS Bold'],\n          'text-size': 12\n        },\n        paint: {\n          'text-color': 'rgb(253, 218, 206)'\n        }\n      });\n      self.map.addLayer({\n        id: 'unclustered-point',\n        type: 'symbol',\n        source: 'dokan_geolocation_map_main_data',\n        filter: ['!', ['has', 'point_count']],\n        layout: {\n          'icon-image': 'dokan-marker-image',\n          \"icon-allow-overlap\": true,\n          \"text-allow-overlap\": true\n        }\n      });\n      self.map.on('click', 'clusters', function (e) {\n        var renderedFeatures = self.map.queryRenderedFeatures(e.point, {\n          layers: ['clusters']\n        });\n        var clusterId = renderedFeatures[0].properties.cluster_id;\n        var maxZoom = 9;\n        self.map.getSource('dokan_geolocation_map_main_data').getClusterLeaves(clusterId, 255, 0, function (error, features) {\n          if (self.map.getZoom() > maxZoom && features.length > 1) {\n            var html = '<div class=\"white-popup dokan-geo-map-info-windows-in-popup\">',\n                i = 0;\n\n            for (i = 0; i < features.length; i++) {\n              html += self.getInfoWindowContent(features[i].properties.info);\n            }\n\n            html += '</div>';\n            $.magnificPopup.open({\n              items: {\n                type: 'inline',\n                src: html\n              }\n            });\n          } else {\n            self.map.getSource('dokan_geolocation_map_main_data').getClusterExpansionZoom(clusterId, function (err, zoom) {\n              if (!err) {\n                self.map.easeTo({\n                  center: features[0].geometry.coordinates,\n                  zoom: zoom\n                });\n              }\n\n              ;\n            });\n          }\n        });\n      });\n      self.map.on('mouseenter', 'clusters', function () {\n        self.map.getCanvas().style.cursor = 'pointer';\n      });\n      self.map.on('mouseleave', 'clusters', function () {\n        self.map.getCanvas().style.cursor = '';\n      });\n      self.map.on('click', 'unclustered-point', function (e) {\n        var features = self.map.queryRenderedFeatures(e.point, {\n          layers: ['unclustered-point']\n        });\n        var feature = features[0];\n        var info = feature.properties.info;\n\n        if (info) {\n          self.map.easeTo({\n            center: e.lngLat\n          });\n          new mapboxgl.Popup({\n            closeOnClick: true\n          }).setLngLat(e.lngLat).setHTML(self.getInfoWindowContent(info)).setMaxWidth('654px').addTo(self.map);\n        }\n      });\n    },\n    getInfoWindowContent: function getInfoWindowContent(info) {\n      if (typeof info === 'string') {\n        info = JSON.parse(info);\n      }\n\n      var content = DokanGeo.info_window_template,\n          infoProp;\n\n      for (infoProp in info) {\n        content = content.replace('{' + infoProp + '}', info[infoProp]);\n      }\n\n      return content;\n    }\n  };\n\n  if ($('#dokan-geolocation-locations-map').length && DokanGeo.mapbox_access_token) {\n    DokanGeo.LocationsMaps.init();\n  }\n})(jQuery);\n\n//# sourceURL=webpack:///./modules/geolocation/assets/src/js/locations-map-mapbox.js?");

/***/ })

/******/ });