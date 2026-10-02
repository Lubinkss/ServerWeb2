const source = document.getElementById("recherche");


// source.value = source.textContent;

function toggleTableRows(  ) {
document.querySelectorAll(".table_row").forEach((tr)=>{
tr.style.display = tr.innerText.includes(source.value) ? '' : 'none';
});
}

