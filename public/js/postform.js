let titleInput = document.querySelector("#title");
let slugInput = document.querySelector("#slug");

titleInput.addEventListener("keyup", function(e) {
    slugInput.value = convertToSlug(e.target.value);
});

function convertToSlug(Text)
{
    return Text
        .toLowerCase()
        .replace(/ /g,'-')
        .replace(/[^\w-]+/g,'')
        ;
}

console.log(slugInput)
