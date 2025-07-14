"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["app"],{

/***/ "./assets/app.js":
/*!***********************!*\
  !*** ./assets/app.js ***!
  \***********************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! core-js/modules/es.array.for-each.js */ "./node_modules/core-js/modules/es.array.for-each.js");
/* harmony import */ var core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_array_for_each_js__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! core-js/modules/es.object.to-string.js */ "./node_modules/core-js/modules/es.object.to-string.js");
/* harmony import */ var core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_es_object_to_string_js__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var core_js_modules_esnext_iterator_constructor_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! core-js/modules/esnext.iterator.constructor.js */ "./node_modules/core-js/modules/esnext.iterator.constructor.js");
/* harmony import */ var core_js_modules_esnext_iterator_constructor_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_esnext_iterator_constructor_js__WEBPACK_IMPORTED_MODULE_2__);
/* harmony import */ var core_js_modules_esnext_iterator_for_each_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! core-js/modules/esnext.iterator.for-each.js */ "./node_modules/core-js/modules/esnext.iterator.for-each.js");
/* harmony import */ var core_js_modules_esnext_iterator_for_each_js__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_esnext_iterator_for_each_js__WEBPACK_IMPORTED_MODULE_3__);
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! core-js/modules/web.dom-collections.for-each.js */ "./node_modules/core-js/modules/web.dom-collections.for-each.js");
/* harmony import */ var core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_4___default = /*#__PURE__*/__webpack_require__.n(core_js_modules_web_dom_collections_for_each_js__WEBPACK_IMPORTED_MODULE_4__);
/* harmony import */ var _fortawesome_fontawesome_free_js_all_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! @fortawesome/fontawesome-free/js/all.js */ "./node_modules/@fortawesome/fontawesome-free/js/all.js");
/* harmony import */ var _fortawesome_fontawesome_free_js_all_js__WEBPACK_IMPORTED_MODULE_5___default = /*#__PURE__*/__webpack_require__.n(_fortawesome_fontawesome_free_js_all_js__WEBPACK_IMPORTED_MODULE_5__);
/* harmony import */ var _fortawesome_fontawesome_free_css_all_min_css__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @fortawesome/fontawesome-free/css/all.min.css */ "./node_modules/@fortawesome/fontawesome-free/css/all.min.css");
/* harmony import */ var _styles_app_scss__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./styles/app.scss */ "./assets/styles/app.scss");





/*
 * Welcome to your app's main JavaScript file!
 *
 * This file will be included onto the page via the importmap() Twig function,
 * which should already be in your base.html.twig.
 */



console.log('This log comes from assets/app.js - welcome to AssetMapper! 🎉');
document.addEventListener('DOMContentLoaded', function () {
  var burger = document.getElementById('burger');
  var navLinks = document.getElementById('nav-links');
  burger.addEventListener('click', function () {
    navLinks.classList.toggle('active');
    burger.classList.toggle('open');
  });
});
document.addEventListener('DOMContentLoaded', function () {
  var stars = document.querySelectorAll('.rating-stars .star-btn');
  var noteInput = document.getElementById('note-value');
  var form = document.getElementById('note-form');
  var selectedValue = 0;
  stars.forEach(function (star, index) {
    var value = index + 1;
    star.addEventListener('mouseenter', function () {
      highlightStars(value);
    });
    star.addEventListener('mouseleave', function () {
      highlightStars(selectedValue);
    });
    star.addEventListener('click', function () {
      selectedValue = value;
      noteInput.value = value;
      highlightStars(value);
      form.submit();
    });
  });
  function highlightStars(value) {
    stars.forEach(function (star, index) {
      if (index < value) {
        star.classList.add('selected');
      } else {
        star.classList.remove('selected');
      }
    });
  }
});

/***/ }),

