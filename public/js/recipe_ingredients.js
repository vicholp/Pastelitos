(self["webpackChunk"] = self["webpackChunk"] || []).push([["/js/recipe_ingredients"],{

/***/ "./resources/js_view/recipe_ingredients.js":
/*!*************************************************!*\
  !*** ./resources/js_view/recipe_ingredients.js ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var bootstrap_js_dist_modal__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! bootstrap/js/dist/modal */ "./node_modules/bootstrap/js/dist/modal.js");
/* harmony import */ var bootstrap_js_dist_modal__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(bootstrap_js_dist_modal__WEBPACK_IMPORTED_MODULE_0__);
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }



window.search = function search() {
  var arg = document.querySelector("#searchIngredient").value.split(" ").filter(String);
  var table = document.querySelector("#div-ingredientsAdd");

  if (arg === "") {
    return false;
  }

  fetch("/admin/api/ingredients/query/".concat(arg), {
    method: 'GET'
  }).then(function (response) {
    if (response.status !== 200) return false;
    response.json().then(function (data) {
      table.textContent = "";
      console.log(data);

      var _iterator = _createForOfIteratorHelper(data),
          _step;

      try {
        for (_iterator.s(); !(_step = _iterator.n()).done;) {
          var ingredient = _step.value;

          if (recipe_ingredients.includes(ingredient.id)) {
            continue;
          }

          var t = document.querySelector("#template-ingredientAdd").cloneNode(true).content;
          t.querySelector("h6").textContent = "".concat(ingredient.name);
          t.querySelector("a").setAttribute('onclick', "add(".concat(ingredient.id, ")"));
          table.appendChild(t);
        }
      } catch (err) {
        _iterator.e(err);
      } finally {
        _iterator.f();
      }

      var myModal = new (bootstrap_js_dist_modal__WEBPACK_IMPORTED_MODULE_0___default())('#modal-ingredientsSearch');
      myModal.show();
    });
  })["catch"](function (err) {
    return false;
  });
};

window.add = function add(arg) {
  fetch("/admin/api/ingredients/".concat(arg), {
    method: 'GET'
  }).then(function (response) {
    if (response.status !== 200) return false;
    response.json().then(function (data) {
      var ingredient = data;

      if (recipe_ingredients.includes(data.id)) {
        return false;
      }

      recipe_ingredients.push(data.id);
      var table = document.querySelector("#div-ingredients");
      var t = document.querySelector("#template-ingredientAdded").cloneNode(true).content;
      t.querySelector(".div-ingredient").setAttribute('data-ingredient', ingredient.id);
      t.querySelector("h6").textContent = "".concat(ingredient.name);
      t.querySelector("input").name = "".concat(ingredient.id);
      t.querySelector("span").textContent = "".concat(ingredient.unit);
      t.querySelector("button").setAttribute('onclick', "removeIngredient(".concat(ingredient.id, ")"));
      table.appendChild(t);
    });
  })["catch"](function (err) {
    return false;
  });
};

window.removeIngredient = function removeIngredient(arg) {
  console.log('remove' + arg);
  var index = recipe_ingredients.indexOf(arg);

  if (index > -1) {
    recipe_ingredients.splice(index, 1);
  }

  var e = document.querySelector("[data-ingredient=\"".concat(arg, "\"]"));
  e.parentNode.removeChild(e);
};

function listSearch(needles, haystacks) {
  return haystacks.filter(function (h) {
    var string = h.name.toString().toLowerCase();
    var a = needles.filter(function (e) {
      if (string.indexOf(e) !== -1) return e;
    });
    if (a.length === needles.length) return h;
  });
}

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ "use strict";
/******/ 
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["/js/vendor"], () => (__webpack_exec__("./resources/js_view/recipe_ingredients.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);