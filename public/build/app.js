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
      console.log("\xC9toile cliqu\xE9e : ".concat(value));
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
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiYXBwLmpzIiwibWFwcGluZ3MiOiI7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7Ozs7O0FBQUE7QUFDQTtBQUNBO0FBQ0E7QUFDQTtBQUNBO0FBQ2lEO0FBQ007QUFDNUI7QUFFM0JBLE9BQU8sQ0FBQ0MsR0FBRyxDQUFDLGdFQUFnRSxDQUFDO0FBRzdFQyxRQUFRLENBQUNDLGdCQUFnQixDQUFDLGtCQUFrQixFQUFFLFlBQVk7RUFDdEQsSUFBTUMsTUFBTSxHQUFHRixRQUFRLENBQUNHLGNBQWMsQ0FBQyxRQUFRLENBQUM7RUFDaEQsSUFBTUMsUUFBUSxHQUFHSixRQUFRLENBQUNHLGNBQWMsQ0FBQyxXQUFXLENBQUM7RUFFckRELE1BQU0sQ0FBQ0QsZ0JBQWdCLENBQUMsT0FBTyxFQUFFLFlBQU07SUFDbkNHLFFBQVEsQ0FBQ0MsU0FBUyxDQUFDQyxNQUFNLENBQUMsUUFBUSxDQUFDO0lBQ25DSixNQUFNLENBQUNHLFNBQVMsQ0FBQ0MsTUFBTSxDQUFDLE1BQU0sQ0FBQztFQUNuQyxDQUFDLENBQUM7QUFDTixDQUFDLENBQUM7QUFHRk4sUUFBUSxDQUFDQyxnQkFBZ0IsQ0FBQyxrQkFBa0IsRUFBRSxZQUFNO0VBQ2hELElBQU1NLEtBQUssR0FBR1AsUUFBUSxDQUFDUSxnQkFBZ0IsQ0FBQyx5QkFBeUIsQ0FBQztFQUNsRSxJQUFNQyxTQUFTLEdBQUdULFFBQVEsQ0FBQ0csY0FBYyxDQUFDLFlBQVksQ0FBQztFQUN2RCxJQUFNTyxJQUFJLEdBQUdWLFFBQVEsQ0FBQ0csY0FBYyxDQUFDLFdBQVcsQ0FBQztFQUVqRCxJQUFJUSxhQUFhLEdBQUcsQ0FBQztFQUVyQkosS0FBSyxDQUFDSyxPQUFPLENBQUMsVUFBQ0MsSUFBSSxFQUFFQyxLQUFLLEVBQUs7SUFDM0IsSUFBTUMsS0FBSyxHQUFHRCxLQUFLLEdBQUcsQ0FBQztJQUV2QkQsSUFBSSxDQUFDWixnQkFBZ0IsQ0FBQyxZQUFZLEVBQUUsWUFBTTtNQUN0Q2UsY0FBYyxDQUFDRCxLQUFLLENBQUM7SUFDekIsQ0FBQyxDQUFDO0lBRUZGLElBQUksQ0FBQ1osZ0JBQWdCLENBQUMsWUFBWSxFQUFFLFlBQU07TUFDdENlLGNBQWMsQ0FBQ0wsYUFBYSxDQUFDO0lBQ2pDLENBQUMsQ0FBQztJQUVGRSxJQUFJLENBQUNaLGdCQUFnQixDQUFDLE9BQU8sRUFBRSxZQUFNO01BQ2pDSCxPQUFPLENBQUNDLEdBQUcsMkJBQUFrQixNQUFBLENBQXFCRixLQUFLLENBQUUsQ0FBQztNQUN4Q0osYUFBYSxHQUFHSSxLQUFLO01BQ3JCTixTQUFTLENBQUNNLEtBQUssR0FBR0EsS0FBSztNQUN2QkMsY0FBYyxDQUFDRCxLQUFLLENBQUM7TUFDckJMLElBQUksQ0FBQ1EsTUFBTSxDQUFDLENBQUM7SUFDakIsQ0FBQyxDQUFDO0VBQ04sQ0FBQyxDQUFDO0VBRUYsU0FBU0YsY0FBY0EsQ0FBQ0QsS0FBSyxFQUFFO0lBQzNCUixLQUFLLENBQUNLLE9BQU8sQ0FBQyxVQUFDQyxJQUFJLEVBQUVDLEtBQUssRUFBSztNQUMzQixJQUFJQSxLQUFLLEdBQUdDLEtBQUssRUFBRTtRQUNmRixJQUFJLENBQUNSLFNBQVMsQ0FBQ2MsR0FBRyxDQUFDLFVBQVUsQ0FBQztNQUNsQyxDQUFDLE1BQU07UUFDSE4sSUFBSSxDQUFDUixTQUFTLENBQUNlLE1BQU0sQ0FBQyxVQUFVLENBQUM7TUFDckM7SUFDSixDQUFDLENBQUM7RUFDTjtBQUNKLENBQUMsQ0FBQyxDOzs7Ozs7Ozs7OztBQzVERiIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL2Fzc2V0cy9hcHAuanMiLCJ3ZWJwYWNrOi8vLy4vYXNzZXRzL3N0eWxlcy9hcHAuc2NzcyJdLCJzb3VyY2VzQ29udGVudCI6WyIvKlxyXG4gKiBXZWxjb21lIHRvIHlvdXIgYXBwJ3MgbWFpbiBKYXZhU2NyaXB0IGZpbGUhXHJcbiAqXHJcbiAqIFRoaXMgZmlsZSB3aWxsIGJlIGluY2x1ZGVkIG9udG8gdGhlIHBhZ2UgdmlhIHRoZSBpbXBvcnRtYXAoKSBUd2lnIGZ1bmN0aW9uLFxyXG4gKiB3aGljaCBzaG91bGQgYWxyZWFkeSBiZSBpbiB5b3VyIGJhc2UuaHRtbC50d2lnLlxyXG4gKi9cclxuaW1wb3J0ICdAZm9ydGF3ZXNvbWUvZm9udGF3ZXNvbWUtZnJlZS9qcy9hbGwuanMnO1xyXG5pbXBvcnQgJ0Bmb3J0YXdlc29tZS9mb250YXdlc29tZS1mcmVlL2Nzcy9hbGwubWluLmNzcyc7XHJcbmltcG9ydCAnLi9zdHlsZXMvYXBwLnNjc3MnO1xyXG5cclxuY29uc29sZS5sb2coJ1RoaXMgbG9nIGNvbWVzIGZyb20gYXNzZXRzL2FwcC5qcyAtIHdlbGNvbWUgdG8gQXNzZXRNYXBwZXIhIPCfjoknKTtcclxuXHJcblxyXG5kb2N1bWVudC5hZGRFdmVudExpc3RlbmVyKCdET01Db250ZW50TG9hZGVkJywgZnVuY3Rpb24gKCkge1xyXG4gICAgY29uc3QgYnVyZ2VyID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ2J1cmdlcicpO1xyXG4gICAgY29uc3QgbmF2TGlua3MgPSBkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnbmF2LWxpbmtzJyk7XHJcblxyXG4gICAgYnVyZ2VyLmFkZEV2ZW50TGlzdGVuZXIoJ2NsaWNrJywgKCkgPT4ge1xyXG4gICAgICAgIG5hdkxpbmtzLmNsYXNzTGlzdC50b2dnbGUoJ2FjdGl2ZScpO1xyXG4gICAgICAgIGJ1cmdlci5jbGFzc0xpc3QudG9nZ2xlKCdvcGVuJyk7XHJcbiAgICB9KTtcclxufSk7XHJcblxyXG5cclxuZG9jdW1lbnQuYWRkRXZlbnRMaXN0ZW5lcignRE9NQ29udGVudExvYWRlZCcsICgpID0+IHtcclxuICAgIGNvbnN0IHN0YXJzID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvckFsbCgnLnJhdGluZy1zdGFycyAuc3Rhci1idG4nKTtcclxuICAgIGNvbnN0IG5vdGVJbnB1dCA9IGRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdub3RlLXZhbHVlJyk7XHJcbiAgICBjb25zdCBmb3JtID0gZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoJ25vdGUtZm9ybScpO1xyXG5cclxuICAgIGxldCBzZWxlY3RlZFZhbHVlID0gMDtcclxuXHJcbiAgICBzdGFycy5mb3JFYWNoKChzdGFyLCBpbmRleCkgPT4ge1xyXG4gICAgICAgIGNvbnN0IHZhbHVlID0gaW5kZXggKyAxO1xyXG5cclxuICAgICAgICBzdGFyLmFkZEV2ZW50TGlzdGVuZXIoJ21vdXNlZW50ZXInLCAoKSA9PiB7XHJcbiAgICAgICAgICAgIGhpZ2hsaWdodFN0YXJzKHZhbHVlKTtcclxuICAgICAgICB9KTtcclxuXHJcbiAgICAgICAgc3Rhci5hZGRFdmVudExpc3RlbmVyKCdtb3VzZWxlYXZlJywgKCkgPT4ge1xyXG4gICAgICAgICAgICBoaWdobGlnaHRTdGFycyhzZWxlY3RlZFZhbHVlKTtcclxuICAgICAgICB9KTtcclxuXHJcbiAgICAgICAgc3Rhci5hZGRFdmVudExpc3RlbmVyKCdjbGljaycsICgpID0+IHtcclxuICAgICAgICAgICAgY29uc29sZS5sb2coYMOJdG9pbGUgY2xpcXXDqWUgOiAke3ZhbHVlfWApO1xyXG4gICAgICAgICAgICBzZWxlY3RlZFZhbHVlID0gdmFsdWU7XHJcbiAgICAgICAgICAgIG5vdGVJbnB1dC52YWx1ZSA9IHZhbHVlO1xyXG4gICAgICAgICAgICBoaWdobGlnaHRTdGFycyh2YWx1ZSk7XHJcbiAgICAgICAgICAgIGZvcm0uc3VibWl0KCk7XHJcbiAgICAgICAgfSk7XHJcbiAgICB9KTtcclxuXHJcbiAgICBmdW5jdGlvbiBoaWdobGlnaHRTdGFycyh2YWx1ZSkge1xyXG4gICAgICAgIHN0YXJzLmZvckVhY2goKHN0YXIsIGluZGV4KSA9PiB7XHJcbiAgICAgICAgICAgIGlmIChpbmRleCA8IHZhbHVlKSB7XHJcbiAgICAgICAgICAgICAgICBzdGFyLmNsYXNzTGlzdC5hZGQoJ3NlbGVjdGVkJyk7XHJcbiAgICAgICAgICAgIH0gZWxzZSB7XHJcbiAgICAgICAgICAgICAgICBzdGFyLmNsYXNzTGlzdC5yZW1vdmUoJ3NlbGVjdGVkJyk7XHJcbiAgICAgICAgICAgIH1cclxuICAgICAgICB9KTtcclxuICAgIH1cclxufSk7IiwiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbImNvbnNvbGUiLCJsb2ciLCJkb2N1bWVudCIsImFkZEV2ZW50TGlzdGVuZXIiLCJidXJnZXIiLCJnZXRFbGVtZW50QnlJZCIsIm5hdkxpbmtzIiwiY2xhc3NMaXN0IiwidG9nZ2xlIiwic3RhcnMiLCJxdWVyeVNlbGVjdG9yQWxsIiwibm90ZUlucHV0IiwiZm9ybSIsInNlbGVjdGVkVmFsdWUiLCJmb3JFYWNoIiwic3RhciIsImluZGV4IiwidmFsdWUiLCJoaWdobGlnaHRTdGFycyIsImNvbmNhdCIsInN1Ym1pdCIsImFkZCIsInJlbW92ZSJdLCJzb3VyY2VSb290IjoiIn0=