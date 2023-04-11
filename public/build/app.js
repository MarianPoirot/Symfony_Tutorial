"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_find_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.find.js */ "./node_modules/core-js/modules/es.array.find.js");
/* harmony import */ var core_js_modules_es_array_find_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_find_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _styles_app_css__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./styles/app.css */ "./assets/styles/app.css");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_3__);


/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)


// Need jQuery? Install it with "yarn add jquery", then uncomment to import it.


/**
 * Simple (ugly) code to handle the comment vote up/down
 */
var $container = jquery__WEBPACK_IMPORTED_MODULE_3___default()('.js-vote-arrows');
$container.find('a').on('click', function (e) {
  e.preventDefault();
  var $link = jquery__WEBPACK_IMPORTED_MODULE_3___default()(e.currentTarget);
  jquery__WEBPACK_IMPORTED_MODULE_3___default().ajax({
    url: '/comments/10/vote/' + $link.data('direction'),
    method: 'POST'
  }).then(function (data) {
    $container.find('.js-vote-total').text(data.votes);
  });
});

/***/ }),

/***/ "./assets/styles/app.css":
/*!*******************************!*\
  !*** ./assets/styles/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_core-js_modules_es_array_find_js-node_modules_core-js_modules_es_object_-87ad5e"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYXBwLmpzIiwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7QUFBQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ0E7O0FBRUE7QUFDMEI7O0FBRTFCO0FBQ3VCOztBQUV2QjtBQUNBO0FBQ0E7QUFDQSxJQUFJQyxVQUFVLEdBQUdELDZDQUFDLENBQUMsaUJBQWlCLENBQUM7QUFDckNDLFVBQVUsQ0FBQ0MsSUFBSSxDQUFDLEdBQUcsQ0FBQyxDQUFDQyxFQUFFLENBQUMsT0FBTyxFQUFFLFVBQVNDLENBQUMsRUFBRTtFQUN6Q0EsQ0FBQyxDQUFDQyxjQUFjLEVBQUU7RUFDbEIsSUFBSUMsS0FBSyxHQUFHTiw2Q0FBQyxDQUFDSSxDQUFDLENBQUNHLGFBQWEsQ0FBQztFQUU5QlAsa0RBQU0sQ0FBQztJQUNIUyxHQUFHLEVBQUUsb0JBQW9CLEdBQUNILEtBQUssQ0FBQ0ksSUFBSSxDQUFDLFdBQVcsQ0FBQztJQUNqREMsTUFBTSxFQUFFO0VBQ1osQ0FBQyxDQUFDLENBQUNDLElBQUksQ0FBQyxVQUFTRixJQUFJLEVBQUU7SUFDbkJULFVBQVUsQ0FBQ0MsSUFBSSxDQUFDLGdCQUFnQixDQUFDLENBQUNXLElBQUksQ0FBQ0gsSUFBSSxDQUFDSSxLQUFLLENBQUM7RUFDdEQsQ0FBQyxDQUFDO0FBQ04sQ0FBQyxDQUFDOzs7Ozs7Ozs7OztBQzNCRiIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2Fzc2V0cy9hcHAuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlcy9hcHAuY3NzPzNmYmEiXSwic291cmNlc0NvbnRlbnQiOlsiLypcbiAqIFdlbGNvbWUgdG8geW91ciBhcHAncyBtYWluIEphdmFTY3JpcHQgZmlsZSFcbiAqXG4gKiBXZSByZWNvbW1lbmQgaW5jbHVkaW5nIHRoZSBidWlsdCB2ZXJzaW9uIG9mIHRoaXMgSmF2YVNjcmlwdCBmaWxlXG4gKiAoYW5kIGl0cyBDU1MgZmlsZSkgaW4geW91ciBiYXNlIGxheW91dCAoYmFzZS5odG1sLnR3aWcpLlxuICovXG5cbi8vIGFueSBDU1MgeW91IGltcG9ydCB3aWxsIG91dHB1dCBpbnRvIGEgc2luZ2xlIGNzcyBmaWxlIChhcHAuY3NzIGluIHRoaXMgY2FzZSlcbmltcG9ydCAnLi9zdHlsZXMvYXBwLmNzcyc7XG5cbi8vIE5lZWQgalF1ZXJ5PyBJbnN0YWxsIGl0IHdpdGggXCJ5YXJuIGFkZCBqcXVlcnlcIiwgdGhlbiB1bmNvbW1lbnQgdG8gaW1wb3J0IGl0LlxuaW1wb3J0ICQgZnJvbSAnanF1ZXJ5JztcblxuLyoqXG4gKiBTaW1wbGUgKHVnbHkpIGNvZGUgdG8gaGFuZGxlIHRoZSBjb21tZW50IHZvdGUgdXAvZG93blxuICovXG52YXIgJGNvbnRhaW5lciA9ICQoJy5qcy12b3RlLWFycm93cycpO1xuJGNvbnRhaW5lci5maW5kKCdhJykub24oJ2NsaWNrJywgZnVuY3Rpb24oZSkge1xuICAgIGUucHJldmVudERlZmF1bHQoKTtcbiAgICB2YXIgJGxpbmsgPSAkKGUuY3VycmVudFRhcmdldCk7XG5cbiAgICAkLmFqYXgoe1xuICAgICAgICB1cmw6ICcvY29tbWVudHMvMTAvdm90ZS8nKyRsaW5rLmRhdGEoJ2RpcmVjdGlvbicpLFxuICAgICAgICBtZXRob2Q6ICdQT1NUJ1xuICAgIH0pLnRoZW4oZnVuY3Rpb24oZGF0YSkge1xuICAgICAgICAkY29udGFpbmVyLmZpbmQoJy5qcy12b3RlLXRvdGFsJykudGV4dChkYXRhLnZvdGVzKTtcbiAgICB9KTtcbn0pO1xuIiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbIiQiLCIkY29udGFpbmVyIiwiZmluZCIsIm9uIiwiZSIsInByZXZlbnREZWZhdWx0IiwiJGxpbmsiLCJjdXJyZW50VGFyZ2V0IiwiYWpheCIsInVybCIsImRhdGEiLCJtZXRob2QiLCJ0aGVuIiwidGV4dCIsInZvdGVzIl0sInNvdXJjZVJvb3QiOiIifQ==