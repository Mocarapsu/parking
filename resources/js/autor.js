document.addEventListener("DOMContentLoaded", function() {
    let texto = document.getElementById("DerechosAutor");

    texto.addEventListener("click", function() {
        let autores = ["Alan Quiñones", "Emir Medrano", "Yafet Bueno", "Derek Martinez"];
        alert("Esta página fue creada por:\n" + autores.join("\n"));
    });
});
