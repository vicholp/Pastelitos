function search(){
  let arg = document.querySelector("#searchIngredient").value.split(" ").filter(String);
  let table = document.querySelector("#div-ingredientsAdd")
  fetch(`/admin/ingredients/query/${arg}`, {method: 'GET'})
    .then( function(response) {
        if (response.status !== 200) return false;
        response.json().then(function(data) {
          table.textContent = ""
          console.log(data)
          for (ingredient of data){
            console.log(ingredient)
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
  console.log('add' +  ingredients[arg].name)
  var ingredient = ingredients[arg]
  var table = document.querySelector("#div-ingredients")
  var t = document.querySelector("#template-ingredientAdded").cloneNode(true).content;

  t.querySelector("label").textContent = `${ingredient.name}`
  t.querySelector("input").name = `${ingredient.id}`
  t.querySelector("span").textContent = `${ingredient.unit}`
  t.querySelector("button").setAttribute('onclick',`removeIngredient(${ingredients.indexOf(ingredient)})`);

  table.appendChild(t);
  $('#exampleModal').modal('hide')
}

function removeIngredient(arg){
  console.log('remove' + ingredients[arg].name)

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
