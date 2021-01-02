function search(){
  let arg = document.querySelector("#searchIngredient").value.split(" ").filter(String);
  let table = document.querySelector("#div-ingredientsAdd")
  if (arg === ""){
    return false;
  }
  fetch(`/admin/api/ingredients/query/${arg}`, {method: 'GET'})
    .then( function(response) {
        if (response.status !== 200) return false;
        response.json().then(function(data) {
          table.textContent = ""
          console.log(data)
          for (let ingredient of data){
            if (recipe_ingredients.includes(ingredient.id)){
              continue;
            }
            let t = document.querySelector("#template-ingredientAdd").cloneNode(true).content;

            t.querySelector("h5").textContent = `${ingredient.name}`
            t.querySelector("button").setAttribute('onclick',`add(${ingredient.id})`);

            table.appendChild(t);
          }
          $('#exampleModal').modal('show')
        });
      }
    )
    .catch(function(err) {
      return false;

    });
}


function add(arg){

  fetch(`/admin/api/ingredients/${arg}`, {method: 'GET'})
    .then( function(response) {
        if (response.status !== 200) return false;
        response.json().then(function(data) {
          let ingredient = data

          if (recipe_ingredients.includes(data.id)){
            return false;
          }

          let table = document.querySelector("#div-ingredients")
          let t = document.querySelector("#template-ingredientAdded").cloneNode(true).content;

          t.querySelector(".div-ingredient").setAttribute('data-ingredient', ingredient.id)
          t.querySelector("label").textContent = `${ingredient.name}`
          t.querySelector("input").name = `${ingredient.id}`
          t.querySelector("span").textContent = `${ingredient.unit}`
          t.querySelector("button").setAttribute('onclick',`removeIngredient(${ingredient.id})`);

          table.appendChild(t);
        });
      }
    )
    .catch(function(err) {
      return false;

    });

}

function removeIngredient(arg){
  console.log('remove' + arg)

  let e = document.querySelector(`[data-ingredient="${arg}"]`)
  e.parentNode.removeChild(e);
}

function listSearch(needles, haystacks) {
  return haystacks.filter((h) => {
    var string = h.name.toString().toLowerCase();
    var a = needles.filter((e) => {
      if (string.indexOf(e) !== -1) return e;
    });
    if (a.length === needles.length) return h;
  });
}