/***/ "./assets/styles/app.scss":
/*!********************************!*\
  !*** ./assets/styles/app.scss ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_fortawesome_fontawesome-free_js_all_js-node_modules_fortawesome_fontawes-52a7bc"], () => (__webpack_exec__("./assets/app.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYXBwLmpzIiwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ2lEO0FBQ007QUFDNUI7QUFFM0JBLE9BQU8sQ0FBQ0MsR0FBRyxDQUFDLGdFQUFnRSxDQUFDO0FBRzdFQyxRQUFRLENBQUNDLGdCQUFnQixDQUFDLGtCQUFrQixFQUFFLFlBQVk7RUFDdEQsSUFBTUMsTUFBTSxHQUFHRixRQUFRLENBQUNHLGNBQWMsQ0FBQyxRQUFRLENBQUM7RUFDaEQsSUFBTUMsUUFBUSxHQUFHSixRQUFRLENBQUNHLGNBQWMsQ0FBQyxXQUFXLENBQUM7RUFFckRELE1BQU0sQ0FBQ0QsZ0JBQWdCLENBQUMsT0FBTyxFQUFFLFlBQU07SUFDbkNHLFFBQVEsQ0FBQ0MsU0FBUyxDQUFDQyxNQUFNLENBQUMsUUFBUSxDQUFDO0lBQ25DSixNQUFNLENBQUNHLFNBQVMsQ0FBQ0MsTUFBTSxDQUFDLE1BQU0sQ0FBQztFQUNuQyxDQUFDLENBQUM7QUFDTixDQUFDLENBQUM7QUFHRk4sUUFBUSxDQUFDQyxnQkFBZ0IsQ0FBQyxrQkFBa0IsRUFBRSxZQUFNO0VBQ2hELElBQU1NLEtBQUssR0FBR1AsUUFBUSxDQUFDUSxnQkFBZ0IsQ0FBQyx5QkFBeUIsQ0FBQztFQUNsRSxJQUFNQyxTQUFTLEdBQUdULFFBQVEsQ0FBQ0csY0FBYyxDQUFDLFlBQVksQ0FBQztFQUN2RCxJQUFNTyxJQUFJLEdBQUdWLFFBQVEsQ0FBQ0csY0FBYyxDQUFDLFdBQVcsQ0FBQztFQUVqRCxJQUFJUSxhQUFhLEdBQUcsQ0FBQztFQUVyQkosS0FBSyxDQUFDSyxPQUFPLENBQUMsVUFBQ0MsSUFBSSxFQUFFQyxLQUFLLEVBQUs7SUFDM0IsSUFBTUMsS0FBSyxHQUFHRCxLQUFLLEdBQUcsQ0FBQztJQUV2QkQsSUFBSSxDQUFDWixnQkFBZ0IsQ0FBQyxZQUFZLEVBQUUsWUFBTTtNQUN0Q2UsY0FBYyxDQUFDRCxLQUFLLENBQUM7SUFDekIsQ0FBQyxDQUFDO0lBRUZGLElBQUksQ0FBQ1osZ0JBQWdCLENBQUMsWUFBWSxFQUFFLFlBQU07TUFDdENlLGNBQWMsQ0FBQ0wsYUFBYSxDQUFDO0lBQ2pDLENBQUMsQ0FBQztJQUVGRSxJQUFJLENBQUNaLGdCQUFnQixDQUFDLE9BQU8sRUFBRSxZQUFNO01BQ2pDVSxhQUFhLEdBQUdJLEtBQUs7TUFDckJOLFNBQVMsQ0FBQ00sS0FBSyxHQUFHQSxLQUFLO01BQ3ZCQyxjQUFjLENBQUNELEtBQUssQ0FBQztNQUNyQkwsSUFBSSxDQUFDTyxNQUFNLENBQUMsQ0FBQztJQUNqQixDQUFDLENBQUM7RUFDTixDQUFDLENBQUM7RUFFRixTQUFTRCxjQUFjQSxDQUFDRCxLQUFLLEVBQUU7SUFDM0JSLEtBQUssQ0FBQ0ssT0FBTyxDQUFDLFVBQUNDLElBQUksRUFBRUMsS0FBSyxFQUFLO01BQzNCLElBQUlBLEtBQUssR0FBR0MsS0FBSyxFQUFFO1FBQ2ZGLElBQUksQ0FBQ1IsU0FBUyxDQUFDYSxHQUFHLENBQUMsVUFBVSxDQUFDO01BQ2xDLENBQUMsTUFBTTtRQUNITCxJQUFJLENBQUNSLFNBQVMsQ0FBQ2MsTUFBTSxDQUFDLFVBQVUsQ0FBQztNQUNyQztJQUNKLENBQUMsQ0FBQztFQUNOO0FBQ0osQ0FBQyxDQUFDLEM7Ozs7Ozs7Ozs7O0FDM0RGIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vYXNzZXRzL2FwcC5qcyIsIndlYnBhY2s6Ly8vLi9hc3NldHMvc3R5bGVzL2FwcC5zY3NzIl0sInNvdXJjZXNDb250ZW50IjpbIi8qXHJcbiAqIFdlbGNvbWUgdG8geW91ciBhcHAncyBtYWluIEphdmFTY3JpcHQgZmlsZSFcclxuICpcclxuICogVGhpcyBmaWxlIHdpbGwgYmUgaW5jbHVkZWQgb250byB0aGUgcGFnZSB2aWEgdGhlIGltcG9ydG1hcCgpIFR3aWcgZnVuY3Rpb24sXHJcbiAqIHdoaWNoIHNob3VsZCBhbHJlYWR5IGJlIGluIHlvdXIgYmFzZS5odG1sLnR3aWcuXHJcbiAqL1xyXG5pbXBvcnQgJ0Bmb3J0YXdlc29tZS9mb250YXdlc29tZS1mcmVlL2pzL2FsbC5qcyc7XHJcbmltcG9ydCAnQGZvcnRhd2Vzb21lL2ZvbnRhd2Vzb21lLWZyZWUvY3NzL2FsbC5taW4uY3NzJztcclxuaW1wb3J0ICcuL3N0eWxlcy9hcHAuc2Nzcyc7XHJcblxyXG5jb25zb2xlLmxvZygnVGhpcyBsb2cgY29tZXMgZnJvbSBhc3NldHMvYXBwLmpzIC0gd2VsY29tZSB0byBBc3NldE1hcHBlciEg8J+OiScpO1xyXG5cclxuXHJcbmRvY3VtZW50LmFkZEV2ZW50TGlzdGVuZXIoJ0RPTUNvbnRlbnRMb2FkZWQnLCBmdW5jdGlvbiAoKSB7XHJcbiAgICBjb25zdCBidXJnZXIgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnYnVyZ2VyJyk7XHJcbiAgICBjb25zdCBuYXZMaW5rcyA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCduYXYtbGlua3MnKTtcclxuXHJcbiAgICBidXJnZXIuYWRkRXZlbnRMaXN0ZW5lcignY2xpY2snLCAoKSA9PiB7XHJcbiAgICAgICAgbmF2TGlua3MuY2xhc3NMaXN0LnRvZ2dsZSgnYWN0aXZlJyk7XHJcbiAgICAgICAgYnVyZ2VyLmNsYXNzTGlzdC50b2dnbGUoJ29wZW4nKTtcclxuICAgIH0pO1xyXG59KTtcclxuXHJcblxyXG5kb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCdET01Db250ZW50TG9hZGVkJywgKCkgPT4ge1xyXG4gICAgY29uc3Qgc3RhcnMgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yQWxsKCcucmF0aW5nLXN0YXJzIC5zdGFyLWJ0bicpO1xyXG4gICAgY29uc3Qgbm90ZUlucHV0ID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ25vdGUtdmFsdWUnKTtcclxuICAgIGNvbnN0IGZvcm0gPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbm90ZS1mb3JtJyk7XHJcblxyXG4gICAgbGV0IHNlbGVjdGVkVmFsdWUgPSAwO1xyXG5cclxuICAgIHN0YXJzLmZvckVhY2goKHN0YXIsIGluZGV4KSA9PiB7XHJcbiAgICAgICAgY29uc3QgdmFsdWUgPSBpbmRleCArIDE7XHJcblxyXG4gICAgICAgIHN0YXIuYWRkRXZlbnRMaXN0ZW5lcignbW91c2VlbnRlcicsICgpID0+IHtcclxuICAgICAgICAgICAgaGlnaGxpZ2h0U3RhcnModmFsdWUpO1xyXG4gICAgICAgIH0pO1xyXG5cclxuICAgICAgICBzdGFyLmFkZEV2ZW50TGlzdGVuZXIoJ21vdXNlbGVhdmUnLCAoKSA9PiB7XHJcbiAgICAgICAgICAgIGhpZ2hsaWdodFN0YXJzKHNlbGVjdGVkVmFsdWUpO1xyXG4gICAgICAgIH0pO1xyXG5cclxuICAgICAgICBzdGFyLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKCkgPT4ge1xyXG4gICAgICAgICAgICBzZWxlY3RlZFZhbHVlID0gdmFsdWU7XHJcbiAgICAgICAgICAgIG5vdGVJbnB1dC52YWx1ZSA9IHZhbHVlO1xyXG4gICAgICAgICAgICBoaWdobGlnaHRTdGFycyh2YWx1ZSk7XHJcbiAgICAgICAgICAgIGZvcm0uc3VibWl0KCk7XHJcbiAgICAgICAgfSk7XHJcbiAgICB9KTtcclxuXHJcbiAgICBmdW5jdGlvbiBoaWdobGlnaHRTdGFycyh2YWx1ZSkge1xyXG4gICAgICAgIHN0YXJzLmZvckVhY2goKHN0YXIsIGluZGV4KSA9PiB7XHJcbiAgICAgICAgICAgIGlmIChpbmRleCA8IHZhbHVlKSB7XHJcbiAgICAgICAgICAgICAgICBzdGFyLmNsYXNzTGlzdC5hZGQoJ3NlbGVjdGVkJyk7XHJcbiAgICAgICAgICAgIH0gZWxzZSB7XHJcbiAgICAgICAgICAgICAgICBzdGFyLmNsYXNzTGlzdC5yZW1vdmUoJ3NlbGVjdGVkJyk7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9KTtcclxuICAgIH1cclxufSk7IiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbImNvbnNvbGUiLCJsb2ciLCJkb2N1bWVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJidXJnZXIiLCJnZXRFbGVtZW50QnlJZCIsIm5hdkxpbmtzIiwiY2xhc3NMaXN0IiwidG9nZ2xlIiwic3RhcnMiLCJxdWVyeVNlbGVjdG9yQWxsIiwibm90ZUlucHV0IiwiZm9ybSIsInNlbGVjdGVkVmFsdWUiLCJmb3JFYWNoIiwic3RhciIsImluZGV4IiwidmFsdWUiLCJoaWdobGlnaHRTdGFycyIsInN1Ym1pdCIsImFkZCIsInJlbW92ZSJdLCJzb3VyY2VSb290IjoiIn0=