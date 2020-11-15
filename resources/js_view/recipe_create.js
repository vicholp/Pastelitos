document.querySelector("#select-ingredientName").addEventListener('input', function(){
  select = document.querySelector("#select-ingredientName")
  ingredientTemplate = document.querySelector("#template-ingredientRow").cloneNode(true)
  div = document.querySelector("#div-ingredients")
  td = ingredientTemplate.content.querySelectorAll('td')
  td[0].textContent = select.value
  td[1].textContent = select.options[select.selectedIndex].text
  td[2].textContent = "0"

  div.appendChild(ingredientTemplate.content)
})
fetch("admin/ingredients")
